<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard - MedOra</title>
    <link rel="stylesheet" href="user_dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>
    <div class="upper_nav">
        <img src="../Home_page/logo.jpeg" alt="Logo">
        <div class="right_section">
            <div id="time_div"></div>
            <img src="../Home_page/logo.jpeg" alt="Profile" id="profile_logo">
        </div>
    </div>

    <div class="left_nav">
        <div class="top_nav_buttons">
            <button class="nav-btn active" id="dashboardBtn"><i class="fa-solid fa-gauge"></i> Overview</button>
            <button class="nav-btn" id="findDoctorBtn"><i class="fa-solid fa-user-doctor"></i> Find a Doctor</button>
            <button class="nav-btn" id="appointmentsBtn"><i class="fa-solid fa-calendar-check"></i> My Appointments</button>
            <button class="nav-btn" id="billingBtn"><i class="fa-solid fa-file-invoice-dollar"></i> Billing & Payments</button>
            <button class="nav-btn" id="profileBtn">
                <i class="fa-solid fa-user"></i> My Profile
            </button>
        </div>

        <div class="bottom_nav_buttons">
            <button class="nav-btn" id="settingsBtn"><i class="fa-solid fa-gear"></i> Settings</button>
            <button class="nav-btn" id="logoutBtn"><i class="fa-solid fa-right-from-bracket"></i> Logout</button>
        </div>
    </div>

    <main class="content" id="main_content"></main>
    <script src="user_dashboard.js"></script>
</body>

</html>