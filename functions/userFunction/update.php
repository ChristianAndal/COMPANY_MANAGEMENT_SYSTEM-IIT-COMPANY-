<?php
    include 'connect.php';
    $id = $_GET['updateid'];

    // Select user details using prepared statement
    $sql = "SELECT * FROM users WHERE userId = ?";
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result)) {
        $name = $row['name'];
        $username = $row['username'];
        $userRole = $row['roleId'];
        $email = $row['email'];
        $mobile = $row['mobile'];
        $password = $row['password'];
    }

    mysqli_stmt_close($stmt);

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $username = $_POST['username'];
        $userRole = $_POST['roleId']; // Change to user_role
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $password = $_POST['password'];

        // Update user details using prepared statement
        $sql = "UPDATE users SET name=?, username=?, roleId=?, email=?, mobile=?, password=? WHERE userId=?";
        $stmt = mysqli_prepare($con, $sql);
        mysqli_stmt_bind_param($stmt, "ssisssi", $name, $username, $userRole, $email, $mobile, $password, $id);
        mysqli_stmt_execute($stmt);

        mysqli_stmt_close($stmt);

        header('location:display.php');
        exit();
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
    <span class="text">Update Users</span>
    </div>
    <div class="main-content">
    <!---------------COntents start here ---------------->
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter Name" name="name" value="<?php echo $name; ?>" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" placeholder="Enter Username" name="username" value="<?php echo $username; ?>" autocomplete="off">
            </div>
            <div class="form-group">
                <label>User Role</label>
                <select class="form-control" name="roleId">
                    <option value="1" <?php echo ($userRole == 1) ? 'selected' : ''; ?>>Admin</option>
                    <option value="2" <?php echo ($userRole == 2) ? 'selected' : ''; ?>>Employee</option>
                </select>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" placeholder="Enter Email" name="email" value="<?php echo $email; ?>" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Mobile</label>
                <input type="text" class="form-control" placeholder="Enter Mobile" name="mobile" value="<?php echo $mobile; ?>" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="text" class="form-control" placeholder="Enter Password" name="password" value="<?php echo $password; ?>" autocomplete="off">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Update User</button>
        </form>
    </div>
 <!--------contents end here---->
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


