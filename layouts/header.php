<?php
session_start();

// Assuming you set the value of $t in your session
$t = $_SESSION['user_role_id'] ?? null;
?>
<!DOCTYPE html>
<html lang="en">

<div class="header">
    <div class="pull-left">
        <div class="logo"><a href="index.html">
                <!-- <img src="assets/images/logo.png" alt="" /> --><span>
                    <?php
                    // Assuming $t holds the role information
                    if ($t == "1") {
                        echo "Admin";
                    } elseif ($t == "2") {
                        echo "Company";
                    } elseif ($t == "4") {
                        echo "Student";
                    } else {
                        // Default to "Admin" if $t is not recognized
                        echo "Admin";
                    }
                    ?>
                </span>
            </a></div>
        <div class="hamburger sidebar-toggle">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
        </div>
    </div>
    <div class="pull-right p-r-15">
        <ul>
            <li class="header-icon dib"><a href="#search"><i class="ti-search"></i></a></li>
            <li class="header-icon dib"><img class="avatar-img" src="assets/images/avatar/1.jpg" alt="" /> <span class="user-avatar"> <?php echo $_SESSION['first_name'] ?> &nbsp;<i class="ti-angle-down f-s-10"></i></span>
            </li>
        </ul>
    </div>
</div>