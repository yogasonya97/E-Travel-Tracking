<?php  date_default_timezone_set('Asia/Jakarta'); ?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Kursi Mobil</title>
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
<?php foreach ($this->get_jurusanmobil as $ky) {
        $busNo=$ky['busNo'];
}?>
        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
        <h2 class="mb-4">Lihat Kursi Mobil Terisi</h2>
        <form id="bus_create_form" action="<?php echo URL; ?>sopir/lihat_kursi" method="post">
            <input type="date" name="journeyDate" value="<?php echo date("Y-m-d"); ?>">
            <input type="hidden" name="busNo" value="<?php echo $busNo;?>">
             <span>No.Mobil &nbsp;:&nbsp;<?php echo $busNo;?></span>
           </br>
            <input type="submit" value="Lihat Kursi">
        </form>
         <div class="table-responsive">
        <table class="table table-hover" id="datatable1">
          <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>No.Kursi</th>
                            <th>Jurusan</th>
                            <th>Status</th>
                            <th>Jam</th>
                            <th>Action</th>
                        </tr>
          </thead>

                    <tbody>
                        <?php
                        if (isset($this->get_ls_kursi)) {
                            foreach ($this->get_ls_kursi as $key => $value) {
                            $kalimat=$value['journeyNo']; 
                              $sub=substr($kalimat,0,4); 
                      if ($sub=="PTMP"){
                        $journeyNama="Palembang-Metro-Pekalongan-Pringsewu";
                      }
                      elseif ($sub=="LTKP") {
                        $journeyNama="Lampung-Kayuagung-Palembang";
                      }elseif ($sub=="PTBB") {
                        $journeyNama="Palembang-Menggala-Bandar Jaya-Bandar Lampung";
                      }elseif ($sub=="PTSK") {
                        $journeyNama="Palembang-Kota Gajah-Sukadana";
                      }
                      ?>
                                <tr class="">
                                <td><?php echo $value['date'];?> </td>
                                <td><?php echo $value['seatNo'];?> </td>
                                <td><?php echo $journeyNama;?></td>
                                <td><?php echo $value['status'];?></td>
                                <td><?php echo $value['time'];?></td>
                                <td>
                                    <form action="<?php echo URL;?>sopir/hapus_kursi" method="post">
                                        <input type="hidden" name="seatNo" value="<?php echo $value['seatNo'];?>">
                                        <input type="hidden" name="journeyNo" value="<?php echo $value['journeyNo'];?>">
                                        <input type="hidden" name="date" value="<?php echo $value['date'];?>">
                                        <button type="submit" class="btn btn-lg btn-danger">Hapus Kursi</button>
                                    </form>
                                    
                                </td>
                                </tr>
                         
                        <?php } }?>
                    </tbody>
        </table>
      </div>
      

      </div>
		</div>
    <script src="<?php echo URL; ?>assets/admin/js/DataTables/jquery.dataTables.min.js"></script>
    <script src="<?php echo URL; ?>assets/admin/js/DataTables/extensions/ColVis/js/dataTables.colVis.min.js"></script>
    <script src="<?php echo URL; ?>assets/admin/js/DataTables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
    <script src="<?php echo URL;?>assets/sopir/js/jquery.min.js"></script>
    <script src="<?php echo URL;?>assets/sopir/js/popper.js"></script>
    <script src="<?php echo URL;?>assets/sopir/js/bootstrap.min.js"></script>
    <script src="<?php echo URL;?>assets/sopir/js/main.js"></script>
  </body>
</html>