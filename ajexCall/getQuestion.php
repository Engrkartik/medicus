<?php
error_reporting(1);
session_start();
include '../db_config/class.query.php';

$obj = new User();
$object = new fetch();
$updateObject=new UpdateRecord();

$result=$object->fetchNewQuestion($_SESSION['s_id']);
$numRow=mysqli_num_rows($result);

if(isset($_REQUEST['submit'])){
    extract($_REQUEST);
    $ans = $_REQUEST['ans'];
    $response=$updateObject->submitAnswer($qId,$ans);
}
?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript">
        function aa(id) {
            var x = document.getElementById("ans"+id).value;
            if(x==''){
                alert("Please Submit Your Answer");
            }else{
                alert(id);
            }
        }
        function hide(id) {
            $.get("answerLater.php",
                {
                    q_id: id
                },
                function(result){
                    //alert(result);
                    $("#result"+id).html(result);
                });
            $('#table1 .'+id).hide();
        }
    </script>
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
                    <div id="result<?php echo $row['q_id']; ?>"></div>
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
                                    <button type="submit" class="btn btn-sm" onclick="aa(<?=$row['q_id']; ?>)"><span class="glyphicon"><i class="fa fa-reply"></i></span>&nbsp;Reply</button>
                                </div>
                            </td>
                            <td>
                                <div class="col-sm-12">
                                    <button type="button" class="btn btn-sm" onclick="hide(<?=$row['q_id']; ?>)"><span class="glyphicon"><i class="fa fa-share"></i></span>&nbsp;<?php echo $row['q_id']; ?> Reply Later</button>
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