<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/custom-file', function () {
    return view('hello');
});

// Route::get('/user', function () {
//     return view('users');
// });

Route::get('user', [UserController::class, 'show']);
Route::get('load-view', [UserController::class, 'loadeView']);
Route::get('/user/{name}', function($name) {
    return view('users', ["user_name"=>$name]);
});
