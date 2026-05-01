<?php
header("Content-Type: application/json");
include 'db_conn.php';

// IMPORTANT: Fetch uses 'php://input' for JSON data, not $_POST
$json = file_get_contents('php://input');
$data = json_decode($json, true);

if (isset($data['appointment_id']) && isset($data['status'])) {
    $appointment_id = $data['appointment_id'];
    $status = $data['status'];

    // Use a prepared statement to prevent SQL injection
    $query = "UPDATE appointments SET status = ? WHERE appointment_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("si", $status, $appointment_id);

    if ($stmt->execute()) {
        echo json_encode(["success" => true, "message" => "Status updated to $status"]);
    } else {
        echo json_encode(["success" => false, "message" => "Database update failed: " . $conn->error]);
    }

    $stmt->close();
} else {
    echo json_encode(["success" => false, "message" => "Invalid input data."]);
}

$conn->close();
?>