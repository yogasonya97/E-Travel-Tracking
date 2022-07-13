<?php

class Konfirmasi_Model extends Model {

    public function __construct() {
        parent::__construct();
       
    }

    function input_data($data,$table){
        $this->db->insert($table,$data);
    }

    function update_data($where,$data,$table){
    
        $this->db->update($table,$data,$where);
  }
    public function get_invoice($no_invoice) {

       //$j_No=$this->setJourneyNo($data['cRouteNo'],$data['cJourneyFrom'],$data['cJourneyTo']);
       return $this->db->select("SELECT COUNT(bookingID) as cek FROM booking WHERE bookingID='$no_invoice'");
    }

     public function ls_akunbooker($username) {

       //$j_No=$this->setJourneyNo($data['cRouteNo'],$data['cJourneyFrom'],$data['cJourneyTo']);
       return $this->db->select("SELECT * FROM system_user A INNER JOIN booker B ON A.bookerNICNo=B.bookerNICNo WHERE A.userName='$username' AND A.privilege = 'BKOnline'");
    }
    // public function get_invoice($no_resi) {

    //    //$j_No=$this->setJourneyNo($data['cRouteNo'],$data['cJourneyFrom'],$data['cJourneyTo']);
    //    return $this->db->select("SELECT *,DATE_FORMAT(A.tgl_pengiriman,'%d %M %Y') AS tgl_kirim FROM pbarang A INNER JOIN booker B ON A.bookerNICNo=B.bookerNICNo INNER JOIN rekening C ON A.rek_id_bank=C.rek_id WHERE A.no_resi = '$no_resi'");
    // }

    public function listinvoice($no_booking) {

       //$j_No=$this->setJourneyNo($data['cRouteNo'],$data['cJourneyFrom'],$data['cJourneyTo']);
       return $this->db->select("SELECT *, DATE_FORMAT(A.s_bookin_time,'%d %M %Y') AS tgl,DATE_FORMAT(A.date,'%d %M %Y') AS tgl_booking FROM booking A INNER JOIN booker B ON A.bookerNICNo=B.bookerNICNo INNER JOIN journey C ON A.journeyNo=C.journeyNo INNER JOIN rekening D ON A.rek_id_bank=D.rek_id WHERE A.bookingID = '$no_booking' order by date(A.s_bookin_time) desc");
    }

    public function listorder() {

       //$j_No=$this->setJourneyNo($data['cRouteNo'],$data['cJourneyFrom'],$data['cJourneyTo']);
       return $this->db->select("SELECT *, DATE_FORMAT(A.s_bookin_time,'%d %M %Y') AS tgl,DATE_FORMAT(A.date,'%d %M %Y') AS tgl_booking,B.bookerName,A.payment_status FROM booking A INNER JOIN booker B ON A.bookerNICNo=B.bookerNICNo INNER JOIN journey C ON A.journeyNo=C.journeyNo INNER JOIN rekening D ON A.rek_id_bank=D.rek_id order by date(A.s_bookin_time) desc");
    }

     public function listpelanggan() {

       //$j_No=$this->setJourneyNo($data['cRouteNo'],$data['cJourneyFrom'],$data['cJourneyTo']);
       return $this->db->select("SELECT * FROM system_user A INNER JOIN booker B ON A.bookerNICNo=B.bookerNICNo where A.privilege='BKOnline'");
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

      public function listrekening() {

       //$j_No=$this->setJourneyNo($data['cRouteNo'],$data['cJourneyFrom'],$data['cJourneyTo']);
       return $this->db->select("SELECT * FROM rekening");
    }

    function hapus_order($kode){
            
           
           return $this->db->delete('booking', "bookingID = '$kode'");
      
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

}
?>


