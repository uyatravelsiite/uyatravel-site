<!DOCTYPE html>
<html>
<head>
  <?php
  include_once 'header.php';
  ?>
  <title>uyaTRAVEL</title>
  <link href="https://fonts.googleapis.com/css?family=Raleway:600,900" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <style>
    /* Add any additional CSS styles you need */
    body {
      font-family: 'Raleway', sans-serif;
    }

    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .card-container {
      display: flex;
      justify-content: space-between;
      width: 80%;
      overflow-x: fixed;
    }

    .card {
      flex: 0 0 auto;
      width: 290px; /* Adjust the width as needed */
      height: 380px; /* Adjust the height as needed */
      margin: 0 10px;
      transition: transform 0.3s;
    }

    .card:hover {
      transform: scale(1.1);
    }

    .card img {
      max-width: 100%;
      height: auto;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
  </style>
</head>
<body>
<br><br>
  <center><h1>BALCONY CABIN - BELLA CRUISE</h1></center>
  <hr>

  <div class="container">
    <div class="card-container">
      <!-- Card 1 -->
      <div class="card">
        <img src="https://www.nzherald.co.nz/resizer/kGbSRdJvQHDJbdXKnagmnNgmQl8=/576x613/smart/filters:quality(70)/cloudfront-ap-southeast-2.images.arcpublishing.com/nzme/VVPLZQ6MONELRN3K6USWXMSKQE.jpg" alt="Description Image">
      </div>

      <!-- Card 2 (More Prominent) -->
      <div class="card">
        <img src="images/IMG-20230825-WA0003.jpg" alt="Description Image">
      </div>

      <!-- Card 3 -->
      <div class="card">
        <img src="https://www.nzherald.co.nz/resizer/kGbSRdJvQHDJbdXKnagmnNgmQl8=/576x613/smart/filters:quality(70)/cloudfront-ap-southeast-2.images.arcpublishing.com/nzme/VVPLZQ6MONELRN3K6USWXMSKQE.jpg" alt="Description Image">
      </div>
      
    </div>
  </div>
  <div class="description">
      <h2>BALCONY CABIN - BELLA CRUISE</h2>
      <p>
        Cruise Ship:<br>
        Ship Name: Aegean Voyager <br>
        Ship Type: Luxury Cruise Ship <br>
        Amenities: Spa, Pool, Fine Dining Restaurants, Theater, Casino, Gym <br>
        Price:
      </p>
      <a href="cart.php"><button class="enquire-button">Enquire Now</button></a>
    </div>

  <?php
  include_once 'includes/footer.php';
  ?>
</body>
</html>
