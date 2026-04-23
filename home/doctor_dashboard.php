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



    </script>

    <!-- MAIN CONTENT -->
    <div class="main">
      <p class=""> <span class="date" id="date"></span> </p>

      <h1>Book Your Appointment</h1>



      <div class="cards">

        <div class="card">
          <img src="car.jpeg">
          <h2>Cardiologist</h2>
          <p>Heart & Vascular Care</p>
          <button onclick=car()>Book Your Appointment</button>
          <script>
            function car() {
              window.location.href = "cardio.php";

            }
          </script>

        </div>

        <div class="card">
          <img src="neu.jpeg">
          <h2>Neurology </h2>
          <p>Brain & Nerve Health</p>

          <button onclick=neur()>Book Your Appointment</button>

          <script>
            function neur() {
              window.location.href = "neuro.php";

            }
          </script>
        </div>

        <div class="card">
          <img src="psy.jpeg">
          <h2>Psychiatry</h2>
          <p>Mental Healthc& Wellness</p>
          <button onclick=psy()>Book Your Appointment</button>
          <script>
            function psy() {
              window.location.href = "psyco.php";

            }
          </script>
        </div>

        <div class="card">
          <img src="gen.jpeg">
          <h2>General Physician </h2>
          <p>Annual Checkups,Fever,Fatigue</p>

          <button onclick=gen()>Book Your Appointment</button>
          <script>
            function gen() {
              window.location.href = "general.php";

            }
          </script>
        </div>
        <div class="card">
          <img src="der.jpeg">
          <h2>Dermatology </h2>
          <p>Skin , Hair & Nails</p>

          <button onclick=der()>Book Your Appointment</button>
          <script>
            function der() {
              window.location.href = "dermo.php";

            }
          </script>
        </div>
        <div class="card">
          <img src="oph.jpeg">
          <h2>Ophthalmology </h2>
          <p>Eye & Vision Care</p>

          <button onclick=oph()>Book Your Appointment</button>
          <script>
            function oph() {
              window.location.href = "optho.php";

            }
          </script>
        </div>

      </div>
    </div>
  </div>

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


  <script src="script.js"></script>

</body>

</html>