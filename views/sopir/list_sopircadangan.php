<?php  date_default_timezone_set('Asia/Jakarta'); ?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Layanan Sopir Cadangan</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo URL;?>assets/sopir/css/style.css">
    <link type="text/css" rel="stylesheet" href="<?php echo URL; ?>assets/admin/css/material-design-iconic-font.min.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo URL; ?>assets/admin/css/DataTables/jquery.dataTables.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo URL; ?>assets/admin/css/DataTables/extensions/dataTables.colVis.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo URL; ?>assets/admin/css/DataTables/extensions/dataTables.tableTools.css" />

    
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
      <?php require "views/sopir/header_menu.php"; ?>
        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
        <h2 class="mb-4">Layanan Sopir Cadangan</h2>
        <?php if ($this->ceksopircd==1) {
              echo "";
        }else {?>
        <form method="post" action="<?php echo URL;?>sopir/tambah_akuncadangan">
          <input type="hidden" name="id_sopir_utama" value="<?php echo $id_sopir;?>">
          <input type="hidden" name="no_mobil_utama" value="<?php echo $no_mobil;?>">
         <button type="submit" class="btn btn-primary" > <span class="fa fa-plus"></span>Buat Akun Sopir Cadangan</button>
        </form>
        <?php } ?>
       <br><br>
         <div class="table-responsive">
        <table class="table table-hover" id="datatable1">
          <thead>
                        <tr>
                            <th>Nama Sopir Cadangan</th>
                            <th>No.Hp</th>
                            <th>Pilih Mobil</th>
                            <th>No Mobil</th>
                            <th>Merek Mobil</th>
                            <th>Status</th>
                            <th></th>

                        </tr>
          </thead>
               
                  <tbody>
                    <?php foreach ($this->get_datasopircadangan as $get) {
                          $userName_cadangan = $get['userName'];
                          $namasopir_cadangan=$get['empolyeeName'];
                          $no_hp=$get['empolyeeMNo'];
                          $status=$get['status_akun_sopir'];
                          $id_sopir_cadangan = $get['id_sopir_cadangan'];
                    ?>
                    <form class="contactForm" action="<?php echo URL;?>sopir/konfirmasi_akunsopircadangan" id="form" method="post" enctype="multipart/form-data">
                        
                        <input type="hidden" name="id_sopir_utama" value="<?php echo $id_sopir;?>">
                        <input type="hidden" name="userName_cadangan" value="<?php echo $userName_cadangan;?>">
                        <input type="hidden" name="nama_sopircadangan" value="<?php echo $namasopir_cadangan;?>">
                        <input type="hidden" name="phone_cadangan" value="<?php echo $no_hp;?>">
                        <input type="hidden" name="id_sopir_cadangan" value="<?php echo $id_sopir_cadangan;?>">
                          <tr>
                              <td><?php echo $namasopir_cadangan;?></td>
                              <td><?php echo $no_hp;?></td>
                              

                              <td><select name="pilihmobil" id="pilihMobil" onchange="tampilkan()">
                                  <option>--Pilih Mobil--</option>
                                  <option value="Tetap">Mobil Tetap</option>
                                  <option value="Lain">Mobil Lain</option></select>
                                  
                              </td>
                              
                              <td><input type="text" name="no_mobil_cadangan" id="no_mobil_cadangan" placeholder="Masukkan No Plat Mobil" required title="No Plat Mobil Harus Di isi" /></td>
                              <td><input type="text" name="model_mobil_cadangan" id="model_mobil_cadangan" placeholder="Masukkan Merek Mobil" required title="Merek Mobil Harus Di isi" /></td>
                               <td><?php if ($status=="Di Tolak") { ?>
                                  <span class="btn btn-danger"><font color="white"><?php echo $status;?></font></span>
                              <?php }elseif ($status=="Tidak Aktif") { ?>
                                   <span class="btn btn-warning"><font color="white"><?php echo $status;?></font></span>
                              <?php } elseif ($status=="Aktif") { ?>
                                    <span class="btn btn-success"><font color="white"><?php echo $status;?></font></span>
                              <?php } ?>
                               </td>
                              <td><input type="submit" class="btn btn-primary" value="Ajukan Aktif">&nbsp;<a href="<?php echo URL;?>sopir/hapus_konfirmasi_sopir_cadangan/<?php echo $userName_cadangan;?>" class="btn btn-warning">Batal Ajukan</a>&nbsp;<a href="<?php echo URL;?>sopir/hapus_akun_sopir_cadangan/<?php echo $userName_cadangan;?>" class="btn btn-danger">Hapus Akun</a></td>
                          
                          </tr>
                          </form>
                        <?php } ?>
                    </tbody>
                
                    
        </table>
      </div>
      
      
      </div>
		</div>
    <script type="text/javascript">
                              function tampilkan(){
                                var mobil=document.getElementById("form").pilihMobil.value;
                                if (mobil=="Tetap")
                                  {
                                      document.getElementById("no_mobil_cadangan").value="<?php echo $no_mobil;?>";
                                      document.getElementById("model_mobil_cadangan").value="<?php echo $merek;?>";
                                  }
                                else if (mobil=="Lain")
                                  {
                                      document.getElementById("no_mobil_cadangan").value="";
                                      document.getElementById("model_mobil_cadangan").value="";
                                  }
                                 
                              }
    </script>
    <script type="text/javascript">
      
      function submit(){
        var cek_no_mobil=document.getElementById("form").value;
        if (cek_no_mobil !="") {
              document.getElementById("nomobil").required="Harus Di isi";
        }else {
           
        }
        
      }
    </script>
    
    <script src="<?php echo URL; ?>assets/admin/js/DataTables/jquery.dataTables.min.js"></script>
    <script src="<?php echo URL; ?>assets/admin/js/DataTables/extensions/ColVis/js/dataTables.colVis.min.js"></script>
    <script src="<?php echo URL; ?>assets/admin/js/DataTables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
    <script src="<?php echo URL;?>assets/sopir/js/jquery.min.js"></script>
    <script src="<?php echo URL;?>assets/sopir/js/popper.js"></script>
    <script src="<?php echo URL;?>assets/sopir/js/bootstrap.min.js"></script>
    <script src="<?php echo URL;?>assets/sopir/js/main.js"></script>
  </body>
</html>