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

	<!-- Modal tambah customer-->
	<!-- <?php
	include APPPATH . 'views/customer/_form_add_customer.php';
	?> -->

<div class="account-pages"></div>
<div class="clearfix"></div>
<div class="wrapper-page">
	<div class=" card-box">
		<div class="panel-heading">
			<h3 class="text-center"> Masuk Untuk Memesan<strong class="text-custom"><br/>Amanah Collection</strong> </h3>
		</div>

		<!--Koreksi email pass-->
		<?= $this->session->flashdata('msg') ?>

		<div class="login-box">
            	<div class="login-box-body">
				<form class="form-horizontal" action="<?php echo site_url('login/login'); ?>" method="post">

					<div class="form-group ">
						<div class="col-xs-12">
							<input class="form-control" type="text" name="username" required="" placeholder="Username">
							<small class="form-text text-danger"><?= form_error("username"); ?></small>
						</div>
					</div>

					<div class="form-group">
						<div class="col-xs-12">
							<input class="form-control" type="password" name="password" required="" placeholder="Password">
							<small class="form-text text-danger"><?= form_error("password"); ?></small>
						</div>
					</div>

					<div class="form-group text-center m-t-40">
						<div class="col-xs-12">
							<button class="btn btn-primary" type="submit" >Log In</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12 text-center">
			<p>Don't have an account? <a href="<?php echo site_url('register'); ?>" class="text-primary m-l-5"><b>Sign Up</b></a></p>
		</div>
	</div>
</div>
