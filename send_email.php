<?php
// Check if the form was submitted using the POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // 1. COLLECT AND SANITIZE DATA
    $name    = filter_var(trim($_POST["name"]), FILTER_SANITIZE_STRING);
    $phone   = filter_var(trim($_POST["phone"]), FILTER_SANITIZE_STRING);
    $message = filter_var(trim($_POST["message"]), FILTER_SANITIZE_STRING);
    
    // Check for empty fields after sanitization
    if (empty($name) || empty($phone) || empty($message)) {
        // Handle error: one or more fields are empty
        http_response_code(400);
        echo "Please complete all fields and try again.";
        exit;
    }

    // 2. SET RECIPIENT AND SUBJECT
    $recipient = "jenishsonani@gmail.com"; // <-- ***CHANGE THIS TO YOUR EMAIL***
    $subject   = "New Contact Form Submission from " . $name;

    // 3. BUILD THE EMAIL CONTENT
    $email_content = "Name: " . $name . "\n";
    $email_content .= "Phone: " . $phone . "\n\n";
    $email_content .= "Message:\n" . $message . "\n";

    // 4. SET EMAIL HEADERS (IMPORTANT for reply-to)
    $email_headers = "From: " . $name . " <no-reply@lighthouse.com>"; // Use a domain email if possible

    // 5. SEND THE EMAIL
    if (mail($recipient, $subject, $email_content, $email_headers)) {
        // Success: Redirect the user to a 'thank you' page or back to the form
        header("Location: default.php?success=1");
    } else {
        // Failure
        http_response_code(500);
        echo "Oops! Something went wrong and we couldn't send your message.";
    }

} else {
    // Not a POST request, set a 403 (Forbidden) response code
    http_response_code(403);
    echo "There was a problem with your submission, please try again.";
}
?>