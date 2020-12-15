<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index() {
        
        $obj = new User();
        $users = User::paginate(10);
       
        return view('users.list', ['users' => $users]);
    }
}
