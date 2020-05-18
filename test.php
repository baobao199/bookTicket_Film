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

	// $list = Account::getAccountById('user1');
	// foreach ($list as $key) {
	// 	$a = $key->password;
	// }
	//$list = ShowTime::getShowTimeFilm('FZ2', 'CGVVC', 'TK2D');
	$list = BookTicketDetail::getBookTicketById('VCM00004');
	print_r($list);


?>

<form action="test.php" method="post">
    <input type="checkbox" name="check_list[]" value="value 1">
    <input type="checkbox" name="check_list[]" value="value 2">
    <input type="checkbox" name="check_list[]" value="value 3">
    <input type="checkbox" name="check_list[]" value="value 4">
    <input type="checkbox" name="check_list[]" value="value 5">
    <input type="submit" />
</form>
<?php
if(!empty($_POST['check_list'])) {
    foreach($_POST['check_list'] as $check) {
            echo $check; 
    }
}
?>