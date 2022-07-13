<?php require "views/header.php"; ?>
<div class="main-form">
    <a href="javascript:history.back();" class="p-link-back"><span class="label label-success text-capitalize">Kembali</span></a>
    <h1><font color="white">Ubah Password</font></h1>
    <?php
    $url = explode('/', $_GET['url']);
    if (isset($url[2])) {
        if ($url[2] == 'Success')
            echo '<P class="magOk"> Password Change Successful .... ! </p>';
        if ($url[2] == 'Fail')
            echo '<P class="magNo"> Password Change Fail ...!</p>';
    }
    ?>

    <form id="update_password_form" action="<?php echo URL; ?>systemUser/updatePassword/" method="post">

                
        <label class="changer_p" for="currentPassword"><font color="white"><font color="white">Password lama</font></font></label>
        <input size="15" maxlength="15" name="currentPassword" id="currentPassword" type="password" value="" data-validation="required"><br />			

        <label for="newPassword" class="changer_p"><font color="white">Password baru</font></label>
        <input size="15" name="newPassword" id="newPassword" type="password" value="" data-validation="required"><br />			

        <label for="confirmPassword" class="changer_p"><font color="white">Konfirmasi Password baru</font></label>
        <input size="15" name="confirmPassword" id="confirmPassword" type="password" value="" ddata-validation="required" ><br />			

        <label class="changer_p"></label>
        <input type="submit" name="updatePassword" id="updatePassword" value="Simpan Data">	

    </form>
</div>
<?php require "views/footer.php"; ?>