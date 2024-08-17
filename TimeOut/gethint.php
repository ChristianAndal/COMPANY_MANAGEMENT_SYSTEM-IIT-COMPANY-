<?php
// ...
$q = $_REQUEST["q"];

//$hint = "";
$con = mysqli_connect('localhost', 'root', '', 'company');
// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// lookup all hints from array if $q is different from ""
if ($q != "") {
  $result = mysqli_query($con, "SELECT * FROM attendancelog WHERE employeeId='$q'");
  $rowcount = mysqli_num_rows($result);

  $ret = mysqli_query($con, "INSERT INTO `attendancelog` (employeeId, date, timeOut) VALUES ('$q', NOW(), NOW())");

  if ($ret) {
      date_default_timezone_set('Asia/Manila');
      echo '<div class="alert alert-success"><strong>Successfully!</strong> Time OUT! Attendance successfully registered on <br>' . date('l jS \of F Y h:i:s A') . '</div>';
      
  } else {
      // Handle the case where insertion fails
  }
} else {
  echo '<div class="alert alert-success"><strong>Success!</strong> Attendance not registered</div>';
  date_default_timezone_set('Asia/Manila');
  echo  date('l jS \of F Y h:i:s A');
}

?>
