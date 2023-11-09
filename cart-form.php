<?php 
include_once 'header.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="process_reservation.css">
    <title>Enquiry Form</title
</head>
<body>
    <br>
<h1>Enquiry Form</h1>
<center><img src="images/plane-ticket.png" alt="" width="130px" height="150px" ></center>
<form action="process_reservation.php" method="post">
    <label for="first_name">First Name:</label>
    <input type="text" id="first_name" name="first_name" required><br>

    <label for="last_name">Last Name:</label>
    <input type="text" id="last_name" name="last_name" required><br>

    <label for="email">Email:</label>
<input type="text" id="email" name="email" required pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}" title="Enter a valid email address"><br>


    <label for="number">Phone Number:</label>
    <input type="text" id="number" name="number" required pattern="[0-9]{10}" title="Phone Number should be 10 digits"><br>

    <label for="trip">Trip:</label>
    <select id="trip" name="trip" required>
        <option value="Balcony Cabin-Bella Cruise[R 7550]">Balcony Cabin-Bella Cruise[R 7550]</option>
        <option value="Somizi - Bella Cruise">Somizi - Bella Cruise</option>
        <option value="Makhadzi event - Bella Cruise">Makhadzi event - Bella Cruise</option>
        <option value="Balcony Cabin-Bella Cruise[R 4525]">Balcony Cabin-Bella Cruise[R 4525]</option>
    </select><br>

    <label for="children">Number of Children:</label>
    <input type="number" id="children" name="children" required min="1"><br>

    <label for="adult">Number of Adults:</label>
    <input type="number" id="adult" name="adult" required min="1"><br>
    
    <button type="submit">Submit</button>
    <button type="submit">cancel</button>
</form>

    <br><br><br><br><br><br><br>
</body>

<?php

include_once 'includes/footer.php'

?>
</html>
