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
    <link rel="stylesheet" href= "../static/css/getresources.css">

    <!-- fontawesome cdn icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

            <!-- logout icon -->
            <link href='https://unpkg.com/css.gg@2.0.0/icons/css/log-in.css' rel='stylesheet'>
    
</head>
<body>
    <div class="container">

    <div class="nav-bar">
        <ul>
            <div id="nav-home"><li><a href="home.php">HOME</a></li></div>
            <div id="nav-getresources"><li><a href="http://localhost/astuDigitalResource/project/templates/getresources.php">RESOURCES</a></li></div>
            <div id="nav-blog"><li><a href="blog_list.php">BLOG</a></li></div>
            <?php
                        
                        
                if (!isset($_SESSION)) {
                    echo "<div id=nav-login><li><a href='http://localhost/astuDigitalResource/project/templates/accounts/login.php'>LOG IN</a></li></div>";
                    echo "<div id='nav-signup'><li><a href='http://localhost/astuDigitalResource/project/templates/accounts/signup.php'>SIGN UP</a></li></div>";
                } else {
                    if ($_SESSION["user"]=="bsrat@gmail.com"){
                        echo "<div id='nav-upload'><li><a href='upload.php'>UPLOAD</a></li></div>";
                }
                    //echo "<div id='nav-logout'><li><a href='http://localhost/astuDigitalResource/project/templates/accounts/logout.php'>LOG OUT</a></li></div>";
                    echo "<div id='nav-logout'><li><i class='gg-log-out'></i></li></div>";
                }
            ?>
        </ul>
    </div>
    <div class="container2">

            <?php

                //fetch books info from the database
                $sql= "SELECT * FROM books";
                $result= mysqli_query($connection, $sql);
                $resultCheck= mysqli_num_rows($result);


                if ($resultCheck > 0){
                    //echo '<h1 class="title">Available Resources</h1>';
                    echo "<h1 class='books'>Books</h1>";
                    while($row= mysqli_fetch_assoc($result)) {
                            echo "<div class='books_list'><a href='books_list.php'><img class= 'cover_image' src='../images/{$row['cover_image']}'>","<p class='book_icon'><i class='fa-solid fa-book'></i></p>", "<p class='course_name'>Course Name: {$row['course_name']}</p>","<p class='books_title'>title: {$row['title']}</p>", "<p class='author'>author: {$row['author']}</p>", "<p class='isbn'>isbn: {$row['isbn']}</p>", "<p class='edition'>edition: {$row['edition']}</p></a></div>";
                       }
                            
                    }
                    
                else{
                    echo "No Available Resources. check back later!!";
                }

                //fetch curriculums from the database
                $sql= "SELECT * FROM curriculum";
                $result= mysqli_query($connection, $sql);
                $resultCheck= mysqli_num_rows($result);


                if ($resultCheck > 0){
                    echo "<div class='curriculums'>Curriculums</div>";

                    while($row= mysqli_fetch_assoc($result)) {
                            
                                                                    // to download pdf file of the curriculum
                            echo "<div class='curriculums_list'><a href='curriculums_list.php'>","<p class='pdf'><a href='../curriculum/{$row['file']}'><div class='pdf_icon'><i class='fa-solid fa-file-pdf'></i></div><div class='download'>Download Pdf</div></a></p>","<p class='department'>Department: {$row['department']}</p>", "<p class='description'>Description: {$row['file']}</p></a></div>";
                            }
                            
                    }
                    
                else{
                    echo "No Available Resources. check back later!!";
                }
                
            ?>
            

            
        </div>
    </div>
</body>