<?php


namespace App\Http\Controllers\API;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;

use Illuminate\Support\Facades\App;
use Foostart\Category\Helpers\FoostartCategory;


class BaseController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendResponse($result, $message)
    {
    	$response = [
            'success' => true,
            'data'    => $result,
            'message' => $message,
        ];


        return response()->json($response, 200);
    }


    /**
     * return error response.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendError($error, $errorMessages = [], $code = 404)
    {
    	$response = [
            'success' => false,
            'message' => $error,
        ];


        if(!empty($errorMessages)){
            $response['data'] = $errorMessages;
        }


        return response()->json($response, $code);
    }

    /**
     * //TODO: cache user info
     * Get current logged user info
     * @return ARRAY user info
     * @date 28/12/2017
     */
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
