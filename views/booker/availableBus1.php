
    <?php  //print_r($this->journeyNo) ?>
    <?php
//    $this->availablelqqBus = new Bus_Model();
//    Session::init();
//    Session::get('bus_date');
    date_default_timezone_set("Asia/Jakarta");
    //echo date("Y-m-d H:i"). "\n";
    $date = new DateTime(date("H:i"));
    $date->sub(new DateInterval('PT00H20M00S'));
    //echo $date->format('H:i') . "\n";
    ?>
<?php require "views/header.php"; ?>
<div>
    <div id="bodyhead"><h1><font color="white">Mobil Tersedia</font></h1></div>
    <form id="" action="<?php echo URL; ?>booker/booking/" method="post">
        <div class="busdataarea">
            <label><b>Tgl.Booking :</b></label><label><?php echo $this->bookDate; ?></label>
        </div>
        <div></div>
    </br>
</br>
         <div class="table-responsive">
        <div id="tSize">

            <div class="demo_jui"> 
                <?php if(($this->bookDate) != null){?>
                <input type="hidden" name="book_date" id="book_date" value="<?php echo $this->bookDate ?>"/>
                <input type="hidden" name="book_journeyFrom" id="book_journeyFrom" value="<?php if(($this->journeyFrom) != null){echo $this->journeyFrom;} ?>"/>
                <input type="hidden" name="book_journeyTo" id="book_journeyTo" value="<?php if(($this->journeyTo) != null){echo $this->journeyTo;} ?>"/>
                <input type="hidden" name="book_busNo" id="book_busNo" value=""/>
                <input type="hidden" name="book_numberOfSeat" id="book_numberOfSeat" value=""/>
                <input type="hidden" name="book_price" id="book_price" value=""/>
                <?php }?>
                <div align="left">
                <table align="left" border="0" class="display" id="exampleBooker">
<!--                      <table class="table table-bordered table-responsive" id="exampleBooker"> -->

                    <thead>
                        <tr>

                            <th>No.Plat</th>
                            <th>Jumlah Kursi</th>
                            <th>No.Rute</th>
                            <th>Waktu Berangkat</th>
                            <th>Waktu Sampai</th>
                            <th style="display: none;">Titik Jemput</th>
                            <th>Harga</th>
                            <th></th>
                            
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        if (isset($this->availablelBus)) {
                            foreach ($this->availablelBus as $key => $value1) {
                                echo '<tr class="busData">';
                                echo '<td>' . $value1['busNo'] . '</td>';
                                echo '<td>' . $value1['numberOfSeat'] . '</td>';
                                echo '<td>' . $value1['routeNo'] . '</td>';
                                echo '<td>' . $value1['departureTime'] . '</td>';
                                echo '<td>' . $value1['arrivalTime'] . '</td>';
                                echo '<td style="display: none;"><select>';
                                echo '<option>Entry Point</option>';
                                foreach ($value1['entry_Point'] as $key => $value2) {
                                    echo '<option>' . $value2['entryPoint'] . '</option>';
                                }
                                echo '</select></td>';
                                echo '<td>' . $value1['price'] . '</td>';
                                echo '<td>';
                                if ($date->format('H:i')<$value1['departureTime'] || date('Y-m-d')<$this->bookDate ) { 
                                        
                                            echo'<input type="submit" name="bookNow" value="Book Now">';
                                            
                                        } 
                                echo'</td>';
                                
                                echo '</tr>';
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            </div>
            </div>
            
        </div>
    </form>
</div>
<?php require "views/footer.php"; ?>
