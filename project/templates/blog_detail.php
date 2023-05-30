<?php

include_once("db_connectivity.php");
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
    <link rel="stylesheet" href="../static/css/blog_detail.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">

</head>

<body>
    <div class="container">
        <div class="nav-bar">
            <ul>
                <div id="nav-home">
                    <li><a href="home.php">HOME</a></li>
                </div>
                <div id="nav-getresources">
                    <li><a href="http://localhost/astuDigitalResource/project/templates/getresources.php">RESOURCES</a>
                    </li>
                </div>
                <?php

                if ($_SESSION["user"] == "bsrat@gmail.com") {
                    echo "<div id='nav-upload'><li><a href='upload.php'>UPLOAD</a></li></div>";
                }
                echo "<div id='nav-logout'><li><a href='http://localhost/astuDigitalResource/project/templates/accounts/logout.php'>LOG OUT</a></li></div>";

                ?>
                <div id="nav-blog">
                    <li><a href="blog_list.php">BLOG</a></li>
                </div>
            </ul>
        </div>
        <h1 class="title">Latest Blog Posts</h1>
        <a href="new_blog_post.php">Add Blog Post</a><br>
        <?php
        $sql = "SELECT * FROM blog";
        $result = mysqli_query($connection, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                "<div class='blog_list'>";
                echo "<p class='blog_title'>{$row['title']}</p>";
                echo "<p class='blog_body'>{$row['body']}</p>";
                echo "<p class='date'>posted on: {$row['publish_date']}</p>";
                "</div>";
            }
        }
        ?>
    </div>
</body>