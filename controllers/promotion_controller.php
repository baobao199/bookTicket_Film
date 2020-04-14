<?php
	require_once("base_controller.php");
	require_once("models/Promotion.php");
	require_once("function.php");
	class PromotionController extends BaseController{
		function __construct()
		{
			$this->name = 'promotion';
		}
		function detail(){
			$id = filter_input(INPUT_POST,'id',FILTER_SANITIZE_STRING);
			$promotion = Promotion::getPromotionById($id);
			$this->render('detail',array('promotion'=>$promotion));
		}
	}
?>