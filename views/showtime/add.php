<link rel="stylesheet" type="text/css" href="css/add.css">
<div class="container">
  		<h2>THÊM XUẤT CHIẾU MỚI</h2>
		<div class="container-left">
	    	<form action="?controller=showtime&action=upload" method="post">
	    		<div class="form-group">
	      			<label>Mã xuất chiếu</label>
	      			<input type="text" class="form-control" name="id">
	   			</div>
		    	<div class="form-group">
		      		<label>Mã phim</label>
		      		<input type="text" class="form-control" name="idfilm">
		    	</div>
		    	<div class="form-group">
		      		<label for="text">Ngày chiếu</label>
		      		<input type="text" class="form-control" name="datef">
		    	</div>
		    	<div class="form-group">
		      		<label for="text">Giờ chiếu</label>
		      		<input type="text" class="form-control" name="timef">
		    	</div>
		    	<div class="form-group">
		    		<label for="text">Mã rạp chiếu</label>
      				<input type="text" class="form-control" name="movietheater">
    			</div>
    			<div class="form-group">
		    		<label for="text">Phòng chiếu</label>
      				<input type="text" class="form-control" name="room">
    			</div>
	    		<button type="submit" class="btn btn-primary">Thêm</button>
	    		<button type="submit" class="btn btn-danger">Mặc định</button>
	  		</form>
		</div>

		<div class="container-right">
			<img style="margin-top: 40px;" src='img/movietheater.png' height="300px" width="500px">
		</div>
	</div>

</body>
</html>
