<?php
session_start();
header('Content-Type: application/json');

// Use ONLY your verified connection file
require "db_conn.php"; 

// 1. Check if the session actually exists
if(!isset($_SESSION['doctor_id'])) {
    // Adding a 401 status helps the JavaScript "catch" the error correctly
    http_response_code(401);
    echo json_encode(["error" => "Unauthorized: No session found"]);
    exit;
}

$id = $_SESSION['doctor_id'];

try {
    // 2. Prepare and execute the query
    $stmt = $conn->prepare("SELECT doctor_id, full_name, email, contact_number, specialization FROM doctors_account WHERE doctor_id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    
    $result = $stmt->get_result()->fetch_assoc();

    // 3. Handle the case where the ID exists in session but not in DB
    if ($result) {
        echo json_encode($result);
    } else {
        http_response_code(404);
        echo json_encode(["error" => "Doctor record not found in database"]);
    }

} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(["error" => "Server Error: " . $e->getMessage()]);
}
?>