<html>
    <head>
        <style>
		  body{
			font-family: Arial, Helvetica, sans-serif;
		  }
            @page {
                margin: 100px 25px;
            }

            header {
                position: fixed;
                top: -60px;
                left: 0px;
                right: 0px;
                height: 50px;

                /** Extra personal styles **/
                /* background-color: #03a9f4; */
                color: black;
                text-align: left;
                line-height: 35px;
            }

            footer {
                position: fixed; 
                bottom: -60px; 
                left: 0px; 
                right: 0px;
                height: 50px; 

                /** Extra personal styles **/
                background-color: #03a9f4;
                color: white;
                text-align: center;
                line-height: 35px;
            }
		.pull-right{
			position: fixed;
                top: -60px;
                left: 0px;
                right: 0px;
                height: 50px;

                /** Extra personal styles **/
                /* background-color: #03a9f4; */
                color: black;
                text-align: right;
                line-height: 35px;
		  }
		  .pull-left{
			position: fixed;
                top: -60px;
                left: 0px;
                right: 0px;
                height: 50px;

                /** Extra personal styles **/
                /* background-color: #03a9f4; */
                color: black;
                text-align: left;
                line-height: 35px;
		  } 
        </style>
    </head>
    <body>
        <!-- Define header and footer blocks before your content -->
		<header>
			<div class="row">
				<div class="col-xs-12">
					<h2>
						<small class="pull-left">Amanah Collection</small>	
					</h2>				
					<small class="pull-right">Date: <?= date('d-M-Y') ?></small>	
					<hr style="margin-top:10px">	
				</div>
			</div>
		</header>

        <footer>
            Copyright &copy; <?php echo date("Y");?> 
        </footer>

        <!-- Wrap the content of your PDF inside a main tag -->
        <main>
	   <div class="content-wrapper">	
	    <!-- Main content -->
	    <section class="invoice">
		 <!-- title row -->
		 <div class="row">
		   <div class="col-xs-12">
			
		   </div>
		   <!-- /.col -->
		 </div>
		 <!-- info row -->
		 <div class="row">
		   <div class="col-xs-12 table-responsive">
			<table class="table table-striped">
			<thead>
				<td>
					<div class="col-sm-5 invoice-col">
						Dari
						<br>
						<strong>Amanah Collection</strong><br>
						Jl. Bawang no.7 Pulisen Boyolali<br>
						Phone: 081329380882<br>
						Email: Sriyadi.byl@gmail.com
						
					</div>
				</td>
				
				<td>
					<!-- /.col -->
					<div class="col-sm-5 invoice-col">
		  				Kepada
						<br>
						<strong><?=$get_pesanan['nama_customer'] ?></strong><br>
						<b>Alamat: </b><?=$get_pesanan['alamat_customer'] ?>, CA 13351<br>
						<b>No. Telpon:</b><?=$get_pesanan['notelp_customer'] ?><br>
						<b>Email:</b><?=$get_pesanan['email_customer'] ?>						
					</div>
				</td>
				<td >
					<div class="col-sm-2 invoice-col" style="margin-left:100px">
						<b>Kode Order : <?=$get_pesanan['id_pesan'] ?>	</b><br>
						<br>
						<b>Tanggal Masuk :<?=$get_pesanan['tanggal_pesan'] ?>	</b><br>
						<b>Tanggal Ambil :<?=$get_pesanan['tanggal_ambil'] ?>	</b><br>
					</div>
				</td>
			</thead>
					
				</div>
			</table>
		   </div>
		 </div>
	<br>
		
			<!-- Table row -->
			<div class="row">
			<div class="col-xs-12 table-responsive">
				<table class="table table-striped">
				<tbody>
				<tr>
					<td>Nama Produk :<?=$get_pesanan['nama_produk'] ?>	</td>
				</tr>
				<tr>
					<td>Jenis Kain : <?=$get_pesanan['nama_kain'] ?>	</td>
				</tr>
				<tr>
					<td>Warna Kain : <?=$get_pesanan['warna'] ?></td>
				</tr>
				<tr>
					<td>Jenis Sablon : <?=$get_pesanan['nama_sablon'] ?></td>
				</tr>
				<tr>
					<td>Jumlah : <?=$get_pesanan['jumlah'] ?></td>
				</tr>
				<tr>
					<td>Upload Design : <img src="<?= base_url('upload/pesanan/1.jpg')?>"></td>
				</tr>
				</tbody>
				</table>
			</div>
			<!-- /.col -->
			</div>
			<!-- /.row -->

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
				</tbody>
				</table>
			</div>
			<!-- /.col -->
			</div>
			<!-- /.row -->
		
		   <!-- /.col -->
		
		 <!-- /.row -->
	</div>
        </main>
    </body>
</html>

	
