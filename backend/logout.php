<?php
session_start();
session_unset(); // Remove all session variables
session_destroy(); // Destroy the session

// Redirect back to your login page
header("Location: ../Home_page/home.php");
exit();
?>