<?php

class PostsController extends BaseController {


	public function __construct()
	{
	    // call base controller constructor
	    parent::__construct();
	
	    // run auth filter before all methods on this controller except index and show
	    $this->beforeFilter('auth.basic',['except' => ['index', 'show']]);
	}


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

		$posts = Post::orderBy('created_at', 'desc')->paginate(3);
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
    		Session::flash('successMessage', 'Post could not be created - see form errors');
    	    // validation failed, redirect to the post create page with validation errors and old inputs
    	    return Redirect::back()->withInput()->withErrors($validator);
    		}
    		else
    		{

			$post = new Post();
			$post->title = Input::get('title');
			$post->body = Input::get('body');
	
			$post->save();
	
			Session::flash('successMessage', 'Post created successfully');
			return Redirect::action('PostsController@index');
			
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
		$post = Post::findOrFail($id);
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
		$post = Post::findOrFail($id);
		return View::make('posts.edit')->with('post', $post);
	}
	

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{

		$post = Post::findOrFail($id);


		$validator = Validator::make(Input::all(), Post::$rules);

    	if ($validator->fails())
    	{
    		Session::flash('successMessage', 'Post could not be created - see form errors');
    	    // validation failed, redirect to the post create page with validation errors and old inputs
    	    return Redirect::back()->withInput()->withErrors($validator);
    		}
    		else
    		{

			$post->title = Input::get('title');
			$post->body = Input::get('body');
	
			$post->save();
			Session::flash('successMessage', 'Post Updated successfully');
			return Redirect::action('PostsController@index');
			
		}
	}
	

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		
			Post::find($id)->delete();
    		Session::flash('successMessage', 'Post Deleted successfully');
    	    

			return Redirect::action('PostsController@index');
	}
	

}