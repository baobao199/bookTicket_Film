<?php
	class BookTicket{
		public $id;
		public $dateT;
		public $total;
		public $status;


		/**
		 * Class Constructor
		 * @param    $id   
		 * @param    $dateT   
		 * @param    $total   
		 * @param    $status   
		 */
		public function __construct($id, $dateT, $total, $status)
		{
			$this->id = $id;
			$this->dateT = $dateT;
			$this->total = $total;
			$this->status = $status;
		}

	}
?>