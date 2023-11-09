<?php 
include("includes/config.php");
include("includes/firebaseRDB.php");

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];


if ($name == ""){
    echo "Name is required";
} else if($email == "") {
    echo "Email is required";
}  else if($phone == "") {
    echo "Phone is required";
} else if($subject == "") {
    echo "Subject is required";
} else if($message == "") {
    echo "message is required";
}




else{
   $rdb = new firebaseRDB($databaseURL);
   $retrieve = $rdb->retrieve("/contact", "phone", "EQUAL", $phone); // Fix the variable name here
   $data = json_decode($retrieve, true); // Using true to get an associative array
}

if(count($data) > 0){
    echo '<script>
    alert("Email Already Exists. Please Try A New One.");
  </script>';
   }else{
    $insert = $rdb->insert("/contact", [
        "name" => $name,
        "email" => $email,
        "phone" => $phone,
        "subject" => $subject,
        "message" => $message
        
    ]);
    $result = json_decode($insert, 1);
    if(isset($result['name'])){
      
        echo  '<script>alert("Information Captured.");</script>';

    }else{
        echo '<script>alert("Information Error.");</script>';
    }
}
header('Location: contact.php'); // Redirect to contact.php
exit(); // Ensure no further code execution after redirection
 
