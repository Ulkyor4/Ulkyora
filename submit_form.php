<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    $to = 'your.email@example.com';
    $subject = 'New Message from Portfolio Website';
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";
    
    if (mail($to, $subject, $body, $headers)) {
        echo 'Thank you for your message!';
    } else {
        echo 'Sorry, there was an error sending your message. Please try again later.';
    }
}
?>
