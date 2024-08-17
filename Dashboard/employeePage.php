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
                <a href="#">
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
                    <a href="#">
                        <i class='bx bx-briefcase-alt-2'></i>
                        <span class="link_name">Project</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Project</a></li>
                    <li><a href="#">New Project</a></li>
                    <li><a href="#">Current Project</a></li>
                    <li><a href="#">Finished Project</a></li>
                </ul>
            </li>
            <!-----Users (ADD, edit, remove)-->
            <li>
                <div class="iocn-links">
                    <a href="#">
                        <i class='bx bx-user' ></i>
                        <span class="link_name">User</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">User</a></li>
                    <li><a href="/COMPANY/functions/userFunction/user.php">Add</a></li>
                    <li><a href="/COMPANY/functions/userFunction/display.php">Edit</a></li>
                    <li><a href="#">Remove</a></li>
                </ul>
            </li>
       
            <!----employee (Rank, Attendance , info )-->
            <li>
                <div class="iocn-links">
                    <a href="#">
                        <i class='bx bxs-user-account'></i>
                        <span class="link_name">Employee</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Employee</a></li>
                    <li><a href="#">Rank</a></li>
                    <li><a href="#">Attendance</a></li>
                    <li><a href="#">Info</a></li>
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
    <section class="home-section">

        <div class="home-content">
            <i class='bx bx-menu'></i>
            <span class="text">Drop down Sidebar</span>
        </div>
        <div class="main-content">
            <h1>putang in mo </h1>
        </div>
    </section>


    <!----javascript------------>
    <script>
        let arrow = document.querySelectorAll(".arrow");
       
        for(var i=0; i < arrow.length; i++){
            arrow[i].addEventListener("click",(e)=>{
                 
        let arrowParent = e.target.parentElement.parentElement;
                 
        arrowParent.classList.toggle("showMenu");
            });
        }
        
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".bx-menu");
        console.log(sidebarBtn);
        sidebarBtn.addEventListener("click", ()=>{
            sidebar.classList.toggle("close");
        });
    </script>
</body>
</html>


