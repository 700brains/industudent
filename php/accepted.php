<?php
	
	require_once 'dbconfig.php';

	if($_POST)
	{
		
		
		$com_name = $_POST['com'];
		$dept = $_POST['dept'];
		$user_id = $_POST['uid'];
		$joining_date =date('Y-m-d H:i:s');
		
		try
		{	
		
			$stmt = $db_con->prepare("SELECT * FROM accepted WHERE uid=:uid");
			$stmt->execute(array(":uid"=>$user_id));
			$count = $stmt->rowCount();
			
			if($count==0){
				
	$stmt = $db_con->prepare("INSERT INTO accepted(uid,datejoin,company_name,dept) VALUES(:uid, :datejoin, :company_name, :dept)");
			$stmt->bindParam(":uid",$user_id);
			$stmt->bindParam(":datejoin",$joining_date);
			$stmt->bindParam(":company_name",$com_name);
			$stmt->bindParam(":dept",$dept);
			
					
				if($stmt->execute())
				{
					echo "success";
				}
				else
				{
					echo "Query could not execute !";
				}
			
			}
			else{
				
				echo "1"; //  not available
			}
				
		}
		catch(PDOException $e){
			echo $e->getMessage();
			echo 'kk';
		}
	}




















?>