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
    <link rel="stylesheet" href="../static/css/home.css">
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
    <div class="main-container">
        <div class="nav-bar">
            <ul>
                <div id="nav-home">
                    <li><a href="">HOME</a></li>
                </div>
                <div id="nav-getresources">
                    <li><a href="http://localhost/astuDigitalResource/project/templates/getresources.php">RESOURCES</a>
                    </li>
                </div>
                <?php
                if (!isset($_SESSION)) {
                    echo "<div id=nav-login><li><a href='http://localhost/astuDigitalResource/project/templates/accounts/login.php'>LOG IN</a></li></div>";
                    echo "<div id='nav-signup'><li><a href='http://localhost/astuDigitalResource/project/templates/accounts/signup.php'>SIGN UP</a></li></div>";
                } else {
                    if ($_SESSION["user"] == "bsrat@gmail.com") {
                        echo "<div id='nav-upload'><li><a href='upload.php'>UPLOAD</a></li></div>";
                    }
                    echo "<div id='nav-logout'><li><a href='accounts/logout.php'><i class='fa-solid fa-power-off'></i></a></li></div>";
                }
                ?>
                <div id="nav-blog">
                    <li><a href="blog_list.php">BLOG</a></li>
                </div>
            </ul>
        </div>
        <h1 class="title">WELCOME TO</h1>
        <h1 class="title2">ASTU Digital Resources</h1>
        <img class="home-image" src="../images/google-deepmind-E301rX-2CeQ-unsplash.jpg">



        <div class="contacts">
            <a class="facebook" href="https://www.facebook.com/astu.edu.et/"><i class="fa-brands fa-facebook"></i></a>
            <a class="instagram" href=""><i class="fa-brands fa-square-instagram"></i></a>
            <a class="linkedin" href=""><i class="fa-brands fa-linkedin"></i></a>
            <a class="twitter" href=""><i class="fa-brands fa-twitter"></i></a>
            <a class="google" href=""><i class="fa-brands fa-google-plus"></i></a>
        </div>
        <div class="sub-container">
            <img class="about_image" src="../images/google-deepmind-8heReYC6Zt0-unsplash.jpg">
            <p class="about"><strong>ABOUT US</strong></p>
            <div class="about_body">
                <p>This website is designed to help students, teachers, staff members, and anyone who is struggling to
                    find
                    information that is provided by the Adama Science and Technology University.</p>
                <p>Our website serves as a valuable resource for accessing a wide range of information, helping users
                    navigate through the academic and administrative aspects of ASTU.
                </p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti fugiat ratione dignissimos, alias
                    ea
                    aliquam totam commodi vero placeat itaque adipisci unde ducimus aliquid non, earum neque optio
                    consectetur repellat.</p>
                <p class="about_body2">With user-friendly navigation, informative content, and regular updates, our
                    website strives to meet the diverse needs of its users, fostering a seamless flow of information and
                    promoting ASTU's commitment to excellence in education, research, and service to society.</p>
            </div>
            <div class="why">
                <img class="why_image" src="../images/google-deepmind-Krw-2KP7bOE-unsplash.jpg">
                <p>Why Choose This Platform ?</p>
            </div>
            <p class="why_body1">
                <strong>Reliable</strong><br><i class="fa-solid fa-shield-halved"></i>
                known for accurate, up-to-date information in various fields, providing valuable resources for knowledge
                seekers.
            </p>
            <p class="why_body2">
                <strong>Well Organized</strong><br><i class="fa-solid fa-warehouse"></i>
                Its user-friendly interface and organized info make it a go-to destination for knowledge seekers
                across various fields.
            </p>
            <p class="why_body3">
                <strong>Certified</strong><br><i class="fa-solid fa-certificate"></i>
                a certified website, ensuring trust and credibility.<br> With its meticulous organization and accurate
                information, it is a reliable source for knowledge seekers in various fields.
            </p>
            <div class="products">
                <img class="products_image" src="../images/google-deepmind-4QVqSh4VvP4-unsplash.jpg">
                <p class="products_title">Products</p>
                <p class="products_body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque sed a
                    aspernatur, id
                    architecto, nihil minima laudantium amet nisi esse ea molestias nostrum porro necessitatibus ullam
                    eos
                    dolorem tempora. Quae?</p>
                <div class="actual_products">

                    <div class="books">
                        <p class="books_title">Books</p>

                        <img class="books_image" src="../images/elisa-calvet-b-S3nUOqDmUvc-unsplash.jpg" data-tilt
                            data-tilt-glare>

                        <p class='book_icon'><i class="fa-solid fa-book"></i></p>
                        <p class="books_body">Astu Digital Learning Resources offers a diverse and enriching collection
                            of books, educational, and reference materials, The platform strives to meet the diverse
                            reading needs of its users.
                        </p>
                        <p class="books_body">For students and educators, Astu Digital Learning Resources offers a
                            comprehensive collection of educational books, including textbooks, study guides, and
                            reference materials. </p>
                        <p class="books_body"></p>
                    </div>

                    <div class="blogs">
                        <p class="blogs_title">Blogs</p>
                        <img class="blogs_image" src="../images/florian-klauer-mk7D-4UCfmg-unsplash.jpg" data-tilt
                            data-tilt-glare>
                        <p class='blogs_icon'><i class="fa-solid fa-blog"></i></p>
                        <p class="blogs_body">offers a multitude of informative and engaging blogs that cover a wide range of topics, providing valuable insights and knowledge to readers.</p>
                        <p class="blogs_body">These blogs serve as a platform for sharing expertise, research findings, and practical tips, fostering intellectual growth and promoting a culture of continuous learning.</p>
                        <p class="blogs_body"></p>
                    </div>
                </div>
                <div class="roadmaps">
                    <p class="roadmaps_title">Roadmaps</p>
                    <img class="roadmaps_image" src="../images/kelly-sikkema-io0ZLYbu31s-unsplash.jpg" data-tilt
                        data-tilt-glare>
                    <p class='roadmaps_icon'><i class="fa-solid fa-arrows-split-up-and-left fa-flip-horizontal"></i></p>
                    <p class="roadmaps_body">Astu Digital Resources' extensive book collection serves
                            as a guideline to 
                            reading preferences and educational needs of its users.</p>
                    <p class="roadmaps_body">Overall, Astu Digital Learning Resources' extensive book collection serves
                            as a gateway to 
                            reading preferences and educational needs of its users.</p>
                    <p class="roadmaps_body"></p>
                </div>
                <div class="recommendations">
                    <p class="recommendations_title">Recommendations</p>
                    <img class="recommendations_image" src="../images/marvin-meyer-SYTO3xs06fU-unsplash (1).jpg"
                        data-tilt data-tilt-glare>
                    <p class='recommendations_icon'><i class="fa-regular fa-lightbulb"></i></p>
                    <p class="recommendations_body">Astu Digital Resources' extensive book collection serves
                            as a guideline to 
                            reading preferences and educational needs of its users.</p>
                    <p class="recommendations_body">Astu Digital Resources' extensive book collection serves
                            as a guideline to 
                            reading preferences and educational needs of its users.</p>
                    <p class="recommendations_body"></p>
                </div>

            </div>
        </div>
    </div>
    <script src="vanilla-tilt.js"></script>
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

</html>