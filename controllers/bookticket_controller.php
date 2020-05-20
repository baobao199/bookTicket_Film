<?php
	require_once("base_controller.php");
	require_once("models/TicketManager.php");
	require_once("models/FilmManager.php");
	require_once("models/MovieTheater.php");
	require_once("models/BookTicketDetail.php");
	require_once("models/Food.php");
	require_once("models/ShowTime.php");
	require_once("models/Account.php");
	require_once("models/BookTicket.php");
	require_once("function.php");
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
			if(isLoggedIn()){
				$nameFood = Food::getAll();
				$nameMovieTheater = MovieTheater::getAll();
				$showTime = ShowTime::getAll();
				$this->render('index', array('namefood'=>$nameFood, 'namemovietheater'=>$nameMovieTheater, 'showtime'=>$showTime));
				
			}
			else{
				redirect("?controller=account",'Vui lòng đăng nhập để mua vé');
			}
		}

		function bookticket(){

			//tạo số hóa đơn đặt vé
			$idBookTicket = BookTicketDetail::getIdBookTicket();

			if( empty($idBookTicket) ){
				$billNumber = 'VCM00001';
			}
			else{
				for($i=0; $i<count($idBookTicket); $i++){
					$valueLast = $idBookTicket[$i]['maDatVe'];
				}
				$number = substr( $valueLast, -5);//lấy số hóa đơn
				$billNumber = idNumber($number);
			}

			//Lấy tên người đặt
			$acc = unserialize($_SESSION['acc']);
			$nameCustomer = $acc->fullName;
			$email = $acc->email;

			//Kiểm tra
			$idmovieTheater = filter_input(INPUT_POST,'movietheater',FILTER_SANITIZE_STRING);
			$idFilm = filter_input(INPUT_POST,'namefilm',FILTER_SANITIZE_STRING);
			$dateF = filter_input(INPUT_POST,'datef',FILTER_SANITIZE_STRING);
			$timeF = filter_input(INPUT_POST,'timef',FILTER_SANITIZE_STRING);
			$idTicket = filter_input(INPUT_POST,'idticket',FILTER_SANITIZE_STRING);
			$quantityTicket = filter_input(INPUT_POST,'quantityticket',FILTER_SANITIZE_STRING);
			$idFood = filter_input(INPUT_POST,'idfood',FILTER_SANITIZE_STRING);
			$quantityFood = filter_input(INPUT_POST,'quantityfood',FILTER_SANITIZE_STRING);
			$idShowTime = filter_input(INPUT_POST,'idShowTime',FILTER_SANITIZE_STRING);

			
    		if(!empty($_POST['seat'])) {
			    
			    $seat = implode(" ",$_POST['seat']);
			
			}

			$ticket = TicketManager::getTicketById($idTicket); //lấy ds vé 
			$food = Food::getFoodById($idFood); //lấy ds thức ăn
			$film = FilmManager::getFilmById($idFilm); //lấy ds phim
			$movieTheater = MovieTheater::getMovieTheaterById($idmovieTheater); //lấy ds rạp phim

			foreach ($ticket as $t) {
				$priceTicket = $t->price; //lấy giá vé
			}
			$aumountTicket = TicketManager::sumPrice($priceTicket, $quantityTicket);// thành tiền giá vé


			foreach ($food as $f) {
				$nameFood = $f->nameFood;
				$priceFood = $f->price; //lấy giá đồ ăn
			}
			$amountFood = TicketManager::sumPrice($priceFood, $quantityFood);//thành tiền đồ ăn

			foreach ($film as $n) {
				$nameFilm = $n->name; //lấy tên phim
			}

			foreach ($movieTheater as $m) {
				$nameMovieTheater = $m->name; //lấy tên rạp phim
			}

			//cập nhật ghế đã chọn ở xuất chiếu phim
			$ShowTimeById = ShowTime::getShowTimeById($idShowTime);
			foreach ($ShowTimeById as $s) {
				$seatSelected = $s->seatSelected;//lấy ghế đã chọn cập nhật thêm
			}

			$all = $seatSelected." ".$seat;

			ShowTime::updateSeatSelected($idShowTime, $all);


			$total_price = $aumountTicket + $amountFood; //tính tổng tiền

			//lấy ngày hiện tại
			$now = new DateTime();
			$nowDate = $now->format('Y-m-d'); 

			//thêm vào đặt vé
			BookTicket::addBookTicket($billNumber, $nameCustomer, $nowDate, $total_price, 'No approved');

			//thêm vào chi tiết đặt vé
			BookTicketDetail::addBookTicket($billNumber,$nameCustomer, $email, $nameMovieTheater, $nameFilm, $dateF, $timeF, $idTicket, $quantityTicket, $priceTicket, $nameFood, $quantityFood, $priceFood, $total_price, $seat);

			redirect("?controller=bookticket&action=orderhistory");// xem thông tin vé
		}

		function detail(){
			$idOrder = filter_input(INPUT_POST,'id',FILTER_SANITIZE_STRING);

			$infor = BookTicketDetail::getBookTicketById($idOrder);

			$this->render('detail',array('infor'=>$infor));
		}

		function orderhistory(){
			//Lấy tên người đặt
			$acc = unserialize($_SESSION['acc']);
			$nameCustomer = $acc->fullName;

			$list = BookTicket::getBookTicketByNameCustomer($nameCustomer);

			$this->render('orderhistory', array('list'=>$list));
		}

		function cancle(){
			$acc = unserialize($_SESSION['acc']);
			$nameCustomer = $acc->fullName;
			
			$idOrder = filter_input(INPUT_POST,'id',FILTER_SANITIZE_STRING);

			BookTicket::cancleOrder($idOrder, 'Cancle');

			$list = BookTicket::getBookTicketByNameCustomer($nameCustomer);

			$this->render('orderhistory', array('list'=>$list));
		}

		function delete(){
			$idOrder = filter_input(INPUT_POST,'id',FILTER_SANITIZE_STRING);

			$acc = unserialize($_SESSION['acc']);
			$nameCustomer = $acc->fullName;

			BookTicket::deleteOrder($idOrder);
			BookTicketDetail::deleteOrderDetail($idOrder);

			$list = BookTicket::getBookTicketByNameCustomer($nameCustomer);

			$this->render('orderhistory', array('list'=>$list));
		}
	}
?>