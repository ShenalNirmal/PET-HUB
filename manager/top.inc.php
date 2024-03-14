<?php
include "../config/con.php";
session_start();

// Check if the user is logged in
if (!isset($_SESSION["user_id"])) {
    // Redirect to the login page if not logged in
    header("Location: index.php");
    exit();
}

// Assuming you have a column named 'role' in your users table
$role = $_SESSION["role"];

// Check if the user has the required role (e.g., 'manager')
if ($role !== 'manager') {
    // Redirect to an unauthorized page or show an error message
    echo "You do not have the necessary permissions.";
    exit();
}

// Logout logic
if (isset($_GET["action"]) && $_GET["action"] == "logout") {
    // Clear all session variables
    session_unset();

    // Destroy the session
    session_destroy();

    // Redirect to the login page after logout
    header("Location: ../index.php");
    exit();
}
?>
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="index.php">PetHub</a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
    </form>
    <!-- Navbar-->
    
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#!">Settings</a></li>
                <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li><a class="dropdown-item" href="?action=logout">Logout</a></li>
            </ul>
        </li>
    </ul>
</nav>

<script type="text/javascript">
    function preventBack() {
        window.history.forward();
    };
    setTimeout("preventBack()", 0);
    window.unload = function () {
        null;
    }
</script>
