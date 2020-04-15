<?php 
	require_once('models/FilmManager.php');
	require_once('models/Slide.php');
	require_once('models/OutStanding.php');
	require_once('models/Promotion.php');
	require_once('models/Account.php');
	require_once('function.php');

	$list = Account::getAccountById('user1');
	foreach ($list as $key) {
		$a = $key->password;
	}
	//Account::login('user','123456');
	print_r($list);
	echo "$a";
?>