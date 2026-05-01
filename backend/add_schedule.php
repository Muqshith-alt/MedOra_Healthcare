<?php
session_start();
header('Content-Type: application/json');
require 'db_conn.php';

// 1. Check if the doctor is logged in
if(!isset($_SESSION['doctor_id'])) {
    echo json_encode(["success" => false, "message" => "Unauthorized"]);
    exit;
}

$doctor_id = $_SESSION['doctor_id'];

// 2. Get the JSON data sent from JavaScript
$data = json_decode(file_get_contents('php://input'), true);

if (!$data) {
    echo json_encode(["success" => false, "message" => "No data received"]);
    exit;
}

$day = $data['day'];
$start = $data['start'];
$end = $data['end'];

try {
    // 3. Insert the new slot into the table
    $sql = "INSERT INTO doctor_schedule (doctor_id, day_of_week, start_time, end_time, status) 
            VALUES (?, ?, ?, ?, 'Available')";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("isss", $doctor_id, $day, $start, $end);

    if ($stmt->execute()) {
        echo json_encode(["success" => true]);
    } else {
        echo json_encode(["success" => false, "message" => "Failed to save to database"]);
    }
} catch (Exception $e) {
    echo json_encode(["success" => false, "message" => $e->getMessage()]);
}
?>