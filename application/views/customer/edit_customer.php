<div class="content-wrapper">
	<div class="container">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				Edit Data Customer
			</h1>
		</section>
		<!-- Main content -->
		<section class="content">
			<div class="box box-primary">
				<?php if (validation_errors()) : ?>
					<div class="alert alert-danger" role="alert">
						<?= validation_errors(); ?>
					</div>
				<?php endif ?>
				<form action="<?= base_url('sablon/update_sablon/' )?>" method="post">
					<div class="modal-body"> 
						<input type="hidden" name="id_customer" value="<?= $customer['id_customer'] ?>">
						<div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $customer['nama'] ?>">
                                   </div>
                                   <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" value="<?= $customer['password'] ?>">
                                   </div>
                                   <div class="form-group">
                                        <label for="jekel">Jenis Kelamin</label>
                                        <input type="text" class="form-control" id="jekel" name="jekel" value="<?= $customer['jekel'] ?>">
                                   </div>
                                   <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" value="<?= $customer['email'] ?>">
                                   </div>
                                   <div class="form-group">
                                        <label for="notelp">No Telepon</label>
                                        <input type="text" class="form-control" id="notelp" name="notelp" value="<?= $customer['notelp'] ?>">
                                   </div>
                                   <div class="form-group">
                                        <label for="nowa">No Whatssapp</label>
                                        <input type="text" class="form-control" id="nowa" name="nowa" value="<?= $customer['nowa'] ?>">
                                   </div>
                                   <div class="form-group">
                                        <label for="provinsi">Provinsi</label>
                                        <input type="text" class="form-control" id="provinsi" name="provinsi" value="<?= $customer['provinsi'] ?>">
                                   </div>
                                   <div class="form-group">
                                        <label for="kota">Kota/Kabupaten</label>
                                        <input type="text" class="form-control" id="kota" name="kota" value="<?= $customer['kota'] ?>">
                                   </div>
                                   <div class="form-group">
                                        <label for="kecamatan">Kecamatan</label>
                                        <input type="text" class="form-control" id="kecamatan" name="kecamatan" value="<?= $customer['kecamatan'] ?>">
                                   </div>
                                   <div class="form-group">
                                        <label for="kodepos">Kode Pos</label>
                                        <input type="text" class="form-control" id="kodepos" name="kodepos" value="<?= $customer['kodepos'] ?>">
                                   </div>
                                   <div class="form-group">
                                        <label for="alamat">Alamat Lengkap</label>
                                        <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $customer['alamat'] ?>">
                                   </div>    
                         </div>

					</div>
					<div class="modal-footer">
						<a class="btn btn-info " href="<?= base_url('customer') ?>">Kembali</a>
						<button type="submit" class="btn btn-primary">Save changes</button>
					</div>
				</form>
			</div>
		</section>
	</div>
</div>
