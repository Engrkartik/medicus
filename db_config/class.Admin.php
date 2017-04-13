<?php
error_reporting(1);
include "connection.php";
class Admin extends connection{
    /*    Admin Login   */
    public function adminLogin($email, $password)
    {
        $sql2 = "SELECT * FROM `tbl_admin` WHERE `email`='$email' AND `password`='$password'";
        //checking if the username is available in the table
        $result = mysqli_query($this->db, $sql2);
        $user_data = mysqli_fetch_array($result);
        $count_row = $result->num_rows;
        if ($count_row == 1) {
            // this login var will use for the session thing
            $_SESSION['admin_login']=true;
            $_SESSION['Admin_name']=$user_data['name'];
            $_SESSION['Admin_userId']=$user_data['email'];
            $_SESSION['Admin_id']=$user_data['id'];
            return true;
        } else {
            return false;
        }
    }
    public function admin_logout()
    {
        $_SESSION['admin_login'] = false;
        unset($_SESSION['Admin_name']);
        unset($_SESSION['Admin_userId']);
        unset($_SESSION['Admin_id']);
        header("location:login.php");
        exit();
    }
}
class AdminDataFetch extends connection{
    public function registerDoctor(){
        $sql="SELECT * FROM `tbl_user_register`";
        $result=mysqli_query($this->db,$sql);
        return $result;
    }
    public function questionStatusFetch(){
        $sql="SELECT *
              FROM tbl_user_register
              RIGHT JOIN tbl_ask_qu
              ON tbl_user_register.id=tbl_ask_qu.specialist_id
              ORDER BY `tbl_ask_qu`.`q_id` DESC";
        $result=mysqli_query($this->db,$sql);
        return $result;
    }
}
class DeleteData extends connection{

}
class updateRecord extends connection{
    public function DeactivateDoctor($qId){
        $sql="UPDATE `tbl_user_register` SET `admin_status`='0' WHERE `id`='$qId'";
        $result=mysqli_query($this->db,$sql);
        if($result)
        {
            echo $qId;
            return "true";
        }
        else{
            return "false";
        }
    }
    public function ActivateDoctor($qId){
        $sql="UPDATE `tbl_user_register` SET `admin_status`='1' WHERE `id`='$qId'";
        $result=mysqli_query($this->db,$sql);
        if($result)
        {
            return "true";
        }
        else{
            return "false";
        }
    }
    public function showAnswer($qId){
        $sql="UPDATE `tbl_ask_qu` SET `ans_status`='1' WHERE `q_id`='$qId'";
        $result=mysqli_query($this->db,$sql);
        if($result)
        {
            return "true";
        }
        else{
            return "false";
        }
    }
    public function hideAnswer($qId){
        $sql="UPDATE `tbl_ask_qu` SET `ans_status`='0' WHERE `q_id`='$qId'";
        $result=mysqli_query($this->db,$sql);
        if($result)
        {
            return "true";
        }
        else{
            return "false";
        }
    }
}