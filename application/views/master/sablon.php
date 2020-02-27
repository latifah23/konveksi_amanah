<div class="content-wrapper">
	<div class="container">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				Data Riwayat Pesanan
			</h1>
		</section>

		<!-- Main content -->
		<section class="content">
			<div class="box box-primary">
				<!-- /.box-header -->
				<div class="box-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>No</th>
								<th>Kode Order</th>
								<th>customer</th>
								<th>Produk</th>
								<th>Pegawai</th>
								<th>Durasi Pemesanan</th>
								<th>Status</th>

							</tr>
						<!-- </thead>
						<tbody>
							<?php $i = 1 ?>
							<?php foreach ($pemesanan as $key => $value) : ?>
								<tr>
									<td><?= $i++ ?></td>
									<td><?= $value['kode_order'] ?></td>
									<td><?= $value['nama_customer'] ?></td>
									<td><?= $value['nama_produk'] ?></td>
									<td><?= $value['nama_pegawai'] ?></td>
									<td><?= $value['durasi_pemesanan'] ?></td>
									<td>
										<?php if ($value['status'] == 1) : ?>
											Selsai
										<?php else : ?>
											Proses
										<?php endif; ?>

									</td>
								</tr>
							<?php endforeach; ?> -->
						</tbody>
					</table>
				</div>
			</div>
		</section>
	</div>
</div>
