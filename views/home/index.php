<link rel="stylesheet" type="text/css" href="css/slide">
<link rel="stylesheet" type="text/css" href="css/content.css">
<link rel="stylesheet" type="text/css" href="css/footer.css">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<div id="demo" class=" carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1">
                <li data-target="#demo" data-slide-to="2">
                <li data-target="#demo" data-slide-to="3">
            </ul>
            <?php
                require_once("models/Slide.php");
                $slide = Slide::getAll();
                $slide1 = $slide[0]->image;
                $slide2 = $slide[1]->image;
                $slide3 = $slide[2]->image;
                $slide4 = $slide[3]->image;

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

                <div class="item carousel-item">
                    <img src="<?= "admin/".$slide4 ?>" alt="END GAME">
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
            <h2 style="font-weight: bolder;">PHIM ĐƯỢC XEM NHIỀU NHẤT<hr></h2> 
        </div>
        <?php 
            foreach ($outstanding as $m) {
                ?>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-6 cnt">
                        <div class="cell">
               
                            <div class="infor">
                                <img src="<?= "admin/".$m->image ?>" />
                                <p style="font-weight: bold;"><?= $m->name ?></p>
                                <p style="height: 80px">Thời gian: <?= $m->time ?><br>
                                Thể loại: <?= $m->genre ?> <br>
                                Khởi chiếu: <?= $m->startDay ?></p>
                                <form action="?controller=bookticket" method="post" style="display: inline;">
                                    <input type="hidden" name="id" value="<?= $m->id ?>"/>
                                     <button type="submit" class="btn btn-danger">Đặt vé</button>
                                </form>

                                <form action="?controller=movieplaying&action=detail" method="post" style="display: inline;">
                                    <input type="hidden" name="id" value="<?= $m->id ?>"/>
                                     <button type="submit" class="btn btn-info">Xem chi tiết</button>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php
            }     
        ?>
    </div>   
    <div class="row">
        <div class='hot col-12'>
             <br>
            <h2 style="font-weight: bolder;">SỰ KIỆN<hr></h2> 
        </div>
        <?php 
            foreach ($event as $e) {
                ?>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-6 cnt">
                        <div class="cell">
               
                            <div class="infor">
                                <img src="<?= "admin/".$e->image ?>" />
                                <p style="font-weight: bold; height: 60px; text-align: center;"><?= $e->name ?></p>
                                <form action="?controller=promotion&action=detail" method="post" style="display: inline;">
                                    <input type="hidden" name="id" value="<?= $e->id ?>"/>
                                     <button style="margin-left: 65px"  type="submit" class="btn btn-info">Xem chi tiết</button>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php
            }     
        ?>
    </div>   
    <div class="row" style="padding-bottom: 20px">
            <div class='hot col-12'>
                 <br>
                <h2 style="font-weight: bolder;">KHUYẾN MÃI<hr></h2> 
            </div>
            <?php 
                foreach ($promotion as $p) {
                    ?>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-6 cnt">
                            <div class="cell">
                   
                                <div class="infor">
                                    <img src="<?= "admin/".$p->image ?>" />
                                    <p style="font-weight: bold; height: 60px; text-align: center;"><?= $p->name ?></p>
                                    <form action="?controller=promotion&action=detail" method="post" style="display: inline;">
                                        <input type="hidden" name="id" value="<?= $p->id ?>"/>
                                         <button style="margin-left: 65px" type="submit" class="btn btn-info">Xem chi tiết</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php
                }     
            ?>
    </div>
                
</div>

    