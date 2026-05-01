<?php
include '../backend/db_conn.php';

header('Content-Type: application/json');

// Get the specialization from the URL (if any)
$spec = isset($_GET['spec']) ? $_GET['spec'] : '';

if ($spec !== '') {
    // Use the column name 'specialization' from your doctors_account table[cite: 1]
    $stmt = $conn->prepare("SELECT doctor_id, full_name, specialization, contact_number FROM doctors_account WHERE specialization = ?");
    $stmt->bind_param("s", $spec);
} else {
    // Fetch everyone if search is empty
    $stmt = $conn->prepare("SELECT doctor_id, full_name, specialization, contact_number FROM doctors_account");
}

$stmt->execute();
$result = $stmt->get_result();
$doctors = [];

while ($row = $result->fetch_assoc()) {
    $doctors[] = $row;
}

echo json_encode($doctors);
?>