<?php 
	$id = $_SESSION['id'];
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>V Cinema</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        
        <link rel="stylesheet" type="text/css" href="css/content.css">
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <link rel="stylesheet" type="text/css" href="css/slide.css">
        <link rel="stylesheet" type="text/css" href="css/footer.css">
        <link rel="stylesheet" type="text/css" href="css/movietheater.css">
        <link rel="stylesheet" type="text/css" href="css/showtime.css">

    </head>
    <body>
        
        <?php require_once('header.php') ?>

        <style>
            .cinemas-list{
                background-color: #444242;
            }
            .cinemas-list a{
                color: white;
            }
            .cinemas-list a:hover{
                color: red;
            }
        </style>

		<div class="container">
		    <div class='hot col-12'>
		    	<?php
		    		require_once("models/MovieTheater.php");
		    		$idmovietheater = MovieTheater::getMovieTheaterById($id);
		    		foreach ($idmovietheater as $m) {
		    			$maRap = $m->id;
		    			$tenRap = $m->name;
		    		}
		    	?>
		        <h4>Lịch Chiếu <?= $tenRap ?><br></h4>
		        	<div class="tab">
		        	<?php
			        	$start_date = date("Y-m-d");
		 				$end_date = date('Y-m-d', strtotime($start_date. ' + 9 days'));
		 				$weekdays = [0,1,2,3,4,5,6,7]; // 0 = sunday, 1 = monday ...
						$range_date = array();
						for ($i = strtotime($start_date); $i <= strtotime($end_date); $i = strtotime('+1 day', $i)) 
						{
						    if(in_array(date('N', $i), $weekdays))//Monday == 1
						    {
						    	?>
						    			<form action="?controller=showtime&action=detail" method="post">
					            			<button type="submit" class ="tablink"style = "width: 120px; text-align: center;">

					            				<input type="hidden" name="idmovietheater" value="<?= $maRap ?>"/>

												<input type="hidden" class="form-control" name="datef" style="display: none;"value=<?php echo date('Y-m-d', $i)?>>

					        					<?php echo date('Y-m-d', $i)?>

											</button>
										</form>	
						    	<?php
						    }
						 }
			        ?>
			        </div>
		        <hr>
		        <?= $home_content ?>
		    </div>
		</div>

        <?php require_once('footer.php') ?>
    </body>
</html>



