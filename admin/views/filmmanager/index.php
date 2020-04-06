<link rel="stylesheet" type="text/css" href="css/content.css">
<div class="container">
	<div><h2>DANH SÁCH CÁC PHIM CHIẾU</h2></div>
	<div>
		<a class="btn btn-info" href="?controller=filmmanager&action=add">Thêm phim mới</a>
	</div>
	<div class="table-responsive">
		<table class="table table-bordered">
		    <thead>
		        <tr>
		        	<th>Hình ảnh</th>
		        	<th>Mã phim</th>
		        	<th>Tên phim</th>
		        	<th>Đạo diễn</th>
		        	<th>Diễn viên</th>
		        	<th>Thể loại</th>
		        	<th>Khởi chiếu</th>
		        	<th>Thời lượng</th>
		        	<th>Ngôn Ngữ</th>
		        	<th>Mô tả</th>
		        	<th>Công cụ</th>
		        </tr>
		    </thead>
		    <tbody>
		      	<?php 
		      		require_once("models/FilmManager.php");
		      		$filmManager = FilmManager::getAll();
		      		foreach ($filmManager as $f) 
		      		{
		      			?>
							<tr>

					        	<td><img src="<?= $f->image ?>" height='100px' width='80px'></td>
					        	<td><?= $f->id ?></td>
					        	<td><?= $f->name ?></td>
					        	<td><?= $f->director ?></td>
					        	<td><?= $f->actor ?></td>
					        	<td><?= $f->genre ?></td>
					        	<td><?= $f->startDay ?></td>
					        	<td><?= $f->time ?></td>
					        	<td><?= $f->language?></td>
					        	<td style="text-align: justify"><?= $f->decription ?></td>
					        	<td>
									<a class="btn btn-info" href="?controller=filmmanager&action=edit&id=<?= $f->id ?>">
										<i class="material-icons">&#xe254;</i>                                            
									</a>
									<br><br>
									<a class="btn btn-danger" href="?controller=filmmanager&action=delete&id=<?= $f->id ?>">
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
