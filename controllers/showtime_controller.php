<?php
	require_once("base_controller.php");
	require_once("models/ShowTime.php");
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
			$showTime = ShowTime::getFilm('CGVVC');
			$this->render('index', array('showtime'=>$showTime));
		}
	}
?>