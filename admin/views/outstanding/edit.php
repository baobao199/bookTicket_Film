<link rel="stylesheet" type="text/css" href="css/content.css">
<div class="container">
	<div style="text-align: center;"><h2>DANH SÁCH PHIM NỔI BẬC</h2></div>
	<div class="table-responsive">
		<table class="table table-bordered" style="width: 500px; margin: auto;">
		    <thead>
		      	<tr>
		      		<th>STT</th>
		        	<th>Mã phim nổi bật</th>
		        	<th>Công cụ</th>
		        </tr>
			</thead>
			<tbody>
				<?php
					$id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_STRING);
					foreach ($outstanding as $o) 
					{
					 	?>
					 		<tr>
					 			<td><?= $o->stt ?></td>
					        	<td>
					        		<div class="form-group">
	      								<input value="<?= $o->id ?>" type="text" class="form-control" name="id">
	   								</div>
					        	</td>
					        	<td style="width: 200px">
									<a class="btn btn-info" href="?controller=outstanding&action=update&stt=<?= $o->stt ?>&id=<?= $id ?>">
									<i class="material-icons">&#xe254;</i>
								</a>
		        				</td>
		        			</tr>
					 	<?php
					} 
				?>
		    </tbody>
		</table>
  	</div>
</div>
