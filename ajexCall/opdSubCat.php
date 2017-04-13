<?php
error_reporting(1);
session_start();
include '../db_config/class.query.php';

$object = new fetch();

$opdValue=$_POST['opdVal'];

if(!empty($opdValue)){

    $response=$object->fetchOpdSubCat($opdValue);
    while($row=mysqli_fetch_array($response)){
        ?>
        <option value="<?php echo $row['sub_opd_name'];?>"><?php echo $row['sub_opd_name'];?></option>
        <?php
    }
}
?>