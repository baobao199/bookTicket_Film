<?php
	require_once("base_controller.php");
	require_once("models/Showtime.php");
	class ShowTimeController extends BaseController{
		function __construct()
		{
			$this->name = 'showtime';
		}
		function error(){
			echo 'error';
		}
		function index(){
			$showTime = ShowTime::getAll();
			$this->render('index',array('showtime'=>$showTime));
		}

		function add(){
			$this->render('add',array());
		}
		function upload(){
			$id = filter_input(INPUT_POST,'id',FILTER_SANITIZE_STRING);
			$idFilm = filter_input(INPUT_POST,'idfilm',FILTER_SANITIZE_STRING);
			$dateF = filter_input(INPUT_POST,'datef',FILTER_SANITIZE_STRING);
			$timeF = filter_input(INPUT_POST,'timef',FILTER_SANITIZE_STRING);
			$movieTheater = filter_input(INPUT_POST,'movietheater',FILTER_SANITIZE_STRING);
			$room = filter_input(INPUT_POST,'room',FILTER_SANITIZE_STRING);

			$showTime = ShowTime::addShowTime($id, $idFilm, $dateF, $timeF, $movieTheater, $room);

			header("LOCATION: index.php?controller=showtime");

		}
		function delete(){

		}
		function edit(){
			$id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_STRING);
			$showTime = ShowTime::getShowTimeById($id);
			$this->render('edit',array('showtime'=>$showTime));
		}
		function update(){
			
		}
	}
?>