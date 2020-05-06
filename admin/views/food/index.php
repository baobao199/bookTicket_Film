<link rel="stylesheet" type="text/css" href="css/content.css">
<div class="container">
	<div><h2>DANH SÁCH ĐỒ ĂN</h2></div>
	<div>
		<a class="btn btn-info" href="?controller=movietheater&action=add">Thêm món mơi</a>
	</div>
		<div class="table-responsive">
		    <table class="table table-bordered">
		      <thead>
		        <tr>
		        	<th>Mã Đồ Ăn</th>
		        	<th>Tên Đồ Ăn</th>
		        	<th>Giá Tiền</th>
		        	<th>Công Cụ</th>
		        </tr>
		      </thead>
		      <tbody>
		      	<?php
		    		foreach ($food as $f) {
		    		?>
			    		<tr>
				        	<td><?= $f->idFood ?></td>
				        	<td><?= $f->nameFood ?></td>
				        	<td><?= number_format($f->price) ?></td>
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
