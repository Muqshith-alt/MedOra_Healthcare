document.getElementById("myform").addEventListener("submit", function (e) {
    e.preventDefault();

    


    document.getElementById("nameError").textContent = "";
    document.getElementById("emailError").textContent = "";
    document.getElementById("mobError").textContent = "";
    document.getElementById("passwordError").textContent = "";
    document.getElementById("confirmError").textContent = "";
    document.getElementById("successMsg").textContent = "";

    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const mob = document.getElementById("mob").value.trim();
    const password = document.getElementById("password").value;
    const confirmPassword = document.getElementById("confirmPassword").value;

    localStorage.setItem("medoraEmail", email);
    localStorage.setItem("medoraPassword", password);

    let valid = true;

    if (name.length < 3) {
        document.getElementById("nameError").textContent = "Name must be at least 3 characters";
        document.getElementById("name").classList.add("error-input");
        valid = false;
    } else {
        document.getElementById("name").classList.remove("error-input");
    }


    if (!email.includes("@")) {
        document.getElementById("emailError").textContent = "Enter a valid email";
        document.getElementById("email").classList.add("error-input");
        valid = false;
    } else {
        document.getElementById("email").classList.remove("error-input");
    }

    if (!/^[0-9]{10}$/.test(mob)) {
        document.getElementById("mobError").textContent = "Mobile must be 10 digits";
        document.getElementById("mob").classList.add("error-input");
        valid = false;
    } else {
        document.getElementById("mob").classList.remove("error-input");
    }


    if (password.length < 6) {
        document.getElementById("passwordError").textContent = "Password must be at least 6 characters";
        document.getElementById("password").classList.add("error-input");
        valid = false;
    } else {
        document.getElementById("password").classList.remove("error-input");
    }

    if (password !== confirmPassword) {
        document.getElementById("confirmError").textContent = "Passwords do not match";
        document.getElementById("confirmPassword").classList.add("error-input");
        valid = false;
    } else {
        document.getElementById("confirmPassword").classList.remove("error-input");
    }

    
    if (valid) {
        //alert("Registration Successful 🎉")
        //this.reset();
        this.submit();
    }
   // Muqshith added
   if (!valid) {
        e.preventDefault(); 
    }


    

});


function showSuggestions(value) {
    if (value.length === 0) {
        document.getElementById("suggestions").innerHTML = "";
        return;
    }

    fetch("../backend/search_cat.php?q=" + value)
        .then(response => response.text())
        .then(data => {
            document.getElementById("suggestions").innerHTML = data;
        });
}

function selectItem(value) {
    document.getElementById("specialization").value = value;
    document.getElementById("suggestions").innerHTML = "";
}