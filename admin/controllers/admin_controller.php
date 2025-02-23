<?php
	require_once("base_controller.php");
	require_once("models/Admin.php");
	require_once("../function.php");
	class AdminController extends BaseController{
		function __construct()
		{
			$this->name = 'admin';
		}
		function error(){
			echo 'error';
		}
		function index()
		{
			if(isLoggedIn()){
				redirect("index.php?controller=home");
			}
			$this->render('index', array(), 'template_1');
		}
		function login(){
			if(isLoggedIn()){
				$this->render('home', array(), 'template_2');
				exit();
			}
			$username = filter_input(INPUT_POST,'username', FILTER_SANITIZE_STRING);

			$password = filter_input(INPUT_POST,'password', FILTER_SANITIZE_STRING);

			if(empty($username) || empty($password)){
				redirect("index.php?controller=admin");
			}else{
				$admin =Admin::login($username, $password);
				if($admin){
					$_SESSION['acc'] = serialize($admin);
					redirect("index.php?controller=home");
				}
				else{
					redirect("index.php?controller=admin","usename or password is not valid");
				}
			}
		}

		function logout(){
			unset($_SESSION['acc']);
			redirect("?controller=admin&action=login");
		}

		function profile(){
			if(isLoggedIn()){
				$this->render('profile', array(), 'template_2');
			}
			else{
				redirect("?controller=admin&action=login","Please login first");
			}
		}

		function password(){
			$username = filter_input(INPUT_POST,'username',FILTER_SANITIZE_STRING);
			$admin = Admin::getAdminById($username);
			$this->render('password',array('admin'=>$admin));
		}

		function updatepass(){
			$userName = filter_input(INPUT_POST,'username',FILTER_SANITIZE_STRING);
			$passOld = filter_input(INPUT_POST,'passold',FILTER_SANITIZE_STRING);
			$passNew = filter_input(INPUT_POST,'passnew',FILTER_SANITIZE_STRING);
			$passConfirm = filter_input(INPUT_POST,'passconfirm',FILTER_SANITIZE_STRING);

			$admin = Admin::getAdminById($userName);

			foreach ($admin as $a) {
				$p = $a->password;
			}

			if($passOld === $p && $passNew === $passConfirm){
				Admin::updatePassowrd($userName,$passNew);
				unset($_SESSION['acc']);
				redirect("?controller=admin&action=login");
			}

		}
	}
?>