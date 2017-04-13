<?php
error_reporting(1);
session_start();
include '../db_config/class.query.php';
$obj = new User();
$object = new fetch();

if(isset($_POST['login'])){
    extract($_REQUEST);
    $email = $_REQUEST['email'];
    $password = $_REQUEST['pass'];

    //echo "<script>alert('hello')</script>";
    
    $login = $obj->check_login($email,$password);

    if ($login=="Success") {
        // Registration Success
        if($_REQUEST['chk']=="true")
        {
            setcookie('cookieName',$email,time()+60*60);
            header("location:UserProfile.php");
        }
        header("location:UserProfile.php");
    } elseif ($login=="FalseMail"){
        $error = '<div class="alert alert-danger fade in" style="text-align: center;">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                          <strong>Error | </strong> Your E-Mail ID Is Not Confirmed Please Confirmed First Your Mail-ID.
                 </div>';
    } elseif ($login=="FalseAdmin"){
        $error = '<div class="alert alert-danger fade in" style="text-align: center;">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                          <strong>Error | </strong> Please wait for admin approval.
                 </div>';
    }else {
        // Registration Failed
        $error = '<div class="alert alert-danger fade in" style="text-align: center;">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                          <strong>Error | </strong> Wrong email or password.
                 </div>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Medi-Cus India</title>

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700' rel='stylesheet' type='text/css'>

    <!-- Font Awesome -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- pretty-photo -->
    <link href="../css/prettyPhoto.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- slick carousel -->
    <link href="../css/slick.css" rel="stylesheet">

    <!-- animate -->
    <link href="../css/animate.css" rel="stylesheet">

    <!-- animate -->
    <link href="../css/datepicker.css" rel="stylesheet">

    <!-- Main Style -->
    <link href="../style.css" rel="stylesheet">
    <link href="../responsive.css" rel="stylesheet">



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!---Meterial Design Start Here-------------------->

    <!-- Material Design fonts -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Material Design -->
    <link href="dist/css/bootstrap-material-design.css" rel="stylesheet">
    <link href="dist/css/ripples.min.css" rel="stylesheet">

    <!-- Dropdown.js -->
    <link href="//cdn.rawgit.com/FezVrasta/dropdown.js/master/jquery.dropdown.css" rel="stylesheet">

    <!-- Page style -->
    <link href="index.css" rel="stylesheet">

    <!-- jQuery --
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    
    <!-----[Metireal Design End Here---->
</head>
<body>
<?php
include('doctorHeader.php');
?>
<div id="wrapper" class="homepage-1"> <!-- Wrapper -->
    <div id="slider-section" class="wow fadeInUp"><!-- Slider -->
        <div id="home-slider">
            <div class="item">
                <img src="../images/banner4.jpg" alt="slide-1" class="img-responsive"/>
            </div>
        </div>
    </div><!-- Slider -->
</div> <!-- Wrapper -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.btnReadMore').click(function(){
            var value=$(this).attr('med');
            //alert(value);
            $.post("../ajexCall/opdPopUp.php",
                {
                    id: value
                    //deviceIMEI:1
                },
                function (result) {
                    $("#myModal3").modal();
                    $("#myModal3").html(result);
                }
            );
            //alert("hello");
        });
    });
</script>
<?php
include_once 'doctorsFooter.php';
?>
</body>
</html>