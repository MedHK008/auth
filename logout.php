<?php
session_start();

// Check if user is logged in, then destroy the session
if (isset($_SESSION['username'])) {
    // Unset all session variables
    $_SESSION = array();

    // Destroy the session
    session_destroy();

    // Redirect to login page after logout
    header("Location: index.php");
    exit;
} else {
    // If user is not logged in, redirect to login page
    header("Location: index.php");
    exit;
}
?>
