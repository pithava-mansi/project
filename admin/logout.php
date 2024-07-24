<?php
session_start(); // Start the session
session_destroy(); // Destroy the session
header("Location:/agrimart/index.php"); // Redirect to the login page
die(); // Ensure no further code is executed
?>
