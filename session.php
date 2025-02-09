<?php
session_start();
$inactive = 600; // 10 minutes

if (isset($_SESSION["last_activity"]) && (time() - $_SESSION["last_activity"] > $inactive)) {
    session_unset(); // Unset session variables
    session_destroy(); // Destroy session
}

$_SESSION["last_activity"] = time(); // Update last activity time
?>
