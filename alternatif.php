<?php
	include('config.php');
	include('fungsi.php');

	// menjalankan perintah edit
	if(isset($_POST['edit'])) {
		$id = $_POST['id'];

		header('Location: edit.php?jenis=alternatif&id='.$id);
		exit();
	}

	// menjalankan perintah delete
	if(isset($_POST['delete'])) {
		$id = $_POST['id'];
		deleteAlternatif($id);
	}

	// menjalankan perintah tambah
	if(isset($_POST['tambah'])) {
		$nama = $_POST['nama'];
		tambahData('alternatif',$nama);
	}

	include('header.php');

?>


<section class="content">

	<h3>Alternatif</h3>
	<a href="tambah.php?jenis=alternatif" class="btn btn-sm btn-info float-right" style="margin-bottom: 15px">
		<i class="fa fa-plus-square"></i> Tambah
	</a>

	<table class="ui celled table">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Alternatif</th>
				<th>Keterangan</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>

		<?php
			// Menampilkan list alternatif
			$query = "SELECT id,nama FROM alternatif ORDER BY id";
			$result	= mysqli_query($koneksi, $query);

			$i = 0;
			while ($row = mysqli_fetch_array($result)) {
				$i++;
		?>
		<tr>
			<td><?php echo $i ?></td>
			<td><?php echo $row['nama'] ?></td>
			<td>
				<?php
					$query = "SELECT * FROM detail_alternatif WHERE id_alternatif=".$row['id'];
					$results	= mysqli_query($koneksi, $query);
					while ($r = mysqli_fetch_array($results)){ ?>
						<li><?= $r['nilai'] ?></li>
					<?php }
				?>
			</td>
			<td>
				<form method="post" action="alternatif.php">
					<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
					<button type="submit" name="edit" class="btn btn-sm btn-warning"><i class="fa fa-pencil-square-o"></i>EDIT</button>
					<button type="submit" name="delete" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
				</form>
			</td>
		</tr>

<?php } ?>

		</tbody>
	</table>

	<br>


	<form action="alternatif.php">
		<button class="btn btn-sm btn-success" style="float: right;">
			Lanjut <i class="fa fa-angle-right"></i>
		</button>
	</form>
</section>

<?php include('footer.php'); ?>
