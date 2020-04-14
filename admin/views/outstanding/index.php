<link rel="stylesheet" type="text/css" href="css/content.css">
<div class="container">
	<div><h2>DANH SÁCH CÁC PHIM NỔI BẬT</h2></div>
	<div>
		<a class="btn btn-info" href="?controller=outstanding&action=add">Thêm phim mới</a>
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
		      		foreach ($outstanding as $o) 
		      		{
		      			?>
							<tr>

					        	<td><img src="<?=  $o->image ?>" height='100px' width='80px'></td>
					        	<td><?= $o->id ?></td>
					        	<td><?= $o->name ?></td>
					        	<td><?= $o->director ?></td>
					        	<td><?= $o->actor ?></td>
					        	<td><?= $o->genre ?></td>
					        	<td><?= $o->startDay ?></td>
					        	<td><?= $o->time ?></td>
					        	<td><?= $o->language?></td>
					        	<td style="text-align: justify"><?= $o->decription ?></td>
					        	<td>
									<a class="btn btn-info" href="?controller=outstanding&action=edit&id=<?= $o->id ?>">
										<i class="material-icons">&#xe254;</i>                                            
									</a>
									<br><br>
									<a class="btn btn-danger" href="?controller=outstanding&action=delete&id=<?= $o->id ?>">
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
