<?php
session_start();
header('Content-Type: application/json');
require 'db_conn.php';

if(!isset($_SESSION['doctor_id'])) {
    echo json_encode(["error" => "Unauthorized"]);
    exit;
}

$doctor_id = $_SESSION['doctor_id'];

// CHANGED: u.full_name to u.name to match your table structure
$query = "SELECT a.appointment_id, u.name AS patient_name, a.appointment_date, 
                 a.appointment_time, a.reason, a.status 
          FROM appointments a
          JOIN users u ON a.user_id = u.id
          WHERE a.doctor_id = ?
          ORDER BY a.appointment_date DESC, a.appointment_time DESC";

$stmt = $conn->prepare($query);
$stmt->bind_param("i", $doctor_id);
$stmt->execute();
$result = $stmt->get_result();

$appointments = [];
while($row = $result->fetch_assoc()) {
    // Formatting time for better readability (e.g., 10:30 AM)
    $row['appointment_time'] = date("g:i A", strtotime($row['appointment_time']));
    $appointments[] = $row;
}

echo json_encode($appointments);
?>