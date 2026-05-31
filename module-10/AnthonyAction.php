<?php
// process.php

// 1. Ensure the request method is POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // 2. Set the HTTP content type header to JSON
    header('Content-Type: application/json; charset=utf-8');

    // 3. Option A: Encode the entire raw form array directly
    // $jsonData = json_encode($_POST, JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR);

    // 3. Option B: Sanitize and structure specific fields manually (Recommended)
    $formData = [
        "name"  => filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_SPECIAL_CHARS),
        "birthdate"  => filter_input(INPUT_POST, 'birthday', FILTER_SANITIZE_SPECIAL_CHARS),
        "email" => filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL),
        "message"   => htmlspecialchars($_POST['description']),
        "job"  => filter_input(INPUT_POST, 'job', FILTER_SANITIZE_SPECIAL_CHARS),
        "age"   => htmlspecialchars($_POST['age']),
        "empstatus"   => isset($_POST['employ']) ? htmlspecialchars($_POST['employ']) : 'Not specified',
        "status"  => htmlspecialchars($_POST['status']),
        "time"  => date('Y-m-d H:i:s')
    ];

    try {
        // Encode the structured array into a JSON string
        // JSON_PRETTY_PRINT makes it human-readable; JSON_THROW_ON_ERROR handles failures safely
        $jsonOutput = json_encode($formData, JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR);
        
        // 4. Output or return the JSON format data
        echo $jsonOutput;

        // Optional: Save the JSON data directly into a file on your server
        // file_put_contents('data.json', $jsonOutput);

    } catch (JsonException $e) {
        // Handle encoding failures gracefully
        echo json_encode(["error" => "Failed to encode data: " . $e->getMessage()]);
    }

} else {
    // Block direct access or non-POST requests
    header('HTTP/1.1 405 Method Not Allowed');
    echo json_encode(["error" => "Only POST requests are permitted."]);
}
