<?php 
	require_once("config.php");
	class ShowTime{
		public $id;
		public $idFilm;
		public $dateF;
		public $timeF;
		public $movieTheater;
		public $room;


		/**
		 * Class Constructor
		 * @param    $id   
		 * @param    $idFilm   
		 * @param    $dateF   
		 * @param    $timeF   
		 * @param    $movieTheater   
		 * @param    $room   
		 */
		public function __construct($id, $idFilm, $dateF, $timeF, $movieTheater, $room)
		{
			$this->id = $id;
			$this->idFilm = $idFilm;
			$this->dateF = $dateF;
			$this->timeF = $timeF;
			$this->movieTheater = $movieTheater;
			$this->room = $room;
		}




		public function getAll(){
			$sql = "select * from xuatchieuphim";
			$db = DB::getDB();
			$stm = $db->query($sql);
			$list = array();
			foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $item) {
				$list[] = new ShowTime($item['maXuatChieu'], $item['maPhim'], $item['ngayChieu'], $item['gioChieu'], $item['rapChieu'],$item['phongChieu']);
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

		public function addShowTime($id, $idFilm, $dateF, $timeF, $movieTheater, $room){
			$sql = "INSERT INTO xuatchieuphim VALUES ( :id, :idFilm, :dateF, :timeF, :movieTheater, :room)";
			$db = DB::getDB();
			$stm = $db->prepare($sql);

			$stm->execute(array(':id'=>$id, ':idFilm'=>$idFilm, ':dateF'=>$dateF, ':timeF'=>$timeF,':movieTheater'=>$movieTheater, ':room'=>$room));

			return $stm->rowCount() == 1;
		}

		public function updateShowTime($id, $idFilm, $dateF, $timeF, $movieTheater, $room){
			$sql = "UPDATE xuatchieuphim SET maPhim = :idFilm, ngayChieu = :dateF, gioChieu = :timeF, rapChieu = :movieTheater, phongChieu = :room  where maXuatChieu = :id ";
			$db = DB::getDB();
			$stm = $db->prepare($sql);

			$stm->execute(array(':id'=>$id, ':idFilm'=>$idFilm, ':dateF'=>$dateF, ':timeF'=>$timeF,':movieTheater'=>$movieTheater, ':room'=>$room));

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
				$list[]	= new ShowTime($item['maXuatChieu'], $item['maPhim'], $item['ngayChieu'], $item['gioChieu'], $item['rapChieu'],$item['phongChieu']);		
			}
			return $list;
		}
	}
?>