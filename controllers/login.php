<?php

class Login extends Controller {

    function __construct() {
        parent::__construct();
        Session::init();
        //$this->view->js = array('public/js/jspath.js');
    }

    /*
     * View login page.
     */

    function index() {
        $this->view->render('login/index');
    }


    function registrasi() {
      
        $this->view->render('login/register');
    }    

    function service() {
        $this->view->render('login/service');
    }    
    /*
     * method in Login class.
     */

    function loginToSystem() {
        $userName = $_POST['userName'];
        $password = Hash::create('md5', $_POST['password'], HASH_PASSWORD_KEY);
        $cek_status_sopir=$this->model->get_status_akun_sopir($userName,$password);
        foreach ($cek_status_sopir as $sts_sopir) {
          $status_sopir=$sts_sopir['status'];
        }
        $cek_user=$this->model->get_datauserlogin($userName,$password);
        foreach ($cek_user as $k) {
         $cek=$k['cek'];
       }
       
       if ($cek == 1) {
        if ($status_sopir=="Tidak Aktif") {
             ?>
        
          <script type="text/javascript">alert("Akun Sopir Cadangan Anda Dinon-aktifkan, silahkan ajukan sopir terlebih dahulu"); window.location.href="<?php echo URL; ?>login"</script> <?php
          }else {
            $this->model->loginToSystem();
          }
        
      }else {
            ?>
        
          <script type="text/javascript">alert("Username atau Password salah"); window.location.href="<?php echo URL; ?>login"</script> <?php
      }
    }

    function registerToSystem1() {
       $userName = $_POST['username'];
       $password = Hash::create('md5', $_POST['password'], HASH_PASSWORD_KEY);
       $email = $_POST['email'];
       $nik = $_POST['nik'];  
       $bookerName = $_POST['namalengkap'];
       $jenis_kelamin = $_POST['gender'];
       $phone = $_POST['phone'];  
       $alamat = $_POST['alamat'];   
       $empolyeeNo = "BKOn"; 
       $bookerNICNo = date('Y')."BK-".$phone;
       $tanggal = date("Y-m-d H:i:s");
       $privilege = "BKOnline"; 
       $cek_user=$this->model->get_datauser($userName);



       $data = array(
            'userName' => $userName,
            'empolyeeNo' => $empolyeeNo,
            'empolyeeName' => $bookerName,
            'empolyeeMNo' => $phone,
            'bookerNICNo' => $bookerNICNo,
            'password' => $password,
            'privilege' => $privilege
                
            );

       $data1 = array(
            'bookerNICNo' => $bookerNICNo,
            'nik' => $nik,
            'bookerName' => $bookerName,
            'email' => $email,
            'bookerMNo' => $phone,
            'alamat' => $alamat,
            'jenis_kelamin' => $jenis_kelamin,
            'tgl_register' => $tanggal
                
            );

       foreach ($cek_user as $k) {
         $cek=$k['cek'];
       }
       
       if ($cek == 0) {
      
       
       $this->model->input_data($data,'system_user');
       $this->model->input_data($data1,'booker');
       
            ?>
      
          <script type="text/javascript">alert("Registrasi berhasil kode NIC kamu adalah <?php echo $bookerNICNo; ?> harap di ingat"); window.location.href="<?php echo URL; ?>login"</script> <?php

        }else {

             ?>
      
          <script type="text/javascript">alert("Registrasi gagal Username <?php echo $userName; ?> sudah ada, silahkan isikan username yang lain.."); window.location.href="<?php echo URL; ?>login/registrasi"</script> <?php
        }
         
    }



     function registerToSystem() {
                $nama_file = $_FILES['filefoto']['name'];
                $ukuran_file = $_FILES['filefoto']['size'];
                $tipe_file = $_FILES['filefoto']['type'];
                $tmp_file = $_FILES['filefoto']['tmp_name'];

                $path = "./assets/admin/img/booker/".$nama_file;

          
                
                  if(move_uploaded_file($tmp_file, $path)){ // Cek apakah gambar berhasil diupload atau tidak
                              $userName = $_POST['username'];
                              $gambar= $nama_file;
                               $password = Hash::create('md5', $_POST['password'], HASH_PASSWORD_KEY);
                               $email = $_POST['email'];
                               // $nik = $_POST['nik'];  
                               $bookerName = $_POST['namalengkap'];
                               $jenis_kelamin = $_POST['gender'];
                               $phone = $_POST['phone'];  
                               $alamat = $_POST['alamat'];   
                               $empolyeeNo = "BKOn"; 
                               $bookerNICNo = date('Y')."BK-".$phone;
                               $tanggal = date("Y-m-d H:i:s");
                               $privilege = "BKOnline"; 
                               $cek_user=$this->model->get_datauser($userName);


                               $data = array(
                                    'userName' => $userName,
                                    'empolyeeNo' => $empolyeeNo,
                                    'empolyeeName' => $bookerName,
                                    'empolyeeMNo' => $phone,
                                    'bookerNICNo' => $bookerNICNo,
                                    'password' => $password,
                                    'privilege' => $privilege
                                    );

                               $data1 = array(
                                    'userName' => $userName,
                                    'bookerNICNo' => $bookerNICNo,
                                    'bookerName' => $bookerName,
                                    'email' => $email,
                                    'bookerMNo' => $phone,
                                    'alamat' => $alamat,
                                    'jenis_kelamin' => $jenis_kelamin,
                                    'tgl_register' => $tanggal,
                                    'foto_ktp' => $gambar
                                        
                                    );

                               foreach ($cek_user as $k) {
                                 $cek=$k['cek'];
                               }
                               
                               if ($cek == 0) {
                              
                               
                               $this->model->input_data($data,'system_user');
                               $this->model->input_data($data1,'booker');
                               
                                    ?>
                              
                                  <script type="text/javascript">alert("Registrasi berhasil kode NIC kamu adalah <?php echo $bookerNICNo; ?> harap di ingat"); window.location.href="<?php echo URL; ?>login"</script> <?php

                                }else {

                                     ?>
                                  <script type="text/javascript">alert("Registrasi gagal Username <?php echo $userName; ?> sudah ada, silahkan isikan username yang lain.."); window.location.href="<?php echo URL; ?>login/registrasi"</script> <?php
                                }

                  }else{
                         ?>
                    <script type="text/javascript">alert("Registrasi Gagal, Maaf gagal ditambahkan, Silahkan Ulangi"); window.location.href="<?php echo URL; ?>login/registrasi"</script> <?php
                   
                    }

               
               
      
     
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

}

?>
