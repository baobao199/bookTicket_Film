<link rel="stylesheet" type="text/css" href="css/showtime.css">
<div class="container">
    <div class='hot col-12'>
		<?php
			$id = $_SESSION['id'];
			$dateF = filter_input(INPUT_POST,'datef',FILTER_SANITIZE_STRING);

			require_once("models/ShowTime.php");
			foreach ($showtime as $s) {
				?>
					<div class="row" style = "margin-bottom: 40px;">
						<div class="col-xl-8 col-lg-3 col-md-4 col-6">
							<h4 style="text-align: left;"><?= $s['tenPhim'] ?></h4>
							<h6>2D Phụ Đề Việt</h6>
								<div class="row">
									<?php
									$gioChieu = ShowTime::getShowTimeFilm($s['maphim'], $id, 'TK2D', $dateF);
									if($gioChieu === null){
										
									}
									else{
										foreach ($gioChieu as $g) {
											?>
				                        			<div class="cell col-xl-3 col-lg-3 col-md-4 col-6">
				                           				<div class="infor">
				                                			<p><?= $g['gioChieu'] ?></p>
				                           				</div>
				                        			</div>
											<?php
										}
									}
								?>
								</div>
								

							<h6>3D Phụ Đề Việt</h6>
								<div class="row">
									<?php
									$gioChieu = ShowTime::getShowTimeFilm($s['maphim'], $id, 'TK3D', $dateF);
									if($gioChieu === null){
										
									}
									else{
										foreach ($gioChieu as $g) {
											?>
				                        			<div class="cell col-xl-3 col-lg-3 col-md-4 col-6">
				                           				<div class="infor">
				                                			<p><?= $g['gioChieu'] ?></p>
				                           				</div>
				                        			</div>
											<?php
										}
									}
								?>
								</div>
								

								<h6>4Dx3D Phụ Đề Việt | Rạp 4DX</h6>
								<div class="row">
									<?php
									$gioChieu = ShowTime::getShowTimeFilm($s['maphim'], $id, 'TK4D', $dateF);
									if($gioChieu === null){
										
									}
									else{
										foreach ($gioChieu as $g) {
											?>
				                        			<div class="cell col-xl-3 col-lg-3 col-md-4 col-6">
				                           				<div class="infor">
				                                			<p><?= $g['gioChieu'] ?></p>
				                           				</div>
				                        			</div>
											<?php
										}
									}
								?>
								</div>
								
			            </div>
				    </div>
				    <hr style="height: 1px">
				<?php
			}
		?>
    </div>
</div>

