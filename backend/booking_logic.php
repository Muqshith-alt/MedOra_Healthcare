<?php
session_start();
include "db_conn.php";

if (!isset($_SESSION['user_id'])) {
    die("Please sign up or log in first.");
}

$user_id = $_SESSION['user_id'];

// --- THE CHANGE IS HERE ---
// We get the doctor_id from the URL (GET) instead of the Form (POST)
// because your dashboard sent it via window.location.href
$doctor_id = isset($_GET['doctor_id']) ? mysqli_real_escape_string($conn, $_GET['doctor_id']) : 0;
// ---------------------------

$reason = mysqli_real_escape_string($conn, $_POST['reason']);

// Set defaults for now
$appointment_date = date('Y-m-d', strtotime('+1 day')); 
$appointment_time = "10:00:00"; 
$status = "Pending";

// Use the columns shown in your phpMyAdmin screenshot
$insert = "INSERT INTO appointments (user_id, doctor_id, appointment_date, appointment_time, reason, status)
           VALUES ('$user_id', '$doctor_id', '$appointment_date', '$appointment_time', '$reason', '$status')";

if (mysqli_query($conn, $insert)) {
    echo "<script>
            alert('Appointment successfully booked!');
            window.location.href = '../dashboards/user_dashboard.php';
          </script>";
} else {
    die("Insert Error: " . mysqli_error($conn));
}