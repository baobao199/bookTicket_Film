<?php
	require_once("base_controller.php");
	require_once("models/TicketManager.php");
	class TicketmanagerController extends BaseController{
		function __construct()
		{
			$this->name = 'ticketmanager';
		}
		function error(){
			echo 'error';
		}
		function index()
		{
			$ticketManager = TicketManager::getAll();
			$this->render('index',array('ticketmanager'=>$ticketManager));
		}

		function add(){
			echo 'add';
		}
		function delete(){
			$id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_STRING);
			$ticketManager = TicketManager::deleteTicket($id);

			$this->render('delete', array());
		}
		function edit(){
			echo 'edit';
		}
	}
?>