<?php
	include('config.php');
	include('fungsi.php');

	$jenis = $_GET['c'];

	include('header.php');
?>
<div class="container">
	<section class="content row">
		<h3>Perbandingan Alternatif &rarr; <?php echo getKriteriaNama($jenis-1) ?></h3><br>
		<?php showTabelPerbandingan($jenis,'alternatif', ); ?>
	</section>
</div>

<?php include('footer.php'); ?>
