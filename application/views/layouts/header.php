<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Amanah Collection</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="<?= base_url('assets/') ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?= base_url('assets/') ?>bower_components/font-awesome/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="<?= base_url('assets/') ?>bower_components/Ionicons/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?= base_url('assets/') ?>dist/css/AdminLTE.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/') ?>dist/css/skins/_all-skins.min.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="<?= base_url('assets/') ?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
	<!-- daterange picker -->
	<link rel="stylesheet" href="<?= base_url('assets/') ?>bower_components/bootstrap-daterangepicker/daterangepicker.css">
	<!-- bootstrap datepicker -->
	<link rel="stylesheet" href="<?= base_url('assets/') ?>bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">

	<!-- Bootstrap Color Picker -->
	<link rel="stylesheet" href="<?= base_url('assets/') ?>bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
	<!-- Bootstrap time Picker -->
	<link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/timepicker/bootstrap-timepicker.min.css">
	<!-- Select2 -->
	<link rel="stylesheet" href="<?= base_url('assets/') ?>bower_components/select2/dist/css/select2.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/') ?>dist/css/skins/_all-skins.min.css">

	<!-- jQuery 3 -->
	<script src="<?= base_url('assets/') ?>bower_components/jquery/dist/jquery.min.js"></script>

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
</head>

<body class="hold-transition skin-blue layout-top-nav">

	<header class="main-header">
		<nav class="navbar navbar-static-top">
			<div class="container">
				<div class="navbar-header">
					<div class="navbar-brand"><b>AMANAH</b> Collection</a>
					<!-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
						<i class="fa fa-bars"></i>
					</button> -->
				</div>


				<div class="collapse navbar-collapse pull-left" id="navbar-collapse">
					<ul class="nav navbar-nav">
						<li class=""><a href="<?= base_url('home') ?>">Home</a></li>
						<li class=""><a href="<?= base_url('pesanan/tambah_pesanan') ?>">Pesan Baru</a></li>
						<li class=""><a href="<?= base_url('pesanan') ?>">Data Pesan <span class="sr-only">(current)</span></a></li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown">Customer <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a class="dropdown-item" data-toggle="modal" data-target="#modalcustomer">Tambah Customer</a></li>
								<li><a href="<?= base_url('customer') ?>">Data customer</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown">Master <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="<?= base_url('produk') ?>">Produk</a></li>
								<li><a href="<?= base_url('kain') ?>">Kain</a></li>
								<li><a href="<?= base_url('sablon') ?>">Sablon</a></li>
							</ul>
						</li>
						<li class=""><a href="<?= base_url('riwayat') ?>">Riwayat</a></li>
					</ul>
				</div>
				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">

						<li class="dropdown user user-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-fw fa-sign-out"></i> 
								<!-- <img src="<?= base_url('assets/') ?>dist/img/logout.PNG"> -->
								<span class="hidden-xs">LOGOUT</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- Modal tambah customer-->
	<?php
	include APPPATH . 'views/customer/_form_add_customer.php';
	?>
