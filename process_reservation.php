<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include_once 'header.php';
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <style>
        /* CSS for the provided code */

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .center {
            text-align: center;
        }

        .enquiry-text {
            font-size: 24px;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .download-link button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            font-size: 18px;
            cursor: pointer;
            margin: 10px;
        }

        .download-link button:hover {
            background-color: #45a049;
        }

        .cancel-button button {
            padding: 10px 20px;
            background-color: #ff7f50;
            color: white;
            border: none;
            font-size: 18px;
            cursor: pointer;
            margin: 10px;
        }

        .cancel-button button:hover {
            background-color: #ff6347;
        }

        .res {
            text-align: center;
            text-decoration: none;
        }
    </style>
    <link rel="stylesheet" href="process_reservation.css">
    <title>uyatravel</title>
</head>
<body>

    <?php
    include_once 'header.php';
    ?>

    <div class="container">
    <?php
include("includes/config.php");
include("includes/firebaseRDB.php");

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$number = $_POST['number'];
$trip = $_POST['trip'];
$children = $_POST['children'];
$adult = $_POST['adult'];

$rdb = new firebaseRDB($databaseURL);
$retrieve = $rdb->retrieve("/enquiryForm", "email", "EQUAL", $email);
$data = json_decode($retrieve, true);

if (count($data) > 0) {
    echo "<div class='email-exsits'><center>📩Email already exists📩</center></div>";
} else {
    $insert = $rdb->insert("/enquiryForm", [
        "first_name" => $first_name,
        "last_name" => $last_name,
        "email" => $email,
        "number" => $number,
        "trip" => $trip,
        "children" => $children,
        "adult" => $adult
    ]);
}
?>
    </div><br><br>
   <center><img src="images/handshake.gif" alt="" width= "160px" height="150px" ></center>
    <center>
        <h2 class="enquiry-text">Thank You! You will be Emailed regarding your trip.</h2>
        <center>
         <div class="thank-you-message"></div>
        </center>
    </center>
        <br>
    <center>
    <h3>General Anouncement Newsletter and save 40% on future deals: </h3>
                <p>Cruises provide a unique opportunity to unwind, explore new places, and create lasting memories while being pampered with top-notch service in a self-contained, floating paradise.
                    <br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    <br>
                    <h1></h1>
                </p>
                <form method="post" action="booking_process.php">
                    <input type="hidden" name="bella_cruise_name" value="Bella Cruise 1">
                    <input type="hidden" name="price" value="20000">
                    <label for="client">EMAIL:</label>
                    <input type="email" name="clientEmail" required>
                    <button type="submit" class="BookingBTN">Sign Up</button>
                </form>
    </center>
                
               
          

    <script>
        // JavaScript to update the thank-you message every 3 seconds
        const languages = ["Thank you", "Gracias", "Merci", "Danke"];
        let currentIndex = 0;

        function updateThankYouMessage() {
            const thankYouMessage = document.querySelector('.thank-you-message');
            thankYouMessage.innerText = languages[currentIndex];
            currentIndex = (currentIndex + 1) % languages.length;
        }

        // Update the message initially
        updateThankYouMessage();

        // Update the message every 3 seconds
        setInterval(updateThankYouMessage, 3000);
    </script>

    <?php
    include_once 'includes/footer.php';
    ?>

</body>
</html>
