<link rel="stylesheet" type="text/css" href="css/content.css">
<div class="container">
	<div><h2>DANH SÁCH KHUYẾN MÃI</h2></div>
	<div>
		<a class="btn btn-info" href="?controller=promotion&action=add">Thêm khuyến mãi</a>
	</div>
	<div class="table-responsive">
		<table class="table table-bordered">
		    <thead>
		      	<tr>
		      		<th>Hình ảnh</th>
		        	<th>Mã khuyến mãi</th>
		        	<th>Tên khuyến mãi</th>
		        	<th>Loại khuyên mãi</th>
		        	<th>Nội dung</th>
		        	<th>Công cụ</th>
		        </tr>
			</thead>
			<tbody>
				<?php
					foreach ($promotion as $p) {
					 	?>
					 		<tr>
					 			<td><img src="<?= $p->image ?>" height='100px' width='80px'></td>
					        	<td><?= $p->id ?></td>
					        	<td><?= $p->name ?></td>
					        	<td><?= $p->type ?></td>
					        	<td style="text-align:justify;"><?= $p->content ?></td>
					        	<td style="width: 200px">
									<a class="btn btn-info" href="?controller=promotion&action=edit&id=<?= $p->id ?>">
										<i class="material-icons">&#xe254;</i>
									</a>
									<a class="btn btn-danger" href="?controller=promotion&action=delete&id=<?= $p->id ?>">
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
