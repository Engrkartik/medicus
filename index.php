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
            <div id="slider-section" class="wow fadeInUp"><!-- Slider -->
                <div id="home-slider">
                    <div class="item">
                        <img src="images/banner4.jpg" alt="slide-1" class="img-responsive"/>
                        <div class="slider-desc">
                            <div class="container">
                                <div class="content">
                                    <div class="small-title-slider font-title">Get</div>
                                    <div class="big-title-slider font-title" style="color:#fff;">E-OPD</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/banner_98.jpg" alt="slide-1" class="img-responsive"/>
                        <div class="slider-desc">
                            <div class="container">
                                <div class="content">
                                    <div class="small-title-slider font-title">Get</div>
                                    <div class="big-title-slider font-title" style="color:#fff;">E-OPD</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/banner1.jpg" alt="slide-1" class="img-responsive"/>
                        <div class="slider-desc">
                            <div class="container">
                                <div class="content">
                                    <div class="small-title-slider font-title">Get</div>
                                    <div class="big-title-slider font-title" style="color:#fff;">E-OPD</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/InnerBanner-2913-1348-1473.jpg" alt="slide-1" class="img-responsive"/>
                        <div class="slider-desc">
                            <div class="container">
                                <div class="content">
                                    <div class="small-title-slider font-title">Get</div>
                                    <div class="big-title-slider font-title" style="color:#fff;">E-OPD</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/waiting-room-1536x830.jpg" alt="slide-1" class="img-responsive"/>
                        <div class="slider-desc">
                            <div class="container">
                                <div class="content">
                                    <div class="small-title-slider font-title">Get</div>
                                    <div class="big-title-slider font-title" style="color:#fff;">E-OPD</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/bannerinner.png" alt="slide-2" class="img-responsive"/>
                        <div class="slider-desc">
                            <div class="container">
                                <div class="content">
                                    <div class="small-title-slider">Get</div>
                                    <div class="big-title-slider font-title" style="color:#fff;">AMBULANCE<span>SERVICE</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Slider -->
            
            <!-- Btn Banner -->
            
            <div id="services-section" class="wow fadeInDown" style="margin-bottom:10px;"> <!-- Services Tab -->
                
                <div class="services-tab-nav-wrap"><!-- Tab  Nav-->
                    <div class="container">
                        <div class="text-center">
                            <ul class="nav nav-tabs tab-services" role="tablist" style="background-color:#337ab7;">
                                <!--<li role="presentation" class="active">
                                    <a href="#services" aria-controls="services" role="tab" data-toggle="tab">
                                      How It works
                                    </a>
                                </li>-->
                                <li role="presentation">
                                    <a href="#" aria-controls="why" role="tab" data-toggle="tab">
                                      <span style="color:#ffffff;">e - OPD</span> 
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!-- Tab  Nav-->
                
                <div class="services-tab-content-wrap"><!-- Tab  Content -->
                    <div class="container">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="services"><!-- Tab  Content #1 -->
                                <div class="row">
                                    <?php
                                    $sql=$object->fetchOpd();
                                    while($row=$sql->fetch_array()){
                                        ?>
                                        <div class="col-md-4 opdRow">
                                            <a href="generalphysicia_faq.php?opdID=<?php echo $row['opd_id']; ?>">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="img">
                                                                <img src="<?php echo $row['image']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="services-excerpt">
                                                            <h3 class="font-title" ><?php echo $row['opd_name']; ?></h3>
                                                            <p>
                                                                <?php echo substr($row['description'],0, 90); ?>
                                                                <br><span class="btnReadMore" med="<?php echo $row['opd_id']; ?>" style="cursor: pointer;" onmouseover="this.style.color='red'" onMouseOut="this.style.color='#337ab7'">Read More...</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                </div>
                                
                                
                            </div><!-- Tab  Content #1 -->
                            
                            <div role="tabpanel" class="tab-pane fade" id="why"><!-- Tab  Content #2 -->
                                <div class="row">
                                    <div class="col-md-4">
                                        <a href="" class="services-hover">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="servicescon medical-services"></div>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="services-excerpt">
                                                        <div class="small-line"></div>
                                                        <h3 class="font-title">24 Hours Services</h3>
                                                        <p>
                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="" class="services-hover">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="servicescon medical-medicene"></div>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="services-excerpt">
                                                        <div class="small-line"></div>
                                                        <h3 class="font-title">Medical Consulting</h3>
                                                        <p>
                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="" class="services-hover">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="servicescon medical-love"></div>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="services-excerpt">
                                                        <div class="small-line"></div>
                                                        <h3 class="font-title">Care with Love</h3>
                                                        <p>
                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <a href="" class="services-hover">
                                            <div class="row">

                                                <div class="col-md-3">
                                                    <div class="servicescon medical-conseling"></div>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="services-excerpt">
                                                        <div class="small-line"></div>
                                                        <h3 class="font-title">Humble Staff</h3>
                                                        <p>
                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="" class="services-hover">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="servicescon medical-billing"></div>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="services-excerpt">
                                                        <div class="small-line"></div>
                                                        <h3 class="font-title">Reasonable Billing</h3>
                                                        <p>
                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="" class="services-hover">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="servicescon medical-doctor"></div>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="services-excerpt">
                                                        <div class="small-line"></div>
                                                        <h3 class="font-title">Qualified Doctors</h3>
                                                        <p>
                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <a href="">
                                            <img src="images/doctor-3.png" alt="d-3" class="img-responsive"/>
                                        </a>
                                    </div>
                                    
                                </div>
                            </div><!-- Tab  Content #2 -->
                            
                        </div>
                    </div>
                </div>
                
            </div>
            
<!--<div id="testimonial-section" class="wow fadeInDown">
                <div class="hr">
                </div>
                <div class="testimonial-wrap">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5">
                                <div id="testimonial-images">
                                    <div class="item">
                                        <img src="images/testimony-1.png" alt="t" class="img-responsive">
                                    </div>
                                    <div class="item">
                                        <img src="images/testimony-2.png" alt="t" class="img-responsive">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <h3 class="font-title">Patient says</h3>
                                <div id="testimonial-desc">
                                    <div>
                                        <div class="testimonial-content">
                                            <p class="font-title">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.
                                            </p>
                                            <div class="name font-title">Richard Maxmarge<span>Creative Director</span></div>
                                            
                                        </div>
                                    </div>
                                    
                                    <div>
                                        <div class="testimonial-content">
                                            
                                            <p class="font-title">
                                                The industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.
                                            </p>
                                            <div class="name font-title">Jhon Doe<span>Developer</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
            
            
            
         
            
        </div> <!-- Wrapper -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.btnReadMore').click(function(){
                var value=$(this).attr('med');
                //alert(value);
                $.post("ajexCall/opdPopUp.php",
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
    </body>
</html>
 <?php
  include('footer.php');
  ?>