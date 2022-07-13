<?php require "views/header.php"; ?>
<div class="main-button">
    <button class="btn"><a href="<?php echo URL; ?>journey"><img class="table-button"/></a></button>
</div>

<div class="">
    <div id="bodyhead"><h1><font color="white">Titik Jemput Untuk Jurusan</font></h1></div>
    <?php
    //print_r($this->searchAllBus)
    ?>
    <?php
    ?>
    <div id="tSize">
        <div class="tSizeS">
            <div class="demo_jui">
                <table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
                    <thead>
                        <tr>
                            <th>No. Jurusan</th>
                            <th>Titik Jemput</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                           <th>No. Jurusan</th>
                            <th>Titik Jemput</th>
                            <th></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        if (isset($this->searchEntryPointForJourney)) {
//                        print_r($this->searchEntryPointForJourney);
                            foreach ($this->searchEntryPointForJourney as $key => $value) {
                                echo '<tr>';
                                echo '<td>' . $value['journeyNo'] . '</td>';
                                echo '<td>' . $value['entryPoint'] . '</td>';
                                echo '<td>
                            <a href="' . URL . 'journey/deleteEntryPointForJourney/' . $value['entryPoint_for_journeyNo'] . '/' . $value['journeyNo'] . '"><i class="fa fa-trash"></i></a>
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
        <div class="tFotm">
            <form id="EntryPointForJourney_create_form" action="<?php echo URL; ?>journey/addEntryPointForJourney/" method="post">
                <label for="enntryPoint" class="required"><font color="white">Titik Jemput</label>
                <?php
                $url = explode('/', $_GET['url']);
                if (isset($url[2])) {
                    echo '<input type="hidden" name="journeyNo" value=' . $url[2] . '><br/>';
                }
                ?>
                <?php
                if (isset($this->searchAllEnrtyPointNo)) {
                    foreach ($this->searchAllEnrtyPointNo as $key => $value) {
                        echo '<label></label>';
                        echo '<input type="checkbox" name="enntryPoint[]" value=' . $value['entryPointNo'] . '>' . ' ' . $value['entryPoint'] . '<br/>';
                    }
                }
                ?>
                <label ></label></font>
                <input type="submit" name="addNewJourney" id="addNewJourney" value="Tambah Data">
            </form>
        </div>
    </div>
</div>
<?php require "views/footer.php"; ?>