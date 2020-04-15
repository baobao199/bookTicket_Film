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

		function edit(){
			$username = filter_input(INPUT_POST,'username',FILTER_SANITIZE_STRING);
			$account = Account::getAccountById($username);
			$this->render('edit',array('account'=>$account));
		}

		function update(){
			$username = filter_input(INPUT_POST,'username',FILTER_SANITIZE_STRING);
			$fullName = filter_input(INPUT_POST,'fullName',FILTER_SANITIZE_STRING);
			$sex = filter_input(INPUT_POST,'sex',FILTER_SANITIZE_STRING);
			$birthday = filter_input(INPUT_POST,'birthday',FILTER_SANITIZE_STRING);
			$email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_STRING);
			$address = filter_input(INPUT_POST,'address',FILTER_SANITIZE_STRING);
			$phone = filter_input(INPUT_POST,'phone',FILTER_SANITIZE_STRING);

			Account::updateAccount($username, $fullName, $sex, $birthday, $email, $address, $phone);

			$account = Account::reload($username);
			$_SESSION['acc'] = serialize($account);

			redirect("?controller=account&action=profile");
		}
	}
?> 