<?php


include_once 'db_connectivity.php';
session_start();
require_once "auth_check.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AstuDigitalResource</title>
    <link rel="stylesheet" href="../static/css/home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">

</head>

<body>
    <img class="home-image" src="../images/dollar-gill-0V7_N62zZcU-unsplash.jpg">
    <div class="container">
        <h1 class="title">WELCOME TO</h1>
        <h1 class="title2">ASTU Digital Resources</h1>

        <div class="nav-bar">
            <ul>
                <div id="nav-home">
                    <li><a href="">HOME</a></li>
                </div>
                <div id="nav-getresources">
                    <li><a href="http://localhost/astuDigitalResource/project/templates/getresources.php">RESOURCES</a></li>
                </div>
                <?php
                if (!isset($_SESSION)) {
                    echo "<div id=nav-login><li><a href='http://localhost/astuDigitalResource/project/templates/accounts/login.php'>LOG IN</a></li></div>";
                    echo "<div id='nav-signup'><li><a href='http://localhost/astuDigitalResource/project/templates/accounts/signup.php'>SIGN UP</a></li></div>";
                } else {
                    if ($_SESSION["user"]=="bsrat@gmail.com"){
                        echo "<div id='nav-upload'><li><a href='upload.php'>UPLOAD</a></li></div>";
                }
                    echo "<div id='nav-logout'><li><a href='http://localhost/astuDigitalResource/project/templates/accounts/logout.php'>LOG OUT</a></li></div>";
                }
                ?>
                <div id="nav-blog">
                    <li><a href="blog_list.php">BLOG</a></li>
                </div>

            </ul>
        </div>
        <div class="bio">
            <p class="about"><strong>ABOUT US</strong></p>
            <p>This website is designed to help students, teachers, staff members, and anyone who is struggling to find
                information that is provided by the Adama Science and Technology University.</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores repudiandae ratione ipsum provident
                veritatis voluptas autem ad earum corporis possimus. Impedit laboriosam aut iusto non esse porro
                facilis? Quisquam, assumenda.</p>

            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur odio qui unde ipsum accusantium
                accusamus voluptas vel sint. Eaque modi laborum dolorum cum maiores voluptas adipisci iure nesciunt
                molestias fuga.</p>
        </div>

    </div>
</body>

</html>