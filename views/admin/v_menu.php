<!-- BEGIN MAIN MENU -->
					<ul id="main-menu" class="gui-controls">

						<!-- BEGIN DASHBOARD -->
						<li>
							<a href="<?php echo URL; ?>admin" class="active">
								<div class="gui-icon"><i class="fa fa-home"></i></div>
								<span class="title">Dashboard</span>
							</a>
						</li><!--end /menu-li -->
						<!-- END DASHBOARD -->


						<li>
							<a href="<?php echo URL; ?>admin/pelanggan">
								<div class="gui-icon"><i class="fa fa-users"></i></div>
								<span class="title">Pelanggan</span>
							</a>
						</li>

						<li>
							<a href="<?php echo URL; ?>admin/sopir">
								<div class="gui-icon"><i class="fa fa-car"></i></div>
								<span class="title">Sopir</span>
							</a>
						</li>


						<li>
							<a href="<?php echo URL; ?>admin/rekening">
								<div class="gui-icon"><i class="fa fa-credit-card"></i></div>
								<span class="title">Rekening</span>
							</a>
						</li>

						<li class="gui-folder">
							<a>
								<div class="gui-icon"><i class="fa fa-cart-arrow-down"></i></div>
								<span class="title">Layanan Pesanan</span>
							</a>
							<!--start submenu -->
							<ul>
								<li><a href="<?php echo URL; ?>admin/order/" ><span class="title">Pesanan Travel</span></a></li>
								<li><a href="<?php echo URL; ?>admin/order_paket/" ><span class="title">Pengiriman Paket</span></a></li>
							</ul><!--end /submenu -->
						</li>

						<li class="gui-folder">
							<a>
								<div class="gui-icon"><i class="fa fa-exchange"></i></div>
								<span class="title">Layanan Konfirmasi</span>
							</a>
							<!--start submenu -->
							<ul>
								<li><a href="<?php echo URL; ?>admin/konfirmasi_booker" ><span class="title">Konfirmasi Data Pelanggan</span></a></li>
								<li><a href="<?php echo URL; ?>admin/konfirmasi_sopircd" ><span class="title">Konfirmasi Pengajuan Akun Cadangan Sopir</span></a></li>
								<li><a href="<?php echo URL; ?>admin/konfirmasi" ><span class="title">Konfirmasi Pesan Travel</span></a></li>
								<li><a href="<?php echo URL; ?>admin/konfirmasi_paket" ><span class="title">Konfirmasi Pengiriman Paket</span></a></li>
							</ul><!--end /submenu -->
						</li>
						
						<!-- BEGIN EMAIL -->
						<li class="gui-folder">
							<a>
								<div class="gui-icon"><i class="fa fa-cogs"></i></div>
								<span class="title">Pengaturan</span>
							</a>
							<!--start submenu -->
							<ul>
								<li><a href="<?php echo URL; ?>admin/status" ><span class="title">Status Order</span></a></li>
								<li><a href="<?php echo URL; ?>admin/Informasi" ><span class="title">Informasi</span></a></li>
							</ul><!--end /submenu -->
						</li><!--end /menu-li -->
						<!-- END EMAIL -->


					</ul><!--end .main-menu -->
					<!-- END MAIN MENU -->