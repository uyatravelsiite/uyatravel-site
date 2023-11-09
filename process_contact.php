<?php
include_once 'header.php';
?>


<?php
// Establish a database connection (replace with your database credentials)
$servername = "127.0.0.1:3307";
$username = "root";
$password = "";
$dbname = "uyaTRAVEL";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Check if email already exists in the database
$checkEmailQuery = "SELECT id FROM contact_form WHERE email = '$email'";
$result = $conn->query($checkEmailQuery);

if ($result->num_rows > 0) {
    // Email already exists in the database
    echo json_encode(['status' => 'error', 'message' => 'Email already exists in the database']);
} else {
    // Insert data into the database
    $sql = "INSERT INTO contact_form (name, email, phone, subject, message)
            VALUES ('$name', '$email', '$phone', '$subject', '$message')";

    if ($conn->query($sql) === TRUE) {
        // Close the database connection
        $conn->close();

        // Send a success response as JSON
        echo json_encode(['status' => 'success']);
    } else {
        // Send an error response as JSON
        echo json_encode(['status' => 'error', 'message' => 'Error: ' . $sql . '<br>' . $conn->error]);
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<div class="status-container">
        <div id="status-message" class="status-message"></div>
        <a href="indexsite.php" class="back-button">Back to Home</a>
    </div>
</body>

<?php
include_once 'includes/footer.php'
?>
</html>
