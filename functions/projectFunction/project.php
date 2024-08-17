
<?php
            $basePath = $_SERVER['DOCUMENT_ROOT'];
            include $basePath . "/COMPANY/SideBar/adminSidebar.php";
?>
    <!------burger menu -->
   <!------burger menu -->
<section class="home-section">
    <div class="home-content">
        <i class='bx bx-menu'></i>
        <span class="text">Projects</span>
    </div>
    <div class="main-content">
        <!-----put the contents here ----->

        <?php
include 'connect.php';
?>
<div class="container py-3">
    <div class="row mt-6">
        <?php
        $query = "SELECT * FROM project ";
        $query_run = mysqli_query($con, $query);
        $check_faculty = mysqli_num_rows($query_run) > 0;

        if ($check_faculty) {
            while ($row = mysqli_fetch_array($query_run)) {
                $projectid = $row['projectid'];
                ?>
                <div class="col-md-3 mt-4">
                    <a href="projectInfo.php?projectid=<?php echo $projectid; ?>">
                        <div class="card">
                            <img src="<?php echo $row['projectimage']; ?>" class="card-img-top" width="200px" height="200px" alt="Project images">
                            <div class="card-body">
                                <h3 class="card-title"><?php echo $row['projectname']; ?></h3>
                                <h5 class="card-title1" style="color: <?php echo getStatusColor($row['status']); ?>"><?php echo $row['status']; ?></h5>
                                <p class="card-text">
                                    <?php echo $row['client']; ?>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <?php
            }
        } else {
            echo "No records found";
        }

        function getStatusColor($status) {
            switch ($status) {
                case 'Planning':
                case 'Designing':
                    return '#66FF99';
                case 'Development':
                case 'Testing':
                case 'Implementation':
                    return '#FF00FF';
                case 'Finish':
                    return '#66E6FF';
                default:
                    return 'black'; // or any default color
            }
        }
        ?>
    </div>
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