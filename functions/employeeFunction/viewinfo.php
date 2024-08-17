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

    <div class="view-emp-profile ">
    <h5>Employee Information </h5>

    <?php
     $employeeId = $_GET['Employeid'];
        include 'connect.php';
        
        $querry = "SELECT * FROM employeeinfo WHERE employeeId  ='$employeeId'";
        $querry_run = mysqli_query($con , $querry );
        if(mysqli_num_rows($querry_run) > 0)
        {
            foreach($querry_run as $row)
            {
            ?>
        <img src="<?php echo $row['profilePicture'];?>" alt="Profile Picture" class="view-emp-profile-picture">
        <h2 class="view-emp-employee-name"><?php echo $row['employeename'];?></h2>
        <ul class="view-emp-employee-details">
            <li>Employee number: <?php echo $row['employeeNumber'];?></li>
            <li>User ID: <?php echo $row['userId'];?></li>
            <li>Address: <?php echo $row['address'];?></li>
            <li>SSS ID: <?php echo $row['sssId'];?></li>
            <li>TIN ID: <?php echo $row['tinId'];?></li>
            <li>PhilHealth ID: <?php echo $row['philhealthId'];?></li>
            <li>Job Description : <?php echo $row['jobDescription'];?></li>
        </ul>
        <ul class="view-emp-salary-details">
            <li>Contract Salary: <?php echo $row['contractSalary'];?></li>
            <li>Daily Salary: <?php echo $row['dailySalary'];?></li>
        </ul>
        <?php
        }
        }
        else
        {
            echo "No Records found";
        }

?>
        <div class="view-emp-button-con">
         <button type="submit" class="view-emp-update-view" name="submit">Update</button> 
         <button type="submit" class="view-emp-delete-view" name="submit">Delete</button> 
        <button type="submit" class="view-emp-view" name="submit">View PDF</button>
        </div>
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
