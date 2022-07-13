<?php

class BookingSeat extends Controller {

    function __construct() {
        parent::__construct();
        Session::init();
        require 'controllers/booker.php';
        $this->booker = new Booker();

        require 'controllers/sendsms.php';
        $this->sms = new Sendsms();
        
    }

    /*
     * method in BookinSeat class.
     */

    function onlineBookerConform() {
        if (isset($_POST['seat0'])) {
            $new_bookingID = $this->insertBookerInfo($_POST);
            $this->model->seatBookingConform_ticket_p($new_bookingID);
            //$this->booker->payment($new_bookingID);
            header('location: ' . URL . 'booker/payment/' . $new_bookingID);
        } else {
            header('location: ' . URL);
        }
    }

    function manualBookerConform() {
        $nik = $_POST['nik'];
        $alamat = $_POST['alamat'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
      

       $data1 = array(
            'nik' => $nik,
            'alamat' => $alamat,
            'jenis_kelamin' => $jenis_kelamin,    
            );
       $this->model->input_data($data1,'booker');

        if (isset($_POST['seat0'])) {
            if (Session::get('privilege') == 'Booker') {
                $this->insertMBookerInfo($_POST);
            } else {
                header('location:' . URL . 'login');
            }
        } else {
            header('location: ' . URL);
        }
    }

//    function payment($new_bookingID,$book_total_ammount){
//        echo $new_bookingID;
//        header('location: http://localhost/test/?'.$new_bookingID.$book_total_ammount);
//        exit();
//    }

    function paymentConform($bookingID) {
        if (isset($bookingID)) {
            $time = time() - Session::get('bookingTime');
            if ($time >= 60 * 9) {
                echo 'Time is Not Enough';
            } else {
                $this->seatBookingConform($bookingID);
            }
        }
    }

    function seatBookingConform($bookingID) {
        //echo 'ok';


        $rebookingID = $this->model->seatBookingConform($bookingID);
        if ($rebookingID != "") { //echo '-ok2';
            //$smsData = $this->model->getSMSData($rebookingID);
//            foreach ($smsData as $key => $value) {
//                $message = 'Booking ID : "' . $value['bookingID'] . '", Booker NIC : "' . $value['bookerNICNo'] . '", Bus Number : "' . $value['busNo'] . '", Route No : "' . $value['routeNo'] . '",Journey : From - "' . $value['journeyFrom'] . '" To - "' . $value['journeyTo'] . '", Entry Point : "' . $value['entryPoint'] . '", Number Of Seat : "' . $value['no_of_seat'] . '", Ammount : "' . $value['ammount'] . '", Date : "' . $value['date'] . '"';
//            }
            //echo $message;
            //$re = $this->sms->sendSMS(Session::get('booker_mno'), $message);
            header('location: ' . URL . 'printTicket/index/' . $rebookingID . '');
        }
    }

   
    function paymentConform_cod($bookingID) {
        if (isset($bookingID)) {
           
                $this->seatBookingConform_cod($bookingID);
         }
    }

    function seatBookingConform_cod($bookingID) {
        //echo 'ok';


        $rebookingID = $this->model->seatBookingConform_cod($bookingID);
        if ($rebookingID != "") { //echo '-ok2';
            //$smsData = $this->model->getSMSData($rebookingID);
//            foreach ($smsData as $key => $value) {
//                $message = 'Booking ID : "' . $value['bookingID'] . '", Booker NIC : "' . $value['bookerNICNo'] . '", Bus Number : "' . $value['busNo'] . '", Route No : "' . $value['routeNo'] . '",Journey : From - "' . $value['journeyFrom'] . '" To - "' . $value['journeyTo'] . '", Entry Point : "' . $value['entryPoint'] . '", Number Of Seat : "' . $value['no_of_seat'] . '", Ammount : "' . $value['ammount'] . '", Date : "' . $value['date'] . '"';
//            }
            //echo $message;
            //$re = $this->sms->sendSMS(Session::get('booker_mno'), $message);
            header('location: ' . URL . 'printTicket/index/' . $rebookingID . '');
        }
    }

    function paymentConform_transfer_acc($bookingID) {
    
        for ($i = 0; $i<$_POST['hitung']; $i++) {
        
            $ticketNo=$_POST['ticketNo'.$i];
            $passengerName=$_POST['passengerName'.$i];
            $seatNo=$_POST['seatNo'.$i];
            $gender=$_POST['gender'.$i];
            $new_nobooking=$_POST['new_nobooking'.$i];
            $date=$_POST['date'.$i];
            $journeyNo=$_POST['journeyNo'.$i];
            
            $data = array(
                            'ticketNo' => $ticketNo,
                            'passengerName' => $passengerName,
                            'seatNo' => $seatNo,
                            'gender' => $gender,
                            'bookingID' => $new_nobooking,
                            
                            );
            $this->model->input_data($data,'receive_ticke');
            $data1 = array(
                            'status' => 'B', 
                        );
            $where = "seatNo"."= '".$seatNo."' AND "."date"."= '".$date."' AND "."journeyNo"."= '".$journeyNo."'";

            $this->model->update_data($where,$data1,'available_seat');
        }
        
        header('location: ' . URL . 'printTicket/index/' . $bookingID . '');
        if (isset($bookingID)) {
                  
                // $this->seatBookingConform_transfer_acc($bookingID,$ticketNo,$passengerName,$seatNo,$gender,$new_nobooking);
         }
    }

    function seatBookingConform_transfer_acc($bookingID,$ticketNo,$passengerName,$seatNo,$gender,$new_nobooking) {
        //echo 'ok';


        $rebookingID = $this->model->seatBookingConform_transfer_acc($bookingID,$ticketNo,$passengerName,$seatNo,$gender,$new_nobooking);
        if ($rebookingID != "") { //echo '-ok2';
            //$smsData = $this->model->getSMSData($rebookingID);
//            foreach ($smsData as $key => $value) {
//                $message = 'Booking ID : "' . $value['bookingID'] . '", Booker NIC : "' . $value['bookerNICNo'] . '", Bus Number : "' . $value['busNo'] . '", Route No : "' . $value['routeNo'] . '",Journey : From - "' . $value['journeyFrom'] . '" To - "' . $value['journeyTo'] . '", Entry Point : "' . $value['entryPoint'] . '", Number Of Seat : "' . $value['no_of_seat'] . '", Ammount : "' . $value['ammount'] . '", Date : "' . $value['date'] . '"';
//            }
            //echo $message;
            //$re = $this->sms->sendSMS(Session::get('booker_mno'), $message);
            header('location: ' . URL . 'printTicket/index/' . $rebookingID . '');
        }
    }


       function paymentConform_transfer_bank($bookingID) {
        
        $rek_id=$_POST['rek_id'];
        $bank=$_POST['bank'];

        $data = array(
                'metode_bayar' => 'Transfer Bank',
                'rek_id_bank' => $rek_id,
                 );
                            
        $where = "bookingID "."= '".$bookingID."'";
                                    

        $this->model->update_data($where,$data,'booking');
         ?>
          <script type="text/javascript">alert("Berhasil memilih Bank <?php echo $bank;?>"); window.location.href="<?php echo URL; ?>booker/cetak_invoice/<?php echo $bookingID;?>"</script> <?php
    }

    function paymentConform_transfer($bookingID) {
        $rek_id=$_POST['rek_id'];
        if (isset($bookingID)) {
           
                $this->seatBookingConform_transfer($bookingID,$rek_id);
         }
    }

    function seatBookingConform_transfer($bookingID,$rek_id) {
        //echo 'ok';


        $rebookingID = $this->model->seatBookingConform_transfer($bookingID,$rek_id);
        if ($rebookingID != "") { //echo '-ok2';
            //$smsData = $this->model->getSMSData($rebookingID);
//            foreach ($smsData as $key => $value) {
//                $message = 'Booking ID : "' . $value['bookingID'] . '", Booker NIC : "' . $value['bookerNICNo'] . '", Bus Number : "' . $value['busNo'] . '", Route No : "' . $value['routeNo'] . '",Journey : From - "' . $value['journeyFrom'] . '" To - "' . $value['journeyTo'] . '", Entry Point : "' . $value['entryPoint'] . '", Number Of Seat : "' . $value['no_of_seat'] . '", Ammount : "' . $value['ammount'] . '", Date : "' . $value['date'] . '"';
//            }
            //echo $message;
            //$re = $this->sms->sendSMS(Session::get('booker_mno'), $message);
            header('location: ' . URL . 'booker/cetak_invoice/' . $rebookingID . '');
        }
    }

    function insertBookerInfo($data) {
        return $this->model->insertBookerInfo($data);
    }

    function insertMBookerInfo($data) {
        return $this->model->insertMBookerInfo($data);
    }

}

?>
