<?php
// Start or resume the session
session_start();

// Unset all of the session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect the user to the login page
$signin_path = $host . $uri . '../src/signin.php';
header("Location: $signin_path");
exit();
