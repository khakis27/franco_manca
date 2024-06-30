<?php
session_start();
// Receive JSON data from the fetch request
$data = json_decode(file_get_contents('php://input'), true);

if (isset($data['beauty'])) {
    $_SESSION['x'] = $data['beauty'];
    $_SESSION['x_updated'] = time();
    // Optionally, you can send a response back to confirm success
    echo json_encode(['message' => 'Beauty value stored in session']);
} else {
    http_response_code(400); // Bad request
    echo json_encode(['error' => 'Beauty value not received']);
}