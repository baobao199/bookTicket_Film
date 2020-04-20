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
		 */
		public function __construct($id, $idFilm, $nameFilm, $idMovieTheater, $room, $ticket, $dateF, $timeF, $seat)
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
		}

		public function getFilm($idMovieTheater){
			$sql = "SELECT DISTINCT tenPhim FROM xuatchieuphim where maRapPhim = :idMovieTheater";
			$db = DB::getDB();
			$stm = $db->prepare($sql);
			$stm->execute(array('idMovieTheater'=> $idMovieTheater));
			foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $item) 
			{
				$list[] = $item;		
			}
			return $list;

		}
		
		public function getAll(){
			$sql = "select * from xuatchieuphim";
			$db = DB::getDB();
			$stm = $db->query($sql);
			$list = array();
			foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $item) {
				$list[] = new ShowTime($item['maXuatChieu'], $item['maPhim'], $item['tenPhim'], $item['ngayChieu'], $item['gioChieu'], $item['loaiVe'], $item['maRapPhim'],$item['gheTrong']);
			}
			return $list;
		}

		public function getMovieById($id){
			$sql = "select * from rapphim where maRapPhim = :id";
			$db = DB::getDB();
			$stm = $db->prepare($sql);
			$stm->execute(array('id'=> $id));
			$list = array();
			foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $item) 
			{
				$list[]	= new MovieTheater($item['maRapPhim'],$item['tenRapPhim'],$item['diaChi'], $item['soDienThoai'], $item['hinhAnh']);		
			}
			return $list;
		}
	}
?>