<link rel="stylesheet" type="text/css" href="css/content.css">
<div class="container">
	<div><h2>DANH SÁCH ĐẶT VÉ XEM PHIM</h2></div>
		<div class="table-responsive">
		    <table class="table table-bordered">
		      <thead>
		        <tr>
		        	<th>Mã đặt vé</th>
		        	<th>Tên khách hàng</th>
		        	<th>Ngày đặt vé</th>
		        	<th>Tổng tiền</th>
		        	<th>Tình trạng</th>
		        	<th>Công cụ</th>
		        </tr>
		      </thead>
		      <tbody>
		      	<?php
		      	foreach ($bookticket as $b) {
		      		?>
		      		<tr>
		      			<td><?= $b->id ?></td>
		      			<td><?= $b->customer ?></td>
		      			<td><?= $b->dateBook ?></td>
		      			<td><?= number_format($b->total) ?> VNĐ</td>
		      			<td><?= $b->status ?></td>
		      			<td style="width: 200px" >
		      				<a class="btn btn-info" href="">Xác nhận
		      				</a>
		      				<a style="margin: 5px" class="btn btn-danger" href="?controller=bookticket&action=detail&id=<?= $b->id ?>">Xem chi tiết 
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
