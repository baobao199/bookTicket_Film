<?php
	require_once("../config.php");
	class FilmManager{
		public $id;
		public $name;
		public $director;
		public $actor;
		public $genre;
		public $startDay;
		public $time;
		public $language;
		public $decription;
		public $image;


		/**
		 * Class Constructor
		 * @param    $id   
		 * @param    $name   
		 * @param    $director   
		 * @param    $actor   
		 * @param    $genre   
		 * @param    $startDay   
		 * @param    $time   
		 * @param    $language   
		 * @param    $decription   
		 * @param    $image   
		 */
		public function __construct($id, $name, $director, $actor, $genre, $startDay, $time, $language, $decription, $image)
		{
			$this->id = $id;
			$this->name = $name;
			$this->director = $director;
			$this->actor = $actor;
			$this->genre = $genre;
			$this->startDay = $startDay;
			$this->time = $time;
			$this->language = $language;
			$this->decription = $decription;
			$this->image = $image;
		}

		public function getAll()
		{
			$sql = "select * from phim";
			$db = DB::getDB();
			$stm = $db->query($sql);
			$list = array();
			foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $item) 
			{
				$list[]	= new FilmManager($item['maPhim'], $item['tenPhim'], $item['daoDien'], $item['dienVien'], $item['theLoai'], $item['khoiChieu'], $item['thoiLuong'], $item['ngonNgu'], $item['moTa'], $item['hinhAnh']);		
			}
			return $list;
		}
		public function deleteFilm($id){
			$sql = "delete from phim where maPhim = :id";
			$db = DB::getDB();
			$stm = $db->prepare($sql);
			$stm->execute(array(':id'=>$id));

			return $stm->rowCount() == 1;
		}
		public function addFilm($id, $name, $director, $actor, $genre, $startDay, $time, $language, $decription, $image){
			$sql = "INSERT INTO phim VALUES ( :id, :name, :director,:actor, :genre, :startDay, :timeF, :language, :decription, :image)";
			$db = DB::getDB();
			$stm = $db->prepare($sql);

			$stm->execute(array(':id'=>$id, ':name'=>$name, ':director'=>$director, ':actor'=>$actor, ':genre'=>$genre, ':startDay'=>$startDay, ':timeF'=>$time, ':language'=>$language, ':decription'=>$decription, ':image'=>$image));

			return $stm->rowCount() == 1;
		}

		public function updateFilm($id,$name,$director,$actor,$genre,$startDay,$time,$language,$decription,$image){
			$sql = "UPDATE phim SET tenPhim = :name, daoDien =  :director, dienVien = :actor, theLoai = :genre, khoiChieu = :startDay, thoiLuong =:timeF, ngonNgu = :language, moTa = :decription, hinhAnh = :image where maPhim = :id ";
			$db = DB::getDB();
			$stm = $db->prepare($sql);

			$stm->execute(array(':id'=>$id,':name'=>$name, ':director'=>$director, ':actor'=>$actor, ':genre'=>$genre, ':startDay'=>$startDay, ':timeF'=>$time, ':language'=>$language, ':decription'=>$decription, ':image'=>$image));

			return $stm->rowCount() == 1;
		}

		public function getFilmById($id){
			$sql = "select * from phim where maPhim = :id";
			$db = DB::getDB();
			$stm = $db->prepare($sql);
			$stm->execute(array('id'=> $id));
			$list = array();
			foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $item) 
			{
				$list[]	= new FilmManager($item['maPhim'], $item['tenPhim'], $item['daoDien'], $item['dienVien'], $item['theLoai'], $item['khoiChieu'], $item['thoiLuong'], $item['ngonNgu'], $item['moTa'], $item['hinhAnh']);		
			}
			return $list;
		}

		public function getFilmOutStandingById($id){
			$sql = "select a.maPhim, a.tenPhim, a.daoDien, a.dienVien, a.theLoai, a.khoiChieu, a.thoiLuong, a.ngonNgu, a.moTa, a.hinhAnh from phim a, phimnoibat b where a.maPhim = :id and b.maPhim = :id and a.maPhim = b.maPhim";
			$db = DB::getDB();
			$stm = $db->prepare($sql);
			$stm->execute(array(':id'=> $id));
			$list = array();
			foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $item) 
			{
				$list[]	= new FilmManager($item['maPhim'], $item['tenPhim'], $item['daoDien'], $item['dienVien'], $item['theLoai'], $item['khoiChieu'], $item['thoiLuong'], $item['ngonNgu'], $item['moTa'], $item['hinhAnh']);		
			}
			return $list;
		}

		public function getOutStanding()
		{
			$sql = "select * from phimnoibat";
			$db = DB::getDB();
			$stm = $db->query($sql);
			$list = array();
			foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $item) 
			{
				$list[]	= new FilmManager($item['maPhim']);		
			}
			return $list;
		} 
	} 
?>