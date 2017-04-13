<?php
error_reporting(1);
session_start();

include '../../db_config/class.query.php';

$obj = new User();
$object = new fetch();
$updateObject=new UpdateRecord();

$qId=$_GET['q_id'];
$ans=$_GET['ans'];

$response=$updateObject->submitAnswer($qId,$ans);
if($response){
    $message = '<div class="alert alert-success fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                          <strong>Success ! </strong>Update your Answer Successfully.
                 </div>';
}else{
    $message = '<div class="alert alert-danger fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                          <strong>Error ! </strong>in Updating Your Answer.
                 </div>';
}
?>
<div class="col-sm-12">
    <?php
    echo $message;
    ?>
</div>
