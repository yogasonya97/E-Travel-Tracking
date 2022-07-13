<?php require "views/header.php"; ?>
<!--http://formvalidator.net/#default-validators-->
<div class="main-button">
    <button class="btn"><a href="<?php echo URL; ?>systemUser"><img class="table-button"/></a></button>
    <button class="btn"><a href="<?php echo URL; ?>systemUser/create"><img class="add-button"/></a></button>
</div>

<div class="main-form">
    <h1><font color="white">Tambah Sistem User</font></h1>
    <?php
    $url = explode('/', $_GET['url']);
    if (isset($url[2])) {
        if ($url[2] == 'Success')
            echo '<P class="magOk"> Data Add Successful .... ! </p>';
        if ($url[2] == 'Fail')
            echo '<P class="magNo"> This User already exist .. !</p>';
    }
    ?>
    <form id="user_update_form" action="<?php echo URL; ?>systemUser/createSystemUser/" method="post">


        <label for="cUserName" class="required"><font color="white">User Name</font></label>		
        <input size="10" maxlength="15" name="cUserName" id="cUserName" type="text"  data-validation="required" ><br />			

        <label for="cEmpolyeeNo" class="required"><font color="white">Pengajuan Posisi</font></label>
      <!--   <input size="10" maxlength="15" name="cEmpolyeeNo" id="cEmpolyeeNo" type="text" data-validation="required"><br /> -->
        <select name="cEmpolyeeNo" id="cEmpolyeeNo" data-validation="required">
            <option value="OW1">Owner</option>
            <option value="AL1">Admin Loket</option>
            <option value="OP">Operator</option>
            <option value="BKMn">Booker Loket</option>
            <option value="SPDrv">Sopir</option>
        </select><br />			

        <label for="cEmpolyeeName" class="required"><font color="white">Nama Karyawan</font></label>
        <input size="20" name="cEmpolyeeName" id="cEmpolyeeName" type="text" data-validation="required"><br />			

        <label for="cEmpolyeeMNo" class="required"><font color="white">Mobile No</font></label>
        <input size="20" name="cEmpolyeeMNo" id="cEmpolyeeMNo" type="text" data-validation="required"><br />			

        <label ></label>
        <input type="submit" name="addNewUser" id="addNewBus" value="Simpan Data">	

    </form>
</div>
<?php require "views/footer.php"; ?>