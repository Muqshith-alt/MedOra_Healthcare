<?php
session_start();
include "db_conn.php";

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mob'];
$password = $_POST['password'];


$check = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn, $check);

if (mysqli_num_rows($result) > 0) {
    echo "Account already exists";
} 
else {
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $insert = "INSERT INTO users (name,email,mobile,password)
               VALUES ('$name','$email','$mobile','$hashedPassword')";

               if (mysqli_query($conn, $insert)) {
                    //echo "succes";
                    $_SESSION['user_id'] = mysqli_insert_id($conn);
                    $_SESSION['user_name'] = $name;
                    header("Location: ../home/hom.php");
                    exit();
               } 
               else 
                {
                    echo mysqli_error($conn);
                    }


    
}
?>
