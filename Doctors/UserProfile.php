<?php
error_reporting(1);
session_start();
if(!$_SESSION['userid']){
    header('Location:index.php');
}

include '../db_config/class.query.php';
$obj = new User();
$object = new fetch();

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="../js/ajaxJs/sideBarJavascript.js"></script>
    <script type="text/javascript" src="../js/ajaxJs/newQuestion.js"></script>
    <style>
        .result {
            opacity:1;
            transition:opacity 500ms;
        }
    </style>
</head>
<body>
<?php
include('doctorHeader.php');

$result=$object->fetchNewQuestion($_SESSION['s_id']);
$numRow=mysqli_num_rows($result);

$answerOfQuestion=$object->fetchPutAnsweringQuestion($_SESSION['s_id']);
$numRowOfAnswerOfQuestion=mysqli_num_rows($answerOfQuestion);

$seeQuestion=$object->fetchSeeQuestion($_SESSION['s_id']);
$numRowOfSeeQuestion=mysqli_num_rows($seeQuestion);

?>
<form name="sessionId">
    <input type="hidden" name="userId" id="userId" value="<?php echo $_SESSION['s_id']; ?>">
</form>
<div id="wrapper" class="homepage-1"> <!-- Wrapper -->

    <div class="hr">
    </div>
    <div class="ambulance fome">
        <div class="container" style="border: 1px solid rgb(228, 183, 175);border-radius: 5px;margin-top: 14px;background-color: rgb(251, 251, 251); margin-bottom:6px;">
            <h3 class="font-title" style="text-align:center;">User Profile </h3>
            <div class="row">
                <div class="col-sm-3" style="text-align: center;">
                    <table class="table table-bordered table-responsive table-hover">
                        <tr>
                            <td>
                                <a href="#" id="askQuestion" onclick="questionBarHide()">
                                    <span>New Question
                                        <span class="glyphicon" id="seeQuestionBar">
                                            <?php
                                            if($numRow>0){
                                                echo "<span class='label label-success'>".$numRow."</span>";
                                            }
                                            ?>
                                        </span>
                                    </span>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#" onclick="showAnswer()">
                                    <span>Answering
                                        <span class="glyphicon" id="answerBar">
                                            <?php
                                            if($numRowOfAnswerOfQuestion>0){
                                                echo "<span class='label label-primary'>".$numRowOfAnswerOfQuestion."</span>";
                                            }
                                            ?>
                                        </span>
                                    </span>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#" onclick="seeQuestion()">
                                    <span>Not Answering
                                        <span class="glyphicon" id="seeQuestionBar">
                                            <?php
                                            if($numRowOfSeeQuestion>0){
                                                echo "<span class='label label-danger'>".$numRowOfSeeQuestion."</span>";
                                            }
                                            ?>
                                        </span>
                                    </span>
                                </a>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-sm-8">
                    <?php
                    $sql=$object->userDetail($_SESSION['userid']);
                    $row=mysqli_fetch_array($sql);
                    ?>
                    <div class="col-sm-10">
                        <table class="table table-bordered table-responsive table-hover">
                            <tr>
                                <td><span><strong>Name : </strong></span></td>
                                <td><span><?php echo $row['name']; ?></span></td>
                                <td><span><strong>Email : </strong></span></td>
                                <td><span><?php echo $row['email']; ?></span></td>
                            </tr>
                            <tr>
                                <td><span><strong>Mobile : </strong></span></td>
                                <td><span><?php echo $row['mobile']; ?></span></td>
                                <td><span><strong>Degree : </strong></span></td>
                                <td><span><?php echo $row['degree']; ?></span></td>
                            </tr>
                            <tr>
                                <td><span><strong>Address : </strong></span></td>
                                <td><span><?php echo $row['address']; ?></span></td>
                                <td><span><strong>stabilization : </strong></span></td>
                                <td><span><?php echo $row['stablization']; ?></span></td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-sm-2">
                        <img src="../<?php echo $row['image']; ?> " width="100px;" height="115px;">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <!--------------New Question Sheet Start Here------------->
            <div class="row" id="newQuestion" style="display: none;">
                <?php
                if($numRow>0) {
                    ?>
                    <div class="col-sm-12" style="border: 1px solid rgb(228, 183, 175);border-radius: 5px;margin-top: 14px;background-color: rgb(251, 251, 251); margin-bottom:6px;">
                        <div style="margin: 10px;">
                            <h3 class="font-title" style="text-align:center;">Found New Question List</h3>
                            <table id="table1" class="table table-bordered table-responsive table-hover">
                                <thead>
                                <tr>
                                    <th>S.No.</th>
                                    <th>Question</th>
                                    <th>Submit Your Answer</th>
                                    <th>Reply</th>
                                    <th>Reply Later</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $count = 1;
                                while ($row = mysqli_fetch_array($result)) {
                                    ?>
                                    <div id="result<?php echo $row['q_id']; ?>" class="result"></div>
                                    <form id="form<?php echo $row['q_id']; ?>" method="post">
                                        <tr class="<?php echo $row['q_id']; ?>">
                                            <td><span><strong><?php echo $count; ?></strong></span></td>
                                            <td>
                                                <div class="col-sm-12">
                                                    <span><strong><?php echo $row['question']; ?></strong></span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-sm-12">
                                                    <input type="text" name="ans" id="ans<?php echo $row['q_id'];; ?>" class="form-control" required>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-sm-12">
                                                    <button type="button" class="btn btn-sm" onclick="submitAnswer(<?=$row['q_id']; ?>)"><span class="glyphicon"><i class="fa fa-reply"></i></span>&nbsp;Reply</button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-sm-12">
                                                    <button type="button" class="btn btn-sm" onclick="hide(<?=$row['q_id']; ?>)"><span class="glyphicon"><i class="fa fa-share"></i></span>&nbsp; Reply Later</button>
                                                </div>
                                            </td>
                                        </tr>
                                    </form>
                                    <?php
                                    $count++;
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <?php
                } else {
                    ?>
                    <div class="alert alert-danger fade in" style="text-align: center;">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>No New Question Found.</strong>
                    </div>
                    <?php
                }
                ?>
            </div>
            <!--------------New Question Sheet End Here------------->

            <!---------------Answer Sheet Div Start------------------------>
            <div class="row" id="answerSheet" style="display: none;">
                <?php
                if($numRowOfAnswerOfQuestion>0) {
                    ?>
                    <div class="col-sm-12" style="border: 1px solid rgb(228, 183, 175);border-radius: 5px;margin-top: 14px;background-color: rgb(251, 251, 251); margin-bottom:6px;">
                        <div style="margin: 10px;">
                            <h3 class="font-title" style="text-align:center;">Your Put Answer List</h3>
                            <table id="table2" class="table table-bordered table-responsive table-hover">
                                <thead>
                                <tr>
                                    <th>S.No.</th>
                                    <th>Question</th>
                                    <th>Your Putting Answer</th>
                                    <!---
                                    <th>Reply</th>
                                    <th>Reply Later</th>
                                    -->
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $count = 1;
                                while ($answerRow = mysqli_fetch_array($answerOfQuestion)) {
                                    ?>
                                    <!--<div id="result<?//php echo $answerRow['q_id']; ?>" class="result"></div>-->
                                    <form id="form<?php echo $answerRow['q_id']; ?>" method="post">
                                        <tr class="<?php echo $answerRow['q_id']; ?>">
                                            <td><span><strong><?php echo $count; ?></strong></span></td>
                                            <td>
                                                <div class="col-sm-12">
                                                    <span><strong><?php echo $answerRow['question']; ?></strong></span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-sm-12">
                                                    <span><strong><?php echo $answerRow['ans']; ?></strong></span>
                                                </div>
                                            </td>
                                            <!--
                                            <td>
                                                <div class="col-sm-12">
                                                    <button type="button" class="btn btn-sm" onclick="submitAnswer(<?//=$answerRow['q_id']; ?>)"><span class="glyphicon"><i class="fa fa-reply"></i></span>&nbsp;Reply</button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-sm-12">
                                                    <button type="button" class="btn btn-sm" onclick="hide(<?//=$answerRow['q_id']; ?>)"><span class="glyphicon"><i class="fa fa-share"></i></span>&nbsp; Reply Later</button>
                                                </div>
                                            </td>
                                            --->
                                        </tr>
                                    </form>
                                    <?php
                                    $count++;
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <?php
                } else {
                    ?>
                    <div class="alert alert-danger fade in" style="text-align: center;">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>You Have No Any Question Put Answer.</strong>
                    </div>
                    <?php
                }
                ?>
            </div><!---------------Answer Sheet Div End Here-------------->

            <!--------------Not Answering Question Sheet Start Here------------->
            <div class="row" id="seeAnswerSheet" style="display: none;">
                <?php
                if($numRowOfSeeQuestion>0) {
                    ?>
                    <div class="col-sm-12" style="border: 1px solid rgb(228, 183, 175);border-radius: 5px;margin-top: 14px;background-color: rgb(251, 251, 251); margin-bottom:6px;">
                        <div style="margin: 10px;">
                            <h3 class="font-title" style="text-align:center;">Found New Question List</h3>
                            <table id="table3" class="table table-bordered table-responsive table-hover">
                                <thead>
                                <tr>
                                    <th>S.No.</th>
                                    <th>Question</th>
                                    <th>Submit Your Answer</th>
                                    <th>Reply</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $count = 1;
                                while ($seeQuestionRow = mysqli_fetch_array($seeQuestion)) {
                                    ?>
                                    <div id="result<?php echo $seeQuestionRow['q_id']; ?>" class="result"></div>
                                    <form id="form<?php echo $seeQuestionRow['q_id']; ?>" method="post">
                                        <tr class="<?php echo $seeQuestionRow['q_id']; ?>">
                                            <td><span><strong><?php echo $count; ?></strong></span></td>
                                            <td>
                                                <div class="col-sm-12">
                                                    <span><strong><?php echo $seeQuestionRow['question']; ?></strong></span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-sm-12">
                                                    <input type="text" name="ans" id="ans<?php echo $seeQuestionRow['q_id'];; ?>" class="form-control" required>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-sm-12">
                                                    <button type="button" class="btn btn-sm" onclick="seeSubmitAnswer(<?=$seeQuestionRow['q_id']; ?>)"><span class="glyphicon"><i class="fa fa-reply"></i></span>&nbsp;Reply</button>
                                                </div>
                                            </td>
                                        </tr>
                                    </form>
                                    <?php
                                    $count++;
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <?php
                } else {
                    ?>
                    <div class="alert alert-danger fade in" style="text-align: center;">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>You Have No Pending Question Found.</strong>
                    </div>
                    <?php
                }
                ?>
            </div>
            <!--------------Not Answering Question Sheet End Here------------->
        </div>
    </div>
</body>
</html>
<?php
include('../footer.php');
?>