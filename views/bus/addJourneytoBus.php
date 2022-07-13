<?php require "views/header.php"; ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="main-button">
    <button class="btn"><a href="<?php echo URL; ?>bus"><img class="table-button"/></a></button>
</div>

<div class="">
    <div id="bodyhead"><h1><font color="white">Tambah Jurusan Untuk Mobil</font></h1></div><br/>
    <label>
        <?php
        $url = explode('/', $_GET['url']);
        if (isset($url[3])) {
            if ($url[3] == 'false')
                echo '<P style="color:red;">Only two allow</p>';
        }
        ?>
    </label>
    <?php
    //print_r($this->searchAllBus)
    ?>
    <?php
    ?>
    <div id="tSize">
        <div class="tSizeS">
            <div class="demo_jui">
                 <div class="table-responsive">
                <table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
                    <thead>
                        <tr>
                            <th>No.Plat Mobil</th>
                            <th>No. Jurusan</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No.Plat Mobil</th>
                            <th>Journey Point</th>
                            <th></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        if (isset($this->searchJourneyforBus)) {
//                        print_r($this->searchEntryPointForJourney);
                            foreach ($this->searchJourneyforBus as $key => $value) {
                                echo '<tr>';
                                echo '<td>' . $value['busNo'] . '</td>';
                                echo '<td>' . $value['journeyNo'] . '</td>';
                                echo '<td>
                            <a href="' . URL . 'bus/deleteJourneyforBus/' . $value['journey_for_bus_No'] . '/' . $value['busNo'] . '" class="fa fa-trash"></a>
                        </td>';
                                echo '</tr>';
                            }
                        }
                        ?>
                    </tbody>
                </table>
                 <div>
            </div>
        </div>
        <div class="spacer"></div>
        <div class="tFotm">
            <form id="EntryPointForJourney_create_form" action="<?php echo URL; ?>bus/addJourneyforBus/" method="post">
                <label for="journey" class="required"><font color="white">Kode Jurusan</label>

                <?php
                $url = explode('/', $_GET['url']);
                if (isset($url[2])) {
                    echo '<input type="hidden" name="busNo" value="' . $url[2] . '"><br/>';
                }
                ?>
                <?php
                if (isset($this->searchAllJourney)) {
                    foreach ($this->searchAllJourney as $key => $value) {
                        echo '<label></label>';
                        echo '<input type="radio" name="journeyNo" id="journeyNoRedioBtn" value="' . $value['journeyNo'] . '"/>' . ' ' . $value['journeyNo'] . '<br/>';
                    }
                }
                ?>
            </font>
                <label ></label>
                <input type="submit" name="addJourney" id="" value="Tambah Data">
            </form>
        </div>
    </div>
</div>
<?php require "views/footer.php"; ?>