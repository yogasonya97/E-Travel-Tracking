<?php

//require '../libs/Controller.php';
class Booker extends Controller {

    //protected $busDara;

    function __construct() {
        parent::__construct();
        $this->arrayBusData = array();
        Session::init();
        require 'models/bus_model.php';
        require 'models/printTicket_model.php';
        $this->availablelBus = new Bus_Model();
        $this->printTicket = new PrintTicket_Model();
        $this->view->js_1 = array('public/js/booker/default.js');
    }

    function error() {
        require 'controllers/error.php';
        $controller = new Error();
        $controller->index('Sorry ...! You can not Accsess This Page');
    }

    /*
     * method in Booker class.
     */



    function index() {
        if (isset($_POST['searchBuses'])) {
            $this->view->availablelBus = $this->availablelBus->searchAvailablelBus($_POST['journeyFrom'], $_POST['journeyTo'], $_POST['dateOfJourney']);
            $cek_bus = $this->availablelBus->searchAvailablelBus($_POST['journeyFrom'], $_POST['journeyTo'], $_POST['dateOfJourney']);
            foreach ($cek_bus as $key => $value) {
                    $no_mobil=$value['busNo'];
            $rate=$this->model->get_rate_mobil($no_mobil);
            foreach ($rate as $r) {
                $this->view->rating=$r['jml'];
            }

            }
            
            $this->view->status = $this->availablelBus->status_journey();
            
            
            
            //$this->view->journeyNo = $this->availablelBus->getjourneyNo($_POST['journeyFrom'], $_POST['journeyTo']);
            $this->view->journeyFrom =$_POST['journeyFrom'];
            $this->view->journeyTo = $_POST['journeyTo'];
            $this->view->bookDate = $_POST['dateOfJourney'];
            $this->view->render('booker/availableBus');
        } else {
            header('location: ' . URL);
        }
    }

    

    function booking() {        //print_r($_POST) ; exit(); 
        if (isset($_POST['bookNow'])) {
            $this->view->js_2 = array('public/js/booker/book_1.js');
            $this->view->js_3 = array('public/js/booker/seat_1.js');
            $this->view->busDara = $_POST;
            $this->view->journeyNo = $this->availablelBus->getjourneyNo2($_POST['book_busNo'],$_POST['book_journeyFrom'], $_POST['book_journeyTo']);
            $this->view->render('booker/booking');
        } else {
            Session::deset('bookingTime');
            Session::deset('seatBookingTime');
            Session::deset('sessionforSelectin_s');
            Session::deset('sessionforSelectin_s_tot_price');
            header('location: ' . URL);
        }
    }

    function viewBusSeat() {
        if (isset($_POST['busNo'])) {
            $this->view->seatDara = $_POST;
            $this->view->render('booker/viewBusSeat', true);
        } else {
            header('location: ' . URL);
        }
    }

    function onlineBooker() {
        if (isset($_POST['Continue'])) {
            $this->view->js_2 = array('public/js/booker/book_1.js');
            $this->view->js_3 = array('public/js/booker/o_m_booker.js');
            $this->view->nic = $this->model->nic(Session::get('userName'));
            $this->view->searchAllBoardingPoint = $this->searchAllBoardingPoint($_POST['book_journeyNo']);
            $this->view->busDara = $_POST;
            $this->view->render('booker/onlineBooker');
        } else {
            Session::deset('bookingTime');
            Session::deset('seatBookingTime');
            Session::deset('sessionforSelectin_s');
            Session::deset('sessionforSelectin_s_tot_price');
            header('location: ' . URL);
        }
    }

    function manualBooker() {
        if (Session::get('privilege') == 'Booker') {
            if (isset($_POST['Continue'])) {
                $this->view->js_2 = array('public/js/booker/book_1.js');
                $this->view->js_3 = array('public/js/booker/o_m_booker.js');
                $this->view->searchAllBoardingPoint = $this->searchAllBoardingPoint($_POST['book_journeyNo']);
                $this->view->busDara = $_POST;
                $this->view->render('booker/manualBooker');
            } else {
                Session::deset('bookingTime');
                Session::deset('seatBookingTime');
                Session::deset('sessionforSelectin_s');
                Session::deset('sessionforSelectin_s_tot_price');
                header('location: ' . URL);
            }
        } else {
            header('location:'. URL.'login');
        }
    }
    
    function payment($new_bookingID){
        if ($new_bookingID==NULL){
            ?>
                <script type="text/javascript">alert("Maaf, Silahkan Ulangi lagi, Kemungkinan kursi sudah dipesan"); window.location.href="<?php echo URL; ?>index/pemesanan"</script> <?php
        }else{
        $this->view->no_booking=$new_bookingID;
        $this->view->js_2 = array('public/js/booker/o_m_booker.js');
        // $this->view->list_booking=$this->model->list_booking($new_bookingID);
        $this->view->bookingTicket = $this->printTicket->searchbookingTicket($new_bookingID);
        $this->view->render('booker/payment');
        }
        
    }

    function history_order(){
        $this->view->history_order=$this->model->list_history_kursi(Session::get('userName'));
        $this->view->render('booker/v_history');//echo 'ss';exit();
//        header('location: http://localhost/test/?'.$new_bookingID.$book_total_ammount);
//        exit();
    }

    function transfer_bank($new_bookingID){
        $this->view->no_booking=$new_bookingID;
        $this->view->js_2 = array('public/js/booker/o_m_booker.js');
        $this->view->list_rekening = $this->model->listrekening();
        // $this->view->list_booking=$this->model->list_booking($new_bookingID);
        $this->view->bookingTicket = $this->printTicket->searchbookingTicket($new_bookingID);
        $this->view->render('booker/v_rekening');//echo 'ss';exit();
//        header('location: http://localhost/test/?'.$new_bookingID.$book_total_ammount);
//        exit();
    }

     function tracking_booking(){
       
        $this->view->render('booker/v_trackingbooking');//echo 'ss';exit();

    }

     function track_mobil($no_booking){
        $list_invoice = $this->model->listinvoice($no_booking);
        foreach($list_invoice as $s){
            $bookingID=$s['bookingID'];
             $bookerName=$s['bookerName'];
            $nm_sopir=$s['nm_sopir'];
            $busNo=$s['busNo'];
            $bus_model=$s['busModel'];
            $phone=$s['no_phone'];
            $lng=$s['lng'];
            $lat=$s['lat'];

            $status_sopir_utama=$s['status_akun_sopir'];
            $nm_sopircd=$s['nama_sopircadangan'];
            $hp_sopircd=$s['phone_cadangan'];
            $no_mobil_cadangan=$s['no_mobil_cadangan'];
            $model_mobil_cadangan=$s['model_mobil_cadangan'];
        }
        if ($status_sopir_utama=="Dialihkan") {
            $this->view->busNo=$no_mobil_cadangan;
            $this->view->booking_id=$bookingID;
            $this->view->bookerName=$bookerName;
            $this->view->bus_model=$model_mobil_cadangan;
            $this->view->nm_sopir=$nm_sopircd;
            $this->view->phone=$hp_sopircd;
            $this->view->lng=$lng;
            $this->view->lat=$lat;
        }else{
            $this->view->busNo=$busNo;
            $this->view->booking_id=$bookingID;
            $this->view->bookerName=$bookerName;
            $this->view->bus_model=$bus_model;
            $this->view->nm_sopir=$nm_sopir;
            $this->view->phone=$phone;
            $this->view->lng=$lng;
            $this->view->lat=$lat;
        }
            
            $this->view->render('booker/track_mobil');

    }

    function search_trackingbooking(){
         $no_invoice=$_POST['no_invoice'];
          $cek_inv=$this->model->get_invoice($no_invoice);
                foreach ($cek_inv as $d) {
                        $cek=$d['cek'];
                                # code...
                }
                            
                if ($cek == 0) {
                ?>
                <script type="text/javascript">alert("No Invoice / Booking <?php echo $no_invoice; ?> Tidak Valid"); window.location.href="<?php echo URL; ?>booker/tracking_booking"</script> <?php

                }else {
                                 
                ?>
                <script type="text/javascript">alert("No Booking / Invoice <?php echo $no_invoice;?> Ditemukan."); window.location.href="<?php echo URL;?>booker/track_mobil/<?php echo $no_invoice;?>"</script> <?php
                            }
    }

    // function set_pembayaran($no_booking){
    //     $rek_id= $_POST['rek_id'];
    //     $bank= $_POST['bank'];
        

    //     $data = array(
    //         'metode_bayar' => 'Transfer_bank',
    //         'rek_id_bank' => $rek_id, 
    //     );

    //     $where = "bookingID = ".$no_booking;
    //     $this->model->update_data($where,$data,"booking");
         
    // }

     function cetak_invoice($no_booking){
        $this->view->no_booking=$no_booking;
        $this->view->list_invoice = $this->model->listinvoice($no_booking);
        $this->view->list_ticket = $this->model->listticket($no_booking);
        $list_ticket1 = $this->model->countticket($no_booking);
         foreach ($list_ticket1 as $d){ 
                         $hitung=$d['hitung']; 
                                                            }
        $this->view->hitung = $hitung;
        $this->view->cek_ticket =$this->model->get_ticket($no_booking);

        $this->view->render('booker/v_invoice');//echo 'ss';exit();
//        header('location: http://localhost/test/?'.$new_bookingID.$book_total_ammount);
//        exit();
    }

    function rate_mobil(){
        $mobil=$_POST['no_mobil'];
        $no_invoice=$_POST['no_booking'];
        $cek_user=$this->model->get_user_rate(Session::get('userName'),$mobil);
        foreach ($cek_user as $c) {
                $cek=$c['cek'];
            # code...
        }
        if ($cek==0) {
            $booker_id=$_POST['booker_id'];
            $no_mobil=$_POST['no_mobil'];
            $rate=$_POST['rating'];
            $tgl_rating =date("Y-m-d H:i:s");

            $data = array(
                'booker_id' => $booker_id,
                'no_mobil' => $no_mobil,
                'rate' => $rate,
                'tgl_rating' => $tgl_rating
            );
            $this->model->input_data($data,'rating_mobil');

        }else{
            $booker_id=$_POST['booker_id'];
            $no_mobil=$_POST['no_mobil'];
            $rate=$_POST['rating'];
            $tgl_rating =date("Y-m-d");

            $data1 = array(
                'booker_id' => $booker_id,
                'no_mobil' => $no_mobil,
                'rate' => $rate,
                'tgl_rating' => $tgl_rating
            );
                            
            $where = "no_mobil "."= '".$no_mobil."' AND booker_id= '".$booker_id."'";
                                    

            $this->model->update_data($where,$data1,'rating_mobil');

        }
        
         header('location:'. URL.'booker/search_invoice/'.$no_invoice);
         
    }
    

    function search_invoice($no_invoice){
          $cek_inv=$this->model->get_invoice($no_invoice);
                foreach ($cek_inv as $d) {
                        $cek=$d['cek'];
                                # code...
                }
                            
                if ($cek == 0) {
                ?>
                <script type="text/javascript">alert("No Invoice / Booking <?php echo $no_invoice; ?> Tidak Valid"); window.location.href="<?php echo URL; ?>booker/tracking_booking"</script> <?php

                }else {
                                 
                ?>
                <script type="text/javascript">alert("Berhasil Memberikan Rating Mobil, Terima Kasih"); window.location.href="<?php echo URL; ?>booker/cetak_invoice/<?php echo $no_invoice;?>"</script> <?php
                            }
    }

    function xhrIncrementSessionforSelectin_s() {
        $selectin_s = array();
        Session::set('sessionforSelectin_s_tot_price', $_POST['tot_price']);
        $i = 0;
        if ((Session::get('sessionforSelectin_s')) == true) {
            foreach (Session::get('sessionforSelectin_s') as $key => $value) {
                $selectin_s[$i++] = $value;
            }
        }
        $selectin_s[$i] = $_POST['seatNo'];
        Session::set('sessionforSelectin_s', $selectin_s);
        echo json_encode($selectin_s);
    }

    function xhrSubtractionSessionforSelectin_s() {
        $selectin_s = array();
        Session::set('sessionforSelectin_s_tot_price', $_POST['tot_price']);
        $i = 0;
        foreach ($_POST['seatNo'] as $key => $value1) {
            $seat = $value1;
        }
        if ((Session::get('sessionforSelectin_s')) == true) {
            foreach (Session::get('sessionforSelectin_s') as $key => $value) {
                if ($value != $seat)
                    $selectin_s[$i++] = $value;
            }
        }
        //echo $seat;
        Session::set('sessionforSelectin_s', $selectin_s);
        echo json_encode($selectin_s);
    }

    function xhrgetSessionforSelectin_s() {
        $selectin_s = array();
        if ((Session::get('sessionforSelectin_s')) == true) {
            foreach (Session::get('sessionforSelectin_s') as $key => $value) {
                $selectin_s[$key] = $value;
            }
        }
        echo json_encode($selectin_s);
    }

    function xhrgetSessionforSelectin_s_tot() {
        $tot = 0;
        $tot = Session::get('sessionforSelectin_s_tot_price');
        echo json_encode($tot);
    }

    function getSessionSelectin_s() {
        echo json_encode(Session::get('sessionforSelectin_s'));
    }

    function xhrsetSession() {
        Session::set('bookingTime', time());
        Session::set('seatBookingTime', date("H:i:s"));
        echo date("H:i:s");
    }

    function xhrSessionTimeOut() {
        if (Session::get('bookingTime') == true) {
            $time = time() - Session::get('bookingTime');
            if ($time >= 60 * 10) {
                $selectin_s = Session::get('sessionforSelectin_s');
                Session::deset('bookingTime');
                Session::deset('seatBookingTime');
                Session::deset('sessionforSelectin_s');
                Session::deset('sessionforSelectin_s_tot_price');
                echo json_encode($selectin_s);
            } else {
                echo (60 * 10 - $time);
            }
        } //echo json_encode($a);
    }
    
    function xhrtimeOut() {
        if (Session::get('bookingTime') == true) {
            $time = time() - Session::get('bookingTime');
            if ($time >= 60 * 10) {
            } else {
                echo (60 * 10 - $time);
            }
        } //echo json_encode($a);
    }

    function xhrreset() {
        //$selectin_s = Session::get('sessionforSelectin_s');
        Session::deset('bookingTime');
        Session::deset('seatBookingTime');
        Session::deset('sessionforSelectin_s');
        Session::deset('sessionforSelectin_s_tot_price');
        echo json_encode(1);
    }
    
    function xhrClearAllSeate() {

        $this->model->xhrClearAllSeate();
    }

    function xhrserchBookerInfo() {

        $this->model->xhrserchBookerInfo();
    }

    function xhrInsertBookingSeat() {

        $this->model->xhrInsertBookingSeat();
    }

    function searchAllBoardingPoint($id) {
        return $this->model->searchAllBoardingPoint($id);
    }

    function enterBookerInfo() {
        $this->model->enterBookerInfo();
    }

    function updateBookerInfo() {
        $this->model->updateBookerInfo();
    }

    function searchBookerInfo() {
        $this->model->searchBookerInfo();
    }

    function getBookerRepot() {
        $this->model->getBookerRepot();
    }

}

?>
