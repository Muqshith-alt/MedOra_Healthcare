<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Medora | Book Appointment</title>
  <link rel="stylesheet" href="home.css">
</head>
<p>

<div>
  <h1>Ophthalmology</h1>
</div>
<div class="about">
   <h2> Ophthalmology at MedOra</h2>
At MedOra, we redefine eye care by combining clinical excellence with a seamless healthcare experience. Our Ophthalmology department is dedicated to preserving and enhancing your vision through a comprehensive range of diagnostic, medical, and surgical services.

<h3>Comprehensive Eye Care Services</h3>
<ul>
<li>MedOra provides a full spectrum of ophthalmic solutions tailored to every age group:</li>

<li>Advanced Diagnostics: Utilizing state-of-the-art equipment for OCT scans, visual field testing, and digital retinal imaging.</li>

<li>Surgical Innovations: Specialized centers for Micro-incision Cataract Surgery (MICS) and laser-based vision correction (LASIK).</li>

<li>Condition Management: Expert care for chronic issues such as Glaucoma, Dry Eye Syndrome, and Hypertensive Retinopathy.</li>

<li>Pediatric Vision: Dedicated screening for children to treat "lazy eye" (Amblyopia) and early-onset refractive errors.</li>
</ul>
<h3>The MedOra Advantage</h3>
<ul>
<li>What sets MedOra apart in the healthcare landscape is our commitment to patient-centric innovation:</li>

<li>The MedOra Network: We connect you with the most highly skilled ophthalmologists and surgeons in the region.</li>

<li>Digital Integration: Access your eye test results, prescriptions, and follow-up schedules instantly through the MedOra Digital Portal.</li>

<li>Holistic Recovery: For surgical patients, MedOra offers post-operative care coordination, ensuring your recovery is monitored even after you leave the clinic.</li>

<li>MedOra Pharmacy Access: Immediate availability of specialized ophthalmic medications and premium eyewear solutions.</li>
</ul>
<h3></h3>Specialized Focus Areas
<ul>
<li>Feature	MedOra Solution
<li>Vision Correction	Custom LASIK and ICL procedures for a spectacle-free life.</li>
<li>Retinal Health	Specialized treatment for Diabetic Retinopathy and Macular issues.</li>
<li>Emergency Eye Care	Rapid response for trauma, infections, or sudden vision changes.</li>
<li>Wellness Programs	Corporate "Blue Light" screening for digital eye strain.</li></ul>
<h3> Our Vision for Your Sight</h3>

MedOra is more than just a healthcare provider; we are your partner in long-term wellness. Our mission is to make world-class ophthalmology accessible, affordable, and efficient, ensuring that every patient sees their future clearly.
</div>

<div class="cards">


  <div class="card">
    <img src="doc1.jpeg">
    <h3 class="doca">Dr. Arham Mustak</h3>
    <p>Ophthalmologist</p>
    <span>⭐ 4.9 (350+ Reviews)</span>
    <button  class="formLink" onclick="goToForm(this)">Book Now</button>
  </div>

  <div class="card">
    <img src="doc2.jpeg">
    <h3 class="doca">Dr. Muqshith Ahamed</h3>
    <p>Ophthalmologist</p>
    <span>⭐ 4.9 (350+ Reviews)</span>
    <button  class="formLink" onclick="goToForm(this)">Book Now</button>
  </div>

  <div class="card">
    <img src="doc3.jpeg">
    <h3 class="doca">Dr. Munsif Ahamed</h3>
    <p>Ophthalmologist</p>
    <span>⭐ 4.9 (350+ Reviews)</span>
    <button  class="formLink" onclick="goToForm(this)">Book Now</button>
  </div>

  <div class="card">
    <img src="doc4.jpeg">
    <h3 class="doca">Dr.Mohamed Sahdan </h3>
    <p>Ophthalmologist</p>
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