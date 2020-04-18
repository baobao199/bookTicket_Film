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
	}
?>