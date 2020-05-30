<link rel="stylesheet" type="text/css" href="css/content.css">
<div class="container">
		<div><h2>DANH SÁCH SUẤT CHIẾU</h2></div>
		<div>
			<a class="btn btn-info" href="?controller=showtime&action=add">Thêm suất chiếu</a>
		</div>
		<div class="table-responsive">
		    <table class="table table-bordered">
		      <thead>
		        <tr>
		        	<th>Mã suất chiếu</th>
		        	<th>Mã phim</th>
		        	<th>Tên phim</th>
		        	<th>Rạp chiếu</th>
		        	<th>Phòng chiếu</th>
		        	<th>Loại vé</th>
		        	<th>Ngày chiếu</th>
		        	<th>Giờ chiếu</th>
		        	<th>Ghế trống</th>
		        	<th>Công cụ</th>
		        </tr>
		      </thead>
		      <tbody>
		      	<?php 
		      		foreach ($showtime as $s) {
		      			?>
		      			<tr>
		      				<td><?= $s->id ?></td>
				        	<td><?= $s->idFilm ?></td>
				        	<td><?= $s->nameFilm ?></td>
				        	<td><?= $s->idMovieTheater ?></td>
				        	<td><?= $s->room ?></td>
				        	<td><?= $s->ticket ?></td>
				        	<td><?= $s->dateF ?></td>
				        	<td><?= $s->timeF ?></td>
				        	<td><?= $s->seat ?></td>
				        	<td style="width: 150px">
								<a class="btn btn-info" href="?controller=showtime&action=edit&id=<?= $s->id ?>">
									<i class="material-icons">&#xe254;</i>
								</a>
								<a class="btn btn-danger" href="?controller=showtime&action=delete&id=<?= $s->id ?>">
									<i class="material-icons">&#xe872;</i>
								</a>
				        	</td>
		        		</tr>
		      			<?php
		      		}
		      	?>
		      </tbody>
		    </table>
  		</div>
	</div>
