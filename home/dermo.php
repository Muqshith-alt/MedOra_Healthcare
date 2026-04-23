<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Medora | Book Appointment</title>
  <link rel="stylesheet" href="home.css">
</head>
<p>

<div>
  <h1>Dermatology</h1>
</div>
<div class="about">
   <h2>Dermatology at MedOra</h2>
At MedOra, we believe that skin health is a reflection of overall wellness. Our Dermatology department provides expert care for the body’s largest organ, offering specialized treatments for the skin, hair, and nails. From clinical medical conditions to advanced aesthetic enhancements, MedOra is your destination for comprehensive skin care.



<h3> Clinical Dermatology</h3>
<ul>
<li>We diagnose and treat a wide range of medical skin conditions that affect daily comfort and confidence:</li>

<li>Acne & Scar Management: Personalized protocols for persistent acne and post-inflammatory scarring.</li>

<li>Eczema & Psoriasis: Advanced biological therapies and topical treatments for chronic inflammatory conditions.</li>

<li>Skin Infections: Expert management of fungal, bacterial, and viral skin infections.</li>

<li>Skin Cancer Screening: Early detection and biopsy services for moles and suspicious lesions.</li></ul>

<h3> Cosmetic & Aesthetic Services</h3>

<ul>
<li>Anti-Aging Treatments: Targeted solutions including Botox, dermal fillers, and chemical peels.</li>

<li>Laser Technology: State-of-the-art lasers for permanent hair reduction, pigmentation removal, and skin resurfacing.</li>

<li>HydraFacials & Medi-Facials: Medical-grade skin rejuvenation for deep cleansing and hydration.</li>

<li>Hair Restoration: Advanced treatments for thinning hair and alopecia, including PRP (Platelet-Rich Plasma) therapy.</li>
</ul>
<h3> The MedOra Skin Advantage</h3>
<ul>
<li>Why choose MedOra for your dermatological needs?</li>

<li>Board-Certified Experts: Our team consists of highly experienced dermatologists and aesthetic specialists.</li>

<li>Teledermatology: Upload photos and consult with our experts via the MedOra App for quick diagnosis of rashes or minor skin issues.</li>

<li>MedOra Pharmacy Integration: Access to dermatologically tested skincare products and specialized medicated creams directly through our network.</li>

<li>Advanced Technology: We use the latest FDA-approved equipment to ensure safety and visible results.</li>
</ul>
<h3>Diagnostic Tools at MedOra</h3>
<ul>
<li>Dermoscopy: A non-invasive tool to examine skin lesions with high magnification.</li>
<li>Skin Biopsy: Precise sampling for laboratory analysis to confirm complex diagnoses.</li>

<li>Allergy Patch Testing: Identifying external triggers for contact dermatitis.</li>
</ul>
<h3>Daily Skin Care Tips from MedOra</h3>
<ul>
<li>Sun Protection: Always wear a broad-spectrum SPF 30+ sunscreen, even indoors.</li>

<li>Hydration: Drink plenty of water and use a moisturizer suited for your skin type.</li>

<li>Early Detection: Monitor your skin for any changes in the shape or color of moles.</li>
</ul>

    

  </div>

<div class="cards">


  <div class="card">
    <img src="doc1.jpeg">
    <h3 class="doca">Dr. Arham Mustak</h3>
    <p>Dermatologist</p>
    <span>⭐ 4.9 (350+ Reviews)</span>
    <button  class="formLink" onclick="goToForm(this)">Book Now</button>
  </div>

  <div class="card">
    <img src="doc2.jpeg">
    <h3 class="doca">Dr. Muqshith Ahamed</h3>
    <p>Dermatologist</p>
    <span>⭐ 4.9 (350+ Reviews)</span>
    <button  class="formLink" onclick="goToForm(this)">Book Now</button>
  </div>

  <div class="card">
    <img src="doc3.jpeg">
    <h3 class="doca">Dr. Munsif Ahamed</h3>
    <p>Dermatologist</p>
    <span>⭐ 4.9 (350+ Reviews)</span>
    <button  class="formLink" onclick="goToForm(this)">Book Now</button>
  </div>

  <div class="card">
    <img src="doc4.jpeg">
    <h3 class="doca">Dr.Mohamed Sahdan </h3>
    <p>Dermatologist</p>
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