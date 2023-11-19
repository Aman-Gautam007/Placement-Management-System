Copy code
<?php
session_start();

if (!isset($_SESSION['id'], $_SESSION['user_role_id'])) {
    header('location:login.php');
    exit;
}

require_once('config.php');

if (!isset($dbConn)) {
    die('Database connection not established. Check your configuration.');
}

$sql = "SELECT id, cp_name, job_type, CTC FROM tbl_company";
$query = $dbConn->query($sql);
$companies = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Your head content remains unchanged -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View Companies</title>
    <!-- Add your CSS styles or link external CSS files here -->
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
    <?php require_once('../layouts/sidebar.php'); ?>
    <?php require_once('../layouts/header.php'); ?>

    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <?php foreach ($companies as $company) : ?>
                        <div class="col-lg-4">
                            <div class="card alert">
                                <div class="card-header">
                                    <h4><?= $company['cp_name']; ?></h4>
                                </div>
                                <div class="card-body">
                                    <p><strong>Job Type:</strong> <?= $company['job_type']; ?></p>
                                    <p><strong>CTC:</strong> <?= $company['CTC']; ?></p>
                                    <form method="post" action="apply_job.php">
                                        <input type="hidden" name="company_id" value="<?= $company['id']; ?>">
                                        <button type="submit" class="btn btn-primary">Apply</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>


    <!-- Your script imports remain unchanged -->
    <!-- Add your scripts or link external JS files here -->
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
    <!-- // Datamap -->-->
    <script src="../assets/js/lib/weather/jquery.simpleWeather.min.js"></script>
    <script src="../assets/js/lib/weather/weather-init.js"></script>
    <script src="../assets/js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="../assets/js/lib/owl-carousel/owl.carousel-init.js"></script>
    <script src="../assets/js/scripts.js"></script>
    <!-- scripit init-->

</body>

</html>
