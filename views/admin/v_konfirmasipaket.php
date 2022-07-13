<!DOCTYPE html>

<html lang="en">
	<head>
		<title>Konfirmasi Paket</title>

		<!-- BEGIN META -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="M.YogaSonyaAgsar">
		<meta name="author" content="M.YogaSonyaAgsar">
		<meta name="description" content="M.YogaSonyaAgsar">
		<link rel="shorcut icon" href="<?php echo URL; ?>assets/admin/img/logo.png">
		<!-- END META -->

		<!-- BEGIN STYLESHEETS -->
		<link href="<?php echo URL; ?>assets/admin/style-material.css" rel='stylesheet' type='text/css'/>
		<link type="text/css" rel="stylesheet" href="<?php echo URL; ?>assets/admin/css/bootstrap.css" />
		<link type="text/css" rel="stylesheet" href="<?php echo URL; ?>assets/admin/font-awesome/css/font-awesome.css" />
		<link type="text/css" rel="stylesheet" href="<?php echo URL; ?>assets/admin/css/materialadmin.css" />
		<link type="text/css" rel="stylesheet" href="<?php echo URL; ?>assets/admin/css/material-design-iconic-font.min.css" />
		<link type="text/css" rel="stylesheet" href="<?php echo URL; ?>assets/admin/css/DataTables/jquery.dataTables.css" />
		<link type="text/css" rel="stylesheet" href="<?php echo URL; ?>assets/admin/css/DataTables/extensions/dataTables.colVis.css" />
		<link type="text/css" rel="stylesheet" href="<?php echo URL; ?>assets/admin/css/DataTables/extensions/dataTables.tableTools.css" />
		
	</head>
	<body class="menubar-hoverable header-fixed ">

		<?php require "views/admin/v_header.php"; ?>

		<!-- BEGIN BASE-->
		<div id="base">

			<!-- BEGIN OFFCANVAS LEFT -->
			<div class="offcanvas">

			</div><!--end .offcanvas-->
			<!-- END OFFCANVAS LEFT -->

			<!-- BEGIN CONTENT-->
			<div id="content">
				<section>
					<div class="section-header">
							<h2><span class="fa fa-exchange"></span> Data Konfirmasi Paket</h2>
					</div>
						
				</section>

				<!-- BEGIN TABLE HOVER -->
				<section class="style-default-bright" style="margin-top:0px;">
					
					<div class="section-body">	
						<div class="row">
							
							<table class="table table-hover" id="datatable1">
							<thead>
								<tr>
									<th>Tanggal</th>
									<th>No Resi</th>
									<th>Nama</th>
									<th>Bank</th>
									<th>Total</th>
									<th>Jumlah Transfer</th>
									<th>Bukti Transfer</th>	
									<th class="text-right">Actions</th>
								</tr>
							</thead>
							<tbody>
							<?php 
									
								foreach ($this->list_konfirmasipaket1 as $a) {
									$id=$a['konfirmasi_id'];
									$invoice=$a['konfirmasi_invoice'];
									$nama=$a['konfirmasi_nama'];	
									$tanggal=$a['tanggal'];
									$bank=$a['konfirmasi_bank'];
									$jumlah=$a['konfirmasi_jumlah'];
									$total=$a['inv_total'];	
									$bukti=$a['konfirmasi_bukti'];
									
								?>
								<tr>
									<td><?php echo $tanggal;?></td>
									<td><a href="<?php echo URL;?>admin/order_detailpaket/<?php echo $invoice;?>"><?php echo $invoice;?></a></td>
									<td><?php echo $nama;?></td>
									<td><?php echo $bank;?></td>
									<td><?php echo number_format($total);?></td>
									<td><?php echo number_format($jumlah);?></td>
									<td><a href="<?php echo URL; ?>assets/admin/img/<?php echo $bukti;?>" target="_blank">Lihat Bukti Transfer</a></td>
									<td class="text-right">
										<a href="#" class="btn btn-icon-toggle" title="Konfimasi Selesai" data-toggle="modal" data-target="#modal_edit_pengguna<?php echo $id;?>"><i class="fa fa-check"></i></a>
										<a href="#" class="btn btn-icon-toggle" title="Konfirmasi Batal" data-toggle="modal" data-target="#modal_hapus_pengguna<?php echo $id;?>"><i class="fa fa-close"></i></a>
									</td>
								</tr>

						<?php } ?>
								
							</tbody>
						  </table>

						</div>
					</div><!--end .section-body -->

					
				</section>
				<!-- END TABLE HOVER -->

				

			</div><!--end #content-->
			<!-- END CONTENT -->

			<!-- BEGIN MENUBAR-->
			<div id="menubar" class="menubar-inverse ">
				<div class="menubar-fixed-panel">
					<div>
						<a class="btn btn-icon-toggle btn-default menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
							<i class="fa fa-bars"></i>
						</a>
					</div>
					
				</div>
				<div class="menubar-scroll-panel">

					<?php require "views/admin/v_menu.php"; ?>

					<div class="menubar-foot-panel">
						<small class="no-linebreak hidden-folded">
							<span class="opacity-75">&copy; <?php echo date('Y');?></span> <strong>CV.Purnama Indah Travel</strong>
						</small>
					</div>
				</div><!--end .menubar-scroll-panel-->
			</div><!--end #menubar-->
			<!-- END MENUBAR -->


		</div><!--end #base-->
		<!-- END BASE -->

			

			<!-- ============ MODAL EDIT PENGGUNA =============== -->
			

			<?php 
									
								foreach ($this->list_konfirmasipaket1 as $a) {
									$id=$a['konfirmasi_id'];
									$invoice=$a['konfirmasi_invoice'];
									$nama=$a['konfirmasi_nama'];	
									$tanggal=$a['tanggal'];
									$bank=$a['konfirmasi_bank'];
									$jumlah=$a['konfirmasi_jumlah'];
									$total=$a['inv_total'];	
									$bukti=$a['konfirmasi_bukti'];
									
								?>
			
			<div class="modal fade" id="modal_edit_pengguna<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
			    <div class="modal-dialog">
			    <div class="modal-content">
			    <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			        <h3 class="modal-title" id="myModalLabel">Konfirmasi</h3>
			    </div>
			    <form class="form-horizontal" role="form" method="post" action="<?php echo URL; ?>admin/update_konfirmasipaket" enctype="multipart/form-data">
		
			        <div class="modal-body">
			        	<input type="hidden" name="kode" value="<?php echo $id;?>">
			        	<input type="hidden" name="no_invoice" value="<?php echo $invoice;?>">
									
							<div class="alert alert-info">Apakah Anda yakin bukti transfer <b><?php echo $invoice?></b> ini Valid ?</div>
									
			        </div>
			        <div class="modal-footer">
			            <button class="btn" data-dismiss="modal" aria-hidden="true">Tidak</button>
			            <button class="btn btn-primary" type="submit"> Ya</button>
			        </div>
			    </form>
			    </div>
			    </div>
			</div>
			<?php } ?>

			<!-- ============ MODAL HAPUS PENGGUNA =============== -->

			<?php 
									
								foreach ($this->list_konfirmasipaket1 as $a) {
									$id=$a['konfirmasi_id'];
									$invoice=$a['konfirmasi_invoice'];
									$nama=$a['konfirmasi_nama'];	
									$tanggal=$a['tanggal'];
									$bank=$a['konfirmasi_bank'];
									$jumlah=$a['konfirmasi_jumlah'];
									$total=$a['inv_total'];	
									$bukti=$a['konfirmasi_bukti'];
									
								?>
			
			<div class="modal fade" id="modal_hapus_pengguna<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
			    <div class="modal-dialog">
			    <div class="modal-content">
			    <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			        <h3 class="modal-title" id="myModalLabel">Hapus Konfirmasi</h3>
			    </div>
			    <form class="form-horizontal" role="form" method="post" action="<?php echo URL;?>admin/batal_konfirmasipaket" enctype="multipart/form-data">
			        <div class="modal-body">
			        <div class="alert alert-danger">Apakah Anda yakin bahwa bukti transfer <b></b> tidak Valid ?</div>
									<div class="form-group">
										<label for="regular13" class="col-sm-2 control-label"></label>
										<div class="col-sm-8">
											<input type="hidden" name="kode" value="<?php echo $id;?>">
											<input type="hidden" name="no_invoice" value="<?php echo $invoice;?>">
											
										</div>
									</div>
	
			        </div>
			        <div class="modal-footer">
			            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
			            <button class="btn btn-primary" type="submit"> Ya</button>
			        </div>
			    </form>
			    </div>
			    </div>
			</div>
			<?php }?>

		<!-- BEGIN JAVASCRIPT -->
		<script src="<?php echo URL; ?>assets/admin/js/jquery/jquery-1.11.2.min.js"></script>
		<script src="<?php echo URL; ?>assets/admin/js/jquery/jquery-migrate-1.2.1.min.js"></script>
		<script src="<?php echo URL; ?>assets/admin/js/bootstrap/bootstrap.min.js"></script>
		<script src="<?php echo URL; ?>assets/admin/js/spin/spin.min.js"></script>
		<script src="<?php echo URL; ?>assets/admin/js/autosize/jquery.autosize.min.js"></script>
		<script src="<?php echo URL; ?>assets/admin/js/DataTables/jquery.dataTables.min.js"></script>
		<script src="<?php echo URL; ?>assets/admin/js/DataTables/extensions/ColVis/js/dataTables.colVis.min.js"></script>
		<script src="<?php echo URL; ?>assets/admin/js/DataTables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
		<script src="<?php echo URL; ?>assets/admin/js/nanoscroller/jquery.nanoscroller.min.js"></script>
		<script src="<?php echo URL; ?>assets/admin/js/source/App.js"></script>
		<script src="<?php echo URL; ?>assets/admin/js/source/AppNavigation.js"></script>
		<script src="<?php echo URL; ?>assets/admin/js/source/AppOffcanvas.js"></script>
		<script src="<?php echo URL; ?>assets/admin/js/source/AppCard.js"></script>
		<script src="<?php echo URL; ?>assets/admin/js/source/AppForm.js"></script>
		<script src="<?php echo URL; ?>assets/admin/js/source/AppNavSearch.js"></script>
		<script src="<?php echo URL; ?>assets/admin/js/source/AppVendor.js"></script>
		<script src="<?php echo URL; ?>assets/admin/js/core/DemoTableDynamic.js"></script>
		<!-- END JAVASCRIPT -->

	</body>
</html>
