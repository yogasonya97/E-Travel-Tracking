<?php require "views/header.php"; ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="main-button">
    <button class="btn"><a href="<?php echo URL; ?>systemUser"><img class="table-button"/></a></button>
    <button class="btn"><a href="<?php echo URL; ?>systemUser/create"><img class="add-button"/></a></button>
</div>

<div class="">
    <div id="bodyhead"><h1><font color="white">Semua Sistem User</font></h1></div>
    <?php
    $url = explode('/', $_GET['url']);
    if (isset($url[2])) {
        echo '<P class="magNo"> </p>';
    }
    ?>
    <div id="tSize">
        <div class="demo_jui">
            <div class="table-responsive">
            <table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
                <thead>
                    <tr>
                        <th>User Name</th>
                        <th>Kode User/Karyawan</th>
                        <th>Nama User/Karyawan</th>
                        <th>No HP</th>
                        <th>Privilege</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>User Name</th>
                        <th>Kode User/Karyawan</th>
                        <th>Nama User/Karyawan</th>
                        <th>No HP</th>
                        <th>Privilege</th>
                        <th></th>
                        <th></th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                    if (isset($this->searchAllSystemUser)) {
                        foreach ($this->searchAllSystemUser as $key => $value) {
                            echo '<tr>';
                            echo '<td>' . $value['userName'] . '</td>';
                            echo '<td>' . $value['empolyeeNo'] . '</td>';
                            echo '<td>' . $value['empolyeeName'] . '</td>';
                            echo '<td>' . $value['empolyeeMNo'] . '</td>';
                            echo '<td>' . $value['privilege'] . '</td>';
                            if ($value['privilege'] == 'Not User')
                                echo '<td><a href="' . URL . 'systemUser/createUserLogin/' . $value['userName'] . '/' . $value['privilege'] . '"> Create Login</a></td>';
                            else
                                echo '<td><a href="' . URL . 'systemUser/createUserLogin/' . $value['userName'] . '/' . $value['privilege'] . '"> Edit Login</a></td>';
                            echo '<td>
                                <a href="' . URL . 'systemUser/updateFromTable/' . $value['userName'] . '"><i class="fa fa-pencil-square-o"></i></a>
                                <a href="' . URL . 'systemUser/deleteSystemUser/' . $value['userName'] . '"><i class="fa fa-trash"></i></a>
                                </td>';
                            echo '</tr>';
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
        </div>
        <div class="spacer"></div>
    </div>
</div>
<?php require "views/footer.php"; ?>
