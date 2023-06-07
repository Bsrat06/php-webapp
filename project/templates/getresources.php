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
    <link rel="stylesheet" href="../static/css/getresources.css">

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


        <div class="nav-bar">
            <ul>
                <div id="nav-home">
                    <li><a href="home.php">HOME</a></li>
                </div>
                <div id="nav-getresources">
                    <li><a href="http://localhost/astuDigitalResource/project/templates/getresources.php">RESOURCES</a>
                    </li>
                </div>
                <div id="nav-blog">
                    <li><a href="blog_list.php">BLOG</a></li>
                </div>
                <?php


                if (!isset($_SESSION)) {
                    echo "<div id=nav-login><li><a href='http://localhost/astuDigitalResource/project/templates/accounts/login.php'>LOG IN</a></li></div>";
                    echo "<div id='nav-signup'><li><a href='http://localhost/astuDigitalResource/project/templates/accounts/signup.php'>SIGN UP</a></li></div>";
                } else {
                    if ($_SESSION["user"] == "bsrat@gmail.com") {
                        echo "<div id='nav-upload'><li><a href='upload.php'>UPLOAD</a></li></div>";
                    }
                    //echo "<div id='nav-logout'><li><a href='http://localhost/astuDigitalResource/project/templates/accounts/logout.php'>LOG OUT</a></li></div>";
                    echo "<div id='nav-logout'><li><a href='accounts/logout.php'><i class='fa-solid fa-power-off'></i></a></li></div>";
                }
                ?>
            </ul>
        </div>

        <div class='front_page'>
            <p class="title">Getting Beyond the</p> <p class="title2">Average</p>
            <img class='resource_image' src='../images/jess-bailey-_z2aaldUAFs-unsplash.jpg'>
            <div class="front_links">
                <a href= "#books"><p class="books_front_link">books</p></a>
                <a href= "#curriculums"><p class="curriculums_front_link">curriculums</p></a>
                <a href= "#lectures"><p class="lectures_front_link">lectures</p></a>
                <a href= "#mid-exams"><p class="mid-exams_front_link">mid-exams</p></a>
                <a href= "#final-exams"><p class="final-exams_front_link">final-exams</p></a>
                <a href= "#video_tutorials"><p class="tutorials_front_link">tutorials</p></a>
            </div>
        </div>


        <div class="container2">


            <?php

            //fetch books info from the database
            $sql = "SELECT * FROM books";
            $result = mysqli_query($connection, $sql);
            $resultCheck = mysqli_num_rows($result);


            if ($resultCheck > 0) {
                if ($_SESSION["user"] == "bsrat@gmail.com") {
                    echo "<div class='upload'><a href='upload_book.php'>Upload  &nbsp<i class='fa-solid fa-plus'></i></a></div>";
                }
                echo "<h1 class='books' id='books'>Books</h1>";

                $cssClasses = ['class1', 'class2'];
                $i = 0;


                while ($row = mysqli_fetch_assoc($result)) {

                    $cssClass = $cssClasses[$i % count($cssClasses)];

                    echo "<div class='$cssClass' data-tilt><img class= 'cover_image' src='../files/books/cover/{$row['cover_image']}'>", "<a href= '../files/books/{$row['file']}'><p class='book_icon'><i class='fa-solid fa-book'></i></p><p class='download_icon'><i class='fa-solid fa-download'></i></p>", "<p class='course_name'>Course Name: {$row['course_name']}</p>", "<p class='books_title'>title: {$row['title']}</p>", "<p class='author'>author: {$row['author']}</p>", "<p class='isbn'>isbn: {$row['isbn']}</p>", "<p class='edition'>edition: {$row['edition']}</p></a></div>";

                    $i++;
                    if ($i == 2) {
                        $i == 0;
                    }

                }

            } else {
                echo "No Available Resources. check back later!!";
            }

            //fetch curriculums from the database
            $sql = "SELECT * FROM curriculum";
            $result = mysqli_query($connection, $sql);
            $resultCheck = mysqli_num_rows($result);


            if ($resultCheck > 0) {
                echo "<div class='curriculums' id='curriculums'>Curriculums</div>";

                while ($row = mysqli_fetch_assoc($result)) {

                    // to download pdf file of the curriculum
                    echo "<div class='curriculums_list' data-tilt><a href='curriculums_list.php'>", "<p class='pdf'><a href='../files/curriculum/{$row['file']}'><div class='pdf_icon'><i class='fa-solid fa-file-pdf'></i></div><p class='file_download_icon'><i class='fa-solid fa-download'></i></p></a></p>", "<p class='department'>Department: {$row['department']}</p>", "<p class='description' Description:> {$row['file']}</p></a></div>";
                }

            } else {
                echo "No Available Resources. check back later!!";
            }


            //fetch lectures from the database
            $sql = "SELECT * FROM lectures";
            $result = mysqli_query($connection, $sql);
            $resultCheck = mysqli_num_rows($result);


            if ($resultCheck > 0) {
                echo "<div class='lectures' id='lectures'>Lectures (PDFs and PPTXs)</div>";

                while ($row = mysqli_fetch_assoc($result)) {

                    // to download pdf file of the lectures
                    echo "<div class='lectures_list' data-tilt><a href='lectures_list.php'>", "<p class='pdf'><a href='../files/lectures/{$row['course_name']}/{$row['file']}'><div class='file_icon'><i class='fa-solid fa-file'></i></div><p class='file_download_icon'><i class='fa-solid fa-download'></i></p></a></p>", "<p class='lectures_course_name'>Course Name: {$row['course_name']}</p>", "<p class='lectures_title'>Title: {$row['title']}</p></a></div>";
                }

            } else {
                echo "No Available Resources. check back later!!";
            }

            //fetch mid-exams from the database
            $sql = "SELECT * FROM mid_exams";
            $result = mysqli_query($connection, $sql);
            $resultCheck = mysqli_num_rows($result);


            if ($resultCheck > 0) {
                echo "<div class='mid_exams' id='mid-exams'>Mid-Exams (PDFs and Images)</div>";

                while ($row = mysqli_fetch_assoc($result)) {

                    // to download pdf file of the mid_exams
                    echo "<div class='mid_exams_list' data-tilt><a href='mid_exams_list.php'>", "<p class='mid_exams_files'><a href='../files/exams/mid-exams/{$row['course_name']}/{$row['file']}'><div class='mid_exams_file_icon'><i class='fa-solid fa-file'></i></div><p class='mid_exams_file_download_icon'><i class='fa-solid fa-download'></i></p></a></p>", "<p class='mid_exams_course_name'>Course Name: {$row['course_name']}</p>", "<p class='mid_exams_title'>Title: {$row['title']}</p></a></div>";
                }

            } else {
                echo "No Available Resources. check back later!!";
            }


            //fetch final-exams from the database
            $sql = "SELECT * FROM final_exams";
            $result = mysqli_query($connection, $sql);
            $resultCheck = mysqli_num_rows($result);


            if ($resultCheck > 0) {
                echo "<div class='final_exams' id='final-exams'>Final-Exams (PDFs and Images)</div>";

                while ($row = mysqli_fetch_assoc($result)) {

                    // to view/download pdf file of the final_exams
                    echo "<div class='final_exams_list' data-tilt><a href='final_exams_list.php'>", "<p class='final_exams_files'><a href='../files/exams/final-exams/{$row['course_name']}/{$row['file']}'><div class='final_exams_file_icon'><i class='fa-solid fa-file'></i></div><p class='final_exams_file_download_icon'><i class='fa-solid fa-download'></i></p></a></p>", "<p class='final_exams_course_name'>Course Name: {$row['course_name']}</p>", "<p class='final_exams_title'>Title: {$row['title']}</p></a></div>";
                }

            } else {
                echo "No Available Resources. check back later!!";
            }


            //fetch video_tutorials from the database
            $sql = "SELECT * FROM video_tutorials";
            $result = mysqli_query($connection, $sql);
            $resultCheck = mysqli_num_rows($result);


            if ($resultCheck > 0) {
                echo "<div class='video_tutorials' id='video_tutorials'>Video_Tutorials (PDFs and Images)</div>";

                while ($row = mysqli_fetch_assoc($result)) {

                    // to view/download pdf file of the video_tutorials
                    echo "<div class='video_tutorials_list'><a href='video_tutorials_list.php'>", "<p class='video_tutorials_files'><a href='{$row['url']}'><div class='video_tutorials_file_icon'><i class='fa-brands fa-youtube'></i></div><p class='video_tutorials_file_download_icon'><i class='fa-solid fa-link'></i></p></a></p>", "<p class='video_tutorials_course_name'>Course Name: {$row['course_name']}</p>", "<p class='video_tutorials_title'>Title: {$row['title']}</p></a></div>";
                }

            } else {
                echo "No Available Resources. check back later!!";
            }
            ?>



        </div>

    <script src="vanilla-tilt.js"></script>
    <script src="../static/js/resource.js"></script>
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