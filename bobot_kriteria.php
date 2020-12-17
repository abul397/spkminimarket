<?php
	include('config.php');
	include('fungsi.php');

	include('header.php');
?>
<section class="content" id="perbandingan">
	<h3 class="ui header">Perbandingan Kriteria</h3><br>
	<?php showTabelPerbandinganBobotKriteria('kriteria','kriteria'); ?>
</section>

<?php if (!isset($_SESSION['login'])): ?>
	<script type="text/javascript">
		document.getElementById("perbandingan").style.display = 'none';
		document.getElementById("btnSubmit").click();
	</script>
<?php endif; ?>

<?php include('footer.php'); ?>
