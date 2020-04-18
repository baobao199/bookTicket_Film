<style type="text/css">
	.container{
		padding-bottom: 10px;
	}
	h2{
		font-weight: bold;
		color: #00BFFF;
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
  		<h2>CẬP NHẬT MẬT KHẨU<hr></h2>
		<div class="container-left">
	    	<form action="?controller=admin&action=updatepass" method="post" enctype="multipart/form-data">
	    		<?php 
	    			foreach ($admin as $a){
	    				$taiKhoan = $a->username;
	    			}

	    		?>
	    		<div class="form-group">
	      			<label>Tài Khoản</label>
		      		<input value="<?= $taiKhoan ?>" type="text" class="form-control" name="username">
	   			</div>
		    	<div class="form-group">
		      		<label>Nhập mật khẩu cũ</label>
		      		<input type="password" class="form-control" name="passold">
		    	</div>
		    	<div class="form-group">
		      		<label for="text">Nhập mật khẩu mới</label>
		      		<input type="password" class="form-control" name="passnew">
		    	</div>
		    	<div class="form-group">
		      		<label for="text">Nhập lại mật khẩu mới</label>
		      		<input type="password" class="form-control" name="passconfirm">
		    	</div>
		    	
	    		<button type="submit" class="btn btn-primary">Cập nhật mật khẩu</button>
	  		</form>
		</div>
	</div>

</body>
</html>
