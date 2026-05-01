function updateTime() {
    const now = new Date();
    const timeString = now.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit', second: '2-digit', hour12: true });
    const timeDiv = document.getElementById("time_div");
    if (timeDiv) timeDiv.textContent = timeString;
}
setInterval(updateTime, 1000);
updateTime();

const mainContent = document.getElementById("main-content");

function loadPage(title, content, event) {
    if (!mainContent) return;
    mainContent.innerHTML = `<h1>${title}</h1><p>${content}</p>`;
    
    document.querySelectorAll('.nav-btn').forEach(btn => btn.classList.remove('active'));
    if (event && event.currentTarget) {
        event.currentTarget.classList.add('active');
    }
}

document.getElementById("dashboardBtn").onclick = async function(e) {
    const mainContent = document.getElementById("main-content");
    mainContent.innerHTML = "<h1>Overview</h1><p>Loading your health summary...</p>";

    try {
        const response = await fetch('../user_backend/get_appointments.php');
        const appointments = await response.json();

        const totalAppo = appointments.length;
        const pendingAppo = appointments.filter(a => a.status === 'Pending').length;
        
        const upcoming = appointments
            .filter(a => a.status === 'Confirmed' || a.status === 'Pending')
            .sort((a, b) => new Date(a.appointment_date) - new Date(b.appointment_date))[0];

        let overviewHTML = `
            <div class="overview-container">
                <div class="stats-grid">
                    <div class="stat-card">
                        <i class="fa-solid fa-calendar-check"></i>
                        <h3>${totalAppo}</h3>
                        <p>Total Appointments</p>
                    </div>
                    <div class="stat-card">
                        <i class="fa-solid fa-clock"></i>
                        <h3>${pendingAppo}</h3>
                        <p>Pending Requests</p>
                    </div>
                    <div class="stat-card highlight">
                        <i class="fa-solid fa-hospital-user"></i>
                        <h3>Next Visit</h3>
                        <p>${upcoming ? upcoming.appointment_date : 'No upcoming visits'}</p>
                    </div>
                </div>

                <div class="recent-activity">
                    <h2>Recent Activity</h2>
                    ${totalAppo > 0 ? `
                        <ul class="activity-list">
                            ${appointments.slice(0, 3).map(appo => `
                                <li>
                                    <span class="activity-date">${appo.appointment_date}</span>
                                    <span class="activity-desc">Appointment with <strong>Dr. ${appo.doctor_name}</strong> (${appo.specialization})</span>
                                    <span class="status-badge ${appo.status.toLowerCase()}">${appo.status}</span>
                                </li>
                            `).join('')}
                        </ul>
                    ` : '<p>No recent activity found.</p>'}
                </div>
            </div>
        `;

        mainContent.innerHTML = overviewHTML;
        
        document.querySelectorAll('.nav-btn').forEach(btn => btn.classList.remove('active'));
        if (e && e.currentTarget) e.currentTarget.classList.add('active');

    } catch (err) {
        console.error(err);
        mainContent.innerHTML = "<h1>Overview</h1><p>Welcome! Start by booking your first appointment.</p>";
    }
};

document.getElementById("findDoctorBtn").onclick = async function(e) {
    const mainContent = document.getElementById("main-content");
    mainContent.innerHTML = "<h2>Find a Doctor</h2><p>Loading categories...</p>";

    try {
        const specResponse = await fetch('../user_backend/get_specializations.php');
        const specializations = await specResponse.json();

        let searchHTML = `
            <div class="search-container">
                <select id="specSelect">
                    <option value="">All Specializations</option>
                    ${specializations.map(s => `<option value="${s.name}">${s.name}</option>`).join('')}
                </select>
                <button id="searchBtn" class="save-btn">Search</button>
            </div>
            <div id="doctorResults" class="doctor-grid"></div>
        `;
        
        mainContent.innerHTML = searchHTML;

        document.getElementById("searchBtn").onclick = () => {
            const selectedSpec = document.getElementById("specSelect").value;
            fetchDoctors(selectedSpec);
        };

        fetchDoctors('');

    } catch (err) {
        mainContent.innerHTML = "<p>Error loading search interface.</p>";
    }
};

async function fetchDoctors(spec) {
    const resultsDiv = document.getElementById("doctorResults");
    resultsDiv.innerHTML = "<p>Searching...</p>";

    const response = await fetch(`../user_backend/get_doctors_by_spec.php?spec=${encodeURIComponent(spec)}`);
    const doctors = await response.json();

    if (doctors.length === 0) {
        resultsDiv.innerHTML = "<p>No doctors found for this category.</p>";
        return;
    }

    resultsDiv.innerHTML = doctors.map(doc => `
        <div class="doctor-card">
            <h3>Dr. ${doc.full_name}</h3>
            <p class="spec-tag">${doc.specialization}</p>
            <p>Contact: ${doc.contact_number}</p>
            <button class="book-now-btn" 
                onclick="goToBooking(${doc.doctor_id}, '${doc.full_name}')">
                Book Appointment
            </button>
        </div>
    `).join('');
}

function goToBooking(doctorId, doctorName) {
    window.location.href = `../booking/booking.php?doctor_id=${doctorId}&doctor_name=${encodeURIComponent('Dr. ' + doctorName)}`;
}

document.getElementById("appointmentsBtn").onclick = async function(e) {
    const mainContent = document.getElementById("main-content");
    mainContent.innerHTML = "<p>Loading your appointments...</p>";

    try {
        const response = await fetch('../user_backend/get_appointments.php');
        const appointments = await response.json();

        if (appointments.length === 0) {
            mainContent.innerHTML = `<h1>My Appointments</h1><p>You have no appointment history.</p>`;
            return;
        }

        let tableHTML = `
            <h1>My Appointment History</h1>
            <div class="table-container">
                <table class="appointment-table">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Doctor</th>
                            <th>Specialization</th>
                            <th>Reason</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
        `;

        appointments.forEach(appo => {
            const statusClass = appo.status.toLowerCase(); 
            
            tableHTML += `
                <tr>
                    <td>${appo.appointment_date}</td>
                    <td>${appo.appointment_time}</td>
                    <td>Dr. ${appo.doctor_name}</td>
                    <td><span class="spec-tag">${appo.specialization}</span></td>
                    <td>${appo.reason || 'N/A'}</td>
                    <td><span class="status-badge ${statusClass}">${appo.status}</span></td>
                </tr>
            `;
        });

        tableHTML += `</tbody></table></div>`;
        mainContent.innerHTML = tableHTML;
    } catch (err) {
        console.error(err);
        mainContent.innerHTML = "<p>Error loading appointment data.</p>";
    }
};

document.getElementById("profileBtn").onclick = async function(e) {
    loadPage("My Profile", "Loading profile...", e);

    try {
        const response = await fetch('../user_backend/get_user_profile.php');
        const user = await response.json();

        if (user.error) throw new Error(user.error);

        mainContent.innerHTML = `
            <div class="profile-container">
                <h2>My Profile</h2>
                <div class="profile-card">
                    <label>Full Name:</label>
                    <input type="text" id="editName" value="${user.name || ''}">
                    
                    <label>Email (Read-only):</label>
                    <input type="email" value="${user.email || ''}" disabled>
                    
                    <label>Contact Number:</label>
                    <input type="text" id="editMobile" value="${user.mobile || ''}">
                    
                    <button id="saveUserBtn" class="save-btn">Update Profile</button>
                </div>
            </div>
        `;

        document.getElementById("saveUserBtn").onclick = saveUserProfile;
    } catch (err) {
        console.error("Profile Load Error:", err);
        mainContent.innerHTML = "<p style='color:red;'>Error loading profile data. Please try again later.</p>";
    }
};

async function saveUserProfile() {
    const updatedData = {
        name: document.getElementById("editName").value,
        mobile: document.getElementById("editMobile").value
    };

    const response = await fetch('../user_backend/update_user_profile.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(updatedData)
    });

    const result = await response.json();
    if(result.success) alert("Profile updated successfully!");
}

document.getElementById("logoutBtn").onclick = () => {
    if (confirm("Are you sure you want to logout?")) {
        window.location.href = "../backend/logout.php";
    }
};

window.onload = function () {
    document.getElementById("dashboardBtn").click();
};