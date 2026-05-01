<?php
session_start();
header('Content-Type: application/json');
require_once __DIR__ . '/../backend/db_conn.php';

if(!isset($_SESSION['user_id'])) {
    http_response_code(401);
    echo json_encode(["error" => "Unauthorized"]);
    exit;
}

$user_id = $_SESSION['user_id'];

try {
    // Joining on doctor_id to get full_name and specialization from doctors_account
    $sql = "SELECT a.appointment_date, a.appointment_time, a.reason, a.status,
                   d.full_name AS doctor_name, d.specialization 
            FROM appointments a 
            JOIN doctors_account d ON a.doctor_id = d.doctor_id 
            WHERE a.user_id = ? 
            ORDER BY a.appointment_date DESC, a.appointment_time DESC";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

    echo json_encode($result);
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(["error" => $e->getMessage()]);
}
?>