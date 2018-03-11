<?php

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
	echo '<ul class="orange">
			 <li>
			 <a href="#">'.$row['company_name'].'</a>
			 </li>
			
			 </ul>
			';
}













?>