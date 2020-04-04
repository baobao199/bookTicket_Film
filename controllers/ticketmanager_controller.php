<?php
	require_once("base_controller.php");
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
			echo 'index';
		}

		function add(){
			echo 'add';
		}
		function delete(){
			echo 'delete';
		}
		function edit(){
			echo 'edit';
		}
	}
?>