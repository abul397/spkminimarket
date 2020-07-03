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
	<?php if ($data['role'] == '1'): ?>
	<a href="tambah.php?jenis=alternatif" class="btn btn-sm btn-info float-right" style="margin-bottom: 15px">
		<i class="fa fa-plus-square"></i> Tambah
	</a>
	<?php endif; ?>

	<table class="ui celled table">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Alternatif</th>
				<th>Fasilitas</th>
				<th>Jarak</th>
				<th>Rentang Waktu Buka</th>
				<th>Kelengkapan Barang</th>
				<?php if ($data['role'] == '1'): ?>
				<th>Aksi</th>
				<?php endif; ?>
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
			<?php
				$query = "SELECT detail_alternatif.*, kriteria.nama FROM detail_alternatif INNER JOIN kriteria
									ON kriteria.id=detail_alternatif.id_kriteria
									WHERE id_alternatif=".$row['id']." AND kriteria.nama='Jarak'";
				$results	= mysqli_query($koneksi, $query);

				while ($r = mysqli_fetch_array($results)){ ?>
					<?php
						$myArray[] = $r;
					?>
				<?php }

				$json = json_encode($myArray);

				$query = "SELECT detail_alternatif.*, kriteria.nama FROM detail_alternatif INNER JOIN kriteria
									ON kriteria.id=detail_alternatif.id_kriteria
									WHERE id_alternatif=".$row['id'];
				$results	= mysqli_query($koneksi, $query);

				while ($r = mysqli_fetch_array($results)){ ?>
					<td><?php
						if ($r['nama'] == 'Jarak') {
							echo '<div id="jarak'.$r['id'].'"></div>';
						}else {
							echo $r['nilai'];
						}
					?></td>
				<?php }
			?>
			<?php if ($data['role'] == '1'): ?>
			<td>
				<form method="post" action="alternatif.php">
					<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
					<button type="submit" name="edit" class="btn btn-sm btn-warning"><i class="fa fa-pencil-square-o"></i>EDIT</button>
					<button type="submit" name="delete" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
				</form>
			</td>
			<?php endif; ?>
		</tr>

<?php } ?>

		</tbody>
	</table>
	<br>

	<form action="bobot_kriteria.php">
		<button class="btn btn-sm btn-success" style="float: right;">
			Lanjut <i class="fa fa-angle-right"></i>
		</button>
	</form>
</section>

<?php include('footer.php'); ?>

<script type="text/javascript">
	var lat;
	var lang;

	function getLocation() {
		if (navigator.geolocation) {
			navigator.geolocation.getCurrentPosition(showPosition);
		} else {
			alert("Geolocation is not supported by this browser.");
		}
	}

	function showPosition(position) {
		lat = position.coords.latitude;
		lang = position.coords.longitude;

		var data = JSON.stringify('<?= $json ?>');
		var data = JSON.parse('<?= $json ?>');

		for (var i = 0; i < data.length; i++) {
			if (data[i].nama == 'Jarak') {
				var array = data[i].nilai.split(',');
				var distance = calcCrow(lat, lang, array[0], array[1]);
				document.getElementById("jarak"+data[i].id).innerHTML = distance + ' meter';
			}
		}
	}

	function calcCrow(lat1, lon1, lat2, lon2){
    var R = 6371; // km
    var dLat = toRad(lat2-lat1);
    var dLon = toRad(lon2-lon1);
    var lat1 = toRad(lat1);
    var lat2 = toRad(lat2);

    var a = Math.sin(dLat/2) * Math.sin(dLat/2) +
      Math.sin(dLon/2) * Math.sin(dLon/2) * Math.cos(lat1) * Math.cos(lat2);
    var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a));
    var d = R * c;
    return (d * 1000).toFixed(1); // Convert to meter
  }

  // Converts numeric degrees to radians
  function toRad(Value){
      return Value * Math.PI / 180;
  }

	getLocation();
</script>
