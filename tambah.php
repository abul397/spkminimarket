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

	<form class="col-md-12" method="post" action="tambah.php">
		<div class="form-group">
			<label>Nama <?php echo $jenis ?></label>
			<input type="text" name="nama" class="form-control">
			<input type="hidden" name="jenis" value="<?php echo $jenis?>">
		</div>

		<?php if ($jenis != 'kriteria'): ?>
			<?php foreach ($kriteria as $key): ?>
			<div class="form-group">
				<label><?= ($key['nama'] == 'Jarak') ? 'Koordinat Lokasi' : $key['nama'] ?><?= ($key['nama'] == 'Jarak') ? ' (lat,lang)' : '' ?></label>
				<textarea type="text" name="kriteria[]" class="form-control
				<?= ($key['nama'] == 'Fasilitas' || $key['nama'] == 'Kelengkapan Barang') ? 'summernote' : '' ?>"></textarea>
			</div>
			<?php endforeach; ?>
		<?php endif; ?>
		<input class="btn btn-sm btn-success form-control" type="submit" name="tambah" value="SIMPAN">
	</form>
</section>

<?php include('footer.php'); ?>

<!-- Summernote -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
	$('.summernote').summernote({
		dialogsInBody: true,
		height: 200,
		toolbar: [
			['style', ['style']],
			['font', ['bold', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']],
			['fontname', ['fontname']],
			['color', ['color']],
			['fontsize', ['fontsize']],
			['para', ['ul', 'ol', 'paragraph']],
			['height', ['height']],
			['table', ['table']],
			['insert', ['link', 'picture', 'video']],
			['view', ['codeview', 'help']],
		]
	});
});
</script>
