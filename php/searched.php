<?php

$con = mysqli_connect('localhost','root','');
if(!$con)
{

}
$db = mysqli_select_db($con, 'it');
if(!$db)
{

}

$get = $_POST['s'];
if(is_numeric($get)){
    echo 'Please Review Your Search Option';
}
$query =  "SELECT * FROM company WHERE company_name LIKE '%$get%' ";
$QUER = mysqli_query($con,$query);
if(mysqli_num_rows($QUER)<1)
{
	echo '<p> No suggestion<span id="txtHint"></span></p>';
}else{
    echo '<table class="table">
            <thead>
      <tr>
        <th>COMPANY NAME</th>
        <th>ADDRESS</th>
        <th>OPEN DEPARTMENT</th>
        <th>OPEN SLOT</th>
      </tr>
    </thead>



    <tbody>
';
while($row = mysqli_fetch_assoc($QUER))
{
	echo '
      <tr class="success">
        <td >'.$row['company_name'].'</td>
        <td >'.$row['location'].'</td>
        <td >'.$row['department_available'].'</td>
        <td >'.$row['left'].'</td>
      </tr>      
      
      
  
			';
}
echo '</tbody></table>';}


/*

$a[] = "Anna";
$a[] = "Brittany";
$a[] = "Cinderella";
$a[] = "Diana";
$a[] = "Eva";
$a[] = "Fiona";
$a[] = "Gunda";
$a[] = "Hege";
$a[] = "Inga";
$a[] = "Johanna";
$a[] = "Kitty";
$a[] = "Linda";
$a[] = "Nina";
$a[] = "Ophelia";
$a[] = "Petunia";
$a[] = "Amanda";
$a[] = "Raquel";
$a[] = "Cindy";
$a[] = "Doris";
$a[] = "Eve";
$a[] = "Evita";
$a[] = "Sunniva";
$a[] = "Tove";
$a[] = "Unni";
$a[] = "Violet";
$a[] = "Liza";
$a[] = "Elizabeth";
$a[] = "Ellen";
$a[] = "Wenche";
$a[] = "Vicky";

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from "" 
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values 
echo $hint === "" ? "no suggestion" : $hint;



*/




?>