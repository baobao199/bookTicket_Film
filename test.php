<?php 
	require_once('models/FilmManager.php');
	require_once('models/Slide.php');
	require_once('models/OutStanding.php');
	require_once('models/Promotion.php');
	require_once('function.php');

	$list = Promotion::getPromotion('SK');
	print_r($list);
?>