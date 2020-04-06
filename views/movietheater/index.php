<link rel="stylesheet" type="text/css" href="css/content.css">
<div class="container">
	<div><h2>DANH SÁCH CÁC RẠP CHIẾU PHIM</h2></div>
	<div>
		<a class="btn btn-info" href="?controller=movietheater&action=add">Thêm rạp mới</a>
	</div>
		<div class="table-responsive">
		    <table class="table table-bordered">
		      <thead>
		        <tr>
		        	<th>Hình</th>
		        	<th>Mã rạp phim</th>
		        	<th>Tên rạp phim</th>
		        	<th>Địa chỉ</th>
		        	<th>Số điện thoại</th>
		        	<th>Công cụ</th>
		        </tr>
		      </thead>
		      <tbody>
		      	<?php
		    		foreach ($movietheater as $m) {
		    		
		    		?>
			    		<tr>
			        	<td style="width: 450px"><img src="<?= $m->image ?>" height="200px" width="400px"></td>
			        	<td><?= $m->id ?></td>
			        	<td><?= $m->name ?></td>
			        	<td style="width: 200px"><?= $m->address ?></td>
			        	<td><?= $m->phoneNumber ?></td>
			        	<td style="width: 150px">
							<a class="btn btn-info" href="?controller=movietheater&action=edit&id=<?= $m->id ?>">
								<i class="material-icons">&#xe254;</i>
							</a>
							<a class="btn btn-danger" href="?controller=movietheater&action=delete&id=<?= $m->id ?>">
								<i class="material-icons">&#xe872;</i>
							</a>
			        	</td>
			        <?php
		        	}
		    	?>
		        
		        </tr>
		      </tbody>
		    </table>
  		</div>
	</div>

</body>
</html>
