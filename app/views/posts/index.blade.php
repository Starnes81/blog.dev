@extends('layouts.master')


@section('content')
@foreach ($posts as $post)
	<div class="blog-post">
		<h2><a href="{{{ action('PostsController@show', $post->id) }}}">{{$post->title}}</a></h2>
		<p>Created: {{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A')}}</p>
		<hr>
		
	
	</div>

	<hr>
	

@endforeach
		{{ $posts->links() }}
		<p><a href="{{ action('PostsController@create') }}"> Create new post</a></p>
@stop