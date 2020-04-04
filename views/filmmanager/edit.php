<link rel="stylesheet" type="text/css" href="css/add.css">
<div class="container">
  		<h2>CẬP NHẬT THÔNG TIN PHIM</h2>
		<div class="container-left">
			<?php 
				require_once("controllers/filmmanager_controller.php");
				foreach ($filmmanager as $f) {
					$maPhim = $f->id;
					$tenPhim = $f->name;
					$daoDien = $f->decription;
					$dienVien = $f->actor;
					$theLoai = $f->genre;
					$khoiChieu = $f->startDay;
					$thoiLuong = $f->time;
					$ngonNgu = $f->language;
					$moTa = $f->decription;
					$hinhANh = $f->image;
				}
			?>
	    	<form action="?controller=filmmanager&action=update" method="post">
	    		<div class="form-group">
	      			<label>Mã phim</label>
	      			<input type="text" class="form-control" value="<?= $maPhim ?>" name="id">
	   			</div>
		    	<div class="form-group">
		      		<label>Tên phim</label>
		      		<input type="text" class="form-control" value="<?= $tenPhim ?>" name="name">
		    	</div>
		    	<div class="form-group">
		      		<label for="pwd">Đạo diễn</label>
		      		<input type="text" class="form-control" value="<?= $daoDien ?>" name="director">
		    	</div>
		    	<div class="form-group">
		      		<label for="pwd">Diễn viên</label>
		      		<input type="text" class="form-control" value="<?= $dienVien ?>" name="actor">
		    	</div>
		    	<div class="form-group">
		      		<label for="pwd">Thể loại</label>
		      		<input type="text" class="form-control" value="<?= $theLoai ?>" name="genre">
		    	</div>
		    	<div class="form-group">
		      		<label for="pwd">Khởi chiếu</label>
		      		<input type="text" class="form-control" value="<?= $khoiChieu ?>" name="startDay">
		    	</div>
		    	<div class="form-group">
		      		<label for="pwd">Thời lượng</label>
		      		<input type="text" class="form-control" value="<?= $thoiLuong ?>" name="time">
		    	</div>
		    	<div class="form-group">
		      		<label for="pwd">Ngôn ngữ</label>
		      		<input type="text" class="form-control" value="<?= $ngonNgu ?>" name="language">
		    	</div>
		    	<div class="form-group">
	  				<label for="comment">Mô tả</label>
	  				<textarea class="form-control" rows="5" name="decription"> <?= $moTa ?></textarea>
				</div>
		    	<div class="form-group">
		      		<label for="pwd">Hình</label>
		      		<input type="text" class="form-control" value="<?= $hinhANh ?>" name="image">
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
