<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Medharik - PHP CRUD</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
		  body,html{
		    height: 100%;
		  }

		  nav.sidebar, .main{
		    -webkit-transition: margin 200ms ease-out;
		      -moz-transition: margin 200ms ease-out;
		      -o-transition: margin 200ms ease-out;
		      transition: margin 200ms ease-out;
		  }

		  .main{
		    padding: 10px 10px 0 10px;
		  }

		 @media (min-width: 765px) {

		    .main{
		      position: absolute;
		      width: calc(100% - 40px); 
		      margin-left: 40px;
		      float: right;
		    }

		    nav.sidebar:hover + .main{
		      margin-left: 200px;
		    }

		    nav.sidebar.navbar.sidebar>.container .navbar-brand, .navbar>.container-fluid .navbar-brand {
		      margin-left: 0px;
		    }

		    nav.sidebar .navbar-brand, nav.sidebar .navbar-header{
		      text-align: center;
		      width: 100%;
		      margin-left: 0px;
		    }
		    
		    nav.sidebar a{
		      padding-right: 13px;
		    }

		    nav.sidebar .navbar-nav > li:first-child{
		      border-top: 1px #e5e5e5 solid;
		    }

		    nav.sidebar .navbar-nav > li{
		      border-bottom: 1px #e5e5e5 solid;
		    }

		    nav.sidebar .navbar-nav .open .dropdown-menu {
		      position: static;
		      float: none;
		      width: auto;
		      margin-top: 0;
		      background-color: transparent;
		      border: 0;
		      -webkit-box-shadow: none;
		      box-shadow: none;
		    }

		    nav.sidebar .navbar-collapse, nav.sidebar .container-fluid{
		      padding: 0 0px 0 0px;
		    }

		    .navbar-inverse .navbar-nav .open .dropdown-menu>li>a {
		      color: #777;
		    }

		    nav.sidebar{
		      width: 200px;
		      height: 100%;
		      margin-left: -160px;
		      float: left;
		      margin-bottom: 0px;
		    }

		    nav.sidebar li {
		      width: 100%;
		    }

		    nav.sidebar:hover{
		      margin-left: 0px;
		    }

		    .forAnimate{
		      opacity: 0;
		    }
		  }
		   
		  @media (min-width: 1330px) {

		    .main{
		      width: calc(100% - 200px);
		      margin-left: 200px;
		    }

		    nav.sidebar{
		      margin-left: 0px;
		      float: left;
		    }

		    nav.sidebar .forAnimate{
		      opacity: 1;
		    }
		  }

		  nav.sidebar .navbar-nav .open .dropdown-menu>li>a:hover, nav.sidebar .navbar-nav .open .dropdown-menu>li>a:focus {
		    color: #CCC;
		    background-color: transparent;
		  }

		  nav:hover .forAnimate{
		    opacity: 1;
		  }
		  section{
		    padding-left: 15px;
		  }
	</style>
  </head>

  <body>

	<nav class="navbar navbar-default navbar-static-top"> <div class="container-fluid"> <div class="navbar-header"> <button type="button" class="collapsed navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-6" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> <a href="#" class="navbar-brand">Brand</a> </div> <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-6"> <ul class="nav navbar-nav"> <li class="active"><a href="#">Home</a></li> <li><a href="#">Link</a></li> <li><a href="#">Link</a></li> </ul> </div> </div> </nav>