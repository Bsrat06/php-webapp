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
    <link rel="stylesheet" href="../static/css/blog_list.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <!-- fontawesome cdn icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Rounded font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">

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
                echo "<div id='nav-logout'><li><a href='accounts/logout.php'><i class='fa-solid fa-power-off'></i></a></li></div>";

                ?>
                <div id="nav-blog">
                    <li><a href="blog_list.php">BLOG</a></li>
                </div>
            </ul>
        </div>
        <div class='front_page'>
            <p class="front_title">Latest Blog</p>
            <p class="front_title2">Posts</p>
            <img class='front_image' src='../images/google-deepmind-4QVqSh4VvP4-unsplash.jpg'>
        </div>
        <div class="container2">
            <?php
            if ($_SESSION["user"] == "bsrat@gmail.com") {
                "<a class='add_blog' href= 'new_blog_post.php'>Add Blog Post</a><br>";
            }
            $sql = "SELECT * FROM blog";
            $result = mysqli_query($connection, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<div class='blog_list'><a href='blog_detail.php'><img class= 'cover_image' src='../images/{$row['cover_image']}'>", "<p class='blog_title'>{$row['title']}</p>", "<p class='date'>posted on: {$row['publish_date']}</p></a></div>";
                }
            }
            ?>
        </div>
    </div>
    <script src="../static/js/home.js"></script>
</body>

<footer>
    <div class="top">
        <div class="founded">
            <p class="title">YEAR FOUNDED</P>
            <p class="body">1993</p>
        </div>
        <div class="top_location">
            <p class="title">LOCATION</P>
            <p class="body">ADAMA, ETHIOPIA</p>
        </div>
    </div>
    <div class="get_intouch">
        <p class="title">Get in touch</p>
        <p class="body">bsrat06@astuniversity.com</p>
    </div>
    <div class="connect">
        <p class="title">Connect</p>
        <p class="body">LinkedIn</p>
        <p class="body">Instagram</p>
    </div>
    <div class="detail">
        <p class="title">Detail</p>
        <p class="body">Adama Science And Technology University</p>
        <p class="body">College Str,21</p>
        <p class="body">Adama,Ethiopia</p>
    </div>
</footer>