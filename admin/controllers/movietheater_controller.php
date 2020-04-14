<?php
	require_once("base_controller.php");
	require_once("../function.php");
	require_once("models/MovieTheater.php");
	class MovieTheaterController extends BaseController{
		function __construct()
		{
			$this->name = 'movietheater';
		}
		function index()
		{
			$movieTheater = MovieTheater::getAll();
			$this->render('index',array('movietheater'=>$movieTheater));
		}
		function add()
		{
			$this->render('add',array());
		}
		function upload()
		{
			$id = filter_input(INPUT_POST,'id',FILTER_SANITIZE_STRING);
			$name = filter_input(INPUT_POST,'name',FILTER_SANITIZE_STRING);
			$address = filter_input(INPUT_POST,'address',FILTER_SANITIZE_STRING);
			$phoneNumber = filter_input(INPUT_POST,'phonenumber',FILTER_SANITIZE_STRING);
			$image = filter_input(INPUT_POST,'image',FILTER_SANITIZE_STRING);

			$path = uploadImage('movietheater');

			$movieTheater = MovieTheater::addMovieTheater($id, $name, $address, $phoneNumber, $path);

			header("LOCATION: index.php?controller=movietheater");
		}
		function delete()
		{
			$id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_STRING);

			$movieTheater = MovieTheater::deleteMovieTheater($id);

			$this->render('delete',array());
		}
		function edit()
		{
			$id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_STRING);

			$movieTheater = MovieTheater::getMovieTheaterById($id);

			$this->render('edit',array('movietheater'=>$movieTheater));
		}
		function update()
		{	
			
			$id = filter_input(INPUT_POST,'id',FILTER_SANITIZE_STRING);
			$name = filter_input(INPUT_POST,'name',FILTER_SANITIZE_STRING);
			$address = filter_input(INPUT_POST,'address',FILTER_SANITIZE_STRING);
			$phoneNumber = filter_input(INPUT_POST,'phonenumber',FILTER_SANITIZE_STRING);
			$image = filter_input(INPUT_POST,'image',FILTER_SANITIZE_STRING);

			$path = uploadImage('movietheater');

			$movieTheater = MovieTheater::updateMoiveTheater($id, $name, $address, $phoneNumber, $path);

			header("LOCATION: index.php?controller=movietheater");
		}
	}
?>