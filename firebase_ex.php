<?php
// Your Firebase Realtime Database URL
$firebaseDatabaseURL = 'https://uya-travel-default-rtdb.firebaseio.com';

// Your Firebase Web API Key
$apiKey = 'AIzaSyBiya-MbWDnCcsM-CL36LvY7oduMMxVRsQ';

// The specific node or endpoint you want to access in the database
$endpoint = '/deals/BellaCruise.json';

// Build the URL for the HTTP request
$url = $firebaseDatabaseURL . $endpoint . '?auth=' . $apiKey;

// Initialize cURL session
$ch = curl_init($url);

// Set cURL options
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute cURL session and get the response
$response = curl_exec($ch);

// Close cURL session
curl_close($ch);

// Parse the JSON response
$data = json_decode($response, true);

// Now, you can work with $data as needed
?>
