 <link rel="stylesheet" type="text/css" href="css/movietheater.css">
 <script src="js/movietheater.js"></script>
 <style>
    .container{
        padding-bottom: 20px;
    }
 	td{
 		padding-left: 20px;
 	}
 	tr{
 		height: 40px;
 	}
    th{
        width: 100px;
    }
 </style>
 <div class="container">
    <div class="row" style="width: 100%;">
        <?php 
            foreach ($movietheater as $m) {
               $tenRap = $m->name;
               $diaChi = $m->address;
               $SDT = $m->phoneNumber;
               $hinhAnh= $m->image;
            }
        ?>
        <div class="col-xl-8 col-lg-3 col-md-4 col-6"><img src="<?= 'admin/'.$hinhAnh ?>" height="350" width="700"></div>
        <div class="col-xl-4 col-lg-3 col-md-4 col-6">
        	<table>
        		<tr>
	        		<th>Tên rạp: </th>
	        		<td><?= $tenRap ?></td>
        		</tr>
        		<tr>
	        		<th>Địa chỉ:</th>
	        		<td> <?= $diaChi ?></td>
        		</tr>
        		<tr>
	        		<th>Fax:</th>
	        		<td><?= $SDT ?></td>
        		</tr>
        		<tr>
	        		<th>Hotline:</th>
	        		<td>1900 6017</td>
        		</tr>
                <tr>
                    <th></th>
                    <td><a href="?controller=showtime" class="btn btn-danger">Lịch chiếu phim</a></td>
                </tr>
                

        	</table>
        </div>

    </div>
</div>