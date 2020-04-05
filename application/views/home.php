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
							<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
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
							<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
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
							<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
						</div>
					</div>

					<!-- ./col -->

					<div class="col-lg-3 col-xs-6">
						<!-- small box -->
						<div class="small-box bg-orange">
							<div class="inner">
							<h3><?=$total_topi?></h3>

								<p><b>Topi</b></p>
							</div>
							<div class="icon">
								<i class="ion ion-pie-graph"></i>
							</div>
							<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
						</div>
					</div>
				</div>
				<!-- /.row -->
			</section>
			<!-- Chart Pemesanan -->
			<div class="card">
              <div class="card-header d-flex p-0 ui-sortable-handle" style="cursor: move;">
                <h3 class="card-title p-3">
                  <i class="fas fa-chart-pie mr-1"></i>
                  Sales
                </h3>
                <ul class="nav nav-pills ml-auto p-2">
                  <li class="nav-item">
                    <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Area</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#sales-chart" data-toggle="tab">Donut</a>
                  </li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <!-- Morris chart - Sales -->
                  <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                      <canvas id="revenue-chart-canvas" height="300" style="height: 300px; display: block; width: 577px;" width="577" class="chartjs-render-monitor"></canvas>                         
                   </div>
                  <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                    <canvas id="sales-chart-canvas" height="0" style="height: 0px; display: block; width: 0px;" class="chartjs-render-monitor" width="0"></canvas>                         
                  </div>  
                </div>
              </div><!-- /.card-body -->
            </div>
		</div>
	</div>
</div>
