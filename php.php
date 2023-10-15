<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $to = "your-josephderricktechie7@gmail.com"; // Replace with your email address

    $subject = "Contact Form Submission from $name";
    $headers = "From: $email";

    $messageBody = "Name: $name\n";
    $messageBody .= "Email: $email\n";
    $messageBody .= "Message:\n$message";

    if (mail($to, $subject, $messageBody, $headers)) {
        echo "Thank you! Your message has been sent.";
    } else {
        echo "Oops! Something went wrong and we couldn't send your message.";
    }
} else {
    echo "Access to this script is not allowed.";
}
?>