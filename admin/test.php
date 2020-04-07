<?php 
	require_once('models/FilmManager.php');
	require_once('models/Slide.php');
	require_once('../function.php');

	$list = Slide::getAll();
	print_r($list);
?>