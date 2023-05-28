<?php

$server= "localhost";
$dbusername= "root";
$dbpassword= "";
$db= "project"; 
$errorMessage= "";
$successMessage= "";

if ($_SERVER["REQUEST_METHOD"]== "POST"){
    $name= $_POST["username"];
    $email= $_POST["email"];
    $password= $_POST["password"];

    
    do{
        if ( empty($name) || empty($email) || empty($password)){
            $errorMessage= "All fields are required!";
            break;
        }
        function error(){
            $password= $_POST["password"];
            $confirm= $_POST["confirmpassword"];
            if ("$password"!= "$confirm"){
                echo "passwords must match!";
            }
        }
         
        //create a connection with the database
        $connection= mysqli_connect($server, $dbusername, $dbpassword, $db);

        if (!$connection){
            $errorMessage= "Connection Failed!";
        }

        //insert user info into the database

        $sql= "INSERT INTO user_data(username, email, userpassword)". "VALUES ('$name', '$email', '$password')";
        $result= mysqli_query($connection, $sql);

        if (!$result){
            $errorMessage= "Invalid Query!";
        }
        else{
            $successMessage= "Account Created Successfully!";
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
    <title>SIGN UP</title>
    <link rel="stylesheet" href="../static/css/signup.css">
</head>
<body>
    <div class="container">
        <h1 id="title">CREATE AN ACCOUNT</h1>
        <div class= "errorMessage">
            <?php
            if (!empty($errorMessage)){
                echo "<strong>$errorMessage</strong>";
            }
            ?>
        </div>
        <span class="forms">
            <form action="http://localhost/astuDigitalResource/project/signup.php" method="POST">
                <p id="username"><input type="text" name="username" placeholder="Enter Username" required></p>
                <p id="email"><input type="text" name="email" placeholder="Enter Email" required></p>
                <p id="password"><input type="password" name="password" placeholder="Enter password" required></p>
                <p id="confirmpassword"><input type="password" name="confirmpassword" placeholder="Confirm password" required></p>
                <div class= "successMessage">
                    <?php
                    if (!empty($successMessage)){
                        echo "<strong>$successMessage</strong>";
                    }
                    ?>
                </div>
                <a href= "#"><p id="forgot">forgot password?</p></a>
                <p id="Submit"><button type="submit">Submit</button></p>

            </form>
        </span>
    </div>
</body>
<script src= "signup.js"></script>
</html>