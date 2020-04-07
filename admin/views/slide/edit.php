<link rel="stylesheet" type="text/css" href="css/add.css">
<div class="container">
  		<h2>SỬA THÔNG TIN QUẢNG CÁO</h2>
		<div class="container-left">
	    	<form action="?controller=slide&action=update" method="post"enctype="multipart/form-data">
	    		<?php 
	    			foreach ($slide as $s){
	    				$id = $s->id;
	    				$name = $s->name;
	    				$idCT = $s->idCT;
	    				$image = $s->image;
	    			}

	    		?>
	    		<div class="form-group">
	      			<label>Mã quảng cáo</label>
	      			<input value="<?= $id ?>" type="text" class="form-control" name="id">
	   			</div>
		    	<div class="form-group">
		      		<label>Tên quảng cáo</label>
		      		<input value="<?= $name ?>" type="text" class="form-control" name="name">
		    	</div>
		    	<div class="form-group">
		      		<label for="text">Mã chương trình</label>
		      		<input value="<?= $idCT ?>" type="text" class="form-control" name="idct">
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
