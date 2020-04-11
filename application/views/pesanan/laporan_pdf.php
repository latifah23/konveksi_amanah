
<small class="pull-left">Amanah Collection</small>
<small class="pull-right">Date: <?= date('d-M-Y') ?></small>
				<hr style="margin-top:10px">
			</div>
		</div>
</header>
		 <!-- info row -->
		<div class="row">
		   <div class="col-xs-12 table-responsive">
			<table class="table table-striped">
			<thead>
				<td>
				<div class ="row">
						<div class="pull-left">
							<i>Dari</i>
							<br>
							<strong>Amanah Collection</strong><br>
							Jl. Bawang no.7 Pulisen Boyolali<br>
							Phone: 081329380882<br>
							Email: Sriyadi.byl@gmail.com
						</div>
				</div>
				</td>
				<td>
				<div class ="row">
						<div class="pull-right">
								<i>Kepada</i>
								<br>
								<strong><?=$get_pesanan['nama_customer'] ?></strong><br>
								<b>Alamat: </b><?=$get_pesanan['alamat_customer'] ?>, CA 13351<br>
								<b>No. Telpon:</b><?=$get_pesanan['notelp_customer'] ?><br>
								<b>Email:</b><?=$get_pesanan['email_customer'] ?>						
						</div>
				</div>
				</td>
			</thead>
			</table>						
		  </div>
		</div>
	</header>



	<!-- Wrap the content of your PDF inside a main tag -->
	<main>
		<div class="content-wrapper">
			<!-- Main content -->
			<section class="invoice">
				<!-- title row -->
				<div class="row">
					<div class="col-md-12">
						<div class="col-md-6 invoice-col" style="margin-left:100px">
							<b>Kode Order : <?=$get_pesanan['id_pesan'] ?>	</b><br>
							<b>Tanggal Masuk :<?=$get_pesanan['tanggal_pesan'] ?>	</b><br>
							<b>Tanggal Ambil :<?=$get_pesanan['tanggal_ambil'] ?>	</b><br>
						</div>
					</div>
		   		</div>
		   </section>
		</div>
	</main>
		
			<!-- Table row -->
			<div class="row">
				<div class="col-xs-12 table-responsive">
					<table class="table table-striped">
						<tbody>
							<tr>
								<td>Nama Produk </td>
								<td>:</td>
								<td><?=$get_pesanan['nama_produk'] ?></td>
							</tr>
							<tr>
								<td>Jenis Kain 
								<td>:</td>
								<td><?=$get_pesanan['nama_kain'] ?>	</td>
							</tr>
							<tr>
								<td>Warna Kain 
								<td>:</td>
								<td><?=$get_pesanan['warna'] ?></td>
							</tr>
							<tr>
								<td>Jenis Sablon
								<td>:</td>
								<td><?=$get_pesanan['nama_sablon'] ?></td>
							</tr>
							<tr>
								<td>Jumlah
								<td>:</td>
								<td><?=$get_pesanan['jumlah'] ?></td>
							</tr>
							<tr>
								<td>Upload Design
								<td>:</td>
								<td><img src="upload/pesanan/1.jpg" height="100" width="100"></td>
							</tr>
						</tbody>
					</table>
				</div>
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
					<?php foreach ($detail_pesanan as $data):?>
					<tr>
						<td><?=$data['ukuran'] ?></td>
						<td><?=$data['jekel'] ?></td>
						<td><?=$data['panjang'] ?></td>
						<td><?=$data['enam'] ?></td>
						<td><?=$data['tiga'] ?></td>
						<td><?=$data['pendek'] ?></td>
					</tr>
						<?php endforeach; ?>
					</table>
				</div>
			</div>
</body>


