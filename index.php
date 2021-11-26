<?php
  error_reporting(0);
  $page = htmlentities($_REQUEST['page']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="./assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>UTS CS| SI-B 3</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800,900" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="./assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet" />
    <link href="./assets/plugins/bootstrap/css/bootstrap-grid.css" rel="stylesheet" />
    <link href="./assets/plugins/bootstrap/css/bootstrap-reboot.css" rel="stylesheet" />
    <link href="./assets/css/colors.css" rel="stylesheet" id="themecolor" />
    <link href="./assets/css/style.css" rel="stylesheet" />
    <!-- BEGIN PAGE LEVEL STYLE -->
    <link rel="stylesheet" href="./assets/plugins/amcharts/export.css" type="text/css" media="all" />
    <link href="./assets/plugins/jquery-jvectormap/jquery-jvectormap.css" rel="stylesheet" />
    <link href="./assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.css" rel="stylesheet" />
    <!-- END PAGE LEVEL STYLE -->
    <style id="clock-animations"></style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<!--Body Begins-->
<body>
<!--Begin Loading-->
<div class="preloader">
    <div class="loading">
        <h2>
            Loading...
        </h2>
        <span class="progress"></span>
    </div>
</div>
<!--End Loading-->
<!--Begin wrapper-->
<div class="wrapper">
    <!--Begin Sidebar-->
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-bg.jpg">
        <div class="sidebar-wrapper">
            <!--Begins Logo start-->
            <div class="logo">
                <a href="javascript:void(0)" class="simple-text logo-mini">
                    UTS
                </a>
                <a href="javascript:void(0)" class="simple-text logo-normal">
                    CLIENT SIDE | SI-B
                </a>
            </div>
            <!--End Logo start-->
            <!--Begins User Section-->
            <div class="user">
                <div class="photo">
                    <img src="./assets/img/SAGA.jpg" />
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#pvr_user_nav" class="collapsed">
                            <span>Raden Issaga P.
                                <b class="caret"></b>
                            </span>
                    </a>
                    <div class="collapse m-t-10" id="pvr_user_nav">
                        <ul class="nav">
                            <li>
                                <a class="profile-dropdown" href="javascript:void(0)">
                                    <span class="sidebar-mini"><i class="icon-user"></i></span>
                                    <span class="sidebar-normal">My Profile</span>
                                </a>
                            </li>
                            <li>
                                <a class="profile-dropdown" href="javascript:void(0)">
                                    <span class="sidebar-mini"><i class="icon-settings"></i></span>
                                    <span class="sidebar-normal">Settings</span>
                                </a>
                            </li>
                            <li>
                                <a class="profile-dropdown" href="javascript:void(0)">
                                    <span class="sidebar-mini"><i class="icon-logout"></i></span>
                                    <span class="sidebar-normal">Logout</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--End User Section-->
            <!-- Begins Navbar -->
            <!-- <ul class="nav">
                <li class="nav-item active" id="mnhome" >
                    <a class="nav-link" data-toggle="collapse" href="home.php">
                        <i class="material-icons">insert_chart</i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item" id="mndata">
                    <a class="nav-link" data-toggle="collapse" href="data.php">
                        <i class="material-icons">insert_chart</i>
                        <p>
                            Data
                        </p>
                    </a>
                </li>
            </ul> -->

                <ul class="nav">
                    <li class="nav-item" id="mnhome">
                        <a class="nav-link sub_link" href="home">
                            <i class="material-icons">insert_chart</i>
                            <span class="sidebar-normal">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item" id="mndata">
                        <a class="nav-link sub_link" href="data">
                            <i class="material-icons">insert_chart</i>
                            <span class="sidebar-normal">Data</span>
                        </a>
                    </li>
                </ul>

            <!-- End Navbar -->
        </div>
    </div>
    <!--End Sidebar-->
    <!--Begin Main Panel-->
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
            <div class="navbar-wrapper">
                    <div class="navbar-minimize">
                        <button id="minimizeSidebar" data-color="purple" class="btn btn-fill btn-round btn-icon d-none d-lg-block">
                            <i class="fa fa-ellipsis-v visible-on-sidebar-regular"></i>
                            <i class="fa fa-navicon visible-on-sidebar-mini"></i>
                        </button>
                    </div>
                    <a class="navbar-brand" id="page_header_title" href="javascript:void(0)">
                        <i class="material-icons">radio_button_checked</i>
                        Dashboard 
                    </a>
                </div>
                <div class="collapse navbar-collapse justify-content-end">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">account_box</i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
    </div>
    <!-- End Main Panel -->
    <!--Begin Content-->
    <div class="main-panel">
      <div class="content">
        <?php
          if(!file_exists($page) || empty($page)){
            include "home.php";
            }else{
              include $page;
            }
        ?>
      </div>
    </div>
    <!--End Content-->
</div>
<!--End wrapper-->

<!-- begin scroll to top btn -->
<a href="javascript:void(0)" class="btn btn-icon btn-circle btn-scroll-to-top btn-sm animated invisible text-light" data-color="purple" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
<!-- end scroll to top btn -->
</body>
<!--End Body-->
<!--   Core JS Files   -->
<script src="./assets/plugins/jquery/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="./assets/plugins/bootstrap/js/bootstrap.bundle.js" type="text/javascript"></script>
<script src="./assets/plugins/pace/pace.min.js"></script>
<script src="./assets/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"></script>
<script src="./assets/plugins/waitMe/waitMe.min.js"></script>
<script src="./assets/js/pvr_lite_app.js" id="appjs"></script>

<!-- PVR Lite DEMO, don't include it in your project! -->
<!-- <script src="./assets/js/pvr_lite_demo.js" type="text/javascript"></script> -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<!-- <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-66289183-8"></script> -->
<!-- BEGIN PAGE LEVEL JS -->
<!-- <script src="./assets/plugins/sparkline/jquery.sparkline.js" type="text/javascript"></script>
<script src="./assets/plugins/chartjs/Chart.min.js"></script>
<script src="./assets/plugins/countup/countUp.min.js"></script>
<script src="./assets/plugins/amcharts/amcharts.js"></script>
<script src="./assets/plugins/amcharts/serial.js"></script>
<script src="./assets/plugins/amcharts/export.min.js"></script>
<script src="./assets/plugins/amcharts/none.js"></script>
<script src="./assets/plugins/jquery-jvectormap/jquery-jvectormap.min.js"></script>
<script src="./assets/plugins/jquery-jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="./assets/plugins/real-shadow/realShadow.js" type="text/javascript"></script>
<script src="./assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="./assets/plugins/typeit/typeit.js"></script>
<script src="./assets/js/pvr_lite_dashboard_v1.js"></script> -->
<!-- END PAGE LEVEL JS -->
</html>