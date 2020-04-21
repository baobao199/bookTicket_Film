<link rel="stylesheet" type="text/css" href="css/add.css">
<div class="container">
		<?php 
			foreach ($showtime as $s) {
				$maXuatChieu = $s->id;
				$maphim = $s->idFilm;
				$tenPhim = $s->nameFilm;
				$rapPhim = $s->idMovieTheater;
				$phongChieu = $s->room;
				$loaiVe = $s->ticket;
				$ngayChieu = $s->dateF;
				$gioChieu = $s->timeF;
				$ghe = $s->seat;
			}
		?>
  		<h2>SỬA XUẤT CHIẾU PHIM</h2>
		<div class="container-left">
	    	<form action="?controller=showtime&action=update" method="post">
	    		<div class="form-group">
	      			<label>Mã xuất chiếu</label>
	      			<input value="<?= $maXuatChieu ?>" type="text" class="form-control" name="id">
	   			</div>
		    	<div class="form-group">
		      		<label>Mã phim</label>
		      		<input value="<?= $maphim ?>" type="text" class="form-control" name="idfilm">
		    	</div>
		    	<div class="form-group">
		      		<label>Tên phim</label>
		      		<input value="<?= $tenPhim ?>" type="text" class="form-control" name="namefilm">
		    	</div>
		    	<div class="form-group">
		    		<label for="text">Mã rạp phim</label>
      				<input value="<?= $rapPhim ?>" type="text" class="form-control" name="movietheater">
    			</div>
    			<div class="form-group">
		    		<label for="text">Phòng chiếu</label><br>
      				<input list="room" name="room">
						<datalist id="room">
							<option value="R1">
						    <option value="R2">
						    <option value="R3">
						    <option value="R4">
						    <option value="R5">
						    <option value="R6">
						</datalist>
    			</div>
    			<div class="form-group">
		    		<label for="text">Loại vé</label><br>
      				<input list="ticket" name="ticket">
						<datalist id="ticket">
							<option value="TK2D">
						    <option value="TK3D">
						    <option value="TK4D">
						</datalist>
    			</div>
		    	<div class="form-group">
		      		<label for="text">Ngày chiếu</label>
		      		<input value="<?= $ngayChieu ?>" type="date" class="form-control" name="datef">
		    	</div>
		    	<div class="form-group">
		      		<label for="text">Giờ chiếu</label><br>
		      		<input list="time" name="timef">
						<datalist id="time">
							<option value="9:30">
						    <option value="10:30">
						    <option value="11:30">
						    <option value="13:30">
						    <option value="14:30">
						    <option value="15:30">
						    <option value="16:30">
						    <option value="17:30">
						    <option value="18:30">
						    <option value="19:30">
						    <option value="20:30">
						    <option value="21:30">
						    <option value="22:30">
						    <option value="23:30">
						</datalist>
		    	</div>
		    	<div class="form-group">
		    		<label for="text">Ghế trống</label>
      				<input value="<?= $ghe ?>" type="text" class="form-control" name="seat">
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
