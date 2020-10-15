<?php
	session_start();
	// if (!$_SESSION['login']) {
	// 	header('Location: login.php');
	// }
	//
	// $data = $_SESSION['data'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>SPK Minimarket</title>

	<!-- Custom fonts for this template-->
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="css/sb-admin-2.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

		<!-- Sidebar -->
		<ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

		  <!-- Sidebar - Brand -->
		  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
		    <img class="img-profile rounded-circle" src="">
		    <div class="sidebar-brand-text mx-1">SPK Minimarket</div>
		  </a>

		  <!-- Divider -->
		  <hr>

		  <!-- Nav Item - Dashboard -->
		  <li class="nav-item active">
		    <a class="nav-link" href="index.php">
		      <i class="fas fa-fw fa-tachometer-alt"></i>
		      <span>ANALYTICAL HIERARCHY PROCESS</span></a>
		  </li>

		  <hr class="sidebar-divider my-1">


		  <li class="nav-item active">
		    <a class="nav-link" href="kriteria.php">

		      <span>Kriteria </span></a>
		  </li>

		  <li class="nav-item active">
		    <a class="nav-link" href="alternatif.php">

		      <span>Alternatif </span></a>
		  </li>

		  <li class="nav-item active">
					<a class="nav-link" href="bobot_kriteria.php">
			      <span>Perbandingan Kriteria</span></a>
		  </li>

		  <li class="nav-item active">
		    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">

		      <span>Perandingan Alternatif</span>
		    </a>

		    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
		      <div class="bg-white py-2 collapse-inner rounded">
		        <h6 class="collapse-header">Kriteria:</h6>

						<?php

							if (getJumlahKriteria() > 0) {
								for ($i=0; $i <= (getJumlahKriteria()-1); $i++) {
									echo "<a class='collapse-item' href='bobot.php?c=".($i+1)."'>".getKriteriaNama($i)."</a>";
								}
							}

						?>
		      </div>
		    </div>
		  </li>

		   <li class="nav-item active">
		    <a class="nav-link" href="hasil.php">

		      <span>Hasil</span></a>
		  </li>




		  <!-- Nav Item - Charts -->

		  <!-- Divider -->
		  <hr class="sidebar-divider d-none d-md-block">

		  <!-- Sidebar Toggler (Sidebar) -->
		  <div class="text-center d-none d-md-inline">
		    <button class="rounded-circle border-0" id="sidebarToggle"></button>
		  </div>

		</ul>
		<!-- End of Sidebar -->


    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      <!-- Main Content -->
      <div id="content">
				<!-- Topbar -->
				<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

				  <!-- Sidebar Toggle (Topbar) -->
				  <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
				    <i class="fa fa-bars"></i>
				  </button>

				  <!-- Topbar Search -->

					<?php if (isset($_SESSION['login'])): ?>
						<!-- Topbar Navbar -->
					  <ul class="navbar-nav ml-auto">
					    <div class="topbar-divider d-none d-sm-block"></div>
					    <!-- Nav Item - User Information -->
					    <li class="nav-item dropdown no-arrow">
					      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					        <span class="mr-2 d-none d-lg-inline text-gray-600 "><?= $_SESSION['data']['username'] ?> </span>
					      </a>
					      <!-- Dropdown - User Information -->
					      <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
					        <a class="dropdown-item" href="logout.php"  >
					          <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
					          Logout
					        </a>
					      </div>
					    </li>
					  </ul>
					<?php endif; ?>
				</nav>

        <div class="container">
