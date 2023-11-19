<?php
session_start();

if (!isset($_SESSION['id'], $_SESSION['user_role_id'])) {
    header('location:login.php');
    exit;
}

require_once('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $student_id = $_SESSION['id'];
    $company_id = $_POST['company_id'];

    // Check if the student has already applied to this company
    $checkSql = "SELECT id FROM applications WHERE student_id = :student_id AND company_id = :company_id";
    $checkQuery = $dbConn->prepare($checkSql);
    $checkQuery->bindParam(':student_id', $student_id);
    $checkQuery->bindParam(':company_id', $company_id);
    $checkQuery->execute();

    if ($checkQuery->rowCount() === 0) {
        // Insert a new application record
        $insertSql = "INSERT INTO applications (student_id, company_id) VALUES (:student_id, :company_id)";
        $insertQuery = $dbConn->prepare($insertSql);
        $insertQuery->bindParam(':student_id', $student_id);
        $insertQuery->bindParam(':company_id', $company_id);
        $insertQuery->execute();
    }

    // Redirect back to the view_companies page or wherever you want
    header('location:view_companies.php');
    exit;
} else {
    // Handle invalid requests
    header('HTTP/1.1 400 Bad Request');
    exit;
}
?>
