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
			$this->render('index', array());
		}
	}
?>