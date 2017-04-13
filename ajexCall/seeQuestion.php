<?php
error_reporting(1);
session_start();
include '../db_config/class.query.php';

$obj = new User();
$object = new fetch();
$updateObject=new UpdateRecord();

$userId=$_GET['userId'];

$response=$updateObject->seeQuestion($userId);

?>
