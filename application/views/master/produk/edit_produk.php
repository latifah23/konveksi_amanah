<div class="content-wrapper">
	<div class="container">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				Edit Data produk
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
				<form action="<?= base_url('produk/update_produk/' )?>" method="post">
					<div class="modal-body"> 
						<input type="hidden" name="id_produk" value="<?= $produk['id_produk'] ?>">
						<div class="form-group">
							<label for="nama">Nama</label>
							<input type="text" class="form-control" id="nama_produk" name="nama_produk" value="<?= $produk['nama_produk'] ?>">
						</div>
					</div>
					<div class="modal-footer">
						<a class="btn btn-info " href="<?= base_url('produk') ?>">Kembali</a>
						<button type="submit" class="btn btn-primary">Save changes</button>
					</div>
				</form>
			</div>
		</section>
	</div>
</div>
