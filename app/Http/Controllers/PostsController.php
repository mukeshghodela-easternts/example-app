<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    function loadView() {
        return view('posts', ["posts"=>["Post 1", "Post 2", "Post 3"]]);
    }
}
