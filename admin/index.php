<?php
include("../db_config/class.Admin.php");

if (empty($_SESSION['Admin_id'])){
    header('Location:login.php');
}

$obj = new Admin();
$object = new AdminDataFetch();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ADMIN :: Mediplus-Static</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" type="text/css" href="tcal.css"/>
    <script type="text/javascript" src="tcal.js"></script>
    <style>
        tr, td {
            padding: 10px;
        }
    </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <!---Header File--------->
    <?php  include("header.php");?>
    <!-----Header File End----------->
    <!-- Left side column -->
    <?php
    $active="1";
    include("leftsidebar.php");?>
    <!-----Left Side Column End-------->
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <!-- Main content -->

        <section class="content">

            <!-- /.box -->
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Registered Doctor List</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped table-hover">
                        <thead>
                        <tr>
                            <th>S.No.</th>
                            <th>Name </th>
                            <th>Email </th>
                            <th>Mobile</th>
                            <th>Degree</th>
                            <th>Address</th>
                            <th>Specialist</th>
                            <th>E-Mail Confirmation Status</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $sql=$object->registerDoctor();
                        $counter=1;
                        while ($row =  $sql->fetch_array()){
                            ?>
                            <tr>
                                <td><?php echo $counter; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['mobile']; ?></td>
                                <td><?php echo $row['degree']; ?></td>
                                <td><?php echo $row['address']; ?></td>
                                <td><?php echo $row['stablization']; ?></td>
                                <td>
                                    <?php
                                    if($row['status']=='1'){
                                        ?>
                                        <h3 style="text-align: center;"><span class='label label-success'><span class="glyphicon glyphicon-ok-sign"></span></span></h3>
                                        <?php
                                    }else{
                                        ?>
                                        <h3 style="text-align: center;"><span class='label label-danger'><span class="glyphicon glyphicon-remove-sign"></span></span></h3>
                                        <?php
                                    }
                                    ?>
                                </td>
                                <td><img src="../<?php echo $row['image']; ?>" style="width: 60px; height: 65px;" ></td>
                                <td>
                                    <?php
                                    if($row['admin_status']=='1'){
                                        ?>
                                        <button type="button" class="btn btn-default btn-danger">
                                            <a href='action.php?doctorId=<?php echo $row['id']; ?>&case=doctorDeactivate' onclick="return confirm('Are You Sure?');" style="color: #ffffff;"><span class="glyphicon glyphicon-trash"></span> Deactivate Doctor</a>
                                        </button>
                                        <?php
                                    }else{
                                        ?>
                                        <button type="button" class="btn btn-default btn-primary">
                                            <a href='action.php?doctorId=<?php echo $row['id']; ?>&case=doctorActivate' onclick="return confirm('Are You Sure?');" style="color: #ffffff;"><span class="glyphicon glyphicon-check"></span> Activate Doctor</a>
                                        </button>
                                        <?php
                                    }
                                    ?>
                                </td>
                            </tr>
                        <?php
                            $counter++;
                        }?>
                        </tbody>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
</div><!-- /.row -->
<!-- jQuery 2.1.4 -->
<script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
    $(function () {
        $('#example1').DataTable( {
            "scrollX": true
        } );
        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": true
        });
    });
</script>
</body>
</html>
