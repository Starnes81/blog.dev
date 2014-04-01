<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/', 'HomeController@showWelcome');


Route::get('/login', 'HomeController@showLogin');
Route::post('/login', 'HomeController@doLogin');

Route::get('/logout', 'HomeController@logout');

Route::get('/resume', 'HomeController@showResume');

Route::get('/portfolio', 'HomeController@showPortfolio');

Route::get('/create', 'HomeController@showCreate');

Route::resource('posts', 'PostsController');

Route::get('posts', 'PostsController@index');


Route::get('index', function() {

	$post1 = new Post();
	$post1->title = "Eloquent is awesome!";
	$post1->body = "It is super easy to create a new post.";
	$post1->save();
});
// Route::get('test', function() {
// 	$post = new Post();
// 	$post->user_id = "Post number two";
// 	$post->body = "The body for post number two.";
// 	$post->save();
	

// 	// $post->delete();
// 	// foreach ($posts as $post) {
// 	// 	echo '<h2>' . $post->title . '</h2>' . '<p>' . $post->body . '</p>';
// 	// }$posts;
// });
