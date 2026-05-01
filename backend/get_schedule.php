<?php
session_start();
header('Content-Type: application/json');
require 'db_conn.php';

if(!isset($_SESSION['doctor_id'])) {
    echo json_encode(["error" => "Unauthorized"]);
    exit;
}

$doctor_id = $_SESSION['doctor_id'];

$query = "SELECT day_of_week, start_time, end_time, status FROM doctor_schedule WHERE doctor_id = ? ORDER BY FIELD(day_of_week, 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday')";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $doctor_id);
$stmt->execute();
$result = $stmt->get_result();

$schedule = [];
while($row = $result->fetch_assoc()) {
    $schedule[] = $row;
}

echo json_encode($schedule);
?>