<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get form inputs
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  // Set up email details
  $to = 'your_email@example.com'; // Replace with your email address
  $subject = 'New Contact Form Submission: ' . $subject;
  $headers = "From: $name <$email>" . "\r\n" . "Reply-To: $email" . "\r\n" . "X-Mailer: PHP/" . phpversion();

  // Construct the email body
  $email_body = "Name: $name\n\n";
  $email_body .= "Email: $email\n\n";
  $email_body .= "Phone: $phone\n\n";
  $email_body .= "Message:\n$message\n";

  // Send the email
  $mail_sent = mail($to, $subject, $email_body, $headers);

  // Check if the email was sent successfully
  if ($mail_sent) {
    echo 'Thank you for your message. We will get back to you shortly.';
  } else {
    echo 'Sorry, an error occurred. Please try again later.';
  }
}
?>
