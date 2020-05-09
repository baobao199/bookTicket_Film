<?php
	 class BookTicket{
	 	public $id;
	 	public $customer;
	 	public $dateBook;
	 	public $total;
	 	public $status;


		/**
		 * Class Constructor
		 * @param    $id   
		 * @param    $customer   
		 * @param    $dateBook   
		 * @param    $total   
		 * @param    $status   
		 */
		public function __construct($id, $customer, $dateBook, $total, $status)
		{
			$this->id = $id;
			$this->customer = $customer;
			$this->dateBook = $dateBook;
			$this->total = $total;
			$this->status = $status;
		}

		public function addBookTicket($id, $customer, $dateBook, $total, $status){
			$sql = "INSERT INTO datVe VALUES ( :id, :customer, :dateBook, :total, :status)";
			$db = DB::getDB();
			$stm = $db->prepare($sql);

			$stm->execute(array(':id'=>$id, ':customer'=>$customer, ':dateBook'=>$dateBook, ':total'=>$total, ':status'=>$status));

			return $stm->rowCount() == 1;
		}

		public function getBookTicketByNameCustomer($nameCustomer){
			$sql = "SELECT * from datve where khachHang = :nameCustomer";
			$db = DB::getDB();
			$stm = $db->prepare($sql);
			$stm->execute(array(':nameCustomer'=> $nameCustomer));
			$list = array();
			foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $item) 
			{
				$list[]	= new BookTicket($item['maDatVe'], $item['khachHang'], $item['ngayDat'], $item['tongTien'], $item['tinhTrang']);		
			}
			return $list;
		}
	}
?>