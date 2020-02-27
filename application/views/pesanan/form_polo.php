<div class="container">
	<section class="content-header">
		<h1>
			Form Pesanan Polo Shirt
		</h1><br>
	</section>

	<div class="row">
		<div class="col-md-12">
			<div class="form-group row">
				<label for="input" class="col-sm-3 col-form-label">Jenis Kain</label>
				<div class="col-sm-7">
					<select class="form-control " style="width: 100%;" name="jenis_kain">
						<option value="Lacos Katun">Lacos Katun</option>
						<option value="TC">TC</option>
						<option value="Polyester PE">Polyester PE</option>
						<option value="Double katun">Double Katun</option>
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
		</div>
	</div>
			<div class="form-group row">
				<label for="input" class="col-sm-3 col-form-label">Jumlah</label>
				<div class="col-sm-7">
					<input type="text" class="form-control" id="input" placeholder="Jumlah" name="jumlah">
				</div>
			</div>
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-2">
				<div class="form-group row">
					<label for="input" class="col-sm-2 col-form-label">Ukuran</label>
				</div>
			</div>
			<div class="col-md-2">
				<div class="form-group row">
					<label for="input" class="col-sm-2 col-form-label">Pria/Wanita</label>
				</div>
			</div>
			<div class="col-md-2">
				<div class="form-group row">
					<label for="input" class="col-sm-2 col-form-label">Panjang</label>
				</div>
			</div>
			<div class="col-md-2">
				<div class="form-group row">
					<label for="input" class="col-sm-2 col-form-label">6/8</label>
				</div>
			</div>
			<div class="col-md-2">
				<div class="form-group row">
					<label for="input" class="col-sm-2 col-form-label">3/4</label>
				</div>
			</div>
			<div class="col-md-2">
				<div class="form-group row">
					<label for="input" class="col-sm-2 col-form-label">Pendek</label>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-2">
				<select class="form-control " style="width: 100%;" name="ukuran">
					<option value="XS">XS</option>
					<option value="S">S</option>
					<option value="M">M</option>
					<option value="L">L</option>
					<option value="XL">XL</option>
					<option value="XXL">XXL</option>
					<option value="XXXL">XXXL</option>
					<option value="Jumbo">Jumbo</option>
				</select>
			</div>
			<div class="col-md-2">
				<select class="form-control " style="width: 100%;" name="jekel">
					<option value="wanita">wanita</option>
					<option value="pria">pria</option>
				</select>
			</div>
			<div class="col-md-2">
				<input type="text" class="form-control" name="panjang" id="panjang" placeholder="panjang">
			</div>
			<div class="col-md-2">
				<input type="text" class="form-control" name="enam" id="enam" placeholder="6/8">
			</div>
			<div class="col-md-2">
				<input type="text" class="form-control" name="tiga" id="tiga" placeholder="3/4">
			</div>
			<div class="col-md-2">
				<input type="text" class="form-control" name="pendek" id="pendek" placeholder="pendek">
			</div>
			<button i>Tambah</button>
		</div>
	</div>

		<div class="col-md-12">
			<div class="form-group">
				<label for="exampleInputFile" class="col-sm-3 col-form-label">Upload Design</label>
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
		<div class="col-md-12"align="right">
			<button type="submit" class="btn btn-primary">SAVE</button>
			<button type="button" class="btn btn-danger">CANCEL</button>
		</div>

	</div>
</div>
