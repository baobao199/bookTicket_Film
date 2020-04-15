<?php
	require_once("base_controller.php");
	require_once("models/Account.php");
	require_once("../function.php");
	class CustomerController extends BaseController{
		function __construct()
		{
			$this->name = 'customer';
		}
		function error(){
			echo 'error';
		}
		function index()
		{
			$account = Account::getAll();
			$this->render('index', array('account' => $account));
		}
	}
?>