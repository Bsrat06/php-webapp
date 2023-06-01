<?php


include_once("db_connectivity.php");
session_start();
require_once("auth_check.php");



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = mysqli_real_escape_string($connection, $_POST["title"]) ;
    $body = mysqli_real_escape_string($connection, $_POST["body"]);
    $image= mysqli_real_escape_string($connection, $_POST["image"]);


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
            $img_result= mysqli_query($connection, $img_sql);
            
        }
        if(!$result || !$img_result){
            echo "All fields are required!";
            header("Location: blog_list.php");
        }
        else{
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
            <!-- logout icon -->
            <link href='https://unpkg.com/css.gg@2.0.0/icons/css/log-in.css' rel='stylesheet'>

</head>

<body>
    <div class="container">
        <form action="" method="POST">
            <p><input type="text" name="title" placeholder="Title" required></p>
            <p><input type="textarea" name="body" placeholder="body" required></p>
            <p>Cover Image: <input type="file" name="image" required></p>
            <button class="btn-publish" type="submit" name="submit">PUBLISH</button>
        </form>
    </div>
</body>