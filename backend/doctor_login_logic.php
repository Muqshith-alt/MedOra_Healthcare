<?php
session_start();
include "db_conn.php";

$email = $_POST['email'];
$password = $_POST['password'];


$query = "SELECT * FROM doctors_account WHERE email='$email'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);

    
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