<?php
error_reporting(1);
session_start();

include 'db_config/class.query.php';

$obj = new User();
$object = new fetch();
$objectUpdate = new UpdateRecord();

$code=$_GET['code'];
$email=$_GET['email'];

$status=$object->confirmation($email,$code);
if($status){
    $update=$objectUpdate->UserUpdate($email);
    if($update){
        echo "<script>alert('Your Mail Is Confirmed')</script>";
        echo "<script>window.location.href='Doctors/UserProfile.php'</script>";
    }
}else{
    echo "<script>alert('Your Mail Is Not Confirmed')</script>";
    echo "<script>window.location.href='Doctors/index.php'</script>";
}