<?php 
	require_once('models/FilmManager.php');
	require_once('models/Slide.php');
	require_once('models/OutStanding.php');
	require_once('models/Account.php');
	require_once('models/ShowTime.php');
	require_once('models/Food.php');
	require_once('models/BookTicketDetail.php');
	require_once('../function.php');

	$infor = BookTicketDetail::getBookTicketById('VCM00001');
	print_r($infor);

	// foreach ($infor as $o) {
	// 	$maHoaDon = $o->id;
	// 	$khachHang = $o->nameGuess;
	// 	$tenRap = $o->movietheater;
	// 	$tenPhim = $o->nameFilm;
	// 	$ngayChieu = $o->dateF;
	// 	$gioChieu = $o->timeF;
	// 	$loaiVe = $o->ticket;
	// 	$soLuongVe = $o->quantityTicket;
	// 	$giaVe = $o->priceTicket;
	// 	$doAn = $o->food;
	// 	$soLuong = $o->quantityFood;
	// 	$giaTien = $o->priceFood;
	// 	$tongTien = $o->total;
	// }

	// $to_email = "nguyenbao605@gmail.com";
	// $subject = "XÁC NHẬN ĐẶT VÉ";
	// $body = "Số Hóa Đơn: ".$maHoaDon. "\n". 
	// 		"Tên Khách Hàng: ".$khachHang. "\n".
	// 		"Tên Rạp Chiếu: " .$tenRap. "\n".
	// 		"Tên Phim: " .$tenPhim. "\n".
	// 		"Ngày Chiếu: " .$ngayChieu. "\n".
	// 		"Giờ Chiếu: " .$gioChieu. "\n".
	// 		"Loại Vé: " .$gioChieu. "\n".
	// 		"Số Lượng Vé: " .$soLuongVe. "\n".
	// 		"Đồ ăn: " .$doAn. "\n".
	// 		"Số Lượng: " .$soLuong. "\n".
	// 		"_____________________ \n" .
	// 		"Tổng Tiền: " .number_format($tongTien). "VNĐ";
	// $headers = "From: sender";

	// if ( mail($to_email, $subject, $body, $headers)) {
	// 	echo("Email successfully sent to $to_email...");
	// } else {
	// 	echo("Email sending failed...");
	// }

   
?>