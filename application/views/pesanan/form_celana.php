<div class="container">
	<section class="content-header">
		<h1>
			Form Pesanan Celana
		</h1><br>
	</section>
	<div class="row">
		<section class="content">
			<div class="col-md-12">
				<div class="form-group row">
					<label for="input" class="col-sm-3 col-form-label">Jenis Kain Celana</label>
					<div class="col-sm-7">
						<select class="form-control " style="width: 100%;" name="jenis kain">
							<option value="Paragon">Paragon</option>
							<option value="Diadora">Diadora</option>
							<option value="Lotto">Lotto</option>
							<option value="Adidas">Adidas</option>
							<option value="Spandek">Spandek</option>
							<option value="Dry fit">Dry fit</option>
							<option value="Wafer">Wafer</option>
							<option value="Hyget">Hyget</option>
						</select>
					</div>
				</div>

				<div class="form-group row">
					<label for="input" class="col-sm-3 col-form-label">Warna Kain</label>
					<div class="col-sm-7">
						<input type="text" class="form-control" id="input" placeholder="Warna Kain" name="warna">
					</div>
				</div>

				<div class="form-group row">
					<label for="input" class="col-sm-3 col-form-label">Jenis Sablon</label>
					<div class="col-sm-7">
						<select class="form-control " style="width: 100%;" name="jenis_sablon">
							<option value="Rubber">Rubber</option>
							<option value="Plastisol">Plastisol</option>
						</select>
					</div>
				</div>

				<div class="form-group row">
					<label for="input" class="col-sm-3 col-form-label">Jumlah</label>
					<div class="col-sm-7">
						<input type="text" class="form-control" id="input" placeholder="Jumlah" name="jumlah_pemesanan">
					</div>
				</div>

			</div>
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
						<input type="text" class="form-control" id="input" placeholder="Panjang">
						<input type="text" class="form-control" id="input" placeholder="Pendek"><br>
					</div>


					<label for="input" class="col-sm-3 col-form-label">L</label>
					<div class="col-sm-7">
						<input type="text" class="form-control" id="input" placeholder="Panjang">
						<input type="text" class="form-control" id="input" placeholder="Pendek"><br>
					</div>

					<label for="input" class="col-sm-3 col-form-label">XXXL</label>
					<div class="col-sm-7">
						<input type="text" class="form-control" id="input" placeholder="Panjang">
						<input type="text" class="form-control" id="input" placeholder="Pendek"><br>
					</div>
				</div>
			</div>

			<div class="col-md-3">
				<div class="form-group row">
					<label for="input" class="col-sm-3 col-form-label">S</label>
					<div class="col-sm-7">
						<input type="text" class="form-control" id="input" placeholder="Panjang">
						<input type="text" class="form-control" id="input" placeholder="Pendek"><br>
					</div>


					<label for="input" class="col-sm-3 col-form-label">XL</label>
					<div class="col-sm-7">
						<input type="text" class="form-control" id="input" placeholder="Panjang">
						<input type="text" class="form-control" id="input" placeholder="Pendek"><br>
					</div>

					<label for="input" class="col-sm-3 col-form-label">Jumbo</label>
					<div class="col-sm-7">
						<input type="text" class="form-control" id="input" placeholder="Panjang">
						<input type="text" class="form-control" id="input" placeholder="Pendek"><br>
					</div>


				</div>
			</div>

			<div class="col-md-3">
				<div class="form-group row">
					<label for="input" class="col-sm-3 col-form-label">M</label>
					<div class="col-sm-7">
						<input type="text" class="form-control" id="input" placeholder="Panjang">
						<input type="text" class="form-control" id="input" placeholder="Pendek"><br>
					</div>


					<label for="input" class="col-sm-3 col-form-label">XXL</label>
					<div class="col-sm-7">
						<input type="text" class="form-control" id="input" placeholder="Panjang">
						<input type="text" class="form-control" id="input" placeholder="Pendek"><br>
					</div>
				</div>
			</div>
		</div>
		
		<div class="col-md-12">
			<div class="form-group">
				<label for="exampleInputFile" class="col-sm-3 col-form-label">Upload File</label>
				<div class="input-group">
					<div class="costum-file">
						<input type="file" class="custom-file-input" id="exampleInputFile">
						<label class="custom-file-label" for="exampleInputFile">Choose file</label>
					</div>
					<div class="input-group-append">
						<span class="input-group-text" id="">Upload</span>
					</div>
				</div>
			</div>

			<div class="form-group">
				<label for="message" class="col-sm-3 col-form-label">Keterangan</label>
				<div class="col-sm-7">
					<textarea id="note_1_1" name="keterangan" class="form-control" placeholder="Keterangan Pekerjaan"></textarea>
				</div>
			</div>
		</div>
		<div class="col-md-12">		
			<button type="submit" class="btn btn-primary">SAVE</button>
			<button type="button" class="btn btn-danger">CANCEL</button>
		</div>

	</div>
</div>
