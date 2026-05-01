<?php
include '../backend/db_conn.php';
$doctor_id = $_GET['doctor_id'];

$sql = "SELECT full_name FROM doctors_account WHERE doctor_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $doctor_id);
$stmt->execute();
$result = $stmt->get_result();
echo json_encode($result->fetch_assoc());
?>