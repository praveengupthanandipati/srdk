<?php
/**
 * Contact Form Mail Integration Handler
 * Recipient: praveennandipati@gmail.com
 */

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize inputs
    $full_name = filter_input(INPUT_POST, 'fullName', FILTER_SANITIZE_SPECIAL_CHARS);
    $location = filter_input(INPUT_POST, 'location', FILTER_SANITIZE_SPECIAL_CHARS);
    $contact_number = filter_input(INPUT_POST, 'contactNumber', FILTER_SANITIZE_SPECIAL_CHARS);
    $user_email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_SPECIAL_CHARS);
    $message_body = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_SPECIAL_CHARS);

    // Validation
    if (!$user_email || !$full_name || !$message_body) {
        echo json_encode(['status' => 'error', 'message' => 'Please fill all required fields correctly.']);
        exit;
    }

    // Email Configuration
    $to_email = "info@srdkbiochem.com";
    $email_subject = "New Contact Form Inquiry: " . $subject;

    // Construct HTML Email Body
    $html_content = "
    <html>
    <head>
        <style>
            .email-container { font-family: 'Inter', sans-serif; color: #333; line-height: 1.6; }
            .header { background: #10706E; color: #fff; padding: 20px; text-align: center; border-radius: 8px 8px 0 0; }
            .content { padding: 30px; border: 1px solid #eee; border-radius: 0 0 8px 8px; }
            .field { margin-bottom: 20px; }
            .label { font-weight: bold; color: #10706E; display: block; margin-bottom: 5px; }
            .value { display: block; padding: 10px; background: #f9f9f9; border-radius: 4px; }
            .footer { margin-top: 30px; font-size: 12px; color: #999; text-align: center; }
        </style>
    </head>
    <body>
        <div class='email-container'>
            <div class='header'>
                <h2 style='margin:0;'>SRDK Biochemicals Inquiry</h2>
            </div>
            <div class='content'>
                <div class='field'>
                    <span class='label'>Name:</span>
                    <span class='value'>{$full_name}</span>
                </div>
                <div class='field'>
                    <span class='label'>Location:</span>
                    <span class='value'>{$location}</span>
                </div>
                <div class='field'>
                    <span class='label'>Contact Number:</span>
                    <span class='value'>{$contact_number}</span>
                </div>
                <div class='field'>
                    <span class='label'>Email:</span>
                    <span class='value'>{$user_email}</span>
                </div>
                <div class='field'>
                    <span class='label'>Subject:</span>
                    <span class='value'>{$subject}</span>
                </div>
                <div class='field'>
                    <span class='label'>Message:</span>
                    <div class='value' style='white-space: pre-wrap;'>{$message_body}</div>
                </div>
            </div>
            <div class='footer'>
                This email was sent from the SRDK website contact form.
            </div>
        </div>
    </body>
    </html>";

    // Email Headers
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: SRDK Website <no-reply@srdkchem.com>" . "\r\n";
    $headers .= "Reply-To: {$user_email}" . "\r\n";

    // Send Email
    if (mail($to_email, $email_subject, $html_content, $headers)) {
        echo json_encode(['status' => 'success', 'message' => 'Thank you! Your message has been sent successfully.']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Sorry, something went wrong. Please try again later.']);
    }
    exit;
}
