<?php 
	require_once("config.php");
	class ShowTime{
		public $id;
		public $idFilm;
		public $idTicket;
		public $dateF;
		public $timeF;
		public $movieTheater;


		/**
		 * Class Constructor
		 * @param    $id   
		 * @param    $idFilm   
		 * @param    $idTicket   
		 * @param    $dateF   
		 * @param    $timeF   
		 * @param    $movieTheater   
		 */
		public function __construct($id, $idFilm, $idTicket, $dateF, $timeF, $movieTheater)
		{
			$this->id = $id;
			$this->idFilm = $idFilm;
			$this->idTicket = $idTicket;
			$this->dateF = $dateF;
			$this->timeF = $timeF;
			$this->movieTheater = $movieTheater;
		}

		public function getAll(){
			$sql = "select * from xuatchieuphim";
			$db = DB::getDB();
			$stm = $db->query($sql);
			$list = array();
			foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $item) {
				$list[] = new ShowTime($item['maXuatChieu'], $item['maPhim'], $item['maLoaiVe'] ,$item['ngayChieu'], $item['gioChieu'], $item['maRapChieu']);
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

		public function addShowTime($id, $idFilm, $idTicket,$dateF, $timeF, $movieTheater){
			$sql = "INSERT INTO xuatchieuphim VALUES (:id, :idFilm, :idTicket, :dateF, :timeF, :movieTheater)";
			$db = DB::getDB();
			$stm = $db->prepare($sql);

			$stm->execute(array(':id'=>$id, ':idFilm'=>$idFilm, ':idTicket'=>$idTicket,':dateF'=>$dateF, ':timeF'=>$timeF,':movieTheater'=>$movieTheater));

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