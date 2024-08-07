<?php
error_log("Form submission initiated.");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    error_log("POST request detected.");
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = trim($_POST["message"]);

    if (empty($name) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        http_response_code(400);
        echo "Please complete the form and try again.";
        exit;
    }

    $recipient = "anhminh7802@gmail.com";
    $subject = "New contact from $name";
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";
    $email_headers = "From: $name <$email>";

    if (mail($recipient, $subject, $email_content, $email_headers)) {
        error_log("Email sent successfully.");
        http_response_code(200);
        echo "Thank you! Your message has been sent.";
    } else {
        error_log("Failed to send email.");
        http_response_code(500);
        echo "Oops! Something went wrong and we couldn't send your message.";
    }
} else {
    error_log("Invalid request method.");
    http_response_code(403);
    echo "There was a problem with your submission, please try again.";
}
?>
