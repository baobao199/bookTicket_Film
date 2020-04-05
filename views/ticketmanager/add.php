<link rel="stylesheet" type="text/css" href="css/add.css">
<div class="container">
  		<h2>THÊM LOẠI VÉ MỚI</h2>
		<div class="container-left">
	    	<form action="?controller=ticketmanager&action=upload" method="post">
	    		<div class="form-group">
	      			<label>Mã loại vé</label>
	      			<input type="text" class="form-control" id="usr" name="id">
	   			</div>
		    	<div class="form-group">
		      		<label>Tên loại vé</label>
		      		<input type="text" class="form-control" id="pwd" name="name">
		    	</div>
		    	<div class="form-group">
		      		<label for="pwd">Giá tiền</label>
		      		<input type="text" class="form-control" id="pwd" name="price">
		    	</div>
	    		<button type="submit" class="btn btn-primary">Thêm</button>
	    		<button type="submit" class="btn btn-danger">Mặc định</button>
	  		</form>
		</div>

		<div class="container-right">
			<img style="margin-top: 40px;" src='img/ticket.jpg' height="300px" width="500px">
		</div>
	</div>

</body>
</html>
