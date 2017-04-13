<?php
include("../db_config/class.Admin.php");

if (empty($_SESSION['Admin_id'])){
    header('Location:login.php');
}

$obj = new DeleteData();
$updateObj=new updateRecord();

$action=$_GET['case'];
switch($action){
    case'doctorDeactivate':
        $doctorId=$_GET['doctorId'];
        $sql =$updateObj->DeactivateDoctor($doctorId);
        if($sql){
            header("location:index.php");
        }else{
            header("location:index.php");
        }
        break;
    case'doctorActivate':
        $doctorId=$_GET['doctorId'];
        $sql =$updateObj->ActivateDoctor($doctorId);
        if($sql){
            header("location:index.php");
        }else{
            header("location:index.php");
        }
        break;
    case'showAnswer':
        $qId=$_GET['q_id'];
        $sql =$updateObj->showAnswer($qId);
        if($sql){
            header("location:questionList.php");
        }else{
            header("location:questionList.php");
        }
        break;
    case'hideAnswer':
        $qId=$_GET['q_id'];
        $sql =$updateObj->hideAnswer($qId);
        if($sql){
            header("location:questionList.php");
        }else{
            header("location:questionList.php");
        }
        break;
    case'updateAnswer':
        $qId=$_GET['q_id'];
        $sql =$updateObj->updateAnswer($qId);
        if($sql){
            header("location:questionList.php");
        }else{
            header("location:questionList.php");
        }
        break;
}
?>