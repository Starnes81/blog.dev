@extends('layouts.master')
<!doctype html>
<html lang="en">
<head>
    <title>Laravel Blog</title>
</head>
<body>
	<h2><a href="{{{ action('HomeController@showPortfolio') }}}">Portfolio</a></h2>
   	 

@section('resume')
   
@stop
</body>
</html>