	
  <link rel="icon" href="<?php echo URL; ?>assets/logo.png">
  <nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
            
	        </button>
        </div>
	  		<div class="img bg-wrap text-center py-4" style="background-image: url(<?php echo URL; ?>assets/mustang.jpg);">
	  			<div class="user-logo">
	  				<div class="img" style="background-image: url(<?php echo URL; ?>assets/sopir/images/logo.jpg);"></div>
	  				<h3><?php echo $this->bookerName; ?></h3>
	  			</div>
	  		</div>
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="<?php echo URL; ?>"><span class="fa fa-home mr-3"></span> Home</a>
          </li>
          <li>
             <a href="<?php echo URL; ?>booker/cetak_invoice/<?php echo $this->booking_id;?>"><span class="fa fa-gift mr-3"></span>Invoice</a>
          </li>
          <li>
             <a href="<?php echo URL; ?>index/pemesanan"><span class="fa fa-download mr-3 notif"><small class="d-flex align-items-center justify-content-center">5</small></span> Booking Sekarang</a>
          </li>
          
          <li>
            <a href="<?php echo URL; ?>systemUser/changePassword"><span class="fa fa-support mr-3"></span> Ubah Password</a>
          </li>
          <li>
            <a href="<?php echo URL; ?>login/logout"><span class="fa fa-sign-out mr-3"></span> Sign Out (<?php echo Session::get('userName'); ?>)</a>
          </li>
        </ul>

    	</nav>