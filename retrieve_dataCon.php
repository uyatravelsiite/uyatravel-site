<?php
$databaseURL = "https://uya-travel-default-rtdb.firebaseio.com/";

// Include the class definition and create an instance of the firebaseRDB class
require 'includes/firebaseRDB.php';
$firebase = new firebaseRDB($databaseURL);

// Specify the database path where the data is located
$dbPath = "contactSettings";

// Use the retrieve method to fetch the data
$data = $firebase->retrieve($dbPath);

// Process and use the retrieved data
if ($data === false) {
    // Handle the case where the request failed
    echo "Error: Failed to retrieve data from Firebase.";
} else {
    $dataArray = json_decode($data, true);

    // Retrieve and display specific fields from "contactSettings"
    $address = isset($dataArray['address']) ? $dataArray['address'] : "Data not available.";
    $iframeSrc = isset($dataArray['iframeSrc']) ? $dataArray['iframeSrc'] : "Data not available.";
    $pn1 = isset($dataArray['phoneNumbers']['pn1']) ? $dataArray['phoneNumbers']['pn1'] : "Data not available.";
    $pn2 = isset($dataArray['phoneNumbers']['pn2']) ? $dataArray['phoneNumbers']['pn2'] : "Data not available.";
    $fb = isset($dataArray['socialLinks']['fb']) ? $dataArray['socialLinks']['fb'] : "Data not available.";
    $insta = isset($dataArray['socialLinks']['insta']) ? $dataArray['socialLinks']['insta'] : "Data not available.";
    $tw = isset($dataArray['socialLinks']['tw']) ? $dataArray['socialLinks']['tw'] : "Data not available.";

    // Display the retrieved data on your website

    
}
?>
