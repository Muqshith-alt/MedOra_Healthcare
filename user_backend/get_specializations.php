<?php
include '../backend/db_conn.php';

header('Content-Type: application/json');

try {
    $sql = "SELECT id, name FROM specializations ORDER BY name ASC";
    $result = $conn->query($sql);
    
    $specializations = [];
    while ($row = $result->fetch_assoc()) {
        $specializations[] = $row;
    }
    
    echo json_encode($specializations);
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(["error" => $e->getMessage()]);
}
?>