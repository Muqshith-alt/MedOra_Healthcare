<?php

session_start();
include "db_conn.php";


$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);

    if (password_verify($password, $row['password'])) {

        $_SESSION['user_id'] = $row['id'];

        header("Location: ../home/hom.php");
        exit();
        
    } else {
        echo "Wrong password";
        
    }
} else {
    echo "Account not found";
    
}
?>
