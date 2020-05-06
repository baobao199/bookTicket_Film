<link rel="stylesheet" type="text/css" href="css/content.css">
<div class="container" style="padding-bottom: 20px">
    <div class='hot col-12'>
        <h3>KHUYẾN MÃI VÀ SỰ KIỆN<hr></h3> 
    </div>
    <div class="row">
         <?php 
            foreach ($promotion as $p) {
                ?>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-6 cnt">
                        <div class="cell">
               
                            <div class="infor">
                                <img src="<?= "admin/".$p->image ?>" />
                                <p style="font-weight: bold;height: 65px; text-align: center;"><?= $p->name ?></p>
                                <form action="?controller=promotion&action=detail" method="post" style="display: inline">
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

