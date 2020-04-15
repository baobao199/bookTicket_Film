<?php
	require_once("base_controller.php");
	require_once("models/Account.php");
	require_once("function.php");
	class AccountController extends BaseController{
		function __construct()
		{
			$this->name = 'account';
		}
		function index(){
			$this->render('index',array());
		}

		function login(){
			if(isLoggedIn()){
				$this->render('profile', array(), 'template_2');
				exit();
			}
			$username = filter_input(INPUT_POST,'username', FILTER_SANITIZE_STRING);

			$password = filter_input(INPUT_POST,'password', FILTER_SANITIZE_STRING);

			if(empty($username) || empty($password)){
				redirect("?controller=account");
			}else{
				$account = Account::login($username, $password);
				if($account){
					$_SESSION['acc'] = serialize($account);
					redirect("?controller=home");
				}
				else{
					redirect("?controller=account","usename or password is not valid");
				}
			}
		}

		function logout(){
			unset($_SESSION['acc']);
			redirect("?controller=account&action=login");
		}

		function profile(){
			if(isLoggedIn()){
				$this->render('profile', array(), 'template_2');
			}
			else{
				redirect("?controller=account&action=login","Please login first");
			}
		}
	}
?> 