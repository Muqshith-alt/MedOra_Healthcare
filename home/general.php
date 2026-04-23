<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Medora | Book Appointment</title>
  <link rel="stylesheet" href="home.css">
</head>
<body>
    <div><h1>General Physician</h1></div>
    <div class="about">
       <h2> General Physician Services at MedOra</h2>
At MedOra, our General Physicians (Internal Medicine Specialists) serve as the first point of contact for your health. We focus on comprehensive, primary care—diagnosing, treating, and preventing a wide range of adult health conditions. We are your partners in building a foundation for long-term wellness.

<h3> The Gateway to Your Health</h3>

A General Physician at MedOra manages everything from common viral fevers to the long-term management of chronic illnesses. Our goal is to provide holistic care rather than just treating symptoms.

<h3> Core Areas of Care</h3>

<ul>

<li>Acute Illness Management: Fast relief for flu, infections, respiratory issues, and digestive upsets.</li>

<li>Chronic Disease Management: Long-term care for Hypertension (High BP), Diabetes, and Thyroid disorders.</li>

<li>Lifestyle Diseases: Addressing obesity, high cholesterol, and stress-related ailments.</li>

<li>Preventive Screenings: Comprehensive health check-ups to catch potential issues before they become serious.</li>

<li>Immunizations: Essential vaccinations for adults, including flu shots and travel vaccines.</li>
</ul>

<h3> The MedOra Advantage</h3>
<ul>
<li>Choosing MedOra for your primary care means experiencing healthcare that is smart and accessible:</li>

<li>Unified Health Records: Your medical history is securely stored on the MedOra platform, allowing our doctors to track your health trends over time.</li>

<li>Seamless Referrals: If your condition requires a specialist (like a Neurologist or Cardiologist), our physicians coordinate the transition within the MedOra network for a hassle-free experience.</li>

<li>24/7 Virtual Access: Not every health concern needs an in-person visit. Use the MedOra App for instant teleconsultations.</li>

<li>Pharmacy & Lab Integration: Prescriptions and lab tests are synced instantly, with home sample collection and medicine delivery options.</li>
</ul>
<h3> Diagnostic Excellence</h3>
<ul>
<li>To ensure an accurate diagnosis, our physicians utilize MedOra’s advanced lab facilities:</li>

<li>Full Body Profiles: Blood counts, liver/kidney function tests, and lipid profiles.</li>

<li>Cardiac Screening: ECG and Blood Pressure monitoring.</li>

<li>Metabolic Testing: HbA1c and blood glucose monitoring for diabetes management.</li></ul>

<h3> When to Visit a MedOra General Physician?</h3>
<ul>
<li>We recommend booking a consultation for:</li>

<li>Persistent fever, fatigue, or body aches.</li>

<li>Managing lifestyle-related conditions (Diabetes/BP).</li>

<li>Annual health check-ups.</li>

<li>Expert guidance on nutrition and preventive lifestyle changes.</li></ul>
    </div>
     <div class="cards">
      

      <div class="card">
        <img src="doc1.jpeg">
        <h3 class="doca">Dr. Arham Mustak</h3>
        <p>General Physician</p>
        <span>⭐ 4.9 (350+ Reviews)</span>
        <button  class="formLink" onclick="goToForm(this)">Book Now</button>
      </div>

      <div class="card">
        <img src="doc2.jpeg">
        <h3 class="doca">Dr.  Muqshith Ahamed</h3>
        <p>General Physician</p>
        <span>⭐ 4.9 (350+ Reviews)</span>
        <button  class="formLink" onclick="goToForm(this)">Book Now</button>
      </div>

      <div class="card">
        <img src="doc3.jpeg">
        <h3 class="doca">Dr. Munsif Ahamed</h3>
        <p>General Physician</p>
        <span>⭐ 4.9 (350+ Reviews)</span>
        <button  class="formLink" onclick="goToForm(this)">Book Now</button>
      </div>

      <div class="card">
        <img src="doc4.jpeg">
        <h3 class="doca">Dr.Mohamed Sahdan </h3>
        <p>General Physician</p>
        <span>⭐ 4.9 (350+ Reviews)</span>
        <button  class="formLink" onclick="goToForm(this)">Book Now</button>
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

<script>
    function goToForm(button){
      const doctorName =button.parentElement.querySelector(".doca").innerText;
      window.location.href="booking.php?doctor="+encodeURIComponent(doctorName);

    }
    
  </script>
</body>
</html>