<?php

?><?php
    $acc = unserialize($_SESSION['acc']);
?>
<style type="text/css">
	td{
		padding-left: 10px;
	}
	tr{
		height: 35px;
	}
	th{
		width: 200px;
	}
	.container{
		padding-left: 30px;
		padding-bottom: 24px;
	}
	.hot{
		padding-top: 20px;
	}
</style>
    <div class='hot col-12'>
       	<h3>Thông tin đặt vé<hr></h3> 
    </div>

    <?php
    	foreach ($orderdetail as $o) {
    		$maHoaDon = $o->id;
    		$khachHang = $o->nameGuess;
    		$tenRap = $o->movietheater;
    		$tenPhim = $o->nameFilm;
    		$ngayChieu = $o->dateF;
    		$gioChieu = $o->timeF;
    		$loaiVe = $o->ticket;
    		$soLuongVe = $o->quantityTicket;
    		$giaVe = $o->priceTicket;
    		$doAn = $o->food;
    		$soLuong = $o->quantityFood;
    		$giaTien = $o->priceFood;
    		$tongTien = $o->total;
    	}
    ?>
<div class="container">     
		<div class="row">
			<div class="details col-md-8 col-sm-8 col-xs-12">
				<div class="detail-info">

					<table>
						<tr>
							<th>Mã đặt vé:</th>
							<td><?= $maHoaDon ?></td>
						</tr>

						<tr>
							<th>Họ và Tên:</th>
							<td><?= $khachHang ?></td>
						</tr>

						<tr>
							<th>Tên rạp:</th>
							<td><?= $tenRap ?></td>
						</tr>

						<tr>
							<th>Tên phim:</th>
							<td><?= $tenPhim ?></td>
						</tr>

						<tr>
							<th>Ngày chiếu:</th>
							<td><?= $ngayChieu ?></td>
						</tr>

						<tr>
							<th>Giờ chiếu:</th>
							<td><?= $gioChieu ?></td>
						</tr>

						<tr>
							<th>Loại vé:</th>
							<td><?= $loaiVe ?></td>
						</tr>

						<tr>
							<th>Số lượng vé:</th>
							<td><?= $soLuongVe ?></td>
						</tr>

						<tr>
							<th>Giá vé:</th>
							<td><?= number_format($giaVe) ?> VNĐ</td>
						</tr>

						<tr>
							<th>Đồ ăn:</th>
							<td><?= $doAn ?></td>
						</tr>

						<tr>
							<th>Số lượng:</th>
							<td><?= $soLuong ?></td>
						</tr>

						<tr>
							<th>Giá Tiền:</th>
							<td><?= number_format($giaTien)?>  VNĐ</td>
						</tr>

						<tr>
							<th></th>
							<td><hr></td>
						</tr>

						<tr>
							<th>Tổng tiền:</th>
							<td><?= number_format($tongTien) ?> VNĐ</td>
						</tr>

					</table>				
				
				</div>
				<br>
				<form action="?controller=account&action=password" method="post" style="display: inline;" >
					<input type="hidden" name="username" value="<?= $acc->username ?>">
					<button id="rating-click" type="submit" ng-click="showRaiting()" class="btn btn-danger btn-sm">Hủy vés</button>
				</form>
			</div>
		</div>
</div>