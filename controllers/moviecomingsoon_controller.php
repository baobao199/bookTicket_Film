<?php
	require_once("base_controller.php");
	require_once("models/MovieComingSoon.php");
	require_once("function.php");
	class MoviecomingsoonController extends BaseController{
		function __construct()
		{
			$this->name = 'moviecomingsoon';
		}
		function error(){
			echo 'error';
		}
		function index()
		{
			$MovieComingSoon = MovieComingSoon::getAll();
			$this->render('index', array('moviecomingsoon' => $MovieComingSoon));
		}
		function detail(){
			$id = filter_input(INPUT_POST,'id',FILTER_SANITIZE_STRING);
			$movieComingSoon = MovieComingSoon::getFilmById($id);
			$this->render('detail',array('moviecomingsoon'=>$movieComingSoon));
		}
	}
?>