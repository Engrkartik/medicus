<?php
error_reporting(1);
session_start();
include '../db_config/class.query.php';

$obj = new User();
$object = new fetch();
$updateObject=new UpdateRecord();

$qId=$_GET['q_id'];

$response=$updateObject->answerLater($qId);
if($response){
    $message = '<div class="alert alert-success fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                          <strong>Okk ! </strong>Your Answer Later Of This Question.
                 </div>';
}else{
    $message = '<div class="alert alert-danger fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                          <strong>Error ! </strong>Your Request Is Not Submit.
                 </div>';
}
?>
<div class="col-sm-12">
    <?php
    echo $message;
    ?>
</div>
