<link rel="stylesheet" type="text/css" href="css/content.css">
<link rel="stylesheet" type="text/css" href="css/detail.css">

<div class="container" >
    <div class='hot col-12'>
        <h3><hr>Nội Dung Khuyến Mãi<hr></h3> 
    </div>
</div>
  <?php 
  	foreach ($promotion as $p) {
		$tenKM = $p->name;
		$noiDung = $p->content;
		$hinhAnh = $p->image;
  	}
  ?>
			
<div class="container" style="padding-bottom: 20px">     
	<div class="row">
		<div class="col-md-4 col-sm-4 col-xs-8 col-xs-offset-2 col-md-offset-0">
			<img src="<?= "admin/".$hinhAnh ?>" width='300px' height='400px'>
		</div>
		
		<div class="details col-md-8 col-sm-8 col-xs-12">
			<h2 style="color: red" class="detail-title upper-text"><?= $tenKM ?></h2>
			
			<div class="detail-info">

				<div class="detail-info-row">
					<span class="title"></span><span> <?= $noiDung ?></span>
				</div>

			</div>
										
		</div>
	</div>
</div>
