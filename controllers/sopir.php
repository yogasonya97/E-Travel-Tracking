<?php

class Sopir extends Controller {

    function __construct() {
        parent::__construct();
        Session::init();    
       if (Session::get('privilege') != 'Sopir' && Session::get('privilege') != 'SopirCD') 
            $this->error();

    // require 'controllers/booker.php';
    //     $this->booker = new Booker();
        
            
    }

    function index() {
        $this->view->tgl_posisi=NULL;
        $this->view->getmobil = $this->model->get_mobil();
        $this->view->jurusan_lampung = $this->model->di_lampung(Session::get('userName'));
        $this->view->jurusan_palembang = $this->model->di_palembang(Session::get('userName'));
        $this->view->getistirahat = $this->model->get_status_istirahat(Session::get('userName'));
        $this->view->hitung=$this->model->count_jurusan(Session::get('userName'));
        $this->view->get_jurusanmobil = $this->model->get_jurusan_mobil(Session::get('userName'));
        $this->view->getusername = $this->model->get_akun_sopir(Session::get('userName'));
        $this->view->render('sopir/index');
    }
     function set_tglposisi() {
        $this->view->tgl_posisi=$_POST['tgl_posisi'];
        $this->view->getmobil = $this->model->get_mobil();
        $this->view->jurusan_lampung = $this->model->di_lampung(Session::get('userName'));
        $this->view->jurusan_palembang = $this->model->di_palembang(Session::get('userName'));
        $this->view->getistirahat = $this->model->get_status_istirahat(Session::get('userName'));
        $this->view->hitung=$this->model->count_jurusan(Session::get('userName'));
        $this->view->get_jurusanmobil = $this->model->get_jurusan_mobil(Session::get('userName'));
        $this->view->getusername = $this->model->get_akun_sopir(Session::get('userName'));
        $this->view->render('sopir/index');
    }

     function layanan() {
       $busNo="";
       $journeyDate="";
        $this->view->getmobil = $this->model->get_mobil();
        $this->view->jurusan_lampung = $this->model->di_lampung(Session::get('userName'));
        $this->view->jurusan_palembang = $this->model->di_palembang(Session::get('userName'));
        $this->view->getistirahat = $this->model->get_status_istirahat(Session::get('userName'));
        $this->view->hitung=$this->model->count_jurusan(Session::get('userName'));
        $this->view->get_jurusanmobil = $this->model->get_jurusan_mobil(Session::get('userName'));
        $this->view->getusername = $this->model->get_akun_sopir(Session::get('userName'));
         $this->view->get_tiket = $this->model->get_tiket_mobil($busNo,$journeyDate);
        $get_tikets = $this->model->countticket($busNo,$journeyDate);
             foreach ($get_tikets as $c) {
                $hitung=$c['hitung'];
             }
             
            $this->view->hitung=$hitung;
        
        $this->view->render('sopir/layanan');
    }

    function list_kursi() {
       $busNo="";
       $journeyDate="";
       $this->view->getusername = $this->model->get_akun_sopir(Session::get('userName'));
        $this->view->get_jurusanmobil = $this->model->get_jurusan_mobil(Session::get('userName'));
        $this->view->get_ls_kursi = $this->model->get_list_kursi($busNo,$journeyDate);
        
        
        $this->view->render('sopir/v_kursi');
    }


    function listsopir_cadangan() {
        $this->view->tgl_posisi=NULL;
        $this->view->getmobil = $this->model->get_mobil();
        $this->view->jurusan_lampung = $this->model->di_lampung(Session::get('userName'));
        $this->view->jurusan_palembang = $this->model->di_palembang(Session::get('userName'));
        $this->view->getistirahat = $this->model->get_status_istirahat(Session::get('userName'));
        $this->view->hitung=$this->model->count_jurusan(Session::get('userName'));
        $this->view->get_jurusanmobil = $this->model->get_jurusan_mobil(Session::get('userName'));
        $this->view->getusername = $this->model->get_akun_sopir(Session::get('userName'));
        $cek_id=$this->model->get_akun_sopir(Session::get('userName'));
        foreach ($cek_id as $cek) {
            $id_sopir_utama=$cek['id_sopir'];
        }
        $this->view->get_datasopircadangan= $this->model->get_datasopircadangan($id_sopir_utama);
        $cek_sopircd=$this->model->cek_data_sopircd($id_sopir_utama);
        foreach ($cek_sopircd as $cd) {
                $jumlah_sopircd=$cd['jml'];
        }
        $this->view->ceksopircd=$jumlah_sopircd;
        $this->view->render('sopir/list_sopircadangan');
    }

    function tambah_akuncadangan(){
      $this->view->id_sopir_utama=$_POST['id_sopir_utama'];
      $this->view->no_mobil_utama=$_POST['no_mobil_utama'];
      $this->view->render('sopir/sopir_cadangan');
    }

    function lokasi() {
        $this->view->tgl_posisi=NULL;
        $this->view->getmobil = $this->model->get_mobil();
        $this->view->jurusan_lampung = $this->model->di_lampung(Session::get('userName'));
        $this->view->jurusan_palembang = $this->model->di_palembang(Session::get('userName'));
        $this->view->getistirahat = $this->model->get_status_istirahat(Session::get('userName'));
        $this->view->hitung=$this->model->count_jurusan(Session::get('userName'));
        $this->view->get_jurusanmobil = $this->model->get_jurusan_mobil(Session::get('userName'));
        $this->view->getusername = $this->model->get_akun_sopir(Session::get('userName'));
        $this->view->render('sopir/lokasi');
    }

     function bookingReport() {
              //print_r($this->model->getPassengerData($_POST['journeyDate'],$_POST['busNo']));
        if (isset($_POST['busNo'])) {
            $journeyDate = $_POST['journeyDate'];
            $busNo = $_POST['busNo'];
            $journeyNo = $_POST['journeyNo'];
            $this->view->journeyDate = $_POST['journeyDate'];
            $this->view->busNo = $_POST['busNo'];
            $this->view->journeyNo = trim($_POST['journeyNo']);
            $this->view->searchBookingData = $this->model->searchBookingData($journeyDate,$busNo,$journeyNo);
            $this->view->searchBookingData_cod = $this->model->searchBookingData_cod($journeyDate,$busNo,$journeyNo);
             $this->view->get_jurusanmobil = $this->model->get_jurusan_mobil(Session::get('userName'));
             $this->view->getusername = $this->model->get_akun_sopir(Session::get('userName'));
              $this->view->get_tiket = $this->model->get_tiket_mobil($busNo,$journeyDate);
            $get_tikets = $this->model->countticket($busNo,$journeyDate);
             foreach ($get_tikets as $c) {
                $hitung=$c['hitung'];
             }
             
            $this->view->hitung=$hitung;
            $this->view->render('sopir/layanan');
        }
    }

    function lihat_kursi() {
              //print_r($this->model->getPassengerData($_POST['journeyDate'],$_POST['busNo']));
        if (isset($_POST['busNo'])) {
            $journeyDate = $_POST['journeyDate'];
            $busNo = $_POST['busNo'];
            $this->view->getusername = $this->model->get_akun_sopir(Session::get('userName'));
            $this->view->get_jurusanmobil = $this->model->get_jurusan_mobil(Session::get('userName'));
            $this->view->journeyDate = $_POST['journeyDate'];
            $this->view->busNo = $_POST['busNo'];
            $this->view->get_ls_kursi = $this->model->get_list_kursi($busNo,$journeyDate);
            
            $this->view->render('sopir/v_kursi');
        }
    }

    function booking_selesai() {
    
        for ($i = 0; $i<$_POST['hitung']; $i++) {
            $journeyNo=$_POST['journeyNo'];
            $bookingID=$_POST['no_booking'.$i];
            $status="Telah Sampai Tujuan";
            $status_sampai="Tidak ada";
          
            $data = array(
                            'payment_status' => $status, 
                        );
            $where = "bookingID = '".$bookingID."'";

             $data1 = array(
                            'status' => $status_sampai, 
                        );
            $where1 = "journeyNo = '".$journeyNo."'";

            $this->model->update_data($where,$data,'booking');
            $this->model->update_data($where1,$data1,'journey_for_bus');
            
        }
        
         ?>
      
          <script type="text/javascript">alert("Set Telah Sampai Berhasil"); window.location.href="<?php echo URL; ?>sopir/layanan"</script> <?php
       
    }

    function profil() {
        $this->view->getmobil = $this->model->get_mobil();
        $this->view->getusername = $this->model->get_akun_sopir(Session::get('userName'));
        $this->view->get_idsopir= $this->model->get_cek_idsopir(Session::get('userName'));
        $this->view->render('sopir/profil');
    }


    function simpan_datasopir() {
       $userName =  Session::get('userName');
       $nm_sopir = $_POST['nm_sopir'];
       $no_mobil = $_POST['no_mobil'];
       $phone = $_POST['no_phone'];  
       $id_sopir = date('Y')."DV-".$phone; 
       $foto_sopir="foto.jpg";
       $status_akun_sopir="Utama";

                $nama_file = $_FILES['filefoto']['name'];
                $ukuran_file = $_FILES['filefoto']['size'];
                $tipe_file = $_FILES['filefoto']['type'];
                $tmp_file = $_FILES['filefoto']['tmp_name'];

                $path = "./assets/sopir/images/img_mobil/".$nama_file;
        if(move_uploaded_file($tmp_file, $path)){
             $data = array(
            
            'id_sopir' => $id_sopir,
            'status_akun_sopir' => $status_akun_sopir 
            );
       $where = "userName = '".$userName."'";
       $this->model->update_data($where,$data,'system_user');

       $data1 = array(
            'id_sopir' => $id_sopir,
            'nm_sopir' => $nm_sopir,
            'no_mobil' => $no_mobil,
            'no_phone' => $phone,
            'foto_mobil' => $nama_file 
                
            );
       
       $this->model->input_data($data1,'sopir_dtl');
       
            ?>
      
          <script type="text/javascript">alert("Simpan Data Berhasil"); window.location.href="<?php echo URL; ?>sopir/profil"</script> <?php
        }else {
            ?>
      
          <script type="text/javascript">alert("Foto Mobil Harus Dimasukkan"); window.location.href="<?php echo URL; ?>sopir/profil"</script> <?php
        }

       
    }

    function ubah_datasopir() {
       $userName =  Session::get('userName');
       $nm_sopir = $_POST['nm_sopir'];
       $no_mobil = $_POST['no_mobil'];
       $phone = $_POST['no_phone'];  
       $id_sopir = $_POST['id_sopir'];
       $file_lama= $_POST['filelama'];

                $nama_file = $_FILES['filefoto']['name'];
                $ukuran_file = $_FILES['filefoto']['size'];
                $tipe_file = $_FILES['filefoto']['type'];
                $tmp_file = $_FILES['filefoto']['tmp_name'];

                $path = "./assets/sopir/images/img_mobil/".$nama_file;
                $target="./assets/sopir/images/img_mobil/".$file_lama;
    if(!empty($nama_file)){
        if (file_exists($target)) {
            unlink($target); 
        }
        if(move_uploaded_file($tmp_file, $path)){
            $fotobaru=$nama_file;

       $data = array(
            
            'nm_sopir' => $nm_sopir,
            'no_mobil' => $no_mobil,
            'no_phone' => $phone,
            'foto_mobil' => $fotobaru 
                
            );
        $where = "id_sopir = '".$id_sopir."'";
        $this->model->update_data($where,$data,'sopir_dtl');

         $data1 = array(
            
            'empolyeeName' => $nm_sopir,
            'empolyeeMNo' => $phone,
                
            );
        $where1 = "userName = '".$userName."'";
        $this->model->update_data($where1,$data1,'system_user');
       
            ?>
      
          <script type="text/javascript">alert("Ubah Data Berhasil"); window.location.href="<?php echo URL; ?>sopir/profil"</script> <?php
        }else {
            ?>
      
          <script type="text/javascript">alert("Data Foto Mobil Gagal Di Upload"); window.location.href="<?php echo URL; ?>sopir/profil"</script> <?php
        }
    }else{
        $data = array(
            
            'nm_sopir' => $nm_sopir,
            'no_mobil' => $no_mobil,
            'no_phone' => $phone,
                
            );
        $where = "id_sopir = '".$id_sopir."'";
        $this->model->update_data($where,$data,'sopir_dtl');
         $data1 = array(
            
            'empolyeeName' => $nm_sopir,
            'empolyeeMNo' => $phone,
                
            );
        $where1 = "userName = '".$userName."'";
        $this->model->update_data($where1,$data1,'system_user');
       
            ?>
      
          <script type="text/javascript">alert("Ubah Data Berhasil"); window.location.href="<?php echo URL; ?>sopir/profil"</script> <?php
    }
       
    }

     function set_lokasi() {
       $busNo =  $_POST['busNo'];
       $lon = $_POST['longitude'];
       $lat = $_POST['latitude'];

       $data = array(
            // 'busNo' => $busNo,
            'lng' => $lon,
            'lat' => $lat,
            );
       $where = "busNo = '".$busNo."'";
       $this->model->update_data($where,$data,'bus');
       
            ?>
      
          <script type="text/javascript">alert("Set Lokasi Berhasil"); window.location.href="<?php echo URL; ?>sopir/lokasi"</script> <?php
    }

    function set_istirahat() {
      date_default_timezone_set('Asia/Jakarta'); 

        $hitung=$this->model->count_jurusan(Session::get('userName'));
        foreach ($hitung as $ct) {
            $jumlah=$ct['hitung'];
        }

    for ($i = 0; $i<$jumlah; $i++) {
        $no_mobil=$_POST['busNo'.$i];
        $journeyNo=$_POST['journeyNo'.$i];
        $status="Istirahat";
        $tgl_posisi=$_POST['tgl_posisi'];


       $data = array(
            'status' => $status,
            'tgl_posisi' => $tgl_posisi
            );
       $where = "busNo = '".$no_mobil."' AND journeyNo = '".$journeyNo."'";
       $this->model->update_data($where,$data,'journey_for_bus');
       }
            ?>
      
          <script type="text/javascript">alert("Set Istirahat Berhasil"); window.location.href="<?php echo URL; ?>sopir"</script> <?php
    }

    function set_berangkat() {
      date_default_timezone_set('Asia/Jakarta');
        $hitung=$this->model->count_jurusan(Session::get('userName'));
        foreach ($hitung as $ct) {
            $jumlah=$ct['hitung'];
        }

    for ($i = 0; $i<$jumlah; $i++) {
        $no_mobil=$_POST['busNo'.$i];
        $journeyNo=$_POST['journeyNo'.$i];
        $status="Berangkat";
        $tgl_posisi=$_POST['tgl_posisi'];


       $data = array(
            'status' => $status,
            'tgl_posisi' => $tgl_posisi
            );
       $where = "busNo = '".$no_mobil."' AND journeyNo = '".$journeyNo."'";
       $this->model->update_data($where,$data,'journey_for_bus');
       }
            ?>
      
          <script type="text/javascript">alert("Set Berangkat Berhasil"); window.location.href="<?php echo URL; ?>sopir"</script> <?php
    }

    function set_lampung() {
      date_default_timezone_set('Asia/Jakarta');
      $hitung=$this->model->count_jurusan_lpg(Session::get('userName'));
        foreach ($hitung as $ct) {
            $jumlah=$ct['hitung'];
        }

    for ($i = 0; $i<$jumlah; $i++) {
        $no_mobil=$_POST['busNo'.$i];
         $journeyFrom=$_POST['journeyFrom'.$i];
        $journeyNo=$_POST['journeyNo'.$i];
         $status="Ada";
         $tgl_posisi=$_POST['tgl_posisi'];

       $data = array(
            'status' => $status,
            'tgl_posisi' => $tgl_posisi
            );
       $where = "busNo = '".$no_mobil."' AND journeyNo = '".$journeyNo."'";
       $this->model->update_data($where,$data,'journey_for_bus');
     }

      $hitung1=$this->model->count_jurusan_plg(Session::get('userName'));
        foreach ($hitung1 as $cts) {
            $jumlah1=$cts['hitung'];
        }

         for ($x = 0; $x<$jumlah1; $x++) {

         $no_mobil1=$_POST['busNo1'.$x];
        $journeyNo1=$_POST['journeyNo1'.$x];
        $journeyFrom1=$_POST['journeyFrom1'.$x];
       
        $status1="Tidak Ada";
        $tgl_posisi1=$_POST['tgl_posisi1'];

        $data1 = array(
            'status' => $status1,
            'tgl_posisi' => $tgl_posisi1
            );
       $where1 = "busNo = '".$no_mobil1."' AND journeyNo = '".$journeyNo1."'";
       $this->model->update_data($where1,$data1,'journey_for_bus');
       }
            ?>
      
          <script type="text/javascript">alert("Set Lampung Berhasil"); window.location.href="<?php echo URL; ?>sopir"</script> <?php
    }

     function set_palembang() {
      date_default_timezone_set('Asia/Jakarta');
       $hitung=$this->model->count_jurusan_plg(Session::get('userName'));
        foreach ($hitung as $ct) {
            $jumlah=$ct['hitung'];
        }

    for ($i = 0; $i<$jumlah; $i++) {
        $no_mobil=$_POST['busNo'.$i];
        $journeyFrom=$_POST['journeyFrom'.$i];
        $journeyNo=$_POST['journeyNo'.$i];
        $status="Ada";
        $tgl_posisi=$_POST['tgl_posisi'];

         $data = array(
            'status' => $status,
            'tgl_posisi' => $tgl_posisi
            );
       $where = "busNo = '".$no_mobil."' AND journeyNo = '".$journeyNo."'";
       $this->model->update_data($where,$data,'journey_for_bus');

     }

        $hitung1=$this->model->count_jurusan_lpg(Session::get('userName'));
        foreach ($hitung1 as $cts) {
            $jumlah1=$cts['hitung'];
        }

         for ($x = 0; $x<$jumlah1; $x++) {
        $no_mobil1=$_POST['busNo1'.$x];
        $journeyNo1=$_POST['journeyNo1'.$x];
        $journeyFrom1=$_POST['journeyFrom1'.$x];
        
        $status1="Tidak Ada";
        $tgl_posisi1=$_POST['tgl_posisi1'];


        $data1 = array(
            'status' => $status1,
            'tgl_posisi' => $tgl_posisi1
            );
       $where1 = "busNo = '".$no_mobil1."' AND journeyNo = '".$journeyNo1."'";
       $this->model->update_data($where1,$data1,'journey_for_bus');
       }
            ?>
      
          <script type="text/javascript">alert("Set Palembang Berhasil"); window.location.href="<?php echo URL; ?>sopir"</script> <?php
    }

    function register_sopircadangan(){
        
        $userName = $_POST['username'];
        $password = Hash::create('md5', $_POST['password'], HASH_PASSWORD_KEY);
        $empolyeeName = $_POST['namalengkap'];
        $phone = $_POST['phone'];
        $id_sopir_utama = $_POST['id_sopir_utama'];
        $empolyeeNo = "SPDrvCd"; 
        $privilege = "SopirCD"; 
        $status_akun_sopir="Tidak Aktif";
        $id_sopir_cadangan =date('Y')."DVCD-".$phone;
        $cek_user=$this->model->get_datauser($userName);

        $data = array(
            'userName' => $userName,
            'empolyeeNo' => $empolyeeNo,
            'empolyeeName' => $empolyeeName,
            'empolyeeMNo' => $phone,
            'id_sopir' => $id_sopir_utama,
            'password' => $password,
            'status_akun_sopir' => $status_akun_sopir,
            'privilege' => $privilege
                
            );

        $data1 = array(
            'userName_cadangan' => $userName,
            'id_sopir_utama' => $id_sopir_utama,
            'id_sopir_cadangan' => $id_sopir_cadangan,
            'nama_sopircadangan' => $empolyeeName,
            'phone_cadangan' => $phone,
                
            );

        $data2 = array(
           
            'id_sopir_cadangan' => $id_sopir_cadangan,
            );
        $where2="id_sopir = '".$id_sopir_utama."'";

         foreach ($cek_user as $k) {
         $cek=$k['cek'];
       }
       
       if ($cek == 0) {
      
       
       $this->model->input_data($data,'system_user');
       $this->model->update_data($where2,$data2,'sopir_dtl');
       $this->model->input_data($data1,'sopir_cadangan');
       
       
            ?>
      
          <script type="text/javascript">alert("Buat Akun Sopir Cadangan berhasil"); window.location.href="<?php echo URL; ?>sopir/listsopir_cadangan"</script> <?php

        }else {

             ?>
      
          <script type="text/javascript">alert("Buat Akun Sopir Gagal Username sudah ada, silahkan isikan username yang lain.."); window.location.href="<?php echo URL; ?>sopir/tambah_akuncadangan"</script> <?php
        }

    }

    function konfirmasi_akunsopircadangan(){
        $tgl_konfirmasi_sopircd = date("Y-m-d H:i:s");
        $userName_cadangan = $_POST['userName_cadangan'];
        $id_sopir_utama = $_POST['id_sopir_utama'];
        $nama_sopircadangan = $_POST['nama_sopircadangan'];
        $phone_cadangan = $_POST['phone_cadangan'];
        $id_sopir_cadangan = $_POST['id_sopir_cadangan'];
        $no_mobil_cadangan = $_POST['no_mobil_cadangan'];
        $model_mobil_cadangan = $_POST['model_mobil_cadangan'];
        $konfirmasi_status =0;
        $cek_konfirmasi_sopircd=$this->model->cek_konfirmasi_sopircadangan($id_sopir_utama);
        foreach ($cek_konfirmasi_sopircd as $kcd) {
                $cek_konfirm=$kcd['cek'];
        }

        $data = array(
            'tgl_konfirmasi_sopircd' => $tgl_konfirmasi_sopircd,
            'userName_cadangan' => $userName_cadangan,
            'id_sopir_utama' => $id_sopir_utama,
            'id_sopir_cadangan' => $id_sopir_cadangan,
            'nama_sopircadangan' => $nama_sopircadangan,
            'phone_cadangan' => $phone_cadangan,
            'no_mobil_cadangan' => $no_mobil_cadangan,
            'model_mobil_cadangan' => $model_mobil_cadangan,
            'konfirmasi_status' => $konfirmasi_status,
                
            );

        if ($cek_konfirm==0) {
            $this->model->input_data($data,'konfirmasi_sopircadangan');
        ?>
      
          <script type="text/javascript">alert("Pengajuan sopir cadangan <?php echo $nama_sopircadangan;?> Berhasil, kami akan melakukan validasi.."); window.location.href="<?php echo URL; ?>sopir/listsopir_cadangan"</script> <?php
        }else{
            ?>
      
          <script type="text/javascript">alert("Pengajuan sopir cadangan <?php echo $nama_sopircadangan;?> Sudah Ada, dan sedang di validasi, jika batal silahkan klik Batal Ajukan.."); window.location.href="<?php echo URL; ?>sopir/listsopir_cadangan"</script> <?php
        }
        
    }

    function hapus_konfirmasi_sopir_cadangan($userName_cadangan){
        $this->model->hapus_akun_sopircadangan_konfirmasi_sopircadangan($userName_cadangan);
         ?>
      
          <script type="text/javascript">alert("Berhasil Membatalkan Konfirmasi Akun <?php echo $userName_cadangan;?>"); window.location.href="<?php echo URL; ?>sopir/listsopir_cadangan"</script> <?php
    }

    function hapus_akun_sopir_cadangan($userName_cadangan){
        $this->model->hapus_akun_sopircadangan_systemuser($userName_cadangan);
        $this->model->hapus_akun_sopircadangan_sopir_cadangan($userName_cadangan);
        $this->model->hapus_akun_sopircadangan_konfirmasi_sopircadangan($userName_cadangan);
         ?>
      
          <script type="text/javascript">alert("Berhasil Hapus Akun <?php echo $userName_cadangan;?>"); window.location.href="<?php echo URL; ?>sopir/listsopir_cadangan"</script> <?php
    }
    
    function hapus_kursi(){
        $seatNo = $_POST['seatNo'];
        $journeyNo = $_POST['journeyNo'];
        $date = $_POST['date'];
        $this->model->hapus_kursi($seatNo,$journeyNo,$date);
        ?>
      
          <script type="text/javascript">alert("Berhasil Hapus Kursi"); window.location.href="<?php echo URL; ?>sopir/list_kursi"</script> <?php
    }
    function error() {
        require 'controllers/error.php';
        $controller = new Error();
        $controller->index('Sorry ...! Kamu tidak bisa akses halaman ini');
    }

    //  function order() {
    //     $this->view->notif_order = $this->admin->notiforder();
    //     $this->view->list_order = $this->admin->listorder();
    //     $this->view->render('admin/v_order');
    // }


   
}

?>