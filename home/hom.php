<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>MedOra | Doctors </title>
    <link rel="stylesheet" href="style.css">
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



        <!-- MAIN CONTENT -->




        <div class="home">
            <p class="" style="text-align: justify;"> <span class="date" id="date"></span> </p>


            <!-- Header -->
            <div class="home-header">
                <h2>Welcome, 👋</h2>
                <p>Book your appointment easily</p>
            </div>

            <!-- Search -->
            <div class="search-box">
                <input type="text" placeholder="Search doctor, specialty, location...">
                <button>Search</button>
            </div>
            <hr>

            <!-- Categories -->
            <h3 class="section-title">Categories</h3>
            <div class="categories">
                <div class="cat-card">Cardiology</div>
                <div class="cat-card">Dermatology</div>
                <div class="cat-card">Neurology</div>
                <div class="cat-card">Psychiatry</div>
                <div class="cat-card">Ophthalmology</div>
                <div class="cat-card">General Physician</div>
                <div class="cat-card">Heart Surgery</div>
                <div class="cat-card">Brain Surgery</div>
            </div>
            <hr>

            <h2>How To Book an appointment</h2>
            <ol style="padding: 8px;">
                <li>Go to Doctors.</li>
                <li>Select Your Diseases.</li>
                <li>Select One Doctor.</li>
                <li>And Book appointment. </li>
                <li>Check Your Email and Confirmation.</li>
            </ol>
            <hr>


            <!-- Popular Doctors -->
            <h3 class="section-title">Top Doctors</h3>
            <div class="doctor-list">

                <div class="doctor-card">
                    <h4>Dr. Arham Mustak</h4>
                    <p>Dermatologist</p>
                    <span>⭐ 4.9</span>

                </div>

                <div class="doctor-card">
                    <h4>Dr. Munsif Ahamed</h4>
                    <p>Cardiologist</p>
                    <span>⭐ 4.8</span>

                </div>

            </div>
            <hr>

            <!-- Appointments -->
            <h3 class="section-title">Today Appointments</h3>
            <div class="appointments">
                <div class="appt-card">
                    <p>Dr. Naruto</p>
                    <span>10:30 AM</span>
                </div>
                <div class="appt-card">
                    <p>Dr. Maria Giz</p>
                    <span>2:00 PM</span>
                </div>
            </div>
            <hr>

            <!-- Services -->
            <h3 class="section-title">Our Services</h3>
            <div class="services">
                <div class="service-card">Online Consultation</div>
                <div class="service-card">Lab Reports</div>
                <div class="service-card">Emergency Care</div>
                <div class="service-card">Pharmacy</div>
            </div>
            <hr>

            <!-- Emergency -->


        </div>
    </div>

    <div>
        <footer class="medora-footer">
            <div class="footer-container">


                <div class="footer-box">
                    <h2 class="logo">MedOra</h2>
                    <p>
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