<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MedOra-Signup</title>
    <link rel="stylesheet" href="signup.css" />
    <link rel="icon" href="C:\Users\TECH YARD\Pictures\heart ai.jpeg" />
  </head>
  <body>
    <div class="container">
      <h1>MedOra</h1>
      <img class="image" src="signUpBG.jpg" alt="Hospital" />
    </div>

    <div class="signup">
      <div class="left">
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

      <div class="right">
        <h1>Join with our Healthcare..</h1>
        <p class="login">
          <!--<a href="../login/login.php">Already Have Account?</a> -->
          <a href="../login/login.php">Already Have Account?</a>
        </p>

        <form id="myform" action="../backend/signUp_logic.php" method="POST">
          <div class="group">
            <input name="name" class="edit" type="text" id="name" placeholder="Enter Your Name" required />
            <label for="name">Enter Your Name</label>
            <div class="error" id="nameError"></div>
          </div>

          <div class="group">
            <input name="email" class="edit" type="email" id="email" placeholder="Enter Your Email" required />
            <label for="email">Enter Your Email</label>
            <div class="error" id="emailError"></div>
          </div>

          <div class="group">
            <input name="mob" class="edit" type="tel" id="mob" placeholder="Enter Your Mobile No" required />
            <label for="mob">Enter Your Number</label>
            <div class="error" id="mobError"></div>
          </div>

          <div class="group">
            <input name="password"  class="edit" type="password" id="password" placeholder="Enter Password" required />
            <label for="password">Enter Password</label>
            <div class="error" id="passwordError"></div>
          </div>

          <div class="group">
            <input  class="edit" type="password" id="confirmPassword" placeholder="Re-Enter Password" required />
            <label for="confirmPassword">Re-Enter Password</label>
            <div class="error" id="confirmError"></div>
          </div>

          <button type="reset" class="btn1">Reset</button>
          <button type="submit">Register</button>

          <div id="successMsg" class="success"></div>
        </form>
      </div>
    </div>

    <script src="signUp.js"></script>

  </body>
</html>
