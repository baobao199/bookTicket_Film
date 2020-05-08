<?php
	require_once("config.php");
	class BookTicketDetail{
		public $id;
		public $movietheater;
		public $nameGuess;
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


		/**
		 * Class Constructor
		 * @param    $id   
		 * @param    $movietheater   
		 * @param    $nameGuess   
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
		 */
		public function __construct($id, $movietheater, $nameGuess, $nameFilm, $dateF, $timeF, $ticket, $quantityTicket, $priceTicket, $food, $quantityFood, $priceFood, $total)
		{
			$this->id = $id;
			$this->movietheater = $movietheater;
			$this->nameGuess = $nameGuess;
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
		}

		public function addBookTicket($id, $movietheater, $nameGuess, $nameFilm, $dateF, $timeF, $ticket, $quantityTicket, $priceTicket, $food, $quantityFood, $priceFood, $total){

			$sql = "INSERT INTO chitietdatve VALUES ( :id, :movietheater, :nameGuess, :nameFilm,:dateF, :timeF, :ticket, :quantityTicket, :priceTicket, :food, :quantityFood, :priceFood, :total)";
			$db = DB::getDB();
			$stm = $db->prepare($sql);

			$stm->execute(array(':id'=>$id, ':movietheater'=>$movietheater, ':nameGuess'=>$nameGuess, ':nameFilm'=>$nameFilm, ':dateF'=>$dateF, ':timeF'=>$timeF, ':ticket'=>$ticket, ':quantityTicket'=>$quantityTicket, ':priceTicket'=>$priceTicket, ':food'=>$food, ':quantityFood'=>$quantityFood, ':priceFood'=>$priceFood, ':total'=>$total));

			return $stm->rowCount() == 1;
		}

	}
?>