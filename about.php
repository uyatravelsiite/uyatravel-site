<?php
include 'retrieve_data.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>uyaTRAVEL-about</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://www.gstatic.com/firebasejs/10.5.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/10.5.0/firebase-database.js"></script>
    <script src = "app.js"></script>

</head>

<style>
    body {
        font-family: Arial, sans-serif;
    }

    h1, h2 {
        text-align: center;
    }

    .team-member {
        display: inline-block;
        width: 250px;
        padding: 20px;
        margin: 10px;
        background-color: #f9f9f9;
        border: 1px solid #ccc;
        border-radius: 10px;
        text-align: center;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .team-member img {
        width: 150px;
        border-radius: 50%;
        margin-bottom: 10px;
    }

    .team-member p {
        margin-bottom: 0;
    }

    .team-member:hover {
        transform: scale(1.05);
        transition: transform 0.3s ease-in-out;
    }

    .blog-section {
        padding: 20px;
        margin: 20px 0;
        background-color: #f0f0f0;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .blog-section h3 {
        font-size: 20px;
        margin-bottom: 10px;
    }

    .blog-section p {
        margin-bottom: 10px;
    }

    .video-section {
        text-align: center;
        margin-top: 30px;
    }

    .video-section iframe {
        width: 100%;
        max-width: 800px;
        height: 450px;
        border: none;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
</style>
<div class="loader"></div>
<body>

<?php include 'header.php'; ?>

    <br>
    <center><H1>About us</H1></center>
    <br>
    <center><img src="images/sailboat.png" alt="" width="130px" height="150px" ></center>
    <center>    <div>
    <p><?php echo $siteTitle; ?></p>
        <p><?php echo $siteAbout; ?></p>
    </div>  </center>

    <br><hr>

    <br>
    <h2>Our Team</h2>
    
    <center> 
        <div class="team-member">
            <img src="images/OIP.jpeg" alt="John Doe">
            <p><strong>John Doe</strong></p>
            <p>John is our CEO and founder. He has a passion for innovation and leading our team to success.</p>
        </div>

        <div class="team-member">
            <img src="images/OIP (1).jpeg" alt="Jane Smith">
            <p><strong>Jane Smith</strong></p>
            <p>Jane is our lead developer. She excels at creating cutting-edge solutions for our customers.</p>
        </div>

        <div class="team-member">
            <img src="images/R.jpeg" alt="Jane Smith">
            <p><strong>Jane Smith</strong></p>
            <p>Jane is our lead developer. She excels at creating cutting-edge solutions for our customers.</p>
        </div>
    </center>

    <center>
        <div class="blog-section">
            <h2>Exploring the Hidden Gems of Bali: A Journey of Serenity</h2>
            <h3>Published Date: October 15, 2023</h3>
            <p>Bali, Indonesia, is often associated with its bustling beaches and vibrant nightlife...</p>
            <a href="#">Read more</a>
        </div>
    </center>

    <div class="video-section">
        <h3>Today's Featured Video:</h3><br>
        <!-- Replace "VIDEO_ID_HERE" with your actual YouTube video ID -->
        <iframe width="560" height="315" src="https://www.youtube.com/embed/VIDEO_ID_HERE" frameborder="0" allowfullscreen></iframe>
            <br>
    </div>

    <div class="container">
        <center>
            <p>E -Travels ITC brand has over 21 years foot print in South Africa and has a wealth of tried and tested Travel experiences and ITC Support.</p>
        </center>
    </div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
const loader = document.querySelector(".loader");
setTimeout(function() {
loader.style.display = "none";
document.body.classList.remove("loading");
}, 2000);
});
</script>

<footer>
    <?php
    require 'includes/footer.php';
    ?> 

</footer>
</body>


</html>
