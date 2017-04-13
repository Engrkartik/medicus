<?php
error_reporting(1);
session_start();
include 'db_config/class.query.php';
$obj = new User();
$object = new fetch();

if(isset($_POST['login'])){
    extract($_REQUEST);
    $email = $_REQUEST['email'];
    $password = $_REQUEST['pass'];
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
        $error = $login.'<div class="alert alert-danger fade in" style="text-align: center;">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                          <strong>Error ! </strong> Your E-Mail ID Is Not Confirmed Please Confirmed First Your Mail-ID.
                 </div>';
    } elseif ($login=="FalseAdmin"){
        $error = $login.'<div class="alert alert-danger fade in" style="text-align: center;">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                          <strong>Error ! </strong> You Are Blocked By Admin.
                 </div>';
    }else {
        // Registration Failed
        $error = '<div class="alert alert-danger fade in" style="text-align: center;">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                          <strong>Error ! </strong> Wrong email or password.
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
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
        
        <!-- pretty-photo -->
        <link href="css/prettyPhoto.css" rel="stylesheet">

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
        <!-- slick carousel -->
        <link href="css/slick.css" rel="stylesheet">
        
        <!-- animate -->
        <link href="css/animate.css" rel="stylesheet">
        
        <!-- animate -->
        <link href="css/datepicker.css" rel="stylesheet">
        
        <!-- Main Style -->
        <link href="style.css" rel="stylesheet">
        <link href="responsive.css" rel="stylesheet">
       
   

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div id="wrapper" class="homepage-1"> <!-- Wrapper -->
            <?php
            echo $error;
            ?>
            <div id="header" class="wow fadeInDown"><!-- Header -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="logo-wrap">
                                <a href="index.php" class="logo">
                                    <img src="images/logo.png" alt="logo" class="img-responsive" style="width: 174px;height: 72px;">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-8" style="border:0px solid black;">
                             <!-- Top section -->
                             <!--<div class="searchBox col-md-12">
                                 <form class="form-inline" method="post" role="form" style="margin-top: 9px;float: right;">
                                     <?php
/*                                     if(!$_SESSION['userid']){
                                     */?>
                                     <div class="form-group">
                                         <input type="email" required class="form-control" name="email" id="email" placeholder="Enter email">
                                     </div>
                                     <div class="form-group">
                                         <input type="password" required class="form-control" name="pass" id="pwd" placeholder="Enter password">
                                     </div>
                                     <button type="submit" name="login" class="btn-sm btn-primary">Login</button>
                                     <?php
/*                                     }else{
                                         echo "<a href='UserProfile.php'><span><strong>Welcome ! </strong>".$_SESSION['sname']."&nbsp;</span></a>";
                                         echo "<a href='logout.php' class='btn-sm btn-primary'>Logout</a>";
                                     }
                                     */?>
                                 </form>
                                 
                             </div>--
                             <div class="col-md-12">
                                 <div class="help" style="margin-top: 9px; float: right;">
                                     <?php
                                     if(!$_SESSION['userid']){
                                         ?>
                                         <div>
                                             <button name="button" id="myBtn1" style="border: 1px solid rgb(51, 122, 183);width: 108%;height: 35px;color: rgb(255, 255, 255);background-color: rgb(104, 143, 176);border-radius: 3px;">Sign UP</button>
                                         </div>
                                     <?php } ?>
                                 </div>
                                 <div class="help" style="margin-top:9px; float: right; margin-right:20px;">
                                     <?php
                                     if(!$_SESSION['userid']){
                                         ?>
                                         <div>
                                             <button name="button" id="myBtn2" style="border: 1px solid rgb(51, 122, 183);width: 108%;height: 35px;color: rgb(255, 255, 255);background-color: rgb(104, 143, 176);border-radius: 3px;">Sign In</button>
                                         </div>
                                     <?php } ?>
                                 </div>
                             </div>
                             <!-- Main navigation -->
                        </div>
                    </div>
                </div>
            </div><!-- Header -->
            <div class="menu">
            <div class="container">
            <div class="main-nav-wrap"> <!-- Main navigation -->
                                <nav class="navbar navbar-default">
                                    <div class="container-fluid">
                                        <!-- Brand and toggle get grouped for better mobile display -->
                                        <div class="navbar-header">
                                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                                <span class="sr-only">Toggle navigation</span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>
                                        </div>
                                        <!-- Collect the nav links, forms, and other content for toggling -->
                                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                            <ul class="nav navbar-nav">
                                                <!--<li><a href="index.php">Home</a></li>-->
                                                
                                                <li><a href="services.php">Services</a></li>
                                                <li><a href="geriatrics-health-care.php">SR. CITIZEN HEALTH CARE</a></li>
                                               
                                                 <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">MEDICAL EQUIPMENT<span class="caret"></span></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="medical_equipment.php">Sphygmomanometer</a></li>
                                                       
                                                    </ul>
                                                <li><a href="ambulance_service.php">AMBULANCE SERVICE</a></li>
                                                <li><a href="contact.php">Contact us</a></li>
                                                <li><a href="career.php">Career</a></li>
                                                <li><a href="Doctors/index.php">For Doctors</a></li>
                                            </ul>
                                        </div><!-- /.navbar-collapse -->
                                    </div><!-- /.container-fluid -->
                                </nav>
                                
                            </div>
            </div>
            </div>
            
            

