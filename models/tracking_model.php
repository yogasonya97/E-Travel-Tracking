<?php

class Tracking_Model extends Model {

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

   
    

}
?>


