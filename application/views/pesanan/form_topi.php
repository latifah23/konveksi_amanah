<div class="container">
	<section class="content-header">
		<h1>
			Form Pesanan Topi
		</h1><br>
	</section>
	<section class="content">
		<form>

			<div class="row">

				<div class="col-md-12">

					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Jenis Kain Topi</label>
						<div class="col-sm-9">
							<select class="form-control " style="width: 100%;">
								<option>Drill</option>
								<option>Famatex</option>
								<option>Sakura</option>
								<option>Kanvas</option>
								<option>Rapel</option>
								<option>Laken</option>
							</select>
						</div>
					</div>

					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Warna Kain</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="input" placeholder="Warna Kain">
						</div>
					</div>

					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Jenis Sablon</label>
						<div class="col-sm-9">
							<select class="form-control " style="width: 100%;">
								<option>Rubber</option>
								<option>Plastisol</option>
								<option>Bordir</option>
							</select>
						</div>
					</div>

					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Jumlah</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="input" placeholder="Jumlah">
						</div>
					</div>

				</div>
			</div>

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

			<div class="form-group row">
				<label for="message" class="col-sm-3 col-form-label">Keterangan</label>
				<div class="col-sm-9">
					<textarea value="Keterangan" class="form-control">
               </textarea>
				</div>
			</div>
			<button type="button" class="btn btn-primary">Simpan</button>
			<button type="button" class="btn btn-danger">CANCEL</button>



		</form>
	</section>
</div>
