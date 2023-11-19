<?php
// signup.php

// Start the session
session_start();

// Include the configuration file and other necessary files
require_once(__DIR__ . '/inc/config.php');
require_once(__DIR__ . '/inc/db_connection.php');
require_once(__DIR__ . '/inc/sanitize_function.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = sanitize_input($_POST["fullName"]);
    $email = sanitize_input($_POST["email"]);
    $password = md5(sanitize_input($_POST["password"]));
    $address = sanitize_input($_POST["address"]);

    // Insert user data into the database
    $sql = "INSERT INTO tbl_users (full_name, email, password, address) VALUES (:full_name, :email, :password, :address)";
    $query = $dbConn->prepare($sql);
    $query->bindParam(':full_name', $fullName);
    $query->bindParam(':email', $email);
    $query->bindParam(':password', $password);
    $query->bindParam(':address', $address);
    $query->execute();

    // Redirect to login page after successful registration
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Recruitment System</title>

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
  <link href="assets/css/lib/font-awesome.min.css" rel="stylesheet">
  <link href="assets/css/lib/themify-icons.css" rel="stylesheet">
  <link href="assets/css/lib/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/lib/unix.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body class="bg-primary">
    <div class="unix-login">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <div class="login-logo">
                        <a href="index.html"><span>Student Registration Page</span></a>
                    </div>
                    <div class="login-form">
                        <div class="login-form">
                        <h4>Sign Up</h4>
                            <?php
                            // Display any signup error messages
                            if (isset($signupError)) {
                                echo '<div class="alert alert-danger">';
                                echo $signupError;
                                echo '</div>';
                            }
                            ?>
                            <form class="form-horizontal" method='POST' role='form' action='student_add.php'>
                                <div class='form-group'>
                                    <label for='ad_FirstName' class="col-sm-2 control-label">First Name</label>
                                    <div class="col-sm-10">
                                        <input name='ad_FirstName' id='ad_FirstName' class='form-control' type='text'>
                                   </div>
                                </div>
                                <div class='form-group'>
                                    <label for='ad_LastName' class="col-sm-2 control-label">Last Name</label>
                                    <div class="col-sm-10">
                                        <input name='ad_LastName' id='ad_LastName' class='form-control' type='text'>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label for='ad_Email' class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-10">
                                        <input name='ad_Email' id='ad_Email' class='form-control' type='text'>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label for='ad_Password' class="col-sm-2 control-label">Password</label>
                                    <div class="col-sm-10">
                                        <input name='ad_Password' id='ad_Password' class='form-control' type='text'>
                                    </div>
                                </div>
                                <div class="col-sm-offset-2 col-sm-10">
                                    <input type="submit" value="Register" class="btn btn-primary">
                                </div>
                                <div class="register-link m-t-15 text-center">
                                    <p>Back to <a href="login.php">Login</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
