<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Medora | Book Appointment</title>
  <link rel="stylesheet" href="home.css">
</head>
<body>
  <div>
    <h1>Neurology </h1>
  </div>
  <div class="about">
   <h2> Neurology at MedOra</h2>
MedOra brings a specialized approach to the complex world of the human nervous system. Our Neurology department focuses on the diagnosis and treatment of disorders affecting the brain, spinal cord, and peripheral nerves, ensuring that our patients receive cutting-edge neurological care.

<h3>Understanding Neurology</h3> 

Neurology is the medical specialty that deals with the structural and functional disorders of the nervous system. At MedOra, we treat a wide array of conditions that can affect movement, speech, memory, and physical sensation.



<h3> Conditions We Treat</h3>
<ul>

<li>Our experts at MedOra manage both acute and chronic neurological conditions, including:</li>

<li>Stroke & Vascular Neurology: Rapid intervention and rehabilitation for stroke patients.</li>

<li>Epilepsy & Seizures: Advanced monitoring and medication management.</li>

<li>Neurodegenerative Diseases: Compassionate care for Alzheimer’s, Parkinson’s, and Dementia.</li>

<li>Headache & Migraine: Specialized clinics for chronic pain and cluster headache management.</li>

<li>Neuromuscular Disorders: Treatment for Multiple Sclerosis (MS) and Myasthenia Gravis.</li></ul>

<h3> Advanced Diagnostics at MedOra</h3>
<ul>
<li>To provide accurate treatment, MedOra utilizes the latest in neuro-diagnostic technology:</li>

<li>MRI & CT Imaging: High-resolution scans to detect tumors, strokes, or structural damage.</li>

<li>EEG (Electroencephalogram): Monitoring brain wave activity to diagnose epilepsy.</li>

<li>EMG (Electromyography): Testing nerve and muscle function for weakness or numbness.</li>

<li>Sleep Studies: Diagnosing neurological sleep disorders like apnea or narcolepsy.</li>
</ul>
<h3> The MedOra Advantage</h3>
<ul>
<li>Why trust MedOra with your neurological health?</li>

<li>Integrated Care Teams: Our neurologists work closely with neurosurgeons, physiotherapists, and psychologists for holistic healing.</li>

<li>Neuro-Rehabilitation: Specialized post-stroke and injury recovery programs to help patients regain independence.</li>

<li>Tele-Neurology: Virtual consultations for routine follow-ups, making expert care accessible from your home via the MedOra App.</li>

<li>Precision Medicine: Tailored treatment plans based on genetic profiling and specific patient history.</li>
</ul>
<h3> When to Consult a MedOra Neurologist</h3>
<ul>
<li>If you or a loved one experience any of the following, early intervention is key:</li>

<li>Chronic or unusually severe headaches.</li>

<li>Sudden numbness or weakness (especially on one side of the body).</li>

<li>Frequent dizziness or loss of balance.</li>

<li>Persistent memory loss or confusion.</li>

<li>Unexplained tremors or muscle stiffness.</li></ul>

  </div>
    
<div class="cards">

      <div class="card">
        <img src="doc1.jpeg">
        <h3 class="doca">Dr. Arham Mustak</h3>
        <p>Neurology Expert</p>
        <span>⭐ 4.9 (350+ Reviews)</span>
        <button  class="formLink" onclick="goToForm(this)">Book Now</button>
      </div>

      <div class="card">
        <img src="doc2.jpeg">
        <h3 class="doca">Dr.  Muqshith Ahamed</h3>
        <p>Neurology Expert</p>
        <span>⭐ 4.9 (350+ Reviews)</span>
        <button  class="formLink" onclick="goToForm(this)">Book Now</button>
      </div>

      <div class="card">
        <img src="doc3.jpeg">
        <h3 class="doca">Dr. Munsif Ahamed</h3>
        <p>Neurology Expert</p>
        <span>⭐ 4.9 (350+ Reviews)</span>
        <button  class="formLink" onclick="goToForm(this)">Book Now</button>
      </div>

      <div class="card">
        <img src="doc4.jpeg">
        <h3 class="doca">Dr.Mohamed Sahdan </h3>
        <p>Neurology Expert</p>
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