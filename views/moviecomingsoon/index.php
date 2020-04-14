<link rel="stylesheet" type="text/css" href="css/content.css">
<div class="container" style="padding-bottom: 20px">
    <div class='hot col-12'>
        <h3>PHIM SẮP CHIẾU<hr></h1> 
    </div>
    <div class="row">
         <?php 
            foreach ($moviecomingsoon as $m) {
                ?>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-6 cnt">
                        <div class="cell">
               
                            <div class="infor">
                                <img src="<?= "admin/".$m->image ?>" />
                                <p style="font-weight: bold;"><?= $m->name ?></p>
                                <p>Thời gian: <?= $m->time ?><br>
                                Thể loại: <?= $m->genre ?> <br>
                                Khởi chiếu: <?= $m->startDay ?></p>
                                <form action="?controller=movieplaying&action=detail" method="post" style="display: inline;">
                                    <input type="hidden" name="id" value="<?= $m->id ?>"/>
                                     <button type="submit" class="btn btn-danger">Đặt vé</button>
                                </form>

                                <form action="?controller=moviecomingsoon&action=detail" method="post" style="display: inline;">
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

</div>

