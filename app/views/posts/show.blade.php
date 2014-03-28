@extends('layouts.master')

@section('content')
<h1>{{{ $post->title }}}</h1>
<p> {{{ $post->body }}}</p>

<hr>

<p><a href="{{{action('PostsController@index') }}}">Return to Posts</a></p>

<p><a href="" id="btnDeletePost">Delete Post</a></p>

{{Form::open(array('action'=> array('PostsController@destroy', $post->id), 'method' => 'delete', 'id' => 'formDeletePost' )) }}
{{Form::close()}}

 @stop

 @section('bottom-script')

 <script type="text/javascript">
$('#btnDeletePost').on('click', function (e){
	e.preventDefault();
	if (confirm('Are you sure you want to delete this post?')){
		$('#formDeletePost').submit();
	}
});


 </script>

 @stop