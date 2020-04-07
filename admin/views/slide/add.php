<link rel="stylesheet" type="text/css" href="css/add.css">
<div class="container">
  		<h2>THÊM RẠP QUẢNG CÁO MỚI</h2>
		<div class="container-left">
	    	<form action="?controller=slide&action=upload" method="post"enctype="multipart/form-data">
	    		<div class="form-group">
	      			<label>Mã quãng cáo</label>
	      			<input type="text" class="form-control" name="id">
	   			</div>
		    	<div class="form-group">
		      		<label>Tên quãng cáo</label>
		      		<input type="text" class="form-control" name="name">
		    	</div>
		    	<div class="form-group">
		      		<label for="text">Mã chương trình</label>
		      		<input type="text" class="form-control" name="idct">
		    	</div>
		    	<div class="form-group">
		    		<label for="text">Hình ảnh</label>
      				<input type="file" class="form-control-file border" name="image">
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
