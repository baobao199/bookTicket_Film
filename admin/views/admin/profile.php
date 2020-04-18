<?php
    $acc = unserialize($_SESSION['acc']);
?>
<style type="text/css">
	td{
		padding-left: 10px;
	}
	tr{
		height: 35px;
	}
	.container{
		padding-left: 30px;
		padding-bottom: 24px;
	}
	.hot{
		padding-top: 20px;
	}
	h3{
		color: #00BFFF;
		font-weight: bold;
	}
</style>
    <div class='hot col-12'>
       	<h3>THÔNG TIN TÀI KHOẢN<hr></h3> 
    </div>
<div class="container">     
		<div class="row">
			<div class="details col-md-8 col-sm-8 col-xs-12">
				<div class="detail-info">

					<table>
						<tr>
							<th>Tài khoản:</th>
							<td><?= $acc->username ?></td>
						</tr>

						<tr>
							<th>Họ và Tên:</th>
							<td><?= $acc->fullName ?></td>
						</tr>

					</table>				
				
				</div>
				<br>
				<form action="?controller=admin&action=password" method="post" style="display: inline;" >
					<input type="hidden" name="username" value="<?= $acc->username ?>">
					<button id="rating-click" type="submit" ng-click="showRaiting()" class="btn btn-danger btn-sm">Đổi mật khẩu</button>
				</form>
			</div>
		</div>
</div>