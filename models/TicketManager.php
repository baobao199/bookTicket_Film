<?php 
	require_once("config.php");
	class TicketManager{
		public $id;
		public $name;
		public $price;


		/**
		 * Class Constructor
		 * @param    $id   
		 * @param    $name   
		 * @param    $price   
		 */
		public function __construct($id, $name, $price)
		{
			$this->id = $id;
			$this->name = $name;
			$this->price = $price;
		}

		public function getAll(){
			$sql = "select * from loaivephim";
			$db = DB::getDB();
			$stm = $db->query($sql);
			$list = array();
			foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $item) {
				$list[] = new TicketManager($item['maLoai'], $item['tenLoai'], $item['giaTien']);
			}
			return $list;
		}

		public function deleteTicket($id){
			$sql = "delete from loaivephim where maLoai = :id";
			$db = DB::getDB();
			$stm = $db->prepare($sql);
			$stm->execute(array(':id'=>$id));

			return $stm->rowCount() == 1;
		}


	}
?>