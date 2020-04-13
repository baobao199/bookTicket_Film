<?php
	require_once("base_controller.php");
	require_once("models/OutStanding.php");
	require_once("../function.php");
	class OutstandingController extends BaseController{
		function __construct()
		{
			$this->name = 'outstanding';
		}
		function edit(){
			$outStanding = OutStanding::getOutStanding();

			$this->render('edit',array('outstanding'=>$outStanding));

		}
		function update(){
			$stt = filter_input(INPUT_GET,'stt',FILTER_SANITIZE_STRING);
			$id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_STRING);

			$outStanding = OutStanding::updateOutStanding($stt,$id);
			
			header("LOCATION: index.php?controller=outstanding&action=edit");
		}
	}
?>