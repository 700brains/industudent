<?php
session_start();

if(!isset($_SESSION['ok']))
{
  header("Location:login/index.php");
}
$uid = $_SESSION['ok'];
include_once 'php/acceptedq.php';


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home | Seeking</title>
<link href="register/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="register/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<script type="text/javascript" src="register/jquery-1.11.3-jquery.min.js"></script>

<script type="text/javascript" src="register/validation.min.js"></script>
<link href="register/style.css" rel="stylesheet" type="text/css" media="screen">

<script type="text/javascript" src="script.js"></script>

</head>

<body>

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php" target="_blank" title="Coding Cage Programming Blog">Seeking</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
           <!--  <li class="active"><a href="http://www.codingcage.com/2015/11/ajax-registration-script-using-jquery-php.html">Go to Article</a></li>
            <li><a href="http://www.codingcage.com/p/about.html" target="_blank">About</a></li>
            <li><a href="http://www.codingcage.com/p/contact-me.html" target="_blank">Contact</a></li> -->
            <li><a href="logout.php" target="_blank">Logout</a></li>
            <!-- <li class="dropdown">
              <a href="logout.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              Logout <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="http://www.codingcage.com/search/label/jQuery" target="_blank">jQuery</a></li>
                <li><a href="http://www.codingcage.com/search/label/Ajax" target="_blank">Ajax</a></li>
                <li><a href="#">MySQLI</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">PHP</li>
                <li><a href="http://www.codingcage.com/search/label/PHP OOP" target="_blank">PHP OOP</a></li>
                
              </ul>
            </li> -->
          </ul>
        </div><!--/.nav-collapse
   --></div>
</nav> 
    
<div class="signin-form">

  <div class="container">
     
        
       <form class="form-signin" method="post" id="register-form">
      
        <h2 class="form-signin-heading">Feedback Form</h2><hr />
        
        <div id="error">
        <!-- error will be showen here ! -->
        </div>
         <input type="hidden" class="form-control" placeholder="" name="uid" id="uid" value="<?php echo $uid;  ?>" />
         <span>Have you been accepted ? if YES Which Company ?</span>
        <div class="form-group">
        <!-- <input type="text" class="form-control" placeholder="" name="com" id="com" /> -->
        <select id="com" class="form-control" name="com">
          <?php  echo com();   ?>
        </select>
        </div>
        
       
        
        <div class="form-group">
          <span>Which department where you accepted in ?</span>
       <!--  <input type="text" class="form-control" placeholder=" " name="dept" id="dept" /> -->
        <select id="dept" class="form-control" name="dept">
          <?php echo dept();  ?>
        </select>
        </div>
      <hr />
        
        <div class="form-group">
            <button type="submit" class="btn btn-default" name="btn-save" id="btn-submit">
        <span class="glyphicon glyphicon-log-in"></span> &nbsp; Send Feedback
      </button>
        </div>  
      
      </form>

    </div>
    
</div>
    
<script src="register/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>