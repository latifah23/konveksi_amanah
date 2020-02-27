<div class="content-wrapper">
	<div class="container">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				Tambah Pesanan
				<a href="<?= base_url('/pesanan') ?>" type="button" class="btn btn-block btn-primary" style="width:auto; float:right;">BACK</a>

			</h1>

		</section>
		<section class="content">
			<div class="box box-success">
				<div class="box-body">
					<?php if (validation_errors()) : ?>
						<div class="alert alert-denger" role="alert">
							<?= validation_errors() ?>
						</div>
					<?php endif ?>

					<form role="form" action="<?= base_url('pesanan/tambah_pesanan') ?>" method="post">
						<input type="hidden" name="id" id="id">
						<div class="row">
							<div class="box-body">
								<div class="col-md-6">
									<div class="form-group">
										<label>Nama customer</label>
										<select class="form-control select2" style="width: 100%;" name="id_customer">
											<?php foreach ($customer as $key => $value) : ?>
												<option style="line-height: unset;" value="<?= $value['id_customer'] ?>"><?= $value['nama'] ?></option>
											<?php endforeach; ?>
										</select>
									</div>
								</div>
								<!-- tambahan di datepicker -->
								<div class="col-md-6">
									<div class="form-group">
										<label>Kode Orderan</label>
										<input type="text" class="form-control" id="code_orderan" name="kode_order" value="<?= $kode_order ?>" readonly>
									</div>
								</div>

								<div class="col-md-4">
									<div class="form-group">
										<label>Tanggal Pemesanan</label>
										<div class="input-group date">
											<div class="input-group-addon">
												<i class="fa fa-calendar"></i>
											</div>
												<input type="text" class="form-control pull-right"   autocomplete="off" value="<?= date('m-d-Y')?>" readonly>
										</div>
									</div>
								</div>
								
								<div class="col-md-4">
									<div class="form-group">
										<label>Tanggal Pengambilan</label>
											<div class="input-group date">
												<div class="input-group-addon">
													<i class="fa fa-calendar"></i>
												</div>
												<input type="text" class="form-control pull-right" id="datepicker" autocomplete="off" name="durasi_pemesanan">
											</div>
									</div>
								</div>
								
								

								<div class="col-md-4" >
									<label >Kategori Produk</label>
									<select id="produk" class="form-control select" name="id_produk">
										<option value="">Pilih Produk</option>
										<?php foreach ($produk as $key => $value) : ?>
											<option value="<?= $value['id_produk'] ?>" name="<?= $value['nama'] ?>"> <?= $value['nama'] ?></option>
										<?php endforeach; ?>
									</select>
								</div>
							</div>

							<!-- select produk Polo-->
							<div class="box box-success selected" style="display:none" id="Polo-Shirt">
								<?php
								include APPPATH . 'views/pesanan/form_polo.php';
								?>
							</div>

							<!-- select produk forum Celana -->
							<!-- <div class="box box-success selected" style="display:none" id="Celana">
								<?php
								include APPPATH . 'views/pesanan/form_celana.php';
								?>
							</div>  -->
							<!-- select produk forum jaket-->
							<!-- <div class="box box-success selected" style="display:none" id="Jaket">
								<?php
								include APPPATH . 'views/pesanan/form_jaket.php';
								?>
							</div>  -->
							<!-- select produk forum topi-->
							<!-- <div class="box box-success selected" style="display:none" id="Topi">
								<?php
								include APPPATH . 'views/pesanan/form_topi.php';
								?>
							</div> -->
							<!-- select produk forum tshirt-->
							<!-- <div class="box box-success selected" style="display:none" id="T-Shirt">
								<?php
								include APPPATH . 'views/pesanan/form_tshirt.php';
								?>
							</div> -->
							<!-- select produk forum PDL-->
							<!-- <div class="box box-success selected" style="display:none" id="PDL">
								<?php
								include APPPATH . 'views/pesanan/form_pdl.php';
								?>
							</div> -->


							<!-- jika kosong select produk-->
							<!-- <div class="box box-success selected" style="display:none" id="kosong">
								<div class="box-body">
									<div class="row">
										<section>
											<h5 class="text-center">Data Katagori belum di pilih</h5>
										</section>
									</div>
								</div>-->
						</div>
					</form>
				</div>
			</div>
		</section>
	</div>
</div>
