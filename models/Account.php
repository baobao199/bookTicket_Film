<?php
	require_once("config.php");
	class Account{
		public $username;
		public $password;
		public $fullName;
		public $gioiTinh;
		public $birthday;
		public $email;
		public $address;
		public $phone;


		/**
		 * Class Constructor
		 * @param    $username   
		 * @param    $password   
		 * @param    $fullName   
		 * @param    $gioiTinh   
		 * @param    $birthday   
		 * @param    $email   
		 * @param    $address   
		 * @param    $phone   
		 */
		public function __construct($username, $password, $fullName, $gioiTinh, $birthday, $email, $address, $phone)
		{
			$this->username = $username;
			$this->password = $password;
			$this->fullName = $fullName;
			$this->gioiTinh = $gioiTinh;
			$this->birthday = $birthday;
			$this->email = $email;
			$this->address = $address;
			$this->phone = $phone;
		}

		public function login($username, $password){
			$sql = "SELECT * FROM khachhang where taiKhoan = :username or email = :email";
			$db = DB::getDB();
			$stm = $db->prepare($sql);
			$stm->execute(array(':username'=>$username, ':email'=>$username));
			$i = $stm->fetch(PDO::FETCH_ASSOC);
			if($i){
				// $hashed = $i['matKhau'];
				// if(password_verify($password, $hashed)){
				if($i['matKhau'] === $password){
					return new Account($i['taiKhoan'], $i['matKhau'], $i['hoTen'], $i['gioiTinh'], $i['ngaySinh'], $i['email'], $i['diaChi'], $i['SDT']);
				}
				else{
					return null;
				}
			}
			else{
				return null;
			}
		}
	}
?>