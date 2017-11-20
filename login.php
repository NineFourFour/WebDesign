<?php
include 'core/init.php';
	try{
		if (empty($_POST == false)){
			$username = $_POST['username'];
			$password = $_POST['password'];
			$host="localhost";
			$usernameDB="root";
			$passwordDB="";
			$dbname = "vrlogin";
			$newDBConnect = new dataBase($host,$usernameDB,$passwordDB,$dbname);
			if($newDBConnect->userExists($username) == false){
				echo '<script type="text/javascript">alert("TankYou We have your details")</script>';
				header( "refresh:5; url=index.php" );
					throw new Exception("<h1>Username is incorrect!!!!.........redirect back to login screen</h1><br/>");
			
			}else{
				if(strlen($password) > 32){
					throw new Exception("Password exceeds Length!!!!<br/>");
				}
				$login = $newDBConnect->login($username, $password);
				if($login === 0){
					header( "refresh:5; url=index.php" );
					throw new Exception("<h1>Password is incorrect!!!!.........redirect back to login screen</h1><br/>");
					 
				}else{
					header('Location: index.html');
					exit();
				}
			}
		}
	}catch (Exception $ex){
			echo 'ERROR: '.$ex->getMessage();
	}
?>