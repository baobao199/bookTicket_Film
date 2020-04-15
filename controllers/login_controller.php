<?php
	require_once("base_controller.php");
	require_once("function.php");
	class LoginController extends BaseController{
		function __construct()
		{
			$this->name = 'login';
		}
		function index(){
			$this->render('index',array());
		}
		function signin(){
			if(isLoggedIn()){
				$this->render('profile', array(), 'template_2');
				exit();
			}
			$username = filter_input(INPUT_POST,'username', FILTER_SANITIZE_STRING);

			$password = filter_input(INPUT_POST,'password', FILTER_SANITIZE_STRING);

			if(empty($username) || empty($password)){
				redirect("?controller=login&action=index");
			}else{
				$account = Account::login($username, $password);
				if($account){
					$_SESSION['user'] = serialize($account);
					redirect("?controller=account&action=profile");
				}
				else{
					redirect("?controller=login&action=index","usename or password is not valid");
				}
			}

		}
		function register(){
			
		}
	}
?>