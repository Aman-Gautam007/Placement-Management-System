<?php
session_start();
require_once('config.php');

if (isset($_GET['logout']) && $_GET['logout'] == true) {
    $url = "http://".$_SERVER['HTTP_HOST']."/Placement-Management-System/login.php";
    header("Location: $url");
    exit;
}
?>
