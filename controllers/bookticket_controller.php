<?php
	require_once("base_controller.php");
	require_once("models/TicketManager.php");
	require_once("models/FilmManager.php");
	require_once("models/MovieTheater.php");
	require_once("models/Food.php");
	require_once("models/ShowTime.php");
	require_once("function.php");
	class BookticketController extends BaseController{
		function __construct()
		{
			$this->name = 'bookticket';
		}
		function error(){
			echo 'error';
		}
		function index()
		{
			$nameTicket = TicketManager::getAll();
			$nameFilm = FilmManager::getAll();
			$nameFood = Food::getAll();
			$nameMovieTheater = MovieTheater::getAll();
			$showTime = ShowTime::getAll();
			$this->render('index', array('nameticket'=>$nameTicket, 'namefilm'=>$nameFilm, 'namefood'=>$nameFood, 'namemovietheater'=>$nameMovieTheater, 'showtime'=>$showTime));
		}
	}
?>