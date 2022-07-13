<?php //print_r($this->searchAllBoardingPoint)  
Session::init();
foreach (Session::get('sessionforSelectin_s') as $key => $value) {
            $book_numberOfSeat = ++$key;
}
?>
<?php require "views/header.php"; ?>
<style type="text/css">
    .btn-register {
  background-color: #1abc9c;
  outline: none;
  color: #fff;
  font-size: 14px;
  height: auto;
  font-weight: normal;
  padding: 14px 0;
  text-transform: uppercase;
  border-color: #1CB94A;
}
.btn-register:hover,
.btn-register:focus {
  color: #fff;
  background-color: #1CA347;
  border-color: #1CA347;
}
</style>
<div class="container">
    <div class="row">
        <div class="col-md-12">
<h1><font color="red">Rincian Data Booking</font></h1>
<div class="busdataarea">
            <label><b>Tanggal Booking : </b></label><label><?php echo $this->busDara['book_date'];?></label><br/>
            <label><b>No.Plat Mobil : </b></label><label><?php echo $this->busDara['book_busNo']; ?></label><br/>
            <label><b>Jumlah Kursi : </b></label><label><?php echo $book_numberOfSeat; ?></label><br/>
            <label><b>Total Harga : </b></label><label><?php echo $this->busDara['book_total_ammount']; ?></label>
</div>

<div id="timeOutBooking" style="text-align:center; color: #d14"></div>
</br>
</br>
</br>
</br>
</br>

<?php 
                                        
                                    foreach ($this->nic as $x) {
                                        $nic=$x['bookerNICNo']; }
                                    
                                ?>
<form id="" action="<?php echo URL; ?>bookingSeat/onlineBookerConform/" method="post">

    <input type="hidden" name="selecting_s" id="selecting_s" value="">
    <input type="hidden" name="book_date" id="seat_book_date" value="<?php echo $this->busDara['book_date']; ?>"/>
    <input type="hidden" name="book_journeyNo" id="seat_book_journeyNo" value="<?php echo $this->busDara['book_journeyNo']; ?>"/>
    <input type="hidden" name="book_busNo" id="seat_book_busNo" value="<?php echo $this->busDara['book_busNo']; ?>"/>
    <input type="hidden" name="book_numberOfSeat" id="seat_book_numberOfSeat" value="<?php echo $this->busDara['book_numberOfSeat']; ?>"/>
    <input type="hidden" name="book_price" id="seat_book_price" value="<?php echo $this->busDara['book_price']; ?>"/>
    <input type="hidden" name="book_total_ammount" id="seat_book_price" value="<?php echo $this->busDara['book_total_ammount']; ?>"/>

<style type="text/css">
    .form_area{ 
    border-style: solid;  
    height: 540px;
    width: 400px;
    background-color: #F5F5F5;
    padding: 20px;
    float: center;
    margin-left: 0px;
    margin-bottom: 100px;
    margin-top: 80px;
    margin-right: 50px;
}
</style>
<div class="form_area">

    
    <div id="passenger_info_m">
        <h3 style ="margin-bottom:10px; margin-top:10px">Form Informasi Pelanggan</h3>
       <div id="passenger_info"></div>
    </div>
    <br>
    <br>
    <div id="booker_info">
        <h3 style ="margin-bottom:10px; margin-top:10px">Booker Details</h3>
        
          
            <span class="border border-dark">

            <div class="table-responsive">
             <table border="0">
             
              <tbody>
        <tr>
           
                <th>
            <label>Booker NIC :</label>
          </th><td>
            <input name="booker_nic" type="text" maxlength="10" class="" id="booker_nic" data-validation="required" style="width: 200px;" value="<?php echo $nic; ?> "/></td><td><input type="button" name="" id="booker_data" value="Silahkan Cek"></td>
          
        </tr>
        <tr>
          <th>
            <label>Booker Name :</label>
          </th>
          <td colspan="2">
            <input name="bookername" type="text" class="" id="bookername" data-validation="required" style="width: 200px;" value=""/>
          </td>
        </tr>
        <tr>
          <th>
            <label>Mobile No :</label>
          </th>
          <td colspan="2">
            <input name="booker_mno" type="text" class="" id="booker_mno" data-validation="required" style="width: 200px;" value=""/>
          </td>
        </tr>
        <tr>
          <th>
            <label>Titik Jemput :</label>
          </th>
          <td colspan="2">
            <select name="boardpoint" class="" id="onboardpoint" data-validation="required" style="width: 200px; height: 25px;">
                <option value="">Pilih Titik Jemput</option>
                <?php
                foreach ($this->searchAllBoardingPoint as $key => $value) {
                    echo '<option value="' . $value['entryPointNo'] . '" > ' . $value['entryPoint'] . '</option>';
                }
                ?>
            </select>
          </td>
        </tr>
      </tbody>
          </table>
        </div>
      </span>
        
        </div>
      </br>
      </br>
      </br>
      </br>
      </br>
      </br>
      </br>
      </br>
        <div style ="width: 50%; margin-top: -150px; margin-right: 150px; padding: 15px;">
            <input type="submit" class="form-control btn btn-register" name="Conform_o_b" id="" value="Konfirmasi Booking">	
        </div>
</div>
</form>
</div>
</div>
</div>
<script type="text/javascript">
  $('#bookername').prop('readonly', true);
  $('#booker_mno').prop('readonly', true);
</script>
<?php require "views/footer.php"; ?>