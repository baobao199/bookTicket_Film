<?php 
	require_once('models/FilmManager.php');
	require_once('models/Slide.php');
	require_once('models/OutStanding.php');
	require_once('models/Account.php');
	require_once('../function.php');

	$list = Account::getAll();
	print_r($list);
?>