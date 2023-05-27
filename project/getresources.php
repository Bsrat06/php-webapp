<?php

include_once 'db_connectivity.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AstuDigitalResource</title>
    <link rel="stylesheet" href= "getresources.css">
    
</head>
<body>
    <div class="container">
        <h1 class="title">Available Resources</h1>
<body>
    <div class="nav-bar">
        <ul>
            <div id="nav-home"><li><a href="home.php">HOME</a></li></div>
            <div id="nav-about"><li><a href="http://localhost/astuDigitalResource/project/getresources.php">GET RESOURCES</a></li></div>
            <div id="nav-login"><li><a href="http://localhost/astuDigitalResource/project/login.php">LOG IN</a></li></div>
            <div id="nav-signup"><li><a href="http://localhost/astuDigitalResource/project/signup.php">SIGN UP</a></li></div>
            <div id="nav-blog"><li><a href="#">BLOG</a></li></div>
        </ul>
    </div>
    
    <div class="booksList">
            <?php

            //fetch books info from the database
            $sql= "SELECT * FROM books";
            $result= mysqli_query($connection, $sql);
            $resultCheck= mysqli_num_rows($result);


            if ($resultCheck > 0){
                echo "<h1>Books</h1>";
                //echo "<h1>Select course</h1>";
                while($row= mysqli_fetch_assoc($result)) {
                    echo "<h3>Course Name: {$row['course_name']}</h3>". "<br>";
                    echo $row['title']. "<br>";
                    echo $row['author']. "<br>";
                    echo $row['isbn']. "<br>";
                    echo $row['edition']. "<br><br><br>";


                }
            }

            ?>
        </div>
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
            */
                ?>
            </div>
    </body>