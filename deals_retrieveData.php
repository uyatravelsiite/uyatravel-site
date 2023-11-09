<?php
$databaseURL = "https://uya-travel-default-rtdb.firebaseio.com/";

// Include the class definition and create an instance of the firebaseRDB class
require 'includes/firebaseRDB.php';
$firebase = new firebaseRDB($databaseURL);

// Specify the database path where the data is located
$dbPath = "deals/BellaCruise";


// Use the retrieve method to fetch the data
$data = $firebase->retrieve($dbPath);

// Process and use the retrieved data
if ($data === false) {
    // Handle the case where the request failed
    echo "Error: Failed to retrieve data from Firebase.";
} else {
    $dataArray = json_decode($data, true);


    $LinksOfImagesArray = isset($dataArray['LinksOfImagesArray']) ? $dataArray['LinksOfImagesArray'] : "Image URL not available.";

    $deal_comment = isset($dataArray['iframeSrc']) ? $dataArray['iframeSrc'] : "Data not available.";
    $deal_description = isset($dataArray['deal_description']) ? $dataArray['deal_description'] : "Data not available.";
    $deal_name = isset($dataArray['deal_name']) ? $dataArray['deal_name'] : "Data not available.";
    $deal_price = isset($dataArray['deal_price']) ? $dataArray['deal_price'] : "Data not available.";
    $deal_tc = isset($dataArray['deal_tc']) ? $dataArray['deal_tc'] : "Data not available.";

    // Display the retrieved data on your website

    
}
?>
