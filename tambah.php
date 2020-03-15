<?php
	include('config.php');
	include('fungsi.php');
	$kriteria = getKriteria();

	// mendapatkan data edit
	if(isset($_GET['jenis'])) {
		$jenis	= $_GET['jenis'];
	}

	if (isset($_POST['tambah'])) {
		$jenis	= $_POST['jenis'];
		$nama 	= $_POST['nama'];

		if ($jenis == 'kriteria') {
			tambahDataKriteria($jenis,$nama);
		}else {
			tambahDataAlternatif($nama, $_POST['kriteria']);
		}

		header('Location: '.$jenis.'.php');
	}

	include('header.php');
?>

<section class="content">
	<h3>Tambah <?php echo $jenis?></h3><br>

	<form class="col-md-6" method="post" action="tambah.php">
		<div class="form-group">
			<label>Nama <?php echo $jenis ?></label>
			<input type="text" name="nama" class="form-control">
			<input type="hidden" name="jenis" value="<?php echo $jenis?>">
		</div>

		<?php if ($jenis != 'kriteria'): ?>
			<?php foreach ($kriteria as $key): ?>
			<div class="form-group">
				<label><?= $key['nama'] ?></label>
				<input type="text" name="kriteria[]" value="" class="form-control">
			</div>
			<?php endforeach; ?>
		<?php endif; ?>
		<input class="btn btn-sm btn-success form-control" type="submit" name="tambah" value="SIMPAN">
	</form>
</section>

<?php include('footer.php'); ?>
