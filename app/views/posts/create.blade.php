@extends('layouts.master')
<!doctype html>
<html lang="en">
<head>
    <title>Laravel Blog</title>
</head>
<body>
@section('content')
	<div class="blog-post">

      <form class="form-horizontal" role="form" method="POST" action="{{{ action('PostsController@store')}}}">
	  <div class="form-group">
	    <label for="title" class="col-sm-2 control-label">Title</label>
	    <div class="col-sm-10">
	      <input type="title" class="form-control" id="title" name="title" placeholder="Subject" value="{{{Input::old('title')}}}">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="body" class="col-sm-2 control-label">Body</label>
	    <div class="col-sm-10">
	      <textarea type="body" class="form-control" id="body" name="body" rows="10">{{{Input::old('body')}}}</textarea>
	    </div>
	  </div>
	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	     
	    </div>
	  </div>
	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="submit" class="btn btn-default">Post</button>
	    </div>
	  </div>
	</form>

    </div> <!-- /container -->
   
@stop

</body>
</html>