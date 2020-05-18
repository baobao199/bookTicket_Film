<?php
	require_once("config.php");
	class BookTicketDetail{
		public $id;
		public $nameGuess;
		public $email;
		public $movietheater;
		public $nameFilm;
		public $dateF;
		public $timeF;
		public $ticket;
		public $quantityTicket;
		public $priceTicket;
		public $food;
		public $quantityFood;
		public $priceFood;
		public $total;
		public $seat;


		/**
		 * Class Constructor
		 * @param    $id   
		 * @param    $nameGuess   
		 * @param    $email   
		 * @param    $movietheater   
		 * @param    $nameFilm   
		 * @param    $dateF   
		 * @param    $timeF   
		 * @param    $ticket   
		 * @param    $quantityTicket   
		 * @param    $priceTicket   
		 * @param    $food   
		 * @param    $quantityFood   
		 * @param    $priceFood   
		 * @param    $total   
		 * @param    $seat   
		 */
		public function __construct($id, $nameGuess, $email, $movietheater, $nameFilm, $dateF, $timeF, $ticket, $quantityTicket, $priceTicket, $food, $quantityFood, $priceFood, $total, $seat)
		{
			$this->id = $id;
			$this->nameGuess = $nameGuess;
			$this->email = $email;
			$this->movietheater = $movietheater;
			$this->nameFilm = $nameFilm;
			$this->dateF = $dateF;
			$this->timeF = $timeF;
			$this->ticket = $ticket;
			$this->quantityTicket = $quantityTicket;
			$this->priceTicket = $priceTicket;
			$this->food = $food;
			$this->quantityFood = $quantityFood;
			$this->priceFood = $priceFood;
			$this->total = $total;
			$this->seat = $seat;
		}

		public function getBookTicketById($id){
			$sql = "SELECT * from chitietdatve where maDatVe = :id";
			$db = DB::getDB();
			$stm = $db->prepare($sql);
			$stm->execute(array('id'=> $id));
			$list = array();
			foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $item) 
			{
				$list[]	= new BookTicketDetail($item['maDatVe'], $item['khachHang'], $item['email'],$item['rapPhim'], $item['tenPhim'], $item['ngayChieu'], $item['gioChieu'], $item['loaiVe'], $item['soLuongVe'], $item['giaVe'], $item['doAn'], $item['soLuong'], $item['giaDoAn'], $item['tongTien'], $item['ghe']);		
			}
			return $list;
		}

		public function addBookTicket($id, $nameGuess, $email, $movietheater, $nameFilm, $dateF, $timeF, $ticket, $quantityTicket, $priceTicket, $food, $quantityFood, $priceFood, $total, $seat){

			$sql = "INSERT INTO chitietdatve VALUES ( :id, :nameGuess, :email,:movietheater, :nameFilm, :dateF, :timeF, :ticket, :quantityTicket, :priceTicket, :food, :quantityFood, :priceFood, :total, :seat)";
			$db = DB::getDB();
			$stm = $db->prepare($sql);

			$stm->execute(array(':id'=>$id,':nameGuess'=>$nameGuess, ':email'=>$email,':movietheater'=>$movietheater, ':nameFilm'=>$nameFilm, ':dateF'=>$dateF, ':timeF'=>$timeF, ':ticket'=>$ticket, ':quantityTicket'=>$quantityTicket, ':priceTicket'=>$priceTicket, ':food'=>$food, ':quantityFood'=>$quantityFood, ':priceFood'=>$priceFood, ':total'=>$total, ':seat'=>$seat));

			return $stm->rowCount() == 1;
		}

		public function getIdBookTicket(){
			$sql = "select maDatVe from chitietdatve";
			$db = DB::getDB();
			$stm = $db->query($sql);
			$list = array();
			foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $item) 
			{
				$list[]	= $item;
			}
			return $list;
		}

		public function deleteOrderDetail($id){
			$sql = "delete from chitietdatve where maDatVe = :id";
			$db = DB::getDB();
			$stm = $db->prepare($sql);
			$stm->execute(array(':id'=>$id));

			return $stm->rowCount() == 1; 
		}

	}
?>