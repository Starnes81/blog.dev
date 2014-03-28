@extends('layouts.master')
<!doctype html>
<html lang="en">
<head>
    <title>Edit Post</title>
</head>
<body>
@section('content')
	<div class="blog-post">

      {{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method'=> 'put', 'class' => 'form-horizontal')) }}

	  <div class="form-group">							    
	    <div class="col-sm-10">
	      {{ Form::label('title', null, array('class'=> 'col-sm-2 control-label')) }}
		  {{ Form::text('title') }}
	      {{$errors->has('title') ? $errors->first('title', '<p><span class="help-block">:message</span></p>') : '' }}
	    </div>
	  </div>
	  <div class="form-group">
	    
	    <div class="col-sm-10">
	      {{ Form::label('body', null, array('class'=> 'col-sm-2 control-label')) }}
			{{ Form::textarea('body', null, array('row' => '10')) }}
	      {{$errors->has('body') ? $errors->first('body', '<p><span class="help-block">:message</span></p>') : '' }}
	    </div>
	  </div>
	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	     
	    </div>
	  </div>
	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="submit" class="btn btn-default">Save Changes</button>
	    </div>
	  </div>
	</form>

    </div> <!-- /container -->
   
@stop

</body>
</html>