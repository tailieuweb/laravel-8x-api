<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Validator;


use Illuminate\Http\Request;
class ProductController extends Controller
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
                'secret' => $this->login($user->email, '123456')
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
        $result = $this->curlProduct($input);
        $data = json_decode($result);
        return redirect('/');
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

        return view('product.detail', ['product' => $product]);
    }
}
