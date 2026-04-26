let isProfileEditing = false;


function updateTime() {
    const now = new Date();

    let hours = now.getHours();
    let minutes = now.getMinutes();
    let seconds = now.getSeconds();

    let ampm = hours >= 12 ? "PM" : "AM";
    hours = hours % 12 || 12;

    hours = hours < 10 ? "0" + hours : hours;
    minutes = minutes < 10 ? "0" + minutes : minutes;
    seconds = seconds < 10 ? "0" + seconds : seconds;

    const timeString = `${hours}:${minutes}:${seconds} ${ampm}`;
    document.getElementById("time_div").textContent = timeString;
}

setInterval(updateTime, 1000);
updateTime();



const mainContent = document.getElementById("main_content");

// Dashboard
// Dashboard Section
document.getElementById("dashboardBtn").onclick = function () {
    mainContent.innerHTML = `
        <div class="dashboard-wrapper">
            <div class="main-stats-area">
                <div class="section-header">
                    <h1>DOCTOR'S DASHBOARD</h1>
                </div>

                <div class="dash-row">
                    <div class="dash-col info-card">
                        <div class="card-header">
                            <h3>QUICK SCHEDULE</h3>
                            <select class="mini-select"><option>Status</option></select>
                        </div>
                        <p class="subtitle">Today's Appointments</p>
                        <div class="schedule-list">
                            <div class="sched-item blue">
                                <span>10:00 AM - John Doe (Check-up)</span>
                                <span class="tag urgent">Urgent</span>
                            </div>
                            <div class="sched-item green">
                                <span>11:00 AM - Mary Smith (Follow-up)</span>
                                <span class="tag urgent">Urgent</span>
                            </div>
                            <div class="sched-item red">
                                <span>12:00 PM - Michael Rodriguez</span>
                                <span class="tag urgent-red"><i class="fa-solid fa-circle-exclamation"></i> Urgent</span>
                            </div>
                        </div>
                    </div>

                    <div class="dash-col info-card">
                        <div class="card-header">
                            <h3>PATIENT OVERVIEW</h3>
                            <button class="more-btn">•••</button>
                        </div>
                        <div class="total-patients-bar">
                            <span>Total Patients: 21</span>
                            <span class="count">21</span>
                        </div>
                        <p class="subtitle">RECENT ACTIVITY</p>
                        <div class="activity-list">
                            <div class="act-item">
                                <img src="https://i.pravatar.cc/150?u=5" alt="user">
                                <div class="act-details">
                                    <h4>From Colleague</h4>
                                    <p>Latest our recents updates.</p>
                                </div>
                                <span class="act-time">20m ago</span>
                            </div>
                            <div class="act-item">
                                <img src="https://i.pravatar.cc/150?u=6" alt="user">
                                <div class="act-details">
                                    <h4>Sarah Johnson</h4>
                                    <p>Follow-up: udan colleagues.</p>
                                </div>
                                <span class="act-time">11m ago</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="profile-sidebar-area">
                <div class="info-card profile-preview">
                    <div class="card-header">
                        <h3>DOCTOR PROFILE</h3>
                        <button class="more-btn">•••</button>
                    </div>
                    <div class="profile-main">
                        <img src="https://i.pravatar.cc/150?u=doc" alt="Doctor" class="doc-img-large">
                        <h4>Dr. Muqshith Akbar</h4>
                        <p class="doc-id">ID: #8</p>
                        <div class="doc-meta">
                            <p><strong>Specialty:</strong> Cardiologist</p>
                            <p><strong>Affiliation:</strong> MedOra Healthcare</p>
                        </div>
                        <div class="doc-contact">
                            <p><i class="fa-solid fa-phone"></i> 0757702778</p>
                            <p><i class="fa-solid fa-envelope"></i> muqshith.akbar@gmail.com</p>
                        </div>
                    </div>
                </div>

                <div class="info-card next-appointment">
                    <div class="card-header">
                        <h3>NEXT APPOINTMENT</h3>
                        <button class="more-btn">•••</button>
                    </div>
                    <div class="next-user">
                        <img src="https://i.pravatar.cc/150?u=9" alt="Patient">
                        <div class="next-info">
                            <h4>Sarah Johnson</h4>
                            <p>Check-up</p>
                        </div>
                        <span class="next-time">1:30 PM</span>
                    </div>
                    <div class="next-note">
                        <p><strong>Note:</strong> I'm stay patients with due to today.</p>
                    </div>
                </div>
            </div>
        </div>
    `;
};

// Appointments
// Appointments Section
document.getElementById("appointmentsBtn").onclick = function () {
    mainContent.innerHTML = `
        <div class="appointments-page">
            <div class="section-header">
                <h1>Upcoming Appointments</h1>
                <p class="subtitle">You have 4 appointments scheduled for today.</p>
            </div>

            <div class="appointment-card info-card">
                <table class="appointment-table">
                    <thead>
                        <tr>
                            <th>Patient Name</th>
                            <th>Time</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="patient-info">
                                    <img src="https://via.placeholder.com/40" alt="Patient">
                                    <span>John Doe</span>
                                </div>
                            </td>
                            <td>10:30 AM</td>
                            <td>2026-04-25</td>
                            <td><span class="status-tag confirmed">Confirmed</span></td>
                            <td>
                                <button class="action-btn view" title="View Records"><i class="fa-solid fa-eye"></i></button>
                                <button class="action-btn cancel" title="Cancel"><i class="fa-solid fa-xmark"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="patient-info">
                                    <img src="https://via.placeholder.com/40" alt="Patient">
                                    <span>Jane Smith</span>
                                </div>
                            </td>
                            <td>11:45 AM</td>
                            <td>2026-04-25</td>
                            <td><span class="status-tag pending">Pending</span></td>
                            <td>
                                <button class="action-btn view"><i class="fa-solid fa-eye"></i></button>
                                <button class="action-btn cancel"><i class="fa-solid fa-xmark"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    `;
};

// Patients Section
document.getElementById("patientsBtn").onclick = function () {
    mainContent.innerHTML = `
        <div class="patients-page">
            <div class="section-header-row">
                <div>
                    <h1>Patient Directory</h1>
                    <p class="subtitle">Managing 1,240 total patients</p>
                </div>
                <div class="search-container">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="text" id="patientSearch" placeholder="Search by name or ID...">
                </div>
            </div>

            <div class="patients-grid">
                <div class="patient-card">
                    <div class="patient-card-top">
                        <img src="https://i.pravatar.cc/150?u=1" alt="Patient">
                        <div class="patient-brief">
                            <h4>Samantha Reed</h4>
                            <span>ID: #PT-8821</span>
                        </div>
                    </div>
                    <div class="patient-stats">
                        <div class="stat"><label>Age</label> 28</div>
                        <div class="stat"><label>Blood</label> O+</div>
                        <div class="stat"><label>Gender</label> Female</div>
                    </div>
                    <div class="patient-footer">
                        <p><i class="fa-solid fa-calendar-day"></i> Last Visit: 12 April 2026</p>
                        <button class="view-history-btn">View History</button>
                    </div>
                </div>

                <div class="patient-card">
                    <div class="patient-card-top">
                        <img src="https://i.pravatar.cc/150?u=2" alt="Patient">
                        <div class="patient-brief">
                            <h4>Michael Chen</h4>
                            <span>ID: #PT-8845</span>
                        </div>
                    </div>
                    <div class="patient-stats">
                        <div class="stat"><label>Age</label> 45</div>
                        <div class="stat"><label>Blood</label> B-</div>
                        <div class="stat"><label>Gender</label> Male</div>
                    </div>
                    <div class="patient-footer">
                        <p><i class="fa-solid fa-calendar-day"></i> Last Visit: 20 April 2026</p>
                        <button class="view-history-btn">View History</button>
                    </div>
                </div>

                <div class="patient-card">
                    <div class="patient-card-top">
                        <img src="https://i.pravatar.cc/150?u=3" alt="Patient">
                        <div class="patient-brief">
                            <h4>Emily Watson</h4>
                            <span>ID: #PT-8901</span>
                        </div>
                    </div>
                    <div class="patient-stats">
                        <div class="stat"><label>Age</label> 32</div>
                        <div class="stat"><label>Blood</label> A+</div>
                        <div class="stat"><label>Gender</label> Female</div>
                    </div>
                    <div class="patient-footer">
                        <p><i class="fa-solid fa-calendar-day"></i> Last Visit: 24 April 2026</p>
                        <button class="view-history-btn">View History</button>
                    </div>
                </div>
            </div>
        </div>
    `;
};

// Schedule
// Schedule Section
document.getElementById("scheduleBtn").onclick = function () {
    mainContent.innerHTML = `
        <div class="schedule-page">
            <div class="section-header-row">
                <div>
                    <h1>Work Schedule</h1>
                    <p class="subtitle">Set your availability for patient bookings.</p>
                </div>
                <button class="save-btn" onclick="alert('Schedule Updated!')">Publish Schedule</button>
            </div>

            <div class="week-selector">
    <div class="day-pill active" onclick="selectDay(this)">
        <span class="day-name">Mon</span>
        <span class="day-date">25</span>
    </div>
    <div class="day-pill" onclick="selectDay(this)">
        <span class="day-name">Tue</span>
        <span class="day-date">26</span>
    </div>
    <div class="day-pill" onclick="selectDay(this)">
        <span class="day-name">Wed</span>
        <span class="day-date">27</span>
    </div>
    <div class="day-pill" onclick="selectDay(this)">
        <span class="day-name">Thu</span>
        <span class="day-date">28</span>
    </div>
    <div class="day-pill" onclick="selectDay(this)">
        <span class="day-name">Fri</span>
        <span class="day-date">29</span>
    </div>
    <div class="day-pill" onclick="selectDay(this)">
        <span class="day-name">Sat</span>
        <span class="day-date">30</span>
    </div>
    <div class="day-pill" onclick="selectDay(this)">
        <span class="day-name">Sun</span>
        <span class="day-date">01</span>
    </div>
</div>

            <div class="timeline-container info-card">
                <div class="time-block">
                    <div class="time-label">08:00 AM</div>
                    <div class="schedule-item consultation">
                        <div class="item-main">
                            <h4>Morning Consultations</h4>
                            <p>General Checkups & OPD</p>
                        </div>
                        <div class="item-toggle">
                            <label class="switch">
                                <input type="checkbox" checked onchange="toggleSlot(this)">
                                <span class="slider round"></span>
                            </label>
                            <span class="status-label">Available</span>
                        </div>
                    </div>
                </div>

                <div class="time-block">
                    <div class="time-label">11:00 AM</div>
                    <div class="schedule-item surgery">
                        <div class="item-main">
                            <h4>Surgery Block</h4>
                            <p>Theater 02 - Specialized Procedures</p>
                        </div>
                        <div class="item-toggle">
                            <label class="switch">
                                <input type="checkbox" onchange="toggleSlot(this)">
                                <span class="slider round"></span>
                            </label>
                            <span class="status-label">Busy</span>
                        </div>
                    </div>
                </div>

                <div class="time-block">
                    <div class="time-label">02:00 PM</div>
                    <div class="schedule-item break">
                        <div class="item-main">
                            <h4>Lunch & Administration</h4>
                            <p>Private Office</p>
                        </div>
                        <div class="item-toggle">
                            <label class="switch">
                                <input type="checkbox" onchange="toggleSlot(this)">
                                <span class="slider round"></span>
                            </label>
                            <span class="status-label">Unavailable</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    `;
};

// Function to handle visual change
function toggleSlot(checkbox) {
    const parentItem = checkbox.closest('.schedule-item');
    const label = parentItem.querySelector('.status-label');

    if (checkbox.checked) {
        label.innerText = "Available";
        parentItem.style.opacity = "1";
        parentItem.style.filter = "grayscale(0%)";
    } else {
        label.innerText = "Unavailable";
        parentItem.style.opacity = "0.6";
        parentItem.style.filter = "grayscale(50%)";
    }
}

// Records
// Records Section


// Profile
document.getElementById("profileBtn").onclick = function () {
    mainContent.innerHTML = `
        <div class="profile-page">
            <div class="profile-header">
                <div class="header-banner">
                    <div class="profile-img-container">
                        <img src="../Home_page/logo.jpeg" id="mainProfilePic" alt="Doctor Profile">
                        <label for="imageUpload" class="upload-badge"><i class="fa-solid fa-camera"></i></label>
                        <input type="file" id="imageUpload" hidden accept="image/*">
                    </div>
                    <div class="header-info" id="headerCard">
                        <h2 class="view-mode">Dr. Muqshith Akbar</h2>
                        <input type="text" class="edit-mode header-input" value="Dr. Muqshith Akbar" style="display:none;">
                        
                        <p class="doc-id">ID: #49203</p>
                        
                        <p class="doc-tagline view-mode">Cardiologist | MedOra Hospital</p>
                        <input type="text" class="edit-mode header-input" value="Cardiologist | MedOra Hospital" style="display:none;">
                    </div>
                    <button class="edit-btn-top" onclick="toggleEdit('headerCard')"><i class="fa-solid fa-pen"></i> Edit Header</button>
                </div>
            </div>

            <div class="profile-grid">
                <div class="info-card" id="contactCard">
                    <div class="card-header">
                        <h3>Contact Information</h3>
                        <i class="fa-solid fa-pen edit-trigger" onclick="toggleEdit('contactCard')"></i>
                    </div>
                    <div class="input-group">
                        <i class="fa-solid fa-phone"></i>
                        <span class="view-mode">0757702778</span>
                        <input type="tel" class="edit-mode" value="0757702778" style="display:none;">
                    </div>
                    <div class="input-group">
                        <i class="fa-solid fa-envelope"></i>
                        <span class="view-mode">muqshith.akbar@gmail.com</span>
                        <input type="email" class="edit-mode" value="muqshith.akbar@gmail.com" style="display:none;">
                    </div>
                </div>

                <div class="info-card" id="summaryCard">
                    <div class="card-header">
                        <h3>Professional Summary</h3>
                        <i class="fa-solid fa-pen edit-trigger" onclick="toggleEdit('summaryCard')"></i>
                    </div>
                    <p class="view-mode">Experienced cardiologist focused on patient-centered care and modern surgical techniques.</p>
                    <textarea class="edit-mode" style="display:none;">Experienced cardiologist focused on patient-centered care and modern surgical techniques.</textarea>
                </div>

                <div class="info-card" id="personalCard">
                    <div class="card-header">
                        <h3>Personal Details</h3>
                        <i class="fa-solid fa-pen edit-trigger" onclick="toggleEdit('personalCard')"></i>
                    </div>
                    <div class="detail-row">
                        <div class="input-stack">
                            <label>Date of Birth</label>
                            <span class="view-mode">1990-05-15</span>
                            <input type="date" class="edit-mode" value="1990-05-15" style="display:none;">
                        </div>
                        <div class="input-stack">
                            <label>Nationality</label>
                            <span class="view-mode">Sri Lankan</span>
                            <input type="text" class="edit-mode" value="Sri Lankan" style="display:none;">
                        </div>
                    </div>
                </div>

                <div class="info-card" id="expertiseCard">
                    <div class="card-header">
                        <h3>Specialties & Expertise</h3>
                        <i class="fa-solid fa-pen edit-trigger" onclick="toggleEdit('expertiseCard')"></i>
                    </div>
                    <div class="view-mode">
                        <ul class="expertise-list">
                            <li>Echocardiography</li>
                            <li>Interventional Cardiology</li>
                        </ul>
                    </div>
                    <textarea class="edit-mode" style="display:none;">Echocardiography, Interventional Cardiology</textarea>
                </div>
            </div>

            <div class="form-actions" id="profileActions">
    <button class="update-btn" onclick="enableProfileEdit()">Update Profile</button>
</div>
        </div>
    `;
    setTimeout(() => {
        disableProfileEdit();
    }, 0);
};

// Settings
// Settings Section
document.getElementById("settingsBtn").onclick = function () {
    mainContent.innerHTML = `
        <div class="settings-page">
            <div class="section-header">
                <h1>Settings & Configuration</h1>
                <p class="subtitle">Manage your account preferences and system behavior.</p>
            </div>

            <div class="settings-grid">
                <div class="info-card">
                    <div class="card-header">
                        <h3><i class="fa-solid fa-shield-halved"></i> Login & Security</h3>
                    </div>
                    <div class="settings-content">
                        <div class="setting-item">
                            <div class="setting-info">
                                <h4>Change Password</h4>
                                <p>Last changed 3 months ago</p>
                            </div>
                            <button class="action-btn-outline">Update</button>
                        </div>
                        <div class="setting-item">
                            <div class="setting-info">
                                <h4>Two-Factor Authentication</h4>
                                <p>Add an extra layer of security</p>
                            </div>
                            <label class="switch">
                                <input type="checkbox">
                                <span class="slider round"></span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="info-card">
                    <div class="card-header">
                        <h3><i class="fa-solid fa-bell"></i> Notifications</h3>
                    </div>
                    <div class="settings-content">
                        <div class="setting-item">
                            <div class="setting-info">
                                <h4>Appointment Alerts</h4>
                                <p>Email and push notifications for new bookings</p>
                            </div>
                            <label class="switch">
                                <input type="checkbox" checked>
                                <span class="slider round"></span>
                            </label>
                        </div>
                        <div class="setting-item">
                            <div class="setting-info">
                                <h4>Patient Messages</h4>
                                <p>Receive alerts for new incoming messages</p>
                            </div>
                            <label class="switch">
                                <input type="checkbox" checked>
                                <span class="slider round"></span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="info-card">
                    <div class="card-header">
                        <h3><i class="fa-solid fa-display"></i> Display & Language</h3>
                    </div>
                    <div class="settings-content">
                        <div class="setting-item">
                            <div class="setting-info">
                                <h4>Dark Mode</h4>
                                <p>Switch between light and dark themes</p>
                            </div>
                            <label class="switch">
                                <input type="checkbox" id="darkModeToggle">
                                <span class="slider round"></span>
                            </label>
                        </div>
                        <div class="setting-item">
                            <div class="setting-info">
                                <h4>System Language</h4>
                            </div>
                            <select class="settings-select">
                                <option>English (US)</option>
                                <option>Spanish</option>
                                <option>French</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-actions">
                <button class="save-btn">Save All Changes</button>
            </div>
        </div>
    `;
};

// Logout
// Logout Logic
document.getElementById("logoutBtn").onclick = function () {
    // A simple, clean confirmation dialog
    const confirmLogout = confirm("Are you sure you want to logout of MedOra?");

    if (confirmLogout) {
        // This will redirect the user to your logout PHP script
        // which should clear the session and redirect to login.php
        window.location.href = "../backend/logout.php";
    }
};



function loadPage(title, content) {
    mainContent.innerHTML = `
        <h1>${title}</h1>
        <p>${content}</p>
    `;
}

window.onload = function () {
    document.getElementById("dashboardBtn").click();
};

// Function to handle the image change (Local only)
document.addEventListener('change', function (e) {
    if (e.target && e.target.id === 'imageUpload') {
        const file = e.target.files[0];
        if (file) {
            // Create a temporary URL for the selected file
            const reader = new FileReader();

            reader.onload = function (event) {
                const newImageUrl = event.target.result;

                // 1. Update the big profile picture in the card
                const mainPic = document.getElementById('mainProfilePic');
                if (mainPic) mainPic.src = newImageUrl;

                // 2. Update the small logo in the top right corner (upper_nav)
                const topNavPic = document.getElementById('profile_logo');
                if (topNavPic) topNavPic.src = newImageUrl;
            };

            reader.readAsDataURL(file);
        }
    }
});



function selectDay(element) {
    // Remove active class from all pills
    document.querySelectorAll('.day-pill').forEach(pill => pill.classList.remove('active'));
    // Add to the clicked one
    element.classList.add('active');
}

// profile function 
function enableProfileEdit() {
    isProfileEditing = true;

    // Show all edit icons
    document.querySelectorAll('.edit-trigger, .edit-btn-top').forEach(el => {
        el.style.display = 'block';
    });

    // Change buttons
    document.getElementById('profileActions').innerHTML = `
        <button class="save-btn" onclick="saveProfile()">Save Changes</button>
        <button class="cancel-btn" onclick="cancelProfileEdit()">Cancel</button>
    `;
}


// profile function 
function saveProfile() {
    // Trigger save for all cards
    document.querySelectorAll('.info-card, #headerCard').forEach(card => {
        const editElements = card.querySelectorAll('.edit-mode');
        if (editElements.length > 0 && editElements[0].style.display === 'block') {
            toggleEdit(card.id);
        }
    });

    disableProfileEdit();
}
// profile function 
function cancelProfileEdit() {
    isProfileEditing = false;

    // Reset ALL cards back to view mode
    document.querySelectorAll('.info-card, #headerCard').forEach(card => {
        const viewElements = card.querySelectorAll('.view-mode');
        const editElements = card.querySelectorAll('.edit-mode');

        viewElements.forEach(v => v.style.display = 'block');
        editElements.forEach(e => e.style.display = 'none');

        const icon = card.querySelector('.fa-check');
        if (icon) icon.classList.replace('fa-check', 'fa-pen');
    });

    disableProfileEdit(); // hide icons + reset button
}
// profile function 
function disableProfileEdit() {
    isProfileEditing = false;

    // Hide edit icons properly
    document.querySelectorAll('.edit-trigger, .edit-btn-top').forEach(el => {
        el.style.display = 'none';
    });

    // Restore Update button
    document.getElementById('profileActions').innerHTML = `
        <button class="update-btn" onclick="enableProfileEdit()">Update Profile</button>
    `;
}
// profile function 
function toggleEdit(cardId) {
    if (!isProfileEditing) return; // 🚫 block editing

    const card = document.getElementById(cardId);
    const viewElements = card.querySelectorAll('.view-mode');
    const editElements = card.querySelectorAll('.edit-mode');
    const icon = card.querySelector('.fa-pen, .fa-check');

    const isEditing = editElements[0].style.display === 'block';

    if (isEditing) {
        viewElements.forEach((view, index) => {
            if (editElements[index].tagName === 'TEXTAREA' && view.tagName === 'P') {
                view.textContent = editElements[index].value;
            } else if (editElements[index].classList.contains('header-input')) {
                view.textContent = editElements[index].value;
            } else if (view.tagName === 'SPAN') {
                view.textContent = editElements[index].value;
            }
            view.style.display = 'block';
        });

        editElements.forEach(edit => edit.style.display = 'none');
        if (icon) icon.classList.replace('fa-check', 'fa-pen');

    } else {
        viewElements.forEach(view => view.style.display = 'none');
        editElements.forEach(edit => edit.style.display = 'block');
        if (icon) icon.classList.replace('fa-pen', 'fa-check');
    }
}