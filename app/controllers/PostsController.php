<?php

class PostsController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// $name = Input::has('test');

		// Log::info('This is some useful information.');

		// Log::warning('Something could be going wrong.');

		// Log::error('Something is really going wrong.');

		$posts = Post::all();
		return View::make('posts.index')->with('posts',$posts);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.create'); 
	}
	

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		// create the validator
    	$validator = Validator::make(Input::all(), Post::$rules);

    	if ($validator->fails())
    	{
    	    // validation failed, redirect to the post create page with validation errors and old inputs
    	    return Redirect::back()->withInput()->withErrors($validator);
    		}
    		else
    		{

			$post = new Post();
			$post->title = Input::get('title');
			$post->body = Input::get('body');
	
			$post->save();
	
			return Redirect::action('PostsController@index');
			// return Redirect::action('PostsController@create')->withInput();
			// return Redirect::action('PostsController@Index')->withInput();
			// app::abort(404);
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = post::findOrFail($id);
		return View::make('posts.show')->with('post', $post);
	}
	

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = post::findOrFail($id);
		return View::make('post.edit')->with('post', $post);
	}
	

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		// route::get('post',);
	}
	

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		return "this is index action";
	}
	

}