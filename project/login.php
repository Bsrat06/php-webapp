<?php

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
            echo "HELLO ";
        }
        if(mysqli_num_rows($result)==0){
            $errorMessage= "Invalid credentials!";
        }
            
        else{
            $successMessage= "LOGIN Successful!";
            header("Location: home.php");
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
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <img class= "login-image" src= "images/books_3-wallpaper-2400x1350.jpg">
    <div class="container">
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
                <form action="http://localhost/astuDigitalResource/project/login.php" method="POST">
                    <p class="email">Email<input type="email" name="email" required></p>
                    <p class="password">Password<input type="password" name="password" required></p>
                    <a href="#"><p class="forgot">forgot password?</p></a>
                    <div class= "successMessage">
                        <?php
                        if (!empty($successMessage)){
                            echo "<strong>$successMessage</strong>";
                        }
                        ?>
                    </div>
                    <p class="signin"><button class= "btn-signin" type="submit">Sign In</button></p>
                </form>
            </span>
        </div>
    </div>
</body>
</html>