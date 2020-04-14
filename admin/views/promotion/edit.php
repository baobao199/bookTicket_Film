<link rel="stylesheet" type="text/css" href="css/add.css">
<div class="container">
  		<h2>CẬP NHẬT THÔNG KHUYẾN MÃI</h2>
		<div class="container-left">
			<?php 
				foreach ($promotion as $p) {
					$maKM = $p->id;
					$tenKM = $p->name;
					$loaiKM = $p->type;
					$noiDung = $p->content;
				}
			?>
	    	<form action="?controller=promotion&action=update" method="post" enctype="multipart/form-data">
	    		<div class="form-group">
	      			<label>Mã khuyến mãi</label>
	      			<input type="text" class="form-control" value="<?= $maKM ?>" name="id">
	   			</div>
		    	<div class="form-group">
		      		<label>Tên khuyến mãi</label>
		      		<input type="text" class="form-control" value="<?= $tenKM ?>" name="name">
		    	</div>
		    	<div class="form-group">
		      		<label for="pwd">Loại khuyến mãi</label>
		      		<input type="text" class="form-control" value="<?= $loaiKM ?>" name="type">
		    	</div>
		    	<div class="form-group">
	  				<label for="comment">Nội dung khuyến mãi</label>
	  				<textarea class="form-control" rows="5" name="content"> <?= $noiDung ?></textarea>
				</div>
		    	<div class="form-group">
		    		<label>Hình ảnh</label>
      				<input type="file" class="form-control-file border" name="image">
    			</div>
	    		<button type="submit" class="btn btn-primary">Sửa</button>
	  		</form>
		</div>

		<div class="container-right">
			<img src='img/addfilm.jpg' height="400px" width="300px">
			<img style="margin-top: 40px; margin-left: 60px;" src='img/rap_wlor.jpg' height="300px" width="500px">
		</div>
	</div>
