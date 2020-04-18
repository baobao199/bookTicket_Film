<?php
	require_once("base_controller.php");
	class HomeController extends BaseController{
		
		function __construct()
		{
			$this->name = 'home';
		}
		function error(){
			echo 'error';
		}
		function index()
		{
			if(isLoggedIn()){
				$this->render('index', array());
			}
			else{
				redirect("?controller=admin&action=login");
			}
		}
	}
?>