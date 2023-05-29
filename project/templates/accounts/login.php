<?php

//to keep the user logged in via session
session_start();

$server= "localhost";
$dbusername= "root";
$dbpassword= "";
$db= "project"; 
$errorMessage= "";
$successMessage= "";

if ($_SERVER["REQUEST_METHOD"]== "POST"){
    $email= $_POST["email"];
    $password= $_POST["password"];

    
    do{
        if (empty($email) || empty($password)){
            $errorMessage= "All fields are required!";
            break;
        }

        //create a connection with the database
        $connection= mysqli_connect($server, $dbusername, $dbpassword, $db);

        if (!$connection){
        $errorMessage= "Connection Failed!";
        }
        else{
            //fetch user info from the database
            $sql= "SELECT * FROM user_data WHERE email= '$email' AND userpassword= '$password'";
            $result= mysqli_query($connection, $sql);
        }
            
    
        if (!$result){
            $errorMessage= "Invalid Query!";
        }

        if (mysqli_num_rows($result)){
            $_SESSION["user"]= $email;
            echo $_SESSION["user"];
        }
        if(mysqli_num_rows($result)==0){
            $errorMessage= "Invalid credentials!";
        }
            
        else{
            $successMessage= "LOGIN Successful!";
            header("Location: ../home.php");
        }

        //close the connection
        mysqli_close($connection);
    }
    while(false);{

    }
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOG IN</title>
    <link rel="stylesheet" href="../../static/css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
</head>
<body>
    <img class= "login-image" src= "../../images/photo_2023-05-28_11-31-55.jpg">
    <div class="container">
        <div class="nav-bar">
            <ul>
                <div id="nav-home"><li><a href="../home.php">HOME</a></li></div>
                <div id="nav-getresources"><li><a href="http://localhost/astuDigitalResource/project/templates/getresources.php">GET RESOURCES</a></li></div>
                <div id="nav-login"><li><a href="http://localhost/astuDigitalResource/project/templates/accounts/login.php">LOG IN</a></li></div>
                <div id="nav-signup"><li><a href="http://localhost/astuDigitalResource/project/templates/accounts/signup.php">SIGN UP</a></li></div>
                <div id="nav-blog"><li><a href="#">BLOG</a></li></div>
            </ul>
        </div>
        <div class="container2">
            <h1 class="title">LOG IN</h1>
            <div class= "errorMessage">
                <?php
                if (!empty($errorMessage)){
                    echo "<strong>$errorMessage</strong>";
                }
                ?>
            </div>
            <span class="forms">
                <form action="http://localhost/astuDigitalResource/project/templates/accounts/login.php" method="POST">
                    <p class="email">Email<input type="email" name="email" required></p>
                    <p class="password">Password<input type="password" name="password" required></p>
                    <a class="forgot" href="#"><p>forgot password?</p></a>
                    <div class= "successMessage">
                        <?php
                        if (!empty($successMessage)){
                            echo "<strong>$successMessage</strong>";
                        }


                        ?>
                    </div>
                    <p class="signin"><button class= "btn-signin" type="submit">Sign In</button></p>
                    <p class="or">or<hr id="left"><hr id="right"></p>
                    <a href="signup.php"><p class="create">create a new account.</p></a>
                </form>
            </span>
        </div>
    </div>
</body>
</html>