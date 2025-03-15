<?php
// Allow access from any website (fixes GitHub Pages issues)
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

if ($_SERVER["REQUEST_METHOD"] === "OPTIONS") {
    http_response_code(200);
    exit();
}

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(405);
    die("Error: Method Not Allowed. Use POST.");
}

// Get form data
$name = isset($_POST["name"]) ? trim($_POST["name"]) : '';
$email = isset($_POST["email"]) ? trim($_POST["email"]) : '';

if (empty($name) || empty($email)) {
    die("Error: Name and Email are required.");
}

// Save to file
$file = "data.txt"; 
$data = "Name: $name, Email: $email\n";

if (file_put_contents($file, $data, FILE_APPEND)) {
    echo "Form submitted successfully!";
} else {
    echo "Error saving data.";
}
?>
