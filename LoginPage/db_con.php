<?php
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "company";

    // Create connection
    $con = new mysqli($host, $dbusername, $dbpassword, $dbname);

    // Check for connection errors
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }
?>