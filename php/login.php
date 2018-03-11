<?php

$connection = mysqli_connect('localhost','root','');
if(!$connection)
{
	die('Error Connecting');
}

$db = mysqli_select_db($connection, 'it');
if(!$db)
{
	die('Error Connecting');
}




$email = trim($_POST['email']);
$password = trim(sha1($_POST['password']));




$query = "SELECT * FROM account WHERE email='$email' AND password='$password'";
$query1 = mysqli_query($connection, $query);
if($query1)
{
	session_start();
	$_SESSION['1']= 1;
	$_SESSION['mail'] = $email;
	$_SESSION['p'] = 'ok';

	header('location:index.php');

}
else
{
header('location:register.php');
}

?>