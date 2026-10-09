<?php
// Return JSON for the popup to work
header('Content-Type: application/json');

// Check request method
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // 1. COLLECT AND SANITIZE DATA
    $name        = filter_var(trim($_POST["name"] ?? ""), FILTER_SANITIZE_STRING);
    $phone       = filter_var(trim($_POST["phone"] ?? ""), FILTER_SANITIZE_STRING);
    $position    = filter_var(trim($_POST["position"] ?? ""), FILTER_SANITIZE_STRING);
    $requirement = filter_var(trim($_POST["requirement"] ?? ""), FILTER_SANITIZE_STRING);

    if (empty($name) || empty($phone) || empty($position)) {
        http_response_code(400); 
        echo json_encode(["status" => "error", "message" => "Please complete all required fields."]);
        exit;
    }

    // ======================================================
    // TASK A: SEND DATA TO GOOGLE SHEETS
    // ======================================================
    
    // *** PASTE YOUR GOOGLE DEPLOYMENT URL HERE ***
    $google_script_url = "https://script.google.com/macros/s/AKfycbx24dbuSVcfmwitf_tZhHfkbfvx6Fc_6eUHa2tI5zU7OtPFWXK_5SxxGpWBIXnqBRbA-w/exec";

    // Prepare data package
    $sheet_data = [
        "name" => $name,
        "phone" => $phone,
        "position" => $position,
        "requirement" => $requirement
    ];

    // Use cURL to send data silently
    $ch = curl_init($google_script_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($sheet_data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    // Execute (we don't wait/check result strictly to keep site fast, but it runs in background)
    $sheet_result = curl_exec($ch);
    curl_close($ch);

    // ======================================================
    // TASK B: SEND EMAIL (Your existing logic)
    // ======================================================

    $recipient = "jenishsonani@gmail.com"; 
    $subject   = "New Lead: " . $position . " - " . $name;

    $email_content = "New Lead Details:\n\n";
    $email_content .= "Name: " . $name . "\n";
    $email_content .= "Phone: " . $phone . "\n";
    $email_content .= "Position: " . $position . "\n";
    $email_content .= "Requirement: " . $requirement . "\n";
    $email_content .= "Date: " . date('Y-m-d H:i:s') . "\n";

    // Hostinger 'From' address rule
    $domain_email = "no-reply@lighthousedecor.in"; 
    
    $email_headers = "From: Light House Web <" . $domain_email . ">\r\n";
    $email_headers .= "Reply-To: " . $name . " <" . $domain_email . ">\r\n"; 
    $email_headers .= "X-Mailer: PHP/" . phpversion();

    if (mail($recipient, $subject, $email_content, $email_headers)) {
        echo json_encode(["status" => "success", "message" => "Lead captured and saved."]);
    } else {
        http_response_code(500);
        echo json_encode(["status" => "error", "message" => "Server email failed."]);
    }

} else {
    http_response_code(403);
    echo json_encode(["status" => "error", "message" => "Invalid request method."]);
}
?>