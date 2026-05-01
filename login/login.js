

document.getElementById("myform").addEventListener("submit", function (e) {
    
    document.getElementById("nameError").textContent = "";
    document.getElementById("passwordError").textContent = "";

    const email = document.getElementById("name").value.trim();
    const password = document.getElementById("password").value;

    let valid = true;

    
    if (!email.includes("@")) {
        document.getElementById("nameError").textContent = "Enter a valid email";
        valid = false;
    }

    if (password.length < 6) {
        document.getElementById("passwordError").textContent = "Password must be at least 6 characters";
        valid = false;
    }

    
    if (!valid) {
        e.preventDefault();
    }
});

function roleSingIn() {
    const roleSelect = document.querySelector('.role_select');
    const selectedRole = roleSelect.value;

    if (selectedRole === 'user') {
      window.location.href = '../login/login.php';
    } 
    else if (selectedRole === 'doctor') {
      window.location.href = '../login/doctor_login.php';
    }
  }

