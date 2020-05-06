<link rel="stylesheet" type="text/css" href="css/content.css">
<link rel="stylesheet" type="text/css" href="css/detail.css">

<div class="container" >
    <div class='hot col-12'>
        <h3><hr>Nội Dung Phim<hr></h3> 
    </div>
</div>
  <?php 
  	foreach ($movieplaying as $m) {
		$tenPhim = $m->name;
		$daoDien = $m->director;
		$dienVien = $m->actor;
		$theLoai = $m->genre;
		$khoiChieu = $m->startDay;
		$thoiLuong = $m->time;
		$ngonNgu = $m->language;
		$moTa = $m->decription;
		$hinhAnh = $m->image;
  	}
  ?>
			
<div class="container" style="padding-bottom: 20px">     
	<div class="row">
		<div class="col-md-4 col-sm-4 col-xs-8 col-xs-offset-2 col-md-offset-0">
			<img src="<?= "admin/".$hinhAnh ?>" width='300px' height='400px'>
			<div class="play-bt" onclick="playTrailer()"><galaxy-watch-trailer data-title="&quot;Nắng 3: Lời Hứa Của Cha&quot;" ng-trailer="&quot;https://www.youtube.com/watch?v=Oq8zVs3TxHg&quot;" class="ng-isolate-scope">
			<a class="btn primary animated fadeInUp" ng-click="submit()"> trailer</a></galaxy-watch-trailer>
			</div>
				<div id="myModal" class="modal">
					<!-- Modal content -->
					<div class="modal-content">
						<span class="close">&times;</span>
						<iframe width="560*2" height="560" src="https://www.youtube.com/embed/DymKqNH_m8w" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>

				</div>
		</div>
		
		<div class="details col-md-8 col-sm-8 col-xs-12">
			<h2 class="detail-title upper-text"><?= $tenPhim ?></h2>
			
			<div class="detail-info">

				<div class="detail-info-row">
					<span class="title">Đạo diễn:</span><span> <?= $daoDien ?></span>
				</div>

				<div class="detail-info-row">
					<span class="title">Diễn viên:</span><span> <?= $dienVien ?></span>
				</div>

				<div class="detail-info-row">
					<span class="title">Thể loại: </span><span><?= $theLoai ?></span>
				</div>

				<div class="detail-info-row">
					<span class="title">Khởi chiếu:</span><span> <?= $khoiChieu ?></span>
				</div>

				<div class="detail-info-row">
					<span class="title">Thời lượng:</span><span> <?= $thoiLuong ?></span>
				</div>
										
	
				<div class="detail-info-row">
					<span class="title">Ngôn ngữ:</span><span> <?= $ngonNgu ?></span>
				</div>

				<div class="detail-info-row">
					<span class="title">Mô tả:</span><span> <?= $moTa ?></span>
				</div>

				<div class="detail-info-row">
					<form action="?controller=bookticket">
						<input type="hidden" name="id" value=""/>
						<button type="button" class="btn btn-danger">Đặt vé</button>
					</form>
				</div>

			</div>
										
			</div>
		</div>
	</div>
</div>