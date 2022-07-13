<?php

class Sopir_Model extends Model {

    public function __construct() {
        parent::__construct();
       
    }

    function get_rek_id(){
    $q = $this->db->select("SELECT MAX(RIGHT(rek_id,3)) AS kd_max FROM rekening");
        $kd = "";
        if($q){
            foreach($q as $k){
                $tmp = ((int)$k['kd_max'])+1;
                $kd = sprintf("%03s", $tmp);
            }
        }else{
            $kd = "001";
        }
        return $kd;
  }
    public function get_datauser($userName) {

       //$j_No=$this->setJourneyNo($data['cRouteNo'],$data['cJourneyFrom'],$data['cJourneyTo']);
       return $this->db->select("SELECT COUNT(userName) AS cek FROM system_user where userName='$userName'");
    }

    public function get_cek_idsopir($userName) {

       //$j_No=$this->setJourneyNo($data['cRouteNo'],$data['cJourneyFrom'],$data['cJourneyTo']);
       return $this->db->select("SELECT COUNT(id_sopir) AS cek FROM system_user where userName='$userName'");
    }
    // public function get_datasopir_dtl($userName) {

    //    //$j_No=$this->setJourneyNo($data['cRouteNo'],$data['cJourneyFrom'],$data['cJourneyTo']);
    //    return $this->db->select("SELECT COUNT(userName) AS cek FROM system_user where userName='$userName'");
    // }
    public function cek_konfirmasi_sopircadangan($id_sopir_utama) {

       //$j_No=$this->setJourneyNo($data['cRouteNo'],$data['cJourneyFrom'],$data['cJourneyTo']);
       return $this->db->select("SELECT COUNT(userName_cadangan) AS cek FROM konfirmasi_sopircadangan where id_sopir_utama='$id_sopir_utama'");
    }

    public function cek_data_sopircd($id_sopirutama) {

       //$j_No=$this->setJourneyNo($data['cRouteNo'],$data['cJourneyFrom'],$data['cJourneyTo']);
       return $this->db->select("SELECT COUNT(userName) as jml FROM system_user A INNER JOIN sopir_dtl B ON A.id_sopir=B.id_sopir WHERE A.id_sopir= '$id_sopirutama' AND A.privilege = 'SopirCD'");
    }

    public function get_datasopircadangan($id_sopir_utama) {

       //$j_No=$this->setJourneyNo($data['cRouteNo'],$data['cJourneyFrom'],$data['cJourneyTo']);
       return $this->db->select("SELECT * FROM system_user A INNER JOIN sopir_dtl B ON A.id_sopir=B.id_sopir WHERE A.id_sopir = '$id_sopir_utama' AND A.privilege = 'SopirCD'");
    }

    function input_data($data,$table){
        $this->db->insert($table,$data);
    }

    function update_data($where,$data,$table){
    
        $this->db->update($table,$data,$where);
  }

    public function get_tiket_mobil($busNo,$date) {

       //$j_No=$this->setJourneyNo($data['cRouteNo'],$data['cJourneyFrom'],$data['cJourneyTo']);
       return $this->db->select("SELECT * FROM receive_ticke A INNER JOIN booking B ON A.bookingID=B.bookingID WHERE B.busNo='$busNo' AND B.date='$date'");
       
    }

     public function countticket($busNo,$date) {

       //$j_No=$this->setJourneyNo($data['cRouteNo'],$data['cJourneyFrom'],$data['cJourneyTo']);
       return $this->db->select("SELECT COUNT(ticketNo) as hitung FROM receive_ticke A INNER JOIN booking B ON A.bookingID=B.bookingID WHERE B.busNo='$busNo' AND B.date='$date'");
    }

   public function searchBookingData($journeyDate, $busNo, $journeyNo) {
        $resultNumberOfSeat = $this->db->select('SELECT numberOfSeat FROM bus WHERE busNo = "' . $busNo . '";');
        foreach ($resultNumberOfSeat as $key => $value) {
            $numberOfSeat = $value['numberOfSeat'];
        }

        $resultBookingSeat = $this->db->select('SELECT 
                                                booking.bookingID,
                                                (SELECT bookerMNo FROM booker WHERE booker.bookerNICNo = booking.bookerNICNo) AS bookerMNo,
                                                (SELECT entryPoint FROM entry_point WHERE entry_point.entryPointNo = booking.entryPointNo) AS entryPoint,
                                                receive_ticke.ticketNo,
                                                receive_ticke.passengerName,
                                                receive_ticke.gender,
                                                receive_ticke.seatNo
                                                FROM booking
                                                JOIN receive_ticke ON booking.bookingID = receive_ticke.bookingID
                                                WHERE booking.busNo = "' . $busNo . '" 
                                                      AND booking.date = "' . $journeyDate . '" 
                                                      AND booking.journeyNo = "' . $journeyNo . '"
                                                      AND booking.payment_status = "Ok" 

                                                ;');

        $bookingDataArry = array();
        for ($i = 1; $i <= $numberOfSeat; $i++) {
            if (!empty($resultBookingSeat)) {
                $bookingDataArry[$i]['seatNo'] = $i;
                foreach ($resultBookingSeat as $key => $value) {
                    if ($i == $value['seatNo']) {
                        $bookingDataArry[$i]['status'] = 'B';
                        $bookingDataArry[$i]['ticketNo'] = $value['ticketNo'];
                        $bookingDataArry[$i]['passengerName'] = $value['passengerName'];
                        $bookingDataArry[$i]['gender'] = $value['gender'];
                        $bookingDataArry[$i]['entryPoint'] = $value['entryPoint'];
                        $bookingDataArry[$i]['bookerMNo'] = $value['bookerMNo'];
                        break;
                    } else {
                        $bookingDataArry[$i]['status'] = 'A';
                        $bookingDataArry[$i]['ticketNo'] = '-';
                        $bookingDataArry[$i]['passengerName'] = '-';
                        $bookingDataArry[$i]['gender'] = '-';
                        $bookingDataArry[$i]['entryPoint'] = '-';
                        $bookingDataArry[$i]['bookerMNo'] = '-';
                    }
                }
            }
        }

//        foreach ($resultBookingSeat as $key => $value) {
//        for ($i = 1; $i <= $numberOfSeat; $i++) {
//            $bookingDataArry[$i]['seatNo'] = $i;
//            
//                if ($i == $value['seatNo']) {
//                    $bookingDataArry[$i]['status'] = 'Booked';
//                    break;
//                }else {
//                    $bookingDataArry[$i]['status'] = 'Available';
//                    //break;
//                }
//            }            
//        }


        return $bookingDataArry;

//        return $this->db->select('SELECT
//                                  *
//                                  FROM bus
//                                  ' );
    }

     public function searchBookingData_cod($journeyDate, $busNo, $journeyNo) {
        $resultNumberOfSeat = $this->db->select('SELECT numberOfSeat FROM bus WHERE busNo = "' . $busNo . '";');
        foreach ($resultNumberOfSeat as $key => $value) {
            $numberOfSeat = $value['numberOfSeat'];
        }

        $resultBookingSeat = $this->db->select('SELECT 
                                                booking.bookingID,
                                                (SELECT bookerMNo FROM booker WHERE booker.bookerNICNo = booking.bookerNICNo) AS bookerMNo,
                                                (SELECT entryPoint FROM entry_point WHERE entry_point.entryPointNo = booking.entryPointNo) AS entryPoint,
                                                receive_ticke.ticketNo,
                                                receive_ticke.passengerName,
                                                receive_ticke.gender,
                                                receive_ticke.seatNo
                                                FROM booking
                                                JOIN receive_ticke ON booking.bookingID = receive_ticke.bookingID
                                                WHERE booking.busNo = "' . $busNo . '" 
                                                      AND booking.date = "' . $journeyDate . '" 
                                                      AND booking.journeyNo = "' . $journeyNo . '"
                                                      AND booking.payment_status = "P" 
                                                       
                                                ;');

        $bookingDataArry = array();
        for ($i = 1; $i <= $numberOfSeat; $i++) {
            if (!empty($resultBookingSeat)) {
                $bookingDataArry[$i]['seatNo'] = $i;
                foreach ($resultBookingSeat as $key => $value) {
                    if ($i == $value['seatNo']) {
                        $bookingDataArry[$i]['status'] = 'B';
                        $bookingDataArry[$i]['ticketNo'] = $value['ticketNo'];
                        $bookingDataArry[$i]['passengerName'] = $value['passengerName'];
                        $bookingDataArry[$i]['gender'] = $value['gender'];
                        $bookingDataArry[$i]['entryPoint'] = $value['entryPoint'];
                        $bookingDataArry[$i]['bookerMNo'] = $value['bookerMNo'];
                        break;
                    } else {
                        $bookingDataArry[$i]['status'] = 'A';
                        $bookingDataArry[$i]['ticketNo'] = '-';
                        $bookingDataArry[$i]['passengerName'] = '-';
                        $bookingDataArry[$i]['gender'] = '-';
                        $bookingDataArry[$i]['entryPoint'] = '-';
                        $bookingDataArry[$i]['bookerMNo'] = '-';
                    }
                }
            }
        }

//        foreach ($resultBookingSeat as $key => $value) {
//        for ($i = 1; $i <= $numberOfSeat; $i++) {
//            $bookingDataArry[$i]['seatNo'] = $i;
//            
//                if ($i == $value['seatNo']) {
//                    $bookingDataArry[$i]['status'] = 'Booked';
//                    break;
//                }else {
//                    $bookingDataArry[$i]['status'] = 'Available';
//                    //break;
//                }
//            }            
//        }


        return $bookingDataArry;

//        return $this->db->select('SELECT
//                                  *
//                                  FROM bus
//                                  ' );
    }

  // public function seatBookingConform($new_bookingID) {
        
  //                       $sth1 = $this->db->prepare('INSERT INTO receive_ticke (`ticketNo`,`passengerName`,`seatNo`,`gender`,`bookingID`)
  //                    VALUES 
  //                    ("' . $new_bookingID . '","' . $array[$x]['passengerName'] . '","' . $array[$x]['seatNo'] . '","' . $array[$x]['gender'] . '","' . $array[$x]['bookingID'] . '")');
  //                       $val1 = $sth1->execute();
  //                       $sth2 = $this->db->prepare('UPDATE available_seat SET status = "B" 
  //                   WHERE seatNo ="' . $array[$x]['seatNo'] . '" AND date ="' . $array[$x]['date'] . '" AND journeyNo ="' . $array[$x]['journeyNo'] . '" ');
  //                       $val2 = $sth2->execute();
  //                   }
  //                   $sth3 = $this->db->prepare('UPDATE booking SET payment_status = "Ok" WHERE bookingID ="' . $array[0]['bookingID'] . '" ');
  //                   $val3 = $sth3->execute();
  //                   $this->db->commit();
  //                   return $array[0]['bookingID'];
                
            
        
  //   }

   
   public function count_jurusan($username) {

       //$j_No=$this->setJourneyNo($data['cRouteNo'],$data['cJourneyFrom'],$data['cJourneyTo']);
       return $this->db->select("SELECT COUNT(D.busNo) AS hitung FROM system_user A INNER JOIN sopir_dtl B ON A.id_sopir=B.id_sopir INNER JOIN bus C ON B.no_mobil=C.busNo INNER JOIN journey_for_bus D ON C.busNo=D.busNo where privilege='Sopir' AND userName= '$username' ");
    }

     public function count_jurusan_plg($username) {

       //$j_No=$this->setJourneyNo($data['cRouteNo'],$data['cJourneyFrom'],$data['cJourneyTo']);
       return $this->db->select("SELECT COUNT(D.busNo) AS hitung FROM system_user A INNER JOIN sopir_dtl B ON A.id_sopir=B.id_sopir INNER JOIN bus C ON B.no_mobil=C.busNo INNER JOIN journey_for_bus D ON C.busNo=D.busNo INNER JOIN journey E ON D.journeyNo=E.journeyNo where A.privilege='Sopir' AND A.userName= '$username' AND E.journeyFrom='Palembang'");
    }

      public function count_jurusan_lpg($username) {

       //$j_No=$this->setJourneyNo($data['cRouteNo'],$data['cJourneyFrom'],$data['cJourneyTo']);
       return $this->db->select("SELECT COUNT(D.busNo) AS hitung FROM system_user A INNER JOIN sopir_dtl B ON A.id_sopir=B.id_sopir INNER JOIN bus C ON B.no_mobil=C.busNo INNER JOIN journey_for_bus D ON C.busNo=D.busNo INNER JOIN journey E ON D.journeyNo=E.journeyNo where A.privilege='Sopir' AND A.userName= '$username' AND E.journeyFrom='Lampung'");
    }

    public function listorder() {

       //$j_No=$this->setJourneyNo($data['cRouteNo'],$data['cJourneyFrom'],$data['cJourneyTo']);
       return $this->db->select("SELECT *, DATE_FORMAT(A.s_bookin_time,'%d %M %Y') AS tgl,DATE_FORMAT(A.date,'%d %M %Y') AS tgl_booking,B.bookerName,A.payment_status FROM booking A INNER JOIN booker B ON A.bookerNICNo=B.bookerNICNo INNER JOIN journey C ON A.journeyNo=C.journeyNo INNER JOIN rekening D ON A.rek_id_bank=D.rek_id order by date(A.s_bookin_time) desc");
    }

     public function get_akun1() {

       //$j_No=$this->setJourneyNo($data['cRouteNo'],$data['cJourneyFrom'],$data['cJourneyTo']);
       return $this->db->select("SELECT * FROM system_user A INNER JOIN booker B ON A.bookerNICNo=B.bookerNICNo where A.privilege='BKOnline'");
    }

     public function get_status_istirahat($username) {

       //$j_No=$this->setJourneyNo($data['cRouteNo'],$data['cJourneyFrom'],$data['cJourneyTo']);
       return $this->db->select("SELECT D.status FROM system_user A INNER JOIN sopir_dtl B ON A.id_sopir=B.id_sopir INNER JOIN bus C ON B.no_mobil=C.busNo INNER JOIN journey_for_bus D ON C.busNo=D.busNo where A.privilege='Sopir' AND D.status='Istirahat' AND A.userName= '$username' ");
    }

    public function di_lampung($username) {
      return $this->db->select("SELECT * FROM system_user A INNER JOIN sopir_dtl B ON A.id_sopir=B.id_sopir INNER JOIN bus C ON B.no_mobil=C.busNo INNER JOIN journey_for_bus D ON C.busNo=D.busNo INNER JOIN journey E ON D.journeyNo=E.journeyNo where A.privilege='Sopir' AND A.userName= '$username' AND E.journeyFrom='Lampung'");
    }

      public function di_palembang($username) {
      return $this->db->select("SELECT * FROM system_user A INNER JOIN sopir_dtl B ON A.id_sopir=B.id_sopir INNER JOIN bus C ON B.no_mobil=C.busNo INNER JOIN journey_for_bus D ON C.busNo=D.busNo INNER JOIN journey E ON D.journeyNo=E.journeyNo where A.privilege='Sopir' AND A.userName= '$username' AND E.journeyFrom='Palembang'");
    }

     public function get_akun_sopir($username) {

       //$j_No=$this->setJourneyNo($data['cRouteNo'],$data['cJourneyFrom'],$data['cJourneyTo']);
       return $this->db->select("SELECT * FROM system_user A INNER JOIN sopir_dtl B ON A.id_sopir=B.id_sopir INNER JOIN bus C ON B.no_mobil=C.busNo where privilege='Sopir' AND userName='$username' ");
    }

    public function get_jurusan_mobil($username) {
        return $this->db->select("SELECT * FROM system_user A INNER JOIN sopir_dtl B ON A.id_sopir=B.id_sopir INNER JOIN bus C ON B.no_mobil=C.busNo INNER JOIN journey_for_bus D ON C.busNo=D.busNo where privilege='Sopir' AND userName= '$username' ");
    }

    public function get_jurusanstatus_ada($username) {
        return $this->db->select("SELECT * FROM system_user A INNER JOIN sopir_dtl B ON A.id_sopir=B.id_sopir INNER JOIN bus C ON B.no_mobil=C.busNo INNER JOIN journey_for_bus D ON C.busNo=D.busNo INNER JOIN journey E ON D.journeyNo=E.journeyNo where privilege='Sopir' AND userName= '$username' AND D.status='Ada' ");
    }

    public function get_jurusanstatus_Tidakada($username) {
        return $this->db->select("SELECT * FROM system_user A INNER JOIN sopir_dtl B ON A.id_sopir=B.id_sopir INNER JOIN bus C ON B.no_mobil=C.busNo INNER JOIN journey_for_bus D ON C.busNo=D.busNo where privilege='Sopir' AND userName= '$username' AND D.status='Tidak Ada' ");
    }

    public function get_mobil() {
        return $this->db->select('SELECT * FROM bus GROUP BY busNo ORDER BY busNo ASC ');
    }


     public function notifkonfirmasi() {

       //$j_No=$this->setJourneyNo($data['cRouteNo'],$data['cJourneyFrom'],$data['cJourneyTo']);
       return $this->db->select("SELECT COUNT(konfirmasi_id) AS jum_kon FROM konfirmasi WHERE konfirmasi_status='0'");
    }

    public function listkonfirmasi() {

       //$j_No=$this->setJourneyNo($data['cRouteNo'],$data['cJourneyFrom'],$data['cJourneyTo']);
       return $this->db->select("SELECT DATE_FORMAT(konfirmasi_tanggal,'%d %M %Y') AS tgl,konfirmasi_nama,konfirmasi_nama FROM konfirmasi WHERE konfirmasi_status='0' order by date(konfirmasi_tanggal) desc");
    }

     public function listkonfirmasi1() {

       //$j_No=$this->setJourneyNo($data['cRouteNo'],$data['cJourneyFrom'],$data['cJourneyTo']);
       return $this->db->select("SELECT konfirmasi_id,konfirmasi_invoice,konfirmasi_nama,konfirmasi_bank,ammount AS inv_total,konfirmasi_jumlah,konfirmasi_bukti,DATE_FORMAT(konfirmasi_tanggal,'%d/%m/%Y') AS tanggal FROM konfirmasi A INNER JOIN booking B ON A.konfirmasi_invoice=B.bookingID WHERE A.konfirmasi_status='0' ORDER BY A.konfirmasi_id DESC");
    }

    public function get_list_kursi($busNo,$date) {

       //$j_No=$this->setJourneyNo($data['cRouteNo'],$data['cJourneyFrom'],$data['cJourneyTo']);
       return $this->db->select("SELECT * FROM available_seat WHERE date='$date' AND busNo='$busNo'");
       
    }

      public function listrekening() {

       //$j_No=$this->setJourneyNo($data['cRouteNo'],$data['cJourneyFrom'],$data['cJourneyTo']);
       return $this->db->select("SELECT * FROM rekening");
    }

    function hapus_order($kode){
            
           
           return $this->db->delete('booking', "bookingID = '$kode'");
      
        }

    function hapus_kursi($seatNo,$journeyNo,$date){
            
           
            return $this->db->delete('available_seat', "seatNo = '$seatNo' AND journeyNo = '$journeyNo' AND date = '$date'");
      
    }

          function hapus_rekening($kode){
            
           
           return $this->db->delete('rekening', "rek_id = '$kode'");
      
        }

    function hapus_pelanggan($kode){
            
           
           return $this->db->delete('system_user', "bookerNICNo = '$kode'");
      
        }
        function hapus_pelanggan2($kode){
            
           
           return $this->db->delete('booker', "bookerNICNo = '$kode'");
      
        }

          
     function hapus_akun_sopircadangan_systemuser($userName_cadangan){
            
           
           return $this->db->delete('system_user', "userName = '$userName_cadangan'");
      
        }
        function hapus_akun_sopircadangan_sopir_cadangan($userName_cadangan){
            
           
           return $this->db->delete('sopir_cadangan', "userName_cadangan = '$userName_cadangan'");
      
        }

        function hapus_akun_sopircadangan_konfirmasi_sopircadangan($userName_cadangan){
            
           
           return $this->db->delete('konfirmasi_sopircadangan', "userName_cadangan = '$userName_cadangan'");
      
        }



}
?>


