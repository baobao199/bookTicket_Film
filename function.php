<?php 
	function redirect($url,$message = ''){
		
		if($message){
			set_message($message);
		}
		header("Location: $url");

	} 
	function set_message($message){
		$_SESSION['one-time-message'] = $message;

	}

	function get_message(){
		if(isset($_SESSION['one-time-message'])){
			$value = $_SESSION['one-time-message'];
			unset($_SESSION['one-time-message']);
			return $value;
		}
		return null;
	}

	function uploadImage($nameFolder){
		if(isset($_FILES['image'])&&$_FILES['image']['name']!=null)
		{
			//lấy tên của file:
			$file_name=$_FILES['image']["name"];
			//lấy đường dẫn tạm lưu nội dung file:
			$file_tmp =$_FILES['image']['tmp_name'];
			//tạo đường dẫn lưu file:
			$path ="views/".$nameFolder."/uploads/".$file_name;

			move_uploaded_file($file_tmp,$path);
		}
		return $path;
	}

	function isLoggedIn(){
		return isset($_SESSION['acc']);
	}
?>