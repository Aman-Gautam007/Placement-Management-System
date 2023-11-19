<?php
// db_connection.php

if (!defined('HOST')) {
    define('HOST', 'localhost');
}

if (!defined('DB_USER')) {
    define('DB_USER', 'root'); // replace with your database username
}

if (!defined('DB_PASS')) {
    define('DB_PASS', ''); // replace with your database password
}

if (!defined('DB_NAME')) {
    define('DB_NAME', 'demo'); // replace with your database name
}

// Create connection
$conn = new mysqli(HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set utf8 character set
mysqli_set_charset($conn, 'utf8');
?>

