<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Medora | Book Appointment</title>
  <link rel="stylesheet" href="home.css">
</head>
<p>

<div>
  <h1>Psychiatrist</h1>
</div>
<div class="about">
<h2>🧠 Psychiatry Department – Medora Healthcare</h2>

<h3>🌿 About Psychiatry</h3>

<p>The Psychiatry Department at Medora Healthcare is dedicated to providing compassionate, confidential, and
  evidence-based mental health care. We understand that mental well-being is just as important as physical health, and
  our goal is to support patients in achieving emotional balance, clarity, and a better quality of life.

  Our experienced psychiatrists offer personalized treatment plans in a safe and supportive environment, helping
  individuals cope with psychological, emotional, and behavioral challenges.</p>

⸻

<h3>👨‍⚕️ Our Psychiatry Services</h3>
<li>• Depression and mood disorder management</li>
<li>• Anxiety, panic attacks, and stress-related conditions</li>
<li>• Sleep disorders and insomnia treatment</li>
<li>• Bipolar disorder care</li>
<li>• Schizophrenia and psychotic disorders</li>
<li>• Child and adolescent mental health care</li>
<li>• Addiction and substance abuse counseling</li>
<li>• Workplace stress and burnout management</li>

⸻

<h3>🩺 Our Approach</h3>

At Medora, we follow a holistic and patient-centered approach:
<li>• Detailed mental health assessment</li>
<li>• Confidential one-on-one consultations</li>
<li> • Medication management (when required)</li>
<li>• Therapy guidance and lifestyle counseling</li>
<li>• Continuous follow-up and support</li>

⸻

<h3>💙 Why Choose Medora Psychiatry?</h3>

<li>✔ Certified and experienced psychiatrists</li>
<li>✔ Strict confidentiality and privacy</li>
<li>✔ Personalized treatment plans</li>
<li>✔ Calm, judgment-free environment</li>
<li>✔ Online and in-person consultations available</li>

⸻

<h3>📅 Book an Appointment</h3>

<p>If you or your loved ones are experiencing emotional distress, anxiety, or mental health challenges, professional
  help can make a difference.
  Book an appointment with our Psychiatry specialists today and take the first step toward mental well-being.</p>
  </div>
<!-- DOCTOR CARDS -->
<div class="cards">


  <div class="card">
    <img src="doc1.jpeg">
    <h3 class="doca">Dr. Arham Mustak</h3>
    <p>Psychiatrist</p>
    <span>⭐ 4.9 (350+ Reviews)</span>
    <button  class="formLink" onclick="goToForm(this)">Book Now</button>
  </div>

  <div class="card">
    <img src="doc2.jpeg">
    <h3 class="doca">Dr. Muqshith Ahamed</h3>
    <p>Psychiatrist</p>
    <span>⭐ 4.9 (350+ Reviews)</span>
    <button  class="formLink" onclick="goToForm(this)">Book Now</button>
  </div>

  <div class="card">
    <img src="doc3.jpeg">
    <h3 class="doca">Dr. Munsif Ahamed</h3>
    <p>Psychiatrist</p>
    <span>⭐ 4.9 (350+ Reviews)</span>
    <button  class="formLink" onclick="goToForm(this)">Book Now</button>
  </div>

  <div class="card">
    <img src="doc4.jpeg">
    <h3 class="doca">Dr.Mohamed Sahdan </h3>
    <p>Psychiatrist</p>
    <span>⭐ 4.9 (350+ Reviews)</span>
    <button  class="formLink" onclick="goToForm(this)">Book Now</button>
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

<script>
    function goToForm(button){
      const doctorName =button.parentElement.querySelector(".doca").innerText;
      window.location.href="booking.php?doctor="+encodeURIComponent(doctorName);

    }
    
  </script>
</body>

</html>