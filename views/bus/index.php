<?php require "views/header.php"; ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="main-button">
    <button class="btn"><a href="<?php echo URL; ?>bus"><img class="table-button"/></a></button>
    <button class="btn"><a href="<?php echo URL; ?>bus/create"><img class="add-button"/></a></button>
</div>

<div class="">
    <div id="bodyhead"><h1><font color="white">Semua Mobil</font></h1></div>
    <?php
    $url = explode('/', $_GET['url']);
    if (isset($url[2])) {
            echo '<P class="magNo">Error ... ! Data Search Fail. </p>';
    }
    ?>
    <div id="tSizeforBusData">
        <div class="demo_jui">
            <div class="table-responsive">
            <table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
                <thead>
                    <tr>
                        <th>No.Plat Mobil</th>
                        <th>Model</th>
                        <th>Jumlah Kursi</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No.Plat Mobil</th>
                        <th>Model</th>
                        <th>Jumlah Kursi</th>
                        <th></th>
                        <th></th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                    foreach ($this->searchAllBus as $key => $value) {
                        echo '<tr>';
                        echo '<td>' . $value['busNo'] . '</td>';
                        echo '<td>' . $value['busModel'] . '</td>';
                        echo '<td>' . $value['numberOfSeat'] . '</td>';
                        echo '<td><a href="' . URL . 'bus/addJourneytoBus/' . $value['busNo'] . '">J. No</a></td>';
                        echo '<td>
                            <a href="' . URL . 'bus/updateFromTable/' . $value['busNo'] . '"><i class="fa fa-pencil-square-o"></i></a>
                            <a href="' . URL . 'bus/deleteBus/' . $value['busNo'] . '"><i class="fa fa-trash"></i></a>
                     </td>';
                        echo '</tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
        </div>
        </div>
        <div class="spacer"></div>
    </div>
    <!-- <div class="UploadeBusNo">
        <input type="button" name="" id="UploadeBusNo" value="Uploade to Parse">
        <div class="loadingDefault"></div>
 </div> -->
    
</div>
<?php require "views/footer.php"; ?>
