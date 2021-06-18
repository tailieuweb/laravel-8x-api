<?php

namespace App\Http\Controllers;

use Foostart\Category\Helpers\FoostartCategory;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Validator;
use Foostart\Category\Library\Controllers\FooController;
use Foostart\Category\Models\Category;
use View, Redirect, App, Config;

use GuzzleHttp\Client;

use Illuminate\Http\Request;
class ProductController extends FooController
{
    public function index() {
        $products = Product::all();

        return view('product.list', ['products' => $products]);
    }

    public function manage() {
        $users = User::all();

        $accounts = [];
        foreach ($users as $user) {
            $accounts[] = [
              'id'  => $user->id,
              'name'  => $user->name,
                'email' => $user->email,
                'secret' => $this->login($user->email, '123456789')
                ];
        };
        return view('product.manage', ['accounts' => $accounts]);
    }

    public function post() {
        return view('product.post', []);
    }
    public function send(Request $request) {
        $input = $request->all();
        $input['url'] = env('SEND_URL');

        //$result = $this->curlProduct($input);

        $this->apicall($input);


        return redirect('/');
    }

    public function apicall($input) {

        try {
            $http = new Client;
            $response = $http->post($input['url'], [
                'headers'=> [
                    'Content-Type' => 'application/json',
                    'Authorization' => 'Bearer  ' . $input['token']
                ],
                'body' => json_encode([
                    'name' => $input['name'],
                    'detail' => $input['detail']
                ]),
            ]);
            return json_decode((string) $response->getBody(), true);
        } catch (Exception $e) {
            return response()->json("unauthorized", 401);
        }
    }

    public function about() {

    }

    public function login($email, $password)
    {
        if(Auth::attempt(['email' => $email, 'password' => $password])){
            $user = Auth::user();
            $success['token'] =  $user->createToken('MyApp')-> accessToken;
            $success['name'] =  $user->name;
            $success['status'] = '1';

            return $success;
        }
        else{
            $success = [];
            $success['status'] = '0';
            return $success;
        }
    }

    public function detail(Request $request, int $id) {

        $product = Product::find($id);
        $user = $this->getUser($product->created_user_id);
        $level = $user->user_profile();

        $level_id = $level->first()->level_id;

        $obj_category = new Category();
        $params = ['id' => $level_id];
        $category = $obj_category->selectItem($params);

        //
        $user = $this->getUser($user->id);
        $user = $user->toArray();

        $category_name = $user['department'][$user['user_profile']['category_id']];

        //

        return view('product.detail', ['product' => $product, 'category' => $category_name]);
    }

    public function signuptoken(Request $request) {

        $enable_captcha = Config::get('acl_base.captcha_signup');
        $captcha = App::make('captcha_validator');


        return view('product.signuptoken', ['request' => $request, 'captcha' => $captcha]);
    }

    public function getUser($id = NULL) {

        $authentication = \App::make('authenticator');
        $profile_repository = \App::make('profile_repository');

        $user = $authentication->getUserById($id);

        $user['user_profile'] = $profile_repository->getFromUserId($user['id'])->toArray();
        $user['department'] = $this->department();

        return $user;
    }

    public function department() {
        //Load category
        $obj_category = new FoostartCategory();
        $params_department = $params_level = [];

        $params_department['_key'] = $obj_category->getContextKeyByRef('user/department');
        $params_level['_key'] = $obj_category->getContextKeyByRef('user/level');

        $pluck_select_category_department = $obj_category->pluckSelect($params_department);
        $pluck_select_category_level = $obj_category->pluckSelect($params_level);

        return $pluck_select_category_department;
    }
}
