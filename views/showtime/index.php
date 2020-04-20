<link rel="stylesheet" type="text/css" href="css/showtime.css">
<div class="container">
    <div class='hot col-12'>
        <h4>LỊCH CHIẾU VIVO CITY<br></h4>
		<div class="tab">
            <button class ="tablink"style = "width: 106px;">
        		<div class="row">
        			<em>Thu</em>
        			<h6>3</h6>
        			<h2>15</h2>
        		</div>
			</button>
			
            <button class ="tablink"style = "width: 106px;">
                <div class="row">
					<em>Thu</em>
				    <h6>3</h6>
					<h2>15</h2>
				</div>
			</button>
					
            <button class ="tablink"style = "width: 106px;">
				<div class="row">
					<em>Thu</em>
					<h6>3</h6>
				    <h2>15</h2>
				</div>
			</button>
					
            <button class ="tablink"style = "width: 106px;">
				<div class="row">
					<em>Thu</em>
					<h6>3</h6>
					<h2>15</h2>
				</div>
			</button>

			<button class ="tablink"style = "width: 106px;">
			 <div class="row">
					<em>Thu</em>
					<h6>3</h6>
					<h2>15</h2>
				</div>
			</button>
					
            <button class ="tablink"style = "width: 106px;">
			    <div class="row">
					<em>Thu</em>
				    <h6>3</h6>
					<h2>15</h2>
				</div>
			</button>

			<button class ="tablink"style = "width: 106px;">
                <div class="row">
					<em>Thu</em>
					<h6>3</h6>
					<h2>15</h2>
				</div>
			</button>
					
            <button class ="tablink"style = "width: 106px;">
                <div class="row">
					<em>Thu</em>
					<h6>3</h6>
					<h2>15</h2>
				</div>
			</button>
					
            <button class ="tablink"style = "width: 106px;">
                <div class="row">
					<em>Thu</em>
					<h6>3</h6>
					<h2>15</h2>
				</div>
			</button>
					
            <button class ="tablink"style = "width: 106px;">
				<div class="row">
					<em>Thu</em>
					<h6>3</h6>
					<h2>15</h2>
				</div>
			</button>
		</div>
	<hr>
		<?php
			foreach ($showtime as $s) {
				?>
					<div class="row" style = "margin-bottom: 40px;">
						<div class="col-xl-8 col-lg-3 col-md-4 col-6">
							<h4 style="text-align: left;"><?= $s['tenPhim'] ?></h4>
							<h6>2D Phụ Đề Việt</h6>

							<h6>3D Phụ Đề Việt</h6>
								<div class= "row">
			                        <div class="cell col-xl-3 col-lg-3 col-md-4 col-6">
			                            <div class="infor">
			                                <p>09:30 AM</p>
			                            </div>
			                        </div>
								</div>

								<h6>4Dx3D Phụ Đề Việt | Rạp 4DX</h6>
								<div class= "row">
			                        <div class="cell col-xl-3 col-lg-3 col-md-4 col-6">
			                            <div class="infor">
			                                <p>09:30 AM</p>
			                            </div>
			                        </div>
								</div>
			            </div>
				    </div>
				    <hr style="height: 1px">
				<?php
			}
		?>
    </div>
</div>

