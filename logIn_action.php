<?php
include("includes/config.php");
include("includes/firebaseRDB.php");

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "" || $password == "") {
    echo "<script>alert('Username and password are required');</script>";
    echo "<script>window.location.href = 'login.php';</script>"; // Replace 'login.php' with the actual login page URL
} else {
    $rdb = new firebaseRDB($databaseURL);

    // Retrieve user data based on the provided username
    $retrieve = $rdb->retrieve("/userSignUp", "username", "EQUAL", $username);
    $data = json_decode($retrieve, true);

    $userFound = false;
    $userKey = null;

    // Iterate through the retrieved data to find a matching username
    foreach ($data as $key => $userData) {
        if ($userData['username'] === $username) {
            $userKey = $key;
            $userFound = true;
            break;
        }
    }

    if ($userFound) {
        // User with the provided username exists in the database
        $userPassword = $data[$userKey]['password'];

        if ($password == $userPassword) {
            // Passwords match, the user is authenticated
            $_SESSION['userSignUp'] = array(
                "username" => $username,
                "password" => $userPassword
            ); // Store user data in session
            header("location: LoggedHeader.php"); // Redirect to the welcome page
            exit; // Terminate the script after the redirect
        } else {
            echo "<script>alert('Incorrect password'); </script>";
            echo "<script>window.location.href = 'login.php';</script>"; // Redirect to the login page
        }
    } else {
        echo "<script>alert('Username not found');</script>";
        echo "<script>window.location.href = 'login.php';</script>"; // Redirect to the login page
    }
}
