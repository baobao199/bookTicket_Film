<link rel="stylesheet" type="text/css" href="css/slide.css">
<div id="demo" class=" carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1">
                <li data-target="#demo" data-slide-to="2">
            </ul>
            <?php
                require_once("models/Slide.php");
                $slide = Slide::getAll();
                $slide1 = $slide[0]->image;
                $slide2 = $slide[1]->image;
                $slide3 = $slide[2]->image;

            ?>
                
            <div class="col-12 carousel-inner">
                <div class=" item carousel-item active">
                    <img src="<?= "admin/".$slide1 ?>" alt="FROZEN 2"> 
                </div>

                <div class="item carousel-item">
                    <img src="<?= "admin/".$slide2 ?>" alt="END GAME">
                </div>

                <div class="item carousel-item">
                    <img src="<?= "admin/".$slide3 ?>" alt="END GAME">
                </div>
                
                <a class=" carousel-control-prev" href="#demo" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </a>
                <a class=" carousel-control-next" href="#demo" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </a>
            </div>
</div>

<div class="container">
            <div class="row">
                
                <div class='hot col-12'>
                    <h5>PHIM ĐƯỢC XEM NHIỀU NHẤT<hr></h5> 
                </div>
                
                <div class="col-xl-3 col-lg-3 col-md-4 col-6">
                    <div class="cell">
                        <div class="infor">
                            <img src="img/fz2/Frozen2.jpg" />
                           <h5>FROZENT II</h5>
                            <p>Thời gian 120 phút <br> 20/03/2020</p>
                            <a href="#" class="btn btn-primary">Đặt vé</a>
                            <a href="#" class="btn btn-primary">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-3 col-lg-3 col-md-4 col-6">
                    <div class="cell">
                        <div class="infor">
                            <img src="img/spm/spm.jpg" />
                            <h5>FROZENT II</h5>
                            <p>Thời gian 120 phút <br> 20/03/2020</p>
                            <a href="#" class="btn btn-primary">Đặt vé</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-3 col-lg-3 col-md-4 col-6">
                    <div class="cell">
                        <div class="infor">
                            <img src="img/fz2/Frozen2.jpg" />
                            <h5>FROZENT II</h5>
                            <p>Thời gian 120 phút <br> 20/03/2020</p>
                            <a href="#" class="btn btn-primary">Đặt vé</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-4 col-6">
                    <div class="cell">
                        <div class="infor">
                            <img src="img/fz2/Frozen2.jpg" />
                            <h5>FROZENT II</h5>
                            <p>Thời gian 120 phút <br> 20/03/2020</p>
                            <a href="#" class="btn btn-primary">Đặt vé</a>
                        </div>
                    </div>
                </div>

                <div class='hot col-12'>
                    <h5>SỰ KIỆN<hr></h5> 
                </div>
                
                <div class='hot col-12'>
                    <h5>KHUYẾN MÃI<hr></h5> 
                </div>
                
            </div>

        </div>
    <div id="footer">Copyright @ your Website 2017</div>
