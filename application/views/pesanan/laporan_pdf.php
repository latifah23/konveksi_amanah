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
						From
						<br>
						<strong><?=$get_pesanan['nama_pegawai']?></strong><br>
						Yogyakarta, CA 94107<br>
						Phone: (804) 123-5432<br>
						Email: ondozwahyudi@gmail.com
						
					</div>
				</td>
				
				<td>
					<!-- /.col -->
					<div class="col-sm-5 invoice-col">
						To
						<br>
						<strong><?=$get_pesanan['nama_customer'] ?></strong><br>
						<?=$get_pesanan['alamat_customer'] ?>, CA 13351<br>
						<b>Phone:</b><?=$get_pesanan['notelp_customer'] ?><br>
						<b>Email:</b><?=$get_pesanan['email_customer'] ?>						
					</div>
				</td>
				<td >

					<div class="col-sm-2 invoice-col" style="margin-left:100px">
						<b>Kode Order : </b><br>
						<br>
						<b>Order ID:</b> 4F3S8J<br>
						<b>Payment Due:</b> 2/22/2014<br>
						<b>Account:</b> 968-34567
					</div>
				</td>
			</thead>
					
				</div>
			</table>
		   </div>
		 </div>
	
		
			<!-- Table row -->
			<div class="row">
			<div class="col-xs-12 table-responsive">
				<table class="table table-striped">
				<thead>
					<tr>
						<th>Produk</th>
						<th>Jumlah</th>
						<th>Harga @</th>
						<th>Total</th>
					</tr>
				</thead>
				<tbody>
				<tr>
					<td>Call of Duty</td>
					<td>1</td>
					<td>Rp 5000</td>
					<td>Rp 30.000</td>
				</tr>
				<tr>
					<td>Need for Speed IV</td>
					<td>1</td>
					<td>Rp 2000</td>
					<td>Rp 50.000</td>
				</tr>
				<tr>
					<td>Monsters DVD</td>
					<td>1</td>
					<td>Rp 3000</td>>
					<td>Rp 60.000</td>
				</tr>
				<tr>
					<td>Grown Ups Blue Ray</td>
					<td>1</td>
					<td>Rp 4000</td>
					<td>Rp 70.000</td>
				</tr>
				</tbody>
				</table>
			</div>
			<!-- /.col -->
			</div>
			<!-- /.row -->
		
		 <div class="row">		   <!-- /.col -->
		   <div class="col-xs-6 " style=" text-align: right;">
			<p class="lead" >Amount Due 2/22/2014</p>
				<b style="margin-right:100px">Subtotal: </b>
				$250.30
				<br>			 
				<b style="margin-right:110px">Total: </b>
				$10.34
				<br>
			</div>
		   </div>
		   <!-- /.col -->
		
		 <!-- /.row -->
	</div>
        </main>
    </body>
</html>

	
