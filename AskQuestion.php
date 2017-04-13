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
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#diseaseId").on("change",function(){
                var txt = $(this).val();
                $.post("ajexCall/opdSubCat.php",
                    {
                    opdVal: txt
                    },
                    function(result){
                        //alert("hello");
                    $("#opdSubCat").html(result);
                });

            });
        });
    </script>
    <![endif]-->
</head>
<body>
<?php
include('header.php');

$opdID=$_GET['opdId'];

$opdData=$object->fetchOpdWithId($opdID);
$data=mysqli_fetch_array($opdData);

$opdName=$data['opd_name'];

if(isset($_REQUEST['submit'])) {
    extract($_REQUEST);
    $question = $_REQUEST['question'];
    /*$disease=$_REQUEST['disease'];
    $opdSubCat=$_REQUEST['opdSubCat'];*/
    $getSpecialistId=$object->userId($opdName);
    $numRow=mysqli_num_rows($getSpecialistId);
    if($numRow>0){
        while($row=mysqli_fetch_array($getSpecialistId)){
            $specialistId=$row['id'];
            $response=$obj->askQuestion($question,$opdName,$specialistId);
            if($response){
                $message = '<div class="alert alert-success fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                          <strong>Success ! </strong>Submit your Question Successfully.
                 </div>';
            }else{
                $message = '<div class="alert alert-danger fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                          <strong>Error ! </strong>Your Question Is Not Submit.
                 </div>';
            }
        }
    }else {
        $message = '<div class="alert alert-danger fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                          <strong>Error ! </strong> We Have No Spacial Doctor Available Your Problem.
                 </div>';
    }
}


?>
<div id="wrapper" class="homepage-1"> <!-- Wrapper -->
    <div class="hr">
    </div>
    <div class="ambulance fome">
        <div class="container" style="border: 1px solid rgb(228, 183, 175);border-radius: 5px;margin-top: 14px;background-color: rgb(251, 251, 251); margin-bottom:6px;">
            <h3 class="font-title" style="text-align:center;">ASk A Question</h3>
            <?php
            echo $message;
            ?>
            <div class="row">
                <div class="col-sm-12">
                    <form class="form-group" method="POST">
                        <table class="table-responsive table-bordered table-hover table">
                            <tr>
                                <td>Question : </td>
                                <td>
                                    <textarea name="question" class="form-control" rows="5" required></textarea>
                                </td>
                                <!--<td>Disease : </td>
                                <td>
                                    <select class="form-control" name="disease" id="diseaseId" required>
                                        <option value="">--Select Disease---</option>
                                        <?php
/*                                        $sql=$object->fetchOpd();
                                        while($fetch=$sql->fetch_array()){
                                            */?>
                                            <option value="<?php /*echo $fetch['opd_name'];*/?>"><?php /*echo $fetch['opd_name'];*/?></option>
                                            <?php
/*                                        }*/?>
                                    </select>
                                </td>
                                <td>OPD Sub Cat: </td>
                                <td>
                                    <select required class="form-control" name="opdSubCat" id="opdSubCat">
                                    </select>
                                </td>-->
                            </tr>
                        </table>
                        <input type="submit" class="btn btn-success" name="submit" value="Submit Question" style="float: right; margin: 10px;">
                    </form>
                </div>
            </div>
        </div>

        <div class="container" style="border: 1px solid rgb(228, 183, 175);border-radius: 5px;margin-top: 14px;background-color: rgb(251, 251, 251); margin-bottom:6px;">
            <h3 class="font-title" style="text-align:center;">Get Second Opinion</h3>
            <?php
            //echo $message;
            ?>
            <div class="row">
                <div class="col-sm-12">
                    <form class="form-group" method="POST">
                        <table class="table-responsive table-bordered table-hover table">
                            <tr>
                                <td>Email</td>
                                <td>
                                    <input type="text" class="form-control" name="userMail" placeholder="Enter Your E-Mail" required>
                                </td>
                                <td>Comments</td>
                                <td>
                                    <textarea name="comments" placeholder="Enter The Comments" class="form-control" required></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>Upload File</td>
                                <td>
                                    <input type="file" class="form-control" name="file[]" multiple="multiple" required>
                                </td>
                                <td>&nbsp;</td>
                                <td>
                                    <input type="submit" class="btn btn-success" name="2ndOpinion" value="Submit" style="float: right; margin: 10px;">
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include('footer.php');
?>
</body>
</html>