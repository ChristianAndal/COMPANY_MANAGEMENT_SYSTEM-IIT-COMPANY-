<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head runat="server">
    <title>Login</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/COMPANY/css/login.css">
</head>

<body>
    <video autoplay loop muted plays-inline class="videobg">
        <source src="/COMPANY/content/background.mp4" type="video/mp4">
    </video>

    <nav>
        <h1>IIT</h1>
        <ul>
            <li><a href="/COMPANY/LandingPage.php">HOME</a></li>
            <li><a href="#">ABOUT</a></li>
            <li><a href="#">DEVELOPERS</a></li>
        </ul>
    </nav>

    <form action="login.php" method="post">
        <h3>Login</h3>

        <label for="username">Username</label>
        <input type="text" placeholder="Username" name="username">

        <label for="password">Password</label>
        <input type="password" placeholder="Password" name="password">

        <!-- Display error message in the 'invalid' label -->
        <?php
        session_start();

        // Check if an error message is set in the session
        if (isset($_SESSION['error_message'])) {
            echo '<label for="invalid" style="color: red;">' . $_SESSION['error_message'] . '</label>';
            unset($_SESSION['error_message']); // Clear the error message
        }
        ?>

        <button type="submit">Log In</button>
        
        <div class="social">
            <!--<div class="go"><i class="fab fa-google"></i>  Google</div>-->
            <!--<div class="fb"><i class="fab fa-medium-m"></i>  Microsoft</div>-->
        </div>
    </form>
</body>

</html>
