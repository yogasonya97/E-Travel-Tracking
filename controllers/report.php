<?php

class Report extends Controller {

    function __construct() {
        parent::__construct();
        Session::init();
        require 'models/bus_model.php';
        $this->busNo = new Bus_Model();
        require 'models/journey_model.php';
        $this->journeyNo = new Journey_Model();

        if (Session::get('privilege') != 'Admin' && Session::get('privilege') != 'Conduct' && Session::get('privilege') != 'AdminLok')
            $this->error();
    }

    function error() {
        require 'controllers/error.php';
        $controller = new Error();
        $controller->index('Sorry ...! You can not Accsess This Page');
    }

    /*
     * View Repot pages.
     */

    function index() {
//        $this->view->js_1 = array('public/js/report.js');
//        $this->view->js_2 = array('public/js/map/parse-1.2.18.min.js');
        $this->view->searchAllBus = $this->busNo->searchAllBus();
        $this->view->searchAllJourney = $this->journeyNo->searchAllJourneyNo();
        $this->view->render('report/index');
    }
    
    function bookingReport() {        //print_r($this->model->getPassengerData($_POST['journeyDate'],$_POST['busNo']));
        if (isset($_POST['busNo'])) {
            $journeyDate = $_POST['journeyDate'];
            $busNo = $_POST['busNo'];
            $journeyNo = $_POST['journeyNo'];
            $this->view->journeyDate = $_POST['journeyDate'];
            $this->view->busNo = $_POST['busNo'];
            $this->view->journeyNo = trim($_POST['journeyNo']);
            $this->view->searchBookingData = $this->model->searchBookingData($journeyDate,$busNo,$journeyNo);
            $this->view->render('report/index');
        }
    }
    
    public function xhrSearchJourneyforSingleBus() {
        echo $this->model->xhrSearchJourneyforSingleBus();
    }
    
    public function xhrSearchBookingData() {
        $journeyDate = $_POST['journeyDate'];
        $busNo = $_POST['busNo'];
        $journeyNo = $_POST['journeyNo'];
        echo ($this->model->xhrSearchBookingData($journeyDate, $busNo,$journeyNo));
    }
    
    function bookingData() {
        $formDate = $_POST['date_from'];
        $toDate = $_POST['date_to'];
        $busNo = $_POST['busNo'];
        $journeyNo = $_POST['journeyNo'];
        if ($busNo == 'AB' && $journeyNo == 'AJ') {
            $this->searchAllBookingData($formDate, $toDate);
        } else if ($busNo != 'AB' && $journeyNo != 'AJ') {
            $this->searchBookingData($formDate, $toDate, $busNo, $journeyNo);
        } else if ($busNo != 'AB' && $journeyNo == 'AJ') {
            $this->searchAllBusBookingData($formDate, $toDate, $busNo);
        } else if ($busNo == 'AB' && $journeyNo != 'AJ') {
            $this->searchAllJourneyBookingData($formDate, $toDate, $journeyNo);
        }
    }

    function bookerReport() {
        $journeyDate = $_POST['journeyDate'];
        $busNo = $_POST['busNo'];
        $report_h = '';
        $table_h = '';
        $table_b = '';
        $table_f = '';
        //++++++++++++++++++++++++++++++++++++++++++++
        $report_h = '<H3>Informasi Booker (Pelanggan)</H3><H5> No.Plat Mobil : ' . $busNo . '</H5><H5> Tanggal Jurusan : ' . $journeyDate . '</H5>';
        $table_h = '<table ellpadding="0" cellspacing="0" rules="all" border="0"  width="*0%" align="center">
                    <hr/><tr> 
                        <th align="center" width="50px"></th>
                        <th align="center" width="170px" >Booking ID</th>
                        <th align="center" width="120px">Booker NIC No</th>
                        <th align="center" width="120px">Booker Name</th>
                        <th align="center" width="100px">Titik Masuk</th>
                        <th align="center" width="50px">Jumlah Kursi</th>
                        <th align="center" width="75px">Total</th>
                        <th align="center" width="100px">No.HP</th>
                    </tr><hr/>
                    ';
        foreach ($this->model->getBookerrData($journeyDate, $busNo) as $key => $value) {
            $table_b = $table_b . '<tr>
                          <td align="center" width="50px" >' . ++$key . '</td>
                          <td align="center" width="170px">' . $value['bookingID'] . '</td>
                          <td align="center" width="120px">' . $value['bookerNICNo'] . '</td>
                          <td align="center" width="120px">' . $value['bookerName'] . '</td>
                          <td align="center" width="100px">' . $value['entryPointNo'] . '</td>
                          <td align="center" width="50px">' . $value['no_of_seat'] . '</td>
                          <td align="center" width="75px">' . $value['ammount'] . '</td>
                          <td align="center" width="100px">' . $value['bookerMNo'] . '</td>
                          </tr>';
        }
        $table_f = '<hr/></table>';
        $main_tabale = $report_h . $table_h . $table_b . $table_f;
        //echo $main_tabale;        exit();
        $this->view_report($main_tabale, "Booker_Info_" . $busNo, 'L');
    }

    function passengerReport() {        //print_r($this->model->getPassengerData($_POST['journeyDate'],$_POST['busNo']));
        $journeyDate = $_POST['journeyDate'];
        $busNo = $_POST['busNo'];

        //++++++++++++++++++++++++++++++++++++++++++++
        $report_h = '';
        $table_h = '';
        $table_b = '';
        $table_f = '';
        $report_h = '<H1></H1><H3>Informasi Pelanggan</H3><H5> No.Plat Mobil : ' . $busNo . '</H5><H5> Tanggal Jurusan : ' . $journeyDate . '</H5>';
        $table_h = '<table ellpadding="0" cellspacing="0" rules="all"  width="80%" align="center">
                    <hr/><tr> 
                        <th align="center" width="30px"></th>
                        <th align="center" width="50px" >No.Kursi</th>
                        <th align="center" width="160px">No.Tiket</th>
                        <th align="center" width="180px">Nama Pelanggan</th>
                        <th align="center" width="50px">Jenis Kelamin</th>
                        <th align="center" width="160px">No.Booking</th>
                    </tr><hr/>
                    ';
        foreach ($this->model->getPassengerData($journeyDate, $busNo) as $key => $value) {
            $table_b = $table_b . '<tr>
                          <td align="center" width="30px" >' . ++$key . '</td>
                          <td align="center" width="50px">' . $value['seatNo'] . '</td>
                          <td align="center" width="160px">' . $value['ticketNo'] . '</td>
                          <td align="center" width="180px">' . $value['passengerName'] . '</td>
                          <td align="center" width="50px">' . $value['gender'] . '</td>
                          <td align="right" width="160px">' . $value['bookingID'] . '</td>
                          </tr>';
        }
        $table_f = '<hr/></table>';
        $main_tabale = $report_h . $table_h . $table_b . $table_f;
        //++++++++++++++++++++++++++++++++++++++++++++++++
        $this->view_report($main_tabale, "Passenger_Info_" . $busNo, 'P');
    }

    function searchAllBookingData($formDate, $toDate) {
        $report_h = '<H3> E-travel CV. Purnama Indah Laporan Booking </H3><H4> Dari Tanggal ' . $formDate . ' Ke ' . $toDate . '</H4>';
        $table_h = '<table ellpadding="0" cellspacing="0" rules="all"  width="80%" align="center">
                    <hr/><tr> 
                        <th align="center" width="100px"></th>
                        <th align="center" width="120px"><H4>No.Plat Mobil</H4></th>
                        <th align="center" width="120px"><H4>No.Jurusan</H4></th>
                        <th align="center" width="100px"><H4>Jumlah Kursi</H4></th>
                        <th align="right" width="120px"><H4>Total</H4></th>
                        </tr><hr/>
                    ';
        $table_b = '';
        $total_ammount = 0.00;
        foreach ($this->model->getAllBookingData($formDate, $toDate) as $key => $value) {
            $table_b = $table_b . '<tr>
                          <td align="center" width="100px">' . ++$key . '</td>
                          <td align="center" width="120px">' . $value['busNo'] . '</td>
                          <td align="center" width="120px">' . $value['journeyNo'] . '</td>
                          <td align="center" width="100px">' . $value['no_of_seat'] . '</td>
                          <td align="right" width="120px">' . $value['ammount'] . '</td>
                          </tr>';
            $total_ammount = $total_ammount + $value['ammount'];
        }
        $table_f = '<hr/>
                    <tr cellspacing="10">
                        <th align="center" width="100px"><H4>Total</H4></th>
                        <th align="center" width="120px" ></th>
                        <th align="center" width="120px"></th>
                        <th align="center" width="100px"></th>
                        <th align="right" width="120px"><H4>' . $total_ammount . '</H4></th>
                        </tr>
                    <hr/></table>';
        $main_tabale = $report_h . $table_h . $table_b . $table_f;
        $this->view_report($main_tabale, "All_Booking", 'P');
    }

    function searchBookingData($formDate, $toDate, $busNo, $journeyNo) {
        $report_h = '<H3> E-Travel CV.Purnama Indah Laporan Booking</H3><H4> No.Plat Mobil : ' . $busNo . ' - No.Jurusan : ' . $journeyNo . '</H4><H4> Tanggal Dari ' . $formDate . ' Ke ' . $toDate . '</H4>';
        $table_h = '<table ellpadding="0" cellspacing="0" rules="all"  width="80%" align="center">
                    <hr/><tr> 
                        <th align="center" width="100px"></th>
                        <th align="center" width="120px"><H4>No.Plat Mobil</H4></th>
                        <th align="center" width="120px"><H4>No.Jurusan</H4></th>
                        <th align="center" width="80px"><H4>Jumlah Kursi</H4></th>
                        <th align="right" width="80px"><H4>Total</H4></th>
                        <th align="center" width="120px"><H4>Tanggal</H4></th>
                        </tr><hr/>
                    ';
        $table_b = '';
        $no_of_seat = 0;
        $total_ammount = 0.00;
        foreach ($this->model->getBookingData($formDate, $toDate, $busNo, $journeyNo) as $key => $value) {
            $table_b = $table_b . '<tr>
                          <td align="center" width="100px">' . ++$key . '</td>
                          <td align="center" width="120px">' . $value['busNo'] . '</td>
                          <td align="center" width="120px">' . $value['journeyNo'] . '</td>
                          <td align="center" width="80px">' . $value['no_of_seat'] . '</td>
                          <td align="right" width="80px">' . $value['ammount'] . '</td>
                          <td align="center" width="120px">' . $value['date'] . '</td>
                          </tr>';
            $no_of_seat = $no_of_seat + $value['no_of_seat'];
            $total_ammount = $total_ammount + $value['ammount'];
        }
        $table_f = '<hr/>
                    <tr cellspacing="10">
                        <th align="center" width="100px"><H4>Total</H4></th>
                        <th align="center" width="120px" ></th>
                        <th align="center" width="120px"></th>
                        <th align="center" width="80px">' . $no_of_seat . '</th>
                        <th align="right" width="80px"><H4>' . $total_ammount . '</H4></th>
                        <th align="center" width="120px"><H4></H4></th>
                        </tr>
                    <hr/></table>';
        $main_tabale = $report_h . $table_h . $table_b . $table_f;
        $this->view_report($main_tabale, "Booking_" . $busNo . '_' . $journeyNo, 'P');
    }

    function searchAllBusBookingData($formDate, $toDate, $busNo) {
        $report_h = '<H3> E-Travel CV.Purnama Indah Laporan Booking</H3><H4> No.Plat Mobil : ' . $busNo . '</H4><H4> Dari Tanggal ' . $formDate . ' Ke ' . $toDate . '</H4>';
        $table_h = '<table ellpadding="0" cellspacing="0" rules="all"  width="80%" align="center">
                    <hr/><tr> 
                        <th align="center" width="100px"></th>
                        <th align="center" width="120px"><H4>No.Plat Mobil</H4></th>
                        <th align="center" width="120px"><H4>No.Jurusan</H4></th>
                        <th align="center" width="80px"><H4>Jumlah Kursi</H4></th>
                        <th align="right" width="80px"><H4>Total</H4></th>
                        <th align="center" width="120px"><H4>Tanggal</H4></th>
                        </tr><hr/>
                    ';
        $table_b = '';
        $no_of_seat = 0;
        $total_ammount = 0.00;
        foreach ($this->model->getAllBusBookingData($formDate, $toDate, $busNo) as $key => $value) {
            $table_b = $table_b . '<tr>
                          <td align="center" width="100px">' . ++$key . '</td>
                          <td align="center" width="120px">' . $value['busNo'] . '</td>
                          <td align="center" width="120px">' . $value['journeyNo'] . '</td>
                          <td align="center" width="80px">' . $value['no_of_seat'] . '</td>
                          <td align="right" width="80px">' . $value['ammount'] . '</td>
                          <td align="center" width="120px">' . $value['date'] . '</td>
                          </tr>';
            $no_of_seat = $no_of_seat + $value['no_of_seat'];
            $total_ammount = $total_ammount + $value['ammount'];
        }
        $table_f = '<hr/>
                    <tr cellspacing="10">
                        <th align="center" width="100px"><H4>Total</H4></th>
                        <th align="center" width="120px" ></th>
                        <th align="center" width="120px"></th>
                        <th align="center" width="80px">' . $no_of_seat . '</th>
                        <th align="right" width="80px"><H4>' . $total_ammount . '</H4></th>
                        <th align="center" width="120px"><H4></H4></th>
                        </tr>
                    <hr/></table>';
        $main_tabale = $report_h . $table_h . $table_b . $table_f;
        $this->view_report($main_tabale, "Booking_" . $busNo, 'P');
    }

    function searchAllJourneyBookingData($formDate, $toDate, $journeyNo) {
        $report_h = '<H3> E-Travel CV.Purnama Indah Laporan Booking </H3><H4> Nomor Jurusan : ' . $journeyNo . '</H4><H4> Dari Tanggal ' . $formDate . ' Ke ' . $toDate . '</H4>';
        $table_h = '<table ellpadding="0" cellspacing="0" rules="all"  width="80%" align="center">
                    <hr/><tr> 
                        <th align="center" width="100px"></th>
                        <th align="center" width="120px"><H4>No.Plat Mobil</H4></th>
                        <th align="center" width="120px"><H4>No.Jurusan</H4></th>
                        <th align="center" width="80px"><H4>Jumlah Kursi</H4></th>
                        <th align="right" width="80px"><H4>Total</H4></th>
                        <th align="center" width="120px"><H4>Tanggal</H4></th>
                        </tr><hr/>
                    ';
        $table_b = '';
        $no_of_seat = 0;
        $total_ammount = 0.00;
        foreach ($this->model->getAllJourneyBookingData($formDate, $toDate, $journeyNo) as $key => $value) {
            $table_b = $table_b . '<tr>
                          <td align="center" width="100px">' . ++$key . '</td>
                          <td align="center" width="120px">' . $value['busNo'] . '</td>
                          <td align="center" width="120px">' . $value['journeyNo'] . '</td>
                          <td align="center" width="80px">' . $value['no_of_seat'] . '</td>
                          <td align="right" width="80px">' . $value['ammount'] . '</td>
                          <td align="center" width="120px">' . $value['date'] . '</td>
                          </tr>';
            $no_of_seat = $no_of_seat + $value['no_of_seat'];
            $total_ammount = $total_ammount + $value['ammount'];
        }
        $table_f = '<hr/>
                    <tr cellspacing="10">
                        <th align="center" width="100px"><H4>Total</H4></th>
                        <th align="center" width="120px" ></th>
                        <th align="center" width="120px"></th>
                        <th align="center" width="80px">' . $no_of_seat . '</th>
                        <th align="right" width="80px"><H4>' . $total_ammount . '</H4></th>
                        <th align="center" width="120px"><H4></H4></th>
                        </tr>
                    <hr/></table>';
        $main_tabale = $report_h . $table_h . $table_b . $table_f;
        $this->view_report($main_tabale, "Booking_" . $journeyNo, 'P');
    }

    

    function bookingReportforPDF() {
        if (isset($_POST['busNo'])) {
            $journeyDate = $_POST['journeyDate'];
            $busNo = $_POST['busNo'];
            $journeyNo = $_POST['journeyNo'];
            $report_h = '<H3> E-Travel CV.Purnama Indah Laporan Booking </H3><H4> Tanggal Jurusan : ' . $journeyDate . '</H4>';
            $table_h = '<table>
                            <hr/>
                            <tr>
                                <th align="left" width="50px">No.Kursi</th>
                                <th align="center" width="50px">Status</th>
                                <th align="center" width="160px">No.Tiket</th>
                                <th align="center" width="130px">Nama</th>
                                <th align="center" width="50px">Jenis Kelamin</th>
                                <th align="center" width="100px">Titik Masuk</th>
                                <th align="center" width="100px">No.Hp</th>
                            </tr>
                            <hr/>';

            $table_b = '';
            foreach ($this->model->searchBookingData($journeyDate, $busNo,$journeyNo) as $key => $value) {
                $table_b = $table_b . '<tr class="">
                                            <td align="left" width="50px">' . $value['seatNo'] . '</td>
                                            <td align="center" width="50px">' . $value['status'] . '</td>
                                            <td align="center" width="160px">' . $value['ticketNo'] . '</td>
                                            <td align="center" width="130px">' . $value['passengerName'] . '</td>
                                            <td align="center" width="50px">' . $value['gender'] . '</td>
                                            <td align="center" width="100px">' . $value['entryPoint'] . '</td>
                                            <td align="center" width="100px">' . $value['bookerMNo'] . '</td>
                                            </tr>
                                            ';
            }

            $table_f = '<hr/>
                                <tr>
                                    <th align="left" width="50px">No.Kursi</th>
                                    <th align="center" width="50px">Status</th>
                                    <th align="center" width="160px">No.Tiket</th>
                                    <th align="center" width="130px">Nama</th>
                                    <th align="center" width="50px">Jenis Kelamin</th>
                                    <th align="center" width="100px">Titik Masuk</th>
                                    <th align="center" width="100px">No.Hp</th>
                                </tr>
                                <hr/>
                                </table>';
            $main_tabale = $report_h . $table_h . $table_b;
            //echo $main_tabale;            exit();
            $this->view_report($main_tabale, "Booking_Infor_" . $journeyDate, 'P');
        }
    }

    /* ------------------------------------------------------------------------------------------------------ */

    function view_report($main_tabale, $reportName, $size) {

// Include the main TCPDF library (search for installation path).
        require_once('pdf/tcpdf_include.php');
        require_once('pdf/tcpdf.php');
// create new PDF document
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set default header data
        $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE . '', PDF_HEADER_STRING);

// set header and footer fonts
        $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
        if (@file_exists(dirname(__FILE__) . '/lang/eng.php')) {
            require_once(dirname(__FILE__) . '/lang/eng.php');
            $pdf->setLanguageArray($l);
        }

// ---------------------------------------------------------
// set font
        $pdf->SetFont('times', '', 10);
        $pdf->AddPage($size, 'A4');
        //$pdf->AddPage('P', 'A4');
        //$pdf->AddPage('L', 'A4');
        //$pdf->Cell(0, 0, '', 1, 1, 'C');
// add a page
        //$pdf->AddPage();
// writeHTML($html, $ln=true, $fill=false, $reseth=false, $cell=false, $align='')
// writeHTMLCell($w, $h, $x, $y, $html='', $border=0, $ln=0, $fill=0, $reseth=true, $align='', $autopadding=true)
// create some HTML content
// - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
// create some HTML content
// output the HTML content
        $pdf->writeHTML($main_tabale, true, false, true, false, '');

// Print some HTML Cells
// reset pointer to the last page
// ---------------------------------------------------------
//Close and output PDF document
        $pdf->Output($reportName.'.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+  
    }

}

?>
