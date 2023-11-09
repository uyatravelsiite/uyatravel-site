<?php
session_start();

if (isset($_POST['submit'])) {
    
    // Set the login status in the session
    $_SESSION['isLoggedIn'] = true;

    // Redirect to the index page
    header('Location: index.php');
    exit();
}
?>

<?php
include_once 'header.php'
?>
<br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sign In</title>
</head>
<div class="loader"></div>
<body>
    <div class="login-page">
        <div class="form">
            <div class="login">
                <div class="login-header">
                    <h3>Sign In</h3>
                    <p>Please enter your credentials to log in.</p>
                    <img src="images/user.png" alt="" height="50px" width="50px" >
                </div>
            </div>
<br>
            <div class="login-form">
                <form action="logIn_action.php" method="post">
                    <input type="username" name="username" placeholder="username"  required title="Required username">
                    <input type="password" name="password" placeholder="Password" required title="Required password">
                    <button type="submit" name="submit">Log In</button>
                    
                </form><br>
                <a href="signUp.php"><button type="submit" name="submit">Sign Up</button></a>
                 
            </div>
        </div>
    </div>
</body>
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
include_once 'includes/footer.php'
?>
</footer>
</html>

