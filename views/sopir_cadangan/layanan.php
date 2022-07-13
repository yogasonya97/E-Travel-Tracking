<?php  date_default_timezone_set('Asia/Jakarta'); ?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Layanan Sopir</title>
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
			<?php require "views/sopir_cadangan/header_menu.php"; ?>
<?php foreach ($this->get_jurusanmobil as $ky) {
        $busNo=$ky['busNo'];
}?>
        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
        <h2 class="mb-4">Layanan Booking Data Penumpang</h2>
        <form id="bus_create_form" action="<?php echo URL; ?>sopircd/bookingReport/" method="post">
            <input type="date" name="journeyDate" value="<?php echo date("Y-m-d"); ?>">
            <input type="hidden" name="busNo" value="<?php echo $busNo;?>">
             
            <select name="journeyNo">
              <?php foreach ($this->get_jurusanmobil as $key) { ?>
                <?php $kalimat=$key['journeyNo'];

                      $sub=substr($kalimat,0,4); 
                      if ($sub=="PTMP"){
                        $journeyNama="Palembang-Metro-Pekalongan-Pringsewu";
                      }
                      elseif ($sub=="LTKP") {
                        $journeyNama="Lampung-Kayuagung-Palembang";
                      }elseif ($sub=="PTBB") {
                        $journeyNama="Palembang-Bandar Lampung-Bandar Jaya-Menggala";
                      }elseif ($sub=="PTSK") {
                        $journeyNama="Palembang-Sukadana-Kota Gajah";
                      }

                                        // if ($kode=="KP") {
                                        //     $nm_jurusan="KAYUAGUNG-PALEMBANG";
                                        // }elseif ($kode=="BBM") {
                                        //     $nm_jurusan="BANDAR LAMPUNG-BANDAR JAYA-MENGGALA";
                                        // }elseif ($kode=="MPP") {
                                        //     $nm_jurusan="METRO-PEKALONGAN-PRINGSEWU";
                                        // }elseif ($kode=="SK") {
                                        //     $nm_jurusan="SUKADANA-KOTA GAJAH";
                                        // }
                      ?>

                <option value="<?php echo $key['journeyNo']; ?>"><?php echo $journeyNama; ?></option>
             <?php } ?>
            </select></br>
            <input type="submit" value="Lihat Data">
        </form>
         <div class="table-responsive">
        <table class="table table-hover" id="datatable1">
          <thead>
                        <tr>
                            <th>No.Kursi</th>
                            <th>Status</th>
                            <th>No.Ticket</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Titik Jemput</th>
                            <th>No.Hp</th>
                        </tr>
          </thead>

                    <tbody>
                        <?php
                        if (isset($this->searchBookingData)) {
                            foreach ($this->searchBookingData as $key => $value) {
                              $jkl=$value['gender'];
                              if($jkl=="M"){
                                $jkelamin="Laki-Laki";
                              }elseif($jkl=="F"){
                                $jkelamin="Perempuan";
                              }else{
                                $jkelamin="";
                              }

                                echo '<tr class="">';
                                echo '<td>' . $value['seatNo'] . '</td>';
                                echo '<td>' . $value['status'] . '</td>';
                                echo '<td>' . $value['ticketNo']. '</td>';
                                echo '<td>' . $value['passengerName']. '</td>';
                                echo '<td>' . $jkelamin. '</td>';
                                echo '<td>' . $value['entryPoint']. '</td>';
                                echo '<td>' . $value['bookerMNo']. '</td>';
                                
                                echo '</tr>';
                            }
                        }
                        ?>
                    </tbody>
        </table>
      </div>
      
        <h3 class="mb-4">Layanan Booking Data Penumpang Bayar Ditempat</h3>
        <div class="table-responsive">
        <table class="table table-hover" id="datatable1">
          <thead>
                        <tr>
                            <th>No.Kursi</th>
                            <th>Status</th>
                            <th>No.Ticket</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Titik Jemput</th>
                            <th>No.Hp</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        if (isset($this->searchBookingData_cod)) {
                            foreach ($this->searchBookingData_cod as $key => $value) {
                              $jkl=$value['gender'];
                              if($jkl=="M"){
                                $jkelamin="Laki-Laki";
                              }elseif($jkl=="F"){
                                $jkelamin="Perempuan";
                              }else{
                                $jkelamin="";
                              }

                                echo '<tr class="">';
                                echo '<td>' . $value['seatNo'] . '</td>';
                                echo '<td>' . $value['status'] . '</td>';
                                echo '<td>' . $value['ticketNo']. '</td>';
                                echo '<td>' . $value['passengerName']. '</td>';
                                echo '<td>' . $jkelamin. '</td>';
                                echo '<td>' . $value['entryPoint']. '</td>';
                                echo '<td>' . $value['bookerMNo']. '</td>';
                                
                                echo '</tr>';
                            }
                        }
                        ?>
                    </tbody>
        </table>
      </div>
       <?php 
                          $c=0;
                       if ($this->get_tiket==NULL) {
                            echo "";
                       }else{
                            foreach ($this->get_tiket as $ky) {
                              $bookingID=$ky['bookingID'];
                              $journeyNo=$ky['journeyNo'];
                             
                            
                          
                        ?>

      <form action="<?php echo URL;?>sopircd/booking_selesai" method="POST">
            <input type="hidden" name="journeyNo" value="<?php echo $journeyNo;?>">
         <input type="hidden" name="no_booking<?php echo $c;?>" value="<?php echo $bookingID;?>">
       <?php $c++; ?>
           <?php  } } ?>

             <?php if ($this->hitung==NULL){
                        $sum="";
             }else {
              $sum=$this->hitung;
             } ?>
        <input type="hidden" name="hitung" value="<?php echo $sum;?>">
      
          <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Telah Sampai</button>
        </form>
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