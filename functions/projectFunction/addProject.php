<?php
include 'connect.php';
//gets the value from the html file 
if (isset($_POST['submit'])) {
    $projectname = $_POST['projectname'];
    $description = $_POST['description'];
    $status = $_POST['status'];
    $client = $_POST['client'];
    $budget = $_POST['budget'];
    //sets the value of the image 
      
    $uploadDir = '/COMPANY/content/upload/';
    $uploadPath = $_SERVER['DOCUMENT_ROOT'] . $uploadDir;
    $projectImage = $_FILES['projectImage']['name'];
    $uploadFile = $uploadPath . $projectImage;

    $query ="INSERT INTO project(projectname,projectdescription,status,client,budget,projectimage) VALUE('$projectname','$description','$status','$client','$budget','$uploadDir$projectImage')";
    $query_run =mysqli_query($con, $query);

    if($query_run)
    {
        move_uploaded_file($_FILES['projectImage']['tmp_name'], $uploadFile);
        $_SESSION['status'] = "Image stored succesfully";
        header('location:project.php');
    }
    else{
        $_SESSION['status'] = "Image not stored succesfully";
        header('location:project.php');
    }
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
        <span class="text">New Project</span>
    </div>
    <div class="main-content">
        <!---------------Contents start here ---------------->
        <div class="container my-5">
            <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Project Name</label>
                    <input type="text" class="form-control" placeholder="Enter Project Name" name="projectname" autocomplete="off">
                </div>
                <div class="form-group">
                    <label>Project Description</label>
                    <textarea name="description" class="form-control" placeholder="Enter Project description"></textarea>
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <select class="form-control" name="status">
                        <option value="Planning">Planning</option>
                        <option value="Designing">Designing</option>
                        <option value="Development">Development</option>
                        <option value="Testing">Testing</option>
                        <option value="Implementation">Implementation</option>
                        <option value="Finish">Finish</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Client</label>
                    <input type="text" class="form-control" placeholder="Enter Client" name="client" autocomplete="off">
                </div>
                <div class="form-group">
                    <label>Budget</label>
                    <input type="text" class="form-control" placeholder="Enter Budget" name="budget" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="projectImage">Project Image</label>
                    <input type="file" class="form-control-file" id="projectImage" name="projectImage" accept="image/*">
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Create Project</button>
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
