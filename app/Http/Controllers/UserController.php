<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function show() {
        return "From Controller";
    }

    function loadeView() {
        return view('users');
    }
}
