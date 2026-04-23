<?php



session_start();
include "db_conn.php";

if (!isset($_SESSION['user_id'])) {
    die("Please sign up or log in first.");
}

$user_id = $_SESSION['user_id'];

$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$doctor_name = $_POST['doctor_name'];
$reason = $_POST['reason'];




    $insert = "INSERT INTO appointments(id,name,email,address,phone,age,gender,doctor_name,reason)
               VALUES ('$user_id','$name','$email','$address','$phone','$age','$gender','$doctor_name','$reason')";

               if (mysqli_query($conn, $insert)) {
                    echo "succes";
                    //header("Location: ../home/index.php");
                    //exit();
               } 
               else 
                {
                   //echo mysqli_error($conn);
                   die("Insert Error: " . mysqli_error($conn));
                }


?>
