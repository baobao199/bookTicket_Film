<style type="text/css">
	.container{
		padding-bottom: 10px;
	}
	h2{
		font-weight: bold;
	}
	.form-group{
		width: 500px;
	}
	label{
		font-weight: bold;
	}
	span{
		font-size: 20px;
	}
</style>
<div class="container">
  		<h2>CHỈNH SỬA THÔNG TIN<hr></h2>
		<div class="container-left">
	    	<form action="?controller=account&action=update" method="post" enctype="multipart/form-data">
	    		<?php 
	    			foreach ($account as $a){
	    				$taiKhoan = $a->username;
	    				$hoTen = $a->fullName;
	    				$gioiTinh = $a->sex;
	    				$ngaySinh = $a->birthday;
	    				$email = $a->email;
	    				$diaChi = $a->address;
	    				$SDT = $a->phone;
	    			}

	    		?>
	    		<div class="form-group">
	      			<label>Tài Khoản</label>
		      		<input value="<?= $taiKhoan ?>" type="text" class="form-control" name="username">
	   			</div>
		    	<div class="form-group">
		      		<label>Họ và Tên</label>
		      		<input value="<?= $hoTen ?>" type="text" class="form-control" name="fullName">
		    	</div>
		    	<div class="form-group">
		      		<label for="text">Giới tính</label>
		      		<input value="<?= $gioiTinh ?>" type="text" class="form-control" name="sex">
		    	</div>
		    	<div class="form-group">
		      		<label for="text">Ngày sinh</label>
		      		<input value="<?= $ngaySinh ?>" type="text" class="form-control" name="birthday">
		    	</div>
		    	<div class="form-group">
		      		<label for="text">Email</label>
		      		<input value="<?= $email ?>" type="text" class="form-control" name="email">
		    	</div>
		    	<div class="form-group">
		      		<label for="text">Địa chỉ</label>
		      		<input value="<?= $diaChi ?>" type="text" class="form-control" name="address">
		    	</div>
		    	<div class="form-group">
		      		<label for="text">Số điện thoại</label>
		      		<input value="<?= $SDT ?>" type="text" class="form-control" name="phone">
		    	</div>
		    	
	    		<button type="submit" class="btn btn-primary">Cập nhật</button>
	  		</form>
		</div>
	</div>

</body>
</html>
