<?php 
	class Slide{
		public $id;
		public $name;
		public $idCT;
		public $image;


		/**
		 * Class Constructor
		 * @param    $id   
		 * @param    $name   
		 * @param    $idCT   
		 * @param    $image   
		 */
		public function __construct($id, $name, $idCT, $image)
		{
			$this->id = $id;
			$this->name = $name;
			$this->idCT = $idCT;
			$this->image = $image;
		}

		public function getAll(){
			$sql = "select * from slide";
			$db = DB::getDB();
			$stm = $db->query($sql);
			$list = array();
			foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $item) {
				$list[] = new Slide($item['maSlide'], $item['tenSlide'], $item['maCT'], $item['picture']);
			}
			return $list;
		}

		public function deleteSlide($id){
			$sql = "delete from slide where maSlide = :id";
			$db = DB::getDB();
			$stm = $db->prepare($sql);
			$stm->execute(array(':id'=>$id));

			return $stm->rowCount() == 1;
		}

		public function addSlide($id, $name, $idCT, $image){
			$sql = "INSERT INTO slide VALUES ( :id, :name, :idCT, :image)";
			$db = DB::getDB();
			$stm = $db->prepare($sql);

			$stm->execute(array(':id'=>$id, ':name'=>$name, ':idCT'=>$idCT, ':image'=>$image));

			return $stm->rowCount() == 1;
		}

		public function updateSlide($id, $name, $idCT, $image){
			$sql = "UPDATE slide SET  tenSlide = :name, maCT = :idCT, picture = :image where maSlide = :id ";
			$db = DB::getDB();
			$stm = $db->prepare($sql);

			$stm->execute(array(':id'=>$id, ':name'=>$name, ':idCT'=>$idCT, ':image'=>$image));

			return $stm->rowCount() == 1;
		}

		public function getSlideById($id){
			$sql = "select * from slide where maSlide = :id";
			$db = DB::getDB();
			$stm = $db->prepare($sql);
			$stm->execute(array('id'=> $id));
			$list = array();
			foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $item) 
			{
				$list[]	= new Slide($item['maSlide'], $item['tenSlide'], $item['maCT'], $item['picture']);
			}
			return $list;
		}
	}
?>