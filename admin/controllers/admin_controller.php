<?php
	require_once("base_controller.php");
	require_once("models/Admin.php");
	require_once("../function.php");
	class AdminController extends BaseController{
		function __construct()
		{
			$this->name = 'customer';
		}
		function error(){
			echo 'error';
		}
		function login()
		{
			$this->render('login', array(), 'template_1');
		}
	}
?>