<?php 
	require_once("config.php");
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

		public function getPromotion($type){
			$sql = "select * from khuyenmai where loaiKM = :type";
			$db = DB::getDB();
			$stm = $db->prepare($sql);
			$stm->execute(array('type'=> $type));
			$list = array();
			foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $item) 
			{
				$list[]	= new Promotion($item['maKM'], $item['tenKM'], $item['loaiKM'], $item['noiDung'], $item['hinhAnh']);		
			}
			return $list;
		}

		public function getEvent($type){
			$sql = "select * from khuyenmai where loaiKM = :type";
			$db = DB::getDB();
			$stm = $db->prepare($sql);
			$stm->execute(array('type'=> $type));
			$list = array();
			foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $item) 
			{
				$list[]	= new Promotion($item['maKM'], $item['tenKM'], $item['loaiKM'], $item['noiDung'], $item['hinhAnh']);		
			}
			return $list;
		}

	}
?>