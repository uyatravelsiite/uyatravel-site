<?php
session_start();

// Check if the user is authenticated
if (!isset($_SESSION['authenticated']) || !$_SESSION['authenticated']) {
    header("Location: login.php"); // Redirect to the login page if not authenticated
    exit();
}

// Replace with your actual database credentials
$servername = "127.0.0.1:3307";
$username = "root";
$password = "";
$dbname = "uyatravel";

// Get the user's ID after authentication (you need to implement this)
$user_id = $_SESSION['user_id']; // Example, use your actual session variable

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve reservations for the authenticated user
$sql = "SELECT * FROM reservations WHERE user_id = '$user_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Create and provide the user with a download link or file (e.g., CSV)
    // Modify this part to generate the download file based on your requirements
    // ...

    // For example, you can generate a CSV file with reservation data
    header("Content-type: text/csv");
    header("Content-disposition: attachment; filename=user_reservations.csv");
    
    $csv_file = fopen("php://output", "w");
    $headers = array('ID', 'First Name', 'Last Name', 'Trip', 'Children');
    fputcsv($csv_file, $headers);
    
    while ($row = $result->fetch_assoc()) {
        $data = array($row['id'], $row['first_name'], $row['last_name'], $row['trip'], $row['children']);
        fputcsv($csv_file, $data);
    }
    
    fclose($csv_file);
} else {
    echo "No reservations found for this user.";
}

// Close the database connection
$conn->close();
?>
