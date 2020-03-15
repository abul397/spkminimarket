<?php
	include('config.php');
	include('fungsi.php');
	$kriteria = getKriteria();

	// mendapatkan data edit
	if(isset($_GET['jenis']) && isset($_GET['id'])) {
		$id 	= $_GET['id'];
		$jenis	= $_GET['jenis'];

		// hapus record
		$query 	= "SELECT nama FROM $jenis WHERE id=$id";
		$result	= mysqli_query($koneksi, $query);

		while ($row = mysqli_fetch_array($result)) {
			$nama = $row['nama'];
		}
	}

	if (isset($_POST['update'])) {
		$id 	= $_POST['id'];
		$jenis	= $_POST['jenis'];
		$nama 	= $_POST['nama'];
		$kriterias = $_POST['kriteria'];

		$query 	= "UPDATE $jenis SET nama='$nama' WHERE id=$id";
		$result	= mysqli_query($koneksi, $query);

		if ($jenis == 'alternatif') {
			$query  = "SELECT * FROM kriteria";
			$kr = mysqli_query($koneksi, $query);
			while ($row = mysqli_fetch_array($kr)) {
				$k[] = $row['id'];
			}
			
			//updae-------------------
			for ($i=0; $i < count($k); $i++) {
				$query 	= "UPDATE detail_alternatif SET nilai='$kriterias[$i]' WHERE id_alternatif=".$id." AND id_kriteria=".$k[$i];
				$tambah	= mysqli_query($koneksi, $query);
			}
		}

		if (!$result) {
			echo "Update gagal";
			exit();
		} else {
			header('Location: '.$jenis.'.php');
			exit();
		}
	}

	include('header.php');
?>

<section class="content">
	<h3>Edit <?php echo $jenis?></h3><br>

	<form class="col-md-6" method="post" action="edit.php">
		<div class="form-group">
			<label>Nama <?php echo $jenis ?></label>
			<input type="text" name="nama" class="form-control" value="<?php echo $nama?>">
			<input type="hidden" name="id" value="<?php echo $id?>">
			<input type="hidden" name="jenis" value="<?php echo $jenis?>">
		</div>

		<?php if ($jenis != 'kriteria'): ?>
			<?php foreach ($kriteria as $key): ?>
			<?php
				$query  = "SELECT * FROM detail_alternatif WHERE id_alternatif=".$id." AND id_kriteria=".$key['id'];
				$kr = mysqli_query($koneksi, $query);

				while ($row = mysqli_fetch_array($kr)) {
					$k = $row['nilai'];
				}
			?>
			<div class="form-group">
				<label><?= $key['nama'] ?></label>
				<input type="text" name="kriteria[]" value="<?= isset($k) ? $k : '' ?>" class="form-control">
			</div>
			<?php endforeach; ?>
		<?php endif; ?>

		<input class="btn btn-sm btn-success form-control" type="submit" name="update" value="UPDATE">
	</form>
</section>

<?php include('footer.php'); ?>
