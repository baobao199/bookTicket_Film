<?php
	require_once("base_controller.php");
	require_once("models/Showtime.php");
	require_once("../function.php");
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
			$nameFilm = filter_input(INPUT_POST,'namefilm',FILTER_SANITIZE_STRING);
			$movieTheater = filter_input(INPUT_POST,'movietheater',FILTER_SANITIZE_STRING);
			$room = filter_input(INPUT_POST,'room',FILTER_SANITIZE_STRING);
			$ticket = filter_input(INPUT_POST,'ticket',FILTER_SANITIZE_STRING);
			$dateF = filter_input(INPUT_POST,'datef',FILTER_SANITIZE_STRING);
			$timeF = filter_input(INPUT_POST,'timef',FILTER_SANITIZE_STRING);
			$seat = filter_input(INPUT_POST,'seat',FILTER_SANITIZE_STRING);

			$showTime = ShowTime::addShowTime($id, $idFilm, $nameFilm, $movieTheater, $room, $ticket, $dateF, $timeF, $seat);

			header("LOCATION: index.php?controller=showtime");

		}
		function delete(){
			$id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_STRING);

			$showTime = ShowTime::deleteShowTime($id);

			$this->render('delete',array());
		}
		function edit(){
			$id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_STRING);
			$showTime = ShowTime::getShowTimeById($id);
			$this->render('edit',array('showtime'=>$showTime));
		}
		function update(){
			$id = filter_input(INPUT_POST,'id',FILTER_SANITIZE_STRING);
			$idFilm = filter_input(INPUT_POST,'idfilm',FILTER_SANITIZE_STRING);
			$idTicket = filter_input(INPUT_POST,'idticket',FILTER_SANITIZE_STRING);
			$dateF = filter_input(INPUT_POST,'datef',FILTER_SANITIZE_STRING);
			$timeF = filter_input(INPUT_POST,'timef',FILTER_SANITIZE_STRING);
			$movieTheater = filter_input(INPUT_POST,'movietheater',FILTER_SANITIZE_STRING);

			$showTime = ShowTime::updateShowTime($id, $idFilm, $idTicket, $dateF, $timeF, $movieTheater);

			header("LOCATION: index.php?controller=showtime");
		}
	}
?>