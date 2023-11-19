<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['id'], $_SESSION['user_role_id'])) {
    header('location:admin/index.php?lmsg=true');
    exit;
}
require_once('config.php');
$id = $_SESSION['id'];

#$id = $_POST['st_Id'];
$name = $_POST['st_Name'];
$email = $_POST['st_Email'];
$phone = $_POST['st_Phone'];
$bio = $_POST['st_Bio'];
$cv = $_FILES["st_Cv"]["name"];
$cgpa = $_POST['cgpa'];


$target_path = "../uploads/";

    if (!file_exists($target_path)) {
        mkdir($target_path, 0777, true); // Create the directory if it doesn't exist
    }

    $target_path = $target_path . basename($_FILES['st_Cv']['name']);

    if (move_uploaded_file($_FILES['st_Cv']['tmp_name'], $target_path)) {
        echo "File uploaded successfully!";
    } else {
        echo "Sorry, file not uploaded, please try again!";
    }

$sql = "INSERT INTO students (id,name,email,phone,user_auth, cgpa, bio,cv) VALUES (:id,:name,:email,:phone,:user_auth, :cgpa, :bio, :cv)";
$query = $dbConn->prepare($sql);
$query->bindparam(':id', $id);
$query->bindparam(':user_auth', $id);
$query->bindparam(':name', $name);
$query->bindparam(':email', $email);
$query->bindparam(':phone', $phone);
$query->bindparam(':cgpa', $cgpa);
$query->bindparam(':bio', $bio);
$query->bindparam(':cv', $cv);
$query->execute();
$dbConn = null;


header("Location: display_info.php");
exit;
