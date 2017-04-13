<?php
switch ($active){
    case 1:
        $driver="active";
        break;
    case 2:
        $questionList="active";
        break;
}
?>

<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="treeview <?php echo $driver; ?>">
                <a href="index.php">
                    <i class="fa fa-dashboard"></i> <span>Registered Doctor</span>
                </a>
            </li>
            <li class="treeview <?php echo $questionList; ?>">
                <a href="questionList.php">
                    <i class="fa fa-dashboard"></i> <span>Question List</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

