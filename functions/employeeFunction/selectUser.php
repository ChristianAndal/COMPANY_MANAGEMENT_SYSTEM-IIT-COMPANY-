
<?php
            $basePath = $_SERVER['DOCUMENT_ROOT'];
            include $basePath . "/COMPANY/SideBar/adminSidebar.php";
    ?>
    <!------burger menu -->
    <section class="home-section">

    <div class="home-content"> 
    <i class='bx bx-menu'></i>
    <span class="text">Add Employee Info</span>
    </div>
    <div class="main-content">
    <!-----put the contents here ----->
   
    <?php
    include 'connect.php';
    ?>


    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Username</th>
                    <th scope="col">User Role</th>
                    <th scope="col">Email</th>
                    <th scope="col">Status</th>
                  
                    <th scope="col">Operation</th>
                </tr>
            </thead>
            <tbody>
            

                <?php

                $sql = "Select * from users";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['userId'];
                        $name = $row['name'];
                        $username = $row['username'];
                        $userRole = $row['roleId'];
                        $email = $row['email'];
                        $status = $row['status'];
                        

                        // Display "Admin" or "Employee" based on roleId
                        $roleDisplay = ($userRole == 1) ? 'Admin' : 'Employee';

                        echo ' <tr>
                            <th scope="row">' . $id . '</th>
                            <td>' . $name . '</td>
                            <td>' . $username . '</td>
                            <td>' . $roleDisplay . '</td>
                            <td>' . $email . '</td>
                            <td>' . $status . '</td>
                           
                            <td>
                                <button class="btnupdate"><a href="addemployee.php?userId=' . $id . '" class="text-light">Add Employee Info</a></button>
                               
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


