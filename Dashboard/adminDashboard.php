


<?php
     include 'connect.php';
            $basePath = $_SERVER['DOCUMENT_ROOT'];
            include $basePath . "/COMPANY/SideBar/adminSidebar.php";
    ?>
    <!------burger menu -->
    <section class="home-section">

    <div class="home-content">
    <i class='bx bx-menu'></i>
    <span class="text">Dashboard</span>
    </div>
    <div class="main-content">
    <!-----put the contents here ----->


    <div class="main-dashboard-body">
    <div class="dashboard-container">
        
        <!----my salary ------->
        <div class="dashboard-salary">
            <h3>Balance: </h3>
            <h4>₱ 400000000</h4>
            <p>****   ****   ****   0834</p>
            <img src="master.png"  class="dasboard-img">
        </div>
        <!----total employees-->
        <div class="dashboard-total-employe">
            <h3>Employee</h3>
            <h4>300</h4>
            <i class='bx bxs-user'></i>
        </div>
        
        <!----numbers of project------->
        <div class="dashboard-num-project">
            <h3>Project</h3>
            <h4>30</h4>
            <i class='bx bxs-briefcase-alt-2'></i>
        </div>
        <!---------project rank -->
        <div class="dashboard-project-rank">
            <h3>Project List</h3>
            <?php
        $query = "SELECT * FROM project ";
        $query_run = mysqli_query($con, $query);
        $check_faculty = mysqli_num_rows($query_run) > 0;

        if ($check_faculty) {
            while ($row = mysqli_fetch_array($query_run)) {
                $projectid = $row['projectid'];
                ?>
            <tr>
        <td class="project-td">
            <img src="<?php echo $row['projectimage']; ?>" class="profileImgContainer" height="35px" width="35px" alt="profile" style="border-radius: 20%; margin: 5px;">
        </td>
        <td class="project-td">
            <a href='/COMPANY/functions/projectFunction/projectInfo.php?projectid=<?php echo htmlspecialchars($projectid); ?>' class="project-link">
            <?php echo $row['projectname']; ?>
            </a>
        </td>

               <br>
                
            </tr>

            <?php
                 }
            }
            ?>

            
        </div>
    </div>

        <!----------------dashbosrd   end div -------------------------->
    </div>









      <!----------------contents  ends here -------------------------->
                <!------Burger continuation--->

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


