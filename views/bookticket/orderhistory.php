<style type="text/css">
	.table{
		margin-top: 10px;
		background-color: white;
	}
	.table th{
		text-align: center;
	}
	.table td{
		text-align: center;
	}
	h2{
		color: #00BFFF;
		font-weight: bold;
	}
</style>
<div class="container">
	<div><h2>LỊCH SỬ ĐẶT VÉ</h2></div><hr>
	<div class="table-responsive">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Mã đơn hàng</th>
					<th>Tên khách hàng</th>
					<th>Ngày đặt vé</th>
					<th>Tổng tiền</th>
					<th>Tình trạng</th>
					<th>Công cụ</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				foreach ($list as $l) {
					?>
					<tr>
						<td><?= $l->id ?></td>
						<td><?= $l->customer ?></td>
						<td><?= $l->dateBook ?></td>
						<td><?= number_format($l->total) ?> VNĐ</td>
						<td><?= $l->status ?></td>
						<td>
							<form action="?controller=bookticket&action=detail" method="post" style="display: inline;">
								<input type="hidden" name="id" value="<?= $l->id ?>"/>
								<button type="submit" class="btn btn-info">Xem chi tiết</button>
							</form>
						</td>
					</tr>
					<?php
				}
				?>
			</tbody>
		</table>
	</div>
</div>
