<?php 
	require_once("../config.php");
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

		public function getAll(){
			$sql = "select * from xuatchieuphim";
			$db = DB::getDB();
			$stm = $db->query($sql);
			$list = array();
			foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $item) {
				$list[] = new ShowTime($item['maXuatChieu'], $item['maPhim'], $item['tenPhim'], $item['maRapPhim'], $item['phongChieu'], $item['loaiVe'], $item['ngayChieu'], $item['gioChieu'], $item['ghe']);
			}
			return $list;
		}

		public function deleteShowTime($id){
			$sql = "delete from xuatchieuphim where maXuatChieu = :id";
			$db = DB::getDB();
			$stm = $db->prepare($sql);
			$stm->execute(array(':id'=>$id));

			return $stm->rowCount() == 1;
		}

		public function addShowTime($id, $idFilm, $nameFilm, $idMovieTheater, $room, $ticket, $dateF, $timeF, $seat){
			$sql = "INSERT INTO xuatchieuphim VALUES (:id, :idFilm, :nameFilm, :idMovieTheater, :room, :ticket, :dateF, :timeF,  :seat)";
			$db = DB::getDB();
			$stm = $db->prepare($sql);

			$stm->execute(array(':id'=>$id, ':idFilm'=>$idFilm, ':nameFilm'=>$nameFilm, ':idMovieTheater'=>$idMovieTheater, ':room'=>$room, ':ticket'=>$ticket, ':dateF'=>$dateF, ':timeF'=>$timeF, ':seat'=>$seat));

			return $stm->rowCount() == 1;
		}

		public function updateShowTime($id, $idFilm, $idTicket, $dateF, $timeF, $movieTheater){
			$sql = "UPDATE xuatchieuphim SET maPhim = :idFilm, maLoaiVe = :idTicket, ngayChieu = :dateF, gioChieu = :timeF, maRapChieu = :movieTheater  where maXuatChieu = :id ";
			$db = DB::getDB();
			$stm = $db->prepare($sql);

			$stm->execute(array(':id'=>$id, ':idFilm'=>$idFilm, ':idTicket'=>$idTicket,':dateF'=>$dateF, ':timeF'=>$timeF,':movieTheater'=>$movieTheater));

			return $stm->rowCount() == 1;
		}

		public function getShowTimeById($id){
			$sql = "select * from xuatchieuphim where maXuatChieu = :id";
			$db = DB::getDB();
			$stm = $db->prepare($sql);
			$stm->execute(array('id'=> $id));
			$list = array();
			foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $item) 
			{
				$list[]	= new ShowTime($item['maXuatChieu'], $item['maPhim'], $item['maLoaiVe'] ,$item['ngayChieu'], $item['gioChieu'], $item['maRapChieu']);		
			}
			return $list;
		}
	}
?>