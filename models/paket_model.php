<?php

class Paket_Model extends Model {

    public function __construct() {
        parent::__construct();
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        Session::init();
        date_default_timezone_set("Asia/Colombo");
        //echo date('d-m-Y H:i:s');
    }

    function input_data($data,$table){
        $this->db->insert($table,$data);
    }

     function update_data($where,$data,$table){
        $this->db->update($table,$data,$where);
    }

    public function get_booker($username) {

       //$j_No=$this->setJourneyNo($data['cRouteNo'],$data['cJourneyFrom'],$data['cJourneyTo']);
       return $this->db->select("SELECT * FROM system_user A INNER JOIN booker B ON A.bookerNICNo=B.bookerNICNo WHERE A.userName='$username'");
    }
    
     public function listrekening() {

       //$j_No=$this->setJourneyNo($data['cRouteNo'],$data['cJourneyFrom'],$data['cJourneyTo']);
       return $this->db->select("SELECT * FROM rekening");
    }

    public function listinvoice($no_resi) {

       //$j_No=$this->setJourneyNo($data['cRouteNo'],$data['cJourneyFrom'],$data['cJourneyTo']);
       return $this->db->select("SELECT *,DATE_FORMAT(A.tgl_pengiriman,'%d %M %Y') AS tgl_kirim FROM pbarang A INNER JOIN booker B ON A.bookerNICNo=B.bookerNICNo INNER JOIN rekening C ON A.rek_id_bank=C.rek_id WHERE A.no_resi = '$no_resi'");
    }

     public function get_pbarang($no_resi) {

       //$j_No=$this->setJourneyNo($data['cRouteNo'],$data['cJourneyFrom'],$data['cJourneyTo']);
       return $this->db->select("SELECT COUNT(no_resi) as cek FROM pbarang WHERE no_resi='$no_resi'");
    }

    public function list_history_paket($username){
        return $this->db->select("SELECT * FROM system_user A INNER JOIN booker B ON A.bookerNICNo=B.bookerNICNo INNER JOIN pbarang C ON B.bookerNICNo=C.bookerNICNo WHERE A.userName='$username' ORDER BY
    DATE(C.tgl_pengiriman)=DATE(NOW()) DESC,
    DATE(C.tgl_pengiriman)<DATE(NOW()) DESC,
    DATE(C.tgl_pengiriman)>DATE(NOW()) ASC ");
    }
}
?>


