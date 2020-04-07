<?php 
	function redirect($url){
		header("Location: $url");
	}

	function uploadImageFilm(){
		if(isset($_FILES['image'])&&$_FILES['image']['name']!=null)
		{
			//lấy tên của file:
			$file_name=$_FILES['image']["name"];
			//lấy đường dẫn tạm lưu nội dung file:
			$file_tmp =$_FILES['image']['tmp_name'];
			//tạo đường dẫn lưu file:
			$path ="views/filmmanager/uploads/".$file_name;

			move_uploaded_file($file_tmp,$path);
		}
		return $path;
	}

	function uploadImageMovieTheater(){
		if(isset($_FILES['image'])&&$_FILES['image']['name']!=null)
		{
			//lấy tên của file:
			$file_name=$_FILES['image']["name"];
			//lấy đường dẫn tạm lưu nội dung file:
			$file_tmp =$_FILES['image']['tmp_name'];
			//tạo đường dẫn lưu file:
			$path ="views/movietheater/uploads/".$file_name;

			move_uploaded_file($file_tmp,$path);
		}
		return $path;
	}

	function uploadImageAdvertisement(){
		if(isset($_FILES['image'])&&$_FILES['image']['name']!=null)
		{
			//lấy tên của file:
			$file_name=$_FILES['image']["name"];
			//lấy đường dẫn tạm lưu nội dung file:
			$file_tmp =$_FILES['image']['tmp_name'];
			//tạo đường dẫn lưu file:
			$path ="views/slide/uploads/".$file_name;

			move_uploaded_file($file_tmp,$path);
		}
		return $path;
	}
?>