<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Medora | Book Appointment</title>
  <link rel="stylesheet" href="home.css">
</head>
<body>
  <div>
    <h1>Cardiologist</h1>
  </div>
  <div class="about">
    <h2>❤️ Cardiology Department – Medora Healthcare</h2>

<h3>🫀 About Cardiology</h3>

The Cardiology Department at Medora Healthcare provides advanced and comprehensive care for heart and blood vessel–related conditions. Our team of highly qualified cardiologists is committed to delivering accurate diagnosis, effective treatment, and long-term heart health management using modern medical technology.

We focus on prevention, early detection, and personalized treatment to help patients lead a healthier and more active life.

⸻

<h3>👨‍⚕️ Our Cardiology Services</h3>
	<li>•	Heart health check-ups and risk assessment</li>
	<li>•	Treatment for high blood pressure (Hypertension)</li>
	<li>•	Coronary artery disease management</li>
	<li>•	Heart rhythm disorders (Arrhythmia)</li>
	<li>•	Heart failure diagnosis and treatment</li>
	<li>•	Chest pain and breathlessness evaluation</li>
	<li>•	ECG, Echo, and stress testing</li>
	<li>•	Post-heart attack care and follow-up</li>

⸻

<h3>🩺 Our Approach</h3>


At Medora Cardiology, we follow a patient-focused and evidence-based approach:
	<li>•	Detailed cardiac evaluation</li>
	<li>•	Accurate diagnosis using modern equipment</li>
	<li>•	Customized treatment and medication plans</li>
	<li>•	Lifestyle guidance for diet, exercise, and stress control</li>
	<li>•	Continuous monitoring and follow-up care</li>

⸻

<h3>💙 Why Choose Medora Cardiology?</h3>

<li>✔ Experienced and certified cardiologists</li>
<li>✔ Advanced diagnostic facilities</li>
<li>✔ Personalized heart care plans</li>
<li>>✔ Emergency cardiac support</li>
<li>✔ Compassionate and reliable care</li>

⸻

<h3>📅 Book an Appointment</h3>

Heart health is vital at every stage of life. If you experience chest pain, irregular heartbeat, high blood pressure, or fatigue, do not delay care.
Book an appointment with our Cardiology specialists today and protect your heart with Medora Healthcare.
  </div>
    
<div class="cards">

      <div class="card">
        <img src="doc1.jpeg">
        <h3 class="doca">Dr. Arham Mustak</h3>
        <p>Cardiologist</p>
        <span>⭐ 4.9 (350+ Reviews)</span>
        <button  class="formLink" onclick="goToForm(this)">Book Now</button>
      </div>

      <div class="card">
        <img src="doc2.jpeg">
        <h3 class="doca">Dr.  Muqshith Ahamed</h3>
        <p>Cardiologist</p>
        <span>⭐ 4.9 (350+ Reviews)</span>
        <button  class="formLink" onclick="goToForm(this)">Book Now</button>
      </div>

      <div class="card">
        <img src="doc3.jpeg">
        <h3 class="doca">Dr. Munsif Ahamed</h3>
        <p>Cardiologist</p>
        <span>⭐ 4.9 (350+ Reviews)</span>
        <button  class="formLink" onclick="goToForm(this)">Book Now</button>
      </div>

      <div class="card">
        <img src="doc4.jpeg">
        <h3 class="doca">Dr.Mohamed Sahdan </h3>
        <p>Cardiologist</p>
        <span>⭐ 4.9 (350+ Reviews)</span>
        <button  class="formLink" onclick="goToForm(this)">Book Now</button>
      </div>

    </div>

    <footer class="medora-footer">
  <div class="footer-container">

 
    <div class="footer-box">
      <h2 class="logo">MedOra</h2>
      <p>
        MedoOa Healthcare provides trusted medical services with certified
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


  <script>
    function goToForm(button){
      const doctorName =button.parentElement.querySelector(".doca").innerText;
      window.location.href="booking.php?doctor="+encodeURIComponent(doctorName);

    }
    
  </script>
</body>
</html>