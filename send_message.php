<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Send the message to your email
    $to = "your_email@example.com";
    $subject = "Message from your website";
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    mail($to, $subject, $body);

    // Display a success message
    echo "Thank you for your message!";
}
?>