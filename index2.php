<?php
mysqli_report (MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
	error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
	session_start();
	
	include "function.php";
	
  $koneksi = new mysqli("localhost","root","","db_perpustakaan");
  
  if(empty($_SESSION['petugas'])){
    
    header("location:login.php");
  }


	?>	



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistem Informasi Perpustakaan Universitas Nasional Pasim</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  
  <link rel="stylesheet" type="text/css" href="dataTables/DataTables-1.10.20/css/dataTables.bootstrap.min.css"/>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>S</b>IP</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">PERPUSTAKAAN</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->

          <!-- Notifications: style can be found in dropdown.less -->
          
          <!-- Tasks: style can be found in dropdown.less -->
        
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          
                <li><a onclick="return confirm('Apakah anda yakin akan logout?')" class="btn btn-danger" class="logout" href="logout.php">Logout</a></li>
            </a>
          </li>
        
        </ul>
      </div>
	  
    </nav>
  </header>
  
  
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
           <div class="user-panel">
       

	<?php
	if ($_SESSION['petugas']) {
	   $user = $_SESSION['petugas'];
	}
	$sql =$koneksi->query("select * from tb_pengguna where id='$user'");
	$data = $sql->fetch_assoc();
	?>
   
    <div class="pull-left image">
          <img src="img/<?php echo $data['foto']?>" class="img-circle" width="48" height="48" alt="User" />
		
        </div>
        <div class="pull-left info">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $data['nama'];?></div>
					<br>
                    <div class="email">Anda adalah <?php echo $data['level'];?></div>
		
		  
        </div>
      </div>
     
         <!-- sidebar menu: : style can be found in sidebar.less -->
  <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menu Utama</li>
        <li class="active treeview menu-open">
		
		<li>
		
          <a href="?page=home">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class=""></i>
            </span>
          </a>
   
        </li>
		
       
     
       
        <ul class="sidebar-menu" >
        <li class="header">Pilih Menu</li>
		
			
		 <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Data Master</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="?page=buku"><i class="fa fa-circle-o"></i> Data Buku</a></li>
            <li><a href="?page=anggota"><i class="fa fa-circle-o"></i> Data Anggota</a></li>
			<li><a href="?page=lokasibuku"><i class="fa fa-circle-o"></i> Lokasi Buku</a></li>
				<li><a href="?page=denda"><i class="fa fa-circle-o"></i> Update Denda</a></li>
          </ul>
        </li>
		
	
		
		 <li class="treeview">
          <a href="">
            <i class="fa fa-table"></i> <span>Data Transaksi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="?page=transaksi"><i class="fa fa-circle-o"></i> Transaksi Pinjam</a></li>
            <li><a href="?page=transaksi_kembali"><i class="fa fa-circle-o"></i> Transaksi Kembali</a></li>
			<li><a href="?page=transaksi_hilang"><i class="fa fa-circle-o"></i> Buku Hilang</a></li>
			<li><a href="?page=transaksi_gantirugi"><i class="fa fa-circle-o"></i> Ganti Rugi Buku</a></li>
          </ul>
        </li>
		
	

		

		


      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   
    <!-- Main content -->
    <section class="content">
      
	<?php
			   $page = $_GET['page'];
			   $aksi = $_GET['aksi'];
			   
			   
	
			     
			   if ($page == "denda") {

				   if ($aksi == "") {
					   include "page/denda/denda.php";
				   }
				    if ($aksi == "ubah"){
					   include "page/denda/ubah.php";
					} 
			   }
			   
			   if ($page == "lokasibuku") {

				   if ($aksi == "") {
					   include "page/lokasibuku/rak.php";
				   }
				   elseif ($aksi == "tambahrak") {
					include "page/lokasibuku/tambahrak.php";
				   }
				    if ($aksi == "ubah") {
					   include "page/buku/ubah.php";
				   }
					if ($aksi == "hapus") {
					   include "page/buku/hapus.php";
				   }
				   
			   }
			   
			   
			   
				if ($page == "buku") {

				   if ($aksi == "") {
					   include "page/buku/buku.php";
				   }
				   elseif ($aksi == "tambah") {
					   include "page/buku/tambah.php";
				   }
				    if ($aksi == "ubah") {
					   include "page/buku/ubah.php";
				   }
					if ($aksi == "hapus") {
					   include "page/buku/hapus.php";
				   }
				   
				   
				}
				if ($page == "anggota") {
				   if ($aksi == "") {
					   include "page/anggota/anggota.php";
				   }
				    if ($aksi == "tambahanggota") {
					   include "page/anggota/tambahanggota.php";
				   }
				    if ($aksi == "ubahanggota") {
					   include "page/anggota/ubahanggota.php";
				   }
				   
				    if ($aksi == "hapusanggota") {
					   include "page/anggota/hapusanggota.php";
				   }
				}
				
			     
				   if ($page == "transaksi") {
				   if ($aksi == "") {
					   include "page/transaksi/transaksi.php";
				   }
				    if ($aksi == "tambahtransaksi") {
					   include "page/transaksi/tambahtransaksi.php";
				   }
				    if ($aksi == "kembali") {
					   include "page/transaksi/kembali.php";
				   }
				   
				    if ($aksi == "perpanjang") {
					   include "page/transaksi/perpanjang.php";
				   }
				   
				   
				    if ($aksi == "hilang") {
					   include "page/transaksi/kembalibukuhilang.php";
				   }
			   }
			   
			   
			   
			   
			     if ($page == "transaksi_kembali") {
				   if ($aksi == "") {
					   include "page/transaksi/kembalibuku.php";
				   }
				 }
				 
				 
			     if ($page == "transaksi_hilang") {
				   if ($aksi == "") {
					   include "page/transaksi/bukuhilang.php";
					 
				   }
				   
				   if ($aksi == "gantirugi") {
					   include "page/transaksi/gantirugi.php";
				   }
			   }
			   
			     if ($page == "transaksi_gantirugi") {
				   if ($aksi == "") {
					   include "page/transaksi/gantirugibuku.php";
					 
				   }
				 }
			   
			      

			   

			   
			   
			   if ($page == "") {
				   include "home2.php";
			   }
			   if ($page == "home2") {
				   include "home2.php";
			   }
			   ?>
    
	
    </section>
    <!-- /.content -->
  </div>
  
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1
    </div>
    <strong>Copyright &copy; 2023 <a>Universitas Nasional Pasim</a>.</strong> All rights
    reserved. | Create by <a href='https://m.facebook.com/people/Faisal-Salawasna/100088567747228/' title='Muhamad Faisal' target='_blank'>Muhamad Faisal</a>
    
  </footer>

  <!-- Control Sidebar -->
 
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>


<!-- page script -->

<script type="text/javascript" src="dataTables/jQuery-3.3.1/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="dataTables/DataTables-1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="dataTables/DataTables-1.10.20/js/dataTables.bootstrap.min.js"></script>

  <!--script for this page-->
  <script type="text/javascript">
 
$(function () {
    $('#datatables').DataTable({
    
		 
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : false,
      'info'        : true,
      'autoWidth'   : true
		
		    })
			
	 $('#anggota').DataTable({
    
		 
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : false,
      'info'        : true,
      'autoWidth'   : false
		
		    })
			

			
	$('#transaksi').DataTable({
    
		 
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : false,
      'info'        : true,
      'autoWidth'   : false
		
		    })
    } );
  </script>
  


</body>
</html>


