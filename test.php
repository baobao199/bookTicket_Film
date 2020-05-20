<?php 
	require_once('models/FilmManager.php');
	require_once('models/Slide.php');
	require_once('models/OutStanding.php');
	require_once('models/Promotion.php');
	require_once('models/Account.php');
	require_once('models/ShowTime.php');
	require_once('models/TicketManager.php');
	require_once('models/Food.php');
	require_once('models/BookTicketDetail.php');
	require_once('models/BookTicket.php');
	require_once('function.php');

	$list = ShowTime::getShowTimeById("MXC3");
	foreach ($list as $l) {
		$test = $l->seatSelected;
	}
	$tmp = "A1 A2";
	echo $test." ".$tmp;

?>