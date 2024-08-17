<?php
session_start(); 
include 'connect.php';

$projectid = $_GET['projectid'];
// get session userId
    $userId = $_SESSION['userId'];
    
if (isset($_POST['submit'])) {
    $ChatData = $_POST['chatbox'];


    $query ="INSERT INTO projectchat(userId,projectid,chatData,time) VALUE('$userId','$projectid','$ChatData', NOW())";
    $query_run =mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['status'] = "Image stored successfully";
        header('location: projectChat.php?projectid=' . $projectid);
    } else {
        $_SESSION['status'] = "Image not stored successfully";
        header('location: projectChat.php?projectid=' . $projectid);
    }
}    


// Fetch existing chat data for the project excluding the current user's messages
$fetchQuery = "SELECT * FROM projectchat WHERE projectid = '$projectid' ORDER BY time ASC";
$result = mysqli_query($con, $fetchQuery);


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
            <?php
            $basePath = $_SERVER['DOCUMENT_ROOT'];
            include $basePath . "/COMPANY/functions/projectFunction/projectheading.php";
            ?>
            <!---------------Contents start here ---------------->
            
            <div class="project-chat-container">
                <form method="post" action="">
                    <div class="chatbox">
                        <div class="colum-1">
                             <!-----other member chat ------------>
                             <div class="msg-row msg-row">
                                <img src="fff.png" alt="" class="msg-img">
                                    <div class="msg-text">
                                        <h2>Intensity</h2>
                                        <p>Welcome to the chat I am Intensity</p>
                                        
                                    </div>
                                </div>

                            <?php
                            while ($row = mysqli_fetch_assoc($result)) {
                                $chatUserId = $row['userId'];
                                $chatData = $row['chatData'];
                                $datetime = $row['time'];
                            ?>
                                <div class="msg-row msg-row">
                                <img src="fff.png" alt="" class="msg-img">
                                    <div class="msg-text">
                                        <h2>User <?php echo $chatUserId; ?></h2>
                                        <p><?php echo $chatData; ?></p>
                                        <h5><?php echo $datetime; ?></h5>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>

                        <div class="input-button">
                        <input type="text" placeholder="enter your message here" name="chatbox">
                        <button id="sendMessageBtn" type="submit" name="submit">Send</button>
                        </div>
                    </div>
                    </form>

                    <div class="colum-2">
                        <h2>PROJECT NAME</h2>
                        <h3> Member List</h3>
                        <ul>
                            <li>boart</li>
                            <li>boart</li>
                            <li>boart</li>
                            <li>boart</li>
                            <li>boart</li>
                            <li>boart</li>
                            <li>boart</li>
                     
                        </ul>
                    </div>
                </div>
            </div>
            <!--------Contents end here---->
       
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
