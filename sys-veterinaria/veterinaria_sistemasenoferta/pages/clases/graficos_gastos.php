


<?php 

//$branch_id = $_GET['id'];
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>





<?php
	$cantidad_enero=0;
		$cantidad_febrero=0;
			$cantidad_marzo=0;
				$cantidad_abril=0;
					$cantidad_mayo=0;
						$cantidad_junio=0;
							$cantidad_agosto=0;
								$cantidad_setiembre=0;
									$cantidad_octubre=0;
										$cantidad_noviembre=0;
											$cantidad_diciembre=0;
	$year = $_POST['year'];
	$enero_inicio=$year."-01-01";
		$enero_fin=$year."-01-31";
	$febrero_inicio=$year."-02-01";
		$febrero_fin=$year."-02-28";
	$marzo_inicio=$year."-03-01";
		$marzo_fin=$year."-03-31";
			$abril_inicio=$year."-04-01";
		$abril_fin=$year."-04-30";
					$mayo_inicio=$year."-05-01";
		$mayo_fin=$year."-05-31";
					$junio_inicio=$year."-06-01";
		$junio_fin=$year."-06-30";
							$julio_inicio=$year."-07-01";
		$juio_fin=$year."-07-31";
						$agosto_inicio=$year."-08-01";
		$agosto_fin=$year."-08-31";
								$setiembre_inicio=$year."-09-01";
		$setiembre_fin=$year."-09-30";
										$octubre_inicio=$year."-10-01";
		$octubre_fin=$year."-10-31";
			$noviembre_inicio=$year."-11-01";
		$noviembre_fin=$year."-11-30";
			$diciembre_inicio=$year."-12-01";
		$diciembre_fin=$year."-12-31";
?>
  <?php

      $query=mysqli_query($con,"select * from gastos  where fecha >='$enero_inicio' and fecha <='$enero_fin' ")or die(mysqli_error());
      while($row=mysqli_fetch_array($query)){
      $cantidad_enero=$row['cantidad']+$cantidad_enero;
      }

$query=mysqli_query($con,"select * from gastos  where fecha >='$febrero_inicio' and fecha <='$febrero_fin' ")or die(mysqli_error());
      while($row=mysqli_fetch_array($query)){
      $cantidad_febrero=$row['cantidad']+$cantidad_febrero;
      }
  ?>






	<?php 




$anchura1=100;
$anchura2=40;
$anchura3=80;
?>
 
<style>
	.horizontal .redBar, .horizontal .greenBar, .horizontal .blueBar, .horizontal .otros {
		height:20px;
	}
	.horizontal.right td {
		float:right;
	}
 
	.vertical .redBar, .vertical .greenBar, .vertical .blueBar, .vertical .otros {
		width:80px;
	}
	.vertical.top td {
		vertical-align:top;
	}
	.vertical.bottom td {
		vertical-align:bottom;
	}
 
	.redBar, .greenBar, .blueBar {
		box-shadow: 2px 2px 5px #999;
		border-radius: 3px;
	}
	.redBar {
		background-color:red;
	}
	.greenBar {
		background-color:green;
	}
	.blueBar {
		background-color:blue;
	}
</style>
 


<table border=0 cellspacing=5 cellpadding=0 class="vertical bottom">
	<tr>
		<td>
			<div class="redBar" style="height:<?php echo $anchura1?>px"> </div>
			Enero<br>
			<?php echo $cantidad_enero?>
			
		</td>
		<td>
			<div class="greenBar" style="height:<?php echo $anchura2?>px"></div>
			Febrero<br>
			<?php echo $cantidad_febrero?>
		</td>
		<td>
			<div class="blueBar" style="height:<?php echo $anchura3?>px"></div>
			Marzo

		</td>
			<td>
			<div class="otros" style="background-color: yellow; height:<?php echo $anchura3?>px"></div>
			Abril
			
		</td>
			<td>
			<div class="otros" style="background-color: orange; height:<?php echo $anchura3?>px"></div>
			Mayo
			
		</td>
			<td>
			<div class="otros"  style="background-color: #00FFFF; height:<?php echo $anchura3?>px"></div>
			Junio
			
		</td>
			<td>
			<div class="otros"  style="background-color: #800000; height:<?php echo $anchura3?>px"></div>
			Julio
			
		</td>
			<td>
			<div class="otros"  style="background-color: #000080; height:<?php echo $anchura3?>px"></div>
			Agosto
			
		</td>
			<td>
			<div class="otros"  style="background-color: #800080; height:<?php echo $anchura3?>px"></div>
			Setiembre
			
		</td>
			<td>
			<div class="otros"  style="background-color: #C0C0C0; height:<?php echo $anchura3?>px"></div>
			Agosto
			
		</td>
			<td>
			<div class="otros"  style="background-color: #00FF00; height:<?php echo $anchura3?>px"></div>
			Setiembre
			
		</td>
			<td>
			<div class="otros"  style="background-color: #FF00FF; height:<?php echo $anchura3?>px"></div>
			Octubre
			
		</td>
			<td>
			<div class="otros"  style="background-color: #00FFFF; height:<?php echo $anchura3?>px"></div>
			Noviembre
			
		</td>
				<td>
			<div class="otros"  style="background-color: #00FFFF; height:<?php echo $anchura3?>px"></div>
			Diciembre
			
		</td>
	</tr>
</table>

    <!-- /gauge.js -->
</body>
</html>
