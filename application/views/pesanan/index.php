<div class="content-wrapper">
	<div class="container">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				Data Pesanan Masuk
				<a href="<?= base_url('/pesanan/tambah_pesanan') ?>" type="button" class="btn btn-block btn-primary" style="width:auto; float:right;">Tambah Pesanan</a>

			</h1>
		</section>

		<!-- Main content -->
		<section class="content">
			<div class="box box-primary">
				<!-- /.box-header -->
				<div class="box-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>No</th>
								<th>Kode Order</th>
								<th>customer</th>
								<th>Produk</th>
								<th>Pegawai</th>
								<th>Durasi Pemesanan</th>
								<th>Status</th>
								<th>Tindakan</th>
							</tr>
						</thead>
						<tbody>
							<?php $i = 1 ?>
							<?php foreach ($pemesanan as $key => $value) : ?>
								<tr>
									<td><?= $i++ ?></td>
									<td><?= $value['kode_order'] ?></td>
									<td><?= $value['nama_customer'] ?></td>
									<td><?= $value['nama_produk'] ?></td>
									<td><?= $value['nama_pegawai'] ?></td>
									<td><?= $value['durasi_pemesanan'] ?></td>
									<td>
										<?php if ($value['status'] == 1) : ?>
											Selsai
										<?php else : ?>
											Proses
										<?php endif; ?>

									</td>

									<td>
										<!-- Button trigger modal -->

										<a type="button" data-id="<?= $value['id'] ?>" class="btn tampilUbah btn-warning btn-xs" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-fw fa-edit"></i></a>
										<a href="<?= base_url('/pesanan/laporan_pdf/') . $value['kode_order'] ?>" class="btn btn-info btn-xs"><i class="fa fa-fw fa-file-pdf-o"></i></a>
										<a href="<?= base_url('/pesanan/hapus_pesanan/') . $value['id'] ?>" class="btn btn-danger btn-xs" onclick="return confirm('yakin?')"><i class="fa fa-fw fa-trash-o	"></i></a>
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
												<label for="kode_order">Kode Order</label>
												<input type="text" class="form-control" id="kode_order" name="kode_order" readonly>
											</div>
											<div class="form-group">
												<label for="customer">customer</label>
												<select class="form-control" name="id_customer" id="id_customer">
													<?php foreach ($customer as $key => $value) : ?>
														<option value="<?= $value['id_customer'] ?>"><?= $value['nama'] ?></option>
													<?php endforeach ?>
												</select>
											</div>
											<div class="form-group">
												<label>Nama Pegawai</label>
												<select class="form-control" name="id_pegawai" id="id_pegawai">
													<?php foreach ($pegawai as $key => $value) : ?>
														<option value="<?= $value['id_pegawai'] ?>"><?= $value['nama'] ?></option>
													<?php endforeach ?>
												</select>
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
												<label for="durasi_pemesanan">Durasi Pemesanan</label>
												<input type="text" class="form-control" id="durasi_pemesanan" name="durasi_pemesanan">
											</div>
											<div class="form-group">
												<label for="kode_order">Jenis Kain</label>
												<input type="text" class="form-control" id="jenis_kain" name="jenis_kain">
											</div>
											<div class="form-group">
												<label for="kode_order">Warna </label>
												<input type="text" class="form-control" id="warna" name="warna">
											</div>
											<div class="row">
												<div class="col-md-12">
													<div class="col-md-3">
														<div class="form-group row">
															<label for="input" class="col-sm-3 col-form-label">Ukuran</label>
															<div class="col-sm-7">
															</div>
														</div>
													</div>
													<div class="col-md-3">
														<div class="form-group row">
															<label for="input" class="col-sm-3 col-form-label">XS</label>
															<div class="col-sm-7">
																<input type="text" class="form-control" id="xs_pendek" placeholder="pendek">
																<input type="text" class="form-control" id="xs_panjang" placeholder="panjang"><br>
															</div>

															<label for="input" class="col-sm-3 col-form-label">L</label>
															<div class="col-sm-7">
																<input type="text" class="form-control" id="l_pendek" placeholder="pendek">
																<input type="text" class="form-control" id="l_panjang" placeholder="panjang"><br>
															</div>

															<label for="input" class="col-sm-3 col-form-label">XXXL</label>
															<div class="col-sm-7">
																<input type="text" class="form-control" id="xxxl_pendek" placeholder="pendek">
																<input type="text" class="form-control" id="xxxl_panjang" placeholder="panjang"><br>
															</div>
														</div>
													</div>

													<div class="col-md-3">
														<div class="form-group row">
															<label for="input" class="col-sm-3 col-form-label">S</label>
															<div class="col-sm-7">
																<input type="text" class="form-control" id="s_pendek" placeholder="pendek">
																<input type="text" class="form-control" id="s_panjang" placeholder="panjang"><br>
															</div>

															<label for="input" class="col-sm-3 col-form-label">XL</label>
															<div class="col-sm-7">
																<input type="text" class="form-control" id="xl_pendek" placeholder="pendek">
																<input type="text" class="form-control" id="xl_panjang" placeholder="panjang"><br>
															</div>

															<label for="input" class="col-sm-3 col-form-label">Jumbo</label>
															<div class="col-sm-7">
																<input type="text" class="form-control" id="jumbo_pendek" placeholder="pendek">
																<input type="text" class="form-control" id="jumbo_panjang" placeholder="panjang"><br>
															</div>
														</div>
													</div>

													<div class="col-md-3">
														<div class="form-group row">
															<label for="input" class="col-sm-3 col-form-label">M</label>
															<div class="col-sm-7">
																<input type="text" class="form-control" id="m_pendek" placeholder="pendek">
																<input type="text" class="form-control" id="m_panjang" placeholder="panjang"><br>
															</div>

															<label for="input" class="col-sm-3 col-form-label">XXL</label>
															<div class="col-sm-7">
																<input type="text" class="form-control" id="xxl_pendek" placeholder="pendek">
																<input type="text" class="form-control" id="xxl_panjang" placeholder="panjang"><br>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="form-group">
												<label for="kode_order">Keterangan</label>
												<textarea type="text" class="form-control" id="keterangan" name="keterangan"></textarea>
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