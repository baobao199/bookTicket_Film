<?php
	require_once("base_controller.php");
	require_once("models/Promotion.php");
	require_once("../function.php");
	class PromotionController extends BaseController{
		function __construct()
		{
			$this->name = 'promotion';
		}
		function error(){
			echo 'error';
		}
		function index(){
			$promotion = Promotion::getAll();
			$this->render('index',array('promotion'=>$promotion));
		}

		function add(){
			$this->render('add',array());
		}
		function upload(){
			$id = filter_input(INPUT_POST,'id',FILTER_SANITIZE_STRING);
			$name = filter_input(INPUT_POST,'name',FILTER_SANITIZE_STRING);
			$type = filter_input(INPUT_POST,'type',FILTER_SANITIZE_STRING);
			$content = filter_input(INPUT_POST,'content',FILTER_SANITIZE_STRING);
			$image = filter_input(INPUT_POST,'image',FILTER_SANITIZE_STRING);


			$path = uploadImage('promotion');

			$promotion = Promotion::addPromotion($id, $name, $type, $content, $path);

			header("LOCATION: index.php?controller=promotion");

		}
		function delete(){
			$id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_STRING);

			$promotion = Promotion::deletePromotion($id);

			$this->render('delete',array());
		}
		function edit(){
			$id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_STRING);
			$promotion = Promotion::getPromotionById($id);
			$this->render('edit',array('promotion'=>$promotion));
		}
		function update(){
			$id = filter_input(INPUT_POST,'id',FILTER_SANITIZE_STRING);
			$name = filter_input(INPUT_POST,'name',FILTER_SANITIZE_STRING);
			$type = filter_input(INPUT_POST,'type',FILTER_SANITIZE_STRING);
			$content = filter_input(INPUT_POST,'content',FILTER_SANITIZE_STRING);
			$image = filter_input(INPUT_POST,'image',FILTER_SANITIZE_STRING);

			$path = uploadImage('promotion');

			$promotion = Promotion::updatePromotion($id, $name, $type, $content, $path);

			header("LOCATION: index.php?controller=promotion");
		}
	}
?>