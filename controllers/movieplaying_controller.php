<?php
	require_once("base_controller.php");
	require_once("models/FilmManager.php");
	require_once("function.php");
	class MovieplayingController extends BaseController{
		function __construct()
		{
			$this->name = 'movieplaying';
		}
		function error(){
			echo 'error';
		}
		function index(){
			$moviePlaying = FilmManager::getAll();
			$this->render('index',array('movieplaying'=>$moviePlaying));
		}
		function detail(){
			$id = filter_input(INPUT_POST,'id',FILTER_SANITIZE_STRING);
			$moviePlaying = FilmManager::getFilmById($id);
			$this->render('detail',array('movieplaying'=>$moviePlaying));
		}
	}
?>