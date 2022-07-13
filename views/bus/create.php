<?php require "views/header.php"; ?>
<!--http://formvalidator.net/#default-validators-->
<div class="main-button">
    <button class="btn"><a href="<?php echo URL; ?>bus"><img class="table-button"/></a></button>
    <button class="btn"><a href="<?php echo URL; ?>bus/create"><img class="add-button"/></a></button>
</div>

<div class="main-form">
    <h1><font color="white">Tambah Mobil Baru</font></h1>
    <?php
    $url = explode('/', $_GET['url']);
    if (isset($url[2])) {
        if ($url[2] == 'Success')
            echo '<P class="magOk"> Data Berhasil Ditambah .... ! </p>';
        if ($url[2] == 'Fail')
            echo '<P class="magNo"> This Bus Number already exist .. !</p>';
    }
    ?>
    <form id="bus_create_form" action="<?php echo URL; ?>bus/createBus/" method="post">


        <label for="Bus_busNo" class="required"><font color="white">No.Plat Mobil</font></label>		
        <input size="15" maxlength="15" name="cBus_busNo" id="Bus_busNo" type="text"  data-validation="required" ><br />			

        
        <label for="Bus_busModel" class="required"><font color="white">Model Mobil </font></label>
        <input size="15" maxlength="15" name="cBus_busModel" id="Bus_busModel" type="text" data-validation="required"><br />			

        <label for="Bus_numberOfSeat" class="required"><font color="white">Jumlah Kursi</font></label>
        <input size="10" name="cBus_numberOfSeat" id="Bus_numberOfSeat" type="text" data-validation="number" data-validation-allowing="range[7;10]"><br />			

        <label ></label>
        <input type="submit" name="addNewBus" id="addNewBus" value="Tambah Data">	

    </form>
</div>
<?php require "views/footer.php"; ?>