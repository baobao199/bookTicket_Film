<link rel="stylesheet" type="text/css" href="css/add.css">
<div class="container">
  		<h2>THÊM RẠP CHIẾU MỚI</h2>
		<div class="container-left">
	    	<form action="?controller=movietheater&action=update" method="post"enctype="multipart/form-data">
	    		<?php 
	    			foreach ($movietheater as $m){
	    				$id = $m->id;
	    				$name = $m->name;
	    				$address = $m->name;
	    				$phoneNumber = $m->phoneNumber;
	    				$image = $m->image;
	    			}

	    		?>
	    		<div class="form-group">
	      			<label>Mã rạp phim</label>
	      			<input value="<?= $id ?>" type="text" class="form-control" name="id">
	   			</div>
		    	<div class="form-group">
		      		<label>Tên rạp phim</label>
		      		<input value="<?= $name ?>" type="text" class="form-control" name="name">
		    	</div>
		    	<div class="form-group">
		      		<label for="text">Địa chỉ</label>
		      		<input value="<?= $address ?>" type="text" class="form-control" name="address">
		    	</div>
		    	<div class="form-group">
		      		<label for="text">Số điện thoại</label>
		      		<input value="<?= $phoneNumber ?>" type="text" class="form-control" name="phonenumber">
		    	</div>
		    	<div class="form-group">
		    		<label for="text">Hình ảnh</label>
      				<input value="<?= $image ?>" type="file" class="form-control-file border" name="image">
    			</div>
	    		<button type="submit" class="btn btn-primary">Sửa</button>
	  		</form>
		</div>

		<div class="container-right">
			<img style="margin-top: 40px;" src='img/movietheater.png' height="300px" width="500px">
		</div>
	</div>

</body>
</html>
