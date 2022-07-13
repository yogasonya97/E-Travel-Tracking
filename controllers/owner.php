<?php

class Owner extends Controller {

    function __construct() {
        parent::__construct();
        Session::init();    
       if (Session::get('privilege') != 'Owner') 
            $this->error();

    // require 'controllers/booker.php';
    //     $this->booker = new Booker();
        
            
    }

    
    function index() {
        $this->view->notif_order = $this->model->notiforder();
        $this->view->pen_now=$this->model->get_total_booking_sekarang();
        $this->view->pen_last=$this->model->get_total_booking_bulan_lalu();
        $this->view->kirim_now=$this->model->get_total_pengiriman_sekarang();
        $this->view->kirim_last=$this->model->get_total_pengiriman_bulan_lalu();
        $this->view->statistik_booking=$this->model->get_grafik_booking();
        $this->view->statistik_paket=$this->model->get_grafik_paket();
        $this->view->statistik_pelanggan=$this->model->get_grafik_pelanggan();
        $this->view->notif_konfirmasi = $this->model->notifkonfirmasi();
        $this->view->list_konfirmasi = $this->model->listkonfirmasi();
        $this->view->notif_konfirmasipaket = $this->model->notifkonfirmasipaket();
        $this->view->list_konfirmasipaket = $this->model->listkonfirmasipaket();
        $this->view->list_order = $this->model->listorder(); 
        $this->view->notif_orderpaket = $this->model->notiforderpaket();
        $this->view->list_orderpaket = $this->model->listorderpaket();
        $this->view->tot_plg=$this->model->get_total_pelanggan();
        $this->view->odr=$this->model->get_all_order_booking();
        $this->view->odr_paket=$this->model->get_all_order_paket();
        $get_total_bookingkursi=$this->model->get_total_bookingkursi();
        $get_total_kirimpaket=$this->model->get_total_kirimpaket();
        $this->view->plg=$this->model->get_all_pelanggan_terbaru();

        foreach ($get_total_bookingkursi as $key) {
            $booking=$key['total_booking'];
        }
        foreach ($get_total_kirimpaket as $ky) {
            $kirim_paket=$ky['total_kirimpaket'];
        }
        $this->view->total_penghasilan=$booking+$kirim_paket;
        
        $this->view->render('owner/v_dashboard');
    }
 
  function error() {
        require 'controllers/error.php';
        $controller = new Error();
        $controller->index('Maaf..! Halaman ini tidak bisa diakses selain Owner');
    }
   
}

?>