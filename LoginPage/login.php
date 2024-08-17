<?php

// Check if the form is submitted using POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the values from the login form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Include the database connection
    include "db_con.php";

    // Validate login using a prepared statement to prevent SQL injection
    $query = "SELECT * FROM users WHERE username = ? AND password = ?";
    $stmt = $con->prepare($query);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $results = $stmt->get_result();

    // Check if there is a matching user
    if ($results !== false && $results->num_rows == 1) {
        // Fetch user details
        $row = $results->fetch_assoc();

        // Start a session
        session_start();

        // Store user ID in session variable
        $_SESSION['userId'] = $row['userId'];

        // Fetch user role
        $userRole = $row['roleId'];

        // Close the database connection before redirecting
        $stmt->close();
        $con->close();

        // Redirect based on user role
        switch ($userRole) {
            case 1:
                // Redirect to admin dashboard
                header("Location: /COMPANY/Dashboard/adminDashboard.php");
                exit();
            case 2:
                // Redirect to employee page
                header("Location: /COMPANY/Dashboard/employeePage.php");
                exit();
            default:
                // Handle other roles if needed
                $error_message = "Unknown user role. Please contact support.";
                break;
        }
    } else {
        // Login failed
        session_start();
        $_SESSION['error_message'] = "Invalid username or password. Please try again.";
        header("Location: LoginPage.php");
        exit();
    }
}
?>
