<!doctype html>
<html lang="en">
<head>
    <title>Laravel Blog</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
  	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href="/css/signin.css" rel="stylesheet">
    <style type="text/css">

    .row {
        width: 1000px;
        margin: auto;
    }

    body {
        width: 1000px;
        margin: auto;

    }

    h1, h2, {
        text-align: left;
        padding: 0px;
        width: 1000px;
    }

    h4 {
        
        padding: 0px;
        width: 1000px;
    }

    .blog-post {
        position: left;
    }

    #menu {
        float: left;
        position: fixed;
        top: 0px;
        left: 0px;
        margin-top: 35px;
        padding: 10px;
        width: 150px;
        margin-left: 20px;

        
    }
    
    .menuColor {
        color: #c93131;
    }

    .help-block {
        color: #F00;
    }
    a:hover {
        text-decoration: none;
        color: #000;
    }

    .box {
       
        background-color: #c93131;
    }

    .glyphicon {
        font-size: 50px;
        text-align: center;
        margin: auto;
        color: #c93131;


    }

    .upper {
        width: auto;
        height: 120px;
    }




    </style>
</head>
<body>


    <div id="menu">
        {{ Form::open(array('action' => array('PostsController@index'), 'method' => 'GET' )) }}
        {{ Form::text('search') }}
        {{ Form::submit('Search') }}
        {{ Form::close() }}
        @if(Auth::check())
        <h5>Log Out <br><p>({{{Auth::user()->email}}})</p></h5>
                <p><a href="{{{ action('HomeController@logout') }}}"><i class="fa fa-asterisk glyphicon"></i></a></i></p>
        @else
        <h5>Log In</h5>
                <p><a href="{{{ action('HomeController@showLogin') }}}"><i class="fa fa-asterisk glyphicon"></i></a></i></p>
        @endif
        <h5>Blog</h5>
                <p><a href="{{{ action('PostsController@index')}}}"><i class="fa fa-list glyphicon"></i></a></p>
        <!-- <h4><a class="menuColor">Home</a></h4> -->
        <h5>Resume</h5>
                <p><a href="{{{ action('HomeController@showResume')}}}"><i class="fa fa-align-justify glyphicon"></i></a></p>
        <h5>Portfolio</h5>
                <p><a href="{{{ action('HomeController@showPortfolio')}}}"><i class="fa fa-th-large glyphicon"></i></a></p>
        <h5>GitHub</h4>
                <p><a href="https://github.com/Starnes81"><i class="fa fa-github-alt glyphicon"></a></i></p>
        <h5>LinkedIn</h5>
                <p><a href="http://www.linkedin.com/in/stevenstarnes/"><i class="fa fa-linkedin-square glyphicon"></i></a></p>
        <h5>Contact<h5>
                <p><a href=""><i class="fa fa-envelope glyphicon"></a></i></p>
    </div>
  
    <div class="upper centered">
	   <h1>Steven Starnes |  A Developing Photographer</h1>
        
    </div>
    
    <hr>
        @if (Session::has('successMessage'))
        <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
        @endif
        @if (Session::has('errorMessage'))
            <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
        @endif
    @yield('portfolio')
    @yield('content')
    <hr>
    

    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
@yield('bottom-script')
</body>
</html>