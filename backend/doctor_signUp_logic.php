<?php
session_start();
include "db_conn.php";

// Mapping variables to the form fields in your image
$name           = $_POST['name'];
$email          = $_POST['email'];
$mobile         = $_POST['mob'];
$password       = $_POST['password'];
$specialization = $_POST['specialization']; // Added from your form image

// 1. Check against the doctors_account table
$check = "SELECT * FROM doctors_account WHERE email='$email'";
$result = mysqli_query($conn, $check);

if (mysqli_num_rows($result) > 0) {
    echo "Account already exists";
} 
else {
    // Securely hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // 2. Insert into the correct table with the new specialization field
    $insert = "INSERT INTO doctors_account (full_name, email, contact_number, password_hash, specialization)
               VALUES ('$name', '$email', '$mobile', '$hashedPassword', '$specialization')";

    if (mysqli_query($conn, $insert)) {
        // Use consistent session naming
        $_SESSION['doctor_id']   = mysqli_insert_id($conn);
        $_SESSION['doctor_name'] = $name;
        
        header("Location: ../dashboards/doctor_dashboard.php");
        exit();
    } 
    else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>