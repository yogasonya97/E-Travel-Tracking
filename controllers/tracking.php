<?php

class Tracking extends Controller {

    function __construct() {
        parent::__construct();
        Session::init();
        //$this->view->js = array('public/js/jspath.js');
    }

    /*
     * View login page.
     */

    function index() {
        $this->view->render('tracking/add-courier');
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

    function addCons(){

    $Shippername = $_POST['Shippername'];
    $Shipperphone = $_POST['Shipperphone'];
    $Shipperaddress = $_POST['Shipperaddress'];
    
    $Receivername = $_POST['Receivername'];
    $Receiverphone = $_POST['Receiverphone'];
    $Receiveraddress = $_POST['Receiveraddress'];
    
    $ConsignmentNo = $_POST['ConsignmentNo'];
    $Shiptype = $_POST['Shiptype'];
    $Weight = $_POST['Weight'];
    $Invoiceno = $_POST['Invoiceno'];
    $Qnty = $_POST['Qnty'];

    $Bookingmode = $_POST['Bookingmode'];
    $Totalfreight = $_POST['Totalfreight'];
    $Mode = $_POST['Mode'];
    
    
    $Packupdate = $_POST['Packupdate'];
    $Pickuptime = $_POST['Pickuptime'];
    $status = $_POST['status'];
    $Comments = $_POST['Comments'];
    

    // $sql = "INSERT INTO tbl_courier (cons_no, ship_name, phone, s_add, rev_name, r_phone, r_add,  type, weight, invice_no, qty, book_mode, freight, mode, pick_date, pick_time, status, comments, book_date )
    //         VALUES('$ConsignmentNo', '$Shippername','$Shipperphone', '$Shipperaddress', '$Receivername','$Receiverphone','$Receiveraddress', '$Shiptype',$Weight , '$Invoiceno', $Qnty, '$Bookingmode', '$Totalfreight', '$Mode', '$Packupdate', '$Pickuptime', '$status', '$Comments', NOW())";    
    //echo $sql;

    $data = array(
            'cons_no' => $ConsignmentNo,
            'ship_name' => $Shippername,
            'phone' => $Shipperphone,
            's_add' => $Shipperaddress,
            'rev_name' => $Receivername,
            'r_phone' => $Receiverphone,
            'r_add' => $Receiveraddress,
            'type' => $Shiptype,
            'weight' => $Weight,
            'invice_no' => $Invoiceno,
            'qty' => $Qnty,
            'book_mode' => $Bookingmode,
            'freight' => $Totalfreight,
            'mode' => $Mode,
            'pick_date' => $Packupdate,
            'pick_time' => $Pickuptime,
            'status' => $status,
            'comments' => $Comments,
            'book_date' => '2016-10-09'
                
            );

    $this->model->input_data($data,'tbl_courier');
    ?>
            <!-- muncul peringatan kalau login gagal dan langsung kembali ke halaman login.php-->
          <script type="text/javascript">alert("Tambah data barang berhasil."); window.location.href="<?php echo base_url();?>admin/barang"</script> <?php
    
    //echo $Ship;
}//addCons

}

?>
