<?php
// Perform logout logic here (e.g., destroy session, clear cookies, etc.)

// Redirect the user to the login page
header("Location: login.php");
exit; // Make sure to exit after the redirect
?>
