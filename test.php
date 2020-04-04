<?php 
	require_once('models/FilmManager.php');
	require_once('models/TicketManager.php');
	require_once('function.php');

	$list = TicketManager::getAll();
	print_r($list);
?>