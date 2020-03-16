<div class="content-wrapper">
	<div class="container">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				Data customer
				<button type="button"  class="btn btn-block btn-primary" style="width:auto; float:right;" data-toggle="modal" data-target="#modalCustomer">
					Tambah Customer
				</button>
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
                                   <th scope="row">Nama</th>
                                   <td><?= $customer['nama'] ?></td>
                              </tr>
                              <tr>
                                   <th scope="row">2</th>
                                   <td>Jacob</td>
                              </tr>
                              <tr>
                                   <th scope="row">3</th>
                                   <td>Larry</td>
                              </tr>
                         </tbody>
                         </table>
				</div>
			</div>
		</section>
	</div>
</div>
