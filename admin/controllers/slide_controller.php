<?php
	require_once("base_controller.php");
	require_once("models/Slide.php");
	require_once("../function.php");
	class SlideController extends BaseController{
		function __construct()
		{
			$this->name = 'slide';
		}
		function error(){
			echo 'error';
		}
		function index()
		{
			$slide = Slide::getAll();
			$this->render('index',array('slide'=>$slide));
		}

		function add(){
			$this->render('add',array());
		 	
		}
		function upload(){
			$id = filter_input(INPUT_POST,'id',FILTER_SANITIZE_STRING);
			$name = filter_input(INPUT_POST,'name',FILTER_SANITIZE_STRING);
			$idCT = filter_input(INPUT_POST,'idct',FILTER_SANITIZE_STRING);
			$image = filter_input(INPUT_POST,'image',FILTER_SANITIZE_STRING);

			$path = uploadImageAdvertisement();

			$slide = Slide::addSlide($id, $name, $idCT, $path);

			header("LOCATION: index.php?controller=slide");

		}
		function delete(){
			$id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_STRING);
			$slide = Slide::deleteSlide($id);
			$this->render('delete',array());
		}
		function edit(){
			$id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_STRING);

			$slide = Slide::getSlideById($id);

			$this->render('edit',array('slide'=>$slide));

		}
		function update(){
			$id = filter_input(INPUT_POST,'id',FILTER_SANITIZE_STRING);
			$name = filter_input(INPUT_POST,'name',FILTER_SANITIZE_STRING);
			$idCT = filter_input(INPUT_POST,'idct',FILTER_SANITIZE_STRING);
			$image = filter_input(INPUT_POST,'image',FILTER_SANITIZE_STRING);

			$path = uploadImageAdvertisement();

			$slide = Slide::updateSlide($id, $name, $idCT, $path);

			header("LOCATION: index.php?controller=slide");
			
		}
	}
?>