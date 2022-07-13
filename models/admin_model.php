<?php

class Admin_Model extends Model {

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

  function get_total_pelanggan(){
    $hsl=$this->db->query("SELECT COUNT(bookerNICNo) AS tot_pelanggan FROM booker");
    return $hsl;
  }

  function get_grafik_booking(){
    error_reporting(0);
    $query=$this->db->select("SELECT COUNT(bookingID) as hitung, DATE_FORMAT(date,'%d') AS tanggal,SUM(ammount) AS total FROM booking WHERE DATE_FORMAT(date,'%M %Y') = DATE_FORMAT(CURDATE(),'%M %Y') AND NOT payment_status='P' GROUP BY DAY(date)");

  foreach($query as $x){
  $qry=$x['hitung'];
  }
  if($qry > 0){
            foreach($query as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
  }

  function get_grafik_paket(){
    $query=$this->db->select("SELECT COUNT(no_resi) as hitung, DATE_FORMAT(tgl_pengiriman,'%d') AS tanggal,SUM(biaya_pengiriman) AS total FROM pbarang WHERE DATE_FORMAT(tgl_pengiriman,'%M %Y') = DATE_FORMAT(CURDATE(),'%M %Y') AND NOT status='P' GROUP BY DAY(tgl_pengiriman)");

  foreach($query as $s){
  $qrys=$s['hitung'];
  }
  if($qrys > 0){
            foreach($query as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
  }

  function get_grafik_pelanggan(){
    $query=$this->db->select("SELECT DATE_FORMAT(tgl_register,'%M') AS bulan,COUNT(bookerNICNo) AS total FROM booker WHERE YEAR(tgl_register)=YEAR(CURDATE()) GROUP BY MONTH(tgl_register)");

foreach($query as $a){
  $qrya=$a['total'];
  }
    if($qrya > 0){
            foreach($query as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
  }

  function get_all_pelanggan_terbaru(){
    $hsl=$this->db->select("select * from booker order by bookerNICNo desc");
    return $hsl;
  }

  function get_all_order_booking(){
    $hsl=$this->db->select("SELECT A.bookingID as inv_no,DATE_FORMAT(A.date,'%d %M %Y') AS date,A.bookerNICNo as inv_plg_id,B.bookerName as inv_plg_nama,A.payment_status as inv_status,A.ammount as inv_total,A.rek_id_bank as inv_rek_id,C.rek_bank as inv_rek_bank FROM booking A INNER JOIN booker B ON A.bookerNICNo=B.bookerNICNo INNER JOIN rekening C ON A.rek_id_bank=C.rek_id ORDER BY DATE(A.date) DESC");
    return $hsl;
  }

   function get_all_order_paket(){
    $hsl=$this->db->select("SELECT A.no_resi as inv_no,DATE_FORMAT(A.tgl_pengiriman,'%d %M %Y') AS date,A.bookerNICNo as inv_plg_id,B.bookerName as inv_plg_nama,A.status as inv_status,A.biaya_pengiriman as inv_total,A.rek_id_bank as inv_rek_id,C.rek_bank as inv_rek_bank FROM pbarang A INNER JOIN booker B ON A.bookerNICNo=B.bookerNICNo INNER JOIN rekening C ON A.rek_id_bank=C.rek_id ORDER BY DATE(A.tgl_pengiriman) DESC");
    return $hsl;
  }

  function get_total_booking_sekarang(){
    $hsl=$this->db->select("SELECT SUM(ammount) AS total_penjualan FROM booking WHERE MONTH(Date)=MONTH(CURDATE()) AND NOT payment_status = 'P'");
    return $hsl;
  }

  function get_total_booking_bulan_lalu(){
    $hsl=$this->db->query("SELECT SUM(ammount) AS total_penjualan FROM booking WHERE MONTH(Date)=MONTH(CURDATE())-1 AND NOT payment_status = 'P' ");
    return $hsl;
  }

   function get_total_pengiriman_sekarang(){
    $hsl=$this->db->select("SELECT SUM(biaya_pengiriman) AS total_pengiriman FROM pbarang WHERE MONTH(tgl_pengiriman) = MONTH(CURDATE()) AND NOT status = 'P'");
    return $hsl;
  }

  function get_total_pengiriman_bulan_lalu(){
    $hsl=$this->db->query("SELECT SUM(biaya_pengiriman) AS total_pengiriman FROM pbarang WHERE MONTH(tgl_pengiriman) = MONTH(CURDATE())-1 AND NOT status = 'P' ");
    return $hsl;
  }

   function get_total_bookingkursi(){
    $hsl=$this->db->select("SELECT SUM(ammount) AS total_booking FROM booking WHERE NOT payment_status = 'P'");
    return $hsl;
  }

  function get_total_kirimpaket(){
    $hsl=$this->db->select("SELECT SUM(biaya_pengiriman) AS total_kirimpaket FROM pbarang WHERE NOT status = 'P'");
    return $hsl;
  }

    function input_data($data,$table){
        $this->db->insert($table,$data);
    }

    function update_data($where,$data,$table){
    
        $this->db->update($table,$data,$where);
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
  public function list_sopircadangan() {

       //$j_No=$this->setJourneyNo($data['cRouteNo'],$data['cJourneyFrom'],$data['cJourneyTo']);
       return $this->db->select("SELECT * FROM system_user A INNER JOIN sopir_dtl B ON A.id_sopir=B.id_sopir INNER JOIN sopir_cadangan C ON B.id_sopir_cadangan=C.id_sopir_cadangan WHERE A.privilege='Sopir'");
    }

  public function list_sopirutama() {

       //$j_No=$this->setJourneyNo($data['cRouteNo'],$data['cJourneyFrom'],$data['cJourneyTo']);
       return $this->db->select("SELECT * FROM system_user A INNER JOIN sopir_dtl B ON A.id_sopir=B.id_sopir WHERE A.privilege='Sopir'");
    }
  
    public function list_konfirmasi_sopircd() {

       //$j_No=$this->setJourneyNo($data['cRouteNo'],$data['cJourneyFrom'],$data['cJourneyTo']);
       return $this->db->select("SELECT * FROM konfirmasi_sopircadangan A INNER JOIN sopir_dtl B ON A.id_sopir_utama=B.id_sopir");
    }
   
   public function notiforder() {

       //$j_No=$this->setJourneyNo($data['cRouteNo'],$data['cJourneyFrom'],$data['cJourneyTo']);
       return $this->db->select("SELECT COUNT(metode_bayar) AS jum_order FROM booking where payment_status='P'");
    }

    public function list_konfirmasibooker() {

       //$j_No=$this->setJourneyNo($data['cRouteNo'],$data['cJourneyFrom'],$data['cJourneyTo']);
       return $this->db->select("SELECT * FROM konfirmasi_booker where konfirmasi_status='0'");
    }


     public function notiforderpaket() {

       //$j_No=$this->setJourneyNo($data['cRouteNo'],$data['cJourneyFrom'],$data['cJourneyTo']);
       return $this->db->select("SELECT COUNT(metode_bayar) AS jum_order FROM pbarang where status='P'");
    }

     public function foto_ktp_akun($username) {

       //$j_No=$this->setJourneyNo($data['cRouteNo'],$data['cJourneyFrom'],$data['cJourneyTo']);
       return $this->db->select("SELECT foto_ktp FROM booker where userName='$username'");
    }
    public function foto_ktp_akun_tampung($username) {

       //$j_No=$this->setJourneyNo($data['cRouteNo'],$data['cJourneyFrom'],$data['cJourneyTo']);
       return $this->db->select("SELECT foto_ktp FROM konfirmasi_booker where userName='$username'");
    }

    public function listorder() {

       //$j_No=$this->setJourneyNo($data['cRouteNo'],$data['cJourneyFrom'],$data['cJourneyTo']);
       return $this->db->select("SELECT *, DATE_FORMAT(A.s_bookin_time,'%d %M %Y') AS tgl,DATE_FORMAT(A.date,'%d %M %Y') AS tgl_booking,B.bookerName,A.payment_status FROM booking A INNER JOIN booker B ON A.bookerNICNo=B.bookerNICNo INNER JOIN journey C ON A.journeyNo=C.journeyNo INNER JOIN rekening D ON A.rek_id_bank=D.rek_id order by date(A.s_bookin_time) desc");
    }
     public function listorderdtl($no_booking) {

       //$j_No=$this->setJourneyNo($data['cRouteNo'],$data['cJourneyFrom'],$data['cJourneyTo']);
       return $this->db->select("SELECT *, DATE_FORMAT(A.s_bookin_time,'%d %M %Y') AS tgl,DATE_FORMAT(A.date,'%d %M %Y') AS tgl_booking,B.bookerName,A.payment_status FROM booking A INNER JOIN booker B ON A.bookerNICNo=B.bookerNICNo INNER JOIN journey C ON A.journeyNo=C.journeyNo INNER JOIN rekening D ON A.rek_id_bank=D.rek_id WHERE A.bookingID='$no_booking' order by date(A.s_bookin_time) desc");
    }

    public function listorderpaket() {

       //$j_No=$this->setJourneyNo($data['cRouteNo'],$data['cJourneyFrom'],$data['cJourneyTo']);
       return $this->db->select("SELECT *, DATE_FORMAT(A.tgl_pengiriman,'%d %M %Y') AS tgl_kirim,B.bookerName,A.status AS payment_status FROM pbarang A INNER JOIN booker B ON A.bookerNICNo=B.bookerNICNo INNER JOIN rekening C ON A.rek_id_bank=C.rek_id order by date(A.tgl_pengiriman) desc");
    }

    public function listorderdtlpaket($no_resi) {

       //$j_No=$this->setJourneyNo($data['cRouteNo'],$data['cJourneyFrom'],$data['cJourneyTo']);
       return $this->db->select("SELECT *, DATE_FORMAT(A.tgl_pengiriman,'%d %M %Y') AS tgl_kirim,B.bookerName,A.status AS payment_status FROM pbarang A INNER JOIN booker B ON A.bookerNICNo=B.bookerNICNo INNER JOIN rekening C ON A.rek_id_bank=C.rek_id WHERE A.no_resi='$no_resi' order by date(A.tgl_pengiriman) desc");
    }

     public function listpelanggan() {

       //$j_No=$this->setJourneyNo($data['cRouteNo'],$data['cJourneyFrom'],$data['cJourneyTo']);
       return $this->db->select("SELECT * FROM system_user A INNER JOIN booker B ON A.bookerNICNo=B.bookerNICNo where A.privilege='BKOnline'");
    }

     public function notifkonfirmasi() {

       //$j_No=$this->setJourneyNo($data['cRouteNo'],$data['cJourneyFrom'],$data['cJourneyTo']);
       return $this->db->select("SELECT COUNT(konfirmasi_id) AS jum_kon FROM konfirmasi WHERE konfirmasi_status='0'");
    }

     public function notifkonfirmasipaket() {

       //$j_No=$this->setJourneyNo($data['cRouteNo'],$data['cJourneyFrom'],$data['cJourneyTo']);
       return $this->db->select("SELECT COUNT(konfirmasi_id) AS jum_kon FROM konfirmasi_paket WHERE konfirmasi_status='0'");
    }

     public function notifkonfirmasidataplg() {

       //$j_No=$this->setJourneyNo($data['cRouteNo'],$data['cJourneyFrom'],$data['cJourneyTo']);
       return $this->db->select("SELECT COUNT(userName) AS jum_kon FROM konfirmasi_booker WHERE konfirmasi_status='0'");
    }
    public function notifkonfirmasisopircd() {

       //$j_No=$this->setJourneyNo($data['cRouteNo'],$data['cJourneyFrom'],$data['cJourneyTo']);
       return $this->db->select("SELECT COUNT(userName_cadangan) AS jum_kon FROM konfirmasi_sopircadangan WHERE konfirmasi_status='0'");
    }

    public function listkonfirmasi() {

       //$j_No=$this->setJourneyNo($data['cRouteNo'],$data['cJourneyFrom'],$data['cJourneyTo']);
       return $this->db->select("SELECT DATE_FORMAT(konfirmasi_tanggal,'%d %M %Y') AS tgl,konfirmasi_nama,konfirmasi_status FROM konfirmasi WHERE konfirmasi_status='0' order by date(konfirmasi_tanggal) desc");
    }

     public function listkonfirmasipaket() {

       //$j_No=$this->setJourneyNo($data['cRouteNo'],$data['cJourneyFrom'],$data['cJourneyTo']);
       return $this->db->select("SELECT DATE_FORMAT(konfirmasi_tanggal,'%d %M %Y') AS tgl,konfirmasi_nama,konfirmasi_status FROM konfirmasi_paket WHERE konfirmasi_status='0' order by date(konfirmasi_tanggal) desc");
    }

     public function listkonfirmasi1() {

       //$j_No=$this->setJourneyNo($data['cRouteNo'],$data['cJourneyFrom'],$data['cJourneyTo']);
       return $this->db->select("SELECT konfirmasi_id,konfirmasi_invoice,konfirmasi_nama,konfirmasi_bank,ammount AS inv_total,konfirmasi_jumlah,konfirmasi_bukti,DATE_FORMAT(konfirmasi_tanggal,'%d/%m/%Y') AS tanggal FROM konfirmasi A INNER JOIN booking B ON A.konfirmasi_invoice=B.bookingID WHERE A.konfirmasi_status='0' ORDER BY A.konfirmasi_id DESC");
    }

     public function listkonfirmasipaket1() {

       //$j_No=$this->setJourneyNo($data['cRouteNo'],$data['cJourneyFrom'],$data['cJourneyTo']);
       return $this->db->select("SELECT konfirmasi_id,konfirmasi_invoice,konfirmasi_nama,konfirmasi_bank,biaya_pengiriman AS inv_total,konfirmasi_jumlah,konfirmasi_bukti,DATE_FORMAT(konfirmasi_tanggal,'%d/%m/%Y') AS tanggal FROM konfirmasi_paket A INNER JOIN pbarang B ON A.konfirmasi_invoice=B.no_resi WHERE A.konfirmasi_status='0' ORDER BY A.konfirmasi_id DESC");
    }

      public function listrekening() {

       //$j_No=$this->setJourneyNo($data['cRouteNo'],$data['cJourneyFrom'],$data['cJourneyTo']);
       return $this->db->select("SELECT * FROM rekening");
    }

      public function liststatus() {

       //$j_No=$this->setJourneyNo($data['cRouteNo'],$data['cJourneyFrom'],$data['cJourneyTo']);
       return $this->db->select("SELECT * FROM status");
    }

    public function listinformasi() {

       //$j_No=$this->setJourneyNo($data['cRouteNo'],$data['cJourneyFrom'],$data['cJourneyTo']);
       return $this->db->select("SELECT * FROM informasi");
    }

     function hapus_konfirmasi($kode){
            
           
           return $this->db->delete('konfirmasi', "konfirmasi_id = '$kode'");
        
        }
        function hapus_konfirmasipaket($kode){
            
           
           return $this->db->delete('konfirmasi_paket', "konfirmasi_id = '$kode'");
        
        }

    function hapus_order($kode){
            
           
           return $this->db->delete('booking', "bookingID = '$kode'");
      
        }
        function hapus_status($kode){
            
           
           return $this->db->delete('status', "status_id = '$kode'");
      
        }
        
        function hapus_data_tampung($kode){
            
           
           return $this->db->delete('konfirmasi_booker', "userName = '$kode'");
      
        }



         function hapus_informasi($kode){
            
           
           return $this->db->delete('informasi', "id_informasi = '$kode'");
      
        }

           function hapus_orderpaket($kode){
            
           
           return $this->db->delete('pbarang', "no_resi = '$kode'");
      
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

         function hapus_konfirmasi_sopircd($id_sopir_utama){
            
           
           return $this->db->delete('konfirmasi_sopircadangan', "id_sopir_utama = '$id_sopir_utama'");
      
        }
          
    



}
?>


