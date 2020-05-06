<?php
	require_once("base_controller.php");
	require_once("models/Food.php");
	require_once("../function.php");
	class FoodController extends BaseController{
		function __construct()
		{
			$this->name = 'food';
		}
		function error(){
			echo 'error';
		}
		function index()
		{
			$food = Food::getAll();
			$this->render('index', array('food'=>$food));
		}
	}
?>