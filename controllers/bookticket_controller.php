<?php
	require_once("base_controller.php");
	require_once("models/TicketManager.php");
	require_once("models/FilmManager.php");
	require_once("models/MovieTheater.php");
	require_once("models/BookTicketDetail.php");
	require_once("models/Food.php");
	require_once("models/ShowTime.php");
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
			$nameFood = Food::getAll();
			$nameMovieTheater = MovieTheater::getAll();
			$showTime = ShowTime::getAll();
			$this->render('index', array('namefood'=>$nameFood, 'namemovietheater'=>$nameMovieTheater, 'showtime'=>$showTime));
		}

		function bookticket(){
			$movieTheater = filter_input(INPUT_POST,'movietheater',FILTER_SANITIZE_STRING);
			$nameFilm = filter_input(INPUT_POST,'namefilm',FILTER_SANITIZE_STRING);
			$dateF = filter_input(INPUT_POST,'datef',FILTER_SANITIZE_STRING);
			$timeF = filter_input(INPUT_POST,'timef',FILTER_SANITIZE_STRING);
			$idTicket = filter_input(INPUT_POST,'idticket',FILTER_SANITIZE_STRING);
			$quantityTicket = filter_input(INPUT_POST,'quantityticket',FILTER_SANITIZE_STRING);
			$idFood = filter_input(INPUT_POST,'idfood',FILTER_SANITIZE_STRING);
			$quantityFood = filter_input(INPUT_POST,'quantityfood',FILTER_SANITIZE_STRING);

			$ticket = TicketManager::getTicketById($idTicket); //lấy mã vé 
			$food = Food::getFoodById($idFood); //lấy mã thức ăn

			foreach ($ticket as $t) {
				$priceTicket = $t->price; //lấy giá vé
			}
			$aumountTicket = TicketManager::sumPrice($priceTicket, $quantityTicket);// thành tiền giá vé
			print_r($aumountTicket);

			foreach ($food as $f) {
				$nameFood = $f->nameFood;
				$priceFood = $f->price; //lấy giá đồ ăn
			}
			$amountFood = TicketManager::sumPrice($priceFood, $quantityFood);//thành tiền đồ ăn
			print_r($amountFood);

			$total_price = $aumountTicket + $amountFood; //tính tổng tiền
			print_r($total_price);

			BookTicketDetail::addBookTicket('HD1','User 1', $movieTheater, $nameFilm, $dateF, $timeF, $idTicket, $quantityTicket, $priceTicket, $nameFood, $quantityFood, $priceFood, $total_price);
			redirect("?controller=bookticket&action=detail");
		}

		function detail(){
			$this->render('detail',array('detail'=>$detailTicket));
		}
	}
?>