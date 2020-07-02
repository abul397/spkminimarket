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


<section class="content">
	<h3>Kriteria</h3>
	<?php if ($data['role'] == '1'): ?>
		<a href="tambah.php?jenis=kriteria" class="btn btn-sm btn-info float-right" style="margin-bottom: 15px">
			<i class="fa fa-plus-square"></i> Tambah
		</a>
	<?php endif; ?>
	<table class="table table-stripped" id="table_id">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Kriteria</th>
				<th>Aksi</th>
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
					<?php if ($data['role'] == '1'): ?>
						<form method="post" action="kriteria.php">
							<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
							<button type="submit" name="edit" class="btn btn-sm btn-warning"><i class="fa fa-pencil-square-o"></i>EDIT</button>
							<button type="submit" name="delete" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
						</form>
					<?php endif; ?>
				</td>
			</tr>


	<?php } ?>
		</tbody>
	</table>

	<br>
	<a href="tambah.php?jenis=kriteria" class="btn btn-sm btn-info float-right" style="margin-bottom: 15px">
		<i class="fa fa-plus-square"></i> Tambah
	</a>

</section>


<?php include('footer.php'); ?>
