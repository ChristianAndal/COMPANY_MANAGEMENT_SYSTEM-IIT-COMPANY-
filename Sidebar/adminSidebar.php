<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/COMPANY/css/sidebar.css">
    <!---boxicon link-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!--fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&display=swap" rel="stylesheet">

    <!---------------users css and bootstrap----------->
    <link rel="stylesheet" href="/COMPANY/css/user.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <!---------------project css------------------------>
    <link rel="stylesheet" href="/COMPANY/css/project.css">
    <!----------------project info css-javascript-->
    <link rel="stylesheet" href="/COMPANY/css/projectinfos.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
     <!----------------project chat css------------------->
     <link rel="stylesheet" href="/COMPANY/css/projectchat.css">
     <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <!---------------dashboard des css------------------->
    <link rel="stylesheet" href="/COMPANY/css/dashboard.css">
    <!---------------view employeeinfo css------------------->
    <link rel="stylesheet" href="/COMPANY/css/employeeviewinfo.css">
    
</head>
<body>
    <div class="sidebar ">
        <div class="logo-details">
            <i class='bx bx-time-five'></i>
            <span class="logo_name">INTENSE IN TIME</span>
        </div>
        <ul class="nav-links">
            <!-------DASHBOARD-------------------------->
            <li>
                <a href="/COMPANY/Dashboard/adminDashboard.php">
                    <i class='bx bx-grid-alt' ></i>
                    <span class="link_name">Dashboard</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="/COMPANY/Dashboard/adminDashboard.php">Dashboard</a></li>
                
                </ul>
            </li>
            <!---PROJECTS (new, current , finished)---->
            <li>
                <div class="iocn-links">
                    <a href="/COMPANY/functions/projectFunction/project.php">
                        <i class='bx bx-briefcase-alt-2'></i>
                        <span class="link_name">Project</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="/COMPANY/functions/projectFunction/project.php">Project</a></li>
                    <li><a href="/COMPANY/functions/projectFunction/addProject.php">New Project</a></li>
                    <li><a href="/COMPANY/functions/projectFunction/currentProject.php">Current Project</a></li>
                    <li><a href="/COMPANY/functions/projectFunction/finishProject.php">Finished Project</a></li>
                </ul>
            </li>
            <!-----Users (ADD, edit, remove)-->
            <li>
                <div class="iocn-links">
                    <a href="/COMPANY/functions/userFunction/display.php">
                        <i class='bx bx-user' ></i>
                        <span class="link_name">User</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="/COMPANY/functions/userFunction/display.php">User</a></li>
                    <li><a href="/COMPANY/functions/userFunction/user.php">Add</a></li>
                    <li><a href="/COMPANY/functions/userFunction/display.php">Edit</a></li>
                    <li><a href="/COMPANY/functions/userFunction/remove.php">Remove</a></li>
                </ul>
            </li>
       
            <!----employee (Rank, Attendance , info )-->
            <li>
                <div class="iocn-links">
                    <a href="/COMPANY/functions/employeeFunction/empoloyeePage.php">
                        <i class='bx bxs-user-account'></i>
                        <span class="link_name">Employee</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="/COMPANY/functions/employeeFunction/empoloyeePage.php">Employee</a></li>
                    <li><a href="#">Rank</a></li>
                    <li><a href="#">Attendance</a></li>
                    <li><a href="/COMPANY/functions/employeeFunction/empoloyeePage.php">Info</a></li>
                </ul>
            </li>
        
            <!---User Actvity -->
            <li>
                <a href="#">
                    <i class='bx bx-clipboard'></i>
                    <span class="link_name">User Activity</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">User Activity</a></li>
                
                </ul>
            </li>
              <!---Account -->
              <li>
                <a href="#">
                    <i class='bx bx-user-circle'></i>
                    <span class="link_name">Account</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Account</a></li>
                
                </ul>
            </li>
             <!---message -->
             <li>
                <a href="#">
                    <i class='bx bx-chat'></i>
                    <span class="link_name">Message</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Message</a></li>
                
                </ul>
            </li>
            
        <!--------PRofile-->
        <li>
        <div class="profile-details">
            <div class="profile-content">
                <img src="/COMPANY/content/profile.jpg" alt="profile">
            </div>
            
            <div class="name-job">
                <div class="profile_name">Christian </div>
                <div class="job">Admin</div>
            </div>
            <i class='bx bx-log-out'></i>
        </div>
    </ul>
    </li>
    </div>
    <!------burger menu -->
   