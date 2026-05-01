<?php
session_start();
header('Content-Type: application/json');
require_once __DIR__ . '/../backend/db_conn.php';

if(!isset($_SESSION['user_id'])) {
    echo json_encode(["success" => false, "message" => "Unauthorized"]);
    exit;
}

$user_id = $_SESSION['user_id'];
$data = json_decode(file_get_contents('php://input'), true);

try {
    // Corrected column names: name, mobile
    $stmt = $conn->prepare("UPDATE users SET name = ?, mobile = ? WHERE id = ?");
    $stmt->bind_param("ssi", $data['name'], $data['mobile'], $user_id);
    
    if ($stmt->execute()) {
        echo json_encode(["success" => true]);
    } else {
        echo json_encode(["success" => false, "message" => "Update failed"]);
    }
} catch (Exception $e) {
    echo json_encode(["success" => false, "message" => $e->getMessage()]);
}
?>