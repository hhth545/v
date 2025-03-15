<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $data = "Name: $name, Email: $email\n";

    file_put_contents("data.txt", $data, FILE_APPEND);
    echo "Form submitted successfully!";
}
?>
