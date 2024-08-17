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

    if ($rowcount > 0) {
        // Student record already exists, update the time_out column
        $ret = mysqli_query($con, "UPDATE studentslog SET time_out = NOW() WHERE studentName = '$q'");
        
        if ($ret) {
            date_default_timezone_set('Asia/Manila');
            echo '<div class="alert alert-success"><strong>Success!</strong> Attendance time-out successfully registered on <br>' . date('l jS \of F Y h:i:s A') . '</div>';
        } else {
            // Handle the case where the update fails
        }
    } else {
        // Student record does not exist, insert a new record
        $ret = mysqli_query($con, "INSERT INTO studentslog (studentName, date, time, time_out) VALUES ('$q', NOW(), NOW(), NOW())");
        
        if ($ret) {
            date_default_timezone_set('Asia/Manila');
            echo '<div class="alert alert-success"><strong>Success!</strong> Attendance check-in successfully registered on <br>' . date('l jS \of F Y h:i:s A') . '</div>';
        } else {
            // Handle the case where the insertion fails
        }
    }
} else {
    echo '<div class="alert alert-success"><strong>Success!</strong> Attendance not registered</div>';
    date_default_timezone_set('Asia/Manila');
    echo  date('l jS \of F Y h:i:s A');
}

?>
