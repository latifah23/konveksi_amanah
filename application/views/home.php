<div class="content-wrapper">
	<div class="container">
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<h1>
					Dashboard
					<small>Control panel</small>
				</h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
					<li class="active">Dashboard</li>
				</ol>
			</section>

			<!-- Main content -->
			<section class="content" layout="center`">
				<!-- Small boxes (Stat box) -->
				<div class="row">
					<div class="col-lg-4 col-xs-6">
						<!-- small box -->
						<div class="small-box bg-aqua">
							<div class="inner">
								<h3><?=$total_proses?></h3>

								<p><b>Proses</b></p>
							</div>
							<div class="icon">
								<i class="ion ion-stats-bars"></i>
							</div>
							<a href="pesanan/index" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
						</div>
					</div>
					<!-- ./col -->
					<div class="col-lg-4 col-xs-6">
						<!-- small box -->
						<div class="small-box bg-green">
							<div class="inner">
								<h3><?=$total_selesai?></h3>

								<p><b>Selesai</b></p>
							</div>
							<div class="icon">
								<i class="ion ion-stats-bars"></i>
							</div>
							<a href="riwayat/index" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- ./col -->
					<div class="col-lg-3 col-xs-6">
						<!-- small box -->
						<div class="small-box bg-yellow">
							<div class="inner">
							<h3><?=$total_tshirt?></h3>

								<p><b>T-shirt</b></p>
							</div>
							<div class="icon">
								<i class="ion ion-pie-graph"></i>
							</div>
						</div>
					</div>
					<!-- ./col -->
					<div class="col-lg-3 col-xs-6">
						<!-- small box -->
						<div class="small-box bg-red">
							<div class="inner">
							<h3><?=$total_celana?></h3>

								<p><b>Celana Training</b></p>
							</div>
							<div class="icon">
								<i class="ion ion-pie-graph"></i>
							</div>
						</div>
					</div>
					<!-- ./col -->

					<div class="col-lg-3 col-xs-6">
						<!-- small box -->
						<div class="small-box bg-purple">
							<div class="inner">
							<h3><?=$total_jaket?></h3>

								<p><b>Jaket</b></p>
							</div>
							<div class="icon">
								<i class="ion ion-pie-graph"></i>
							</div>
						</div>
					</div>

					<!-- ./col -->

					<div class="col-lg-3 col-xs-6">
						<!-- small box -->
						<div class="small-box bg-orange">
							<div class="inner">
							<h3><?=$total_polo?></h3>

								<p><b>Polo Shirt</b></p>
							</div>
							<div class="icon">
								<i class="ion ion-pie-graph"></i>
							</div>
						</div>
					</div>
				</div>
				<!-- /.row -->
			</section>
			<div class="card">
			<h3 class="card-title p-3">
                Grafik Pemesanan Bulan Ini
                </h3>
				<div id="graph"></div>
			</div>
			<!-- Chart Pemesanan -->
			
		</div>
	</div>
</div>

