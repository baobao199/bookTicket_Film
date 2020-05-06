<?php
	class Food{
		public $idFood;
		public $nameFood;
		public $price;


		/**
		 * Class Constructor
		 * @param    $idFood   
		 * @param    $nameFood   
		 * @param    $price   
		 */
		public function __construct($idFood, $nameFood, $price)
		{
			$this->idFood = $idFood;
			$this->nameFood = $nameFood;
			$this->price = $price;
		}

		public function getAll(){
			$sql = "select * from doan";
			$db = DB::getDB();
			$stm = $db->query($sql);
			$list = array();
			foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $item) {
				$list[] = new Food($item['maDoAn'], $item['tenDoAn'], $item['giaTien']);
			}
			return $list;
		}
	}
?>