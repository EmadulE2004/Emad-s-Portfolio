<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $to = "emadnoor898@gmail.com";
    $subject = "New Portfolio Contact Message";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";
    
    if(mail($to, $subject, $body, $headers)) {
        header("Location: portfolio.html?status=success");
    } else {
        header("Location: portfolio.html?status=error");
    }
}
?>
