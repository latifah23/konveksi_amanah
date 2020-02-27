<div class="modal fade" id="modalcustomer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Add customer</h5>
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
								<label for="password">Password</label>
								<input type="password" class="form-control" id="nama" name="nama">
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
								<input type="text" class="form-control" id="notelp" name="notelp">
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
								<textarea class="form-control" rows="3"></textarea>
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
