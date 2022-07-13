<!doctype html>
<html lang="en">
  <head>
  	<title>Profil Sopir</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    
		
		<link rel="stylesheet" href="<?php echo URL; ?>assets/admin/font-awesome/css/font-awesome.css">
		<link rel="stylesheet" href="<?php echo URL; ?>assets/sopir/css/style.css">

		<link rel="stylesheet" href="<?php echo URL; ?>assets/admin/css/bootstrap.css">
  <script src="<?php echo URL; ?>assets/sopir/jquery.min.js"></script>
  <script src="<?php echo URL; ?>assets/sopir/bootstrap.min.js"></script>
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
		<?php require "views/sopir/header_menu.php"; ?>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
        <div class="container bootstrap snippet">
    <div class="row">
  		<div class="col-sm-10"><h1>Profil Sopir Dan Mobil</h1></div>
    	<!-- <div class="col-sm-2"><a href="/users" class="pull-right"><img title="profile image" class="img-circle img-responsive" src="http://www.gravatar.com/avatar/28fd20ccec6865e2d5f0e1f4446eb7bf?s=100"></a></div> -->
    </div>
    <div class="row">
  		<div class="col-sm-3"><!--left col-->
              

      <div class="text-center">
        <img src="<?php echo URL;?>assets/sopir/images/img_mobil/<?php echo $foto_lama;?>" class="avatar img-circle img-thumbnail" alt="avatar">
        
      </div></hr><br>

               
          <div class="panel panel-default">
            <div class="panel-heading">Data Sopir Dan Mobil <i class="fa fa-link fa-1x"></i></div>
            <div class="panel-body"><table>
              <tr>
                <th>Nama Sopir </th><td>:&nbsp; <?php echo $name;?></td>
              </tr>
              <tr>
                <th>No.Plat Mobil</th><td>:&nbsp; <?php echo $no_mobil;?></td>
              </tr>
               <tr>
                <th>No.HP Sopir</th><td>:&nbsp; <?php echo $phone;?></td>
              </tr>
            </table></div>
          </div>
         
         
          
        </div><!--/col-3-->
    	<div class="col-sm-9">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
                  <?php if ($id_sopir==NULL) { ?>
                <li><a data-toggle="tab" href="#tambah">Tambah Data</a></li>
              <?php } ?>
                <li><a data-toggle="tab" href="#edit">Edit Data</a></li>
              </ul>

              
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>
                  
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="nm_sopir"><h4>Nama Sopir</h4></label>
                              <input type="text" class="form-control" name="first_name" id="first_name" value="<?php echo $name;?>">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="no_mobil"><h4>No.Plat Mobil</h4></label>
                              <input type="text" class="form-control" name="first_name" id="first_name" value="<?php echo $no_mobil;?>">
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="no_phone"><h4>Phone</h4></label>
                             <input type="text" class="form-control" name="first_name" id="first_name" value="<?php echo $phone;?>">
                          </div>
                      </div>
          
                     
                     
              
              
              <hr>
             
             </div><!--/tab-pane-->
              <?php if ($id_sopir==NULL) { ?>
                 <div class="tab-pane" id="tambah">
               
               <h2></h2>
               
               <hr>
                  <form class="form" action="<?php echo URL; ?>sopir/simpan_datasopir" method="post" id="registrationForm" enctype="multipart/form-data">
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="nm_sopir"><h4>Nama Sopir</h4></label>
                              <input type="text" class="form-control" name="nm_sopir" id="first_name" placeholder="Nama Lengkap" title="enter your first name if any.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="no_mobil"><h4>No.Plat Mobil</h4></label>
                             
                              <select name="no_mobil" id="no_mobil" class="form-control">
                                <option value="" >Pilih Mobil Anda</option>
                      <?php
                     
                      foreach ($this->getmobil as $key => $value) {
                          
                          echo '<option value="' . $value['busNo'] . '">' . $value['busNo'] . '</option>';
                         
                          
                      }
                      ?>
                                
                              </select>
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="no_phone"><h4>No.HP</h4></label>
                              <input type="text" class="form-control" name="no_phone" id="phone" placeholder="Masukkan No.HP">
                          </div>
                      </div>
                       <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="no_phone"><h4>Foto Mobil</h4></label>
                              
                              <input type="file" class="form-control" name="filefoto" accept="image/*">
                          </div>
                      </div>
          
                     
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                                <button class="btn btn-lg btn-success" type="submit"><i class="fa fa-check-circle"></i> Simpan</button>
                                <button class="btn btn-lg" type="reset"><i class="fa fa-refresh"></i> Reset</button>
                            </div>
                      </div>
                </form>
               
             </div><!--/tab-pane-->
              <?php } ?>
            
             <div class="tab-pane" id="edit">
            		
               	
                  <hr>
                  <form class="form" action="<?php echo URL;?>sopir/ubah_datasopir" method="post" id="registrationForm" enctype="multipart/form-data">
                    <input type="hidden" name="id_sopir" value="<?php echo $id_sopir;?>">
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="nm_sopir"><h4>Nama Sopir</h4></label>
                              <input type="text" class="form-control" name="nm_sopir" id="first_name" value="<?php echo $name;?>">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="no_mobil"><h4>No.Plat Mobil</h4></label>
                             
                              <select name="no_mobil" id="no_mobil" class="form-control">
                                <option value="<?php echo $no_mobil;?>" ><?php echo $no_mobil;?></option>
                      <?php
                     
                      foreach ($this->getmobil as $key => $value) {
                          
                          echo '<option value="' . $value['busNo'] . '">' . $value['busNo'] . '</option>';
                         
                          
                      }
                      ?>
                                
                              </select>
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="no_phone"><h4>No.HP</h4></label>
                              <input type="text" class="form-control" name="no_phone" id="phone" value="<?php echo $phone;?>">
                          </div>
                      </div>
                       <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="no_phone"><h4>Ubah Foto Mobil</h4></label>
                              <input type="hidden" name="filelama" value="<?php echo $foto_lama;?>">
                              <input type="file" name="filefoto" class="form-control" accept="image/*"> 
                          </div>
                      </div>
          
                     
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                                <button class="btn btn-lg btn-success" type="submit"><i class="fa fa-check-circle"></i> Ubah</button>
                                <button class="btn btn-lg" type="reset"><i class="fa fa-refresh"></i> Reset</button>
                            </div>
                      </div>
              	</form>
              </div>
               
              </div><!--/tab-pane-->
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->
                                                      
      </div>
		</div>
		<script type="text/javascript">
			$(document).ready(function() {

    
    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.avatar').attr('src', e.target.result);
            }
    
            reader.readAsDataURL(input.files[0]);
        }
    }
    

    $(".file-upload").on('change', function(){
        readURL(this);
    });
});
		</script>

    <script src="<?php echo URL; ?>assets/sopir/js/jquery.min.js"></script>
    <script src="<?php echo URL; ?>assets/sopir/js/popper.js"></script>
    <script src="<?php echo URL; ?>assets/sopir/js/bootstrap.min.js"></script>
    <script src="<?php echo URL; ?>assets/sopir/js/main.js"></script>
  </body>
</html>