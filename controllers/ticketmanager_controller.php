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
		 	$this->render('add',array());
		}
		function upload(){

			$id = filter_input(INPUT_POST,'id',FILTER_SANITIZE_STRING);
			$name = filter_input(INPUT_POST,'name',FILTER_SANITIZE_STRING);
			$price = filter_input(INPUT_POST,'price',FILTER_SANITIZE_NUMBER_INT);

			$ticketManager = TicketManager::addTicket($id,$name,$price);


			header("LOCATION: index.php?controller=ticketmanager");
		}
		function delete(){
			$id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_STRING);
			$ticketManager = TicketManager::deleteTicket($id);

			$this->render('delete', array());
		}
		function edit(){
			$id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_STRING);
			$ticketManager = TicketManager::getTicketById($id);
			$this->render('edit', array('ticketmanager'=>$ticketManager));
		}
		function update(){
			$id = filter_input(INPUT_POST,'id',FILTER_SANITIZE_STRING);
			$name = filter_input(INPUT_POST,'name',FILTER_SANITIZE_STRING);
			$price = filter_input(INPUT_POST,'price',FILTER_SANITIZE_NUMBER_INT);

			$ticketManager = TicketManager::updateTicket($id,$name,$price);

			header("LOCATION: index.php?controller=ticketmanager");
			
		}
	}
?>