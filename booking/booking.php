<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./booking.css">
</head>

<body>
    <div class="mus">
        
        <h1><img src="../Home_page/logo.jpeg" width="60px" height="60px" class="lap">MedOra</h1><br>


        <div class="box">
            <span class="borderline"></span>



            <form action="../backend/booking_logic.php?doctor_id=<?php echo $_GET['doctor_id']; ?>" method="post">


                <div class="one">

                    <h2>Book an Appointment Online</h2>
                    <p>Please fill out the form to schedule your visit</p>
                    <div class="mah"></div>


                    <label>Name</label>
                        <input name="name" type="text" required="required" id="for" placeholder="Enter Your Name">
                    
                    <br><br>



                    <label>Email</label>
                        <input name="email" type="email" required="required" id="for" placeholder="Enter Your Email">
                    <br> <br>   
                   


                    <label>Address</label>
                        
                        <textarea name="address" name="" id="for" required="required" placeholder="Enter your address"></textarea>
                    <br><br>
                   



                    <label>Phone Number</label>
                        <input name="phone" type="number" required="required" id="for" placeholder="Enter Your Phone Number">
                    
                    <br><br>


                    <label>Age</label>
                        <input name="age" type="number" required="required" id="for" placeholder="Enter Your Age">
                    
                    <br><br>


                    <label>Gender</label>
                        <input type="radio" required="required" name="gender">Male
                        <input type="radio" required="required" name="gender">Female
                    
                        <br><br>
                    <label>Doctor Name</label>
                        <input name="doctor_name" type="text" class="booked_doca" id="for" readonly> <br>  

                    <label>Reason for Visit</label>         
                        <input name="reason" type="text" class="gang" id="for" placeholder="Please describe your reason for visit...">
                    

                    <br>
                    <br>
                

                    <center>
                        <button type="submit" class="two" onclick="change()">Book Appointment</button>

                    </center>

                    <h6>"MedOra is available 24/7"</h6>
                </div>


            </form>
        </div>
    </div>
    <!-- <script>
        function change() {
            alert("Your submision is successful...")
        }

    </script> -->

    <script>
        const params= new URLSearchParams(window.location.search);
        const doctorName = params.get("doctor_name");
        if(doctorName){
            document.querySelector(".booked_doca").value=doctorName;
        }
    </script>
</body>

</html>