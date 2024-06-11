<?php
// Set the appropriate headers for a JSON response and CORS
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *"); // Allow requests from any origin
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS"); // Allow specified HTTP methods
header("Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization"); // Allow specified headers
$data = [
    "message" => "Hello from PHP!",
    "timestamp" => time(),
    "para" => "<p style='color: red; font-size: 1.2rem'>This is a paragraph from php API</p>"
];

echo json_encode($data);
