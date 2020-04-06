<?php 
	class BaseController{
		protected $name; //xác định thư mục

		public function render($view, $data = array()){

			ob_start();
			extract($data);
			require_once('views/layout/index.php');
			require_once('views/'.$this->name.'/'.$view.'.php'); //$view la tên tệp tin trong thư mục $name
			
			
		}
	}
?>