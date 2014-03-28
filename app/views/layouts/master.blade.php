<!doctype html>
<html lang="en">
<head>
    <title>Laravel Blog</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
  	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
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
        color: #F00;
    }

    .help-block {
        color: #F00;
    }
    a:hover {
        text-decoration: none;
        color: #000;
    }

    .box {
        height: 200px;
        width: 150px;
        background-color: #c93131;
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


	<h1>Steven Starnes</h1>
    <h2>A Developing Photographer</h2>
    <hr>
    @yield('portfolio')
    @yield('content')
    <hr>
    <div class="services-wrap  center">
        <br>
        <div class="row">
            
            <div class="col-lg-3  callout">
                <span class="icon  icon-screen"></span>
                <h2>Web Design.</h2> <!-- Title -->
                <p>That tall drink of water with the silver spoon up his ass. you measure yourself by the people who measure themselves by you.</p> <!-- Description -->
            </div><!-- col-lg-3 -->
					
            <div class="col-lg-3  callout">
                <span class="icon  icon-quill"></span>
                <h2>Branding.</h2>
                <p>Well, what is it today? more spelunking? mister wayne, if you don't want to tell me exactly what you're doing, when i'm asked.</p>
            </div><!-- col-lg-3 -->	
				
            <div class="col-lg-3  callout">
                <span class="icon  icon-cogs"></span>
                <h2>Development.</h2>
                <p>Your entrance was good, his was better. we got no food we got no money and our pets heads are falling off!</p>
            </div><!-- col-lg-3 -->	
                
            <div class="col-lg-3  callout">
                <span class="icon  icon-droplet"></span>
                <h2>Illustration.</h2>
                <p>Brain freeze. i just heard about evans new position,good luck to you evan backstabber, bastard, i mean baxter.</p>
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