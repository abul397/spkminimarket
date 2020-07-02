<?php
ob_start();
require_once('config/+koneksi.php');
require_once('models/database.php');

$connection = new Database($host, $user, $pass, $database); 

@session_start();

if( ! isset($_SESSION['username'])){ 
  header("location: login.php"); 
}

?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Xiaomi Center Padang</title>
    <link href="bs/css/view.css" rel="stylesheet">
    <link href="bs/css/up.css" rel="stylesheet">
    <link href="bs/dataTables/datatables.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="bs/font-awesome/css/font-awesome.css">
  </head>

  <body>
<style type="text/css">
 .navbar-inverse{
    background-color: #eac103;
  }
</style>


    <div id="wrapper">

      
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
       
        <div class="navbar-header">
          <a class="navbar-brand">Selamat Datang Admin ! </a>
        </div>

        
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li><a href="?page=dashboard"><i class="fa fa-dashboard" ></i> Dashboard</a></li>
           
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i ></i> Barang <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="?page=barang">Daftar Barang</a></li>
              </ul>
            </li>

            <li class="dropdown">              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i ></i> Pembeli <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="?page=pembeli">Daftar Pembeli</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i ></i> Transaksi <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="?page=transaksi">Data Transaksi</a></li>
              </ul>
            </li>
          </ul>
          
          <ul class="nav navbar-nav navbar-right navbar-user">
            
            <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Admin <b class="caret"></b></a>
              <ul class="dropdown-menu">
                
                <li><a href="logout.php"><i class="fa fa-power-off"></i> Log Out</a></li>
              </ul>
            </li>
          </ul>
          
        </div>
      </nav>


      <div id="page-wrapper">

       <?php
       if(@$_GET['page'] == 'dashboard' || @$_GET['page'] == '' ) {
        include "views/dashboard.php"; 
       } else if(@$_GET['page'] == 'barang'){
        include "views/barang.php";
        } else if(@$_GET['page'] == 'pembeli'){
        include "views/pembeli.php";
       } else if(@$_GET['page'] == 'transaksi'){
        include "views/transaksi.php";
       }
       else if(@$_GET['page'] == 'detailtransaksi'){
        include "views/detailtransaksi.php";
       }else if(@$_GET['page'] == 'tambahtransaksi'){
        include "views/tambahtransaksi.php";
       }
       
       ?>

      </div>
    </div>

    <script src="bs/js/jquery-1.10.2.js"></script>
    <script src="bs/js/view.js"></script>
    <script src="bs/dataTables/datatables.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
          $('#datatables').DataTable();
      });
    </script>

  </body>
  
</html>

