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

		// public function reload($username){
		// 	$sql = "SELECT * FROM khachhang where taiKhoan = :username";
		// 	$db = DB::getDB();
		// 	$stm = $db->prepare($sql);
		// 	$stm->execute(array(':username'=>$username));
		// 	$i = $stm->fetch(PDO::FETCH_ASSOC);

		// 	return new Account($i['taiKhoan'], $i['matKhau'], $i['hoTen'], $i['gioiTinh'], $i['ngaySinh'], $i['email'], $i['diaChi'], $i['SDT']);
		// }

		// public function getAccountById($id){
		// 	$sql = "SELECT * FROM khachhang WHERE taiKhoan = :id";
		// 	$db = DB::getDB();
		// 	$stm = $db->prepare($sql);
		// 	$stm->execute(array(':id'=>$id));
		// 	foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $i) 
		// 	{
		// 		$list[]	= new Account($i['taiKhoan'], $i['matKhau'], $i['hoTen'], $i['gioiTinh'], $i['ngaySinh'], $i['email'], $i['diaChi'], $i['SDT']);	
		// 	}
		// 	return $list;
		// }

		// public function updateAccount($username, $fullName, $sex, $birthday, $email, $address, $phone){
		// 	$sql = "UPDATE khachhang SET hoTen = :fullName, gioiTinh = :sex, ngaySinh = :birthday, email = :email, diaChi = :address, SDT = :phone  where taiKhoan = :username ";
		// 	$db = DB::getDB();
		// 	$stm = $db->prepare($sql);
		// 	$stm->execute(array(':fullName'=>$fullName, ':sex'=>$sex, ':birthday'=>$birthday, ':email'=>$email, ':address'=>$address, ':phone'=>$phone, ':username'=>$username));

		// 	return $stm->rowCount() == 1;
		// }

		// public function addAccount($username, $password, $fullName, $sex, $birthday, $email, $address, $phone){
		// 	$sql = "INSERT INTO khachhang VALUES ( :username, :password, :fullName, :sex, :birthday, :email, :address, :phone)";
		// 	$db = DB::getDB();
		// 	$stm = $db->prepare($sql);

		// 	$stm->execute(array(':username'=>$username, ':password'=>$password, ':fullName'=>$fullName, ':sex'=>$sex, ':birthday'=>$birthday, ':email'=>$email, ':address'=>$address, ':phone'=>$phone));

		// 	return $stm->rowCount() == 1;
		// }

		// public function updatePassowrd($username, $password){
		// 	$sql = "UPDATE khachhang SET matKhau = :password  where taiKhoan = :username ";
		// 	$db = DB::getDB();
		// 	$stm = $db->prepare($sql);
		// 	$stm->execute(array(':password'=>$password, ':username'=>$username));

		// 	return $stm->rowCount() == 1;
		// }
	}
?>