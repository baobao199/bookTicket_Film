<?php
	require_once("base_controller.php");
	require_once("models/MovieComingSoon.php");
	require_once("../function.php");
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

		function add(){
			$this->render('add', array());
		}
		function upload(){
			$id = filter_input(INPUT_POST,'id',FILTER_SANITIZE_STRING);
			$name = filter_input(INPUT_POST,'name',FILTER_SANITIZE_STRING);
			$director = filter_input(INPUT_POST,'director',FILTER_SANITIZE_STRING);
			$actor = filter_input(INPUT_POST,'actor',FILTER_SANITIZE_STRING);
			$genre = filter_input(INPUT_POST,'genre',FILTER_SANITIZE_STRING);
			$startDay = filter_input(INPUT_POST,'startDay',FILTER_SANITIZE_STRING);
			$time = filter_input(INPUT_POST,'time',FILTER_SANITIZE_STRING);
			$language = filter_input(INPUT_POST,'language',FILTER_SANITIZE_STRING);
			$decription = filter_input(INPUT_POST,'decription',FILTER_SANITIZE_STRING);
			$image = filter_input(INPUT_POST,'image',FILTER_SANITIZE_STRING);


			$path = uploadImageMovieComingSoon();

			$MovieComingSoon = MovieComingSoon::addFilm($id, $name, $director, $actor, $genre, $startDay, $time, $language, $decription, $path);

			header("LOCATION: index.php?controller=moviecomingsoon");
		}
		function delete(){

			$id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_STRING);
			$MovieComingSoon = MovieComingSoon::deleteFilm($id);

			$this->render('delete', array());

			header("LOCATION: index.php?controller=moviecomingsoon");
		}

		function edit(){
			$id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_STRING);
			$MovieComingSoon = MovieComingSoon::getFilmById($id);
			$this->render('edit', array('moviecomingsoon'=>$MovieComingSoon));
		}
		function update(){
			$id = filter_input(INPUT_POST,'id',FILTER_SANITIZE_STRING);
			$name = filter_input(INPUT_POST,'name',FILTER_SANITIZE_STRING);
			$director = filter_input(INPUT_POST,'director',FILTER_SANITIZE_STRING);
			$actor = filter_input(INPUT_POST,'actor',FILTER_SANITIZE_STRING);
			$genre = filter_input(INPUT_POST,'genre',FILTER_SANITIZE_STRING);
			$startDay = filter_input(INPUT_POST,'startDay',FILTER_SANITIZE_STRING);
			$time = filter_input(INPUT_POST,'time',FILTER_SANITIZE_STRING);
			$language = filter_input(INPUT_POST,'language',FILTER_SANITIZE_STRING);
			$decription = filter_input(INPUT_POST,'decription',FILTER_SANITIZE_STRING);
			$image = filter_input(INPUT_POST,'image',FILTER_SANITIZE_STRING);

			$path = uploadImageMovieComingSoon();

			$MovieComingSoon = MovieComingSoon::updateFilm($id,$name,$director,$actor,$genre,$startDay,$time,$language,$decription,$path);
			
			header("LOCATION: index.php?controller=moviecomingsoon");
		}
	}
?>