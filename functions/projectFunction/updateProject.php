<?php
include 'connect.php';

if (!empty($_GET['projectid'])) {
    $projectid = $_GET['projectid'];

    // Use prepared statements to prevent SQL injection
    $query = "SELECT * FROM project WHERE projectid = ?";
    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, "i", $projectid);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result)) {
        $status = $row['status'];
    } else {
        echo "No Records found";
    }

    mysqli_stmt_close($stmt);
} else {
    echo "Invalid project ID";
}
//
//gets the value from the html file 
if (isset($_POST['submit'])) {
    $projectname = $_POST['projectname'];
    $description = $_POST['description'];
    $status = $_POST['status'];
    $client = $_POST['client'];
    $budget = $_POST['budget'];
    $oldimage = $_POST['save-old-projectImage'];

    //sets the value of the image 
      
    $uploadDir = '/COMPANY/content/upload/';
    $uploadPath = $_SERVER['DOCUMENT_ROOT'] . $uploadDir;
    $projectImage = $_FILES['projectImage']['name'];
    $uploadFile = $uploadPath . $projectImage;

    if( $projectImage == ''){
    $query = "UPDATE project 
          SET projectname = '$projectname',
              projectdescription = '$description',
              status = '$status',
              client = '$client',
              budget = '$budget',
              projectimage = '$oldimage'
          WHERE projectid = '$projectid'";
        $query_run = mysqli_query($con, $query);
        if($query_run)
        {
        
            $_SESSION['status'] = "Image stored succesfully";
            header('location:project.php');
        }
        else{
            $_SESSION['status'] = "Image not stored succesfully";
            header('location:project.php');
        }
    }

    else{
        $query = "UPDATE project 
        SET projectname = '$projectname',
            projectdescription = '$description',
            status = '$status',
            client = '$client',
            budget = '$budget',
            projectimage = '$uploadDir$projectImage'
        WHERE projectid = '$projectid'";

      $query_run = mysqli_query($con, $query);
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
        <span class="text">Update Project</span>
    </div>
    <div class="main-content">
        <!---------------Contents start here ---------------->
        <div class="container my-5">
        <?php
        include 'connect.php';
        $projectid = $_GET['projectid'];
        $querry = "SELECT * FROM project WHERE projectid ='$projectid'";
        $querry_run = mysqli_query($con , $querry );
        if(mysqli_num_rows($querry_run) > 0)
        {
            foreach($querry_run as $row)
            {
                $status = $row['status'];
            ?>
            <form method="post" enctype="multipart/form-data">
                <input type="hidden" name="project_Id" value="<?php echo $row['projectname'];?>">
                <div class="form-group">
                    <label>Project Name</label>
                    <input type="text" class="form-control" value="<?php echo $row['projectname'];?>" name="projectname" autocomplete="off">
                </div>
                <div class="form-group">
                    <label>Project Description</label>
                    <textarea name="description" class="form-control" placeholder="Enter Project description"><?php echo $row['projectdescription'];?></textarea>
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <select class="form-control" name="status">
                    <option value="Planning" <?php echo ($status === 'Planning') ? 'selected' : ''; ?>>Planning</option>
                        <option value="Designing" <?php echo ($status === 'Designing') ? 'selected' : ''; ?>>Designing</option>
                        <option value="Development" <?php echo ($status === 'Development') ? 'selected' : ''; ?>>Development</option>
                        <option value="Testing" <?php echo ($status === 'Testing') ? 'selected' : ''; ?>>Testing</option>
                        <option value="Implementation" <?php echo ($status === 'Implementation') ? 'selected' : ''; ?>>Implementation</option>
                        <option value="Finish" <?php echo ($status === 'Finish') ? 'selected' : ''; ?>>Finish</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Client</label>
                    <input type="text" class="form-control" value="<?php echo $row['client'];?>" placeholder="Enter Client" name="client" autocomplete="off">
                </div>
                <div class="form-group">
                    <label>Budget</label>
                    <input type="text" class="form-control" value="<?php echo $row['budget'];?>" placeholder="Enter Budget" name="budget" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="projectImage">Project Image</label>
                    <input type="file" class="form-control-file" id="projectImage" name="projectImage" accept="image/*">
                    <input type="hidden" name="save-old-projectImage" value="<?php echo $row['projectimage'];?>">
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Update Project</button>
            </form>

        <?php
        }
        }
        else
        {
            echo "No Records found";
        }

?>
          
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
