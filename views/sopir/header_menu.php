	<?php 
    if ($this->getusername == NULL){
      $id_sopir="";
       $name="";
      $phone="";
      $no_mobil="";
      $merek="";
      $id_sopir="";
      $foto_mobil="";
    }else {
       foreach ($this->getusername as $u) {
      $id_sopir=$u['id_sopir'];
      $name=$u['empolyeeName'];
      $phone=$u['empolyeeMNo'];
      $no_mobil=$u['no_mobil'];
      $merek=$u['busModel'];
      $id_sopir=$u['id_sopir'];
      $foto_lama=$u['foto_mobil'];

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
	  				<div class="img" style="background-image: url(<?php echo URL;?>assets/sopir/images/img_mobil/<?php echo $foto_lama;?>);"></div>
	  				<h3><?php echo $name; ?></h3>
	  			</div>
	  		</div>
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="<?php echo URL; ?>sopir"><span class="fa fa-home mr-3"></span> Home</a>
          </li>
          <?php if ($id_sopir==NULL) {}else { ?>
          <li>
             <a href="<?php echo URL; ?>sopir/layanan"><span class="fa fa-download mr-3 notif"></span> Layanan Pesanan Diterima</a>
          </li>
          <li>
             <a href="<?php echo URL; ?>sopir/list_kursi"><span class="fa fa-download mr-3 notif"></span> Lihat Daftar Kursi Terisi</a>
          </li>
           <li>
             <a href="<?php echo URL; ?>sopir/listsopir_cadangan"><span class="fa fa-download mr-3 notif"></span> Layanan Sopir Cadangan</a>
          </li>
          <li>
             <a href="<?php echo URL; ?>sopir/lokasi"><span class="fa fa-download mr-3 notif"></span> Layanan Set Lokasi</a>
          </li>
        <?php }?>
          <li>
            <a href="<?php echo URL; ?>sopir/profil"><span class="fa fa-gift mr-3"></span> Profil</a>
          </li>
          
          <li>
            <a href="<?php echo URL; ?>systemUser/changePassword"><span class="fa fa-support mr-3"></span> Ubah Password</a>
          </li>
          <li>
            <a href="<?php echo URL; ?>login/logout"><span class="fa fa-sign-out mr-3"></span> Sign Out (<?php echo Session::get('userName'); ?>)</a>
          </li>
        </ul>

    	</nav>