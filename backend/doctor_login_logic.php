<?php
session_start();
include "db_conn.php";

$email = $_POST['email'];
$password = $_POST['password'];

// Use Prepared Statements for security!
$stmt = $conn->prepare("SELECT doctor_id, full_name, specialization, password_hash FROM doctors_account WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();

    if (password_verify($password, $row['password_hash'])) {
        $_SESSION['doctor_id'] = $row['doctor_id'];
        $_SESSION['doctor_name'] = $row['full_name'];
        $_SESSION['specialization'] = $row['specialization'];

        header("Location: ../dashboards/doctor_dashboard.php");
        exit();
    } else {
        echo "Wrong password";
    }
} else {
    echo "Account not found";
}
?>