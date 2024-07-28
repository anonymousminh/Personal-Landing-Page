<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $to = 'anhminh7802@gmail.com';
  $subject = 'Message from Website';
  $body = "Name: $name\nEmail: $email\nMessage: $message";

  mail($to, $subject, $body);
?>