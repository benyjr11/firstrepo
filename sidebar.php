<?php
    // Get the current file name
    $current_page = basename($_SERVER['PHP_SELF']);
?>
<nav class="col-md-2 d-none d-md-block sidebar">
    <h4 class="text-center mt-3"><i class="bi bi-mortarboard-fill me-2"></i>EduPortal</h4>
    <hr class="opacity-10">
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>" href="../dashboard/index.php">
                <i class="bi bi-speedometer2"></i> Dashboard
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo ($current_page == 'assignment.php') ? 'active' : ''; ?>" href="../dashboard/assignment.php">
                <i class="bi bi-book"></i> Assignments
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo ($current_page == 'settings.php') ? 'active' : ''; ?>" href="../dashboard/settings.php">
                <i class="bi bi-gear"></i> Settings
            </a>
        </li>
    </ul>
</nav>
