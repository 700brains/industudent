<?php
session_start();
if(!$_SESSION['1'])
{
	header("location:login/");
}else


?>
<!DOCTYPE HTML>
<html>
<head>
<title>Seeking</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>

<link href="css/font-awesome.css" rel="stylesheet"> 

</head>
<body>
<nav class="navbar navbar-default" role="navigation">
	<div class="container">
	    <div class="navbar-header">
	        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
	        </button>
	        <a class="navbar-brand" href=""><img src="images/logo.png" alt=""/></a>
	    </div>
	    <!--/.navbar-header-->
	    <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
	        <ul class="nav navbar-nav">
		     
		       
		        <li><a href="Edit.php">Edit</a></li>
		        <li><a href="logout.php">Logout</a></li>
		        <!-- <li><a href="resume.html">Upload Resume</a></li> -->
	        </ul>
	    </div>
	    <div class="clearfix"> </div>
	  </div>
	    <!--/.navbar-collapse-->
	</nav>
<!--  -->
<div class="container">
    <div class="single">  
	   <div class="form-container">
        <h2>Upload Your Resume</h2>
        <div class="search_form1">
		    <form action="" action="" method="post">
			  <input type="text" class="text" placeholder="Department"  value="" name="" ><br>
			
			  <input type="text" class="text" placeholder="Number Of Industrial Students "   name="" ><br>
			
			  <input type="submit" value="Upload">
	        </form>
	    </div>
    </div>
 </div>
</div>

<div class="footer_bottom">	
  <div class="container">
    
  	
  	
  	
  	<div class="clearfix"> </div>
	<div class="copy">
		<p>Copyright © 2015 Seeking . All Rights Reserved . Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
	</div>
  </div>
</div>
</body>
</html>	