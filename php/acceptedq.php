<?php
function com(){
$con = mysqli_connect('localhost','root','');
if(!$con)
{

}
$db = mysqli_select_db($con, 'it');
if(!$db)
{

}


$query =  "SELECT * FROM company";
$QUER = mysqli_query($con,$query);
while($row = mysqli_fetch_assoc($QUER))
{
	echo '<option value='.$row['company_name'].'>'.$row['company_name'].'</option>
			';
}

}

function dept(){
$con = mysqli_connect('localhost','root','');
if(!$con)
{

}
$db = mysqli_select_db($con, 'it');
if(!$db)
{

}


$query =  "SELECT * FROM company";
$QUER = mysqli_query($con,$query);
while($row = mysqli_fetch_assoc($QUER))
{
	echo '<option value='.$row['department_available'].'>'.$row['department_available'].'</option>
			';
}

}