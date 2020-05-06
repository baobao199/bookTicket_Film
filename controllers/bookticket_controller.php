<?php
	require_once("base_controller.php");
	require_once("models/TicketManager.php");
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
			$this->render('index', array('nameticket'=>$nameTicket));
		}
	}
?>