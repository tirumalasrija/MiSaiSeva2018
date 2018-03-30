<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>MISAISEVA</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/modern-business.css" rel="stylesheet">
    <!-- Custom Sctoll -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/js/scroll/jquery.mCustomScrollbar.css" />
	<!-- -->
</head>
<body>
    <!-- Navigation -->
    <!--<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="row">
               <div class="col-md-3 col-sm-3 col-xs-3">
                    <a href="index.html"><img src="images/sai_mi.png" alt=""></a>
                </div>
                <div class="col-md-9 col-sm-9">
                    <!-- Brand and toggle get grouped for better mobile display --
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- <a class="navbar-brand" href="index.html">Start Bootstrap</a> -->
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling --
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>
                                <a href="about.html">About</a>
                            </li>
                            <li>
                                <a href="sai_vidyapeet.html">Sai Vidyapeet</a>
                            </li>
                            <li>
                                <a href="event_registration.html">Event Registration</a>
                            </li>
                            <li class="donationbtn">
                            	<a class="btn btn-primary" href="donations.html">Donations</a>
                            </li>
                            <!--<li>
                                <a href="volunteer_signup.html">Volunteer Signup</a>
                            </li>--

                        </ul>
                    </div>
                </div>
                
                <!--<div class="col-md-2 col-sm-2 col-xs-2">
                    <h2><a class="btn btn-primary btn-block" href="donations.html">Donations</a></h2>
                </div>--
            </div>
            <!-- /.navbar-collapse --
        </div>
        <!-- /.container --
    </nav>-->
    <style>
.navbar-brand {
  padding: 0px;
}
.navbar-brand>img {
  height: 100%;
  padding: 15px;
  width: auto;
}

.brand-centered {
  display: flex;
  justify-content: center;
  position: absolute;
  width: 100%;
  left: 0;
  top: 0;
}
.brand-centered .navbar-brand {
  display: flex;
  align-items: center;
}
.navbar-toggle {
    z-index: 1;
}

.navbar-alignit .navbar-header {
      -webkit-transform-style: preserve-3d;
  -moz-transform-style: preserve-3d;
  transform-style: preserve-3d;
  height: 50px;
}
.navbar-alignit .navbar-brand {
    top: 50%;
    display: block;
    position: relative;
    height: auto;
    transform: translate(0,-50%);
    margin-right: 15px;
  margin-left: 15px;
}

.navbar-nav>li>.dropdown-menu {
    z-index: 9999;
}
.col{
    color:#1e3ce4;
}
    </style>

  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar9">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      
      <div class="brand-centered">
      <a class="navbar-brand" href="<?php echo   home_url(); ?>"><img style="margin-right: 10px; padding: 0;" src="<?php echo get_template_directory_uri(); ?>/images/sai_mi.png" alt="MISAISEVA">
      </a>

      </div>
      
      <div id="navbar9" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-left">
          <li class="<?php if ( is_home() ) echo "active"; ?>"><a href="<?php echo home_url(); ?>">Home</a></li>
          <li class="<?php if(isset($_SERVER['REQUEST_URI'])&&$_SERVER['REQUEST_URI']=='/about/') echo "active"; ?>"><a href="<?php echo home_url( '/about/' ) ?>">About</a></li>
           <li class="<?php if(isset($_SERVER['REQUEST_URI'])&&$_SERVER['REQUEST_URI']=='/saividyapeet/') echo "active"; ?>"> <a href="<?php echo home_url( '/saividyapeet/' ) ?>">Sai Vidyapeet</a></li>
            <li class="<?php if(isset($_SERVER['REQUEST_URI'])&&$_SERVER['REQUEST_URI']=='/event-registration/') echo "active"; ?>"><a href="<?php echo home_url( '/event-registration/' ) ?>">Event Registration</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><i class="col">"Connecting Sai Devotees Together"</i></a></li>
          <li class="active"><a class="btn btn-primary" href="donations.html">Donations</a></li>
         
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
    <!--/.container-fluid -->
  </nav>