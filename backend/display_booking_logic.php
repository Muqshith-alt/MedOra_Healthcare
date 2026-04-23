<?php
include "db_conn.php";




    $sql = "SELECT INTO name,email,address,phone,age,gender,doctor_name,booked_at FROM appointments WHERE appoint_id=1";
               
    $result =mysqli_query($conn,$sql);

    if($row =
        mysqli_fetch_assoc($result)){
            $name = $row['name'];
            $email = $row['email'];
            $address = $row['address'];
            $phone = $row['phone'];
            $age = $row['age'];
            $gender = $row['gender'];
            $doctor_name = $row['doctor_name'];
            $booked_at =$row['booked_at'];
        }


?>
