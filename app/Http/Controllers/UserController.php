<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function show() {
        return "From Controller";
    }

    function loadeView($user_name) {
        return view('users', ['user_name'=>$user_name]);
    }
}
