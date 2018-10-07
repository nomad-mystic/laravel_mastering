<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

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

//Route::get('/', function () {
//
//
//
//    return view('welcome');
//});

// Post Route
//Route::get('/post/{id}', 'Posts\PostController@index');

//Route::resource('posts', 'Posts\PostController');

Route::get('/contact', 'Posts\PostController@contact');

//Route::get('/post/{id}/{name}', 'Posts\PostController@showPost');



//
//Route::get('/about', function () {
//    return view('about.about');
//});
//
//Route::get('/contact', function () {
//    return view('welcome');
//});
//
///**
// * @param string
// * @param callback
// */
//Route::get('/post/{id}', function (int $id):string {
//    return "This is the id of the post {$id}";
//});
//
//
//Route::get('/admin/posts/example', ['as' => 'admin.home', function () {
//
//    $url = route('admin.home');
//
//    return $url;
//}]);

Route::get('/insert/{title}/{content}', function(Request $request, String $title, String $content) {
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

Route::get('/read', function(Request $request) {

	$query = 'SELECT * FROM posts WHERE id = ?';

	$results = DB::select($query, [
		1,
	]);

	foreach ($results as $result) {
		print_r($result->id);
		print_r($result->title);
		print_r($result->content);
	}
});

Route::get('/update', function() {
	$updatedTitle = 'Updated Title 2';
	$updated = DB::update('UPDATE posts SET title = ? WHERE id = ?', [$updatedTitle, 2,]);

	return $updated;
//	var_dump($updated);

});


Route::get('/delete', function() {

	$deleted = DB::delete('DELETE FROM posts WHERE id = ?', [1]);

	return $deleted;
});

// ORM
Route::get('/find', function() {
	// Finds all records in the posts model
	$posts = Post::all();

	// finds one record from posts model
	$post = Post::find(2);

	return $post;
//	foreach ($posts as $post) {
//		print_r($post);
//		echo $post->title . PHP_EOL;
////		echo "\n";
////		print_r("\n");
//	}
});

Route::get('/findWhere/{id}', function(Request $request, Int $id):String {

	// returns an array with and object inside
	$post = Post::where('id', $id)->orderBy('id', 'desc')->take(1)->get();

//	var_dump($post);

//	$title = $post->title;
	return $post[0]->title;
});

Route::get('/findMore', function() {
	$posts = Post::findOrFail(2);

//	$posts = Post::where("users_count" . '<', 50)->firstOrFail();
//	var_dump($posts);

	return $posts;
});


Route::get('basicInsert', function() {

	$post = Post::find(2);

	$post->title = 'new ORM title 2';
	$post->content = 'This is really cool';

	$post->save();
});

/**
 * @param string
 * @param callback
 */
Route::get('/create', function() {
	Post::create([
		'title' => 'PHP create method',
		'content' => 'This is the create method in PHP Laravel',
	]);
});

Route::get('/updateWithMethod', function() {

	Post::where('id', 2)->where('is_admin', 0)->update([
		'title' => 'new PHP title',
		'content' => 'New PHP content update method',
	]);
});

Route::get('/deleteByElo', function():void {
	$post = Post::find(2);

	$post->delete();
});

Route::get('/softDelete', function() {

});


Route::get('/createPosts', function() {
	$posts = factory(App\Models\Post::class, 10)->create();
//	return $posts;
});










