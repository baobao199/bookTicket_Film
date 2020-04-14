<?php
	require_once("base_controller.php");
	require_once("models/Slide.php");
	require_once("models/OutStanding.php");
	require_once("function.php");
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
			$slide = Slide::getAll();
			$outStanding = OutStanding::getAll();
			$this->render('index',array('slide'=>$slide, 'outstanding'=>$outStanding));
		}
	}
?>