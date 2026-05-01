<?php
include "db_conn.php";

// Use a JOIN to get user details and doctor name based on the IDs in the appointment table
$sql = "SELECT 
            u.name, 
            u.email, 
            u.mobile, 
            d.full_name AS doctor_name, 
            d.specialization,
            a.appointment_date, 
            a.appointment_time, 
            a.reason, 
            a.status,
            a.created_at
        FROM appointments a
        JOIN users u ON a.user_id = u.id
        JOIN doctors_account d ON a.doctor_id = d.doctor_id
        WHERE a.appointment_id = 1"; // Using the correct primary key name from your schema

$result = mysqli_query($conn, $sql);

if ($row = mysqli_fetch_assoc($result)) {
    // User details (from 'users' table)
    $name = $row['name'];
    $email = $row['email'];
    $phone = $row['mobile'];
    
    // Appointment specific details (from 'appointments' table)
    $date = $row['appointment_date'];
    $time = $row['appointment_time'];
    $reason = $row['reason'];
    $status = $row['status'];
    $booked_at = $row['created_at'];
    
    // Doctor details (from 'doctors_account' table)
    $doctor_name = $row['doctor_name'];
    $specialization = $row['specialization'];
}
?>