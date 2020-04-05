<div class="content-wrapper">
	<div class="container">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				Data customer
				<button type="button"  class="btn btn-block btn-primary" style="width:auto; float:right;" data-toggle="modal" data-target="#modalCustomer">
					Tambah Customer
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
								<th>No.</th>
								<th>Nama</th>
								<th>Username</th>
								<th>Email</th>
								<th>No Telepon</th>
								<th>Tindakan</th>
							</tr>
						</thead>
						<tbody>
							<?php $i = 1 ?>
							<?php foreach ($customer as $key => $value) : ?>
								<tr>
									<td><?= $key+1 ?></td>
									<td> <a href="<?php echo base_url("customer/tampil_customer/" . $value['id_customer']) ?>"><?= $value['nama'] ?></a> </td>
									<td><?= $value['username'] ?></td>
									<td><?= $value['email'] ?></td>
									<td><?= $value['notelp'] ?></td>
									<td>
										<a href="<?php echo base_url("customer/edit_customer/" . $value['id_customer']) ?>" class="btn btn-info btn-sm ">Edit</a>
										<a href="<?php echo base_url("customer/hapus_customer/" . $value['id_customer']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('yakin?')">Hapus</a>
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

<!-- tambah produk -->
<div class="modal fade" id="modalCustomer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Customer</h5>
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
						<form action="<?= base_url('customer/tambah_customer') ?>" method="post">
							<div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" class="form-control" id="nama" name="nama">
							</div>
							<div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control" id="username" name="username">
                                   </div>
                                   <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password" name="password">
                                   </div>
                                   <div class="form-group">
                                        <label for="jekel">Jenis Kelamin</label>
                                        <input type="text" class="form-control" id="jekel" name="jekel">
                                   </div>
                                   <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email">
                                   </div>
                                   <div class="form-group">
                                        <label for="notelp">No Telepon</label>
                                        <input type="text" class="form-control" id="notelp" name="notelp">
                                   </div>
                                   <div class="form-group">
                                        <label for="nowa">No Whatssapp</label>
                                        <input type="text" class="form-control" id="nowa" name="nowa">
                                   </div>
                                   <div class="form-group">
                                        <label for="provinsi">Provinsi</label>
                                        <input type="text" class="form-control" id="provinsi" name="provinsi">
                                   </div>
                                   <div class="form-group">
                                        <label for="kota">Kota/Kabupaten</label>
                                        <input type="text" class="form-control" id="kota" name="kota">
                                   </div>
                                   <div class="form-group">
                                        <label for="kecamatan">Kecamatan</label>
                                        <input type="text" class="form-control" id="kecamatan" name="kecamatan">
                                   </div>
                                   <div class="form-group">
                                        <label for="kodepos">Kode pos</label>
                                        <input type="text" class="form-control" id="kodepos" name="kodepos">
                                   </div>
                                   <div class="form-group">
                                        <label>Alamat Lengkap</label>
                                        <textarea class="form-control" rows="3"name="alamat"></textarea>
                                        </div>
                                   <div class="modal-footer">
                                        <button type="submit" class="btn btn-default waves-effect waves-light">Save</button>
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                   </div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
