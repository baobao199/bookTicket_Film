<?php
	require_once("base_controller.php");
	require_once("models/BookTicket.php");
	require_once("models/BookTicketDetail.php");
	require_once("../function.php");

	class BookticketController extends BaseController{
		function __construct()
		{
			$this->name = 'bookticket';
		}
		function error(){
			echo 'error';
		}
		function index()
		{
			$bookTicket = BookTicket::getAll();
			$this->render('index', array('bookticket'=>$bookTicket));
		}
		function detail(){
			$idOrder = filter_input(INPUT_GET,'id',FILTER_SANITIZE_STRING);

			$infor = BookTicketDetail::getBookTicketById($idOrder);

			$this->render('detail',array('infor'=>$infor));
		}
		
		function approve(){
			$idOrder = filter_input(INPUT_GET,'id',FILTER_SANITIZE_STRING);

			$status = BookTicket::getById($idOrder);

			//lấy chi tiết vé xem phim
			$infor = BookTicketDetail::getBookTicketById($idOrder);

			foreach ($infor as $o) {
				$maHoaDon = $o->id;
				$khachHang = $o->nameGuess;
				$email = $o->email;
				$tenRap = $o->movietheater;
				$tenPhim = $o->nameFilm;
				$ngayChieu = $o->dateF;
				$gioChieu = $o->timeF;
				$loaiVe = $o->ticket;
				$soLuongVe = $o->quantityTicket;
				$giaVe = $o->priceTicket;
				$doAn = $o->food;
				$soLuong = $o->quantityFood;
				$giaTien = $o->priceFood;
				$tongTien = $o->total;
			}

			foreach ($status as $s) {
				$status= $s->status;
			}

			//hủy đặt vé
			if($status === "Cancle"){

				$to_email = $email;
				$subject = "CONFIRM CANCLE ORDER TICKET";
				$body = "Bạn đã hủy đặt vé";
				$headers = "From: sender";

				mail($to_email, $subject, $body, $headers);
			}
			else if ($status === "No approved"){

				//cập nhật trạng thái
				BookTicket::updateStatus($idOrder, 'Approved');
				//gửi mail xác nhận hóa đơn
				$to_email = $email;
				$subject = "CONFIRM ORDER TICKET";
				$body = "Số Hóa Đơn: ".$maHoaDon. "\n". 
				"Tên Khách Hàng: ".$khachHang. "\n".
				"Tên Rạp Chiếu: " .$tenRap. "\n".
				"Tên Phim: " .$tenPhim. "\n".
				"Ngày Chiếu: " .$ngayChieu. "\n".
				"Giờ Chiếu: " .$gioChieu. "\n".
				"Loại Vé: " .$loaiVe. "\n".
				"Số Lượng Vé: " .$soLuongVe. "\n".
				"Đồ ăn: " .$doAn. "\n".
				"Số Lượng: " .$soLuong. "\n".
				"_____________________ \n" .
				"Tổng Tiền: " .number_format($tongTien). "VNĐ";
				$headers = "From: sender";

				mail($to_email, $subject, $body, $headers);
				
			}

			$bookTicket = BookTicket::getAll();

			$this->render('index', array('bookticket'=>$bookTicket));
		}
	}
?>