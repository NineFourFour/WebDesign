<?php
include 'core/init.php';
	try{
		if (empty($_POST == false)){
			$name = $_POST['name'];
			$email = $_POST['email'];
			$message = $_POST['message'];
			$host="localhost";
			$usernameDB="root";
			$passwordDB="";
			$dbname = "contact";
			$newDBConnect = new dataBase($host,$usernameDB,$passwordDB,$dbname);
			
			$contactIn = $newDBConnect->contactInsert($name, $email, $message);
			if($contactIn === 1){
				echo '<script type="text/javascript">alert("TankYou for you Message")</script>';
				header( "refresh: 0; url=index.php" );
				 
			}else{
				header( "refresh:5; url=index.php" );
				throw new Exception("<h1>Message not added</h1><br/>");
				
			}
		}
	}catch (Exception $ex){
			echo 'ERROR: '.$ex->getMessage();
	}
?>