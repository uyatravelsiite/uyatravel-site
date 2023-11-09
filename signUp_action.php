<?php 
include("includes/config.php");
include("includes/firebaseRDB.php");

$name = $_POST['name'];
$email = $_POST['email'];
$username = $_POST['uid'];
$password = $_POST['pwd'];
$passwordRepeat = $_POST['pwdrepeat'];

if ($name == "") {
    echo "Name is required";
} else if ($email == "") {
    echo "Email is required";
} else if ($password == "") {
    echo "Password is required";
} else if ($password !== $passwordRepeat) {
    echo "Passwords do not match";
} else {
    $rdb = new firebaseRDB($databaseURL);
    
    // Check if the email is already in use
    $retrieve = $rdb->retrieve("/userSignUp", "email", "EQUAL", $email);
    $data = json_decode($retrieve, true);
    
    if (count($data) > 0) {
        echo "Email already used";
    } else {
        // Insert the user data into the database
        $insert = $rdb->insert("/userSignUp", [
            "name" => $name,
            "email" => $email,
            "username" => $username,
            "password" => $password,
            // You may want to store other user data here
        ]);
        $result = json_decode($insert, true);
        
        if (isset($result['name'])) {
            echo "Signup success, please login";
        } else {
            echo "Signup failed";
        }
    }
    header("location: login.php");
   }
?>