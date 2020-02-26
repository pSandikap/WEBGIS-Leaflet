<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
</head>

<body id="page-top">

	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<!--<a href="<?php //echo site_url('admin/lokasi/add') ?>"><i class="fas fa-plus"></i> Add New</a> -->
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<nav class="navbar navbar-light bg-light float-right">
							  <form class="form-inline" action="<?= site_url('admin/history/search') ?>" method="POST" >
							    <input class="form-control mr-sm-2" type="search" placeholder="Search" name="search" aria-label="Search">
							    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
							  </form>
							</nav>
						<table class="table table-hover" id="dataTable2" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Kode Drian</th>
										<th>User</th>
										<th>No.Rekening</th>
										<th>Biaya</th>
										<th>Jatuh Tempo</th>
										<th>Tanggal Ditetapkan</th>
										<th>Selisih</th>
										<th>Updated At</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($history as $history): ?>
									<tr>
										<td width="120">
											<?php echo $history->drian ?>
										</td>
										<td width="240">
											<?php echo $history->penyewa ?>
										</td>																	
										<td>
											<?php echo $history->no_rek ?>
										</td>																				
										<td>
											<?php echo $history->biaya ?>
										</td>										
										<td width="240">
											<?php echo $history->jatuh_tempo ?>
										</td>
										<td width="240">
											<?php echo $history->ditetapkan ?>
										</td>
										<td width="1400">
											<img src="<?= base_url() ?>assets/upload/transaksi/<?= $history->bukti ?>" style="width: 15%" >
										</td>
										<td width="1400">
											<?= $history->update_at; ?>
										</td>


										<!--<td width="120">
											<img src="<?php echo base_url('uploads/transaksi/'.$history->pks) ?>" width="64" />
										</td>-->
										<!-- <td width="60">
											 <a href="<?php echo site_url('admin/transaksi/edit_page/'.$history->id) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Update</a>
											<a onclick="deleteConfirm('<?php echo site_url('admin/transaksi/delete/'.$history->id) ?>')"
											 href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
										</td> -->
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
				</div>

			</div>
			<!-- /.container-fluid -->

			<!-- Sticky Footer -->
			<?php $this->load->view("admin/_partials/footer.php") ?>

		</div>
		<!-- /.content-wrapper -->

	</div>
	<!-- /#wrapper -->


	<?php $this->load->view("admin/_partials/scrolltop.php") ?>
	<?php $this->load->view("admin/_partials/modal.php") ?>

	<?php $this->load->view("admin/_partials/js.php") ?>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.0/js/dataTables.buttons.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.print.min.js"></script>
	<script>
		$(document).ready(function() {
			var t = $("#dataTable2").DataTable({
				'paging' : true,
				'lengthChange' :false,
				'searching' : false,
				'ordering' : true,
				'info' : true,
				'autoWidth' : false,
				'dom'	: 'Bfrtip',
				'buttons':[
					'print'
				]

			})
		})
		function deleteConfirm(url){
			$('#btn-delete').attr('href', url);
			$('#deletemodal').modal();
		}
	</script>

</body>

</html>