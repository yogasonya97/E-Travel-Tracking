<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Dashboard</title>

		<!-- BEGIN META -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="M.YogaSonyaAgsar">
		<meta name="author" content="M.YogaSonyaAgsar">
		<meta name="description" content="M.YogaSonyaAgsar">
		<!-- END META -->
		<link rel="icon" href="<?php echo URL; ?>assets/logo.png">
		<link rel="shorcut icon" href="<?php echo URL; ?>assets/admin/img/logo.png">
		<!-- BEGIN STYLESHEETS -->
		<link type="text/css" rel="stylesheet" href="<?php echo URL; ?>assets/admin/css/style-material.css" />
		<link type="text/css" rel="stylesheet" href="<?php echo URL; ?>assets/admin/css/bootstrap.css" />
		<link type="text/css" rel="stylesheet" href="<?php echo URL; ?>assets/admin/css/materialadmin.css" />
		<link type="text/css" rel="stylesheet" href="<?php echo URL; ?>assets/admin/font-awesome/css/font-awesome.css" />
		<link type="text/css" rel="stylesheet" href="<?php echo URL; ?>assets/admin/css/material-design-iconic-font.min.css" />
		<link type="text/css" rel="stylesheet" href="<?php echo URL; ?>assets/admin/css/rickshaw.css" />
		<link type="text/css" rel="stylesheet" href="<?php echo URL; ?>assets/admin/css/morris.core.css" />
		
	</head>
	<body class="menubar-hoverable header-fixed ">

<?php require "views/owner/v_header.php"; ?>
<?php 
$bulans = array(
                '01' => 'JANUARI',
                '02' => 'FEBRUARI',
                '03' => 'MARET',
                '04' => 'APRIL',
                '05' => 'MEI',
                '06' => 'JUNI',
                '07' => 'JULI',
                '08' => 'AGUSTUS',
                '09' => 'SEPTEMBER',
                '10' => 'OKTOBER',
                '11' => 'NOVEMBER',
                '12' => 'DESEMBER',
        );
?>
		<!-- BEGIN BASE-->
		<div id="base">

			<!-- BEGIN OFFCANVAS LEFT -->
			<div class="offcanvas">
			</div><!--end .offcanvas-->
			<!-- END OFFCANVAS LEFT -->

			<!-- BEGIN CONTENT-->
			<div id="content">
				<section>
					<div class="section-body">
						<div class="row">
							<?php foreach ($this->pen_last as $s) {
							 $total_penjualanlst=$s['total_penjualan'];
						} ?>
							<!-- BEGIN ALERT - REVENUE -->
							<div class="col-md-4 col-sm-6">
								<div class="card">
									<div class="card-body no-padding">
										<div class="alert alert-callout alert-info no-margin">
											<strong class="pull-right text-success text-lg"> <i class="fa fa-bar-chart"></i></strong>
											<strong class="text-xl"><?php echo 'Rp '.number_format($total_penjualanlst);?></strong><br/>
											<span class="opacity-50">Penghasilan Booking Kursi Bulan Sebelumnya</span>
											<div class="stick-bottom-left-right">
												<div class="height-2 sparkline-revenue" data-line-color="#bdc1c1"></div>
											</div>
										</div>
									</div><!--end .card-body -->
								</div><!--end .card -->
							</div><!--end .col -->
							<!-- END ALERT - REVENUE -->
						<?php foreach ($this->pen_now as $n) {
							 $total_penjualannw=$n['total_penjualan'];
						} ?>
							<!-- BEGIN ALERT - VISITS -->
							<div class="col-md-4 col-sm-6">
								<div class="card">
									<div class="card-body no-padding">
										<div class="alert alert-callout alert-warning no-margin">
											<strong class="pull-right text-warning text-lg"> <i class="fa fa-line-chart"></i></strong>
											<strong class="text-xl"><?php echo 'Rp '.number_format($total_penjualannw);?></strong><br/>
											<span class="opacity-50">Penghasilan Booking Kursi Bulan Ini</span>
											<div class="stick-bottom-right">
												<div class="height-1 sparkline-visits" data-bar-color="#e5e6e6"></div>
											</div>
										</div>
									</div><!--end .card-body -->
								</div><!--end .card -->
							</div><!--end .col -->
							<?php foreach ($this->kirim_last as $j) {
							 $total_penjualanlst=$j['total_pengiriman'];
						} ?>
							<div class="col-md-4 col-sm-6">
								<div class="card">
									<div class="card-body no-padding">
										<div class="alert alert-callout alert-info no-margin">
											<strong class="pull-right text-success text-lg"> <i class="fa fa-bar-chart"></i></strong>
											<strong class="text-xl"><?php echo 'Rp '.number_format($total_penjualanlst);?></strong><br/>
											<span class="opacity-50">Penghasilan Pengiriman Paket Bulan Sebelumnya</span>
											<div class="stick-bottom-left-right">
												<div class="height-2 sparkline-revenue" data-line-color="#bdc1c1"></div>
											</div>
										</div>
									</div><!--end .card-body -->
								</div><!--end .card -->
							</div><!--end .col -->
							<!-- BEGIN ALERT - BOUNCE RATES -->
							
							<!-- END ALERT - REVENUE -->
						<?php foreach ($this->kirim_now as $k) {
							 $total_penjualannw=$k['total_pengiriman'];
						} ?>
							<!-- BEGIN ALERT - VISITS -->
							<div class="col-md-4 col-sm-6">
								<div class="card">
									<div class="card-body no-padding">
										<div class="alert alert-callout alert-warning no-margin">
											<strong class="pull-right text-warning text-lg"> <i class="fa fa-line-chart"></i></strong>
											<strong class="text-xl"><?php echo 'Rp '.number_format($total_penjualannw);?></strong><br/>
											<span class="opacity-50">Penghasilan Pengiriman Paket Bulan Ini</span>
											<div class="stick-bottom-right">
												<div class="height-1 sparkline-visits" data-bar-color="#e5e6e6"></div>
											</div>
										</div>
									</div><!--end .card-body -->
								</div><!--end .card -->
							</div><!--end .col -->

							<!-- END ALERT - VISITS -->
							
							
							<!-- BEGIN ALERT - BOUNCE RATES -->
							<div class="col-md-4 col-sm-6">
								<div class="card">
									<div class="card-body no-padding">
										<div class="alert alert-callout alert-danger no-margin">
											<strong class="pull-right text-danger text-lg"> <i class="fa fa-cubes"></i></strong>
											<strong class="text-xl"><?php echo 'Rp '.number_format($this->total_penghasilan);?></strong><br/>
											<span class="opacity-50">Total Dari Bulan Awal Sampai Bulan Ini</span>
											<div class="stick-bottom-right">
												<div class="height-1 sparkline-visits" data-bar-color="#e5e6e6"></div>
											</div>
										</div>
									</div><!--end .card-body -->
								</div><!--end .card -->
							</div><!--end .col -->
							<!-- END ALERT - BOUNCE RATES -->
							<?php 
								
								foreach ($this->tot_plg as $d) {
							 $tot_pelanggan=$d['tot_pelanggan'];
						} 
							?>
							<!-- BEGIN ALERT - TIME ON SITE -->
							<div class="col-md-4 col-sm-6">
								<div class="card">
									<div class="card-body no-padding">
										<div class="alert alert-callout alert-success no-margin">
											<h1 class="pull-right text-success"><i class="fa fa-users"></i></h1>
											<strong class="text-xl"><?php echo $tot_pelanggan;?></strong><br/>
											<span class="opacity-50">Total Pelanggan</span>
										</div>
									</div><!--end .card-body -->
								</div><!--end .card -->
							</div><!--end .col -->
							<!-- END ALERT - TIME ON SITE -->

						</div><!--end .row -->
						<div class="row">
								<?php
						    /* Mengambil query report*/
						    error_reporting(0);
						    foreach($this->statistik_booking as $result){
						        $bulan[] = $result['tanggal']; //ambil bulan
						        $value[] = (float) $result['total']; //ambil nilai
						    }
						    /* end mengambil query*/
						     
						?>
						

							<!-- BEGIN SITE ACTIVITY -->
							<div class="col-md-12">
								<div class="card ">
									<div class="row">
										<div class="col-md-12">
											<div class="card-head">
												<header>Statistik Booking Kursi Bulan Ini <?php echo $bulans[date('m')]; ?></header>
											</div><!--end .card-head -->
											<div class="card-body height-10">
												<div class="flot-legend-horizontal stick-top-right no-y-padding">
													<p><b>Total Harga</b></p>
													<canvas id="canvas" width="1200" height="300"></canvas>
													<p align="center"><b>Tanggal Bulan Ini</b></p>
												</div>
											</div><!--end .card-body -->
										</div><!--end .col -->
										
									</div><!--end .row -->
								</div><!--end .card -->
							</div><!--end .col -->
							<!-- END SITE ACTIVITY -->
							<?php
						    /* Mengambil query report*/
						    error_reporting(0);
						    foreach($this->statistik_paket as $rs){
						        $bulan_paket[] = $rs['tanggal']; //ambil bulan
						        $value_paket[] = (float) $rs['total']; //ambil nilai
						    }
						    /* end mengambil query*/
						     
						?>
							<!-- BEGIN SITE ACTIVITY -->
							<div class="col-md-12">
								<div class="card ">
									<div class="row">
										<div class="col-md-12">
											<div class="card-head">
												<header>Statistik Pengiriman Paket Bulan Ini <?php echo $bulans[date('m')]; ?></header>
											</div><!--end .card-head -->
											<div class="card-body height-10">
												<div class="flot-legend-horizontal stick-top-right no-y-padding">
													<p><b>Total Harga</b></p>
													<canvas id="canvas_pkt" width="1200" height="300"></canvas>
													<p align="center"><b>Tanggal Bulan Ini</b></p>
												</div>
											</div><!--end .card-body -->
										</div><!--end .col -->
										
									</div><!--end .row -->
								</div><!--end .card -->
							</div><!--end .col -->
							<!-- END SITE ACTIVITY -->

							

						</div><!--end .row -->
						<div class="row">


							<!-- BEGIN TODOS -->
							<div class="col-md-3">
								<div class="card ">
									<div class="card-head">
										<header>Orders Booking Kursi Terbaru</header>
										<div class="tools">
											<a class="btn btn-icon-toggle btn-close"><i class="fa fa-close"></i></a>
										</div>
									</div><!--end .card-head -->
									<div class="card-body no-padding height-9 scroll">
										<ul class="list" data-sortable="true">
											<?php 
												foreach ($this->odr as $o) {
													$oid=$o['inv_no'];
													$otgl=$o['inv_tanggal'];
													$oplg=$o['inv_plg_nama'];
											?>
											<li class="tile">
												<div class="checkbox checkbox-styled tile-text">
													<label>
														<span>
															<?php echo $oid;?>
															<small><?php echo $otgl.'<br/>'.$oplg;?></small>
														</span>
													</label>
												</div>
												<a class="btn btn-flat ink-reaction btn-default" href="<?php echo URL;?>admin/order">
													<i class="fa fa-arrow-right"></i>
												</a>
											</li>
											<?php } ?>
										</ul>
									</div><!--end .card-body -->
								</div><!--end .card -->
							</div><!--end .col -->
							<!-- END TODOS -->
							<?php
							    /* Mengambil query report*/
							    error_reporting(0);
							    foreach($this->statistik_pelanggan as $r){
							        $bln[] = $r['bulan']; //ambil bulan
							        $val[] = (float) $r['total']; //ambil nilai
							    }
							    /* end mengambil query*/
						     
							?>
							<!-- BEGIN REGISTRATION HISTORY -->
							<div class="col-md-6">
								<div class="card">
									<div class="card-head">
										<header>Statistik Pelanggan</header>
										<div class="tools">
											<a class="btn btn-icon-toggle btn-close"><i class="fa fa-close"></i></a>
										</div>
									</div><!--end .card-head -->
									<div class="card-body no-padding height-11">
										<div class="row">
											<p> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<b>Total Pelanggan</b></p>
											<canvas id="canvasplg" width="560" height="340" style="margin-left:20px;"></canvas>
											<p align="center"><b>Bulan</b></p>
										</div><!--end .row -->
										<div class="stick-bottom-left-right force-padding">
											<!--<div id="flot-registrations" class="flot height-5" data-title="Registration history" data-color="#0aa89e"></div>-->
											
										</div>
									</div><!--end .card-body -->
								</div><!--end .card -->
							</div><!--end .col -->
							<!-- END REGISTRATION HISTORY -->
							<div class="col-md-3">
								<div class="card ">
									<div class="card-head">
										<header>Orders Pengiriman Paket Terbaru</header>
										<div class="tools">
											<a class="btn btn-icon-toggle btn-close"><i class="fa fa-close"></i></a>
										</div>
									</div><!--end .card-head -->
									<div class="card-body no-padding height-9 scroll">
										<ul class="list" data-sortable="true">
											<?php 
												foreach ($this->odr_paket as $p) {
													$oid=$p['inv_no'];
													$otgl=$p['inv_tanggal'];
													$oplg=$p['inv_plg_nama'];
											?>
											<li class="tile">
												<div class="checkbox checkbox-styled tile-text">
													<label>
														<span>
															<?php echo $oid;?>
															<small><?php echo $otgl.'<br/>'.$oplg;?></small>
														</span>
													</label>
												</div>
												<a class="btn btn-flat ink-reaction btn-default" href="<?php echo URL;?>admin/order">
													<i class="fa fa-arrow-right"></i>
												</a>
											</li>
											<?php } ?>
										</ul>
									</div><!--end .card-body -->
								</div><!--end .card -->
							</div>
							<!-- BEGIN NEW REGISTRATIONS -->
							<div class="col-md-3">
								<div class="card">
									<div class="card-head">
										<header>Pelanggan Terbaru</header>
										<div class="tools hidden-md">
											<a class="btn btn-icon-toggle btn-close"><i class="fa fa-close"></i></a>
										</div>
									</div><!--end .card-head -->
									<div class="card-body no-padding height-9 scroll">
										<ul class="list divider-full-bleed">
										<?php 
											foreach ($this->plg as $p) {
												$idpel=$p['bookerNICNo'];
												$napel=$p['bookerName'];
												
											
										?>
											<li class="tile">
												<div class="tile-content">
													<div class="tile-icon">
														<img src="" alt="" />
													</div>
													<div class="tile-text"><?php echo $napel;?></div>
												</div>
												<a class="btn btn-flat ink-reaction" href="<?php echo URL;?>admin/pelanggan">
													<i class="fa fa-arrow-right text-default-light"></i>
												</a>
											</li>
										<?php } ?>
										</ul>
									</div><!--end .card-body -->
								</div><!--end .card -->
							</div><!--end .col -->
							<!-- END NEW REGISTRATIONS -->

						</div><!--end .row -->
					</div><!--end .section-body -->
				</section>
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
					
					<?php require "views/owner/v_menu.php"; ?>

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

		<!-- BEGIN JAVASCRIPT -->
		<script src="<?php echo URL; ?>assets/admin/js/jquery/jquery-1.11.2.min.js"></script>
		<script src="<?php echo URL; ?>assets/admin/js/jquery/jquery-migrate-1.2.1.min.js"></script>
		<script src="<?php echo URL; ?>assets/admin/js/bootstrap/bootstrap.min.js"></script>
		<script src="<?php echo URL; ?>assets/admin/js/spin/spin.min.js"></script>
		<script src="<?php echo URL; ?>assets/admin/js/autosize/jquery.autosize.min.js"></script>
		<script src="<?php echo URL; ?>assets/admin/js/moment/moment.min.js"></script>
		<script src="<?php echo URL; ?>assets/admin/js/flot/jquery.flot.min.js"></script>
		<script src="<?php echo URL; ?>assets/admin/js/flot/jquery.flot.time.min.js"></script>
		<script src="<?php echo URL; ?>assets/admin/js/flot/jquery.flot.resize.min.js"></script>
		<script src="<?php echo URL; ?>assets/admin/js/flot/jquery.flot.orderBars.js"></script>
		<script src="<?php echo URL; ?>assets/admin/js/flot/jquery.flot.pie.js"></script>
		<script src="<?php echo URL; ?>assets/admin/js/flot/curvedLines.js"></script>
		<script src="<?php echo URL; ?>assets/admin/js/jquery-knob/jquery.knob.min.js"></script>
		<script src="<?php echo URL; ?>assets/admin/js/sparkline/jquery.sparkline.min.js"></script>
		<script src="<?php echo URL; ?>assets/admin/js/nanoscroller/jquery.nanoscroller.min.js"></script>
		<script src="<?php echo URL; ?>assets/admin/js/d3/d3.min.js"></script>
		<script src="<?php echo URL; ?>assets/admin/js/d3/d3.v3.js"></script>
		<script src="<?php echo URL; ?>assets/admin/js/rickshaw/rickshaw.min.js"></script>
		<script src="<?php echo URL; ?>assets/admin/js/source/App.js"></script>
		<script src="<?php echo URL; ?>assets/admin/js/source/AppNavigation.js"></script>
		<script src="<?php echo URL; ?>assets/admin/js/source/AppOffcanvas.js"></script>
		<script src="<?php echo URL; ?>assets/admin/js/source/AppCard.js"></script>
		<script src="<?php echo URL; ?>assets/admin/js/source/AppForm.js"></script>
		<script src="<?php echo URL; ?>assets/admin/js/source/AppNavSearch.js"></script>
		<script src="<?php echo URL; ?>assets/admin/js/source/AppVendor.js"></script>
		<script src="<?php echo URL; ?>assets/admin/js/Chart.js"></script>
		<!-- END JAVASCRIPT -->
		<script>

			var lineChartData = {
				labels : <?php echo json_encode($bulan);?>,
				datasets : [
					
					{
						fillColor : "rgba(151,187,205,0.5)",
						strokeColor : "rgba(151,187,205,1)",
						pointColor : "rgba(151,187,205,1)",
						pointStrokeColor : "#fff",
						data : <?php echo json_encode($value);?>
					}
				]
				
			}

		var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Line(lineChartData);
// ---------------------------------------------------------------------------------------------------------
		var lineChartDatapkt = {
				labels : <?php echo json_encode($bulan_paket);?>,
				datasets : [
					
					{
						fillColor : "rgba(151,187,205,0.5)",
						strokeColor : "rgba(151,187,205,1)",
						pointColor : "rgba(151,187,205,1)",
						pointStrokeColor : "#fff",
						data : <?php echo json_encode($value_paket);?>
					}
				]
				
			}

		var myLine = new Chart(document.getElementById("canvas_pkt").getContext("2d")).Line(lineChartDatapkt);
// -------------------------------------------------------------------------------------------------------------
		var lineChartPelanggan = {
				labels : <?php echo json_encode($bln);?>,
				datasets : [
					
					{
						fillColor : "rgba(220,220,220,0.5)",
						strokeColor : "rgba(220,220,220,1)",
						pointColor : "rgba(220,220,220,1)",
						pointStrokeColor : "#fff",
						data : <?php echo json_encode($val);?>
					}
				]
				
			}

		var myLineplg = new Chart(document.getElementById("canvasplg").getContext("2d")).Line(lineChartPelanggan);
		
		</script>


	</body>
</html>
