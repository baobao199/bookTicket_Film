<?php
	require_once('../function.php');
?>
<link rel="stylesheet" type="text/css" href="css/add.css">
<div class="container">
  		<h2>THÊM PHIM SẮP CHIẾU MỚI</h2>
		<div class="container-left">
	    	<form action="?controller=moviecomingsoon&action=upload" method="post" enctype="multipart/form-data">
	    		<div class="form-group">
	      			<label>Mã phim</label>
	      			<input type="text" class="form-control" id="id" name="id">
	   			</div>
		    	<div class="form-group">
		      		<label>Tên phim</label>
		      		<input type="text" class="form-control" id="name" name="name">
		    	</div>
		    	<div class="form-group">
		      		<label for="pwd">Đạo diễn</label>
		      		<input type="text" class="form-control" id="director" name="director">
		    	</div>
		    	<div class="form-group">
		      		<label for="pwd">Diễn viên</label>
		      		<input type="text" class="form-control" id="actor" name="actor">
		    	</div>
		    	<div class="form-group">
		      		<label for="pwd">Thể loại</label>
		      		<input type="text" class="form-control" id="genre" name="genre">
		    	</div>
		    	<div class="form-group">
		      		<label for="pwd">Khởi chiếu</label>
		      		<input type="text" class="form-control" id="startDay" name="startDay">
		    	</div>
		    	<div class="form-group">
		      		<label for="pwd">Thời lượng</label>
		      		<input type="text" class="form-control" id="time" name="time">
		    	</div>
		    	<div class="form-group">
		      		<label for="pwd">Ngôn ngữ</label>
		      		<input type="text" class="form-control" id="language" name="language">
		    	</div>
		    	<div class="form-group">
	  				<label for="comment">Mô tả</label>
	  				<textarea class="form-control" rows="5" id="decription" name="decription"></textarea>
				</div>
		    	<div class="form-group">
		    		<label for="comment">Hình ảnh</label>
      				<input type="file" class="form-control-file border" name="image">
    			</div>
	    		<button type="submit" class="btn btn-primary">Thêm</button>
	    		<button type="submit" class="btn btn-danger">Mặc định</button>
	  		</form>
		</div>

		<div class="container-right">
			<img src='img/addfilm.jpg' height="400px" width="300px">
			<img style="margin-top: 40px; margin-left: 60px;" src='img/rap_wlor.jpg' height="300px" width="500px">
		</div>
	</div>
