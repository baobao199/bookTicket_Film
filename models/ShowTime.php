<?php 
	require_once("../config.php");
	class ShowTime{
		public $id;
		public $idFilm;
		public $nameFilm;
		public $dateF;
		public $timeF;
		public $ticket;
		public $idMovieTheater;
		public $seat;


		/**
		 * Class Constructor
		 * @param    $id   
		 * @param    $idFilm   
		 * @param    $nameFilm   
		 * @param    $dateF   
		 * @param    $timeF   
		 * @param    $ticket   
		 * @param    $idMovieTheater   
		 * @param    $seat   
		 * @param    $image   
		 */
		public function __construct($id, $idFilm, $nameFilm, $dateF, $timeF, $ticket, $idMovieTheater, $seat)
		{
			$this->id = $id;
			$this->idFilm = $idFilm;
			$this->nameFilm = $nameFilm;
			$this->dateF = $dateF;
			$this->timeF = $timeF;
			$this->ticket = $ticket;
			$this->idMovieTheater = $idMovieTheater;
			$this->seat = $seat;
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