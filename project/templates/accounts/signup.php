<?php

$server = "localhost";
$dbusername = "root";
$dbpassword = "";
$db = "project";
$errorMessage = "";
$successMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];


    do {
        if (empty($name) || empty($email) || empty($password)) {
            $errorMessage = "All fields are required!";
            break;
        }
        function error()
        {
            $password = $_POST["password"];
            $confirm = $_POST["confirmpassword"];
            if ("$password" != "$confirm") {
                echo "passwords must match!";
            }
        }

        //create a connection with the database
        $connection = mysqli_connect($server, $dbusername, $dbpassword, $db);

        if (!$connection) {
            $errorMessage = "Connection Failed!";
        }

        //insert user info into the database

        $sql = "INSERT INTO user_data(username, email, userpassword)" . "VALUES ('$name', '$email', '$password')";
        $result = mysqli_query($connection, $sql);

        if (!$result) {
            $errorMessage = "Invalid Query!";
        } else {
            $successMessage = "Account Created Successfully!";
            header("Location: ../home.php");
        }

        //close the connection
        mysqli_close($connection);
    }
    while (false); {

    }
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../static/css/signup.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <title>SIGN UP</title>
</head>

<body>
<img class= "signup-image" src= "../../images/dollar-gill-0V7_N62zZcU-unsplash.jpg">
    <div class="container">
        <div class="nav-bar">
            <ul>
                <div id="nav-home">
                    <li><a href="../home.php">HOME</a></li>
                </div>
                <div id="nav-getresources">
                    <li><a href="../getresources.php">GET
                            RESOURCES</a></li>
                </div>
                <div id="nav-login">
                    <li><a href="login.php">LOG IN</a>
                    </li>
                </div>
                <div id="nav-signup">
                    <li><a href="signup.php">SIGN UP</a>
                    </li>
                </div>
                <div id="nav-blog">
                    <li><a href="../blog_list.php">BLOG</a></li>
                </div>
            </ul>
        </div>
        <h1 id="title">CREATE AN ACCOUNT</h1>
        <div class="errorMessage">
            <?php
            if (!empty($errorMessage)) {
                echo "<strong>$errorMessage</strong>";
            }
            ?>
        </div>
        <span class="forms">
            <form action="http://localhost/astuDigitalResource/project/templates/accounts/signup.php" method="POST">
                <p id="username"><input type="text" name="username" placeholder="Enter Username" required></p>
                <p id="email"><input type="email" name="email" placeholder="Enter Email" required></p>
                <p id="password"><input type="password" name="password" placeholder="Enter password" required></p>
                <p id="confirmpassword"><input type="password" name="confirmpassword" placeholder="Confirm password"
                        required></p>
                <div class="successMessage">
                    <?php
                    if (!empty($successMessage)) {
                        echo "<strong>$successMessage</strong>";
                    }
                    ?>
                </div>
                <button class="btn-signup" type="submit">Submit</button>

            </form>
        </span>
    </div>
</body>
<script src="signup.js"></script>

</html>