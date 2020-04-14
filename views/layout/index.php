<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>V Cinema</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>

        <link rel="stylesheet" type="text/css" href="css/content.css">
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <link rel="stylesheet" type="text/css" href="css/slide.css">
        <link rel="stylesheet" type="text/css" href="css/footer.css">

    </head>
    <body>
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <a class="logo" href="index.php"><h3>V CINEMA</h3></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="collapsibleNavbar" >
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Trang chủ</a>
                    </li>

                    <li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Phim
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="index.php?controller=movieplaying">Phim đang chiếu</a>
							<a class="dropdown-item" href="index.php?controller=moviecomingsoon">Phim sắp chiếu</a>
						</div>
					</li>
					<li class="nav-item">
                        <a class="nav-link" href="#">Khuyến mãi</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Rạp Chiếu Phim</a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link" href="login.html">Đăng nhập</a>
                    </li>
                </ul>
            </div>  
        </nav>

        <?= $home_content ?>

        <footer>
            <div class="container-fluid p-0">
                <div class="row text-left">
                    <div class="col-md-8 col-sm-4">
                        <h4 class="text-light">Địa chỉ</h4>
                        <p class="text-muted">Công Ty Cổ Phần Phim Thiên Ngân, Tầng 5, Toà Nhà Mặt Trời Sông Hồng, 23 Phan Chu Trinh, Phường Phan Chu Trinh, Quận Hoàn Kiếm, Hà Nội</p>
                    </div>

                    <div class="col-md-3 col-sm-4">
                        <h4 class="text-light">Follow Us</h4>
                        <div class="column text-light">
                            <i class="fab fa-facebook-f" style="font-size:36px;"></i>
                            <i class="fab fa-instagram" style="font-size:36px;"></i>
                            <i class="fab fa-youtube" style="font-size:36px;"></i>
                        </div>

                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
