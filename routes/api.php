<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
	var_dump($request);
    return $request->user();
});


Route::Post('/insert', function(Request $request, String $title, String $content) {
//	var_dump($request);
	$query = 'INSERT INTO posts(title, content) values(?, ?)';
	/**
	 * @var TYPE_NAME $query
	 */
	DB::insert($query, [
		$title,
		$content,
	]);
});