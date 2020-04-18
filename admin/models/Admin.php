<?php
	require_once("../config.php");
	class Admin{
		public $username;
		public $password;
		public $fullName;


		/**
		 * Class Constructor
		 * @param    $username   
		 * @param    $password   
		 * @param    $fullName    
		 */
		public function __construct($username, $password, $fullName)
		{
			$this->username = $username;
			$this->password = $password;
			$this->fullName = $fullName;
		}

		public function login($username, $password){
			$sql = "SELECT * FROM admin where adminUser = :username";
			$db = DB::getDB();
			$stm = $db->prepare($sql);
			$stm->execute(array(':username'=>$username));
			$i = $stm->fetch(PDO::FETCH_ASSOC);
			if($i){
				// $hashed = $i['matKhau'];
				// if(password_verify($password, $hashed)){
				if($i['adminPass'] === $password){
					return new Admin($i['adminUser'], $i['adminPass'], $i['adminName']);
				}
				else{
					return null;
				}
			}
			else{
				return null;
			}
		}

		public function getAdminById($id){
			$sql = "SELECT * FROM admin WHERE adminUser = :id";
			$db = DB::getDB();
			$stm = $db->prepare($sql);
			$stm->execute(array(':id'=>$id));
			$list = array();
			foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $i) 
			{
				$list[]	= new Admin($i['adminUser'], $i['adminPass'], $i['adminName']);	
			}
			return $list;
		}

		public function updatePassowrd($username, $password){
			$sql = "UPDATE admin SET adminPass = :password  where adminUser = :username ";
			$db = DB::getDB();
			$stm = $db->prepare($sql);
			$stm->execute(array(':password'=>$password, ':username'=>$username));

			return $stm->rowCount() == 1;
		}
	}
?>