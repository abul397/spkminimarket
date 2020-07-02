<?php
	include('config.php');
	include('fungsi.php');

	include('header.php');
?>
<section class="content">
	<h3 class="ui header">Perbandingan Kriteria</h3><br>
	<?php showTabelPerbandinganBobotKriteria('kriteria','kriteria'); ?>
</section>

<?php include('footer.php'); ?>
