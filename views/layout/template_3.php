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
        <link rel="stylesheet" type="text/css" href="css/movietheater.css">

    </head>
    <body>
        
        <?php require_once('header.php') ?>

        <div class="container">
            <div class="row">
        <div class='hot col-12'>
            <h3 style="">MOVIE THEATER<hr></h3> 
        </div>

        <style>
            .cinemas-list{
                background-color: #444242;
            }
            .cinemas-list a{
                color: white;
            }
            .cinemas-list a:hover{
                color: red;
            }
        </style>

        <div class="container" style="padding-bottom: 20px;">
            <div class="cinemas-list">
                <ul id = "list">
                    <li class="cgv_city_1 current" data-toggle="collapse" data-target="#demo">
                        <a href="?controller=movietheater&action=detail&id=CGVHV">CGV Hùng Vương Plaza</a> 
                    </li>

                    <li class="cgv_city_1" style="" data-toggle="collapse" data-target="#demo">
                        <a href="?controller=movietheater&action=detail&id=CGVCM">CGV Crescent Mall</a>
                    </li>
                                    
                    <li class="cgv_city_1" style="" data-toggle="collapse" data-target="#thaodien">
                        <a href="#">CGV Thảo Điền</a>
                    </li>

                    <li class="cgv_city_1" style="" data-toggle="collapse" data-target="#vincomthuduc">
                        <a href="#">CGV Vincom Thủ Đức</a>
                    </li>

                    <li class="cgv_city_1 current" style="" data-toggle="collapse" data-target="#vivocity">
                        <a href="?controller=movietheater&action=detail&id=CGVVC">CGV Vivo City</a>
                    </li>

                    <li class="cgv_city_1" style="" data-toggle="collapse" data-target="#pearlplaza">
                        <a href="#">CGV Pearl Plaza</a>
                    </li>

                    <li class="cgv_city_1" style="" data-toggle="collapse" data-target="#citypoint">
                        <a href="#">CGV Liberty Citypoint</a>
                    </li>

                    <li class="cgv_city_1" style="" data-toggle="collapse" data-target="#vincomdongkhoi">
                        <a href="#">CGV Vincom Đồng Khởi</a> 
                    </li>
                                        
                    <li class="cgv_city_1" style="" data-toggle="collapse" data-target="#truongson">
                        <a href="#">CGV Trường Sơn</a> 
                    </li>
                                    
                    <li class="cgv_city_1" style="" data-toggle="collapse" data-target="#pandora">
                        <a href="#">CGV Pandora City</a> 
                    </li>

                    <li class="cgv_city_1" style="" data-toggle="collapse" data-target="#aeontanphu">
                        <a href="#">CGV Aeon Tân Phú</a> 
                    </li>
                                    
                    <li class="cgv_city_1" style="" data-toggle="collapse" data-target="#govap">
                        <a href="#">CGV Vincom Gò Vấp</a> 
                    </li>

                    <li class="cgv_city_1" style="" data-toggle="collapse" data-target="#hoanvanthu">
                        <a href="#">CGV Hoàng Văn Thụ</a>
                    </li>

                    <li class="cgv_city_1" style="" data-toggle="collapse" data-target="#binhtan">
                        <a href="#">CGV Aeon Bình Tân</a>
                    </li>

                    <li class="cgv_city_1" style="" data-toggle="collapse" data-target="#nguyenxi">
                        <a href="#">CGV Saigonres Nguyễn Xí</a>
                    </li>
                                                
                    <li class="cgv_city_1" style="" data-toggle="collapse" data-target="#dongkhoi">
                        <a href="#">CGV Parkson Đồng Khởi</a>
                    </li>
                                        
                    <li class="cgv_city_1" style="" data-toggle="collapse" data-target="#suvanhanh">
                        <a href="#">CGV Sư Vạn Hạnh</a>
                    </li>
                                    
                    <li class="cgv_city_1" style="" data-toggle="collapse" data-target="#tranquankhai">
                        <a href="#">CGV Trần Quang Khải</a>
                    </li>
                                                    
                    <li class="cgv_city_1" style=""data-toggle="collapse" data-target="#landmark81">
                        <a href="#">CGV Landmark 81</a>
                    </li>
                                                        
                    <li class="cgv_city_1" style="" data-toggle="collapse" data-target="#cuchi">
                        <a href="#">CGV Satra Củ Chi</a>
                    </li>
                                                        
                    <li class="cgv_city_1" style="" data-toggle="collapse" data-target="#thuduc">
                        <a href="#">CGV Giga Mall</a>
                    </li>
                </ul>
                        
            </div>
        </div>
            </div>
        </div>
        
        <?= $home_content ?>

        <?php require_once('footer.php') ?>
    </body>
</html>

 