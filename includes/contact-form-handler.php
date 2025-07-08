<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input
    $name = filter_var(trim($_POST["name"]), FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars(trim($_POST["message"])); // Prevent XSS

    // Validate required fields
    if (empty($name)) {
        http_response_code(400);
        echo "Name is required.";
        exit;
    }
    if (empty($email)) {
        http_response_code(400);
        echo "Email is required.";
        exit;
    }
    if (empty($message)) {
        http_response_code(400);
        echo "Message is required.";
        exit;
    }

    // Validate email address
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        http_response_code(400);
        echo "Invalid email address.";
        exit;
    }

    // Prevent header injection in name/email
    if (preg_match("/[\r\n]/", $name) || preg_match("/[\r\n]/", $email)) {
        http_response_code(400);
        echo "Invalid input detected.";
        exit;
    }

    // Prepare email
    $to = "cherryontopdotio@gmail.com";
    $subject = "New message from cherryontop.io contact form";

    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";

    // Set headers - UTF-8 encoding and reply-to
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/plain; charset=UTF-8\r\n";
    $headers .= "From: =?UTF-8?B?" . base64_encode($name) . "?= <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send email
    if (mail($to, $subject, $email_content, $headers)) {
        http_response_code(200);
        echo "Thank you! Your message has been sent.";
    } else {
        http_response_code(500);
        echo "Oops! Something went wrong, please try again later.";
    }
} else {
    // Not a POST request
    http_response_code(403);
    echo "There was a problem with your submission, please try again.";
}
