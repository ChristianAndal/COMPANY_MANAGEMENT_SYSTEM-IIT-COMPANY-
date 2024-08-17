
<?php
            $basePath = $_SERVER['DOCUMENT_ROOT'];
            include $basePath . "/COMPANY/SideBar/adminSidebar.php";
    ?>
    <!------burger menu -->
    <section class="home-section">

    <div class="home-content">
    <i class='bx bx-menu'></i>
    <span class="text">Employee</span>
    </div>
    <div class="main-content">
    <!-----put the contents here ----->
   
    <?php
    include 'connect.php';
    ?>


    <div class="container">
        <button class="btnadd my-5"><a href="selectUser.php"> Add Employee</a></button>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Profile</th>
                    <th scope="col">Employee Name</th>
                    <th scope="col">Employee Number</th>
                    <th scope="col">Operation</th>
                </tr>
            </thead>
            <tbody>
            

                <?php

                $sql = "Select * from employeeinfo";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $employId = $row['employeeId'];
                        $employeename = $row['employeename'];
                        $employeeNumber	 = $row['employeeNumber'];
                        $profile = $row['profilePicture'];
                

                        echo ' <tr>
                            <td> 
                           
                            <img src="'.$profile.'" class="profileImgContainer" height="65px" width="65px" alt="profile" style="border-radius: 20%;">

                        </td>
                            <td><br>' . $employeename  . '</td>
                            <td><br>' . $employeeNumber . '</td>
                          
                            <td><br>
                                <button class="btnupdate"><a href="viewinfo.php?Employeid=' . $employId . '" class="text-light">View Info</a></button>
                               
                            </td>
                        </tr>';
                        
                    }
                }

                ?>
            

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


