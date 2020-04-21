<?php
	require_once("base_controller.php");
	require_once("models/ShowTime.php");
	require_once("models/MovieTheater.php");
	require_once("function.php");
	class ShowtimeController extends BaseController{
		function __construct()
		{
			$this->name = 'showtime';
		}
		function error(){
			echo 'error';
		}
		function index()
		{
			$id = filter_input(INPUT_POST,'id',FILTER_SANITIZE_STRING);

			$_SESSION['id'] = $id;

			$idMovieTheater = MovieTheater::getMovieTheaterById($id);

			$this->render('index', array('idmovietheater'=>$idMovieTheater),'template_4');
		}
		function detail(){

			$idMovieTheater = filter_input(INPUT_POST, 'idmovietheater', FILTER_SANITIZE_STRING);
			$dateF = filter_input(INPUT_POST, 'datef', FILTER_SANITIZE_STRING);

			$showTime = ShowTime::getFilm($idMovieTheater,$dateF);

			$this->render('detail', array('showtime'=>$showTime),'template_4');
		}
	}
?>