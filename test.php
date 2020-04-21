<?php 
	require_once('models/FilmManager.php');
	require_once('models/Slide.php');
	require_once('models/OutStanding.php');
	require_once('models/Promotion.php');
	require_once('models/Account.php');
	require_once('models/ShowTime.php');
	require_once('function.php');

	// $list = Account::getAccountById('user1');
	// foreach ($list as $key) {
	// 	$a = $key->password;
	// }
	//$list = ShowTime::getShowTimeFilm('FZ2', 'CGVVC', 'TK2D');
	$list = ShowTime::getFilm('CGVVC','2020-04-25');
	print_r($list);
?>