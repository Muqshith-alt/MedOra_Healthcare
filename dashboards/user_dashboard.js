function updateTime() {
    const now = new Date();
    let hours = now.getHours();
    let minutes = now.getMinutes();
    let seconds = now.getSeconds();
    let ampm = hours >= 12 ? "PM" : "AM";

    hours = hours % 12 || 12;
    hours = (hours < 10 ? "0" : "") + hours;
    minutes = (minutes < 10 ? "0" : "") + minutes;
    seconds = (seconds < 10 ? "0" : "") + seconds;

    document.getElementById("time_div").textContent = `${hours}:${minutes}:${seconds} ${ampm}`;
}
setInterval(updateTime, 1000);
updateTime();

const mainContent = document.getElementById("main_content");

// Logic to swap content based on new requirements
document.getElementById("dashboardBtn").onclick = 
    (e) => loadPage("Overview", 
        "Welcome back! Here is your health summary.", e); 

document.getElementById("findDoctorBtn").onclick =
    (e) => loadPage("Find a Doctor", 
        "Search by specialty, location, or availability.", e);

document.getElementById("appointmentsBtn").onclick = 
    (e) => loadPage("My Appointments", 
        "View your upcoming visits and virtual consultation links.", e);

document.getElementById("profileBtn").onclick = 
    (e) => loadPage("My Profile", 
        "View and update your personal details, contact info, and health preferences.", e);

document.getElementById("billingBtn").onclick = 
    (e) => loadPage("Billing & Payments", 
        "Manage your invoices, insurance claims, and payment methods.", e);
        
document.getElementById("settingsBtn").onclick = 
    (e) => loadPage("Settings", 
        "Update your profile, change password, or notification preferences.", e);

document.getElementById("logoutBtn").onclick = () => {
    if(confirm("Are you sure you want to logout?")) {
        // Redirect to logout script or home
        window.location.href = "logout.php"; 
    }
};

/**
 * Loads content into the main area and updates active button state
 * @param {string} title 
 * @param {string} content 
 * @param {Event} event 
 */
function loadPage(title, content, event) {
    mainContent.innerHTML = `<h1>${title}</h1><p>${content}</p>`;
    
    // Update active class
    document.querySelectorAll('.nav-btn').forEach(btn => btn.classList.remove('active'));
    if (event) {
        event.currentTarget.classList.add('active');
    }
}

// Default page on load
window.onload = () => {
    loadPage("Overview", "Welcome back! Here is your health summary.");
};

// Function to toggle between View and Edit modes inside cards
function toggleEdit(cardId) {
    const card = document.getElementById(cardId);
    const viewElements = card.querySelectorAll('.view-mode');
    const editElements = card.querySelectorAll('.edit-mode');

    const isEditing = editElements[0].style.display === 'block';

    viewElements.forEach(el => el.style.display = isEditing ? 'block' : 'none');
    editElements.forEach(el => el.style.display = isEditing ? 'none' : 'block');
}