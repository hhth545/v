<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = isset($_POST["name"]) ? $_POST["name"] : '';
    $email = isset($_POST["email"]) ? $_POST["email"] : '';

    if (empty($name) || empty($email)) {
        die("Error: Name and Email are required.");
    }

    $data = "Name: $name, Email: $email\n";

    if (file_put_contents("data.txt", $data, FILE_APPEND)) {
        echo "Form submitted successfully!";
    } else {
        echo "Error saving data.";
    }
} else {
    echo "Invalid request method.";
}
?>
