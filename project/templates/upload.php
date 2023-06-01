<?php


include_once("db_connectivity.php");
session_start();
require_once("auth_check.php");

if (isset($_POST["submit"])){
    $file= $_FILES["file"];
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href= "../static/css/upload.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
            <!-- logout icon -->
            <link href='https://unpkg.com/css.gg@2.0.0/icons/css/log-in.css' rel='stylesheet'>
    
</head>
<body>
    <div class="container">
        <div class="nav-bar">
            <ul>
                <div id="nav-home"><li><a href="home.php">HOME</a></li></div>
                <div id="nav-getresources"><li><a href="http://localhost/astuDigitalResource/project/templates/getresources.php">RESOURCES</a></li></div>
                <?php
                if (!isset($_SESSION)){
}
                else{
                    echo "<div id='nav-logout'><li><i class='gg-log-out'></i></li></div>";
                }
                ?>
                <div id="nav-blog"><li><a href="blog_list.php">BLOG</a></li></div>
            </ul>
        </div>
        <h1 class="title">Upload a new document!</h1>
    </div>
    <p class="new_blog"><a href="new_blog_post.php">New Blog Post</a></p>
    


</body>
