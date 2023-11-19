<div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
    <div class="nano">
        <div class="nano-content">
            <ul>
                <li>
                    <a href="#">
                        <i></i>
                    </a>
                <?php if ($_SESSION['user_role_id'] == 1 || $_SESSION['user_role_id'] == 2) { ?>
                    <li>
                        <a href="index.php">
                            <i class="ti-home"></i> Dashboard
                        </a>
                    </li>
                <?php } ?>
                <?php if ($_SESSION['user_role_id'] == 4) { ?>
                    <li>
                        <a href="display_info.php">
                            <i class="ti-home"></i> Dashboard
                        </a>
                    </li>
                <?php } ?>
                <?php if ($_SESSION['user_role_id'] == 1) { ?>
                    <li>
                        <a href="view_companies.php">
                            <i class="ti-briefcase"></i> Companies
                        </a>
                    </li>
                <?php } ?>
                <?php if ($_SESSION['user_role_id'] == 4) { ?>
                    <li>
                        <a href="view_jobs.php">
                            <i class="ti-briefcase"></i> Jobs
                        </a>
                    </li>
                <?php } ?>
                <?php if ($_SESSION['user_role_id'] == 1 || $_SESSION['user_role_id'] == 2) { ?>
                    <li>
                        <a href="view_students.php">
                            <i class="ti-pencil"></i> Students
                        </a>
                    </li>
                <?php } ?>
                <?php if ($_SESSION['user_role_id'] == 1 || $_SESSION['user_role_id'] == 2 || $_SESSION['user_role_id'] == 4) { ?>
                    <li>
                        <a href="../login.php">
                            <i class="ti-close"></i> Logout
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>
