<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function(){
setInterval(function(){
      $("#notif").load(window.location.href + " #notif" );
}, 5000);
});
</script>

		<header id="header" >
			<div class="headerbar">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="headerbar-left">
					<ul class="header-nav header-nav-options">
						<li class="header-nav-brand" >
							<div class="brand-holder">
								<a href="#">
									<span id="Logo" class="svg">
						<img src="<?php echo URL; ?>assets/admin/img/logo.png" />
					</span>
								</a>
							</div>
						</li>
						<li>
							<a class="btn btn-icon-toggle menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
								<i class="fa fa-bars"></i>
							</a>
						</li>
					</ul>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div id="notif">
				<div class="headerbar-right">
				
					<ul class="header-nav header-nav-options">
							 <?php
                        if (isset($this->notif_order)) {
                            foreach ($this->notif_order as $key => $a) {
                        ?>
						<li class="dropdown hidden-xs">
							<a href="javascript:void(0);" class="btn btn-icon-toggle btn-default" data-toggle="dropdown">
								<i class="fa fa-cart-arrow-down"></i><sup class="badge style-danger"><?php echo $a['jum_order'];?></sup>
							</a>
							<?php } } ?>
							<ul class="dropdown-menu animation-expand" style="overflow-y:scroll;max-height:500px;">
								<li class="dropdown-header"><h4><strong>Pesan Travel</strong></h4></li>
								<?php 
									
									foreach ($this->list_order as $x) {
										$tgl=$x['tgl'];
										$plg=$x['bookerName'];
										$sts=$x['payment_status'];
									
								?>
								<li>
									<a class="alert alert-callout alert-warning" href="<?php echo URL; ?>admin/order">
										<strong><?php echo $plg.' memesan...';?></strong><br/>
										<small><?php echo $tgl;?></small>
									</a>
								</li>
								<?php } ?>
								
								
							</ul><!--end .dropdown-menu -->
						</li><!--end .dropdown -->

						 <?php
                        if (isset($this->notif_orderpaket)) {
                            foreach ($this->notif_orderpaket as $key => $a) {
                        ?>
						<li class="dropdown hidden-xs">
							<a href="javascript:void(0);" class="btn btn-icon-toggle btn-default" data-toggle="dropdown">
								<i class="fa fa-cart-arrow-down"></i><sup class="badge style-danger"><?php echo $a['jum_order'];?></sup>
							</a>
							<?php } } ?>
							<ul class="dropdown-menu animation-expand" style="overflow-y:scroll;max-height:500px;">
								<li class="dropdown-header"><h4><strong>Pengiriman Paket</strong></h4></li>
								<?php 
									
									foreach ($this->list_orderpaket as $x) {
										$tgl=$x['tgl_kirim'];
										$plg=$x['bookerName'];
										$sts=$x['payment_status'];
									
								?>
								<li>
									<a class="alert alert-callout alert-warning" href="<?php echo URL; ?>admin/order_paket">
										<strong><?php echo $plg.' memesan...';?></strong><br/>
										<small><?php echo $tgl;?></small>
									</a>
								</li>
								<?php } ?>
								
								
							</ul><!--end .dropdown-menu -->
						</li><!--end .dropdown -->

 						<?php
                        if (isset($this->notif_konfirmasi)) {
                            foreach ($this->notif_konfirmasi as $key => $k) {
                        ?>
						
						<li class="dropdown hidden-xs">
							<a href="javascript:void(0);" class="btn btn-icon-toggle btn-default" data-toggle="dropdown">
								<i class="fa fa-bell"></i><sup class="badge style-danger"><?php echo $k['jum_kon'];?></sup>
							</a>
							<?php } } ?>
							<ul class="dropdown-menu animation-expand">
								<li class="dropdown-header"><h4><strong>Konfirmasi Pembayaran Travel</strong></h4></li>
								<?php 
									
									foreach ($this->list_konfirmasi as $kn) {
										$tgl1=$kn['tgl'];
										$plg1=$kn['konfirmasi_nama'];
										$sts1=$kn['konfirmasi_status'];
									
								?>
								
								<li>
									<a class="alert alert-callout alert-warning" href="<?php echo URL; ?>admin/konfirmasi">
										<strong><?php echo $plg1.' Mengkonfirmasi Pembayaran Pesan Travel...';?></strong><br/>
										<small><?php echo $tgl1;?></small>
									</a>
								</li>
							<?php } ?>
								
							</ul><!--end .dropdown-menu -->
						</li><!--end .dropdown -->

						<?php
                        if (isset($this->notif_konfirmasipaket)) {
                            foreach ($this->notif_konfirmasipaket as $key => $p) {
                        ?>
						
						<li class="dropdown hidden-xs">
							<a href="javascript:void(0);" class="btn btn-icon-toggle btn-default" data-toggle="dropdown">
								<i class="fa fa-bell"></i><sup class="badge style-danger"><?php echo $p['jum_kon'];?></sup>
							</a>
							<?php } } ?>
							<ul class="dropdown-menu animation-expand">
								<li class="dropdown-header"><h4><strong>Konfirmasi Pembayaran Paket</strong></h4></li>
								<?php 
									
									foreach ($this->list_konfirmasipaket as $knp) {
										$tgl1=$knp['tgl'];
										$plg1=$knp['konfirmasi_nama'];
										$sts1=$knp['konfirmasi_status'];
									
								?>
								
								<li>
									<a class="alert alert-callout alert-warning" href="<?php echo URL; ?>admin/konfirmasi_paket">
										<strong><?php echo $plg1.' Mengkonfirmasi Pembayaran Paket...';?></strong><br/>
										<small><?php echo $tgl1;?></small>
									</a>
								</li>
							<?php } ?>
								
							</ul><!--end .dropdown-menu -->
						</li><!--end .dropdown -->

						<?php
                        if (isset($this->notif_konfirmasidataplg)) {
                            foreach ($this->notif_konfirmasidataplg as $key => $p) {
                        ?>
						
						<li class="dropdown hidden-xs">
							<a href="javascript:void(0);" class="btn btn-icon-toggle btn-default" data-toggle="dropdown">
								<i class="fa fa-bell"></i><sup class="badge style-danger"><?php echo $p['jum_kon'];?></sup>
							</a>
							<?php } } ?>
							<ul class="dropdown-menu animation-expand">
								<li class="dropdown-header"><h4><strong>Konfirmasi Perubahan Data Pelanggan</strong></h4></li>
								<?php 
									
									foreach ($this->list_konfirmasibooker as $knp) {
										$tgl1=$knp['konfirmasi_tanggal'];
										$plg1=$knp['bookerName'];
										$sts1=$knp['konfirmasi_status'];
									
								?>
								
								<li>
									<a class="alert alert-callout alert-warning" href="<?php echo URL; ?>admin/konfirmasi_booker">
										<strong><?php echo $plg1.' Mengkonfirmasi Perubahan Data...';?></strong><br/>
										<small><?php echo $tgl1;?></small>
									</a>
								</li>
							<?php } ?>
								
							</ul><!--end .dropdown-menu -->
						</li><!--end .dropdown -->

						<?php
                        if (isset($this->notif_konfirmasisopircd)) {
                            foreach ($this->notif_konfirmasisopircd as $key => $p) {
                        ?>
						
						<li class="dropdown hidden-xs">
							<a href="javascript:void(0);" class="btn btn-icon-toggle btn-default" data-toggle="dropdown">
								<i class="fa fa-bell"></i><sup class="badge style-danger"><?php echo $p['jum_kon'];?></sup>
							</a>
							<?php } } ?>
							<ul class="dropdown-menu animation-expand">
								<li class="dropdown-header"><h4><strong>Konfirmasi Pengajuan Akun Sopir Cadangan</strong></h4></li>
								<?php 
									
									foreach ($this->list_konfirmasi_sopircd as $knp) {
										$tgl1=$knp['tgl_konfirmasi_sopircd'];
										$plg1=$knp['nm_sopir'];
										
									
								?>
								
								<li>
									<a class="alert alert-callout alert-warning" href="<?php echo URL; ?>admin/konfirmasi_sopircd">
										<strong><?php echo $plg1.' Mengkonfirmasi Pengajuan Akun Sopir Cadangan...';?></strong><br/>
										<small><?php echo $tgl1;?></small>
									</a>
								</li>
							<?php } ?>
								
							</ul><!--end .dropdown-menu -->
						</li><!--end .dropdown -->

						
					</ul><!--end .header-nav-options -->
					
					<ul class="header-nav header-nav-profile">
						<li class="dropdown">
							<a href="javascript:void(0);" class="dropdown-toggle ink-reaction" data-toggle="dropdown">
								<img src="" alt="" />
								<span class="profile-info">
									<?php echo Session::get('userName'); ?>
									<small>Administrator Loket</small>
								</span>
							</a>
							
							
							<ul class="dropdown-menu animation-dock">
								<li><a href="<?php echo URL; ?>systemUser/changePassword"><i class="fa fa-fw fa-power-off text-danger"></i> Ubah Password</a></li>
								<li><a href="<?php echo URL; ?>login/logout"><i class="fa fa-fw fa-power-off text-danger"></i> Logout(<?php echo Session::get('userName'); ?>)</a></li>
							</ul><!--end .dropdown-menu -->
						</li><!--end .dropdown -->
					</ul><!--end .header-nav-profile -->
					<!--<ul class="header-nav header-nav-toggle">
						<li>
							<a class="btn btn-icon-toggle btn-default" href="#offcanvas-search" data-toggle="offcanvas" data-backdrop="false">
								<i class="fa fa-ellipsis-v"></i>
							</a>
						</li>
					</ul>--><!--end .header-nav-toggle -->
				</div><!--end #header-navbar-collapse -->
			</div>
			</div>
		</header>
		<!-- END HEADER-->