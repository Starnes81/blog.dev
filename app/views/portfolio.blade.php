@extends('layouts.master')
<!doctype html>
<html lang="en">
<head>
    <title>Laravel Blog</title>
</head>
<body>
	<h2><a href="{{{ action('HomeController@showResume') }}}">Resume</a></h2>
   

@section('portfolio')
   
@stop

</body>
</html>