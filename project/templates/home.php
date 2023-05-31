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

    <!-- fontawesome cdn icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body>
    <div class="container">
        <div class="nav-bar">
            <ul>
                <div id="nav-home">
                    <li><a href="">HOME</a></li>
                </div>
                <div id="nav-getresources">
                    <li><a href="http://localhost/astuDigitalResource/project/templates/getresources.php">RESOURCES</a>
                    </li>
                </div>
                <?php
                if (!isset($_SESSION)) {
                    echo "<div id=nav-login><li><a href='http://localhost/astuDigitalResource/project/templates/accounts/login.php'>LOG IN</a></li></div>";
                    echo "<div id='nav-signup'><li><a href='http://localhost/astuDigitalResource/project/templates/accounts/signup.php'>SIGN UP</a></li></div>";
                } else {
                    if ($_SESSION["user"] == "bsrat@gmail.com") {
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
        <h1 class="title">WELCOME TO</h1>
        <h1 class="title2">ASTU Digital Resources</h1>
        <img class="home-image" src="../images/dollar-gill-0V7_N62zZcU-unsplash.jpg">



        <div class="contacts">
            <a class="facebook" href=""><i class="fa-brands fa-facebook"></i></a>
            <a class="instagram" href=""><i class="fa-brands fa-instagram"></i></a>
            <a class="linkedin" href=""><i class="fa-brands fa-linkedin"></i></a>
            <a class="twitter" href=""><i class="fa-brands fa-twitter"></i></a>
            <a class="google" href=""><i class="fa-brands fa-google-plus"></i></a>
        </div>
        <img class="about_image" src="../images/jess-bailey-K47Tk9IEQPQ-unsplash.jpg">
        <p class="about"><strong>ABOUT US</strong></p>
        <div class="about_body">
            <p>This website is designed to help students, teachers, staff members, and anyone who is struggling to find
                information that is provided by the Adama Science and Technology University.</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores repudiandae ratione ipsum provident.
            </p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti fugiat ratione dignissimos, alias ea
                aliquam totam commodi vero placeat itaque adipisci unde ducimus aliquid non, earum neque optio
                consectetur repellat.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas numquam aut quasi</p>
            <p class="about_body2">ipsum dolor sit amet consectetur adipisicing elit. Voluptas numquam aut quasi excepturi culpa
            ducimus quam incidunt, suscipit eveniet id. Voluptas illum vitae nam quis odit dignissimos quam enim
            mollitia!</p>
        </div>
        <div class="why">
            <p>Why Choose This Platform ?</p>
        </div>

        <p class="why_body">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet saepe doloribus quasi
            suscipit
            necessitatibus alias dolorem aut. Labore dignissimos placeat, ullam recusandae fugiat repellat reprehenderit
            asperiores amet, optio numquam nobis?</p>
        <p class="why_body">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet saepe doloribus quasi
            suscipit
            necessitatibus alias dolorem aut. Labore dignissimos placeat, ullam recusandae fugiat repellat reprehenderit
            asperiores amet, optio numquam nobis?</p>
        <p class="why_body">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet saepe doloribus quasi
            suscipit
            necessitatibus alias dolorem aut. Labore dignissimos placeat, ullam recusandae fugiat repellat reprehenderit
            asperiores amet, optio numquam nobis?</p>
    </div>
</body>

</html>