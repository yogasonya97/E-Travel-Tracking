<?php

class Index extends Controller {

    function __construct() {
        parent::__construct();
    Session::init();
        // require 'models/index_model.php';
        // $this->index = new Index_Model();

        require 'models/journey_model.php';
        $this->journey = new Journey_Model();

        if (Session::get('privilege') == 'Admin')
        $this->error();
            
    }

    function error() {
        require 'controllers/error.php';
        $controller = new Error();
        $controller->index('Maaf ...! Kamu tidak bisa akses halaman ini');
    }

    function index() {
        $this->view->jml_mobil = $this->journey->all_car();
        $this->view->jml_sopir = $this->journey->all_sopir();
        $this->view->list_informasi = $this->journey->all_informasi();
        $this->view->jml_pelanggan = $this->journey->jml_pelanggan();
        // $this->view->journeyTo = $this->journey->searchAllJourneyTo();
        // Session::deset('bookingTime');
        //     Session::deset('seatBookingTime');
        //     Session::deset('sessionforSelectin_s');
        //     Session::deset('sessionforSelectin_s_tot_price');
        $this->view->render('index');
    }

    function Admin_loket() {
        $this->view->notif_order = $this->journey->notiforder();
        $this->view->list_order = $this->journey->listorder();
       
        $this->view->render('admin/v_dashboard');
    }
     function order() {
        $this->view->notif_order = $this->journey->notiforder();
        $this->view->list_order = $this->journey->listorder();
      
        $this->view->render('admin/v_order');
    }


    function pemesanan() {
        $this->view->journeyFrom = $this->journey->searchAllJourneyFrom();
        $this->view->journeyTo = $this->journey->searchAllJourneyTo();
        Session::deset('bookingTime');
            Session::deset('seatBookingTime');
            Session::deset('sessionforSelectin_s');
            Session::deset('sessionforSelectin_s_tot_price');
        $this->view->render('index/index');
    }

     function paket() {
        $this->view->journeyFrom = $this->journey->searchAllJourneyFrom();
        $this->view->journeyTo = $this->journey->searchAllJourneyTo();
        Session::deset('bookingTime');
            Session::deset('seatBookingTime');
            Session::deset('sessionforSelectin_s');
            Session::deset('sessionforSelectin_s_tot_price');
        $this->view->render('paket/v_index');
    }
    function tentang() {
        $this->view->journeyFrom = $this->journey->searchAllJourneyFrom();
        $this->view->journeyTo = $this->journey->searchAllJourneyTo();
        Session::deset('bookingTime');
            Session::deset('seatBookingTime');
            Session::deset('sessionforSelectin_s');
            Session::deset('sessionforSelectin_s_tot_price');
        $this->view->render('index/tentang_kami');
    }

}

?>