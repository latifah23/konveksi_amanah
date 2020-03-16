<div class="content-wrapper">
	<div class="container">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				Data sablon
				<a href="<?= base_url('/master/tambah_sablon') ?>" type="button" class="btn btn-block btn-primary" style="width:auto; float:right;">Tambah sablon</a>

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
								<th>Nama sablon </th>
								<th>Tindakan</th>
							</tr>
						</thead>
						<tbody>
							<?php $i = 1 ?>
							<!-- <?php foreach ($master as $key => $value) : ?> -->
								<tr>
									<td><?= $i++ ?></td>
									<td><?= $value['nama_sablon'] ?></td>
							
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
												<label for="kode_order">Nama sablon</label>
												<input type="text" class="form-control" id="nama_sablon" name="nama_sablon" readonly>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-dismiss="modal">Delete</button>
												<button type="submit" class="btn btn-primary">Save</button>
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
