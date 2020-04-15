<style>
	.container{
		padding-bottom: 51px;
	}
	h1{
		padding: 10px 0px 10px 0px;
		font-weight: bold;
	}
	label{
		font-weight: bold;
	}
	.form-control{
		width: 500px;
	}
</style>

<div class="container">
	<h1>ĐĂNG NHẬP</h1>
	<form action="?controller=account&action=login" method="post" name="Form" onsubmit="return validateForm()">
		<div class="form-group">
			<label for="fname">Tên Tài Khoản:</label>
			<input type="text" class="form-control" placeholder="Enter email" id="fname "name="username">
		</div>

		<div class="form-group">
			<label for="lname">Mật khẩu:</label>
			<input type="password" class="form-control" placeholder="Enter password" id="lname" name="password">
		</div>

		<div class="form-group form-check">
			<label class="form-check-label">
				<input class="form-check-input" type="checkbox"> Remember me
			</label>
		</div>

		<button type="submit" class="btn btn-primary">Đăng nhập</button>
	</form>

	<a href="?controller=account&action=register">Đăng ký tài khoản</a>
</div>