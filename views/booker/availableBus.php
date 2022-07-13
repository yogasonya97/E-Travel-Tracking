
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

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">



<style type="text/css">
body {
    font-family: "Open Sans", sans-serif;
}
h2 {
    color: #000;
    font-size: 26px;
    font-weight: 300;
    text-align: center;
    text-transform: uppercase;
    position: relative;
    margin: 30px 0 80px;
}
h2 b {
    color: #ffc000;
}
h2::after {
    content: "";
    width: 100px;
    position: absolute;
    margin: 0 auto;
    height: 4px;
    background: rgba(0, 0, 0, 0.2);
    left: 0;
    right: 0;
    bottom: -20px;
}
.carousel {
    margin: 50px auto;
    padding: 0 70px;
}
.carousel .item {
    min-height: 330px;
    text-align: center;
    overflow: hidden;
}
.carousel .item .img-box {
    height: 160px;
    width: 100%;
    position: relative;
}
.carousel .item img {   
    max-width: 100%;
    max-height: 100%;
    display: inline-block;
    position: absolute;
    bottom: 0;
    margin: 0 auto;
    left: 0;
    right: 0;
}
.carousel .item h4 {
    font-size: 18px;
    margin: 10px 0;
}
.carousel .item .btn {
    color: #333;
    border-radius: 0;
    font-size: 11px;
    text-transform: uppercase;
    font-weight: bold;
    background: none;
    border: 1px solid #ccc;
    padding: 5px 10px;
    margin-top: 5px;
    line-height: 16px;
}
.carousel .item .btn:hover, .carousel .item .btn:focus {
    color: #fff;
    background: #000;
    border-color: #000;
    box-shadow: none;
}
.carousel .item .btn i {
    font-size: 14px;
    font-weight: bold;
    margin-left: 5px;
}
.carousel .thumb-wrapper {
    text-align: center;
}
.carousel .thumb-content {
    padding: 15px;
}
.carousel .carousel-control {
    height: 100px;
    width: 40px;
    background: none;
    margin: auto 0;
    background: rgba(0, 0, 0, 0.2);
}
.carousel .carousel-control i {
    font-size: 30px;
    position: absolute;
    top: 50%;
    display: inline-block;
    margin: -16px 0 0 0;
    z-index: 5;
    left: 0;
    right: 0;
    color: rgba(0, 0, 0, 0.8);
    text-shadow: none;
    font-weight: bold;
}
.carousel .item-price {
    font-size: 13px;
    padding: 2px 0;
}
.carousel .item-price strike {
    color: #999;
    margin-right: 5px;
}
.carousel .item-price span {
    color: #86bd57;
    font-size: 110%;
}
.carousel .carousel-control.left i {
    margin-left: -3px;
}
.carousel .carousel-control.left i {
    margin-right: -3px;
}
.carousel .carousel-indicators {
    bottom: -50px;
}
.carousel-indicators li, .carousel-indicators li.active {
    width: 10px;
    height: 10px;
    margin: 4px;
    border-radius: 50%;
    border-color: transparent;
}
.carousel-indicators li {   
    background: rgba(0, 0, 0, 0.2);
}
.carousel-indicators li.active {    
    background: rgba(0, 0, 0, 0.6);
}
.star-rating li {
    padding: 0;
}
.star-rating i {
    font-size: 14px;
    color: #ffc000;
}

.cardataarea{
    border-style: solid;    
    border : 1px; 
    width: 300px;
    background-color: #F5F5F5;
   
   
}
</style>
<div>
    <!-- <div id="bodyhead"><h1><font color="white"></font></h1></div> -->
    <form id="" action="<?php echo URL; ?>booker/booking/" method="post">
       
  
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>MOBIL <b>TERSEDIA</b></h2>
            <div class="busdataarea">
            <label><b>Tgl.Booking :</b></label><label><?php echo $this->bookDate; ?></label>
        </div>
        <br><br>
            <!-- Carousel indicators -->
          
            <!-- Wrapper for carousel items -->
         
           
               
                <div class="item carousel-item">
                    <div class="row">
                    <?php
                        $i=0;
                        if (isset($this->availablelBus)) {
                            foreach ($this->availablelBus as $key => $value1) {?> 
                                <?php $i++; ?>
                                    <?php  foreach ($value1['rating_mobil'] as $key=> $value3) {
                                              $rating=$value3['jml']; }

                                              $ratings=number_format($rating,1);?>

                    
                           
                        <div class="col-sm-3">
                            <div class="thumb-wrapper">
                                <div class="img-box">
                                    <img src="<?php echo URL;?>assets/sopir/images/img_mobil/<?php echo $value1['foto_mobil'];?>" class="img-responsive img-fluid" height="90px" alt="">
                                </div>
                                <div class="thumb-content">
                                    <font color="white">
                                    <h4><?php echo $value1['busNo'];?></h4>
                                    <p><span><?php echo $value1['busModel'];?></span></p>
                                    
                                    <div class="star-rating">
                                       <pre><div id="rateYo<?php echo $i;?>"></div><span>Rating : <?php echo $ratings;?></span></pre>
                                        <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
                                        
                                        <script type="text/javascript">
                                            /* Javascript */
                                         
                                        $(function () {
                                         
                                          $("#rateYo<?php echo $i;?>").rateYo({
                                            rating: <?php echo $ratings;?>,
                                            starWidth:"30px",
                                            readOnly: true
                                          });
                                        });
                                        </script>
                                         
                                    </div>
                                    </font><!--  <a href="#" class="btn btn-primary">Add to Cart</a> -->
                                </div>                      
                            </div>
                           
                    </div>
                         
                       
                       <?php }} ?> 
                    </div>

                </div>
            
           
           <br>
         
        </div>
    </div>
</div>
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
                            <th style="display: none;">Waktu Sampai</th>
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
                                echo '<td style="display: none;">' . $value1['arrivalTime'] . '</td>';
                                echo '<td style="display: none;"><select>';
                                echo '<option>Entry Point</option>';
                                foreach ($value1['entry_Point'] as $key => $value2) {
                                    echo '<option>' . $value2['entryPoint'] . '</option>';
                                }
                                echo '</select></td>';
                                echo '<td>' . $value1['price'] . '</td>';
                                echo '<td>';
                                if ($date->format('H:i')<$value1['departureTime'] || date('Y-m-d')<$this->bookDate ) { 
                                        
                                            echo'<input type="submit" name="bookNow" class="btn btn-primary" value="Book Now">';
                                            
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
