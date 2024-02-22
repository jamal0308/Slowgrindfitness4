<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Email setup
    $to = "slowgrindfitness@yahoo.com";
    $subject = "Message from SlowGRINDFitness Contact Form";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    // Send email
    if (mail($to, $subject, $body)) {
        echo "<p>Message sent successfully. Thank you for contacting me!</p>";
    } else {
        echo "<p>Failed to send message. Please try again later.</p>";
    }
}
?>
