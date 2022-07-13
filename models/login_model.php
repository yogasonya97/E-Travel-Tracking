<?php

class Login_Model extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function loginToSystem() {

        /* $data=$this->db->select('SELECT userName, privilege FROM system_user 
          WHERE userName = :userName AND password = :password',
          array(
          ':userName' => $_POST['userName'],
          ':password' => Hash::create('md5', $_POST['password'], HASH_PASSWORD_KEY)
          ));
          foreach ($data as $key => $value)
          if (true) {
          Session::init();
          Session::set('privilege', $value['privilege']);
          Session::set('loggedIn', true);
          Session::set('userName', $value['userName']);
          if ($data['privilege'] == 'Booker')
          header('location: ../index');
          else
          header('location: ../systemUser');
          } else {
          header('location: ../login');
          } */

        $sth = $this->db->prepare("SELECT userName, privilege FROM system_user WHERE 
                userName = :userName AND password = :password");
        $sth->execute(array(
            ':userName' => $_POST['userName'],
            ':password' => Hash::create('md5', $_POST['password'], HASH_PASSWORD_KEY)
        ));
        $data = $sth->fetch();
        $count = $sth->rowCount();
        if ($count > 0) {
            Session::init();
            Session::set('privilege', $data['privilege']);
            Session::set('loggedIn', true);
            Session::set('userName', $data['userName']);
            if ($data['privilege'] == 'Owner')
                header('location: ../owner');
            elseif ($data['privilege'] == 'Booker')
                header('location: ../login/service');
              elseif ($data['privilege'] == 'BKOnline')
                header('location: ../index');
               elseif ($data['privilege'] == 'AdminLok')
                header('location: ../admin');
              elseif ($data['privilege'] == 'Sopir')
                header('location: ../sopir');
              elseif ($data['privilege'] == 'SopirCD')
                header('location: ../sopircd');
            else
                header('location: ../systemUser');
        } else {
            header('location: ../login');
        }
    }

    public function input_data($data,$table){
        $this->db->insert($table,$data);
    }

    
     public function get_datauser($userName) {

       //$j_No=$this->setJourneyNo($data['cRouteNo'],$data['cJourneyFrom'],$data['cJourneyTo']);
       return $this->db->select("SELECT COUNT(userName) AS cek FROM system_user where userName='$userName'");
    }
     public function get_datauserlogin($userName,$password) {

       //$j_No=$this->setJourneyNo($data['cRouteNo'],$data['cJourneyFrom'],$data['cJourneyTo']);
       return $this->db->select("SELECT COUNT(userName) AS cek FROM system_user where userName='$userName' AND password='$password'");
    }

    public function get_status_akun_sopir($userName,$password) {

       //$j_No=$this->setJourneyNo($data['cRouteNo'],$data['cJourneyFrom'],$data['cJourneyTo']);
       return $this->db->select("SELECT status_akun_sopir as status FROM system_user where userName='$userName' AND password='$password'");
    }


}

?>