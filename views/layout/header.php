<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <a class="logo" href="index.php"><h3>V CINEMA</h3></a>
            
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Trang chủ</a>
            </li>

            <li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Phim</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					<a class="dropdown-item" href="index.php?controller=movieplaying">Phim đang chiếu</a>
					<a class="dropdown-item" href="index.php?controller=moviecomingsoon">Phim sắp chiếu</a>
				</div>
			</li>
            <li class="nav-item">
                <?php 
                    if(isLoggedIn()){
                        ?>
                            <a class="nav-link" href="index.php?controller=bookticket">Đặt vé</a>
                        <?php
                    }
                    else{
                        ?>
                            <a class="nav-link" href="index.php?controller=account">Đặt vé</a>
                        <?php
                    }
                ?>
                
                    
            </li>
			<li class="nav-item">
                <a class="nav-link" href="index.php?controller=promotion">Khuyến mãi</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="index.php?controller=movietheater">Rạp Chiếu Phim</a>
            </li>
            <?php
                if(isLoggedIn()){
                    ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tài Khoản</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="?controller=account&action=profile">Thông tin tài khoản</a>
                                <a class="dropdown-item" href="?controller=bookticket&action=orderhistory">Thông tin đặt vé</a>
                                <a class="dropdown-item" href="?controller=account&action=logout">Đăng xuất</a>
                            </div>
                        </li>
                    <?php
                }
                else{
                    ?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?controller=account">Đăng nhập</a>
                        </li>
                    <?php
                }
            ?>
        </ul>
    </div>  
</nav>