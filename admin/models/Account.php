<?php
	require_once("../config.php");
	class Account{
		public $username;
		public $password;
		public $fullName;
		public $sex;
		public $birthday;
		public $email;
		public $address;
		public $phone;


		/**
		 * Class Constructor
		 * @param    $username   
		 * @param    $password   
		 * @param    $fullName   
		 * @param    $sex   
		 * @param    $birthday   
		 * @param    $email   
		 * @param    $address   
		 * @param    $phone   
		 */
		public function __construct($username, $password, $fullName, $sex, $birthday, $email, $address, $phone)
		{
			$this->username = $username;
			$this->password = $password;
			$this->fullName = $fullName;
			$this->sex = $sex;
			$this->birthday = $birthday;
			$this->email = $email;
			$this->address = $address;
			$this->phone = $phone;
		}

		public function getAll(){
			$sql = "SELECT * FROM khachhang";
			$db = DB::getDB();
			$stm = $db->query($sql);
			$list = array();
			foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $i) {
				$list[] = new Account($i['taiKhoan'], $i['matKhau'], $i['hoTen'], $i['gioiTinh'], $i['ngaySinh'], $i['email'], $i['diaChi'], $i['SDT']);
			}
			return $list;
		}
	}
?>