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
	$list = ShowTime::getDateShowTime('2020-04-06');
	print_r($list);
?>