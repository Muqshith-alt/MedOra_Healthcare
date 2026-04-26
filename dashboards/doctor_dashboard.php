<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Dashboard</title>
    <link rel="stylesheet" href="doc_dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>
    <div class="upper_nav">
        <img src="../Home_page/logo.jpeg" alt="">

        <div class="right_section">
            <div id="time_div"></div>
            <img src="../Home_page/logo.jpeg" alt="" id="profile_logo">
        </div>
    </div>

    <div class="left_nav">
        <div class="top_nav_buttons">
            <button class="nav-btn active" id="dashboardBtn"><i class="fa-solid fa-gauge"></i> Dashboard</button>
            <button class="nav-btn" id="appointmentsBtn"><i class="fa-solid fa-calendar-check"></i> Appointments</button>
            <button class="nav-btn" id="patientsBtn"><i class="fa-solid fa-user-group"></i> Patients</button>
            <button class="nav-btn" id="scheduleBtn"><i class="fa-solid fa-clock"></i> Schedule</button>
            
            <button class="nav-btn" id="profileBtn"><i class="fa-solid fa-user-doctor"></i> Profile</button>
        </div>

        <div class="bottom_nav_buttons">
            <button class="nav-btn" id="settingsBtn"><i class="fa-solid fa-gear"></i> Settings</button>
            <button class="nav-btn" id="logoutBtn"><i class="fa-solid fa-right-from-bracket"></i> Logout</button>
        </div>
    </div>
    
    <main class="content" id="main_content"></main>
    <script src="doc_dashboard.js"></script>
</body>

</html>
