<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/about', function () {
    return view('about.about');
});

Route::get('/contact', function () {
    return view('welcome');
});

/**
 * @param string
 * @param callback
 */
Route::get('/post/{id}', function (int $id):string {
    return "This is the id of the post {$id}";
});


Route::get('/admin/posts/example', ['as' => 'admin.home', function () {

    $url = route('admin.home');

    return $url;
}]);

