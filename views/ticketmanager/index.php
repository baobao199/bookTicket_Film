<link rel="stylesheet" type="text/css" href="css/content.css">
<div class="container">
	<div><h2>DANH SÁCH CÁC LOẠI VÉ</h2></div>
	<div>
		<a class="btn btn-info" href="#">Thêm vé</a>
	</div>
	<div class="table-responsive">
		<table class="table table-bordered">
		    <thead>
		      	<tr>
		        	<th>Mã vé</th>
		        	<th>Tên vé</th>
		        	<th>Giá tiền</th>
		        	<th>Công cụ</th>
		        </tr>
			</thead>
			<tbody>
				<?php
					foreach ($ticketmanager as $t) {
					 	?>
					 		<tr>
					        	<td><?= $t->id ?></td>
					        	<td><?= $t->name ?></td>
					        	<td><?= number_format($t->price)?> VNĐ</td>
					        	<td style="width: 200px">
									<a class="btn btn-info" href="?controller=ticketmanager&action=edit&id=<?= $t->id ?>">
										<i class="material-icons">&#xe254;</i>
									</a>
									<a class="btn btn-danger" href="?controller=ticketmanager&action=delete&id=<?= $t->id ?>">
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
