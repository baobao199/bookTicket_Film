<?php
	require_once("base_controller.php");
	require_once("models/TicketManager.php");
	require_once("models/FilmManager.php");
	require_once("models/MovieTheater.php");
	require_once("models/BookTicketDetail.php");
	require_once("models/Food.php");
	require_once("models/ShowTime.php");
	require_once("models/Account.php");
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
				redirect("?controller=account");
			}
		}

		function bookticket(){
			$acc = unserialize($_SESSION['acc']);

			$nameCustomer = $acc->fullName;

			$idmovieTheater = filter_input(INPUT_POST,'movietheater',FILTER_SANITIZE_STRING);
			$idFilm = filter_input(INPUT_POST,'namefilm',FILTER_SANITIZE_STRING);
			$dateF = filter_input(INPUT_POST,'datef',FILTER_SANITIZE_STRING);
			$timeF = filter_input(INPUT_POST,'timef',FILTER_SANITIZE_STRING);
			$idTicket = filter_input(INPUT_POST,'idticket',FILTER_SANITIZE_STRING);
			$quantityTicket = filter_input(INPUT_POST,'quantityticket',FILTER_SANITIZE_STRING);
			$idFood = filter_input(INPUT_POST,'idfood',FILTER_SANITIZE_STRING);
			$quantityFood = filter_input(INPUT_POST,'quantityfood',FILTER_SANITIZE_STRING);

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

			$total_price = $aumountTicket + $amountFood; //tính tổng tiền


			BookTicketDetail::addBookTicket('HD1',$nameCustomer, $nameMovieTheater, $nameFilm, $dateF, $timeF, $idTicket, $quantityTicket, $priceTicket, $nameFood, $quantityFood, $priceFood, $total_price);

			// $this->render('bookticket',array());

			redirect("?controller=bookticket&action=detail");// xem thông tin vé
		}

		function detail(){
			$orderDetail = BookTicketDetail::getBookTicketById('HD1');
			$this->render('detail',array('orderdetail'=>$orderDetail));
		}
	}
?>