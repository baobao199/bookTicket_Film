<?php 
	require_once("../config.php");
	class Promotion{
		public $id;
		public $name;
		public $type;
		public $content;
		public $image;


		/**
		 * Class Constructor
		 * @param    $id   
		 * @param    $name   
		 * @param    $type   
		 * @param    $content   
		 * @param    $image   
		 */
		public function __construct($id, $name, $type, $content, $image)
		{
			$this->id = $id;
			$this->name = $name;
			$this->type = $type;
			$this->content = $content;
			$this->image = $image;
		}

		public function getAll(){
			$sql = "select * from khuyenmai";
			$db = DB::getDB();
			$stm = $db->query($sql);
			$list = array();
			foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $item) 
			{
				$list[]	= new Promotion($item['maKM'], $item['tenKM'], $item['loaiKM'], $item['noiDung'], $item['hinhAnh']);		
			}
			return $list;
		}

		public function addPromotion($id, $name, $type, $content, $image){
			$sql = "INSERT INTO khuyenmai VALUES ( :id, :name, :type, :content, :image)";
			$db = DB::getDB();
			$stm = $db->prepare($sql);

			$stm->execute(array(':id'=>$id, ':name'=>$name, ':type'=>$type, ':content'=>$content,':image'=>$image));

			return $stm->rowCount() == 1;
		}

		public function deletePromotion($id){
			$sql = "delete from khuyenmai where maKM = :id";
			$db = DB::getDB();
			$stm = $db->prepare($sql);
			$stm->execute(array(':id'=>$id));

			return $stm->rowCount() == 1;
		}

		public function updatePromotion($id, $name, $type, $content, $image){
			$sql = "UPDATE khuyenmai SET  tenKM = :name, loaiKM = :type, noiDung = :content, hinhAnh = :image where maKM = :id ";
			$db = DB::getDB();
			$stm = $db->prepare($sql);

			$stm->execute(array(':id'=>$id,':name'=>$name,':type'=>$type, ':content'=>$content, ':image'=>$image));

			return $stm->rowCount() == 1;
		}

		public function getPromotionById($id){
			$sql = "select * from khuyenmai where maKM = :id";
			$db = DB::getDB();
			$stm = $db->prepare($sql);
			$stm->execute(array('id'=> $id));
			$list = array();
			foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $item) 
			{
				$list[]	= new Promotion($item['maKM'], $item['tenKM'], $item['loaiKM'], $item['noiDung'], $item['hinhAnh']);		
			}
			return $list;
		}

	}
?>