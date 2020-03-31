<div class="content-wrapper">
	<div class="container">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				Data customer
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
                    <table class="table table-striped">
                              <tbody>
                              <tr>
                                   <th scope="row">Nama Produk</th>
                                   <td><?= $riwayat['produk'] ?></td>
                              </tr>
                              <tr>
                                   <th scope="row">Status</th>
                                   <td><?= $riwayat['status'] ?></td>
                              </tr>
                              <tr>
							<th scope="row">Jenis Kain</th>
                                   <td><?= $riwayat['kain'] ?></td>
                              </tr>
						<tr>
							<th scope="row">Warna</th>
                                   <td><?= $riwayat['warna'] ?></td>
                              </tr>
						<tr>
							<th scope="row">Jenis Sablon</th>
                                   <td><?= $riwayat['sablon'] ?></td>
                              </tr>
						<tr>
                                   <th scope="row">Jumlah</th>
                                   <td><?= $riwayat['jumlah'] ?></td>
                              </tr>
                              <tr>
                                   <th scope="row">Keterangan</th>
                                   <td><?= $riwayat['keterangan'] ?></td>
                              </tr>
                              <tr>
                                   <th scope="row">Gambar</th>
                                   <td><img src="<?= base_url('upload/pesanan/')?><?= $riwayat['design_baju'] ?>" width="200px" height="200px"></td>
                              </tr>			
                         </tbody>
                         </table>
				</div>
                    <div class="row">
			<div class="col-xs-12 table-responsive">
				<table class="table table-striped" border="1">
				<thead>
					<tr>
						<th>Ukuran</th>
						<th>Jenis Kelamin</th>
						<th>Panjang</th>
						<th>6/8</th>
						<th>3/4</th>
						<th>pendek</th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($detail_riwayat as $data):?>
				<tr>
					<td><?=$data['ukuran'] ?></td>
					<td><?=$data['jekel'] ?></td>
					<td><?=$data['panjang'] ?></td>
					<td><?=$data['enam'] ?></td>
					<td><?=$data['tiga'] ?></td>
					<td><?=$data['pendek'] ?></td>
				</tr>
				<?php endforeach; ?>
				</tbody>
				</table>
                    
			</div>
               <!-- <div class="box-body col-md-2" style="margin-left:45%">
               <a href="<?= base_url('/pesanan/selesai/') . $pesan['id_pesan'] ?>"><button class="btn btn-block btn-primary">Selesai</button></a>
			</div> -->
               <!-- /.col -->
			</div>
			</div>
		</section>
	</div>
</div>
