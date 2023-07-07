<?php


include_once("db_connectivity.php");
session_start();
require_once("auth_check.php");



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = mysqli_real_escape_string($connection, $_POST["title"]);
    $body = mysqli_real_escape_string($connection, $_POST["body"]);
    $image = mysqli_real_escape_string($connection, $_POST["image"]);


    do {
        if (empty($title) || empty($body)) {
            $errorMessage = "All fields are required!";
            break;
        } else {
            //insert into blog database
            $sql = "INSERT INTO blog(title, body)" . "VALUES('$title', '$body')";
            $result = mysqli_query($connection, $sql);
            //insert image into blog database
            $img_sql = "INSERT INTO blog(cover_image)" . "VALUES('$image')";
            $img_result = mysqli_query($connection, $img_sql);

        }
        if (!$result || !$img_result) {
            echo "All fields are required!";
            header("Location: blog_list.php");
        } else {
            echo "Blog Published Successfully!";
            header("Location: blog_list.php");
        }
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
    <title>AstuDigitalResource</title>
    <link rel="stylesheet" href="../static/css/new_blog_post.css">
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
                    echo "<div id='nav-logout'><li><a href='accounts/logout.php'><i class='fa-solid fa-power-off'></i></a></li></div>";
                } else {
                }
                ?>
                <div id="nav-blog">
                    <li><a href="blog_list.php">BLOG</a></li>
                </div>
            </ul>
        </div>
        <div class="container2">
            <div class="title">New Blog Post</div>
            <form action="" method="POST">
                <p><input type="text" name="title" placeholder="Title" required></p>
                <p><input id="textarea" type="textarea" name="body" placeholder="body" required></p>
                <p>Cover Image<input type="file" name="image" optional></p>
                <button class="btn-publish" type="submit" name="submit">PUBLISH</button>
            </form>
        </div>
    </div>
</body>