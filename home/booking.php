<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./booking.css">
    <style>
        :root {
            --medical-blue-100: #f4faff;
            --medical-blue-200: #e9f5ff;
            --medical-blue-300: #ddecff;
            --medical-blue: #86bbe8;
            --medical-blue-deep: #5a98cf;
            --text-dark: #1f3a56;
            --text-soft: #3f6485;
            --glass-bg: rgba(255, 255, 255, 0.4);
            --glass-border: rgba(255, 255, 255, 0.7);
        }

        * {
            box-sizing: border-box;
            font-family: 'Poppins', Arial, sans-serif;
        }

        body {
            margin: 0;
            min-height: 100vh;
            background:
                radial-gradient(900px 420px at -10% -10%, rgba(127, 183, 232, 0.14), transparent 60%),
                radial-gradient(850px 400px at 110% 0%, rgba(93, 169, 235, 0.12), transparent 60%),
                linear-gradient(145deg, var(--medical-blue-100) 0%, var(--medical-blue-200) 52%, var(--medical-blue-300) 100%);
            color: var(--text-dark);
        }

        .mus {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 34px 16px;
        }

        h1 {
            display: flex;
            align-items: center;
            gap: 10px;
            margin: 0;
            color: #1f4f7a;
            font-weight: 600;
            letter-spacing: 0.3px;
        }

        .box {
            position: relative;
            overflow: hidden;
            width: 100%;
            max-width: 620px;
            background: linear-gradient(145deg, rgba(255, 255, 255, 0.46), var(--glass-bg));
            border: 1px solid var(--glass-border);
            border-radius: 22px;
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            box-shadow:
                0 18px 42px rgba(31, 79, 122, 0.13),
                inset 0 1px 0 rgba(255, 255, 255, 0.5);
            padding: 26px;
        }

        .box::before {
            content: "";
            position: absolute;
            top: -120px;
            right: -140px;
            width: 300px;
            height: 300px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.35) 0%, rgba(255, 255, 255, 0) 70%);
            pointer-events: none;
        }

        .one h2 {
            margin: 0 0 6px;
            font-weight: 600;
            color: #1d527f;
        }

        .one p {
            margin-top: 0;
            margin-bottom: 18px;
            color: var(--text-soft);
            font-size: 14px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-size: 14px;
            color: #214d73;
            font-weight: 500;
        }

        #for,
        textarea,
        .gang,
        .booked_doca {
            width: 100%;
            border-radius: 12px;
            border: 1px solid rgba(148, 196, 233, 0.65);
            background: rgba(255, 255, 255, 0.8);
            padding: 11px 12px;
            outline: none;
            font-size: 14px;
            color: #214d73;
        }

        #for:focus,
        textarea:focus,
        .gang:focus,
        .booked_doca:focus {
            border-color: rgba(94, 169, 232, 0.9);
            box-shadow: 0 0 0 3px rgba(94, 169, 232, 0.16);
        }

        textarea {
            min-height: 88px;
            resize: vertical;
        }

        input[type="radio"] {
            accent-color: var(--medical-blue-deep);
            margin-right: 5px;
        }

        .two {
            border: 1px solid rgba(255, 255, 255, 0.6);
            background: linear-gradient(135deg, rgba(134, 187, 232, 0.9), rgba(90, 152, 207, 0.8));
            color: #fff;
            padding: 12px 28px;
            border-radius: 999px;
            cursor: pointer;
            font-size: 15px;
            font-weight: 600;
            letter-spacing: 0.2px;
            transition: transform 0.25s ease, box-shadow 0.25s ease, background 0.25s ease, filter 0.25s ease;
            box-shadow: 0 10px 22px rgba(90, 152, 207, 0.3);
        }

        .two:hover {
            background: linear-gradient(135deg, rgba(120, 177, 225, 0.96), rgba(82, 144, 199, 0.88));
            transform: translateY(-2px);
            box-shadow: 0 14px 28px rgba(82, 144, 199, 0.36);
            filter: saturate(1.02);
        }

        .lap {
            border-radius: 50%;
            object-fit: cover;
            box-shadow: 0 8px 18px rgba(31, 79, 122, 0.2);
        }

        @media (max-width: 680px) {
            .box {
                max-width: 96%;
                padding: 20px;
                border-radius: 18px;
            }

            h1 {
                font-size: 26px;
            }

            .two {
                width: 100%;
            }
        }

        h6 {
            margin: 16px 0 0;
            text-align: center;
            color: #2c638f;
            font-weight: 500;
        }
    </style>
</head>

<body>
    <div class="mus">
        
        <h1><img src="../dashboard/logo.jpeg" width="60px" height="60px" class="lap">MedOra</h1><br>


        <div class="box">
            <span class="borderline"></span>



            <form action="../backend/booking_logic.php" method="post" >


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
                        <button type="submit" class="two" onclick="change()">Confirm Booking</button>

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
        const doctorName = params.get("doctor");
        if(doctorName){
            document.querySelector(".booked_doca").value=doctorName;
        }
    </script>
</body>

</html>