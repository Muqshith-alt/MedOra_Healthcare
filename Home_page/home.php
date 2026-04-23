<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MedOra</title>
    <link rel="icon" href="C:\Users\TECH YARD\Pictures\heart ai.jpeg" />
    <link rel="stylesheet" href="style_dashboard.css" />
    <script>
      function scroll_to_top() {
        window,
          scrollTo({
            top: 0,
            behavior: 'smooth'
          })
      }
    </script>
  </head>
  <body>
    <div id="bg_img1_div">
      <div id="nav_container">
        <img id="logo_img" src="logo.jpeg" alt="" height="100px" width="100px" />

    <!-- <div class="nav_item_div">
          <a href="#bg_img2_div">ABOUT US</a>
    <div id="nav_container">
        <img id="logo_img" src="logo.jpeg" alt="" height="100px" width="100px"> -->
        
        <div  class="nav_item_div"><a href="#bg_img2_div">ABOUT US</a></div>
        <div  class="nav_item_div"><a href="#bg_img3_div">OUR SERVICES</a></div>
        <div  class="nav_item_div"><a href="#bg_img4_div">CONSULT A DOCTOR</a></div>
        <div  class="nav_item_div"><a href="#bg_img5_div">CONTACT US</a></div>
        <div  class="nav_item_div"><a href="#last_bar">FEEDBACK</a></div>
        <div   id="signin_btn">
            
            <div id="sign_btn_ani_border"></div>
          <!--<a href="../login/login.php"><input type="button" value="SIGN IN" style="font-weight: bolder;"></a>-->
          <button style="font-weight: bolder;" onclick="roleSingIn()">SIGN IN</button>
        </div>
        
      </div>

      <input class="role" type="button" value="Signing in as" />
      <select name="roles" class="role_select" id="role_select_id">
        <option value="user">User</option>
        <option value="admin">Admin</option>
        <option value="doctor">Doctor</option>
      </select>
      <pre id="welcome_pre">
        <span id="medora_span">Medora!!</span>
        Smart Solutions for a Healthier You
      </pre>
    </div>

    <div id="bg_img2_div" ondblclick="scroll_to_top()">
      <pre>
        <span style="font-weight: bolder; color: rgb(53, 255, 27); font-size: 40px;">Caring</span>
        <span style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: 40px; ">Beyond Treatment</span>

        At Medora Hospital, we believe that healthcare is

        more than just treatment—it is a journey toward

        wellness. Founded on the principles of innovation

        and integrity, Medora brings together world-class

        specialists and cutting-edge technology to provide

        personalized care for every patient. From

        advanced diagnostics to compassionate post-operative

        support, we are dedicated to being your lifelong

        partner in health.
      </pre>
    </div>
    <div id="bg_img3_div" ondblclick="scroll_to_top()">
      <div>
        <p>At Medora, we provide a comprehensive range of healthcare services designed to meet the diverse needs of our community. From preventative screenings to complex surgical interventions, our patient-centric approach ensures you receive the highest standard of medical excellence in a supportive and healing environment.</p>

        <h4>Key Services:</h4>
        <ul>
          <li>Emergency Care: 24/7 rapid response for critical medical situations.</li>
          <li>Specialized Surgery: Advanced minimally invasive and robotic-assisted procedures.</li>
          <li>Diagnostic Imaging: High-precision MRI, CT scans, and digital X-rays.</li>
          <li>Online Booking: Schedule appointments instantly through our digital portal.</li>
          <li>Personalized Wellness: Tailored health plans and preventative check-ups.</li>
        </ul>
      </div>

      <img src="service_img.jpg" alt="" />
    </div>

    <div id="bg_img4_div" ondblclick="scroll_to_top()">
      <img src="booking_bg.jpeg" alt="" />

      <div>
        <h3>Connecting with expert medical professionals at Medora is simple and secure. To ensure your health records are accurately maintained and kept private, we require all patients to access our consultation portal through a secure account. Once logged in, you can browse our directory of world-class specialists, check real-time availability, and secure your appointment with just a few clicks.</h3>

        <h4>Steps to Consult:</h4>

        <ul>
          <li>Secure Access: Click the SIGN IN button to access your portal.</li>
          <li>New Patients: Don't have an account? Select SIGN UP to create your medical profile in seconds.</li>
          <li>Doctor Directory: Head to your personalized Dashboard to view detailed doctor profiles and specialties.</li>
          <li>Live Availability: See which specialists are currently available for immediate or scheduled consultations.</li>
          <li>Instant Booking: Select your preferred time slot and confirm your booking instantly.</li>
        </ul>
      </div>
    </div>

    <div id="bg_img5_div" ondblclick="scroll_to_top()">
      <img src="contactUs_bg.jpeg" alt="" />
      <div id="contactUs_div">
        <pre>
          📍 75,Braybrooke Place Colombo 02 Sri Lanka.

          🖨️+94 11 4725655

          📞+94 11 4724585, +94 11 4724586

          <a href="mailto:muqshithmohamed222@gmail.com">✉️info@medora.com</a>
        </pre>
      </div>
    </div>
    <div id="last_bar" ondblclick="scroll_to_top()">
      <h4 style="text-align:center; padding-top: 30px;">
        <a href="" style="margin-right: 20px; text-decoration: none; color:white;">facebook</a>
        <a href="" style="margin-right: 20px; text-decoration: none; color:white;">instagram</a>
        <a href="" style="margin-right: 20px; text-decoration: none; color:white;">linkedin</a>
        <a href="" style="margin-right: 20px; text-decoration: none; color:white;">mail</a>
      </h4>
      <pre style="font-size: smaller; text-align: center;">@2026 Medora holdings PLC. All rights reserved. | Cookie Policy | Data Protection Notice Web Desing and Development by PROGRAMIZE</pre>
    </div>
  </body>
</html>
<script src="../login/login.js">
  
</script>