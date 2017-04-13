<?php
error_reporting(1);
session_start();
include '../db_config/class.query.php';

$obj = new User();
$object = new fetch();

$opdName=$_GET['opd'];

$response=$object->fetchFaq($opdName);
$rows=mysqli_num_rows($response);
if($rows) {
    ?>
    <div class="divContent">
        <div class="requestForm">
            <h3 class="newheading">
                Frequently Asked Question
            </h3>
            <div class="eopd_slip">
                <div class="questionBar" id="content-dtn">
                    <?php
                    while ($data = mysqli_fetch_array($response)) {
                        ?>
                        <p>
                            <span class="qustion"> Q.. <?php echo $data['question']; ?></span>
                            <strong>Ans.</strong><?php echo $data['answer']; ?>
                        </p>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <?php
}else{
    ?>
    <div class="divContent">
        <div class="requestForm">
            <h3 class="newheading">
                Frequently Asked Question
            </h3>
            <div class="eopd_slip">
                <div class="questionBar" id="content-dtn">
                    <div class="alert alert-danger fade in" style="text-align: center;">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close"></a>
                        <strong>Sorry ! </strong>No Question Available For This Type O.P.D.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
}
?>
