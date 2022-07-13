	<?php 
    if ($this->getusername == NULL){
       $name="";
      $phone="";
      $no_mobil="";
      $merek="";
      $id_sopir="";
    }else {
       foreach ($this->getusername as $u) {
      $name=$u['empolyeeName'];
      $phone=$u['empolyeeMNo'];
      $no_mobil=$u['no_mobil'];
      $merek=$u['busModel'];
      $no_mobil_cadangan=$u['no_mobil_cadangan'];
      $model_mobil_cadangan=$u['model_mobil_cadangan'];
      $id_sopir=$u['id_sopir'];

      # code...
    }
    }
   
  ?>
  <link rel="icon" href="<?php echo URL; ?>assets/logo.png">
  <nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
            
	        </button>
        </div>
	  		<div class="img bg-wrap text-center py-4" style="background-image: url(<?php echo URL; ?>assets/mustang.jpg);">
	  			<div class="user-logo">
	  				<div class="img" style="background-image: url(<?php echo URL; ?>assets/sopir/images/logo.jpg);"></div>
	  				<h3><?php echo $name; ?></h3>
	  			</div>
	  		</div>
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="<?php echo URL; ?>sopircd"><span class="fa fa-home mr-3"></span> Home</a>
          </li>
          <li>
             <a href="<?php echo URL; ?>sopircd/layanan"><span class="fa fa-download mr-3 notif"><small class="d-flex align-items-center justify-content-center">5</small></span> Layanan</a>
          </li>
           
          <li>
             <a href="<?php echo URL; ?>sopircd/lokasi"><span class="fa fa-download mr-3 notif"><small class="d-flex align-items-center justify-content-center">5</small></span> Layanan Set Lokasi</a>
          </li>
          
          
          <li>
            <a href="<?php echo URL; ?>systemUser/changePassword"><span class="fa fa-support mr-3"></span> Ubah Password</a>
          </li>
          <li>
            <a href="<?php echo URL; ?>login/logout"><span class="fa fa-sign-out mr-3"></span> Sign Out (<?php echo Session::get('userName'); ?>)</a>
          </li>
        </ul>

    	</nav>