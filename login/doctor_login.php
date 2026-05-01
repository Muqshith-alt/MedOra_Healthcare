<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MedOra-Login</title>
    <link rel="stylesheet" href="login.css" />
    <link rel="icon" href="C:\Users\TECH YARD\Pictures\heart ai.jpeg" />
  </head>
  <body>
    <div class="container">
      <h1>MedOra</h1>
      <img class="image" src="loginBG.jpg" alt="Hospital" />
    </div>

    <div class="login">
      <div class="Right">
        <h1>Welcome to MedOra..</h1>
        <hr />
        <img class="sidepic" src="side pic.jpeg" alt="Side Image" /><br /><br />
        <hr />
        <p class="footer">
          © 2026 MedOra Management System <br />
          MedOrahealthcare@gmail.com <br />
          Contact: 0756550885
        </p>
      </div>

      <div class="left">
        <h1>Join with our Healthcare..</h1><br><br>
       

        <form id="myform" action="../backend/doctor_login_logic.php" method="post">
          <div class="group">
             
             <label for="name">Enter Your Email Address</label>
            <input name="email" class="edit" type="text" id="name" placeholder="Enter Your Email" required />
           
            <div class="error" id="nameError"></div>
          </div>

          

          <div class="group">
            <label for="password">Enter Password</label>
            <input name="password" class="edit" type="password" id="password" placeholder="Enter Password" required />
            
            <div class="error" id="passwordError"></div>
          </div>
           
          <button type="submit">Login</button><br>
          <p class="reg">Don't Have an account?</p>
          <a href="../signup/Doctor_SignUp.php"><button type="button" class="btn1" onclick="display()" >Creat Account</button></a>

          <div id="successMsg" class="success"></div>
        </form>
      </div>
    </div>

    
  </body>
</html>
<script src="login.js" ></script>