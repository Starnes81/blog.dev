@extends('layouts.master')


@section('content')
@foreach ($posts as $post)
	<div class="blog-post">
		<h2><a href="{{{ action('PostsController@show', $post->id) }}}">{{$post->title}}</h2>
		
	
	</div>

	<hr>
	

@endforeach
		<p><a href="{{ action('PostsController@create') }}"> Create new post</a></p>
@stop