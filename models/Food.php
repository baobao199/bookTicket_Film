<?php
	class Food{
		public $idFood;
		public $nameFood;
		public $price;
		public $quantity;


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
			$this->quantity = 1;
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

		public function getFoodById($id){
			$sql = "select * from doan where maDoAn = :id";
			$db = DB::getDB();
			$stm = $db->prepare($sql);
			$stm->execute(array('id'=> $id));
			$list = array();
			foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $item) 
			{
				$list[] = new Food($item['maDoAn'], $item['tenDoAn'], $item['giaTien']);
			}
			return $list;
		}

		public function sum_Price(){
			return $this->price * $this->quantity;
		}
	}
?>