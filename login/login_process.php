<?php
	session_start();
	require_once 'dbconfig.php';

	if(isset($_POST['btn-login']))
	{
		//$user_name = $_POST['user_name'];
		//$user_email = trim($_POST['user_email']);
		$user_password = trim($_POST['password']);
		
		$password = sha1($user_password);
		
		try
		{	
		
			$stmt = $db_con->prepare("SELECT * FROM account WHERE password=:password");
			$stmt->execute(array(":password"=>$password));
			$row = $stmt->fetch(PDO::FETCH_ASSOC);
			$count = $stmt->rowCount();
			
			if($row['password']==$password){
				
				echo "ok"; // log in
				$_SESSION['ok'] = $row['email'];
				$_SESSION['okk'] = 'brovo';
				//header('location:../');
			}
			else{
				
				echo "email or password does not exist."; // wrong details 
			}
				
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}

?>