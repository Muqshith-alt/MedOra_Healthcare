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

document.getElementById("dashboardBtn").onclick = function () {
    const mainContent = document.getElementById("main_content"); 
    mainContent.innerHTML = "<h1 style='padding:20px;'>Loading Overview...</h1>";

    fetch('../backend/get_doctor_profile.php')
        .then(response => response.json())
        .then(data => {
            const p = data.profile;

            mainContent.innerHTML = `
                <div class="dashboard-overview" style="padding: 20px;">
                    <div class="section-header" style="margin-bottom: 30px;">
                        <h1 style="font-size: 2rem; color: #333;">Doctor's Dashboard</h1>
                        <p style="color: #666;">Welcome back, Dr. ${p.name} | Professional Overview</p>
                    </div>

                    <div class="dashboard-grid">
                        <div class="dash-column">
                            <div class="info-card">
                                <h3><i class="fa-solid fa-id-card"></i> Professional Details</h3>
                                <div class="details-list">
                                    <p><strong>Specialization:</strong> ${p.specialization_name || 'Specialist'}</p>
                                    <p><strong>Email:</strong> ${p.email}</p>
                                    <p><strong>Facility:</strong> MedOra Healthcare Center</p>
                                </div>
                            </div>

                            <div class="info-card">
                                <h3><i class="fa-solid fa-calendar-days"></i> My Schedule</h3>
                                <div class="details-list">
                                    ${data.schedule.length > 0 ? 
                                        data.schedule.map(s => `<p><strong>${s.day_of_week}:</strong> ${s.start_time} - ${s.end_time}</p>`).join('') 
                                        : '<p>No availability slots set.</p>'}
                                </div>
                            </div>
                        </div>

                        <div class="dash-column">
                            <div class="info-card">
                                <h3><i class="fa-solid fa-clock-rotate-left"></i> Upcoming Appointments</h3>
                                <div id="miniAppointmentsList">
                                    <p>Loading recent appointments...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            `;
            
            loadMiniAppointments();
        })
        .catch(err => {
            console.error("Dashboard Error:", err);
            mainContent.innerHTML = "<div style='padding:20px;'><h2>Unable to load dashboard.</h2><p>Check if backend/get_doctor_profile.php exists.</p></div>";
        });
};

function loadMiniAppointments() {
    fetch('../backend/get_appointments.php')
        .then(res => {
            if (!res.ok) throw new Error('Appointments file not found');
            return res.json();
        })
        .then(apps => {
            const list = document.getElementById("miniAppointmentsList");
            if(!apps || apps.length === 0) {
                list.innerHTML = "<p>No appointments scheduled for today.</p>";
                return;
            }
            
            list.innerHTML = apps.slice(0, 5).map(app => `
                <div class="mini-app-item" style="display:flex; justify-content:space-between; padding: 10px 0; border-bottom: 1px solid #eee;">
                    <span><strong>${app.appointment_time}</strong> - ${app.patient_name}</span>
                    <span class="status-tag ${app.status.toLowerCase()}" style="font-size: 0.8rem; padding: 2px 8px; border-radius: 4px;">${app.status}</span>
                </div>
            `).join('');
        })
        .catch(err => {
            console.error("Mini-Appt Error:", err);
            document.getElementById("miniAppointmentsList").innerHTML = "<p>Could not load recent appointments.</p>";
        });
}

document.getElementById("appointmentsBtn").onclick = function () {
    mainContent.innerHTML = "<h1 style='padding:20px;'>Loading Appointments...</h1>";

    fetch('../backend/get_appointments.php')
        .then(response => response.json())
        .then(data => {
            let html = `
                <div class="appointments-page">
                    <div class="section-header">
                        <h1>Upcoming Appointments</h1>
                        <p class="subtitle">You have ${data.length} total appointments in your records.</p>
                    </div>

                    <div class="appointment-card info-card">
                        <table class="appointment-table">
                            <thead>
                                <tr>
                                    <th>Patient Name</th>
                                    <th>Time</th>
                                    <th>Date</th>
                                    <th>Reason</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>`;

            if (data.length === 0) {
                html += `<tr><td colspan="6" style="text-align:center; padding:20px;">No appointments found.</td></tr>`;
            } else {
                data.forEach(app => {
                    const statusLower = app.status.toLowerCase();
                    
                    // Logic for Action Buttons based on Status
                    let actionButtons = '';
                    if (statusLower === 'pending') {
                        actionButtons = `
                            <button class="action-btn accept" onclick="updateApptStatus(${app.appointment_id}, 'Accepted')" title="Accept">
                                <i class="fa-solid fa-check"></i>
                            </button>
                            <button class="action-btn cancel" onclick="updateApptStatus(${app.appointment_id}, 'Cancelled')" title="Reject">
                                <i class="fa-solid fa-xmark"></i>
                            </button>`;
                    } else if (statusLower === 'accepted') {
                        actionButtons = `
                            <button class="action-btn cancel" onclick="updateApptStatus(${app.appointment_id}, 'Cancelled')" title="Cancel Appointment">
                                <i class="fa-solid fa-ban"></i>
                            </button>`;
                    } else {
                        actionButtons = `<span style="font-size:0.8rem; color:#999;">No actions available</span>`;
                    }

                    html += `
                        <tr>
                            <td>
                                <div class="patient-info">
                                    <div class="patient-avatar-mini">${app.patient_name.charAt(0)}</div>
                                    <span><strong>${app.patient_name}</strong></span>
                                </div>
                            </td>
                            <td>${app.appointment_time}</td>
                            <td>${app.appointment_date}</td>
                            <td>${app.reason}</td>
                            <td><span class="status-tag ${statusLower}">${app.status}</span></td>
                            <td>
                                <div class="action-container">
                                    ${actionButtons}
                                </div>
                            </td>
                        </tr>`;
                });
            }

            html += `</tbody></table></div></div>`;
            mainContent.innerHTML = html;
        })
        .catch(err => {
            console.error("Error:", err);
            mainContent.innerHTML = "<h2>Error loading appointments.</h2>";
        });
};

// Universal function to handle Accept/Cancel/Reject
function updateApptStatus(id, newStatus) {
    const confirmMsg = `Are you sure you want to mark this appointment as ${newStatus}?`;
    if (!confirm(confirmMsg)) return;

    fetch('../backend/update_appointment_status.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ 
            appointment_id: id, 
            status: newStatus 
        })
    })
    .then(res => res.json())
    .then(data => {
        if (data.success) {
            document.getElementById("appointmentsBtn").click(); // Refresh the UI
        } else {
            alert("Update failed: " + data.message);
        }
    })
    .catch(err => console.error("Request failed", err));
}

document.getElementById("scheduleBtn").onclick = function () {
    mainContent.innerHTML = "<h1>Loading Schedule...</h1>";

    fetch('../backend/get_schedule.php') 
        .then(response => {
            if (!response.ok) throw new Error('File not found or server error');
            return response.json();
        })
        .then(data => {
            let scheduleHTML = `
                <div class="schedule-container">
                    <h2>Weekly Availability</h2>
                    <table class="schedule-table">
                        <thead>
                            <tr>
                                <th>Day</th>
                                <th>Start Time</th>
                                <th>End Time</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>`;

            if (data.length === 0) {
                scheduleHTML += `<tr><td colspan="4">No schedule set yet.</td></tr>`;
            } else {
                data.forEach(slot => {
                    scheduleHTML += `
                        <tr>
                            <td>${slot.day_of_week}</td>
                            <td>${slot.start_time}</td>
                            <td>${slot.end_time}</td>
                            <td><span class="status-badge">${slot.status}</span></td>
                        </tr>`;
                });
            }

            scheduleHTML += `</tbody></table>
                <button class="add-btn" onclick="openScheduleModal()">Add New Slot</button>
            </div>`;
            
            mainContent.innerHTML = scheduleHTML;
        })
        .catch(error => {
            console.error("Error:", error);
            mainContent.innerHTML = "<h1>Error loading schedule</h1><p>Please try again later.</p>";
        });
};

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

document.getElementById("profileBtn").onclick = function () {
    fetch('../backend/get_profile.php') 
        .then(response => {
            if (!response.ok) throw new Error('Not logged in or server error');
            return response.json();
        })
        .then(data => {
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
                                <h2 class="view-mode">${data.full_name}</h2>
                                <input type="text" id="edit_name" class="edit-mode header-input" value="${data.full_name}" style="display:none;">
                                
                                <p class="doc-id">ID: #${data.doctor_id}</p>
                                
                                <p class="doc-tagline view-mode">${data.specialization} | MedOra Hospital</p>
                                <input type="text" id="edit_specialization" class="edit-mode header-input" value="${data.specialization}" style="display:none;">
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
                                <span class="view-mode">${data.contact_number}</span>
                                <input type="tel" id="edit_phone" class="edit-mode" value="${data.contact_number}" style="display:none;">
                            </div>
                            <div class="input-group">
                                <i class="fa-solid fa-envelope"></i>
                                <span class="view-mode">${data.email}</span>
                                <input type="email" class="edit-mode" value="${data.email}" disabled style="display:none; background:#f0f0f0;">
                            </div>
                        </div>

                        <div class="info-card" id="summaryCard">
                            <div class="card-header">
                                <h3>Professional Summary</h3>
                                <i class="fa-solid fa-pen edit-trigger" onclick="toggleEdit('summaryCard')"></i>
                            </div>
                            <p class="view-mode">Experienced ${data.specialization} focused on patient-centered care.</p>
                            <textarea class="edit-mode" style="display:none;">Experienced ${data.specialization} focused on patient-centered care.</textarea>
                        </div>
                    </div>

                    <div class="form-actions" id="profileActions">
                        <button class="update-btn" onclick="enableProfileEdit()">Update Profile</button>
                    </div>
                </div>
            `;
            
            disableProfileEdit();
        })
        .catch(error => {
            console.error("Error loading profile:", error);
            mainContent.innerHTML = `
                <div class="error-msg">
                    <h2>Unable to load profile</h2>
                    <p>Please ensure you are logged in correctly.</p>
                </div>`;
        });
};

document.getElementById("logoutBtn").onclick = function () {
    const confirmLogout = confirm("Are you sure you want to logout of MedOra?");

    if (confirmLogout) {
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

document.addEventListener('change', function (e) {
    if (e.target && e.target.id === 'imageUpload') {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();

            reader.onload = function (event) {
                const newImageUrl = event.target.result;

                const mainPic = document.getElementById('mainProfilePic');
                if (mainPic) mainPic.src = newImageUrl;

                const topNavPic = document.getElementById('profile_logo');
                if (topNavPic) topNavPic.src = newImageUrl;
            };

            reader.readAsDataURL(file);
        }
    }
});

function selectDay(element) {
    document.querySelectorAll('.day-pill').forEach(pill => pill.classList.remove('active'));
    element.classList.add('active');
}

function enableProfileEdit() {
    isProfileEditing = true;

    document.querySelectorAll('.edit-trigger, .edit-btn-top').forEach(el => {
        el.style.display = 'block';
    });

    document.getElementById('profileActions').innerHTML = `
        <button class="save-btn" onclick="saveProfile()">Save Changes</button>
        <button class="cancel-btn" onclick="cancelProfileEdit()">Cancel</button>
    `;
}

async function saveProfile() {
    const updatedData = {
        full_name: document.getElementById('edit_name').value,
        specialization: document.getElementById('edit_specialization').value,
        contact_number: document.getElementById('edit_phone').value
    };

    try {
        const response = await fetch('../backend/update_profile.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(updatedData)
        });

        const result = await response.json();

        if (result.success) {
            alert("Profile updated successfully!");
            document.getElementById("profileBtn").click(); 
        } else {
            alert("Error: " + result.message);
        }
    } catch (error) {
        console.error("Save error:", error);
        alert("Failed to connect to the server.");
    }

    disableProfileEdit();
}

function cancelProfileEdit() {
    isProfileEditing = false;

    document.querySelectorAll('.info-card, #headerCard').forEach(card => {
        const viewElements = card.querySelectorAll('.view-mode');
        const editElements = card.querySelectorAll('.edit-mode');

        viewElements.forEach(v => v.style.display = 'block');
        editElements.forEach(e => e.style.display = 'none');

        const icon = card.querySelector('.fa-check');
        if (icon) icon.classList.replace('fa-check', 'fa-pen');
    });

    disableProfileEdit();
}

function disableProfileEdit() {
    isProfileEditing = false;

    document.querySelectorAll('.edit-trigger, .edit-btn-top').forEach(el => {
        el.style.display = 'none';
    });

    document.getElementById('profileActions').innerHTML = `
        <button class="update-btn" onclick="enableProfileEdit()">Update Profile</button>
    `;
}

function toggleEdit(cardId) {
    if (!isProfileEditing) return; 

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

function openScheduleModal() {
    document.getElementById("scheduleModal").style.display = "block";
}

function closeScheduleModal() {
    document.getElementById("scheduleModal").style.display = "none";
}

document.addEventListener('submit', function(e) {
    if(e.target && e.target.id === 'addScheduleForm'){
        e.preventDefault();
        
        const formData = {
            day: document.getElementById('schedDay').value,
            start: document.getElementById('schedStart').value,
            end: document.getElementById('schedEnd').value
        };

        fetch('../backend/add_schedule.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify(formData)
        })
        .then(res => res.json())
        .then(data => {
            if(data.success) {
                alert("Schedule added!");
                closeScheduleModal();
                document.getElementById("scheduleBtn").click();
            } else {
                alert("Error: " + data.message);
            }
        });
    }
});