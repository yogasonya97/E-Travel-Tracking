<?php
error_reporting(0);
class Konfirmasi extends Controller {

    function __construct() {
        parent::__construct();
    Session::init();    
       // if (Session::get('privilege') != 'AdminLok') 
       //      $this->error();
        
            
    }

    function index() {
        $this->view->no_invoice=$_POST['no_invoice'];
        $this->view->nama=$_POST['nama'];
        $this->view->bank=$_POST['bank'];
        $this->view->nominal=$_POST['nominal'];
        $this->view->render('konfirmasi/v_konfirmasi');
    }

    function konfirmasi_ubahdatapelanggan() {
        $this->view->list_akunbooker=$this->model->ls_akunbooker(Session::get('userName'));
        $this->view->render('konfirmasi/v_ubahpelanggan');
    }

    function konfirmasi_dataplg() {
               
                $nama_file = $_FILES['filefoto']['name'];
                $ukuran_file = $_FILES['filefoto']['size'];
                $tipe_file = $_FILES['filefoto']['type'];
                $tmp_file = $_FILES['filefoto']['tmp_name'];
                $nm_fotoktp= "Konfirmasi_".$nama_file;
                $path = "./assets/admin/img/booker_tampung/".$nm_fotoktp;
                if(!empty($nama_file)){ 

                    if(move_uploaded_file($tmp_file, $path)){ 
      
                            $userName=Session::get('userName');
                            $status_ubahktp="Ubah";
                            $foto_ktp= $nm_fotoktp;
                            $bookerName=$_POST['namalengkap'];
                            $bookerMNo=$_POST['phone'];
                            $bookerNICNo=$_POST['bookerNICNo'];
                            $email=$_POST['email'];
                            $alamat=$_POST['alamat'];
                            $jeniskelamin=$_POST['gender'];
                            $konfirmasi_status=0;
                            $konfirmasi_tanggal= date("Y-m-d H:i:s");

                            $data = array(
                            'userName'   => $userName,
                            'bookerNICNo'   => $bookerNICNo,
                            'bookerName'    => $bookerName,
                            'email'         => $email,
                            'bookerMNo'     => $bookerMNo,
                            'alamat'        => $alamat,
                            'jenis_kelamin' => $jeniskelamin,
                            'foto_ktp'      => $foto_ktp,
                            'konfirmasi_status' => $konfirmasi_status,
                            'konfirmasi_tanggal' => $konfirmasi_tanggal,
                            'status_ubahktp' => $status_ubahktp
                            );
                            $this->model->input_data($data,'konfirmasi_booker');

                            ?>
                    <script type="text/javascript">alert("Pengajuan Perubahan Data Anda Berhasil, sedang di validasi"); window.location.href="<?php echo URL; ?>"</script> <?php
                        
                    }else{
                        ?>
                    <script type="text/javascript">alert("Pengajuan Gagal, Silahkan Ulangi "); window.location.href="<?php echo URL; ?>konfirmasi/konfirmasi_ubahdatapelanggan"</script> <?php
                    }
                        
                }else {
                            $nama_filelama = $_POST['filelama'];
                            $userName=Session::get('userName');
                            $status_ubahktp="Tetap";
                            $foto_ktp= $nama_filelama;
                            $bookerName=$_POST['namalengkap'];
                            $bookerMNo=$_POST['phone'];
                            $bookerNICNo=$_POST['bookerNICNo'];
                            $email=$_POST['email'];
                            $alamat=$_POST['alamat'];
                            $jeniskelamin=$_POST['gender'];
                            $konfirmasi_status=0;
                            $konfirmasi_tanggal=date("Y-m-d H:i:s");

                      $data = array(
                            'userName'   => $userName,
                            'bookerNICNo' => $bookerNICNo,
                            'bookerName' => $bookerName,
                            'email' => $email,
                            'bookerMNo' => $bookerMNo,
                            'alamat' => $alamat,
                            'jenis_kelamin' => $jeniskelamin,
                            'foto_ktp' => $foto_ktp,
                            'konfirmasi_status' => $konfirmasi_status,
                            'konfirmasi_tanggal' => $konfirmasi_tanggal,
                            'status_ubahktp' => $status_ubahktp
                            
                            );
                             $this->model->input_data($data,'konfirmasi_booker');
                             ?>
                    <script type="text/javascript">alert("Pengajuan Perubahan Data Anda Berhasil, sedang di validasi "); window.location.href="<?php echo URL; ?>"</script> <?php

                } 
    }



    // function paket($no_resi) {
    //     $this->view->no_resi=$no_resi;
    //     $this->view->get_invoice=$this->model->get_invoice($no_resi);
    //     $this->view->render('paket/v_konfirmasi');
    // }
   
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
                            $cek_inv=$this->model->get_invoice($no_invoice);
                            foreach ($cek_inv as $d) {
                                $cek=$d['cek'];
                                # code...
                            }
                            
                            if ($cek == 0) {
                                 ?>
                                <script type="text/javascript">alert("No Invoice / Booking <?php echo $no_invoice; ?> Tidak Valid"); window.location.href="<?php echo URL; ?>konfirmasi"</script> <?php

                            }else {
                                 $data = array(
                                            'konfirmasi_invoice' => $no_invoice,
                                            'konfirmasi_nama' => $nama,
                                            'konfirmasi_bank' => $bank,
                                            'konfirmasi_jumlah' => $jumlah,
                                            'konfirmasi_bukti' => $gambar
                                            
                                        );

                                $this->model->input_data($data,'konfirmasi');
                                ?>
                                <script type="text/javascript">alert("Konfirmasi Berhasil. Kami akan memvalidasi bukti tranfer anda."); window.location.href="<?php echo URL; ?>konfirmasi"</script> <?php
                            }
                            
                    }else{
                         ?>
                    <script type="text/javascript">alert("Maaf gagal ditambahkan"); window.location.href="<?php echo URL; ?>konfirmasi"</script> <?php
                   
                    }
            }else{
                    ?>
                    <script type="text/javascript">alert("Maaf ukuran gambar terlalu besar"); window.location.href="<?php echo URL; ?>konfirmasi"</script> <?php
                   
                  }
        }else{
            ?>
                    <script type="text/javascript">alert("Maaf, Tipe gambar yang diupload harus JPG / JPEG / PNG."); window.location.href="<?php echo URL; ?>konfirmasi"</script> <?php
          // Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
          
        }

    }


}

?>