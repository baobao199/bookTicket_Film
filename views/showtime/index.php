<link rel="stylesheet" type="text/css" href="css/showtime.css">
<div class="container">
    <div class='hot col-12'>
        <h4>LỊCH CHIẾU VIVO CITY<br></h4>
        
        	<div class="tab">
        	<?php
	        	$start_date = date("Y-m-d");
 				$end_date = date('Y-m-d', strtotime($start_date. ' + 9 days'));
 				$weekdays = [0,1,2,3,4,5,6]; // 0 = sunday, 1 = monday ...
				$range_date = array();
				for ($i = strtotime($start_date); $i <= strtotime($end_date); $i = strtotime('+1 day', $i)) 
				{
				    if(in_array(date('N', $i), $weekdays))//Monday == 1
				    {
				    	?>
				    			<form>
		            			<button type="submit" class ="tablink"style = "width: 120px; text-align: center;" name="datef">
		        					<input type="text" class="form-control" id="tabDate"name="datef" style="display: none;"value=<?php echo date('Y-m-d', $i)?>>
		        					<?php echo date('Y-m-d', $i)?>

								</button>

								</form>	
				    	<?php
				    }
				 }
	        ?>
	        </div>
            
	<hr>
		<?php
			require_once("models/ShowTime.php");
			foreach ($showtime as $s) {
				?>
					<div class="row" style = "margin-bottom: 40px;">
						<div class="col-xl-8 col-lg-3 col-md-4 col-6">
							<h4 style="text-align: left;"><?= $s['tenPhim'] ?></h4>
							<h6>2D Phụ Đề Việt</h6>
								<div class="row">
									<?php
									$gioChieu = ShowTime::getShowTimeFilm($s['maphim'], 'CGVVC', 'TK2D','2020-04-25');
									foreach ($gioChieu as $g) {
										?>
			                        			<div class="cell col-xl-3 col-lg-3 col-md-4 col-6">
			                           				<div class="infor">
			                                			<p><?= $g['gioChieu'] ?></p>
			                           				</div>
			                        			</div>
										<?php
									}
								?>
								</div>
								

							<h6>3D Phụ Đề Việt</h6>
								<div class="row">
									<?php
									$gioChieu = ShowTime::getShowTimeFilm($s['maphim'], 'CGVVC', 'TK3D','2020-04-25');
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
									$gioChieu = ShowTime::getShowTimeFilm($s['maphim'], 'CGVVC', 'TK4D','2020-04-25');
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

