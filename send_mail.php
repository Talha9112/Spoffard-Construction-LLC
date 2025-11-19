<?php

// 1. Capture form data
$first = $_POST['firstName'];
$last = $_POST['lastName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$type = $_POST['projectType'];
$message = $_POST['message'];

// 2. Your target email
$to = "talhakhattak.1019@gmail.com";

// 3. Email subject and body
$subject = "New Quote Request from $first $last";

$body = "
Name: $first $last
Email: $email
Phone: $phone
Project Type: $type

Message:
$message
";

// 4. Header (IMPORTANT: replace yourdomain.com with your real domain)
$headers = "From: no-reply@yourdomain.com\r\n";
$headers .= "Reply-To: $email\r\n";

// 5. Send email
if (mail($to, $subject, $body, $headers)) {
    echo "success";
} else {
    echo "error";
}

?>
