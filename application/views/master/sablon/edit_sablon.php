<div class="content-wrapper">
	<div class="container">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				Edit Data Sablon
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
						<input type="hidden" name="id_sablon" value="<?= $sablon['id_sablon'] ?>">
						<div class="form-group">
							<label for="nama">Nama</label>
							<input type="text" class="form-control" id="nama_sablon" name="nama_sablon" value="<?= $sablon['nama_sablon'] ?>">
						</div>
						<div class="form-group">
							<label for="harga">Harga</label>
							<input type="text" class="form-control" id="harga" name="harga" value="<?= $sablon['harga'] ?>">
						</div>
					</div>
					<div class="modal-footer">
						<a class="btn btn-info " href="<?= base_url('sablon') ?>">Kembali</a>
						<button type="submit" class="btn btn-primary">Save changes</button>
					</div>
				</form>
			</div>
		</section>
	</div>
</div>
