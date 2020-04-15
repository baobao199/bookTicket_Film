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
  		<h3>ĐĂNG KÝ TÀI KHOẢN<hr></h3>
		<div class="container-left">
	    	<form action="?controller=account&action=upload" method="post" enctype="multipart/form-data">
	    		<div class="form-group">
	      			<label>Tài Khoản</label>
		      		<input type="text" class="form-control" name="username">
	   			</div>

	   			<div class="form-group">
		      		<label>Mật khẩu</label>
		      		<input type="password" class="form-control" name="password">
		    	</div>

		    	<div class="form-group">
		      		<label>Họ và Tên</label>
		      		<input type="text" class="form-control" name="fullName">
		    	</div>
		    	<div class="form-group">
		      		<label for="text">Giới tính</label>
		      		<div class="input-box">
						<input type="radio" name="sex" checked="checked" autocomplete="off" value="Nam">Nam
						<input type="radio" name="sex" autocomplete="off" value="Nữ">Nữ
					</div>
		    	</div>
		    	<div class="form-group">
		      		<label for="text">Ngày sinh</label>
		      		<input type="text" class="form-control" name="birthday">
		    	</div>
		    	<div class="form-group">
		      		<label for="text">Email</label>
		      		<input type="text" class="form-control" name="email">
		    	</div>
		    	<div class="form-group">
		      		<label for="text">Địa chỉ</label>
		      		<input type="text" class="form-control" name="address">
		    	</div>
		    	<div class="form-group">
		      		<label for="text">Số điện thoại</label>
		      		<input type="text" class="form-control" name="phone">
		    	</div>
		    	
	    		<button type="submit" class="btn btn-primary">Đăng ký</button>
	  		</form>
		</div>
	</div>

</body>
</html>
