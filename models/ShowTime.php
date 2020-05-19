<?php 
	require_once("config.php");
	class ShowTime{
		public $id;
		public $idFilm;
		public $nameFilm;
		public $idMovieTheater;
		public $room;
		public $ticket;
		public $dateF;
		public $timeF;
		public $seat;
		public $seatSelected;


		/**
		 * Class Constructor
		 * @param    $id   
		 * @param    $idFilm   
		 * @param    $nameFilm   
		 * @param    $idMovieTheater   
		 * @param    $room   
		 * @param    $ticket   
		 * @param    $dateF   
		 * @param    $timeF   
		 * @param    $seat   
		 * @param    $seatSelected   
		 */
		public function __construct($id, $idFilm, $nameFilm, $idMovieTheater, $room, $ticket, $dateF, $timeF, $seat, $seatSelected)
		{
			$this->id = $id;
			$this->idFilm = $idFilm;
			$this->nameFilm = $nameFilm;
			$this->idMovieTheater = $idMovieTheater;
			$this->room = $room;
			$this->ticket = $ticket;
			$this->dateF = $dateF;
			$this->timeF = $timeF;
			$this->seat = $seat;
			$this->seatSelected = $seatSelected;
		}

		public function getAll(){
			$sql = "select * from xuatchieuphim";
			$db = DB::getDB();
			$stm = $db->query($sql);
			$list = array();
			foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $item) 
			{
				$list[]	= new ShowTime($item['maXuatChieu'], $item['maPhim'], $item['tenPhim'], $item['maRapPhim'], $item['phongChieu'], $item['loaiVe'], $item['ngayChieu'], $item['gioChieu'], $item['ghe'], $item['gheDaChon']);		
			}
			return json_encode($list);
		}

		public function getFilm($idMovieTheater, $dateF){
			$sql = "SELECT DISTINCT maphim, tenPhim FROM xuatchieuphim where maRapPhim = :idMovieTheater and ngayChieu = :dateF";
			$db = DB::getDB();
			$stm = $db->prepare($sql);
			$stm->execute(array('idMovieTheater'=> $idMovieTheater, ':dateF'=>$dateF));
			foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $item) 
			{
				$list[] = $item;		
			}
			return $list;

		}
		
		public function getShowTimeFilm($idFilm, $idMovieTheater, $ticket,  $dateF){
			$sql = "select gioChieu from xuatchieuphim where maPhim = :idFilm and maRapPhim = :idMovieTheater and loaiVe = :ticket  and ngayChieu = :dateF";
			$db = DB::getDB();
			$db = DB::getDB();
			$stm = $db->prepare($sql);
			$stm->execute(array(':idFilm'=>$idFilm,':idMovieTheater'=> $idMovieTheater, ':ticket'=>$ticket, ':dateF'=>$dateF));
			foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $item) {
				$list[] = $item;
			}
			if(empty($list)){
				return null;
			}
			return $list;
			
		}
	}
?>