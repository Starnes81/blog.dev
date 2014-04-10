@extends('layouts.master')
<!doctype html>
<html lang="en">
<head>
    <title>Edit Post</title>
    <script src="/ckeditor/ckeditor.js"></script>
</head>
<body>
@section('content')
	<div class="blog-post">

      {{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method'=> 'put', 'class' => 'form-horizontal', 'files' => true)) }}

	  <div class="form-group">							    
	    <div class="col-sm-10">
	      {{ Form::label('title', 'Title', array('row' => '10')) }}
		  {{ Form::text('title', null, array('row' => '10')) }}
	      {{$errors->has('title') ? $errors->first('title', '<p><span class="help-block">:message</span></p>') : '' }}
	    </div>
	  </div>
	  <div class="form-group">
	    
	    <div class="col-sm-10">
	      {{ Form::label('body', 'Body') }}
			{{ Form::textarea('body', null, array('id' => 'body', 'row' => '10', 'cols' => '80' )) }}
		  <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'body' );
              </script>
	      {{$errors->has('body') ? $errors->first('body', '<p><span class="help-block">:message</span></p>') : '' }}
	    </div>
	  </div>
	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	     	{{ Form::label('Upload Image') }}
	  		{{ Form::file('image') }}
	    </div>
	  </div>
	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="submit" class="btn btn-default">Save Changes</button>
	    </div>
	  </div>
{{ Form::close() }}
    </div> <!-- /container -->
   
@stop

</body>
</html>