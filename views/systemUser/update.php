<?php require "views/header.php"; ?>
<div class="main-button">
    <button class="btn"><a href="<?php echo URL; ?>systemUser"><img class="table-button"/></a></button>
    <button class="btn"><a href="<?php echo URL; ?>systemUser/create"><img class="add-button"/></a></button>
</div>

<div class="main-form">
    <h1><font color="white">Edit Sistem User</font></h1>
    <?php
    $url = explode('/', $_GET['url']);
    if (isset($url[2])) {
        if ($url[2] == 'Success')
            echo '<P class="magOk"> Data Edit Successful .... ! </p>';
        if ($url[2] == 'Fail')
            echo '<P class="magNo"> Data Update Fail ...!</p>';
    }
    ?>
    <form id="user_update_form" action="<?php echo URL; ?>systemUser/updateSystemUser/" method="post">

                
        <label for="cUserName" class="required"><font color="white">User Name </font></label>		
        <input size="10" maxlength="10" name="uUserName" id="uUserName" type="text" value="<?php
    if (isset($this->user[0]['userName'])) {
        echo $this->user[0]['userName'];
    }
    ?>"  data-validation="required" ><br />
        <label for="cEmpolyeeNo" class="required"><font color="white">No User/Karyawan</font></label>
        <input size="10" maxlength="15" name="uEmpolyeeNo" id="uEmpolyeeNo" type="text" value="<?php
    if (isset($this->user[0]['empolyeeNo'])) {
        echo $this->user[0]['empolyeeNo'];
    }
    ?>" data-validation="required"><br />			

        <label for="cEmpolyeeName" class="required"><font color="white">Nama User/Karyawan</font></label>
        <input size="20" name="uEmpolyeeName" id="uEmpolyeeName" type="text" value="<?php
    if (isset($this->user[0]['empolyeeName'])) {
        echo $this->user[0]['empolyeeName'];
    }
    ?>" data-validation="required"><br />			

        <label for="cEmpolyeeMNo" class="required"><font color="white">Mobile No</font></label>
        <input size="10" name="uEmpolyeeMNo" id="uEmpolyeeMNo" type="text" value="<?php
               if (isset($this->user[0]['empolyeeMNo'])) {
                   echo $this->user[0]['empolyeeMNo'];
               }
    ?>" ddata-validation="required"><br />			

        <label ></label>
        <input type="submit" name="editUser" id="editUser" value="Simpan Data">	

    </form>
</div>
<?php require "views/footer.php"; ?>