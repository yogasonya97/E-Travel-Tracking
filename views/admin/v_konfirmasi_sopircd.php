<!DOCTYPE html>

<html lang="en">
	<head>
		<title>Konfirmasi Data Pelanggan</title>

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
							<h2><span class="fa fa-exchange"></span> Konfirmasi Pengajuan Sopir Cadangan</h2>
					</div>
						
				</section>

				<!-- BEGIN TABLE HOVER -->
				<section class="style-default-bright" style="margin-top:0px;">
					
					<div class="section-body">	
						<div class="row">
							
							<table class="table table-hover" id="datatable1">
							<thead>
								<tr>
									<th>Tanggal Konfirmasi</th>
									<th>Nama Sopir Utama</th>
									<th>Nama Sopir Cadangan</th>
									<th>No.Hp Sopir Cadangan</th>
									<th>No.Plat Mobil Cadangan</th>
									<th>Model Mobil Cadangan</th>
									<th class="text-right">Actions</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($this->list_konfirmasi_sopircd as $spcd) {
											$userName_cadangan= $spcd['userName_cadangan'];
											$tgl_konfirmasi=$spcd['tgl_konfirmasi_sopircd'];
											$nama_sopir_utama=$spcd['nm_sopir'];
											$nama_sopircadangan=$spcd['nama_sopircadangan'];
											$phone_cadangan=$spcd['phone_cadangan'];
											$no_mobil_cadangan=$spcd['no_mobil_cadangan'];
											$model_mobil_cadangan=$spcd['model_mobil_cadangan'];

								 ?>
								<tr>
									<td><?php echo $tgl_konfirmasi;?></td>
									<td><?php echo $nama_sopir_utama;?></td>
									<td><?php echo $nama_sopircadangan;?></td>
									<td><?php echo $phone_cadangan;?></td>
									<td><?php echo $no_mobil_cadangan;?></td>
									<td><?php echo $model_mobil_cadangan;?></td>
									
									<td class="text-right">
										<a href="#" class="btn btn-icon-toggle" title="Konfimasi Selesai" data-toggle="modal" data-target="#modal_edit_pengguna<?php echo $userName_cadangan;?>"><i class="fa fa-check"></i></a>
										<a href="#" class="btn btn-icon-toggle" title="Konfirmasi Batal" data-toggle="modal" data-target="#modal_hapus_pengguna<?php echo $userName_cadangan;?>"><i class="fa fa-close"></i></a>
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
			<?php foreach ($this->list_konfirmasi_sopircd as $spcd) {
											$id_sopir_utama= $spcd['id_sopir_utama'];
											$userName_cadangan= $spcd['userName_cadangan'];
											$tgl_konfirmasi=$spcd['tgl_konfirmasi_sopircd'];
											$nama_sopir_utama=$spcd['nm_sopir'];
											$nama_sopircadangan=$spcd['nama_sopircadangan'];
											$phone_cadangan=$spcd['phone_cadangan'];
											$no_mobil_cadangan=$spcd['no_mobil_cadangan'];
											$model_mobil_cadangan=$spcd['model_mobil_cadangan'];

								 ?>

			
			
			<div class="modal fade" id="modal_edit_pengguna<?php echo $userName_cadangan;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
			    <div class="modal-dialog">
			    <div class="modal-content">
			    <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			        <h3 class="modal-title" id="myModalLabel">Konfirmasi Perubahan Data</h3>
			    </div>
			    <form class="form-horizontal" role="form" method="post" action="<?php echo URL;?>admin/setuju_konfirmasi_sopircd" enctype="multipart/form-data">
		
			        <div class="modal-body">
			        	<input type="hidden" name="id_sopir_utama" value="<?php echo $id_sopir_utama;?>">
			        	<input type="hidden" name="userName_cadangan" value="<?php echo $userName_cadangan;?>">
			        	<input type="hidden" name="no_mobil_cadangan" value="<?php echo $no_mobil_cadangan;?>">
			        	<input type="hidden" name="model_mobil_cadangan" value="<?php echo $model_mobil_cadangan;?>">
			        				
							<div class="alert alert-info">Apakah Anda yakin Data Akun Sopir Cadangan yang diajukan <?php echo $nama_sopir_utama;?> ini Valid ?</div>
									
			        </div>
			        <div class="modal-footer">
			            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
			            <button class="btn btn-primary" type="submit"> Ya</button>
			        </div>
			    </form>
			    </div>
			    </div>
			</div>
			<?php } ?>

			<!-- ============ MODAL HAPUS PENGGUNA =============== -->
			<?php foreach ($this->list_konfirmasi_sopircd as $spcd) {
											$id_sopir_utama= $spcd['id_sopir_utama'];
											$userName_cadangan= $spcd['userName_cadangan'];
											$tgl_konfirmasi=$spcd['tgl_konfirmasi_sopircd'];
											$nama_sopir_utama=$spcd['nm_sopir'];
											$nama_sopircadangan=$spcd['nama_sopircadangan'];
											$phone_cadangan=$spcd['phone_cadangan'];
											$no_mobil_cadangan=$spcd['no_mobil_cadangan'];
											$model_mobil_cadangan=$spcd['model_mobil_cadangan'];

								 ?>
			
			<div class="modal fade" id="modal_hapus_pengguna<?php echo $userName_cadangan;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
			    <div class="modal-dialog">
			    <div class="modal-content">
			    <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			        <h3 class="modal-title" id="myModalLabel">Hapus Konfirmasi Data</h3>
			    </div>
			    <form class="form-horizontal" role="form" method="post" action="<?php echo URL;?>admin/tolak_konfirmasi_sopircd" enctype="multipart/form-data">
			        <div class="modal-body">
			        <div class="alert alert-danger">Apakah Anda yakin bahwa data  ini tidak Valid ? </div>
									<div class="form-group">
										<label for="regular13" class="col-sm-2 control-label"></label>
										<div class="col-sm-8">
											<input type="hidden" name="userName_cadangan" value="<?php echo $userName_cadangan;?>">
											
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
			<?php } ?>

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
