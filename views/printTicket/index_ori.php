<?php require "views/header.php"; ?>
<?php //print_r($this->busTicket)  ?>
<a href="<?php echo URL; ?>index/pemesanan"><-- KEMBALI KE HALAMAN AWAL </a>

<h1>Print Ticket</h1>



<div class="printBookinName"><h3>Booking Ticket</h3></div></br>
<div id="booking_ticket_area">
<link href="<?php echo URL; ?>public/css/booker/ticket.css" rel="stylesheet"></link>
<?php
if(isset($this->bookingTicket)){
    foreach ($this->bookingTicket as $key => $value) { ?>
    <label class="b_ticket_la">Booking ID  </label><label class="">: <?php echo $value['bookingID'];?></label><br/>
    <label class="b_ticket_la">Booker NIC  </label><label class="">: <?php echo $value['bookerNICNo'];?></label><br/>
    <label class="b_ticket_la">Bus No  </label><label class="">: <?php echo $value['busNo'];?></label><br/>
    <label class="b_ticket_la">Route No  </label><label class="">: <?php echo $value['routeNo'];?></label><br/>
    <label class="b_ticket_la">Journey  </label>: <label class="">From - <?php echo $value['journeyFrom'];?></label><br/>
    <label class="b_ticket_la"> .</label><label class=""> To - <?php echo $value['journeyTo'];?></label><br/>
    <label class="b_ticket_la">Entry Point  </label><label class="">: <?php echo $value['entryPoint'];?></label><br/>
    <label class="b_ticket_la">Number Of Seat  </label><label class="">: <?php echo $value['no_of_seat'];?></label><br/>
    <label class="b_ticket_la">Ammount  </label><label class="">: <?php echo $value['ammount'];?></label><br/>
    <label class="b_ticket_la">Date  </label><label class="">: <?php echo $value['date'];?></label><br/><br/>
    <?php }
} ?>
</div>
<div class="printBookinbtn"><input type="button" name="" id="test" value="Print"></div>

<div id="bus_ticket_area_main">
<h3>Bus Ticket</h3>
<div id="bus_ticket_sub_area">
<link href="<?php echo URL; ?>public/css/booker/ticket.css" rel="stylesheet"></link>
<?php 
if(isset($this->busTicket)){
    foreach ($this->busTicket as $key => $value) { ?>
    <div id="bus_ticket_area">
    <label class="b_ticket_la">Ticket No : </label><label class=""><?php echo $value['ticketNo'];?></label><br/>
    <label class="b_ticket_la"></label><label class="">From - <?php echo $value['journeyFrom'];?></label>
    <label class="b_ticket_la"></label><label class=""> To - <?php echo $value['journeyTo'];?></label><br/>
    <label class="b_ticket_la">Seat No : </label><label class=""><?php echo $value['seatNo'];?></label><br>
    <label class="b_ticket_la">Gender : </label><label class=""><?php echo $value['gender'];?></label><br/>
    <label class="b_ticket_la">Date : </label><label class=""><?php echo $value['date'];?></label><br/>
    <label class="b_ticket_la">Booking ID : </label><label class=""><?php echo $value['bookingID'];?></label><br/><br/>
    </div>
  <?php  }
} ?>
</div>
</div>
<div class="printbusTicketsbtn"><label></label><input type="button" name="" id="printbusTicketsbtn" value="Print"></div>



