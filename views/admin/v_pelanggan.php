<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Pelanggan</title>

		<!-- BEGIN META -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="M.YogaSonyaAgsar">
		<meta name="author" content="M.YogaSonyaAgsar">
		<meta name="description" content="M.YogaSonyaAgsar">
		<link rel="shorcut icon" href="<?php echo URL; ?>assets/admin/logo.png">
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
		<!-- END STYLESHEETS -->

		
		
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
							<h2><span class="fa fa-users"></span> Data Pelanggan</h2>
					</div>
						
				</section>

				<!-- BEGIN TABLE HOVER -->
				<section class="style-default-bright" style="margin-top:0px;">
					
					
					<div class="section-body">	
						<div class="row">
							
							<table class="table table-hover" id="datatable1">
							<thead>
								<tr>
									
									<th>Nama</th>
									<th>Jenis Kelamin</th>
									<th>Alamat</th>
									<th>Phone</th>
									<th>Email</th>
									<th class="text-right">Actions</th>
								</tr>
							</thead>
							<tbody>
							<?php 
									
									foreach ($this->list_pelanggan as $x) {
										$no_booker=$x['bookerNICNo'];
										$nama_booker=$x['bookerName'];
										$gender=$x['jenis_kelamin'];
										$alamat=$x['alamat'];
										$phone=$x['bookerMNo'];
										$email=$x['email'];
									
								?>
								<tr>
									<td><?php echo $nama_booker; ?></td>
									<td><?php echo $gender; ?></td>
									<td><?php echo $alamat; ?></td>
									<td><?php echo $phone; ?></td>
									<td><?php echo $email; ?></td>
									<td class="text-right">
										<a href="#" class="btn btn-icon-toggle" title="Lihat Detail" data-toggle="modal" data-target="#modal_edit_pengguna<?php echo $no_booker; ?>"><i class="fa fa-eye"></i></a>
										
										<a href="#" class="btn btn-icon-toggle" title="Hapus Pelanggan" data-toggle="modal" data-target="#modal_hapus_pengguna<?php echo $no_booker; ?>"><i class="fa fa-trash-o"></i></a>
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
							<span class="opacity-75">&copy; <?php echo date('Y');?></span> <strong>E-Travel CV.PURNAMA INDAH TRAVEL</strong>
						</small>
					</div>
				</div><!--end .menubar-scroll-panel-->
			</div><!--end #menubar-->
			<!-- END MENUBAR -->

		</div><!--end #base-->
		<!-- END BASE -->

			

			<!-- ============ MODAL EDIT PENGGUNA =============== -->
			<?php 
									
									foreach ($this->list_pelanggan as $x) {
										$no_booker=$x['bookerNICNo'];
										$nama_booker=$x['bookerName'];
										$gender=$x['jenis_kelamin'];
										$alamat=$x['alamat'];
										$phone=$x['bookerMNo'];
										$email=$x['email'];
										
										$foto_ktp=$x['foto_ktp'];
									
								?>
			<div class="modal fade" id="modal_edit_pengguna<?php echo $no_booker; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
			    <div class="modal-dialog">
			    <div class="modal-content">
			    <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			        <h3 class="modal-title" id="myModalLabel">Detail Pelanggan</h3>
			    </div>
			    <form class="form-horizontal" role="form" method="post" action="" enctype="multipart/form-data">
			        <div class="modal-body">
						<style type="text/css">
							.busdataarea{
						    border-style: solid;  	
						    width: 260px;
						    margin-left: 160px;
						    margin-bottom: 30px;
						    margin-top: 20px;
						   
							}
						</style>
								
									<div class="text-center">
										<h3><b>FOTO KTP</b></h3>
									<div class="busdataarea">	
									  <a href="<?php echo URL;?>assets/admin/img/booker/<?php echo $foto_ktp;?>" target="_blank"><img src="<?php echo URL;?>assets/admin/img/booker/<?php echo $foto_ktp;?>" class="rounded" alt="Foto KTP" width="240px"></a>
									</div>
									</div>
									
								<table>
								<tr>
									<td style="width:90px;">Nama</td>
									<td>:</td>
									<td style="width:160px;"><?php echo $nama_booker; ?></td>

									<td style="width:90px;">Jenis Kelamin</td>
									<td>:</td>
									<td><?php echo $gender; ?></td>
								</tr>
								<tr>
									<td style="width:90px;">Alamat</td>
									<td>:</td>
									<td style="width:160px;"><?php echo $alamat; ?></td>
									<td style="width:90px;">Kontak</td>
									<td>:</td>
									<td><?php echo $phone; ?></td>
								</tr>
								<tr>
									<td style="width:90px;">Email</td>
									<td>:</td>
									<td><?php echo $email; ?></td>
								</tr>
							</table>			
									
			        </div>
			        <div class="modal-footer">
			            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
			        </div>
			    </form>
			    </div>
			    </div>
			</div>
		<?php } ?>

			<!-- ============ MODAL HAPUS PENGGUNA =============== -->
			<?php 
									
									foreach ($this->list_pelanggan as $x) {
										$no_booker=$x['bookerNICNo'];
										$nama_booker=$x['bookerName'];
										$gender=$x['jenis_kelamin'];
										$alamat=$x['alamat'];
										$phone=$x['bookerMNo'];
										$email=$x['email'];
										
									
								?>
			<div class="modal fade" id="modal_hapus_pengguna<?php echo $no_booker; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
			    <div class="modal-dialog">
			    <div class="modal-content">
			    <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			        <h3 class="modal-title" id="myModalLabel">Hapus Pelanggan</h3>
			    </div>
			    <form class="form-horizontal" role="form" method="post" action="<?php echo URL; ?>admin/hapus_pelanggan" enctype="multipart/form-data">
			        <div class="modal-body">
									<div class="form-group">
										<label for="regular13" class="col-sm-2 control-label"></label>
										<div class="col-sm-8">
											<input type="hidden" name="kode" value="<?php echo $no_booker; ?>">
											<input type="hidden" name="nama" value="<?php echo $nama_booker; ?>">
											<p>Apakah Anda yakin mau menghapus data <b><?php echo $nama_booker; ?></b> ?</p>
										</div>
									</div>
	
			        </div>
			        <div class="modal-footer">
			            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
			            <button class="btn btn-primary" type="submit"><span class="fa fa-trash"></span> Hapus</button>
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
		<script src="<?php echo URL; ?>assets/adminjs/source/AppVendor.js"></script>
		<script src="<?php echo URL; ?>assets/admin/js/core/DemoTableDynamic.js"></script>
		<!-- END JAVASCRIPT -->

	</body>
</html>
