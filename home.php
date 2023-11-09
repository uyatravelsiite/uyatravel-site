<?php
session_start();

// Check if the user is authenticated
if (!isset($_SESSION['authenticated']) || !$_SESSION['authenticated']) {
    header("Location: login.php"); // Redirect to the login page if not authenticated
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <!-- Add other navigation links as needed -->
            <li><a href="#">Welcome, <?php echo $_SESSION['username']; ?>!</a></li>
        </ul>
    </nav>
    
    <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
    <!-- Display user-specific content here -->
</body>
</html>
