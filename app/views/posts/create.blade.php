@extends('layouts.master')
<!doctype html>
<html lang="en">
<head>
    <title>Create Post</title>
</head>
<body>
@section('content')
	<div class="blog-post">

      {{ Form::open(array('action' => 'PostsController@store', 'class' => 'form-horizontal', 'files' => true)) }}

	  <div class="form-group">


			
			


	    
	    <div class="col-sm-10">
	      {{ Form::label('title', 'Title', array('class'=> 'col-sm-2 control-label')) }}
		  {{ Form::text('title') }}
	      {{$errors->has('title') ? $errors->first('title', '<p><span class="help-block">:message</span></p>') : '' }}
	    </div>
	  </div>
	  <div class="form-group">
	    
	    <div class="col-sm-10">
	        {{ Form::label('body', 'Body', array('class'=> 'col-sm-2 control-label')) }}
			{{ Form::textarea('body', null, array('row' => '5')) }}
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
	      <button type="submit" class="btn btn-default">Post</button>
	    </div>
	  </div>
	{{ Form::close() }}

    </div> <!-- /container -->
   
@stop

</body>
</html>