<?php
function validateForm($name, $email, $subject, $message) {
    $errors = [];

    // Validate name
    if (empty($name)) {
        $errors['name'] = "Name is required.";
    }

    // Validate email
    if (empty($email)) {
        $errors['email'] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Invalid email format.";
    }

    // Validate subject
    if (empty($subject)) {
        $errors['subject'] = "Subject is required.";
    }

    // Validate message
    if (empty($message)) {
        $errors['message'] = "Message is required.";
    }

    return $errors;
}
?>