<?php
error_reporting(1);
session_start();
include '../db_config/class.query.php';

$object = new fetch();

$opdID=$_POST['id'];
$response=$object->fetchOpdSingle($opdID);
$rows=mysqli_num_rows($response);
$data=mysqli_fetch_array($response);
if($rows>0){
?>
<div class="modal-dialog">

    <!-- Modal content sign up-->
    <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;padding: 35px 50px;background-color: rgb(92, 184, 92);color: rgb(255, 255, 255);text-align: -moz-center;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4><img src="<?php echo $row['image']; ?>">&nbsp;<?php echo $data['opd_name']; ?></h4>
    </div>
    <div class="modal-body" style="padding:40px 50px;">
        <p><?php echo $data['description']; ?></p>
    </div>
</div>
</div>
<?php
}
?>