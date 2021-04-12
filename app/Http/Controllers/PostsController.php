<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    function loadView() {
        return view('posts', ["posts"=>["Post 1", "Post 2", "Post 3", "Post 4", "Post 5", "Post 6", "Post 7"]]);
    }
}
