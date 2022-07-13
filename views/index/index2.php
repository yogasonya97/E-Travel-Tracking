<!--<script>
    $(window).unload(function(){
        console.log('s');
    });
</script>-->

<?php 
//print_r(date("Y-m-d"));
//echo date("H:i:s")
date_default_timezone_set("Asia/Colombo");
    //echo date('d-m-Y H:i:s');
?>

<?php require "views/header.php"; ?>

<style type="text/css">
    .car_searcharea{ 
    border-style: solid;  
    height: 355px;
    width: 300px;
    background-color: #F5F5F5;
    padding: 30px;
    float: center;
    margin-left: 30px;
    margin-bottom: 100px;
    margin-top: 80px;
    margin-right: 50px;
}
</style>
<div align="center">
<div class="car_searcharea">
<center>
<h1>Selamat Datang di Booking Center ...! </h1>.
</center>
<div class="abc">
    <form id="search_buses_form" action="<?php echo URL; ?>booker/" method="post">
        <div align="center">
        <table align="center">
        <tr>
            <td>
        <label for="journeyFrom" class="required">Jurusan Dari</label>
            </td>
            <td>
        <select class="select" name="journeyFrom" id="journeyFrom" style="width:110px;" data-validation="required">
            <option value="" >Select From</option>
            <?php
            $journeyFrom = null;
            foreach ($this->journeyFrom as $key => $value) {
                if($value['journeyFrom'] == $journeyFrom){}
                else{
                echo '<option value="' . $value['journeyFrom'] . '">' . $value['journeyFrom'] . '</option>';
                $journeyFrom = $value['journeyFrom'];
                }
            }
            ?>
        </select></td>
    </tr>
    <tr>
        <td>
        <label for="journeyTo" class="required">Jurusan Ke</label>
    </td>
    <td>
        <select class="select" name="journeyTo" id="journeyTo" style="width:110px;" data-validation="required">
            <option value="" >Select To</option>
            <?php
            foreach ($this->journeyTo as $key => $value) {
                echo '<option value="' . $value['journeyTo'] . '">' . $value['journeyTo'] . '</option>';
            }
            ?>
        </select></td>
    </tr>
    <tr>
        <td>
        <label for="dateofJourney" class="required">Date</label>
    </td>
    <td>
        <input  style="width:110px;" name="dateOfJourney" id="dateOfJourney" type="text" class="datepicker_bus_date" data-validation="required" value="<?php echo date("Y-m-d"); ?>"></td>
    </tr>
    <tr>
        <td>
        <label ></label>
    </td>
    <td>
        <input style="margin:5px 25px 0;" type="submit" name="searchBuses" id="searchBuses" value="Cari Mobil">	
    </td>
</tr>
    </table>
</div>
    </form>     
</div>
</div>
</div>


