<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['id'], $_SESSION['user_role_id'])) {
    header('location:admin/index.php?lmsg=true');
    exit;
}

require_once('config.php');

// Assuming you have a logged-in user
$id = $_SESSION['id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Process the form submission

    // Retrieve company details from the form
    $cp_name = $_POST['in_CpName'];
    $job_type = $_POST['in_JobPost'];
    $ctc = $_POST['in_CTC'];

    // Insert the company into tbl_company
    $sql = "INSERT INTO tbl_company (user_auth, cp_name, job_type, ctc) VALUES (:user_auth, :cp_name, :job_type, :ctc)";
    $query = $dbConn->prepare($sql);
    $query->bindParam(':user_auth', $id);
    $query->bindParam(':cp_name', $cp_name);
    $query->bindParam(':job_type', $job_type);
    $query->bindParam(':ctc', $ctc);

    // Execute the query
    if ($query->execute()) {
        header("index.php");
    } else {
        echo "Error adding company: " . $query->errorInfo()[2];
    }
}

// Close the database connection
$dbConn = null;
?>
