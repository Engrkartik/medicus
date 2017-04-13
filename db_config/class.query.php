<?php
error_reporting(1);
include "connection.php";
class User extends connection
{
    public function register($name,$email,$mobile,$degree,$regId,$stabilization,$pass,$image,$file_temp,$code){
        move_uploaded_file($file_temp,"../".$image);
        $sql2="INSERT INTO `tbl_user_register`(`name`, `email`, `mobile`, `degree`, `reg_id`, `stablization`, `password`, `image`, `code`, `status`,`admin_status`)VALUES ('$name','$email','$mobile','$degree','$regId','$stabilization','$pass','$image','$code','0','0')";
        $result=mysqli_query($this->db,$sql2);
        if($result)
        {
            return true;
        }
        else{
            return false;
        }
    }
    /*** for login process ***/
    public function check_login($email, $password)
    {
        $sql2 = "SELECT * FROM `tbl_user_register` WHERE `email`='$email' AND `password`='$password'";
        //checking if the username is available in the table
        $result = mysqli_query($this->db, $sql2);
        $user_data = mysqli_fetch_array($result);
        $count_row = $result->num_rows;

        if($user_data['status']=='0'){
            return "FalseMail";
        }
        elseif ($user_data['admin_status']=='0') {
            return "FalseAdmin";
        }
        elseif ($count_row == 1) {
            // this login var will use for the session thing
            //$_SESSION['login']=true;
            $_SESSION['sname']=$user_data['name'];
            $_SESSION['userid']=$user_data['email'];
            $_SESSION['s_id']=$user_data['id'];
            return "Success";
        } else {
            return "Fail";
        }
    }
    public function user_logout()
    {
        $_SESSION['login'] = false;
        unset($_SESSION['sname']);
        unset($_SESSION['userid']);
        unset($_SESSION['s_id']);
        header("location:index.php");
        exit();
    }
    public function askQuestion($question,$disease,$specialistId){
        $sql1="INSERT INTO `tbl_ask_qu`(`question`, `specialist_id`, `disease`, `ans`, `specialist_status`, `ans_status`) VALUES ('$question','$specialistId','$disease','','0','0')";
        $result1=mysqli_query($this->db,$sql1);
        if($result1)
        {
            return "true";
        }
        else{
            return "false";
        }
    }
}
class fetch extends connection{
    public function userRecord(){
        $sql="SELECT * FROM `tbl_user_register` ORDER BY  `id` DESC ";
        $result=mysqli_query($this->db,$sql);
        return $result;
    }
    public function userDetail($email){
        $sql="SELECT * FROM `tbl_user_register` WHERE `email`='$email'";
        $result=mysqli_query($this->db,$sql);
        return $result;
    }
    public function confirmation($email,$code){
        $sql="SELECT * FROM `tbl_user_register` WHERE `email`='$email' AND `code`='$code'";
        $result = mysqli_query($this->db, $sql);
        $user_data = mysqli_fetch_array($result);
        $count_row = $result->num_rows;
        if ($count_row == 1) {
            // this login var will use for the session thing
            $_SESSION['login']=true;
            $_SESSION['sname']=$user_data['name'];
            $_SESSION['userid']=$user_data['email'];
            return true;
        } else {
            return false;
        }
    }
    public function emailExist($email){
        $sql="SELECT * FROM `tbl_user_register` WHERE `email`='$email'";
        $result = mysqli_query($this->db, $sql);
        $count_row = $result->num_rows;
        if ($count_row == 1) {
            return true;
        } else {
            return false;
        }
    }
    public function userId($id){
        $sql="SELECT * FROM `tbl_user_register` WHERE `stablization`='$id'";
        $result=mysqli_query($this->db,$sql);
        return $result;
    }
    public function fetchNewQuestion($userId){
        $sql="SELECT * FROM `tbl_ask_qu` WHERE `specialist_id`='$userId' AND `specialist_status`='0'";
        $result=mysqli_query($this->db,$sql);
        return $result;
    }
    public function fetchPutAnsweringQuestion($userId){
        $sql="SELECT * FROM `tbl_ask_qu` WHERE `specialist_id`='$userId' AND `specialist_status`='1'";
        $result=mysqli_query($this->db,$sql);
        return $result;
    }
    public function fetchSeeQuestion($userId){
        $sql="SELECT * FROM `tbl_ask_qu` WHERE `specialist_id`='$userId' AND `specialist_status`='See'";
        $result=mysqli_query($this->db,$sql);
        return $result;
    }
    public function fetchOpd(){
        $sql="SELECT * FROM `tbl_opd_list`";
        $result=mysqli_query($this->db,$sql);
        return $result;
    }
    public function fetchOpdSingle($id){
        $sql="SELECT * FROM `tbl_opd_list` WHERE `opd_id`='$id'";
        $result=mysqli_query($this->db,$sql);
        return $result;
    }
    public function fetchOpdSubCat($opd_name){
        $sql="SELECT * FROM `tbl_sub_opd_list` WHERE `opd_name`='$opd_name'";
        $result=mysqli_query($this->db,$sql);
        return $result;
    }
    public function fetchOpdWithId($id){
        $sql="SELECT * FROM `tbl_opd_list` WHERE `opd_id`='$id'";
        $result=mysqli_query($this->db,$sql);
        return $result;
    }
    public function fetchAns($opdName){
        $sql="SELECT * FROM `faq` WHERE `disease`='$opdName' AND `ans_status`='1'";
        $result=mysqli_query($this->db,$sql);
        return $result;
    }
    public function fetchFaq($opdName){
        $sql="SELECT * FROM `faq` WHERE `opd_id`='$opdName'";
        $result=mysqli_query($this->db,$sql);
        return $result;
    }
    public function fetchDoctor($opdName){
        $sql="SELECT * FROM `tbl_user_register` WHERE `stablization`='$opdName' AND `status`='1' AND `admin_status`='1'";
        $result=mysqli_query($this->db,$sql);
        return $result;
    }
}
class UpdateRecord extends connection{
    public function UserUpdate($email){
        $sql="UPDATE `tbl_user_register` SET `status`='1' WHERE `email`='$email'";
        $result=mysqli_query($this->db,$sql);
        if($result)
        {
            return true;
        }
        else{
            return false;
        }
    }
    public function submitAnswer($questionId,$ans){
        $sql="UPDATE `tbl_ask_qu` SET `ans`='$ans',`specialist_status`='1',`ans_status`='0' WHERE `q_id`='$questionId'";
        $result=mysqli_query($this->db,$sql);
        if($result)
        {
            return true;
        }
        else{
            return false;
        }
    }
    public function answerLater($questionId){
        $sql="UPDATE `tbl_ask_qu` SET `specialist_status`='See',`ans_status`='0' WHERE `q_id`='$questionId'";
        $result=mysqli_query($this->db,$sql);
        if($result)
        {
            return true;
        }
        else{
            return false;
        }
    }
    public function seeQuestion($userId){
        $sql="UPDATE `tbl_ask_qu` SET `specialist_status`='See',`ans_status`='0' WHERE `specialist_id`='$userId' AND `specialist_status`='0'";
        $result=mysqli_query($this->db,$sql);
        if($result)
        {
            return true;
        }
        else{
            return false;
        }
    }
}