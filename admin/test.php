<?php 
	require_once('models/FilmManager.php');
	require_once('models/Slide.php');
	require_once('models/OutStanding.php');
	require_once('models/Account.php');
	require_once('models/ShowTime.php');
	require_once('models/Food.php');
	require_once('models/BookTicket.php');
	require_once('../function.php');


	// $list = BookTicket::getAll();
	// print_r($list);

	$sub = "Your subject";
	$msg = "Your message";
	$rec = "nguyenbao605@gmail.com";
	mail($rec,$sub,$msg);
?>