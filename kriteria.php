<?php
	include('config.php');
	include('fungsi.php');

	// menjalankan perintah edit
	if(isset($_POST['edit'])) {
		$id = $_POST['id'];

		header('Location: edit.php?jenis=kriteria&id='.$id);
		exit();
	}

	// menjalankan perintah delete
	if(isset($_POST['delete'])) {
		$id = $_POST['id'];
		deleteKriteria($id);
	}

	// menjalankan perintah tambah
	if(isset($_POST['tambah'])) {
		$nama = $_POST['nama'];
		tambahData('kriteria',$nama);
	}

	include('header.php');
?>

<section>
	<h3>Kriteria</h3>
	<a href="tambah.php?jenis=kriteria" class="btn btn-sm btn-info float-right" style="margin-bottom: 15px">
		<i class="fa fa-plus-square"></i> Tambah
	</a>
	<table class="table table-stripped" id="table_id">
		<thead>
			<tr>
				<th>No</th>
				<th colspan="2">Nama Kriteria</th>
			</tr>
		</thead>
		<tbody>

		<?php
			// Menampilkan list kriteria
			$query = "SELECT id,nama FROM kriteria ORDER BY id";
			$result	= mysqli_query($koneksi, $query);

			$i = 0;
			while ($row = mysqli_fetch_array($result)) {
				$i++;
		?>
			<tr>
				<td><?php echo $i ?></td>
				<td><?php echo $row['nama'] ?></td>
				<td>
					<form method="post" action="kriteria.php">
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
