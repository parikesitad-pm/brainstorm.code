<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
    return view('pages.home', ['title' => "Dashboard"]);
});
Route::get('/blog', function () {
    return view('pages.blog', ['title' => "Blog Page"]);
});


Route::get('/about', function () {
    return view(
        'pages.about',
        [
            "title" => " About",
            "name" => "ParikesitAD",
            "email" => "parikesit.ad@gmail.com"
        ],
    );
});
Route::get('/signIn', function () {
    return view('pages.signin', ['title' => "SignIn Page"]);
});
Route::get('/signUp', function () {
    return view('pages.signup', ['title' => "SignUp Page"]);
});

Route::get('/posts', [PostController::class, 'index']);
Route::get('posts/{slug}',[PostController::class, 'show']);
