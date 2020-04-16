<?php
	require_once("base_controller.php");
	require_once("models/MovieTheater.php");
	require_once("function.php");
	class MovietheaterController extends BaseController{
		function __construct()
		{
			$this->name = 'movietheater';
		}
		function error(){
			echo 'error';
		}
		function index()
		{
			$this->render('index', array(),'template_3');
		}
		function detail(){
			$id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_STRING);
			$movieTheater = MovieTheater::getMovieTheaterById($id);
			$this->render('detail', array('movietheater'=>$movieTheater),'template_3');
		}

	}
?>