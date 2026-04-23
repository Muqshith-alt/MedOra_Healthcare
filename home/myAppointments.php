<?php
    session_start();
    include "../backend/db_conn.php";

    if (!isset($_SESSION['user_id'])) {
    die("Please log in first.");
    }       

    $user_id = $_SESSION['user_id'];

    $query = "SELECT * FROM appointments WHERE id='$user_id' ORDER BY appoint_id DESC";
    $result = mysqli_query($conn, $query);
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>MedOra | Doctors </title>
    <link rel="stylesheet" href="appo.css">

</head>

<body>

    <div class="container">

        <!-- SIDEBAR -->
        <div class="sidebar">
            <h2>MedOra</h2>
            <ul>
                <li><a onclick="home()">🏠 Home</li></a>
                <li><a onclick="display()">👨‍⚕️ Doctors</li></a>
                <li><a onclick="appo()">📅 My Appointments</li></a>
                <li>💊 Prescriptions</li>
                <li>💬Support</li>
                <li><a onclick="setting()">⚙ Settings</li></a>

                <li><a onclick="dash()">🚪 Logout</li></a>
            </ul>
        </div>
        <script>
            function display() {
                window.location.href = "doctor_dashboard.php";
            }

            function setting() {
                window.location.href = "setting.php";

            }

            function home() {
                window.location.href = "hom.php";
            }

            function dash() {
                alert("Confirm Logout")
                window.location.href = "../dashboard/dashboard.php";
            }

            function appo() {

                window.location.href = "myAppointments.php";
            }


            function openSettings() {
                document.getElementById("settingsPage").scrollIntoView({
                    behavior: "smooth"
                });
            }

            function toggleDarkMode() {
                document.body.classList.toggle("dark");
            }
        </script>

        <div class="main">
            <h1>Your appinment Histories</h1>


            <div>
                <table>
                    <tr >
                        <th>Appointment ID</th>
                        <th>Patient Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Doctor Name</th>
                        <th>Reason</th>
                        <th>Booked At</th>
                    </tr>

                    <?php while($row=mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td>    <?php echo $row['appoint_id']; ?> </td>
                        <td>    <?php echo $row['name']; ?>    </td>
                        <td>    <?php echo $row['email']; ?>    </td>
                        <td>    <?php echo $row['address']; ?>    </td>
                        <td>    <?php echo $row['phone']; ?>    </td>
                        <td>    <?php echo $row['age']; ?>    </td>
                        <td>    <?php echo $row['gender']; ?>    </td>
                        <td>    <?php echo $row['doctor_name']; ?>    </td>
                        <td>    <?php echo $row['reason']; ?>    </td>
                        <td>    <?php echo $row['booked_at']; ?>    </td>
                    </tr>
                    

                    <?php } ?>
                
                </table>
            </div>





        </div>
    </div>






    <div>
        <footer class="medora-footer">
            <div class="footer-container">


                <div class="footer-box">
                    <h2 class="logo">MedOra</h2>
                    <p id="demo">
                        MedOra Healthcare provides trusted medical services with certified
                        doctors and modern facilities.
                    </p>
                    <p class="emergency">🚨 Emergency: <span>+94 75 655 0885</span></p>
                </div>


                <div class="footer-box">
                    <h3>Patient Services</h3>
                    <ul>
                        <li><a href="#">Book Appointment</a></li>
                        <li><a href="#">Find a Doctor</a></li>
                        <li><a href="#">Online Consultation</a></li>
                        <li><a href="#">Health Packages</a></li>
                        <li><a href="#">Second Opinion</a></li>
                    </ul>
                </div>


                <div class="footer-box">
                    <h3>Departments</h3>
                    <ul>
                        <li><a href="#">Cardiology</a></li>
                        <li><a href="#">Dermatology</a></li>
                        <li><a href="#">Neurology</a></li>
                        <li><a href="#">Psychiatry</a></li>
                        <li><a href="#">Ophthalmology</a></li>
                        <li><a href="#">General Physician</a></li>
                    </ul>
                </div>


                <div class="footer-box">
                    <h3>Support</h3>
                    <ul>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">FAQs</a></li>
                        <li><a href="#">Help Center</a></li>
                        <li><a href="#">Feedback</a></li>
                    </ul>

                    <div class="social">
                        <a href="#">🌐</a>
                        <a href="#">📘</a>
                        <a href="#">📸</a>
                        <a href="#">▶️</a>
                    </div>
                </div>

            </div>


            <div class="footer-bottom">
                <p>© 2026 MedOra Healthcare. All Rights Reserved.</p>
                <div class="legal">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms & Conditions</a>
                    <a href="#">Cookie Policy</a>
                </div>
            </div>
        </footer>
    </div>


    <script src="script.js"></script>



</body>

</html>