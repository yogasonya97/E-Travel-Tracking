<?php require "views/header.php"; ?>
<div class="main-button">
    <button class="btn"><a href="<?php echo URL; ?>journey"><img class="table-button"/></a></button>
    <button class="btn"><a href="<?php echo URL; ?>journey/create"><img class="add-button"/></a></button>
</div>

<div class="main-form">
    <h1><font color="white">Edit Jurusan</font></h1>
    <?php
    $url = explode('/', $_GET['url']);
    if (isset($url[2])) {
        if ($url[2] == 'Success')
            echo '<P class="magOk"> Data Update Successful ... ! </p>';
        if ($url[2] == 'Fail')
            echo '<P class="magNo"> Data Update Fail ... !</p>';
    }
    ?>
    <form id="bus_update_form" action="<?php echo URL; ?>journey/updateJourney/" method="post">



        <input type="hidden" name="ujourneyNo" value="<?php
    if (isset($this->journey[0]['journeyNo'])) {
        echo $this->journey[0]['journeyNo'];
    }
    ?>">
        <label for="routeNo" class="required"><font color="white">No. Jurusan</font></label>
        <font color="white"><label for="routeNo" class="required"><?php
               if (isset($this->journey[0]['journeyNo'])) {
                   echo $this->journey[0]['journeyNo'];
               }
    ?></label></font><br />

        <label for="routeNo" class="required"><font color="white">No.Rute</font></label>
        <input size="10" maxlength="15" name="uRouteNo" id="uRouteNo" type="text" value="<?php
            if (isset($this->journey[0]['routeNo'])) {
                echo $this->journey[0]['routeNo'];
            }
    ?>" data-validation="required"><br />			

        <label for="journeyFrom" class="required"><font color="white">Jurusan Dari</font></label>
        <input size="10" name="uJourneyFrom" id="uJourneyFrom" type="text"  value="<?php
               if (isset($this->journey[0]['journeyFrom'])) {
                   echo $this->journey[0]['journeyFrom'];
               }
    ?>" data-validation="required"><br />			

        <label for="journeyTo" class="required"><font color="white">Jurusan Ke</font></label>
        <input size="10" name="uJourneyTo" id="uJourneyTo" type="text"  value="<?php
               if (isset($this->journey[0]['journeyTo'])) {
                   echo $this->journey[0]['journeyTo'];
               }
    ?>" data-validation="required"><br />

        <label for="Bus_departureTime" class="required"><font color="white">Waktu Berangkat</font></label>
        <input size="10" name="uBus_departureTime" type="text"  value="<?php
               if (isset($this->journey[0]['departureTime'])) {
                   echo $this->journey[0]['departureTime'];
               }
    ?>" value="00:00" type="text" data-validation="required"><font color="white"> 24 Jam</font><br />

        <label for="Bus_arrivalTime" class="required"><font color="white">Waktu Kemungkinan Sampai</font></label>
        <input size="10" name="uBus_arrivalTime" type="text"  value="<?php
               if (isset($this->journey[0]['arrivalTime'])) {
                   echo $this->journey[0]['arrivalTime'];
               }
    ?>" value="24:00" data-validation="required"><font color="white"> 24 Jam</font><br />

        <label for="price" class="required"><font color="white">Harga</font></label>
        <input  size="10" name="uPrice" id="uPrice" type="text"  value="<?php
               if (isset($this->journey[0]['price'])) {
                   echo $this->journey[0]['price'];
               }
    ?>" data-validation="required"><br />
  </font>
        <label ></label>
        <input type="submit" name="updateJourney" id="updateJourney" value="Simpan">	

    </form>
</div>
<?php require "views/footer.php"; ?>