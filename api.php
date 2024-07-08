<?php
// Get visitor name from query parameters
$visitor_name = $_GET['visitor_name'];

// client's IP address
$client_ip = $_SERVER['REMOTE_ADDR'];

// Hardcoded location as "New York"
$location = "New York";

// Compose the response JSON object
$response = array(
    "client_ip" => $client_ip,
    "location" => $location,
    "greeting" => "Hello, $visitor_name! The temperature is 11 degrees Celsius in $location."
);

// Check if visitor_name parameter is included in GET request
if(isset($_GET['visitor_name'])){
     // Fetch visitor's name from GET request
     $visitor_name = $_GET['visitor_name'];
} else {
     // Handle the case when visitor_name parameter is not included in the GET request
     $visitor_name = "";
}

// Convert the response to JSON format
header('Content-Type: application/json');
echo json_encode($response);
