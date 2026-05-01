<?php
session_start();
header('Content-Type: application/json');
require 'db_conn.php';

// Check if logged in
if(!isset($_SESSION['doctor_id'])) {
    echo json_encode(["success" => false, "message" => "Unauthorized"]);
    exit;
}

$doctor_id = $_SESSION['doctor_id'];

// Get the data from the JavaScript Fetch request
$data = json_decode(file_get_contents('php://input'), true);

if (!$data) {
    echo json_encode(["success" => false, "message" => "No data received"]);
    exit;
}

try {
    // Prepare the update query
    $sql = "UPDATE doctors_account 
            SET full_name = ?, specialization = ?, contact_number = ? 
            WHERE doctor_id = ?";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssi", $data['full_name'], $data['specialization'], $data['contact_number'], $doctor_id);

    if ($stmt->execute()) {
        echo json_encode(["success" => true]);
    } else {
        echo json_encode(["success" => false, "message" => "Database update failed"]);
    }
} catch (Exception $e) {
    echo json_encode(["success" => false, "message" => $e->getMessage()]);
}
?>