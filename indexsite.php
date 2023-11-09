<?php
require 'header.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>uyaTRAVEL-HOME</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="style.css">
  <script src = "app.js"></script>


  
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Sriracha&display=swap');

  body {
  background-image: url(images/tobias-reich-1GgWbP74phY-unsplash.jpg);
  background-repeat: no-repeat;
  background-size:auto 55%;
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
    /* CSS for header */
    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #f5f5f5;
    }

    .header .logo {
      font-size: 25px;
      font-family: 'Sriracha', cursive;
      color: #000;
      text-decoration: none;
      margin-left: 30px;
    }

  

  .form{
    padding: 45px;
    align-items: center;
  }
 

    /* CSS for main element */
    .intro {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      width: 100%;
      height: 520px;
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
  }

    .intro h1 {
      font-family: sans-serif;
      font-size: 60px;
      color: black;
      font-weight: bold;
      text-transform: uppercase;
      margin: 0;
    }

    .intro h2 {
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif ;
      font-size: 40px;
      color: grey;
      font-weight: bold;
      text-transform: uppercase;
      margin: 0;
    }
    


    .intro p {
      font-size: 17px;
      color: #333;
      text-transform: uppercase;
      margin: 20px 0;
    }

    .intro button {
      background-color: #333;
      color: #FFFFFF;
      padding: 10px 25px;
      border: none;
      border-radius: 5px;
      font-size: 20px;
      font-weight: bold;
      cursor: pointer;
      
    }

@media (max-width: 768px) {
  .header .logo {
    font-size: 20px;
    margin-left: 10px;
  }

  .intro {
    height: auto;
    padding: 20px;
  }

  .intro h1 {
    font-size: 40px;
  }

  .intro h2 {
    font-size: 30px;
  }

  .intro p {
    font-size: 15px;
  }

  .intro button {
    font-size: 16px;
    padding: 8px 20px;
  }

  .login-page {
    display: block;
    margin-right: 0;
    padding-left: 0;
  }

  .form {
    padding: 20px;
  }

  .login-header {
    text-align: center;
  }
}   

@media (max-width: 768px) {
  body {
    background-size: auto 100%;
  }

  .header {
    flex-direction: column;
    align-items: center;
    padding: 20px;
  }

  .logo {
    margin-bottom: 10px;
  }

  .nav-links ul {
    flex-direction: column;
    align-items: center;
  }

  .burger-menu {
    display: none;
  }
}
    

    
  </style>
</head>

<body>

  <center><main>
    <div class="intro">
      <h2>Welcome to uyaTRAVEL </h2>
      <p>Make sure to check our amazing DEALS</p>
      <a href="deals.php"><button>ENQUIRE NOW</button></a>
 

    </div>
   </main>
  </center><br><br><br><br><br>
  

  <style>
  .login-page {
    display: inline-block;
    margin-right: 20px; /* Adjust the spacing as needed */
    vertical-align: top; /* Align elements at the top */
    padding-left: 43.5px;
    
  }
  .login {
  border: 1px solid #333;
  border-radius: 5px;
  padding: 20px;
  transition: transform 0.3s ease;
}

.login:hover {
  transform: scale(1.05);
}

.form{
  border-radius: 5px;
  padding: 30px;
  transition: transform 0.3s ease;
}

#timer {
  font-size: 24px;
  font-weight: bold;
  text-align: center;
  margin-top: 20px;
}
#timer {
  font-size: 24px;
  font-weight: bold;
  text-align: center;
  display: block;
}


</style>

<div class="login-page">
  <div class="form">
  <h1>Enquire with us</h1> 
    <div class="login">
      <div class="login-header"> 
        <img src="images/IMG-20230825-WA0001.jpg" alt="" width="250px" height="220px"><br>
        <h1>DESCRIPTION</h1>
         <p>A travel cruise is a luxurious and adventurous vacation experience where passengers board a specially designed ship to explore various destinations while enjoying the comforts and amenities on board. These floating resorts offer a wide range of activities, from fine dining and entertainment to relaxation and water-based adventures. Travelers can choose from a variety of itineraries, including coastal cruises, river cruises, and ocean voyages, allowing them to explore multiple destinations in a single journey. </p><br>
        <a href="description 2.php"><button>More Details>></button></a>
      </div>
      <br>
    </div>
  </div>
</div>
  
<div class="login-page">
  <div class="form">
  <h1>Enquire with us</h1> 
    <div class="login">
      <div class="login-header">  
        <img src="images/IMG-20230825-WA0002.jpg" alt="" width="250px" height="220px"><br>
        <h1>DESCRIPTION</h1>
         <p>A travel cruise is a luxurious and adventurous vacation experience where passengers board a specially designed ship to explore various destinations while enjoying the comforts and amenities on board. These floating resorts offer a wide range of activities, from fine dining and entertainment to relaxation and water-based adventures. Travelers can choose from a variety of itineraries, including coastal cruises, river cruises, and ocean voyages, allowing them to explore multiple destinations in a single journey. </p><br>
        <a href="description 3.php"><button>More Details>></button></a>
      </div>
    </div>
  </div>
</div>

<div class="login-page">
  <div class="form">
  <h1>Enquire with us</h1> 
    <div class="login">
      <img src="images/IMG-20230825-WA0003.jpg" alt="" width="250px" height="220px"><br>
      <h1>DESCRIPTION:</h1>
      <p>A travel cruise is a luxurious and adventurous vacation experience where passengers board a specially designed ship to explore various destinations while enjoying the comforts and amenities on board. These floating resorts offer a wide range of activities, from fine dining and entertainment to relaxation and water-based adventures. Travelers can choose from a variety of itineraries, including coastal cruises, river cruises, and ocean voyages, allowing them to explore multiple destinations in a single journey. </p><br>
      <a href="description 4.php"><button>More Details>></button></a>
    </div>
  </div>
</div>

  




<body>
  
 
<div id="timer"></div>

<div class="intro">
  <h2 class="typewriter">Newsletter</h2>
  
</div>
<hr>


<style>
  .login-page2 {
    display: inline-block;
    margin-right: 20px; /* Adjust the spacing as needed */
    vertical-align: top;
    /* Align elements at the top */
  }
    .index-book-banners .login-page2 {
  padding-bottom: 100px;
}

</style>


<div class="index-book-banners">
    <div class="login-page2">
        <div class="form">
            <div class="login">
                <div class="login-header">
                    <h3>BELLA CRUISE 1</h3>
                    <img src="images/envelope.svg" alt="">
                    <p>sign up for our newsletter</p>
                </div>
                <img src="images/IMG-20230825-WA0001.jpg" class="img-deals">
                <br>
                <br>
                <h3>DESCRIPTION: </h3>
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
            </div>
        </div>
    </div>

    <!-- Repeat the above form for Bella Cruise2 and Bella Cruise3 with appropriate values -->
    <div class="login-page2">
        <div class="form">
            <div class="login">
                <div class="login-header">
                    <h3>BELLA CRUISE 2</h3>
                    <img src="images/envelope.svg" alt="">
                    <p>sign up for our newsletter</p>
                </div>
                <img src="images/IMG-20230825-WA0002.jpg" class="img-deals">
                <br>
                <br>
                <h3>DESCRIPTION: </h3>
                <p>Cruises provide a unique opportunity to unwind, explore new places, and create lasting memories while being pampered with top-notch service in a self-contained, floating paradise.
                    <br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    <br>
                    <h1></h1>
                </p>
                <form method="post" action="booking_details.php">
                    <input type="hidden" name="bella_cruise_name" value="Bella Cruise 2">
                    <input type="hidden" name="price" value="10000">
                    <label for="clientEmail">EMAIL:</label>
                    <input type="email" name="clientEmail" required>
                    <button type="submit" class="BookingBTN">Sign up</button>
                </form>
            </div>
        </div>
    </div>
    <div class="login-page2">
        <div class="form">
            <div class="login">
                <div class="login-header">
                    <h3>BELLA CRUISE 3</h3>
                    <img src="images/envelope.svg" alt="">
                    <p>sign up for our newsletter</p>
                </div>
                <img src="images/IMG-20230825-WA0003.jpg" class="img-deals">
                <br>
                <br>
                <h3>DESCRIPTION: </h3>
                <p>Cruises provide a unique opportunity to unwind, explore new places, and create lasting memories while being pampered with top-notch service in a self-contained, floating paradise.
                    <br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    <br>
                    <h1></h1>
                </p>
               <!-- index.php -->
<form method="post" action="booking_details.php">
    <input type="hidden" name="bella_cruise_name" value="Bella Cruise 1">
    <input type="hidden" name="price" value="20000">
    <label for="client">EMAIL:</label>
    <input type="email" name="clientName" required>
    <!-- Add other form fields as needed -->
    <button type="submit" class="BookingBTN">sign up</button>
</form>


            </div>
        </div>
    </div>
</div>

<script>
  // Set the date and time for the countdown
  var countdownDate = new Date("2024-02-17T23:59:59").getTime();

  // Update the countdown every second
  var countdown = setInterval(function() {
    // Get the current date and time
    var now = new Date().getTime();

    // Calculate the remaining time
    var distance = countdownDate - now;

    // Calculate the months, days, hours, minutes, and seconds
    var months = Math.floor(distance / (1000 * 60 * 60 * 24 * 30));
    var days = Math.floor((distance % (1000 * 60 * 60 * 24 * 30)) / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Display the countdown in the "timer" element
    document.getElementById("timer").innerHTML = months + " months, " + days + " days, " + hours + " hours, " + minutes + " minutes, " + seconds + " seconds";

    // If the countdown is finished, display a message
    if (distance < 0) {
      clearInterval(countdown);
      document.getElementById("timer").innerHTML = "Countdown expired";
    }
  }, 1000);
</script>
  
    
  
</div>

</body>
</body>
</body>

<footer>
     <?php
   require 'includes/footer.php';
    ?> 
</footer>

</html>