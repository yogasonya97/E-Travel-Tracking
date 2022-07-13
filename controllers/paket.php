<?php

class Paket extends Controller {

    function __construct() {
        parent::__construct();
        Session::init();
        //$this->view->js = array('public/js/jspath.js');
    }

    /*
     * View login page.
     */

    function index() {
        $this->view->jurusanDari= $_POST['journeyFrom'];
        $this->view->jurusanKe= $_POST['journeyTo'];

        $this->view->tanggal= $_POST['dateOfJourney'];
        $this->view->booker=$this->model->get_booker(Session::get('userName'));
        $this->view->render('paket/v_tambahpaket');
    }

    function loginToSystem() {
        $this->model->loginToSystem();
    }
    
    function logout()
    {
        Session::destroy();
        header('location: ' . URL .  'login');
//        echo Session::get('privilege');
//        echo Session::get('loggedIn');
//        echo Session::get('userName');
//        exit;
    }
     function payment($no_resi){
        $this->view->no_resi=$no_resi;
        
        $this->view->render('paket/payment');//echo 'ss';exit();
//        header('location: http://localhost/test/?'.$new_bookingID.$book_total_ammount);
//        exit();
    }

     function transfer_bank($no_resi){
        $this->view->no_resi=$no_resi;
       
        $this->view->list_rekening = $this->model->listrekening();
        // $this->view->list_booking=$this->model->list_booking($new_bookingID);
      
        $this->view->render('paket/v_rekening');//echo 'ss';exit();
//        header('location: http://localhost/test/?'.$new_bookingID.$book_total_ammount);
//        exit();
    }
     function paymentConform_cod($no_resi) {
        
        $rek_id="005";
        


        $data = array(
                'metode_bayar' => 'COD',
                'rek_id_bank' => $rek_id,
                'status' => 'P',
                 );
                            
        $where = "no_resi "."= '".$no_resi."'";
                                    

        $this->model->update_data($where,$data,'pbarang');
         ?>
          <script type="text/javascript">alert("Berhasil Memilih Metode Bayar COD"); window.location.href="<?php echo URL; ?>paket/cetak_invoice/<?php echo $no_resi;?>"</script> <?php
    }

     function paymentConform_transfer_bank($no_resi) {
        
        $rek_id=$_POST['rek_id'];
        $bank=$_POST['bank'];


        $data = array(
                'metode_bayar' => 'Transfer Bank',
                'rek_id_bank' => $rek_id,
                'status' => 'P',
                 );
                            
        $where = "no_resi "."= '".$no_resi."'";
                                    

        $this->model->update_data($where,$data,'pbarang');
         ?>
          <script type="text/javascript">alert("Berhasil memilih Bank <?php echo $bank;?>"); window.location.href="<?php echo URL; ?>paket/cetak_invoice/<?php echo $no_resi;?>"</script> <?php
    }

    function cetak_invoice($no_resi){
        $this->view->no_resi=$no_resi;
        $this->view->list_invoice = $this->model->listinvoice($no_resi);

        $this->view->render('paket/v_invoice');
    }

     function tracking_paket(){
       
        $this->view->render('paket/v_trackingpaket');//echo 'ss';exit();

    }

     function search_trackingpaket(){
         $no_resi=$_POST['no_resi'];
          $cek_brg=$this->model->get_pbarang($no_resi);
                foreach ($cek_brg as $d) {
                        $cek=$d['cek'];
                                # code...
                }
                            
                if ($cek == 0) {
                ?>
                <script type="text/javascript">alert("No Resi / Invoice <?php echo $no_resi; ?> Tidak Valid"); window.location.href="<?php echo URL; ?>paket/tracking_paket"</script> <?php

                }else {
                                 
                ?>
                <script type="text/javascript">alert("No Resi / Invoice <?php echo $no_resi;?> Ditemukan."); window.location.href="<?php echo URL; ?>paket/cetak_invoice/<?php echo $no_resi;?>"</script> <?php
                            }
    }

    function konfirmasi($no_resi) {
        $this->view->no_resi=$no_resi;
        $this->view->list_invoice = $this->model->listinvoice($no_resi);
        $this->view->render('paket/v_konfirmasi');
    }

     function simpan_konfirmasi(){
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
                            $no_invoice=$_POST['no_invoice'];
                            $bank=$_POST['bank'];
                            $nama=$_POST['nama'];
                            $jumlah=$_POST['jumlah'];
                           
                                 $data = array(
                                            'konfirmasi_invoice' => $no_invoice,
                                            'konfirmasi_nama' => $nama,
                                            'konfirmasi_bank' => $bank,
                                            'konfirmasi_jumlah' => $jumlah,
                                            'konfirmasi_bukti' => $gambar
                                            
                                        );

                                $this->model->input_data($data,'konfirmasi_paket');
                                ?>
                                <script type="text/javascript">alert("Konfirmasi Berhasil. Kami akan memvalidasi bukti tranfer anda."); window.location.href="<?php echo URL; ?>paket/cetak_invoice/<?php echo $no_invoice;?>"</script> <?php
                            
                            
                    }else{
                         ?>
                    <script type="text/javascript">alert("Maaf gagal ditambahkan"); window.location.href="<?php echo URL; ?>paket/konfirmasi/<?php echo $no_invoice;?>"</script> <?php
                   
                    }
            }else{
                    ?>
                    <script type="text/javascript">alert("Maaf ukuran gambar terlalu besar"); window.location.href="<?php echo URL; ?>paket/konfirmasi/<?php echo $no_invoice;?>"</script> <?php
                   
                  }
        }else{
            ?>
                    <script type="text/javascript">alert("Maaf, Tipe gambar yang diupload harus JPG / JPEG / PNG."); window.location.href="<?php echo URL; ?>paket/konfirmasi/<?php echo $no_invoice;?>"</script> <?php
          // Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
          
        }

    }
//      function tes(){
//                             $no_resi=$_POST['no_resi'];
//                             $bookerNICNo=$_POST['no_booker'];
//                             $phone_pengirim=$_POST['phone_pengirim'];
//                             $nama_penerima=$_POST['nm_penerima'];
//                             $telepon_penerima=$_POST['phone_penerima'];
//                             $alamat_penerima=$_POST['alamat'];
//                             $jurusan=$_POST['jurusan'];
//                             $tgl_pengiriman=$_POST['tanggal'];
//                             $jenis_barang=$_POST['tipe'];
//                             $ukuran=$_POST['ukuran'];

//                             echo $no_resi;
//                             echo $bookerNICNo;
//                             echo $phone_pengirim;
//                             echo $nama_penerima;
//                             echo $telepon_penerima;
//                             echo $alamat_penerima;
//                             echo $jurusan;
//                             echo $tgl_pengiriman;
//                             echo $jenis_barang;
//                             echo $ukuran;
        
//      //echo 'ss';exit();
// //        header('location: http://localhost/test/?'.$new_bookingID.$book_total_ammount);
// //        exit();
//     }
     function history_paket(){
        $this->view->history_paket=$this->model->list_history_paket(Session::get('userName'));
        $this->view->render('paket/v_history');//echo 'ss';exit();
//        header('location: http://localhost/test/?'.$new_bookingID.$book_total_ammount);
//        exit();
    }

    function simpan_paket(){
                $nama_file = $_FILES['filefoto']['name'];
                $ukuran_file = $_FILES['filefoto']['size'];
                $tipe_file = $_FILES['filefoto']['type'];
                $tmp_file = $_FILES['filefoto']['tmp_name'];

                $path = "./assets/admin/img/".$nama_file;

            
  // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
               // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
    // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
    // Proses upload
                    if(move_uploaded_file($tmp_file, $path)){ // Cek apakah gambar berhasil diupload atau tidak
      
                            
                            $gambar= $nama_file;
                            $no_resi=$_POST['no_resi'];
                            $bookerNICNo=$_POST['no_booker'];
                            $phone_pengirim=$_POST['phone_pengirim'];
                            $titik_jemput=$_POST['titik_jemput'];
                            $alamat_jemput=$_POST['alamat_jemput'];
                            $nama_penerima=$_POST['nm_penerima'];
                            $telepon_penerima=$_POST['phone_penerima'];
                            $alamat_penerima=$_POST['alamat'];
                            $jurusan=$_POST['jurusan'];
                            $tgl_pengiriman=$_POST['tanggal'];
                            $jenis_barang=$_POST['tipe'];
                            $ukuran=$_POST['ukuran'];
                            $qty=$_POST['jumlah_barang'];

                            if ($ukuran=="Kecil"){
                                if ($jenis_barang=="Dokumen") {
                                    $biaya_pengiriman=100000;
                                }else if ($jenis_barang=="Makanan") {
                                    $biaya_pengiriman=50000;
                                }else if ($jenis_barang=="Elektronik"||$jenis_barang=="Lainnya") {
                                    $biaya_pengiriman=100000;
                                }
                                
                            }
                            elseif ($ukuran=="Sedang") {
                                if ($jenis_barang=="Dokumen") {
                                    $biaya_pengiriman=100000;
                                }else if ($jenis_barang=="Makanan") {
                                    $biaya_pengiriman=75000;
                                }else if ($jenis_barang=="Elektronik"||$jenis_barang=="Lainnya") {
                                    $biaya_pengiriman=150000;
                                } 
                            }
                            elseif ($ukuran=="Besar") {
                                if ($jenis_barang=="Dokumen") {
                                    $biaya_pengiriman=100000;
                                }else if ($jenis_barang=="Makanan") {
                                    $biaya_pengiriman=100000;
                                }else if ($jenis_barang=="Elektronik"||$jenis_barang=="Lainnya") {
                                    $biaya_pengiriman=200000;
                                }
                            }
                              if ($jenis_barang=="Dokumen") {
                                  $total_harga=$biaya_pengiriman;
                              }elseif ($jenis_barang=="Makanan") {
                                   $total_harga=$biaya_pengiriman*$qty;
                              }else{
                                    $total_harga=$biaya_pengiriman*$qty;
                              }
                             
                                 $data = array(
                                            'no_resi' => $no_resi,
                                            'tgl_pengiriman' => $tgl_pengiriman,
                                            'bookerNICNo' => $bookerNICNo,
                                            'jurusan' => $jurusan,
                                            'jenis_barang' => $jenis_barang,
                                            'ukuran' => $ukuran,
                                            'jumlah_barang' => $qty,
                                            'nama_penerima' => $nama_penerima,
                                            'alamat_penerima' => $alamat_penerima,
                                            'telepon_penerima' => $telepon_penerima,
                                            'foto_barang' => $gambar,
                                            'biaya_pengiriman' => $total_harga,
                                            'titik_jemput' => $titik_jemput,
                                            'alamat_jemput' => $alamat_jemput,
                                            
                                        );

                                $this->model->input_data($data,'pbarang');
                                ?>
                                <script type="text/javascript">alert("Berhasil. Silahkan Pilih Metode Bayar"); window.location.href="<?php echo URL; ?>paket/payment/<?php echo $no_resi;?>"</script> <?php
                            
                            
                    }else{
                         ?>
                    <script type="text/javascript">alert("Maaf gagal ditambahkan"); window.location.href="<?php echo URL; ?>index/paket"</script> <?php
                   
                    }
           
        

    }

}

?>
