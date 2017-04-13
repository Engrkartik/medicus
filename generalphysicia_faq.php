<?php
require_once 'phpdocx-master/classes/TransformDoc.inc';
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
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script type="text/javascript">
            function aa(opd) {
                //alert(opdCat);
                var opdName = document.getElementById("opdName").value;
                $.get("ajexCall/showAnswer.php",
                    {
                        opd: opd
                    },
                    function(result){
                        //alert(result);
                        $("#showAns").html(result);
                    });
                $('#tab1').hide();
            }
        </script>
    </head>
    <body>
    <?php
	include('header.php');

    $opdId=$_GET['opdID'];

    $opdData=$object->fetchOpdWithId($opdId);
    $data=mysqli_fetch_array($opdData);

    $opdName=$data['opd_name'];

    $opdSubCat=$object->fetchOpdSubCat($opdName);

	?>
    <form name="opdName">
        <input type="hidden" name="opdName" id="opdName" value="<?php echo $opdName; ?>">
    </form>
   <div class="container" style="background:#fff;">
        <section id="middle">
            <div>
                <div class="eopdwork">
                    <div class="family text-center pull-left">
                        <a href="#"><span class="img"><img src="<?php echo $data['image']; ?>" width="50" align="middle"></span><p><?php echo $opdName; ?></p></a>
                    </div>
                    <div class="eopd_detail pull-right">
                        <ul>
                            <li><a href="AskQuestion.php?opdId=<?=$opdId; ?>" class=" btn-sm btn-success"><strong>Ask a Question</strong></a></li>
                        </ul>
                    </div>
                    <div class="view-content">
                        <div class="col-sm-12">
                            <div class="paymentmthod">
                                <div class="tab-category-vertical col-sm-4">
                                    <a href="#" ><h3 class="newheading">Common Medical Problem</h3></a>
                                    <a href="#" onclick="aa('<?=$opdId; ?>')"><h3 class="newheading">FAQ</h3></a>
                                    <!--<ul class="tabs">
                                        <?php
/*                                        while ($fetch=mysqli_fetch_array($opdSubCat)){
                                            */?>
                                            <a href="#" onclick="aa('<?/*=$fetch['sub_opd_name']; */?>')"><li><?php /*echo $fetch['sub_opd_name']; */?></li></a>
                                            <?php
/*                                        }
                                        */?>
                                    </ul>-->
                                </div>
                                <div class="tab_container col-sm-8 padinglr0">
                                    <div id="tab1">
                                        <div class="divContent">
                                            <div class="requestForm">
                                                <a href="#" ><h3 class="newheading">Common Medical Problem</h3></a>
                                                <div class="eopd_slip">
                                                    <div class="questionBar" id="content-dtn">
                                                        <p>
                                                            <?php

                                                            /*Name of the document file*/
                                                            $document = 'General_maedical_problem.docx';

                                                            /**Function to extract text*/
                                                            function extracttext($filename) {
                                                                //Check for extension
                                                                $ext = end(explode('.', $filename));

                                                                //if its docx file
                                                                if($ext == 'docx')
                                                                    $dataFile = "word/document.xml";
                                                                //else it must be odt file
                                                                else
                                                                    $dataFile = "content.xml";

                                                                //Create a new ZIP archive object
                                                                $zip = new ZipArchive;

                                                                // Open the archive file
                                                                if (true === $zip->open($filename)) {
                                                                    // If successful, search for the data file in the archive
                                                                    if (($index = $zip->locateName($dataFile)) !== false) {
                                                                        // Index found! Now read it to a string
                                                                        $text = $zip->getFromIndex($index);
                                                                        // Load XML from a string
                                                                        // Ignore errors and warnings
                                                                        $xml = DOMDocument::loadXML($text, LIBXML_NOENT | LIBXML_XINCLUDE | LIBXML_NOERROR | LIBXML_NOWARNING);
                                                                        // Remove XML formatting tags and return the text
                                                                        return strip_tags($xml->saveXML());
                                                                    }
                                                                    //Close the archive file
                                                                    $zip->close();
                                                                }

                                                                // In case of failure return a message
                                                                return "File not found";
                                                            }

                                                            echo extracttext($document);
                                                            ?>
                                                            <!--
                                                            <span class="qustion"> Q.. May I know about the symptoms of dengue and how can I aware from this disease and what are the precautions?</span>
                                                            <strong>Ans.</strong>
                                                        <ul>
                                                            <li>1. Sudden High Fever with Severe Headache</li>
                                                            <li> 2. Severe Bone and Joint Pain or  Pain behind eyes </li>
                                                            <li>3. Fatigue, Nausea and vomiting</li>
                                                            <li> 4. Skin rash may appear 2-5 days after fever </li>
                                                            <li>5. Blood platelet count is low and Dengue Antigen test(NS1) is positive(it can be done on the first day of fever) Dengue serology test should be done after 5 days of fever. </li>
                                                            <br />
                                                            Here are the precautions you can take<br />
                                                            <br />
                                                            <li>1. Take anti mosquito measures like use of mosquito net, mosquito repellent</li>
                                                            <li>2. Spraying of insecticides in surrounding and keep it free from vegetation</li>
                                                            <li> 3. Wearing full body covered dress</li>
                                                            <li>4. Discard empty containers for collection of water that promote mosquito breeding</li>
                                                        </ul>
                                                        <span class="qustion">Q.. I had fever with dry cough 10-15 days back. Fever has gone but cough is still. I had blood test done all are normal. I used some allopathic & ayurvedic syrups and taken antibiotic tab 5 days. I am still having cough. Please advise.</span>
                                                        <strong>Ans.</strong> If xray chest is normal, then only saline gargles and voice rest can help. It will take some time to settle down. Apart from this go for sputum sensitivity test for TB.
                                                        <span class="qustion">Q.. I am 35 years old suffering from fever and body ache from last three four days. I have not attended any doctor. And also not taken any medicine. Please tell me what medicine should I take for the fever and head ache. Early reply requested.</span>
                                                        <strong>Ans.</strong> .It may be viral fever
                                                        <br />
                                                        <ul>
                                                            <li>1.Take paracetamol\crocin 650mg, one tablet sos upto a maximum of three tablets daily after food </li>
                                                            <li>2.Take an antacid before meals</li>
                                                            <li>3.Drink plenty of water</li>
                                                            <li>4.Take rest</li>
                                                            <li>5.If no relief do blood examination like ESR, CBC and urine r/m Typhidot test, Blood for mp/malaria antigen and Dengue antigen(NS1) test after consulting doctor.</li>
                                                        </ul>
                                                        <span class="qustion">Q.. I am 19 years old I am having throat pain, difficult to swallow with cough and mild fever and not able to speak. And some time headaches. Please tell what to do.</span>
                                                        <strong>Ans.</strong> May be you have URTI(Upper Respiratory Tract Infection) or Tonsillitis.
                                                        <br />Gargle with warm salt water three times a day also betadine gargles(10 ml in half glass of lukewarm water) to reduce the swelling and pain caused by enlarged tonsils. Take paracetamol 650mg sos upto a maximum 3 tablets a day for 3 days. Take cetrizine tab at night. If problem persists consult a doctor.-->
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- #tab1 -->
                                    <div id="showAns">

                                    </div><!-- #tab2 -->
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-sm-12">
                            <div class="doctors filmstrip list_carousel">
                                <h3 class="newheading">Doctors on Panel</h3>
                                <a id="next2" class="next" href="#"><img src="images/next-arrow.png" /></a>
                                <a id="prev2" class="prev" href="#"><img src="images/prev-arrow.png" /></a>
                                <ul id="foo2">
                                    <?php
                                    $doctorsData=$object->fetchDoctor($opdName);
                                    $docRow=mysqli_num_rows($doctorsData);
                                    if($docRow>0) {
                                        while ($row = mysqli_fetch_array($doctorsData)) {
                                            ?>
                                            <li>
                                                <div style="text-align: center;">
                                                    <div class="img">
                                                        <img src="<?php echo $row['image']; ?>" class="img-responsive"/>
                                                    </div>
                                                    <div class="name">
                                                        <strong><?php echo $row['name']; ?></strong>
                                                    </div>
                                                    <div class="name">
                                                        <strong><?php echo $row['address']; ?></strong>
                                                    </div>
                                                </div>
                                            </li>
                                            <?php
                                        }
                                    }else{
                                        ?>
                                        <div class="alert alert-danger fade in" style="text-align: center;">
                                            <a href="#" class="close" data-dismiss="alert" aria-label="close"></a>
                                            <strong>Sorry ! </strong>No Doctor Available For This O.P.D.
                                        </div>
                                        <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
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