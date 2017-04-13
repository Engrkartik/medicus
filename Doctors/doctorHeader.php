
<div id="wrapper" class="homepage-1"> <!-- Wrapper -->
    <?php
    echo $error;
    ?>
    <div id="header" class="wow fadeInDown" style="height: 59px;"><!-- Header -->
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="logo-wrap">
                        <a href="../index.php" class="logo">
                            <img src="../images/logo.png" alt="logo" class="img-responsive" style="width: 174px;height: 72px;">
                        </a>
                    </div>
                </div>
                <div class="col-md-8" style="border:0px solid black;">
                    <!-- Top section -->
                    <div class="searchBox col-md-12">
                        <form class="form-inline" method="post" role="form" style="margin-top: 9px;float: right;">
                            <?php
                            if($_SESSION['userid']) {
                                echo "<a href='UserProfile.php'><span><strong>Welcome | </strong>" . $_SESSION['sname'] . "&nbsp;</span></a>";
                                echo "<a href='logout.php' class='btn-sm btn-primary'>Logout</a>";
                            }
                            ?>
                        </form>
                    </div>
                    <div class="col-md-12">
                        <div class="help" style="margin-top: 9px; float: right;">
                            <?php if(!$_SESSION['userid']){ ?>
                                <div>
                                    <button name="button" id="myBtn1" style="border: 1px solid rgb(51, 122, 183);width: 108%;height: 35px;color: rgb(255, 255, 255);background-color: rgb(104, 143, 176);border-radius: 3px;">Sign up</button>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="help" style="margin-top:9px; float: right; margin-right:20px;">
                            <?php if(!$_SESSION['userid']){ ?>
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
    <!--<div class="menu">
        <div class="container">
            <div class="main-nav-wrap"> <!-- Main navigation --
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display --
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling --
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <!--<li><a href="index.php">Home</a></li>--

                                <li><a href="#" id="myBtn1">Account Login</a></li>
                                <li><a href="#" id="myBtn2">Create New Account</a></li>

                                <!--<li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">MEDICAL EQUIPMENT<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="medical_equipment.php">Sphygmomanometer</a></li>

                                    </ul>
                                <li><a href="ambulance_service.php">AMBULANCE SERVICE</a></li>
                                <li><a href="contact.php">Contact us</a></li>
                                <li><a href="career.php">Career</a></li>
                                <li><a href="#">For Doctors</a></li>--
                            </ul>
                        </div><!-- /.navbar-collapse --
                    </div><!-- /.container-fluid --
                </nav>
            </div>
        </div>
    </div>-->