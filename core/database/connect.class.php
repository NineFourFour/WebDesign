<?php
	class dataBase{
		public $dbname;
		public $query;
		public $myConnection;
		public function __construct($host,$username,$password,$dbname){
			$this->dbname = $dbname;
			$this->myConnection = mysqli_connect($host,$username,$password,$dbname);
		}
		public function userExists($name){
			$name = cleanData($name);
			$this->query = "SELECT COUNT(id) FROM details WHERE Name = '$name'";
			$result = $this->myConnection->query($this->query);
			$row = mysqli_fetch_array($result);
			//var_dump($row);
			return($row[0] == 1) ? true : false;
		}
		public function getUserId($username){
			$username = cleanData($username);
			$this->query = "SELECT user_id FROM user WHERE userName = '$username'";
			$result = $this->myConnection->query($this->query);
			$row = mysqli_fetch_array($result);
			return $row[0];
		}
		public function contactInsert($name, $email, $message){
			$name = cleanData($name);
			$email = cleanData($email);
			$message = cleanData($message);
			$this->query = "INSERT INTO `details`(`name`, `email`, `message`) VALUES ('$name','$email','$message')";
			$result = $this->myConnection->query($this->query);
			//var_dump($result[num_rows]);
			//echo($result);
			if($result){
				 return 1;
			}else{
				 return 0;
			}
		}		
	}
	/*Notice: Use of undefined constant num_rows - assumed 'num_rows' in C:\xampp\htdocs\WebDesignContact\core\database\connect.class.php on line 31
NULL 1
Notice: Trying to get property of non-object in C:\xampp\htdocs\WebDesignContact\core\database\connect.class.php on line 33
ERROR:*/
?>
