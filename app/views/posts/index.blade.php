@extends('layouts.master')


@section('content')
	{{ Form::open(array('action' => array('PostsController@index'), 'method' => 'GET' )) }}
    	{{ Form::label('search', 'Search Posts') }}
    	{{ Form::text('search') }}
    	{{ Form::submit('Search') }}
    {{ Form::close() }}
@foreach ($posts as $post)

	<div class="blog-post">
		<h2><a href="{{{ action('PostsController@show', $post->id) }}}">{{$post->title}}</a></h2>
		<p>{{ Str::words($post->body, 10) }}</p>
		<p>{{ $post->created_at->format('l, F jS Y @ h:i:s A')}}</p>
		
		
	
	</div>

	<hr>
	

@endforeach
		{{ $posts->links() }}
		<p><a href="{{ action('PostsController@create') }}"> Create new post</a></p>
@stop