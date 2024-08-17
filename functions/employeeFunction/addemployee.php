<?php
            include 'connect.php';
            $userID = $_GET['userId'];
            $active = 'Active Employee';

            if (isset($_POST['submit'])) {
                $employeename = $_POST['employeename'];
                $employeenumber = $_POST['employeenumber'];
                $address = $_POST['address'];
                $sssId = $_POST['sssId'];
                $tinId = $_POST['tinId'];
                $philhealthId = $_POST['philhealthId'];
                $jobDescriopion = $_POST['jobDescriopion'];
                $contractSalary = $_POST['contractSalary'];
                $dailySalary = $_POST['dailySalary'];


                //sets the value of the image 
                  
                $uploadDir = '/COMPANY/content/profile/';
                $uploadPath = $_SERVER['DOCUMENT_ROOT'] . $uploadDir;
                $profilePicture = $_FILES['profilePicture']['name'];
                $uploadFile = $uploadPath . $profilePicture;
            
                $query ="INSERT INTO employeeinfo(employeename,employeeNumber,userId,address,sssId,	tinId,philhealthId,jobDescription,contractSalary,dailySalary,profilePicture) 
                VALUE('$employeename','$employeenumber','$userID','$address','$sssId','$tinId','$philhealthId','$jobDescriopion','$contractSalary','$dailySalary','$uploadDir$profilePicture')";
                $query_run =mysqli_query($con, $query);

                if($query_run)
                {
                    move_uploaded_file($_FILES['profilePicture']['tmp_name'], $uploadFile);
                    $_SESSION['status'] = "Image stored succesfully";
                    header('location:empoloyeePage.php');
                }
                else{
                    $_SESSION['status'] = "Image not stored succesfully";
                    header('location:empoloyeePage.php');
                }
                
                
                $updatequery = "UPDATE users SET status = '$active'  WHERE userId  = '$userID'";
                $updatequery_run =mysqli_query($con, $updatequery);


            }
           



?>
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
        <!---------------Contents start here ---------------->
        <div class="container my-5">
            <form method="post" enctype="multipart/form-data">
                <!---------------Employee Name---------------->
                <div class="form-group">
                    <label>Employee Name</label>
                    <input type="text" class="form-control" placeholder="Enter Employee Name" name="employeename" autocomplete="off">
                </div>
                <!---------------Employee Number---------------->
                <div class="form-group">
                    <label>Employee Number</label>
                    <input type="text" class="form-control" placeholder="Enter Employee Number" name="employeenumber" autocomplete="off">
                </div>
                <!--------------User ID---------------->
                <div class="form-group">
                    <label>User ID</label>
                    <input type="text" class="form-control" value="<?php echo  $userID;?>"  name="userID" autocomplete="off" readonly>
                </div>
                <!---------------Address--------------->
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" placeholder="Enter Address" name="address" autocomplete="off">
                </div>
                 <!---------------SSS ID--------------->
                 <div class="form-group">
                    <label>SSS ID</label>
                    <input type="text" class="form-control" placeholder="Enter SSS ID" name="sssId" autocomplete="off">
                </div>
                <!---------------TIN ID--------------->
                <div class="form-group">
                    <label>TIN ID </label>
                    <input type="text" class="form-control" placeholder="Enter TIN ID" name="tinId" autocomplete="off">
                </div>
                 <!--------------Phil health--------------->
                 <div class="form-group">
                    <label>Philhealth ID </label>
                    <input type="text" class="form-control" placeholder="Philhealth ID" name="philhealthId" autocomplete="off">
                </div>
                <!--------------Job description--------------->
                 <div class="form-group">
                    <label>Job Description</label>
                    <input type="text" class="form-control" placeholder="Enter Job Description" name="jobDescriopion" autocomplete="off">
                </div>
                 <!--------------Contract fee-------------->
                <div class="form-group">
                    <label>Contract Salary</label>
                    <input type="text" class="form-control" placeholder="Enter Contract Salary" name="contractSalary" autocomplete="off">
                </div>
                <!--------------Daily Salary-------------->
                <div class="form-group">
                    <label>Daily Salary</label>
                    <input type="text" class="form-control" placeholder="Enter Daily Salary" name="dailySalary" autocomplete="off">
                </div>

                <div class="form-group">
                    <label for="projectImage">Profile Picture</label>
                    <input type="file" class="form-control-file" id="projectImage" name="profilePicture" accept="image/*">
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Add Employee Info</button>
            </form>
        </div>
        <!--------Contents end here---->
        <!------Burger continuation--->
    </div>
</section>
<!----JavaScript------------>
<script>
    let arrow = document.querySelectorAll(".arrow");

    for (var i = 0; i < arrow.length; i++) {
        arrow[i].addEventListener("click", (e) => {
            let arrowParent = e.target.parentElement.parentElement;
            arrowParent.classList.toggle("showMenu");
        });
    }

    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".bx-menu");
    console.log(sidebarBtn);
    sidebarBtn.addEventListener("click", () => {
        sidebar.classList.toggle("close");
    });
</script>
</body>
</html>
