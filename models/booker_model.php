<?php

class Booker_Model extends Model {

    public function __construct() {
        parent::__construct();
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        Session::init();
        date_default_timezone_set("Asia/Colombo");
        //echo date('d-m-Y H:i:s');
    }

    function update_data($where,$data,$table){
        $this->db->update($table,$data,$where);
    }

    function input_data($data,$table){
        $this->db->insert($table,$data);
    }

    public function get_rate_mobil($no_mobil){
        return $this->db->select("SELECT AVG(rate) as jml FROM rating_mobil WHERE no_mobil='$no_mobil'");
    }
    
     public function get_user_rate($username,$no_mobil) {

       //$j_No=$this->setJourneyNo($data['cRouteNo'],$data['cJourneyFrom'],$data['cJourneyTo']);
       return $this->db->select("SELECT COUNT(booker_id) as cek FROM rating_mobil A INNER JOIN system_user B ON A.booker_id=B.bookerNICNo WHERE B.userName='$username' AND A.no_mobil='$no_mobil'");
    }

    public function list_history_kursi($username){
        return $this->db->select("SELECT * FROM system_user A INNER JOIN booker B ON A.bookerNICNo=B.bookerNICNo INNER JOIN booking C ON B.bookerNICNo=C.bookerNICNo WHERE A.userName='$username' ORDER BY
    DATE(C.date)=DATE(NOW()) DESC,
    DATE(C.date)<DATE(NOW()) DESC,
    DATE(C.date)>DATE(NOW()) ASC ");
    }

    public function get_invoice($no_invoice) {

       //$j_No=$this->setJourneyNo($data['cRouteNo'],$data['cJourneyFrom'],$data['cJourneyTo']);
       return $this->db->select("SELECT COUNT(bookingID) as cek FROM booking WHERE bookingID='$no_invoice'");
    }

     public function countticket($no_booking) {

       //$j_No=$this->setJourneyNo($data['cRouteNo'],$data['cJourneyFrom'],$data['cJourneyTo']);
       return $this->db->select("SELECT COUNT(bookingID) as hitung FROM receive_ticke_p WHERE bookingID='$no_booking' ");
    }

    public function get_ticket($no_invoice) {

       //$j_No=$this->setJourneyNo($data['cRouteNo'],$data['cJourneyFrom'],$data['cJourneyTo']);
       return $this->db->select("SELECT COUNT(ticketNo) as cek FROM receive_ticke WHERE bookingID='$no_invoice'");
    }

    public function xhrSearchAvailableSeat($b, $d, $j) {

        $busNo = $b;
        $date = $d;
        $journeyNo = $j;
        $result = $this->db->select('SELECT seatNo, status FROM available_seat 
            WHERE busNo ="' . $busNo . '" AND date ="' . $date . '" ');
        return $result;
    }

    public function xhrInsertBookingSeat() {

        $result = $this->db->insert('available_seat', array(
            'seatNo' => $_POST['seatNo'],
            'busNo' => $_POST['busNo'],
            'journeyNo' => $_POST['journeyNo'],
            'status' => $_POST['status'],
            'date' => $_POST['bus_book_date'],
            'time' => Session::get('seatBookingTime')
                ));

        echo json_encode($result);
    }

    public function xhrClearAllSeate() {

        $busNo = $_POST['busNo'];
        $journeyNo = $_POST['journeyNo'];
        $date = $_POST['bus_book_date'];
        $seatNo = $_POST['seatNo'];
        $status = $_POST['status'];
        //print_r($seatNo) ;
        $this->db->beginTransaction();
        try {
            foreach ($seatNo as $value) {
                $sth = $this->db->prepare('DELETE FROM available_seat 
                WHERE
                status="' . $status . '" AND
                busNo="' . $busNo . '" AND 
                date="' . $date . '" AND
                journeyNo="' . $journeyNo . '" AND
                seatNo="' . $value . '" ');
                $sth->execute();
            }
            echo json_encode($this->db->commit());
        } catch (Exception $e) {
            $this->db->rollBack();
            echo json_encode($e->getMessage());
        }
    }

    public function searchAllBoardingPoint($id) {
        return $this->db->select('SELECT
                entry_point.entryPointNo,
                entry_point.entryPoint 
                FROM entry_point JOIN entrypoint_for_journey ON entry_point.entryPointNo = entrypoint_for_journey.entryPointNo 
                WHERE entrypoint_for_journey.journeyNo ="' . $id . '"');
    }

    public function listrekening() {

       //$j_No=$this->setJourneyNo($data['cRouteNo'],$data['cJourneyFrom'],$data['cJourneyTo']);
       return $this->db->select("SELECT * FROM rekening");
    }

     
    public function listticket($no_booking) {

       //$j_No=$this->setJourneyNo($data['cRouteNo'],$data['cJourneyFrom'],$data['cJourneyTo']);
       return $this->db->select("SELECT * FROM receive_ticke_p A INNER JOIN booking B ON A.bookingID=B.bookingID WHERE A.bookingID='$no_booking' ");
    }
    public function listinvoice($no_booking) {

       //$j_No=$this->setJourneyNo($data['cRouteNo'],$data['cJourneyFrom'],$data['cJourneyTo']);
       return $this->db->select("SELECT *, DATE_FORMAT(A.s_bookin_time,'%d %M %Y') AS tgl,DATE_FORMAT(A.date,'%d %M %Y') AS tgl_booking FROM booking A INNER JOIN booker B ON A.bookerNICNo=B.bookerNICNo INNER JOIN journey C ON A.journeyNo=C.journeyNo INNER JOIN rekening D ON A.rek_id_bank=D.rek_id INNER JOIN bus E ON A.busNo=E.busNo INNER JOIN sopir_dtl F ON E.busNo=F.no_mobil INNER JOIN system_user G ON F.id_sopir=G.id_sopir INNER JOIN sopir_cadangan H ON F.id_sopir_cadangan=H.id_sopir_cadangan WHERE G.privilege='Sopir' AND A.bookingID = '$no_booking' order by date(A.s_bookin_time) desc");
    }
    
    public function listrekening_transfer($id) {

       //$j_No=$this->setJourneyNo($data['cRouteNo'],$data['cJourneyFrom'],$data['cJourneyTo']);
       return $this->db->select("SELECT * FROM rekening WHERE rek_id = $id ");
    }

    public function nic($user) {

       //$j_No=$this->setJourneyNo($data['cRouteNo'],$data['cJourneyFrom'],$data['cJourneyTo']);
       return $this->db->select("SELECT A.bookerNICNo FROM system_user A INNER JOIN booker B ON A.bookerNICNo = B.bookerNICNo WHERE A.userName = '$user'");
    }


    public function xhrserchBookerInfo() {
      $nic = $_POST['booker_nic'];
      $result = $this->db->select('SELECT * FROM booker WHERE bookerNICNo ="' . $nic . '" ');
      echo json_encode($result);
    }

    



    public function updateBookerInfo() {

        try {
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    
    public function searchBookerInfo() {

        try {
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function getBookerRepot() {

        try {
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    

}
?>


