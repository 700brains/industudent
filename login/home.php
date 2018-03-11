<?php
session_start();

if(!isset($_SESSION['ok']))
{
	header("Location: index.php");
}

header('location:../');