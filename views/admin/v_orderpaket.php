<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Orders Paket</title>

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
							<h2><span class="fa fa-cart-arrow-down"></span> Data Order Paket</h2>
					</div>
						
				</section>

				<!-- BEGIN TABLE HOVER -->
				<section class="style-default-bright" style="margin-top:0px;">
			
					
					<div class="section-body">	
						<div class="row">
							
							<table class="table table-hover" id="datatable1">
							<thead>
								<tr>
									<th>No Resi</th>
									<th>Tanggal Kirim</th>
									<th>Pelanggan</th>
									<th>Total</th>
									<th>Foto Barang</th>
									<th>Metode Pembayaran</th>
									<th>Status Order</th>	
									<th class="text-right">Actions</th>
								</tr>
							</thead>
							<tbody>
						<?php 
									
									foreach ($this->list_orderpaket as $x) {
										$no_booking=$x['no_resi'];
										
										$tgl_booking=$x['tgl_kirim'];
										$plg=$x['bookerName'];
										$sts=$x['payment_status'];
										$metode_bayar=$x['metode_bayar'];
										$total=$x['biaya_pengiriman'];
										
										$jurusan=$x['jurusan'];
										$titik_jemput=$x['titik_jemput'];
										$alamat_jemput=$x['alamat_jemput'];

										$nm_penerima=$x['nama_penerima'];
										$hp_penerima=$x['telepon_penerima'];
										$alamat_penerima=$x['alamat_penerima'];
										$fotobarang=$x['foto_barang'];

										$rek_id=$x['rek_id'];
										$rek_no=$x['rek_no'];
										$rek_nama=$x['rek_nama'];
										$rek_bank=$x['rek_bank'];
										$rek_cabang=$x['rek_cabang'];
										$rek_logo=$x['rek_logo'];
									
								?>
								<tr>
									<td><?php echo $no_booking; ?></td>
									
									<td><?php echo $tgl_booking; ?></td>
									<td><?php echo $plg; ?></td>
									<td>Rp <?php echo $total; ?>,-</td>
									<td><a href="<?php echo URL; ?>assets/admin/img/<?php echo $fotobarang;?>" target="_blank">Lihat Foto Barang</a></td>
										<td><?php if($metode_bayar=='COD'){
											 echo "Cash(COD)";
											}else {
											 echo "Transfer Bank ".$rek_bank;
											} ?>
										</td>
							
										<td><?php 
										if ($sts=="P"){
											echo "Menunggu Konfirmasi";
										}
										else if ($sts=="N") {
											echo "Konfirmasi Telah Ditolak";
										}
										else if ($sts=="Ok") {
											echo "Telah Di Konfirmasi";
										}else{
											echo $sts;
										}

										 ?></td>
									
									
									<td class="text-right">
										<a href="#" class="btn btn-icon-toggle" title="Update Status Order" data-toggle="modal" data-target="#modal_edit_pengguna<?php echo $no_booking;?>"><i class="fa fa-pencil"></i></a>
										<a href="#" class="btn btn-icon-toggle" title="Detail Order" data-toggle="modal" data-target="#modal_detail<?php echo $no_booking;?>"><i class="fa fa-eye"></i></a>
										<a href="#" class="btn btn-icon-toggle" title="Batalkan Order" data-toggle="modal" data-target="#modal_hapus_pengguna<?php echo $no_booking; ?>"><i class="fa fa-close"></i></a>
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
							<span class="opacity-75">&copy; <?php echo date('Y');?></span> <strong>CV. Purnama Indah Travel</strong>
						</small>
					</div>
				</div><!--end .menubar-scroll-panel-->
			</div><!--end #menubar-->
			<!-- END MENUBAR -->

		</div><!--end #base-->
		<!-- END BASE -->


		<!-- ============ MODAL EDIT PENGGUNA =============== -->
			<?php 
									
									foreach ($this->list_orderpaket as $x) {
										$jenis=$x['jenis_barang'];
										$no_booking=$x['no_resi'];
										$tgl_booking=$x['tgl_kirim'];
										$plg=$x['bookerName'];
										$sts=$x['payment_status'];
										$metode_bayar=$x['metode_bayar'];
										$total=$x['biaya_pengiriman'];

										$titik_jemput=$x['titik_jemput'];
										$alamat_jemput=$x['alamat_jemput'];

										$nm_penerima=$x['nama_penerima'];
										$hp_penerima=$x['telepon_penerima'];
										$alamat_penerima=$x['alamat_penerima'];
										$fotobarang=$x['foto_barang'];

										$jurusan=$x['jurusan'];

										$rek_id=$x['rek_id'];
										$rek_no=$x['rek_no'];
										$rek_nama=$x['rek_nama'];
										$rek_bank=$x['rek_bank'];
										$rek_cabang=$x['rek_cabang'];
										$rek_logo=$x['rek_logo'];
									
								?>
			<div class="modal fade" id="modal_detail<?php echo $no_booking;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
			    <div class="modal-dialog">
			    <div class="modal-content">
			    <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			        <h3 class="modal-title" id="myModalLabel">#<?php echo $no_booking; ?></h3>
			    </div>
			    <form class="form-horizontal" role="form" method="post" action="" enctype="multipart/form-data">
			        <div class="modal-body">
									<div class="form-group">
										<div class="col-sm-12">
											<table>
												<tr>
													<td style="width:120px;">Tanggal</td>
													<td>:</td>
													<td><?php echo $tgl_booking; ?></td>
												</tr>
												
												
												<tr>
													<td>Jurusan</td>
													<td>:</td>
													<td><?php echo $jurusan; ?></td>
												</tr>
												<tr>
													<td>Pelanggan</td>
													<td>:</td>
													<td><?php echo $plg; ?></td>
												</tr>
												<tr>
													<td>Titik Jemput Barang</td>
													<td>:</td>
													<td><?php echo $titik_jemput; ?></td>
												</tr>
												<tr>
													<td>Alamat Jemput Barang</td>
													<td>:</td>
													<td><?php echo $alamat_jemput; ?></td>
												</tr>

												<tr>
													<td>Nama Penerima</td>
													<td>:</td>
													<td><?php echo $nm_penerima; ?></td>
												</tr>

												<tr>
													<td>No.Telp Penerima</td>
													<td>:</td>
													<td><?php echo $hp_penerima; ?></td>
												</tr>
												<tr>
													<td>Alamat Penerima</td>
													<td>:</td>
													<td><?php echo $alamat_penerima; ?></td>
												</tr>
												<tr>
													<td>Status Order</td>
													<td>:</td>
													<td><?php 
										if ($sts=="P"){
											echo "Menunggu Konfirmasi";
										}
										else if ($sts=="N") {
											echo "Konfirmasi Telah Ditolak";
										}
										else if ($sts=="Ok") {
											echo "Telah Di Konfirmasi";
										}else{
											echo $sts;
										}
										 ?></td>
												</tr>
												
												<?php if($metode_bayar=='COD'):?>
												<tr>
													<td>Pembayaran</td>
													<td>:</td>
													<td><?php echo "Cash(COD)";?></td>
												</tr>
												<?php else:?>
												<tr>
													<td>Pembayaran</td>
													<td>:</td>
													<td><?php echo 'Transfer Bank '.$rek_bank;?></td>
												</tr>
												<?php endif;?>

											</table><br/>
											<table class="table table-bordered">
												<thead>
													<tr>
														
														<th style="text-align:center;">Jenis Barang</th>
														<th style="text-align:center;">Subtotal</th>
													</tr>
												</thead>
												<tbody>
													
													<tr>
														
														<td style="text-align:center;"><?php echo $jenis;?></td>
														<td style="text-align:center;"><?php echo "Rp ".number_format($total);?></td>
													</tr>
													
												</tbody>
												<tfoot>
													<tr>
														<td>Total</td>
														<td style="text-align:center;"><?php echo "Rp ".number_format($total);?></td>
													</tr>
												</tfoot>
												
											</table>
										</div>
									</div>
									
									
			        </div>
			        <div class="modal-footer">
			            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
			            <button class="btn btn-primary" type="submit"><span class="fa fa-edit"></span> Update</button>
			        </div>
			    </form>
			    </div>
			    </div>
			</div>
		<?php } ?>
		


			<!-- ============ MODAL EDIT PENGGUNA =============== -->
			<?php 
									
									foreach ($this->list_orderpaket as $x) {
										$jenis=$x['jenis_barang'];
										$no_booking=$x['no_resi'];
										$tgl_booking=$x['tgl_kirim'];
										$plg=$x['bookerName'];
										$sts=$x['payment_status'];
										$metode_bayar=$x['metode_bayar'];
										$total=$x['biaya_pengiriman'];
										$jurusan=$x['jurusan'];

										$rek_id=$x['rek_id'];
										$rek_no=$x['rek_no'];
										$rek_nama=$x['rek_nama'];
										$rek_bank=$x['rek_bank'];
										$rek_cabang=$x['rek_cabang'];
										$rek_logo=$x['rek_logo'];
									
								?>

			
			<div class="modal fade" id="modal_edit_pengguna<?php echo $no_booking;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
			    <div class="modal-dialog">
			    <div class="modal-content">
			    <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			        <h3 class="modal-title" id="myModalLabel">Update Status Order</h3>
			    </div>
			    <form class="form-horizontal" role="form" method="post" action="<?php echo URL;?>admin/update_statusorderpaket" enctype="multipart/form-data">
			        <div class="modal-body">
									<div class="form-group">
										<label for="regular13" class="col-sm-3 control-label">Pilih</label>
										<input type="hidden" name="kode" value="<?php echo $no_booking;?>">
										<div class="col-sm-8">
											<select name="status" class="form-control" id="regular13" required>
												<?php foreach ($this->list_status as $st) {
													$st_id=$st['status_id'];
													$st_nm=$st['status_nama'];
												?>
												<option value="<?php echo $st_nm;?>"><?php echo $st_nm;?></option>
												<?php } ?>
											</select>
										</div>
									</div>
									
									
			        </div>
			        <div class="modal-footer">
			            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
			            <button class="btn btn-primary" type="submit"><span class="fa fa-edit"></span> Update</button>
			        </div>
			    </form>
			    </div>
			    </div>
			</div>
			<?php }?>

			<!-- ============ MODAL HAPUS PENGGUNA =============== -->
			<?php 
									
									foreach ($this->list_orderpaket as $x) {
										$no_booking=$x['no_resi'];
										$tgl=$x['tgl_kirim'];
										$plg=$x['bookerName'];
										$sts=$x['payment_status'];
									
								?>
			<div class="modal fade" id="modal_hapus_pengguna<?php echo $no_booking; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
			    <div class="modal-dialog">
			    <div class="modal-content">
			    <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			        <h3 class="modal-title" id="myModalLabel">Hapus Kategori</h3>
			    </div>
			    <form class="form-horizontal" role="form" method="post" action="<?php echo URL; ?>admin/hapus_orderpaket" enctype="multipart/form-data">
			        <div class="modal-body">
									<div class="form-group">
										<label for="regular13" class="col-sm-2 control-label"></label>
										<div class="col-sm-8">
											<input type="hidden" name="kode" value="<?php echo $no_booking; ?>">
											<p>Apakah Anda yakin mau menghapus data <b><?php echo $no_booking; ?></b> ?</p>
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
		<script src="<?php echo URL; ?>assets/admin/js/source/AppVendor.js"></script>
		<script src="<?php echo URL; ?>assets/admin/js/core/DemoTableDynamic.js"></script>
		<!-- END JAVASCRIPT -->

	</body>
</html>
