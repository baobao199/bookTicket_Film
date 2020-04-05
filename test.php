<?php 
	require_once('models/FilmManager.php');
	require_once('models/TicketManager.php');
	require_once('function.php');

	$list = TicketManager::getTicketById('TK2D');
	print_r($list);
?>