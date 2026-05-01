<?php
session_start();
header('Content-Type: application/json');

// Ensure this matches your connection file name in the backend folder
require 'db_conn.php'; 

// Using a hardcoded ID for testing if session isn't set yet, 
// but eventually, this should be: $doctor_id = $_SESSION['doctor_id'];
$doctor_id = isset($_SESSION['doctor_id']) ? $_SESSION['doctor_id'] : 8; 

try {
    // 1. Fetch Doctor Info (Mapped to your 'doctors_account' and 'specializations' tables)
    // We join on the name/text since your 'specialization' column in doctors_account looks like a string
    $query = "SELECT d.full_name, d.email, d.contact_number, d.specialization 
              FROM doctors_account d 
              WHERE d.doctor_id = ?";
              
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $doctor_id);
    $stmt->execute();
    $profile = $stmt->get_result()->fetch_assoc();

    // 2. Fetch Weekly Schedule (Mapped to your 'doctor_schedule' table)
    $sched_query = "SELECT day_of_week, start_time, end_time, status FROM doctor_schedule WHERE doctor_id = ?";
    $stmt2 = $conn->prepare($sched_query);
    $stmt2->bind_param("i", $doctor_id);
    $stmt2->execute();
    $schedule = $stmt2->get_result()->fetch_all(MYSQLI_ASSOC);

    // 3. Send back to Javascript
    echo json_encode([
        "profile" => $profile,
        "schedule" => $schedule
    ]);

} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(["error" => $e->getMessage()]);
}
?>