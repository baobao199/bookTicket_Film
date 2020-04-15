<link rel="stylesheet" type="text/css" href="css/content.css">
<div class="container">
		<div><h2>DANH TÀI KHOẢN KHÁCH HÀNG</h2></div>
		<div class="table-responsive">
		    <table class="table table-bordered">
		      <thead>
		        <tr>
		        	<th>Tài khoản</th>
		        	<th>Tên khách hàng</th>
		        	<th>Giới tính</th>
		        	<th>Ngày sinh</th>
		        	<th>Email</th>
		        	<th>Địa chỉ</th>
		        	<th>Số điện thoại</th>
		        </tr>
		      </thead>
		      <tbody>
		      	<?php 
		      		foreach ($account as $a) {
		      			?>
		      			<tr>
				        	<td><?= $a->username ?></td>
				        	<td><?= $a->fullName ?></td>
				        	<td><?= $a->sex ?></td>
				        	<td><?= $a->birthday ?></td>
				        	<td><?= $a->email ?></td>
				        	<td><?= $a->address ?></td>
				        	<td><?= $a->phone ?></td>
		        		</tr>
		      			<?php
		      		}
		      	?>
		      </tbody>
		    </table>
  		</div>
	</div>
