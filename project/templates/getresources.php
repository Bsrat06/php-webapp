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
    
</head>
<body>
    <div class="container">

    <div class="nav-bar">
        <ul>
            <div id="nav-home"><li><a href="home.php">HOME</a></li></div>
            <div id="nav-getresources"><li><a href="http://localhost/astuDigitalResource/project/templates/getresources.php">RESOURCES</a></li></div>
            <div id="nav-blog"><li><a href="blog.php">BLOG</a></li></div>
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
        </ul>
    </div>
    <div class="container2">

            <?php

                //fetch books info from the database
                $sql= "SELECT * FROM books";
                $result= mysqli_query($connection, $sql);
                $resultCheck= mysqli_num_rows($result);


                if ($resultCheck > 0){
                    echo '<h1 class="title">Available Resources</h1>';
                    echo "<h1 class='books_title'>Books</h1>";
                    //echo "<h1 class='new_books'>new</h1>";
                    //echo "<h1>Select course</h1>";
                    while($row= mysqli_fetch_assoc($result)) {
                            echo "<div class='bookslist'>";
                            echo "<h3>Course Name: {$row['course_name']}</h3>". "<br>";
                            echo $row['title']. "<br>";
                            echo $row['author']. "<br>";
                            echo $row['isbn']. "<br>";
                            echo $row['edition']. "<br>";
                            echo "</div>";
                        }
                            
                    }
                    
                else{
                    echo "No Available Resources. check back later!!";
                }

                ?>

                <div class="coursesList">
                </div>

                
                <?php

                /*
                //fetch courses info from the database
                $sql= "SELECT * FROM courses";
                $result= mysqli_query($connection, $sql);
                $resultCheck= mysqli_num_rows($result);


                if ($resultCheck > 0){
                    
                    while($row= mysqli_fetch_assoc($result)) {
                        echo $row['coursename']. ": ";
                        echo $row['coursecode']. "<br><br>";
                    }
                }
                
                ?>
                */
            ?>
            
        </div>
    </div>
</body>