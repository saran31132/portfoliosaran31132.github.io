<?php
$name = $_OST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'saran31132.github.io';

$email_subject ='New Form Submission';

$email_body="User Name: $name.\n".
             "User Email: $visitor_email.\n".
             "Subject: $subject.\n".
             "User Message: $message.\n";

$to ='sarandream143@gmail.com';

$headers = "From: $email_form \r\n";

$headers="Reply To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: index.html");








?>