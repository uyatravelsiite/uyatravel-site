<?php
include_once 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>uyatravel</title>
</head>
<body>
    
</body>
</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the inquiry was successful
    if ($_GET["success"] == "true") {
        $message = "Your inquiry was successful!";
    } else if ($_GET["success"] == "false") {
        $message = "Sorry, there was an error with your inquiry.";
    }
} else {
    // If the page was accessed directly without a POST request, display an error message
    $message = "You have Enquired successfully";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enquiry Outcome</title>
</head>
<body>
    <div style="text-align: center;">
        <h1><?php echo $message; ?></h1>
        <a href="indexsite.php">Back to Home</a>
    </div>
</body>
<?php
include_once 'includes/footer.php';
?>

</html>
