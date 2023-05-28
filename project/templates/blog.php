<?php


session_start();
require_once("auth_check.php");


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href= "../static/css/blog.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    
</head>
<body>
    <div class="container">
        <div class="nav-bar">
            <ul>
                <div id="nav-home"><li><a href="home.php">HOME</a></li></div>
                <div id="nav-about"><li><a href="http://localhost/astuDigitalResource/project/getresources.php">GET RESOURCES</a></li></div>
                <?php
                if (!isset($_SESSION)){
                    echo "<div id=nav-login><li><a href='http://localhost/astuDigitalResource/project/accounts/login.php'>LOG IN</a></li></div>";
                    echo "<div id='nav-signup'><li><a href='http://localhost/astuDigitalResource/project/accounts/signup.php'>SIGN UP</a></li></div>";
                }
                else{
                    echo "<div id='nav-logout'><li><a href='http://localhost/astuDigitalResource/project/templates/accounts/logout.php'>LOG OUT</a></li></div>";
                }
                ?>
                <div id="nav-blog"><li><a href="blog.php">BLOG</a></li></div>
            </ul>
        </div>
        <h1 class="title">Coming Soon!</h1>
    </div>
</body>
