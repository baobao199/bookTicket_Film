<link rel="stylesheet" type="text/css" href="css/content.css">
<div class="container">
	<div><h2>DANH SÁCH CÁC QUẢNG CÁO</h2></div>
	<div>
		<a class="btn btn-info" href="?controller=slide&action=add">Thêm quảng cáo mới</a>
	</div>
		<div class="table-responsive">
		    <table class="table table-bordered">
		      <thead>
		        <tr>
		        	<th>Hình</th>
		        	<th>Mã quảng cáo</th>
		        	<th>Tên quảng cáo</th>
		        	<th>Mã chương trình</th>
		        	<th>Công cụ</th>
		        </tr>
		      </thead>
		      <tbody>
		      	<?php
		    		foreach ($slide as $s) {
		    		
		    		?>
			    		<tr>
				        	<td style="width: 450px"><img src="<?=$s->image?>" height="200px" width="400px"></td>
				        	<td><?= $s->id ?></td>
				        	<td><?= $s->name ?></td>
				        	<td style="width: 200px"><?= $s->idCT ?></td>
				        	<td style="width: 150px">
								<a class="btn btn-info" href="?controller=slide&action=edit&id=<?= $s->id ?>">
									<i class="material-icons">&#xe254;</i>
								</a>
								<a class="btn btn-danger" href="?controller=slide&action=delete&id=<?= $s->id ?>">
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
