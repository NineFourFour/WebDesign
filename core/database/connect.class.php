<?php
	class dataBase{
		public $dbname;
		public $query;
		public $myConnection;
		public function __construct($host,$username,$password,$dbname){
			$this->dbname = $dbname;
			$this->myConnection = mysqli_connect($host,$username,$password,$dbname);
		}
		public function userExists($username){
			$username = cleanData($username);
			$this->query = "SELECT COUNT(user_id) FROM user WHERE userName = '$username'";
			$result = $this->myConnection->query($this->query);
			$row = mysqli_fetch_array($result);
			return($row[0] == 1) ? true : false;
		}
		public function getUserId($username){
			$username = cleanData($username);
			$this->query = "SELECT user_id FROM user WHERE userName = '$username'";
			$result = $this->myConnection->query($this->query);
			$row = mysqli_fetch_array($result);
			return $row[0];
		}
		public function login($username, $password){
			$username = cleanData($username);
			$newDBConnect = new dataBase('localhost','root','','vrlogin');
			$user_id =$newDBConnect->getUserId($username);
			$password = md5($password);
			$this->query = "SELECT `user_id` FROM user WHERE userName = '$username' AND password = '$password'";
			$result =$this->myConnection->query($this->query);
			if($result->num_rows){
				 return 1;
			}else{
				 return 0;
			}
		}		
	}
?>