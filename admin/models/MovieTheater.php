<?php
	require_once("../config.php");
	class MovieTheater{
		public $id;
		public $name;
		public $address;
		public $phoneNumber;
		public $image;


		/**
		 * Class Constructor
		 * @param    $id   
		 * @param    $name   
		 * @param    $address   
		 * @param    $phoneNumber   
		 * @param    $image   
		 */
		public function __construct($id, $name, $address, $phoneNumber, $image)
		{
			$this->id = $id;
			$this->name = $name;
			$this->address = $address;
			$this->phoneNumber = $phoneNumber;
			$this->image = $image;
		}

		public function getAll(){
			$sql = "select * from rapphim";
			$db = DB::getDB();
			$stm = $db->query($sql);
			$list = array();
			foreach ($stm as $item) {
				$list[] = new MovieTheater($item['maRapPhim'], $item['tenRapPhim'], $item['diaChi'], $item['soDienThoai'], $item['hinhAnh']);
			}
			return $list;
		}

		public function addMovieTheater($id, $name, $address, $phoneNumber, $image)
		{
			$sql = "INSERT INTO rapphim VALUES (:id, :name, :address, :phoneNumber, :image)";
			$db = DB::getDB();
			$stm = $db->prepare($sql);
			$stm->execute(array(':id'=>$id, ':name'=>$name, ':address'=>$address, ':phoneNumber'=>$phoneNumber,':image'=>$image));

			return $stm->rowCount() == 1;
		}

		public function deleteMovieTheater($id)
		{
			$sql = "DELETE from rapphim where maRapPhim = :id";
			$db = DB::getDB();
			$stm = $db->prepare($sql);
			$stm->execute(array(':id'=>$id));

			return $stm->rowCount() == 1;
		}

		public function updateMoiveTheater($id, $name, $address, $phoneNumber, $image)
		{
			$sql ="UPDATE rapphim SET tenRapPhim = :name , diaChi = :address, soDienThoai = :phoneNumber, hinhAnh = :image where maRapPhim = :id";

			$db = DB::getDB();
			$stm = $db->prepare($sql);
			$stm->execute(array(':id'=>$id, ':name'=>$name, ':address'=>$address, ':phoneNumber'=>$phoneNumber, ':image'=>$image));

			return $stm->rowCount() == 1;
		}

		public function getMovieTheaterById($id)
		{
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