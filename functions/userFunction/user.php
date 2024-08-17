<?php
    include 'connect.php';
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $username = $_POST['username'];
        $userRole = $_POST['user_role']; // Change to user_role
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $password = $_POST['password'];

        $sql = "INSERT INTO users (name, username, roleId, email, mobile, password) VALUES ('$name', '$username', '$userRole', '$email', '$mobile', '$password')";
        $result = mysqli_query($con, $sql);

        if($result){
            header('location:display.php');
        } else {
            die(mysqli_error($con));
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
    <span class="text">Create Users</span>
    </div>
    <div class="main-content">
    <!---------------COntents start here ---------------->
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter Name" name="name" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" placeholder="Enter Username" name="username" autocomplete="off">
            </div>
            <div class="form-group">
                <label>User Role</label>
                <select class="form-control" name="user_role">
                    <option value="1">Admin</option> <!-- Assigning value 1 for Admin -->
                    <option value="2">Employee</option> <!-- Assigning value 2 for Employee -->
                </select>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" placeholder="Enter Email" name="email" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Mobile</label>
                <input type="text" class="form-control" placeholder="Enter Mobile" name="mobile" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="text" class="form-control" placeholder="Enter Password" name="password" autocomplete="off">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Create User</button>
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


