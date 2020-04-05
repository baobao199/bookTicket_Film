<link rel="stylesheet" type="text/css" href="css/add.css">
<div class="container">
  		<h2>THÊM LOẠI VÉ MỚI</h2>
		<div class="container-left">
				<?php 
	    			require_once("controllers/ticketmanager_controller.php");
	    			foreach ($ticketmanager as $t) {
	    				$id = $t->id;
	    				$name = $t->name;
	    				$price = $t->price;
	    			}
	    		?>
	    	<form action="?controller=ticketmanager&action=update" method="post">
	    		<div class="form-group">
	      			<label>Mã loại vé</label>
	      			<input value="<?= $id ?>" type="text" class="form-control" name="id">
	   			</div>
		    	<div class="form-group">
		      		<label>Tên loại vé</label>
		      		<input value="<?= $name ?>" type="text" class="form-control" name="name">
		    	</div>
		    	<div class="form-group">
		      		<label for="pwd">Giá tiền</label>
		      		<input value="<?= $price ?>" type="text" class="form-control" name="price">
		    	</div>
	    		<button type="submit" class="btn btn-primary">Sửa</button>
	  		</form>
		</div>

		<div class="container-right">
			<img style="margin-top: 40px;" src='img/ticket.jpg' height="300px" width="500px">
		</div>
	</div>

</body>
</html>
