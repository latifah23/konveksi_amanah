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
								<th>Id Pesanan</th>
								<th>Customer</th>
								<th>Tanggal Pesan</th>
								<th>Tanggal Ambil</th>
								<th>Produk</th>
								<th>Status</th>
								<th>Tindakan</th>
							</tr>
						</thead>
						<tbody>
							<?php $i = 1 ?>
							<?php foreach ($pemesanan as $key => $value) : ?>
								<tr>
									<td><?= $i++ ?></td>
									<td><?= $value['id_pesan'] ?></td>
									<td><?= $value['nama'] ?></td>
									<td><?= $value['tanggal_pesan'] ?></td>
									<td><?= $value['tanggal_ambil'] ?></td>
									<td><?= $value['produk'] ?></td>
									<td><?= $value['status'] ?></td>
									<td>
										<!-- Button trigger modal -->
										<a href="<?= base_url('/riwayat/detail_riwayat/') . $value['id_pesan'] ?>" class="btn btn-warning btn-xs"><i class="fa fa-fw fa-search"></i></a>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</section>
	</div>
</div>
