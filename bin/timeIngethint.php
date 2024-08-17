<?php
// get the q parameter from URL
$q = $_REQUEST["q"];

$con = mysqli_connect('localhost', 'root', '', 'librarysystem');
// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// lookup all hints from array if $q is different from ""
if ($q != "") {
    $result = mysqli_query($con, "SELECT * FROM studentslog WHERE studentName='$q'");
    $rowcount = mysqli_num_rows($result);

    $ret = mysqli_query($con, "INSERT INTO `studentslog` (studentName, date, time) VALUES ('$q', NOW(), NOW())");

    if ($ret) {
        date_default_timezone_set('Asia/Manila');
        echo '<div class="alert alert-success"><strong>Success!</strong> Attendance successfully registered on <br>' . date('l jS \of F Y h:i:s A') . '</div>';
        
    } else {
        // Handle the case where insertion fails
    }
} else {
    echo '<div class="alert alert-success"><strong>Success!</strong> Attendance not registered</div>';
    date_default_timezone_set('Asia/Manila');
    echo  date('l jS \of F Y h:i:s A');
}

?>

