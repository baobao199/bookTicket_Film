<?php 
	require_once('models/FilmManager.php');
	require_once('models/Slide.php');
	require_once('models/OutStanding.php');
	require_once('models/Account.php');
	require_once('models/ShowTime.php');
	require_once('models/Food.php');
	require_once('models/BookTicket.php');
	require_once('../function.php');

	$status = BookTicket::getById('VCM00001');
	
	foreach ($status as $s) {
		$status= $s->status;
	}

	if($status === "Cancle"){
		echo 'ok';
	}


?>