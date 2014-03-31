<!doctype html>
<html lang="en">
<head>
    <title>Laravel Blog</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
  	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <style type="text/css">

    .row {
        width: 1000px;
        margin: auto;
    }

    body {
        width: 1000px;
        margin: auto;

    }

    h1, h2 {
        text-align: left;
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
        margin-top: 150px;
        padding: 10px;
        
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
        font-size: 100px;
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
        <h4><a class="menuColor">Home</a></h4>
        <h4><a class="menuColor" href="{{{ action('HomeController@showResume')}}}">Resume</a></h4>
        <h4><a class="menuColor" href="{{{ action('HomeController@showPortfolio')}}}">Portfolio</a></h4>
        <h4><a class="menuColor" href="{{{ action('PostsController@index')}}}">Blog</a></h4>
    </div>

    <div class="upper centered">
	   <h1>Steven Starnes |  A Developing Photographer</h1>
        
    </div>
    <div class="services-wrap  center">
        <br>
        <div class="row">
            
            <div class="col-lg-3  callout">
                <span class="icon  icon-screen"></span>
                <h2>Home</h2> <!-- Title -->
                <p><i class="fa fa-home glyphicon"></i></p> <!-- Description -->
            </div><!-- col-lg-3 -->
                    
            <div class="col-lg-3  callout">
                <span class="icon  icon-quill"></span>
                <h2>Resume</h2>
                <p><a href="{{{ action('HomeController@showResume')}}}"><i class="fa fa-align-justify glyphicon"></i></a></p>
            </div><!-- col-lg-3 --> 
                
            <div class="col-lg-3  callout">
                <span class="icon  icon-cogs"></span>
                <h2>Portfolio</h2>
                <p><a href="{{{ action('HomeController@showPortfolio')}}}"><i class="fa fa-th-large glyphicon"></i></a></p>
            </div><!-- col-lg-3 --> 
                
            <div class="col-lg-3  callout">
                <span class="icon  icon-droplet"></span>
                <h2>Blog</h2>
                <p><i class="fa fa-list glyphicon"></i></p>
            </div><!-- col-lg-3 --> 
            
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
    <div class="services-wrap  center">
        <br>
        <div class="row">
            
            <div class="col-lg-3  callout">
                <span class="icon  icon-screen"></span>
                <h2>Contact</h2> <!-- Title -->
                <p><i class="fa fa-envelope glyphicon"></i></p> <!-- Description -->
            </div><!-- col-lg-3 -->
					
            <div class="col-lg-3  callout">
                <span class="icon  icon-quill"></span>
                <h2>Twitter</h2>
                <p><i class="fa fa-twitter glyphicon"></i></span></p>
            </div><!-- col-lg-3 -->	
				
            <div class="col-lg-3  callout">
                <span class="icon  icon-cogs"></span>
                <h2>GitHub</h2>
                <p><i class="fa fa-github-alt glyphicon"></i></p>
            </div><!-- col-lg-3 -->	
                
            <div class="col-lg-3  callout">
                <span class="icon  icon-droplet"></span>
                <h2>LinkedIn</h2>
                <p><i class="fa fa-linkedin-square glyphicon"></i></p>
            </div><!-- col-lg-3 -->	
            
        </div>
        <br>

    </div>

    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
@yield('bottom-script')
</body>
</html>