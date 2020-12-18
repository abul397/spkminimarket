<?php
	include('header.php');

?>

<section class="container" style="margin-bottom: 20px">

	<?php if ($consRatio > 0.1){ ?>
	<div class="alert alert-danger" role="alert">
		<small>Nilai Consistency Ratio melebihi 10%. Mohon inputkan kembali <a href="bobot_kriteria.php">Perbandingan Kriteria</a></small>
	</div>
	<div class="alert alert-danger" role="alert">
		<small>Mohon input kembali tabel perbandingan...</small>
	</div><br>
	<?php } ?>

	<!-- <h4>Matriks Perbandingan Berpasangan</h4><br> -->
	<!-- <table class="table table-stripped">
		<thead>
			<tr>
				<th>Kriteria</th>
				<?php
					// for ($i=0; $i <= ($n-1); $i++) {
					// 	echo "<th>".getAlternatifNama($i)."</th>";
					// }
				?>
			</tr>
		</thead>
		<tbody>
			<?php
				// for ($x=0; $x <= ($n-1); $x++) {
				// 	echo "<tr>";
				// 	echo "<td>".getAlternatifNama($x)."</td>";
				// 		for ($y=0; $y <= ($n-1); $y++) {
				// 			echo "<td>".round($matrik[$x][$y],5)."</td>";
				// 		}
				//
				// 	echo "</tr>";
				// }
			?>
		</tbody>
		<tfoot>
			<tr>
				<th>Jumlah</th>
					<?php
							// for ($i=0; $i <= ($n-1); $i++) {
							// 	echo "<th>".round($jmlmpb[$i],5)."</th>";
							// }
					?>
			</tr>
		</tfoot>
	</table> -->


	<br>

	<h4>Rekomendasi Minimarket Berdasarkan <?= $_GET['name'] ?></h4><br>
	<table class="table table-stripped" id="table_id">
		<thead>
			<tr>
				<th>Rangking Alternatif</th>
					<?php
						// for ($i=0; $i <= ($n-1); $i++) {
						// 	echo "<th>".getAlternatifNama($i)."</th>";
						// }
					?>
				<!-- <th>Jumlah</th> -->
				<!-- <th>Priority Vector</th> -->
				<th>Prioritas</th>
			</tr>
		</thead>
		<tbody>
			<?php
				// return $pv;
				//

				// var_dump($pv);
				// die();
				$res = [];
				for ($x=0; $x <= ($n-1); $x++){
					$res[$x] = round($pv[$x],5);
				}

				arsort($res);
				// echo '<pre>';
				// var_dump($res);
				// echo '</pre>';
				// die();

				$prio = 1;
				foreach ($res as $key => $value) {
				if ($prio == 1) {

						$rank1 = getAlternatifNama($key);
					}
					echo "<td>".getAlternatifNama($key)."</td>";
					echo "<td>".$prio."</td>";
					echo "</tr>";
					$prio++;
				}

				// for ($x=0; $x <= ($n-1); $x++) {
				// 	// echo "<tr>";
				// 	echo "<td>".getAlternatifNama($x)."</td>";
				// 	// 	for ($y=0; $y <= ($n-1); $y++) {
				// 	// 		echo "<td>".round($matrikb[$x][$y],5)."</td>";
				// 	// 	}
				// 	//
				// 	// echo "<td>".round($jmlmnk[$x],5)."</td>";
				// 	echo "<td>".round($res[$x],5)."</td>";
				//
				// 	echo "</tr>";
				// }
			?>
		</tbody>
		<!-- <tfoot>
			<tr>
				<th colspan="<?php echo ($n+2)?>">Principe Eigen Vector (λ maks)</th>
				<th><?php echo (round($eigenvektor,5))?></th>
			</tr>
			<tr>
				<th colspan="<?php echo ($n+2)?>">Consistency Index</th>
				<th><?php echo (round($consIndex,5))?></th>
			</tr>
			<tr>
				<th colspan="<?php echo ($n+2)?>">Consistency Ratio</th>
				<th><?php echo (round(($consRatio * 100),2))?> %</th>
			</tr>
		</tfoot> -->
	</table>	
	<br>

	<div>
		<h5>Berdasarkan tabel diatas, sistem merekomendasikan <?= $rank1 ?> sebagai minimarket yang paling cocok untuk anda.</h5>
		</div>


<?php

	if ($consRatio > 0.1) {
?>

<a href='javascript:history.back()'>
	<button class="btn btn-danger">
		 <i class="fa fa-angle-left"></i> Kembali
	</button>
</a> 

<?php

	} else {
		if ($jenis == getJumlahKriteria()) {
?>

<br>

<a class="btn btn-success" style="float: right; margin-bottom: 5%" href="hasil.php">
	Lanjut  <i class="fa fa-angle-right"></i>
</a>


<?php

		} else {

?>

	<a class="btn btn-success" style="float: right; margin-bottom: 5%" href="<?php echo "bobot.php?c=".($jenis + 1)?>">
		Lanjut  <i class="fa fa-angle-right"></i>
	</a>

<?php

		}
	}

	echo "</section>";
	include('footer.php');

?>