<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "fgrewe@fieldmuseum.org";
    $subject = "New message from $name";
    $body = "From: $name\nEmail: $email\nMessage:\n$message";

    if (mail($to, $subject, $body)) {
        echo "<p>Thank you for your message, $name. We'll get back to you as soon as possible.</p>";
    } else {
        echo "<p>Sorry, there was a problem sending your message. Please try again later.</p>";
    }
}

?>