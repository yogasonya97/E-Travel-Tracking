<?php require "views/header.php"; ?>
<div class="main-button">
    <button class="btn"><a href="<?php echo URL; ?>systemUser"><img class="table-button"/></a></button>
</div>

<div class="main-form">
    <?php
    $url = explode('/', $_GET['url']);
    if ($url[3]=='Not User')
        echo '<h1><font color="white">Create Login</font></h1>';
    else 
        echo '<h1><font color="white">Edit Privilege & Reset Password</font></h1>';
    
    if (isset($url[2])) {
        if ($url[2] == 'Success')
            echo '<P class="magOk"> Data Add Successful .... ! </p>';
        if ($url[2] == 'Fail')
            echo '<P class="magNo"> Data Add Fail ...!</p>';
    }
    ?>
    <form id="user_update_form" action="<?php echo URL; ?>systemUser/createPrivilege/" method="post">


        <label for="UserName" class="required"><font color="white">User Name </font></label>		
        <input size="10" maxlength="10" name="loginUserName" id="loginUserName" type="text" value="<?php
    if (isset($url[2])) {
        echo $url[2];
    }
    ?>"  data-validation="required" ><br/>		

        <label for="privilege" class="required"><font color="white">Privilege</font></label>
        <select name="loginPrivilege" id="loginPrivilege" data-validation="required">
            <option value="<?php if (isset($url[3])) {
                   echo $url[3];
               } ?>" selected><?php if (isset($url[3])) {
                   echo $url[3];
               } ?></option>
            <option value="Owner" >Owner</option>
            <option value="Operator" >Operator</option>
            <!-- <option value="Booker" >Booker</option> -->
            <option value="BKOnline" >BKOnline</option>
            <option value="AdminLoket" >Admin Loket</option>
            <option value="Sopir" >Sopir</option>
        </select><br/>	

        <label ></label>
        <input type="submit" name="createLogin" id="createLogin" value="Simpan Data">	

    </form>
</div>
<?php require "views/footer.php"; ?>