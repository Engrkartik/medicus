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
    <?php
	include('header.php');
	?>
        <div id="wrapper" class="homepage-1"> <!-- Wrapper -->
            
            <!-- Header -->
            <!-- Header -->
            
             <div class="page-banner wow fadeInUp"><!-- Page banner -->
                 <div class="container">
                     <div class="page-title font-title">Appointment </div>
                     <div class="breadcrumb font-title"><a href="appointment.html">Home </a><span class="seperate">/ </span><span>Appointment </span></div>
                 </div>
             </div><!-- Page banner -->
            
             <div id="appointment-wrap" class="wow fadeInDown">
                 <div class="container">
                     <div class="row">
                         <div class="col-md-6">
                             <h3 class="font-title">Our History </h3>
                            
                             <form class="appointment-form">
                                 <div class="form-group">
                                     <input type="text" class="form-control" id="firstname" placeholder="First name*" />
                                 </div>
                                 <div class="form-group">
                                     <input type="text" class="form-control" id="lastname" placeholder="Last name*" />
                                 </div>
                                 <div class="form-group">
                                     <input type="email" class="form-control" id="email" placeholder="Email*" />
                                 </div>
                                 <div class="form-group">
                                     <input type="text" class="form-control" id="phone" placeholder="Phone number*" />
                                 </div>
                                 <div class="form-group">
                                     <select class="form-control">
                                         <option >Services* </option>
                                         <option >2 </option>
                                         <option >3 </option>
                                         <option >4 </option>
                                         <option >5 </option
                                     ></select>
                                 </div>
                                 <div class="form-group">
                                     <div id="sandbox-container">
                                         <div class="input-daterange" id="datepicker">
                                             <input class="input-sm form-control" name="start" type="text" placeholder="Appoinment Date*" />
                                         </div>
                                     </div>
                                 </div>
                                 <div class="form-group">
                                     <textarea class="form-control" rows="3" placeholder="comment*"></textarea>
                                 </div>
                                 <button type="submit" class="btn btn-default">Submit </button>
                             </form>
                            
                         </div>
                         <div class="col-md-6">
                             <div class="text-center">
                                 <img src="images/app-1.jpg" alt="app-1" class="img-responsive" />
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
            

            
             <!-- Counter -->
 
     </body>
 </html>
 <?php
	 include('footer.php');
	?>