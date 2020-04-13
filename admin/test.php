<?php 
	require_once('models/FilmManager.php');
	require_once('models/Slide.php');
	require_once('models/OutStanding.php');
	require_once('../function.php');

	$list = OutStanding::getOutStanding();
	print_r($list);
?>