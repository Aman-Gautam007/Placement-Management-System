<?php
include("config.php");

$id = $_POST['in_Id'];
$first_name = $_POST['ad_FirstName'];
$last_name = $_POST['ad_LastName'];
$email = $_POST['ad_Email'];
$password = md5($_POST['ad_Password']);

$sql = "INSERT INTO tbl_users (id, user_role_id, first_name, last_name, email, password) 
        VALUES (:id, 4, :first_name, :last_name, :email, :password)";
$query = $dbConn->prepare($sql);
$query->bindParam(':id', $id);
$query->bindParam(':first_name', $first_name);
$query->bindParam(':last_name', $last_name);
$query->bindParam(':email', $email);
$query->bindParam(':password', $password);
$query->execute();

$dbConn = null;
header("Location: login.php");
