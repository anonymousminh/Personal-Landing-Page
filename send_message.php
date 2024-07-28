<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Validate form data
  if (empty($name) || empty($email) || empty($message)) {
    echo 'Error: Please fill in all fields.';
    exit;
  }

  // Send email or store message in database
  $to = 'anhminh7802@gmail.com';
  $subject = 'Contact Form Submission';
  $body = "Name: $name\nEmail: $email\nMessage: $message";
  mail($to, $subject, $body);

  echo 'Thank you for your message!';
?>