<?php

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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/**
 *
 */
Route::get('/about', function () {
//    return view('welcome');\
    return "About Page";
});

/**
 *
 */
Route::get('/contact', function () {
//    return view('welcome');
    return 'Concat Page';
});

/**
 *
 */
Route::get('/post/{id}/{name}', function ($id, $name) {
//    return view('welcome');
    return "Post {$id} user {$name}";
});

Route::get('admin/posts/example', ['as' => 'admin.home' , function() {
    $url = route('admin.home');

    return "This URL is {$url}";
}]);
