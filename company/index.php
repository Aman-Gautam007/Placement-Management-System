<?php
session_start();

if (!isset($_SESSION['id'], $_SESSION['user_role_id'])) {
    header('location:admin/index.php?lmsg=true');
    exit;
}

require_once('../inc/config.php');


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
    <!-- Styles -->
    <link href="../assets/css/lib/chartist/chartist.min.css" rel="stylesheet">
    <link href="../assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="../assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="../assets/css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="../assets/css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="../assets/css/lib/weather-icons.css" rel="stylesheet" />
    <link href="../assets/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="../assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/lib/unix.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/own.css" rel="stylesheet">
</head>

<body class="sidebar-hide">

    <?php require_once('../layouts/sidebar.php');

    ?>

    <?php require_once('../layouts/header.php'); ?>

    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Hello, <span>Welcome Here</span></h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li class="active">Home</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->

                <div class="col-lg-6">
                    <div class="card alert">
                        <div class="card-header">
                            <h4>Horizontal Form</h4>
                            <div class="card-header-right-icon">
                                <ul>
                                    <li class="card-close" data-dismiss="alert"><i class="ti-close"></i></li>
                                    <li class="doc-link"><a href="#"><i class="ti-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="horizontal-form">
                            <form class="form-horizontal" method='POST' role='form' action='co_add.php' enctype='multipart/form-data'>
                                    <input type='hidden' name='in_Id' id='in_Id' class='form-control' type='text'>


                                    <div class='form-group'>
                                        <label for='in_CpName' class="col-sm-2 control-label">Company Name</label>
                                        <div class="col-sm-10">
                                            <input name='in_CpName' id='in_CpName' class='form-control' type='text'>
                                        </div>
                                    </div>
                                    <div class='form-group'>
                                        <label for='in_JobPost' class="col-sm-2 control-label">Job Post</label>
                                        <div class="col-sm-10">
                                            <input name='in_JobPost' id='in_JobPost' class='form-control' type='text'>
                                        </div>
                                    </div>

                                    <div class='form-group'>
                                        <label for='in_CTC' class="col-sm-2 control-label">CTC</label>
                                        <div class="col-sm-10">
                                            <input name='in_CTC' id='in_CTC' class='form-control' type='text'>
                                        </div>
                                    </div>
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <input type="submit" value="Register" class="btn btn-primary">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /# main content -->
                <!-- /# container-fluid -->
            </div>
            <!-- /# main -->
        </div>
        <!-- /# content wrap -->



        <div id="search">
            <button type="button" class="close">×</button>
            <form>
                <input type="search" value="" placeholder="type keyword(s) here" />
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </div>
        <!-- jquery vendor -->
        <script src="../assets/js/lib/jquery.min.js"></script>
        <script src="../assets/js/lib/jquery.nanoscroller.min.js"></script>
        <!-- nano scroller -->
        <script src="../assets/js/lib/menubar/sidebar.js"></script>
        <script src="../assets/js/lib/preloader/pace.min.js"></script>
        <!-- sidebar -->
        <script src="../assets/js/lib/bootstrap.min.js"></script>
        <!-- bootstrap -->
        <script src="../assets/js/lib/mmc-common.js"></script>
        <script src="../assets/js/lib/mmc-chat.js"></script>
        <!--  Chart js -->
        <script src="../assets/js/lib/chart-js/Chart.bundle.js"></script>
        <script src="../assets/js/lib/chart-js/chartjs-init.js"></script>
        <!-- // Chart js -->

        <!--  Datamap -->
        <script src="../assets/js/lib/datamap/d3.min.js"></script>
        <script src="../assets/js/lib/datamap/topojson.js"></script>
        <script src="../assets/js/lib/datamap/datamaps.world.min.js"></script>
        <script src="../assets/js/lib/datamap/datamap-init.js"></script>
        <!-- // Datamap -->
        <script src="../assets/js/lib/weather/jquery.simpleWeather.min.js"></script>
        <script src="../assets/js/lib/weather/weather-init.js"></script>
        <script src="../assets/js/lib/owl-carousel/owl.carousel.min.js"></script>
        <script src="../assets/js/lib/owl-carousel/owl.carousel-init.js"></script>
        <script src="../assets/js/scripts.js"></script>
        <!-- scripit init-->
</body>

</html>