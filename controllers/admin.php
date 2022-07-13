<?php

class Admin extends Controller {

    function __construct() {
        parent::__construct();
        Session::init();    
       if (Session::get('privilege') != 'AdminLok') 
            $this->error();

    // require 'controllers/booker.php';
    //     $this->booker = new Booker();
        
            
    }

    
    function index() {
        $this->view->notif_konfirmasisopircd = $this->model->notifkonfirmasisopircd();
        $this->view->list_konfirmasi_sopircd = $this->model->list_konfirmasi_sopircd();
        $this->view->list_konfirmasibooker = $this->model->list_konfirmasibooker();
        $this->view->notif_konfirmasidataplg = $this->model->notifkonfirmasidataplg();
        $this->view->notif_order = $this->model->notiforder();
        $this->view->pen_now=$this->model->get_total_booking_sekarang();
        $this->view->pen_last=$this->model->get_total_booking_bulan_lalu();
        $this->view->kirim_now=$this->model->get_total_pengiriman_sekarang();
        $this->view->kirim_last=$this->model->get_total_pengiriman_bulan_lalu();
        $this->view->statistik_booking=$this->model->get_grafik_booking();
        $this->view->statistik_paket=$this->model->get_grafik_paket();
        $this->view->statistik_pelanggan=$this->model->get_grafik_pelanggan();
        $this->view->notif_konfirmasi = $this->model->notifkonfirmasi();
        $this->view->list_konfirmasi = $this->model->listkonfirmasi();
        $this->view->notif_konfirmasipaket = $this->model->notifkonfirmasipaket();
        $this->view->list_konfirmasipaket = $this->model->listkonfirmasipaket();
        $this->view->list_order = $this->model->listorder(); 
        $this->view->notif_orderpaket = $this->model->notiforderpaket();
        $this->view->list_orderpaket = $this->model->listorderpaket();
        $this->view->tot_plg=$this->model->get_total_pelanggan();
        $this->view->odr=$this->model->get_all_order_booking();
        $this->view->odr_paket=$this->model->get_all_order_paket();
        $get_total_bookingkursi=$this->model->get_total_bookingkursi();
        $get_total_kirimpaket=$this->model->get_total_kirimpaket();
        $this->view->plg=$this->model->get_all_pelanggan_terbaru();

        foreach ($get_total_bookingkursi as $key) {
            $booking=$key['total_booking'];
        }
        foreach ($get_total_kirimpaket as $ky) {
            $kirim_paket=$ky['total_kirimpaket'];
        }
        $this->view->total_penghasilan=$booking+$kirim_paket;
        
        $this->view->render('admin/v_dashboard');
    }
    function order() {
        $this->view->notif_konfirmasisopircd = $this->model->notifkonfirmasisopircd();
        $this->view->list_konfirmasi_sopircd = $this->model->list_konfirmasi_sopircd();
        $this->view->list_konfirmasibooker = $this->model->list_konfirmasibooker();
        $this->view->notif_konfirmasidataplg = $this->model->notifkonfirmasidataplg();
        $this->view->notif_order = $this->model->notiforder();
        $this->view->notif_konfirmasi = $this->model->notifkonfirmasi();
        $this->view->list_konfirmasi = $this->model->listkonfirmasi();
        $this->view->notif_konfirmasipaket = $this->model->notifkonfirmasipaket();
        $this->view->list_konfirmasipaket = $this->model->listkonfirmasipaket();
        $this->view->list_order = $this->model->listorder();
        $this->view->list_status = $this->model->liststatus();
        $this->view->notif_orderpaket = $this->model->notiforderpaket();
        $this->view->list_orderpaket = $this->model->listorderpaket();
        
        $this->view->render('admin/v_order');
    }

     function order_detail($no_booking) {
        $this->view->notif_konfirmasisopircd = $this->model->notifkonfirmasisopircd();
        $this->view->list_konfirmasi_sopircd = $this->model->list_konfirmasi_sopircd();
        $this->view->list_konfirmasibooker = $this->model->list_konfirmasibooker();
        $this->view->notif_konfirmasidataplg = $this->model->notifkonfirmasidataplg();
        $this->view->notif_order = $this->model->notiforder();
        $this->view->notif_konfirmasi = $this->model->notifkonfirmasi();
        $this->view->list_konfirmasi = $this->model->listkonfirmasi();
        $this->view->notif_konfirmasipaket = $this->model->notifkonfirmasipaket();
        $this->view->list_konfirmasipaket = $this->model->listkonfirmasipaket();
        $this->view->list_orderdtl = $this->model->listorderdtl($no_booking);
        $this->view->list_order = $this->model->listorder();
        $this->view->list_status = $this->model->liststatus();
        $this->view->notif_orderpaket = $this->model->notiforderpaket();
        $this->view->list_orderpaket = $this->model->listorderpaket();
        
        $this->view->render('admin/v_detailorder');
    }

    function order_paket() {
        $this->view->notif_konfirmasisopircd = $this->model->notifkonfirmasisopircd();
        $this->view->list_konfirmasi_sopircd = $this->model->list_konfirmasi_sopircd();
        $this->view->list_konfirmasibooker = $this->model->list_konfirmasibooker();
        $this->view->notif_konfirmasidataplg = $this->model->notifkonfirmasidataplg();
        $this->view->notif_order = $this->model->notiforder();
        $this->view->notif_konfirmasi = $this->model->notifkonfirmasi();
        $this->view->list_konfirmasi = $this->model->listkonfirmasi();
        $this->view->notif_konfirmasipaket = $this->model->notifkonfirmasipaket();
        $this->view->list_konfirmasipaket = $this->model->listkonfirmasipaket();
        $this->view->notif_orderpaket = $this->model->notiforderpaket();
        $this->view->list_orderpaket = $this->model->listorderpaket();
        $this->view->list_status = $this->model->liststatus();
        $this->view->list_order = $this->model->listorder();
        
        $this->view->render('admin/v_orderpaket');
    }

     function order_detailpaket($no_resi) {
        $this->view->notif_konfirmasisopircd = $this->model->notifkonfirmasisopircd();
        $this->view->list_konfirmasi_sopircd = $this->model->list_konfirmasi_sopircd();
        $this->view->list_konfirmasibooker = $this->model->list_konfirmasibooker();
        $this->view->notif_konfirmasidataplg = $this->model->notifkonfirmasidataplg();
        $this->view->notif_order = $this->model->notiforder();
        $this->view->notif_konfirmasi = $this->model->notifkonfirmasi();
        $this->view->list_konfirmasi = $this->model->listkonfirmasi();
        $this->view->notif_konfirmasipaket = $this->model->notifkonfirmasipaket();
        $this->view->list_konfirmasipaket = $this->model->listkonfirmasipaket();
        $this->view->list_orderdtlpaket = $this->model->listorderdtlpaket($no_resi);
        $this->view->list_order = $this->model->listorder();
        $this->view->list_status = $this->model->liststatus();
        $this->view->notif_orderpaket = $this->model->notiforderpaket();
        $this->view->list_orderpaket = $this->model->listorderpaket();
        
        $this->view->render('admin/v_detailorderpaket');
    }

    function pelanggan() {
        $this->view->notif_konfirmasisopircd = $this->model->notifkonfirmasisopircd();
        $this->view->list_konfirmasi_sopircd = $this->model->list_konfirmasi_sopircd();
        $this->view->list_konfirmasibooker = $this->model->list_konfirmasibooker();
        $this->view->notif_konfirmasidataplg = $this->model->notifkonfirmasidataplg();
        $this->view->notif_order = $this->model->notiforder();
        $this->view->notif_konfirmasi = $this->model->notifkonfirmasi();
        $this->view->list_konfirmasi = $this->model->listkonfirmasi();
        $this->view->notif_konfirmasipaket = $this->model->notifkonfirmasipaket();
        $this->view->list_konfirmasipaket = $this->model->listkonfirmasipaket();
        $this->view->list_order = $this->model->listorder();
        $this->view->list_pelanggan = $this->model->listpelanggan();
        $this->view->notif_orderpaket = $this->model->notiforderpaket();
        $this->view->list_orderpaket = $this->model->listorderpaket();
        
        $this->view->render('admin/v_pelanggan');
    }

     function sopir() {
        $this->view->notif_konfirmasisopircd = $this->model->notifkonfirmasisopircd();
        $this->view->list_konfirmasi_sopircd = $this->model->list_konfirmasi_sopircd();
        $this->view->list_konfirmasibooker = $this->model->list_konfirmasibooker();
        $this->view->notif_konfirmasidataplg = $this->model->notifkonfirmasidataplg();
        $this->view->notif_order = $this->model->notiforder();
        $this->view->notif_konfirmasi = $this->model->notifkonfirmasi();
        $this->view->list_konfirmasi = $this->model->listkonfirmasi();
        $this->view->notif_konfirmasipaket = $this->model->notifkonfirmasipaket();
        $this->view->list_konfirmasipaket = $this->model->listkonfirmasipaket();
        $this->view->list_order = $this->model->listorder();
        $this->view->list_pelanggan = $this->model->listpelanggan();
        $this->view->notif_orderpaket = $this->model->notiforderpaket();
        $this->view->list_orderpaket = $this->model->listorderpaket();
        $this->view->sopir_utama = $this->model->list_sopirutama();
        $this->view->sopir_cadangan= $this->model->list_sopircadangan();
        
        $this->view->render('admin/v_sopir');
    }

    function konfirmasi() {
        $this->view->notif_konfirmasisopircd = $this->model->notifkonfirmasisopircd();
        $this->view->list_konfirmasi_sopircd = $this->model->list_konfirmasi_sopircd();
        $this->view->list_konfirmasibooker = $this->model->list_konfirmasibooker();
        $this->view->notif_konfirmasidataplg = $this->model->notifkonfirmasidataplg();
        $this->view->notif_order = $this->model->notiforder();
        $this->view->notif_konfirmasi = $this->model->notifkonfirmasi();
        $this->view->list_order = $this->model->listorder();
        $this->view->list_konfirmasi = $this->model->listkonfirmasi();
        $this->view->list_konfirmasi1 = $this->model->listkonfirmasi1();
        $this->view->notif_konfirmasipaket = $this->model->notifkonfirmasipaket();
        $this->view->list_konfirmasipaket = $this->model->listkonfirmasipaket();
        $this->view->notif_orderpaket = $this->model->notiforderpaket();
        $this->view->list_orderpaket = $this->model->listorderpaket();
        
        
        $this->view->render('admin/v_konfirmasi');
    }

    function konfirmasi_booker() {
         $this->view->notif_konfirmasisopircd = $this->model->notifkonfirmasisopircd();
        $this->view->list_konfirmasi_sopircd = $this->model->list_konfirmasi_sopircd();
    
        $this->view->notif_order = $this->model->notiforder();
        $this->view->notif_konfirmasi = $this->model->notifkonfirmasi();
        $this->view->list_order = $this->model->listorder();
        $this->view->list_konfirmasi = $this->model->listkonfirmasi();
        $this->view->list_konfirmasi1 = $this->model->listkonfirmasi1();
        $this->view->notif_konfirmasipaket = $this->model->notifkonfirmasipaket();
        $this->view->list_konfirmasipaket = $this->model->listkonfirmasipaket();
        $this->view->notif_orderpaket = $this->model->notiforderpaket();
        $this->view->list_orderpaket = $this->model->listorderpaket();
        $this->view->list_konfirmasibooker = $this->model->list_konfirmasibooker();
        $this->view->notif_konfirmasidataplg = $this->model->notifkonfirmasidataplg();

        
        
        $this->view->render('admin/v_konfirmasibooker');
    }

     function konfirmasi_sopircd() {

         $this->view->notif_konfirmasisopircd = $this->model->notifkonfirmasisopircd();
        
        $this->view->notif_order = $this->model->notiforder();
        $this->view->notif_konfirmasi = $this->model->notifkonfirmasi();
        $this->view->list_order = $this->model->listorder();
        $this->view->list_konfirmasi = $this->model->listkonfirmasi();
        $this->view->list_konfirmasi1 = $this->model->listkonfirmasi1();
        $this->view->notif_konfirmasipaket = $this->model->notifkonfirmasipaket();
        $this->view->list_konfirmasipaket = $this->model->listkonfirmasipaket();
        $this->view->notif_orderpaket = $this->model->notiforderpaket();
        $this->view->list_orderpaket = $this->model->listorderpaket();
        $this->view->list_konfirmasibooker = $this->model->list_konfirmasibooker();
        $this->view->notif_konfirmasidataplg = $this->model->notifkonfirmasidataplg();
        $this->view->list_konfirmasi_sopircd = $this->model->list_konfirmasi_sopircd();

        
        
        $this->view->render('admin/v_konfirmasi_sopircd');
    }

    function konfirmasi_paket() {
        $this->view->notif_konfirmasisopircd = $this->model->notifkonfirmasisopircd();
        $this->view->list_konfirmasi_sopircd = $this->model->list_konfirmasi_sopircd();
        $this->view->list_konfirmasibooker = $this->model->list_konfirmasibooker();
        $this->view->notif_konfirmasidataplg = $this->model->notifkonfirmasidataplg();
        $this->view->notif_order = $this->model->notiforder();
        $this->view->notif_konfirmasi = $this->model->notifkonfirmasi();
        $this->view->list_order = $this->model->listorder();
        $this->view->list_konfirmasi = $this->model->listkonfirmasi();
        $this->view->notif_konfirmasipaket = $this->model->notifkonfirmasipaket();
        $this->view->list_konfirmasipaket = $this->model->listkonfirmasipaket();
        $this->view->list_konfirmasipaket1 = $this->model->listkonfirmasipaket1();
        $this->view->notif_orderpaket = $this->model->notiforderpaket();
        $this->view->list_orderpaket = $this->model->listorderpaket();
        
        $this->view->render('admin/v_konfirmasipaket');
    }

    function rekening() {
        $this->view->notif_konfirmasisopircd = $this->model->notifkonfirmasisopircd();
        $this->view->list_konfirmasi_sopircd = $this->model->list_konfirmasi_sopircd();
        $this->view->list_konfirmasibooker = $this->model->list_konfirmasibooker();
        $this->view->notif_konfirmasidataplg = $this->model->notifkonfirmasidataplg();
        $this->view->notif_order = $this->model->notiforder();
        $this->view->notif_konfirmasi = $this->model->notifkonfirmasi();
        $this->view->list_order = $this->model->listorder();
        $this->view->list_rekening = $this->model->listrekening();
        $this->view->notif_konfirmasipaket = $this->model->notifkonfirmasipaket();
        $this->view->list_konfirmasipaket = $this->model->listkonfirmasipaket();
        $this->view->notif_orderpaket = $this->model->notiforderpaket();
        $this->view->list_orderpaket = $this->model->listorderpaket();
       
        
        $this->view->render('admin/v_rekening');
    }

    function update_konfirmasipaket(){
        //  if (isset($_POST['seat0'])) {
        //     $new_bookingID = $this->insertBookerInfo($_POST);
            
        // }
        $kode=$_POST['kode'];
        $no_invoice=$_POST['no_invoice'];

        $data = array(
                'status' => 'Ok',
                 );
                            
        $where = "no_resi "."= '".$no_invoice."'";
                                    

        $this->model->update_data($where,$data,'pbarang');

        $data1 = array(
                'konfirmasi_status' => '1',
                 );
                            
        $where1 = "konfirmasi_id "."= '".$kode."'";
                                    

        $this->model->update_data($where1,$data1,'konfirmasi_paket');

        
         ?>
          <script type="text/javascript">alert("Berhasil Konfirmasi Paket"); window.location.href="<?php echo URL; ?>admin/konfirmasi_paket/"</script> <?php
    }

    function update_konfirmasi(){
        //  if (isset($_POST['seat0'])) {
        //     $new_bookingID = $this->insertBookerInfo($_POST);
            
        // }
        $kode=$_POST['kode'];
        $no_invoice=$_POST['no_invoice'];

        $data = array(
                'payment_status' => 'Ok',
                 );
                            
        $where = "bookingID "."= '".$no_invoice."'";
                                    

        $this->model->update_data($where,$data,'booking');

        $data1 = array(
                'konfirmasi_status' => '1',
                 );
                            
        $where1 = "konfirmasi_id "."= '".$kode."'";
                                    

        $this->model->update_data($where1,$data1,'konfirmasi');

        
         ?>
          <script type="text/javascript">alert("Berhasil Update Konfirmasi"); window.location.href="<?php echo URL; ?>admin/konfirmasi/"</script> <?php
    }

    function batal_konfirmasi(){
        //  if (isset($_POST['seat0'])) {
        //     $new_bookingID = $this->insertBookerInfo($_POST);
            
        // }
        $kode=$_POST['kode'];
        $no_invoice=$_POST['no_invoice'];

        $data = array(
                'payment_status' => 'N',
                 );
                            
        $where = "bookingID "."= '".$no_invoice."'";
                                    

        $this->model->update_data($where,$data,'booking');
        $this->model->hapus_konfirmasi($kode);
        header('location: ' . URL . 'admin/konfirmasi/');
        
    }

    function batal_konfirmasipaket(){
        //  if (isset($_POST['seat0'])) {
        //     $new_bookingID = $this->insertBookerInfo($_POST);
            
        // }
        $kode=$_POST['kode'];
        $no_invoice=$_POST['no_invoice'];

        $data = array(
                'status' => 'N',
                 );
                            
        $where = "no_resi "."= '".$no_invoice."'";
                                    

        $this->model->update_data($where,$data,'pbarang');
        $this->model->hapus_konfirmasipaket($kode);
        header('location: ' . URL . 'admin/konfirmasi_paket/');
        
    }

      function update_statusorder(){
        //  if (isset($_POST['seat0'])) {
        //     $new_bookingID = $this->insertBookerInfo($_POST);
            
        // }
        $no_invoice=$_POST['kode'];
        $status=$_POST['status'];

        $data = array(
                'payment_status' => $status,
                 );
                            
        $where = "bookingID "."= '".$no_invoice."'";
                                    

        $this->model->update_data($where,$data,'booking');
       
       ?>
                    <script type="text/javascript">alert("Berhasil Update Status"); window.location.href="<?php echo URL; ?>admin/order"</script> <?php
        
    }

     function update_statusorderpaket(){
        //  if (isset($_POST['seat0'])) {
        //     $new_bookingID = $this->insertBookerInfo($_POST);
            
        // }
        $no_invoice=$_POST['kode'];
        $status=$_POST['status'];

        $data = array(
                'status' => $status,
                 );
                            
        $where = "no_resi "."= '".$no_invoice."'";
                                    

        $this->model->update_data($where,$data,'pbarang');
       
       ?>
                    <script type="text/javascript">alert("Berhasil Update Status Paket"); window.location.href="<?php echo URL; ?>admin/order_paket"</script> <?php
        
    }



    function simpan_rekening(){
                $nama_file = $_FILES['filefoto']['name'];
                $ukuran_file = $_FILES['filefoto']['size'];
                $tipe_file = $_FILES['filefoto']['type'];
                $tmp_file = $_FILES['filefoto']['tmp_name'];

                $path = "./assets/admin/img/".$nama_file;

            if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
  // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
                if($ukuran_file <= 10000000){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
    // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
    // Proses upload
                    if(move_uploaded_file($tmp_file, $path)){ // Cek apakah gambar berhasil diupload atau tidak
      
                            
                            $gambar= $nama_file;
                            $norek=$_POST['norek'];
                            $bank=$_POST['bank'];
                            $nama=$_POST['nama'];
                            $cabang=$_POST['cabang'];
                            $kode=$this->model->get_rek_id();

                            $data = array(
                            'rek_id' => $kode,
                            'rek_no' => $norek,
                            'rek_nama' => $nama,
                            'rek_bank' => $bank,
                            'rek_cabang' => $cabang,
                            'rek_logo' => $gambar
                            
                            );

                            $this->model->input_data($data,'rekening');
                               ?>
      
                    <script type="text/javascript">alert("Rekening Bank<?php echo $bank; ?> Berhasil ditambahkan ke database"); window.location.href="<?php echo URL; ?>admin/rekening"</script> <?php
                    }else{
                         ?>
                    <script type="text/javascript">alert("Rekening Bank<?php echo $bank; ?> Maaf gagal ditambahkan"); window.location.href="<?php echo URL; ?>admin/rekening"</script> <?php
                   
                    }
            }else{
                    ?>
                    <script type="text/javascript">alert("Rekening <?php echo $bank; ?> Maaf ukuran gambar terlalu besar"); window.location.href="<?php echo URL; ?>admin/rekening"</script> <?php
                   
                  }
        }else{
            ?>
                    <script type="text/javascript">alert("Maaf, Tipe gambar yang diupload harus JPG / JPEG / PNG."); window.location.href="<?php echo URL; ?>admin/rekening"</script> <?php
          // Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
          
        }

   

    }

    function update_rekening(){
                $nama_file = $_FILES['filefoto']['name'];
                $ukuran_file = $_FILES['filefoto']['size'];
                $tipe_file = $_FILES['filefoto']['type'];
                $tmp_file = $_FILES['filefoto']['tmp_name'];

                $path = "./assets/admin/img/".$nama_file;
       if(!empty($nama_file)){ 

            if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
  // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
                if($ukuran_file <= 1000000){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
    // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
    // Proses upload
                    if(move_uploaded_file($tmp_file, $path)){ // Cek apakah gambar berhasil diupload atau tidak
      
                            
                            $gambar= $nama_file;
                            $norek=$_POST['norek'];
                            $bank=$_POST['bank'];
                            $nama=$_POST['nama'];
                            $cabang=$_POST['cabang'];
                            $kode=$_POST['kode'];

                            $data = array(
                            'rek_id' => $kode,
                            'rek_no' => $norek,
                            'rek_nama' => $nama,
                            'rek_bank' => $bank,
                            'rek_cabang' => $cabang,
                            'rek_logo' => $gambar
                            
                            );
                            $where = "rek_id"."=".$kode;
                                    

                            $this->model->update_data($where,$data,'rekening');
                            ?>
                    <script type="text/javascript">alert("Rekening Bank<?php echo $bank; ?> Berhasil diubah "); window.location.href="<?php echo URL; ?>admin/rekening"</script> <?php
                        
                    }else{
                        ?>
                    <script type="text/javascript">alert("Rekening Bank<?php echo $bank; ?> tidak dapat diubah "); window.location.href="<?php echo URL; ?>admin/rekening"</script> <?php
                    }
                }else{  
                        ?>
                    <script type="text/javascript">alert("Rekening Bank<?php echo $bank; ?> tidak dapat diubah, Ukuran gambar terlalu besar "); window.location.href="<?php echo URL; ?>admin/rekening"</script> <?php 
                     }
            }else{
                    ?>
                    <script type="text/javascript">alert("Maaf, Tipe gambar yang diupload harus JPG / JPEG / PNG."); window.location.href="<?php echo URL; ?>admin/rekening"</script> <?php
                }

        
        }else {
                    $kode=$_POST['kode'];
                    $norek=$_POST['norek'];
                    $bank=$_POST['bank'];
                    $nama=$_POST['nama'];
                    $cabang=$_POST['cabang'];

                      $data = array(
                            'rek_id' => $kode,
                            'rek_no' => $norek,
                            'rek_nama' => $nama,
                            'rek_bank' => $bank,
                            'rek_cabang' => $cabang
                            
                            );
                       $where = "rek_id"."=".$kode;

                             $this->model->update_data($where,$data,'rekening');
                             ?>
                    <script type="text/javascript">alert("Rekening Bank<?php echo $bank; ?> Berhasil Diupdate "); window.location.href="<?php echo URL; ?>admin/rekening"</script> <?php

        } 

    }

    function update_databooker(){
                $status_ubahktp=$_POST['status_ubahktp'];
                $userName=$_POST['userName'];
                if ($status_ubahktp=="Tetap") {
                            
                            $bookerNICNo=$_POST['bookerNICNo'];
                            $empolyeeName=$_POST['bookerName'];
                            $empolyeeMNo=$_POST['phone'];

                            $data = array(
                            
                            'empolyeeName' => $empolyeeName,
                            'empolyeeMNo' => $empolyeeMNo,
                            'bookerNICNo' => $bookerNICNo
                            );
                            $where = "userName"."='".$userName."'";
                            $this->model->update_data($where,$data,'system_user');
                            
                            $bookerNICNo=$_POST['bookerNICNo'];
                            $bookerName=$_POST['bookerName'];
                            $bookerMNo=$_POST['phone'];
                            $email=$_POST['email'];
                            $alamat=$_POST['alamat'];
                            $jenis_kelamin=$_POST['jenis_kelamin'];

                            $data1 = array(
                            
                            'bookerName' => $bookerName,
                            'bookerMNo' => $bookerMNo,
                            'bookerNICNo' => $bookerNICNo,
                            'email' => $email,
                            'alamat' => $alamat,
                            'jenis_kelamin' => $jenis_kelamin,

                            );
                            $where1 = "userName"."= '".$userName."'";
                            $this->model->update_data($where1,$data1,'booker');

                                $this->model->hapus_data_tampung($userName);
                                
                            ?>
                    <script type="text/javascript">alert("Data Berhasil Di Validasi"); window.location.href="<?php echo URL; ?>admin/konfirmasi_booker"</script> <?php

                }elseif ($status_ubahktp=="Ubah") {
                    
                    $cek_foto_ktp=$this->model->foto_ktp_akun_tampung($userName);
                    foreach ($cek_foto_ktp as $cek) {
                        $cek_ktpbaru= $cek['foto_ktp'];
                    }
                    $foto_ktptampung= "./assets/admin/img/booker_tampung/".$cek_ktpbaru;
                    $path = "./assets/admin/img/booker/".$cek_ktpbaru;
               

                  if(!empty($cek_ktpbaru)){ 
                        
                            $cek_foto_ktp=$this->model->foto_ktp_akun($userName);
                            foreach ($cek_foto_ktp as $key => $value) {
                                $foto_ktplama=$value['foto_ktp'];
                            }
                            $target="./assets/admin/img/booker/".$foto_ktplama;
                            if (file_exists($target)) {
                                unlink($target); //Hapus Foto KTP Lama
                            }

                            if(rename($foto_ktptampung, $path)){ //Pindah Foto KTP
                               
                                $bookerNICNo=$_POST['bookerNICNo'];
                                $empolyeeName=$_POST['bookerName'];
                                $empolyeeMNo=$_POST['phone'];

                                $data = array(
                                
                                'empolyeeName' => $empolyeeName,
                                'empolyeeMNo' => $empolyeeMNo,
                                'bookerNICNo' => $bookerNICNo,
                                );
                                $where = "userName"."= '".$userName."'";
                                
                                $bookerNICNo=$_POST['bookerNICNo'];
                                $bookerName=$_POST['bookerName'];
                                $bookerMNo=$_POST['phone'];
                                $email=$_POST['email'];
                                $alamat=$_POST['alamat'];
                                $jenis_kelamin=$_POST['jenis_kelamin'];
                                

                                $data1 = array(
                                'bookerName' => $bookerName,
                                'bookerMNo' => $bookerMNo,
                                'bookerNICNo' => $bookerNICNo,
                                'email' => $email,
                                'alamat' => $alamat,
                                'jenis_kelamin' => $jenis_kelamin,
                                'foto_ktp' => $cek_ktpbaru,

                                );
                                $where1 = "userName"."= '".$userName."'";
                                

                                $data2 = array('konfirmasi_status' => '1', );
                                $where2= "userName"."= '".$userName."'";

                                $this->model->update_data($where,$data,'system_user');
                                $this->model->update_data($where1,$data1,'booker');
                                $this->model->update_data($where2,$data2,'konfirmasi_booker');
                                $where3= "userName"."= '".$userName."'";
                                $this->model->hapus_data_tampung($userName);
                                ?>
                        <script type="text/javascript">alert("Data Berhasil Di Validasi"); window.location.href="<?php echo URL; ?>admin/konfirmasi_booker"</script> <?php
                            }else {
                                ?>
                        <script type="text/javascript">alert("Data Gagal Di Validasi"); window.location.href="<?php echo URL; ?>admin/konfirmasi_booker"</script> <?php
                            }
                        }else{
                            ?>
                        <script type="text/javascript">alert("Foto KTP Tidak Ada"); window.location.href="<?php echo URL; ?>admin/konfirmasi_booker"</script> <?php
                        }

                }
                
    }

    function konfirmasi_data_tidakvalid(){
        $username=$_POST['username'];
        $this->model->hapus_data_tampung($username);
        header('location: ' . URL . 'admin/konfirmasi_booker/');
    }

    function hapus_rekening(){
        $kode=$_POST['kode'];
        $this->model->hapus_rekening($kode);
        header('location: ' . URL . 'admin/rekening/');
    }

    

    function hapus_order(){
        $kode=$_POST['kode'];
        $this->model->hapus_order($kode);
        header('location: ' . URL . 'admin/order/');
    }
     function hapus_orderpaket(){
        $kode=$_POST['kode'];
        $this->model->hapus_orderpaket($kode);
        header('location: ' . URL . 'admin/order_paket/');
    }
    function hapus_pelanggan(){
        $kode=$_POST['kode'];
         $nama=$_POST['nama'];
        $this->model->hapus_pelanggan($kode);
        $this->model->hapus_pelanggan2($kode);
         ?>
      
          <script type="text/javascript">alert("Hapus Akun <?php echo $nama;?> Berhasil"); window.location.href="<?php echo URL; ?>admin/pelanggan"</script> <?php
    }
   function error() {
        require 'controllers/error.php';
        $controller = new Error();
        $controller->index('Sorry ...! You can not Accsess This Page');
    }
    //  function order() {
    //     $this->view->notif_order = $this->admin->notiforder();
    //     $this->view->list_order = $this->admin->listorder();
      
    //     $this->view->render('admin/v_order');
    // }

    // Status
    function status() {
        $this->view->notif_konfirmasidataplg = $this->model->notifkonfirmasidataplg();
        $this->view->list_konfirmasi_sopircd = $this->model->list_konfirmasi_sopircd();
        $this->view->list_konfirmasibooker = $this->model->list_konfirmasibooker();
        $this->view->notif_konfirmasisopircd = $this->model->notifkonfirmasisopircd();
        $this->view->notif_order = $this->model->notiforder();
        $this->view->notif_konfirmasi = $this->model->notifkonfirmasi();
        $this->view->list_konfirmasi = $this->model->listkonfirmasi();
        $this->view->notif_konfirmasipaket = $this->model->notifkonfirmasipaket();
        $this->view->list_konfirmasipaket = $this->model->listkonfirmasipaket();
        $this->view->list_order = $this->model->listorder();
        $this->view->list_status = $this->model->liststatus();
        $this->view->notif_orderpaket = $this->model->notiforderpaket();
        $this->view->list_orderpaket = $this->model->listorderpaket();
        
        $this->view->render('admin/v_status');
    }

     function informasi() {
        $this->view->notif_konfirmasidataplg = $this->model->notifkonfirmasidataplg();
        $this->view->list_konfirmasi_sopircd = $this->model->list_konfirmasi_sopircd();
        $this->view->list_konfirmasibooker = $this->model->list_konfirmasibooker();
        $this->view->notif_konfirmasisopircd = $this->model->notifkonfirmasisopircd();

        $this->view->notif_order = $this->model->notiforder();
        $this->view->notif_konfirmasi = $this->model->notifkonfirmasi();
        $this->view->list_konfirmasi = $this->model->listkonfirmasi();
        $this->view->notif_konfirmasipaket = $this->model->notifkonfirmasipaket();
        $this->view->list_konfirmasipaket = $this->model->listkonfirmasipaket();
        $this->view->list_order = $this->model->listorder();
        $this->view->list_informasi = $this->model->listinformasi();
        $this->view->notif_orderpaket = $this->model->notiforderpaket();
        $this->view->list_orderpaket = $this->model->listorderpaket();
        
        $this->view->render('admin/v_informasi');
    }

     function simpan_status() {
        $status=$_POST['status'];
                            $data = array(
                            'status_nama' => $status,
                            );

        $this->model->input_data($data,'status');
         ?>
      
          <script type="text/javascript">alert("Berhasil Tambah Status <?php echo $status;?>"); window.location.href="<?php echo URL; ?>admin/status"</script> <?php
        
    }

     function update_status(){
        //  if (isset($_POST['seat0'])) {
        //     $new_bookingID = $this->insertBookerInfo($_POST);
            
        // }
        $kode=$_POST['kode'];
        $status=$_POST['status'];

        $data = array(
                'status_nama' => $status,
                 );
                            
        $where = "status_id "."= '".$kode."'";
                                    

        $this->model->update_data($where,$data,'status');
        
         ?>
          <script type="text/javascript">alert("Berhasil Update Status"); window.location.href="<?php echo URL; ?>admin/status/"</script> <?php
    }

     function hapus_status(){
        $kode=$_POST['kode'];
        $this->model->hapus_status($kode);
        header('location: ' . URL . 'admin/status/');
    }

     function simpan_informasi() {
        $jurusan=$_POST['jurusan'];
        $harga=$_POST['harga'];
                            $data = array(
                            'jurusan' => $jurusan,
                            'harga' => $harga,
                            );

        $this->model->input_data($data,'informasi');
         ?>
      
          <script type="text/javascript">alert("Berhasil Tambah Informasi <?php echo $jurusan;?>"); window.location.href="<?php echo URL; ?>admin/informasi"</script> <?php
        
    }

     function update_informasi(){
        //  if (isset($_POST['seat0'])) {
        //     $new_bookingID = $this->insertBookerInfo($_POST);
            
        // }
        $kode=$_POST['kode'];
        $jurusan=$_POST['jurusan'];
         $harga=$_POST['harga'];

        $data = array(
                'jurusan' => $jurusan,
                'harga' => $harga,
                 );
                            
        $where = "id_informasi "."= '".$kode."'";
                                    

        $this->model->update_data($where,$data,'informasi');
        
         ?>
          <script type="text/javascript">alert("Berhasil Update Informasi"); window.location.href="<?php echo URL; ?>admin/informasi/"</script> <?php
    }

     function hapus_informasi(){
        $kode=$_POST['kode'];
        $this->model->hapus_informasi($kode);
        header('location: ' . URL . 'admin/informasi/');
    }

    function setuju_konfirmasi_sopircd(){
        //  if (isset($_POST['seat0'])) {
        //     $new_bookingID = $this->insertBookerInfo($_POST);
            
        // }
        $id_sopir_utama=$_POST['id_sopir_utama'];
        $userName_cadangan=$_POST['userName_cadangan'];
        $no_mobil_cadangan=$_POST['no_mobil_cadangan'];
        $model_mobil_cadangan=$_POST['model_mobil_cadangan'];

        $data = array(
                'no_mobil_cadangan' => $no_mobil_cadangan,
                'model_mobil_cadangan' => $model_mobil_cadangan,
                 );
                            
        $where = "userName_cadangan = '".$userName_cadangan."'";

         $data1 = array(
                'status_akun_sopir' => 'Dialihkan'
                
                 );
                            
        $where1 = "id_sopir = '".$id_sopir_utama."' AND privilege= 'Sopir' ";

        $data2 = array(
                'status_akun_sopir' => 'Aktif'
                
                 );
                            
        $where2 = "id_sopir = '".$id_sopir_utama."' AND privilege= 'SopirCD' ";
                                    

        $this->model->update_data($where,$data,'sopir_cadangan');
        $this->model->update_data($where1,$data1,'system_user');
        $this->model->update_data($where2,$data2,'system_user');
        $this->model->hapus_konfirmasi_sopircd($id_sopir_utama);
        
         ?>
          <script type="text/javascript">alert("Berhasil Valdasi Data"); window.location.href="<?php echo URL; ?>admin/sopir"</script> <?php
    }

     function tolak_konfirmasi_sopircd(){
        $userName_cadangan=$_POST['userName_cadangan'];

        $data2 = array(
                'status_akun_sopir' => 'Di Tolak'
                
                 );
                            
        $where2 = "userName = '".$userName_cadangan."' AND privilege= 'SopirCD' ";
        $this->model->update_data($where2,$data2,'system_user');
        $this->model->hapus_konfirmasi_sopircd($id_sopir_utama);
        
        header('location: ' . URL . 'admin/sopir');
    }

     function nonaktifkan_sopircd(){
        $userName_akunutama=$_POST['userName_akunutama'];
        $userName_cadangan=$_POST['userName_cadangan'];

        $data1 = array(
                'status_akun_sopir' => 'Utama'
                
                 );
                            
        $where1 = "userName = '".$userName_akunutama."' AND privilege= 'Sopir' ";
        $data2 = array(
                'status_akun_sopir' => 'Tidak Aktif'
                
                 );
                            
        $where2 = "userName = '".$userName_cadangan."' AND privilege= 'SopirCD' ";
        $this->model->update_data($where1,$data1,'system_user');
        $this->model->update_data($where2,$data2,'system_user');
        
       ?>
          <script type="text/javascript">alert("Berhasil Non-Aktifkan Akun ini"); window.location.href="<?php echo URL; ?>admin/sopir"</script> <?php
    }
     


   
}

?>