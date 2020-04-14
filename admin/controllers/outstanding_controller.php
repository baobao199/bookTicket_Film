<?php
	require_once("base_controller.php");
	require_once("models/OutStanding.php");
	require_once("../function.php");
	class OutstandingController extends BaseController{
		function __construct()
		{
			$this->name = 'outstanding';
		}
		function error(){
			echo 'error';
		}
		function index()
		{
			$outStanding = OutStanding::getAll();
			$this->render('index', array('outstanding' => $outStanding));
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


			$path = uploadImage('outstanding');

			$outStanding = OutStanding::addFilm($id, $name, $director, $actor, $genre, $startDay, $time, $language, $decription, $path);

			header("LOCATION: index.php?controller=outstanding");
		}
		function delete(){

			$id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_STRING);
			$outStanding = OutStanding::deleteFilm($id);

			$this->render('delete', array());

			header("LOCATION: index.php?controller=outstanding");
		}

		function edit(){
			$id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_STRING);
			$outStanding = OutStanding::getFilmById($id);
			$this->render('edit', array('outstanding'=>$outStanding));
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

			$path = uploadImage('outstanding');

			$outStanding = OutStanding::updateFilm($id,$name,$director,$actor,$genre,$startDay,$time,$language,$decription,$path);
			
			header("LOCATION: index.php?controller=outstanding");
		}
	}
?>