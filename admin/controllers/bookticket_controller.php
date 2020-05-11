<?php
	require_once("base_controller.php");
	require_once("models/BookTicket.php");
	require_once("models/BookTicketDetail.php");
	require_once("../function.php");

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
			$bookTicket = BookTicket::getAll();
			$this->render('index', array('bookticket'=>$bookTicket));
		}
		function detail(){
			$idOrder = filter_input(INPUT_GET,'id',FILTER_SANITIZE_STRING);

			$infor = BookTicketDetail::getBookTicketById($idOrder);

			$this->render('detail',array('infor'=>$infor));
		}
		function approve(){
			$idOrder = filter_input(INPUT_GET,'id',FILTER_SANITIZE_STRING);

			BookTicket::updateStatus($idOrder, 'Approved');

			$bookTicket = BookTicket::getAll();

			$this->render('index', array('bookticket'=>$bookTicket));
		}
	}
?>