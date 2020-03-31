<div class="content-wrapper">
	<div class="container">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				Data Sablon
				<button type="button"  class="btn btn-block btn-primary" style="width:auto; float:right;" data-toggle="modal" data-target="#modalSablon">
					Tambah Sablon
				</button>

			</h1>
		</section>

		<!-- Main content -->
		<section class="content">
			<div class="box box-primary">
				<?php if ($this->session->flashdata()) : ?>
					<div class="alert alert-success alert-dismissible mt-3 " role="alert">
						<strong> Berhasil !!</strong> <?= $this->session->flashdata('flash') ?>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				<?php endif; ?>
				
				<!-- /.box-header -->
				<div class="box-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th width="5%">No.</th>
								<th style="min-width: 140px; width: 600px;">Nama Sablon</th>
								<th style="min-width: 10px; width: 227px;">Tindakan</th>
							</tr>
						</thead>
						<tbody>
							<?php $i = 1 ?>
							<?php foreach ($sablon as $key => $value) : ?>
								<tr>
									<td><?= $key+1 ?></td>
									<td><?= $value['nama_sablon'] ?></td>
									<td class="text-center">
								
										<a href="<?php echo base_url("sablon/edit_sablon/" . $value['id_sablon']) ?>" class="btn btn-flat btn-warning btn-xs"><i class="fa fa-edit"></i></a>
										<a href="<?php echo base_url("sablon/hapus_sablon/" . $value['id_sablon']) ?>" class="btn btn-flat btn-danger btn-xs"  onclick="return confirm('yakin?')"><i class="fa fa-trash"></i></a>
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
<div class="modal fade" id="modalSablon" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Sablon</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<?php if (validation_errors()) : ?>
				<?= validation_errors() ?>
			<?php endif ?> 
			<div class="modal-body">
				<!-- Modal -->
				<div id="custom-modal" class="modal-demo">
					<div class="custom-modal-text text-left">
						<form action="<?= base_url('sablon/tambah_sablon') ?>" method="post">
							<div class="form-group">
								<label for="nama_sablon">Nama sablon</label>
								<input type="text" class="form-control" id="nama_sablon" name="nama_sablon">
							</div>
							<div class="form-group">
								<label for="harga_sablon">Harga sablon</label>
								<input type="text" class="form-control" id="harga" name="harga">
							</div>
							<div class="modal-footer">
								<button type="submit" class="btn btn-default waves-effect waves-light">Save</button>
								<button type="button" class="btn btn-danger waves-effect waves-light m-l-10">Cancel</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

