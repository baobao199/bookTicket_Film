<?php 
	require_once('models/FilmManager.php');

	$list = FilmManager::getFilmById('FZ2');
	print_r($list);
?>