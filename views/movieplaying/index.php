<div class="container">
    <div class='hot col-12'>
        <h3>PHIM ĐANG CHIẾU<hr></h1> 
    </div>
    <div class="row">
         <?php 
            foreach ($movieplaying as $m) {
                ?>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-6">
                        <div class="cell">
               
                            <div class="infor">
                                <img src="<?= $m->image ?>" />
                                <h5><?= $m->name ?></h5>
                                <p>Thời gian: <?= $m->time ?><br>
                                Thể loại: <?= $m->genre ?> <br>
                                Khởi chiếu: <?= $m->startDay ?></p>
                                <a href="#" class="btn btn-danger">Đặt vé</a>
                                <a href="#" class="btn btn-info">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                <?php
            }     
        ?>  
    </div>

</div>
<div id="footer">Copyright @ your Website 2017</div>
