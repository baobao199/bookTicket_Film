<!DOCTYPE html>
<html lang="en">
<head>
  <title>V Cinema</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		  <!-- Brand -->
		  	<a class="navbar-brand" href="index.php">V CINEMA</a>

		  <!-- Links -->
		  	<ul class="navbar-nav ml-auto">
			    <li class="nav-item">
			      <a class="nav-link" href="index.php">Trang chủ</a>
			    </li>
			    <!-- Dropdown -->
			    <li class="nav-item dropdown">
				    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
				        Quản trị thông tin
				    </a>
				      <div class="dropdown-menu">
				        
				        <a class="dropdown-item" href="index.php?controller=ticketmanager&action=index">Quản lý vé</a>
				        <a class="dropdown-item" href="index.php?controller=slide&action=index">Quản lý quảng cáo</a>
				        <a class="dropdown-item" href="index.php?controller=showtime&action=index">Quản lý xuất chiếu</a>
				        <a class="dropdown-item" href="?controller=movietheater&action=index">Quản lý rạp phim</a>
				        <a class="dropdown-item" href="">Khuyến mãi</a>
				      </div>
			    </li>
			    <li class="nav-item dropdown">
				    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
				        Quản trị phim
				    </a>
				      	<div class="dropdown-menu">
				        	<a class="dropdown-item" href="index.php?controller=filmmanager&action=index">Phim đang chiếu</a>   
				        	<a class="dropdown-item" href="index.php?controller=moviecomingsoon&action=index">Phim đang sắp chiếu</a>
				        	<a class="dropdown-item" href="index.php?controller=outstanding&action=edit">Phim nổi bật</a>   
			    </li>
			    <li class="nav-item">
			      <a class="nav-link" href="members.html">Quản trị khách hàng</a>
			    </li>
			    <li class="nav-item">
			      <a class="nav-link" href="#">Quản trị đặt vé</a>
			    </li>
			    <li class="nav-item dropdown">
				    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
				        Tài khoản
				    </a>
				      <div class="dropdown-menu">
				        <a class="dropdown-item" href="#">Đổi mật khẩu</a>
				        <a class="dropdown-item" href="#">Đăng xuất</a>		     
				      </div>
			    </li>
		  	</ul>

	</nav>
	<br>
</body>
</html>
