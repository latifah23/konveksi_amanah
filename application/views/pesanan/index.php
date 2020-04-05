<div class="content-wrapper">
	<div class="container">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				Data Pesanan Masuk
			</h1>
			<br>
			<br>
		</section>
		<form role="form" action="<?= base_url('pesanan/action_search') ?>" method="post" enctype="multipart/form-data">
			<div class="row">
				<div class="col-md-4">
					<label>Tahun</label>
					<input type="text" class="form-control" id="input" placeholder="Tahun" name="tahun" value="<?php if (!empty($search['tahun'])) {
																													echo $search['tahun'];
																												} ?>">
				</div>
				<div id="bulan" class="col-md-4" style="display: block;">
					<label>Bulan : </label>
					<select id="bulan" name="bulan" class="form-control">
						<option value="01" <?php if ($search['bulan'] == '1') {
												echo 'selected';
											} ?>> Januari</option>
						<option value="02" <?php if ($search['bulan'] == '02') {
												echo 'selected';
											} ?>> Februari</option>
						<option value="03" <?php if ($search['bulan'] == '03') {
												echo 'selected';
											} ?>> Maret</option>
						<option value="04" <?php if ($search['bulan'] == '04') {
												echo 'selected';
											} ?>> April</option>
						<option value="05" <?php if ($search['bulan'] == '05') {
												echo 'selected';
											} ?>> Mei</option>
						<option value="06" <?php if ($search['bulan'] == '06') {
												echo 'selected';
											} ?>> Juni</option>
						<option value="07" <?php if ($search['bulan'] == '07') {
												echo 'selected';
											} ?>> Juli</option>
						<option value="08" <?php if ($search['bulan'] == '08') {
												echo 'selected';
											} ?>> Agustus</option>
						<option value="09" <?php if ($search['bulan'] == '09') {
												echo 'selected';
											} ?>> September</option>
						<option value="010" <?php if ($search['bulan'] == '010') {
												echo 'selected';
											} ?>> Oktober</option>
						<option value="011" <?php if ($search['bulan'] == '011') {
												echo 'selected';
											} ?>> November</option>
						<option value="012" <?php if ($search['bulan'] == '012') {
												echo 'selected';
											} ?>> Desember</option>
					</select>
				</div>
				<div class="col-md-2">
					<label>&nbsp;</label>
					<button id="btn-search" name="search" value="tampilkan" type="submit" class="btn btn-info btn-block btn-flat btn-md" style="width:auto; float:right;">

						<!-- <button id="btn-search" onclick="search_data();" class="btn btn-info btn-block btn-flat btn-md"> -->
						<i class="fa fa-search"></i>
					</button>
				</div>
				<div class="col-md-2">
					<label>&nbsp;</label>
					<a href="<?= base_url('/pesanan/tambah_pesanan') ?>" type="button" class="btn btn-block btn-primary" style="width:auto; float:right;">
						<i class="fa fa-plus"></i>
						Tambah Pesan
					</a>
				</div>
			</div>
		</form>
		<!-- Main content -->
		<section class="content">
			<div class="box box-primary">
				<!-- /.box-header -->
				<div class="box-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>No</th>
								<th>Id Pesanan</th>
								<th>Customer</th>
								<th>Tanggal Pesan</th>
								<th>Tanggal Ambil</th>
								<th>Produk</th>
								<th>Status</th>
								<th>Tindakan</th>
							</tr>
						</thead>
						<tbody>
							<?php $i = 1 ?>
							<?php foreach ($pemesanan as $key => $value) : ?>
								<tr>
									<td><?= $i++ ?></td>
									<td><?= $value['id_pesan'] ?></td>
									<td><?= $value['nama'] ?></td>
									<td><?= $value['tanggal_pesan'] ?></td>
									<td><?= $value['tanggal_ambil'] ?></td>
									<td><?= $value['produk'] ?></td>
									<td><?= $value['status'] ?></td>
									<td>
										<!-- Button trigger modal -->
										<a href="<?= base_url('/pesanan/laporan_pdf/') . $value['id_pesan'] ?>" class="btn btn-info btn-xs"><i class="fa fa-fw fa-file-pdf-o"></i></a>
										<a href="<?= base_url('/pesanan/update_pesanan/') . $value['id_pesan'] ?>" class="btn btn-success btn-xs"><i class="fa fa-fw fa-pencil"></i></a>
										<a href="<?= base_url('/pesanan/detail_pesan/') . $value['id_pesan'] ?>" class="btn btn-warning btn-xs"><i class="fa fa-fw fa-search"></i></a>
										<a href="<?= base_url('/pesanan/hapus_pesanan/') . $value['id_pesan'] ?>" class="btn btn-danger btn-xs" onclick="return confirm('yakin?')"><i class="fa fa-fw fa-trash-o	"></i></a>

									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</section>
	</div>
</div>


<!-- model edit -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Edit Pesanan</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-12">
						<!-- Custom Tabs (Pulled to the right) -->
						<div class="nav-tabs-custom">
							<ul class="nav nav-tabs pull-right">
								<li class="active"><a href="#tab_1-1" data-toggle="tab">Pekerjaan</a></li>
								<li><a href="#tab_2-2" data-toggle="tab">File Orderan</a></li>
								<li class="pull-left header"><i class="fa fa-th"></i> Custom Tabs</li>
							</ul>
							<div class="tab-content">
								<div class="tab-pane active" id="tab_1-1">
									<?php if (validation_errors()) : ?>
										<div class="alert alert-danger" role="alert">
											<?= validation_errors(); ?>
										</div>
									<?php endif ?>
									<form action="<?= base_url('pesanan/update_pesanan') ?>" method="post">
										<div class="modal-body">
											<input type="hidden" name="id" id="id">
											<div class="form-group">
												<label for="kode_order">Id Pesan</label>
												<input type="text" class="form-control" id="kode_order" name="kode_order" readonly>
											</div>
											<div class="form-group">
												<label for="customer">Customer</label>
												<select class="form-control" name="id_customer" id="id_customer">
													<?php foreach ($customer as $key => $value) : ?>
														<option value="<?= $value['id_customer'] ?>"><?= $value['nama'] ?></option>
													<?php endforeach ?>
												</select>
											</div>
											<div class="form-group">
												<label for="tanggal_pesan">Tanggal Pesan</label>
												<input type="text" class="form-control" id="tanggal_pesan" name="tanggal_pesan">
											</div>
											<div class="form-group">
												<label for="tanggal_ambil">Tanggal Ambil</label>
												<input type="text" class="form-control" id="tanggal_ambil" name="tanggal_ambil">
											</div>
											<div class="form-group">
												<label for="produk">Produk</label>
												<select class="form-control" id="id_produk" name="id_produk">
													<?php foreach ($produk as $key => $value) : ?>
														<option value="<?= $value['id_produk'] ?>"><?= $value['nama'] ?></option>
													<?php endforeach ?>
												</select>
											</div>
											<div class="form-group">
												<label>Status</label>
												<select class="form-control" name="status" id="status">
													<option value="0">Proses</option>
													<option value="1">Selesai</option>
												</select>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
												<button type="submit" class="btn btn-primary">Save changes</button>
											</div>
										</div>
									</form>

								</div>
								<!-- /.tab-pane -->
								<div class="tab-pane" id="tab_2-2">
									The European languages are members of the same family. Their separate existence is a myth.
									For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ
									in their grammar, their pronunciation and their most common words. Everyone realizes why a
									new common language would be desirable: one could refuse to pay expensive translators. To
									achieve this, it would be necessary to have uniform grammar, pronunciation and more common
									words. If several languages coalesce, the grammar of the resulting language is more simple
									and regular than that of the individual languages.
								</div>

								<!-- /.tab-pane -->
							</div>
							<!-- /.tab-content -->
						</div>
						<!-- nav-tabs-custom -->
					</div>
					<!-- /.col -->
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Modal -->