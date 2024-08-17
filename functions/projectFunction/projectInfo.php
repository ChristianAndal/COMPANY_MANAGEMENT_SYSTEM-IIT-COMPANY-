<?php
include 'connect.php';
$id = $_GET['projectid'];

// Select user details using prepared statement
$sql = "SELECT * FROM project WHERE projectid = ?";
$stmt = mysqli_prepare($con, $sql);
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);

if ($row = mysqli_fetch_assoc($result)) {
    $projectname = $row['projectname'];
    $description = $row['projectdescription'];
    $status = $row['status'];
    $client = $row['client'];
    $budget = $row['budget'];
    $projectimage = $row['projectimage'];
    $projectid = $row['projectid'];
} else {
    // Handle the case where no matching record is found
    // You may redirect the user to an error page or display a message
    die("Project not found");
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
function getpercent($status){
    switch ($status){
        case 'Planning':
            return '20';
        case 'Designing':
            return '40';
        case 'Development':   
            return '60';
        case 'Testing':
            return '80';
        case 'Implementation':
            return '95';
        case 'Finish':
            return '100';
        default:    
            return '0';
    }
}

function getchart($status){
    switch ($status){
        case 'Planning':
            return 'chart-progress less';
        case 'Designing':
            return 'chart-progress less';
        case 'Development':   
            return 'chart-progress';
        case 'Testing':
            return 'chart-progress';
        case 'Implementation':
            return 'chart-progress';
        case 'Finish':
            return 'chart-progress';
        default:    
            return 'chart-progress less';
    }
}

?>

<?php
$basePath = $_SERVER['DOCUMENT_ROOT'];
include $basePath . "/COMPANY/SideBar/adminSidebar.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Add your head content here -->
</head>
<body>
<section class="home-section">
    <div class="home-content">
        <i class='bx bx-menu'></i>
        <span class="text">Projects</span>
    </div>
    <div class="main-content">
        <?php
        $basePath = $_SERVER['DOCUMENT_ROOT'];
        include $basePath . "/COMPANY/functions/projectFunction/projectheading.php";
        ?>

        <div class="project-container">
            <div class="project-image-boarder">
            <img src="<?php echo $row['projectimage']; ?>" class="project-image">

            </div>

            <div class="project-info">
                <h2><?php echo isset($projectname) ? $projectname : ""; ?></h2>
                <div>
                    <button onclick="window.location.href='updateProject.php?projectid=<?php echo $projectid; ?>'" class="edit-bnt"  id="editButton">Edit</button>
                    <button onclick="window.location.href='deleteProject.php?projectid=<?php echo $projectid; ?>'" class="del-bnt" id="deleteButton">Delete</button>
                    <button id="downloadButton" class="download-bnt" >Download</button>
                </div>
                <h3>Client : <?php echo isset($client) ? $client : ""; ?></h3>
                <h3>Status : </h3> <h3 style="color: <?php echo getStatusColor($row['status']); ?>"><?php echo isset($client) ? $status : ""; ?></h3>
                <h3>Budget :<span> ₱ </span> <?php echo isset($budget) ? $budget : ""; ?></h3>
                <h3>Description :</h3>
                <div class="description-box">
                    <p><?php echo isset($description) ? $description : ""; ?></p>
                </div>
            </div>

            <!---edit --->

            <div class="project-right-side-container">
            <div class="project-date-container">
                <h2>DATE</h2>
                <h3><?php echo date('F j Y'); ?></h3>

            </div>
           

            <!---chart --->
            <div class="chartcon">
            <div class="project-chart-container">
                <div class="<?php echo getchart($row['status']); ?>" style="--i:<?php echo getpercent($row['status']); ?>;--clr:<?php echo getStatusColor($row['status']); ?>;">
                    <h3><?php echo getpercent($row['status']); ?><span>%</span></h3>
                    <h4>Progress</h4>
                </div>
            </div>
            </div>


            </div>

            
             <!---edit --->

        </div>
    </div>
</section>

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
