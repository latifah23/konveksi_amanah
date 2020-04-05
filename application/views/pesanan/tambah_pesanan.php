<div class="content-wrapper">
	<div class="container">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				Tambah Pesanan
			</h1>
		</section>
		<form role="form" action="<?= base_url('pesanan/action_tambah_pesanan') ?>" method="post" enctype="multipart/form-data">
			<section class="content">
				<div class="box box-success">
					<div class="box-body">
						<?php if (validation_errors()) : ?>
							<div class="alert alert-denger" role="alert">
								<?= validation_errors() ?>
							</div>
						<?php endif ?>

						<input type="hidden" name="id" id="id">
						<div class="row">
							<div class="box-body">
								<div class="col-md-6">
									<div class="form-group">
										<label>Nama customer</label>
										<select class="form-control select2" style="width: 100%;" name="id_customer">
											<?php foreach ($customer as $key => $value) : ?>
												<option style="line-height: unset;" value="<?= $value['id_customer'] ?>"><?= $value['nama'] ?></option>
											<?php endforeach; ?>
										</select>
									</div>
								</div>
								<div class="col-md-6">
								<label >Kategori Produk</label>
									<select id="produk" class="form-control select jenisProduk" name="id_produk">
										<option value="" selected disabled>Pilih Produk</option>
										<?php foreach ($produk as $key => $value) : ?>
											<option value="<?= $value['id_produk']?>"> <?= $value['nama_produk'] ?></option>
										<?php endforeach; ?>
									</select>
								</div>
<<<<<<< HEAD
							</div>
						</div>
						<div class="row">
							<div class="box-body">
								<div class="col-md-6">
=======


								<div class="col-md-4">
>>>>>>> master
									<div class="form-group">
										<label>Tanggal Pemesanan</label>
										<div class="input-group date">
											<div class="input-group-addon">
												<i class="fa fa-calendar"></i>
											</div>
<<<<<<< HEAD
												<input type="text" class="form-control pull-right"   autocomplete="off" value="<?= date('Y-m-d')?>" readonly name="tanggal_pesan">
										</div>
									</div>
								</div>
								
								<div class="col-md-6">
=======
											<input type="text" class="form-control pull-right" name="tanggal_pesan" autocomplete="off" value="<?= date('m/d/Y') ?>" readonly>
										</div>
									</div>
								</div>

								<div class="col-md-4">
>>>>>>> master
									<div class="form-group">
										<label>Tanggal Pengambilan</label>
										<div class="input-group date">
											<div class="input-group-addon">
												<i class="fa fa-calendar"></i>
											</div>
<<<<<<< HEAD
											<input type="text" class="form-control pull-right" id="datepicker" autocomplete="off"   name="tanggal_ambil">
										</div>
									</div>
								</div>
							</div>	
=======
											<input type="text" class="form-control pull-right" id="datepicker" autocomplete="off" name="tanggal_ambil">
										</div>
									</div>
								</div>

								<div class="col-md-4">
									<label>Kategori Produk</label>
									<select id="produk" class="form-control select jenisProduk" name="id_produk">
										<option value="" selected disabled>Pilih Produk</option>
										<?php foreach ($produk as $key => $value) : ?>
											<option value="<?= $value['id_produk'] ?>"> <?= $value['nama_produk'] ?></option>
										<?php endforeach; ?>
									</select>
								</div>
							</div>
>>>>>>> master
						</div>
					</div>
				</div>

				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Data Produk Pemesanan</h3>
					</div>
					<div class="box-body">
						<label for="input" class="col-sm-2 col-form-label">Jenis Kain</label>
						<div class="col-sm-10">
							<select id="kain" class="form-control select jenisKain" name="id_kain">
								<option value="" selected disabled>Pilih Kain</option>
								<?php foreach ($kain as $key => $value) : ?>
									<option value="<?= $value['id_kain'] ?>"> <?= $value['nama_kain'] ?></option>
								<?php endforeach; ?>
							</select>
						</div>
						<br>
						<br>
						<label for="input" class="col-sm-2 col-form-label">Warna Kain</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="input" placeholder="Warna Kain" name="warna">
						</div>
						<br>
						<br>
						<label for="input" class="col-sm-2 col-form-label">Jenis Sablon</label>
						<div class="col-sm-10">
							<select id="sablon" class="form-control select jenisKain" name="id_sablon">
								<option value="" selected disabled>Pilih Sablon</option>
								<?php foreach ($sablon as $key => $value) : ?>
									<option value="<?= $value['id_sablon'] ?>"> <?= $value['nama_sablon'] ?></option>
								<?php endforeach; ?>
							</select>
						</div>
						<br>
						<br>
						<label for="input" class="col-sm-2 col-form-label">Jumlah</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="input" placeholder="Jumlah" name="jumlah">
						</div>
						<br>
						<br>
						<br>
						<table class="table table-bordered" id="customFields">
							<thead>
								<tr>
									<th class="text-center">Ukuran</th>
									<th class="text-center" width="200">Pria /Wanita</th>
									<th class="text-center">Panjang</th>
									<th class="text-center">Panjang 6/8</th>
									<th class="text-center">Panjang 3/4</th>
									<th class="text-center">Pendek</th>
									<th class="text-center">Aksi</th>
								</tr>
							</thead>
							<tbody class="listDetail">
								<tr>
									<td>
<<<<<<< HEAD
										<select class="form-control" name="ukuran[]">
=======
										<select class="form-control " name="ukuran[]">
>>>>>>> master
											<option value="XS">XS</option>
											<option value="S">S</option>
											<option value="M">M</option>
											<option value="L">L</option>
											<option value="XL">XL</option>
											<option value="XXL">XXL</option>
											<option value="XXXL">XXXL</option>
											<option value="Jumbo">Jumbo</option>
										</select>
									</td>
									<td>
<<<<<<< HEAD
										
=======
>>>>>>> master
										<select class="form-control " name="jekel[]">
											<option value="wanita">wanita</option>
											<option value="pria">pria</option>
										</select>
									</td>

									<td>
										<input type="text" class="form-control" name="panjang[]" id="panjang" placeholder="panjang">
									</td>
									<td>
<<<<<<< HEAD
									<input type="text" class="form-control" name="enam[]" id="enam" placeholder="6/8">
									</td>
									<td>
									<input type="text" class="form-control" name="tiga[]" id="tiga" placeholder="3/4">
									</td>
									<td>
									<input type="text" class="form-control" name="pendek[]" id="pendek" placeholder="pendek">
=======
										<input type="text" class="form-control" name="enam[]" id="enam" placeholder="6/8">
									</td>
									<td>
										<input type="text" class="form-control" name="tiga[]" id="tiga" placeholder="3/4">
									</td>
									<td>
										<input type="text" class="form-control" name="pendek[]" id="pendek" placeholder="pendek">
>>>>>>> master
									</td>
									<td>
										<button type="button" class="btn btn-block btn-primary tbhBaris " style="width:auto; float:right; margin-bottom:10px;" data-id="0"> + </button>
									</td>
								</tr>
							</tbody>
						</table>
						<br>
						<br>
<<<<<<< HEAD
=======

>>>>>>> master
						<label for="exampleInputFile" class="col-sm-2 col-form-label">Upload Design</label>
						<div class="input-group">
							<div class="costum-file col-sm-10">
								<input type="file" class="custom-file-input" id="exampleInputFile" name="design_baju">
								<label class="custom-file-label" for="exampleInputFile"></label>
							</div>
							<div class="input-group-append">
								<span class="input-group-text" id=""></span>
							</div>
						</div>
<<<<<<< HEAD
						<div class="form-group" name="keterangan">
=======

						<div class="form-group">
>>>>>>> master
							<label for="message" class="col-sm-2 col-form-label">Keterangan</label>
							<div class="col-sm-10">
								<textarea id="note_1_1" name="keterangan" class="form-control" placeholder="Keterangan Pekerjaan"></textarea>
							</div>
						</div>
<<<<<<< HEAD
				</div>
				<div class="box-footer clearfix">
					<div class="col-md-12"align="right">
					
						<!-- <button type="submit" class="btn btn-primary">SAVE</button> -->
						<button type="button" class="btn btn-danger">CANCEL</button>
						<a href="<?= base_url('/riwayat/detail_riwayat/') ?>" type="button" class="btn btn-block btn-primary" style="width:auto; float:right;">
						SAVE
					</a>
=======
>>>>>>> master
					</div>
					<div class="box-footer clearfix">
						<div class="col-md-12" align="right">
							<button type="submit" class="btn btn-primary">SAVE</button>
							<button type="button" class="btn btn-danger">CANCEL</button>
						</div>
					</div>
			</section>
		</form>
	</div>
</div>

<script>
	$('.tbhBaris').click(function() {
		//    var $trans = $('.jenisProduk').val();
		//    console.log($trans);
		//    if ($trans == null) {
		//        alert('Anda harus memilih jenis Produk terlebih dahulu');
		//        return false;
		//    }

<<<<<<< HEAD
        var $data = '<tr><td><select class="form-control " style="width: 100%;" name="ukuran[]"><option value="XS">XS</option><option value="S">S</option><option value="M">M</option><option value="L">L</option><option value="XL">XL</option><option value="XXL">XXL</option><option value="XXXL">XXXL</option><option value="Jumbo">Jumbo</option></select></td><td><select class="form-control " style="width: 100%;" name="jekel[]"><option value="wanita">wanita</option><option value="pria">pria</option></select></td><td><input type="text" class="form-control" name="panjang[]" id="panjang" placeholder="panjang"></td><td><input type="text" class="form-control" name="enam[]" id="enam" placeholder="6/8"></td><td><input type="text" class="form-control" name="tiga[]" id="tiga" placeholder="3/4"></td><td><input type="text" class="form-control" name="pendek[]" id="pendek" placeholder="pendek"></td><td><button  type="button" class="btn btn-block btn-danger hpsBaris " style="width:auto; float:right; margin-bottom:10px;" data-id="0" > - </button></td></tr>';
=======
		var $id = $(this).attr('data-id');
		$ids = parseInt($id) + 1;
>>>>>>> master

		var $data = '<tr><td><select class="form-control " style="width: 100%;" name="ukuran[]"><option value="XS">XS</option><option value="S">S</option><option value="M">M</option><option value="L">L</option><option value="XL">XL</option><option value="XXL">XXL</option><option value="XXXL">XXXL</option><option value="Jumbo">Jumbo</option></select></td><td><select class="form-control " style="width: 100%;" name="jekel[]"><option value="wanita">wanita</option><option value="pria">pria</option></select></td><td><input type="text" class="form-control" name="panjang[]" id="panjang" placeholder="panjang"></td><td><input type="text" class="form-control" name="enam[]" id="enam" placeholder="6/8"></td><td><input type="text" class="form-control" name="tiga[]" id="tiga" placeholder="3/4"></td><td><input type="text" class="form-control" name="pendek[]" id="pendek" placeholder="pendek"></td><td><button  type="button" class="btn btn-block btn-danger hpsBaris " style="width:auto; float:right; margin-bottom:10px;" data-id="0" > - </button></td></tr>';

		$('.listDetail').append($data);
		$('.tbhBaris').attr('data-id', $ids);

	});
	$("#customFields").on('click', '.hpsBaris', function() {
		$(this).parent().parent().remove();
	});
</script>