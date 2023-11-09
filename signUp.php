<?php
include_once 'header.php';
?>
<br>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Sign Up</title>
</head>
<div class="loader"></div>
<body>
    <div class="login-page">
        <div class="form">
            <div class="login">
                <div class="login-header">
                    <h3>Sign Up</h3>
                    <p>Please enter your credentials to sign up.</p>
                    <img src="images/add-friend.png" alt="" height="50px" width="50px" >
                </div>
            </div>
<br>
            <div class="login-form">
            <form method="post" action="signUp_action.php" onsubmit="return validateForm();">
    <input type="text" name="name" placeholder="Full Name" required>
    <input type="email" name="email" placeholder="Email" required pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}" title="Enter a valid email address">
    <input type="text" name="uid" placeholder="Username" required>
    <input type="password" name="pwd" id="pwd" placeholder="Password" required>
    <input type="password" name="pwdrepeat" id="pwdrepeat" placeholder="Repeat Password" required>
    <span id="passwordError" class="error"></span>
    <button type="submit" name="submit">Sign Up</button><br><br>
    <button type="submit" name="submit"> <a href="LogIn.php" style="text-decoration: none; color: white; " >Log in</a></button>
</form>
            </div>
        </div>
    </div>

    <script>
function validateForm() {
    var password = document.getElementById("pwd").value;
    var passwordRepeat = document.getElementById("pwdrepeat").value;
    var passwordError = document.getElementById("passwordError");

    if (password !== passwordRepeat) {
        passwordError.textContent = "Passwords do not match";
        return false;
    } else {
        passwordError.textContent = "";
        return true;
    }
}

document.addEventListener("DOMContentLoaded", function() {
const loader = document.querySelector(".loader");
setTimeout(function() {
loader.style.display = "none";
document.body.classList.remove("loading");
}, 2000);
});
</script>
</body>
<footer>
<br><br>
   
<?php
include_once 'includes/footer.php'
?>    
</footer>

</html>
