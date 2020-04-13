<?php
	require_once("../config.php");
	class OutStanding{
		public $stt;
		public $id;


		/**
		 * Class Constructor
		 * @param    $stt   
		 * @param    $id   
		 */
		public function __construct($stt, $id)
		{
			$this->stt = $stt;
			$this->id = $id;
		}

		
		public function getOutStanding()
		{
			$sql = "select * from phimnoibat";
			$db = DB::getDB();
			$stm = $db->query($sql);
			$list = array();
			foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $item) 
			{
				$list[]	= new OutStanding($item['STT'],$item['maPhim']);		
			}
			return $list;
		}

		public function updateOutStanding($stt, $id)
		{
			$sql ="UPDATE phimnoibat SET maPhim = :id where STT = :stt";

			$db = DB::getDB();
			$stm = $db->prepare($sql);
			$stm->execute(array(':stt'=>$stt, ':id'=>$id));

			return $stm->rowCount() == 1;
		} 
	} 
?>