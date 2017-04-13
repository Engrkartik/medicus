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
        <link href="css/global.css" rel="stylesheet" type="text/css" />
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
       <script src="js/jquery.min.js"></script>
       
       <script type="text/javascript">

$(document).ready(function() {

	$(".tab_content").hide();
	$(".tab_content:first").show(); 

	$("ul.tabs li").click(function() {
		$("ul.tabs li").removeClass("active");
		$(this).addClass("active");
		$(".tab_content").hide();
		var activeTab = $(this).attr("rel"); 
		$("#"+activeTab).fadeIn(); 
	});
});

</script> 


   <script type="text/javascript" language="javascript">
			$(function() {

				//	Scrolled by user interaction
				$('#foo2').carouFredSel({
					auto: false,
					prev: '#prev2',
					next: '#next2',
					pagination: "#pager2",
					mousewheel: true,
					swipe: {
						onMouse: true,
						onTouch: true
					}
				});
				
				
				//	Scrolled by user interaction
				$('#foo3').carouFredSel({
					auto: false,
					prev: '#prev3',
					next: '#next3',
					pagination: "#pager2",
					mousewheel: true,
					swipe: {
						onMouse: true,
						onTouch: true
					}
				});
				
								

			});
		</script>
        

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
<div class="container" style="background:#fff;">
            	
                
                
                	
                    
                   <section id="middle">
                   
                   
                   <div class="row">
                   
                   	<div class="col-sm-3">
                    <div class="popularCategories">
               	 
                  
                  <h3 class="newheading">Categories</h3>
                  
      <ul class="popularCategoriesList">
<li><h2><a href="#">Nutritional</a></h2></li>
<li><h2><a href="#">Cosmetics</a></h2></li>
<li><h2><a href="#">Sex related problems</a></h2></li>
<li><h2><a href="#">Physiotherapy</a></h2></li>
<li><h2><a href="#">Labs & diagnostics</a></h2></li>
<li><h2><a href="#">Weight Management</a></h2></li>
<li><h2><a href="#">Ayurvedic & Naturopathy</a></h2></li>
<li><h2><a href="#">Speech Therapy</a></h2></li>
<li><h2><a href="#">FAQ</a></h2></li>
<li><h2><a href="#">Doctor's on Panel</a></h2></li>


                    </ul>
                    
                 
                 
                 
              </div>
                    </div>
                    <div class="col-sm-9">
                    
                    
                    	<div class="family text-center">
                       	  <a href="#"><span class="img"><img src="images/e_opd-icon/general.png" width="50" align="middle" /></span>  <p>Family Physician</p></a>
</div>
                    
                    
                    
                    <div class="">
                    
                    	<div id="tab-news">

  <ul class="tabs"> 
        <li class="active" rel="tab1">Ask a Question</li>
        <li rel="tab2">Login / Register</li>
        <li rel="tab3">Book an Appointment</li>
        
        
    </ul>

<div class="tab_container"> 

     <div id="tab1" class="tab_content"> 
		
        <div class="requestForm">
        <form action="#" method="post" name="login">
        	<ul style="margin-left:0;">
            
            <li>
           
            <textarea id="msg" name="askquestion" placeholder="Ask a question"></textarea>
            </li>
            
           
            <li>
                                    <label>&nbsp;</label>
                                    	<input type="button" value="Submit"> 
                                    </li>
            </ul>
            
            </form>
        </div>
        
								</div>
        
       

     
     
     <div id="tab2" class="tab_content"> 
		
        <div class="requestForm">
        <form>
                                <div class="form-group">
                                    <div class="col-md-6 ">
                                       <input type="name" name="username" placeholder="Username*" style="width: 100%;height: 45px;border: 1px solid rgb(137, 147, 161);font-size: 17px;">
                                      </div>
                                    <div class="col-md-6">
                                        <input type="name" name="password" placeholder="Password*" style="width: 100%;height: 45px;border: 1px solid rgb(137, 147, 161);font-size: 17px;">
                                    </div>
                                </div>
                         
                                <div class="form-group" style="padding-top: 104px;">
                                    
                                    <div class="col-md-6">
                                    
                                    </div>
                                    <div class="col-md-6 ">
                                       <button name="submit" style="width: 123px;height: 46px;border: 1px solid green;background-color: green;color: #fff;font-size: 20px;border-radius: 5px; margin-bottom:6px;">Login</button>
                                      </div>
                                </div>
                                
                                
                                
                                
                                
                                
                            </form>
        </div>

     </div>
     
     
     
     <div id="tab3" class="tab_content"> 
		<div class="col-xs-12 col-sm-10 col-md-8">
									<h1 class="myriadpro-light">
										<div class="d-subtext">Beat the traffic jams and clinic queues.</div>
										<div class="d-text">Consult the best doctors from your home.</div>
									</h1>
									<style>
	.a-searchBySpeciality .twitter-typeahead {display: block !important;}
	.a-searchBySpeciality .tt-dropdown-menu {top: 45px !important; text-align: left;}
	.a-systemSearch .input-group button {padding-left: 35px; padding-right: 35px;} 
</style>

<div class="a-searchBySpeciality a-systemSearch">
	<div class="form-group">
		<div class="input-group">
	  		<span class="twitter-typeahead" style="position: relative; display: inline-block; direction: ltr;"><input type="text" class="form-control input-lg" name="searchSpecility" value="" placeholder="Search by Speciality/Symptom" tabindex="1" style="font-size: 14px; position: relative; vertical-align: top;"></span>
	    	<span class="input-group-btn">
		        <button tabindex="1" class="btn btn-lg btn-primary" type="button">Search</button>
		    </span>
		</div>
	</div>
</div>
										<div class="col-xs-12">
											<ul class="d-iconedBulletPoints row">
								<li class="text-center col-xs-4"><img src="images/ic_doctor.png">
													<div class="d-point">Choose your Doctor</div></li>
	<li class="text-center col-xs-4"><img src="images/Rupee-private-icon.png">
													<div class="d-point">Pay Consultation Fee</div></li>
	<li class="text-center col-xs-4"><img src="images/Video-private-icon.png">
													<div class="d-point">Talk to the Doctor</div></li>
											</ul>
										</div>
									</div>
        

     </div>
     
     
 </div> 

</div>
                    
                    </div>
                    
                    
                    <div class="clearfix"></div>
                    	<div class="requestForm">
                        
                       
                        	<h3 class="newheading">
                            	   e-OPD Slip
                                
                            </h3>
                            
                            <div class="eopd_slip">
                            		<form>
                                <div class="form-group">
                                    <div class="col-md-6 ">
                                       <input type="name" name="name" placeholder="Name*" style="width: 100%;height: 45px;border: 1px solid rgb(137, 147, 161);font-size: 17px;">
                                      </div>
                                    <div class="col-md-6">
                                        <select name="sex" style="width: 100%;height: 45px;border: 1px solid rgb(137, 147, 161);font-size: 17px;">
                                        	<option>--sex--</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                           
                                        </select> 
                                    </div>
                                </div>
                                <div class="form-group" style="padding-top: 64px;">
                                    <div class="col-md-6 ">
                                       <input type="name" name="previous" placeholder="Previous Diagnosis (If Any)*" style="width: 100%;height: 45px;border: 1px solid rgb(137, 147, 161);font-size: 17px;">
                                      </div>
                                    <div class="col-md-6">
                                        <input type="name" name="want" placeholder="I want to get:-*" style="width: 100%;height: 45px;border: 1px solid rgb(137, 147, 161);font-size: 17px;">
                                    </div>
                                </div>
                                <div class="form-group" style="padding-top: 64px;">
                                    <div class="col-md-6 ">
                                       <input type="checkbox" name="consultation" /> <span> Doctor's Advance Consultation</span></li>
                                      </div>
                                    <div class="col-md-6">
                                        <input type="checkbox" name="query" /> <span>Query</span></li>
                                    </div>
                                </div>
                        
                                <div class="form-group" style="padding-top: 26px;">
                                    <div class="col-md-12 ">
                                       <textarea name="massage" placeholder="Message*" style="width: 100%;height: 100px;border: 1px solid rgb(137, 147, 161);font-size: 17px;"></textarea>
                                      </div>
                                    
                                </div>
                                <div class="form-group" style="padding-top: 104px;">
                                    
                                    <div class="col-md-6">
                                    <p style="font-size: 17px; color:rgb(145, 145, 145);">Upload Reports-:1*</p>
                                       <input type="file" name="reportsi" />
                                    </div>
                                    <div class="col-md-6 ">
                                      <p style="font-size: 17px; color:rgb(145, 145, 145);">Upload Reports-:2*</p>
                                       <input type="file" name="reports2" />
                                      </div>
                                </div>
                                <div class="form-group" style="padding-top: 104px;">
                                    
                                    <div class="col-md-6">
                                    <p style="font-size: 17px; color:rgb(145, 145, 145);">Upload Reports-:3*</p>
                                       <input type="file" name="reports3" />
                                    </div>
                                    <div class="col-md-6 ">
                                       <button name="submit" style="width: 123px;height: 46px;border: 1px solid green;background-color: green;color: #fff;font-size: 20px;border-radius: 5px; margin-bottom:6px;">Submite</button>
                                      </div>
                                </div>
                                
                                
                                
                                
                                
                                
                            </form>
                                    
                                    
                                
                            </div>
                        
                        
                        
                        
                        </div>
                    </div>
                    
                    
                   </div>
                   
                   
                   <div class="view-content">
                   
                   	<h3 class="newh2 text-center">Doctor's Profile</h3>
                   <div class="homecarebox">
                   
                   <div class="col-sm-6">
                   
                   	<div class="rehabilitation">
<h2><a name="special"></a>Doctor's Profile</h2>
<div class="imgframe"><img src="../../../../www.maxhealthcare.in/images/special-chronic-care-programme-pic.html" border="0" alt="Special Chronic Care Programme" adlesse_been_here="true"></div>
<div class="rehabilitation_text">
<h5>Max Home Health Care provides clinical support and medical management for adults experiencing a wide variety of medical conditions and surgical procedures.</h5>
</div>
<div class="clr">&nbsp;</div>
<p>Our multidisciplinary team of professionals works closely with the client's physician to develop an individualized plan of treatment. Treatment is focused on client assessment, intervention and education of client and caregiver, to promote compliance and prevention of complications or costly hospital readmission.</p>
</div>
                   </div>
                   
                   
                   <div class="col-sm-6">
                   	<div class="rimproves">
<h5>Special Chronic Care Programme Includes:</h5>
<ul class="listitem">
<li>Alzheimer's care &amp; Dementia management</li>
<li>Cancer care</li>
<li>Cardiac care</li>
<li>Diabetes management</li>
<li>Geriatric care</li>
<li>Pre &amp; Post-Surgical care</li>
<li>Respiratory disease management</li>
<li>Wound management &amp; Skin care</li>
<li>IV Infusion Program</li>
<li>Bariatric home nurse</li>
<li>Allied professionals like dieticians, psychologists etc.</li>
</ul>
</div>
                   </div>
                   </div>
                   
                   
                   <div class="proccess">
                   	<h3 class="newh2 text-center">Doctor's Profile</h3>
                    
                    <div class="col-sm-6">
                    <a href="#">Click for Home Page</a>
                    </div>
                    
                     <div class="col-sm-6">
                     <a href="#">Hove Query Want Second Option</a>
                    </div>
                   </div>
                   </div>
                   
                   
                   	
                    
                    
            
            
            
               
                   </section>
                   
                <div class="clearfix"></div>
                </div>
</body>
</html>
<?php
  include('footer.php');
  ?>