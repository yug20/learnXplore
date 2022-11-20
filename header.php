<!doctype html>
<html dir="ltr" lang="en-US">

<head>
    <title>Learnxplore</title>
    <link type="image/x-icon" rel="shortcut icon" href="assets/images/favicon.png" />
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="HandheldFriendly" content="true">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700" />
    <link type="text/css" rel="stylesheet" href="assets/css/all.min.css" />
    <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="assets/css/jquery.fancybox.min.css" />
    <link type="text/css" rel="stylesheet" href="assets/css/owl.carousel.min.css" />
    <link type="text/css" rel="stylesheet" href="assets/font/" />

    <link type="text/css" rel="stylesheet" href="assets/css/styles.css" />
    <link type="text/css" rel="stylesheet" href="assets/css/responsive.css" />
    <link type="text/css" rel="stylesheet" href="assets/font/stylesheet.css">

</head>

<body>

    <?php
        function chk_active($p){
            $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            if (strpos($actual_link, $p) !== false) {
                return true;
            }
            else{
                return false;
            }
        }
    ?>

    <!--Header-->
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.php"><img src="assets/images/logo.svg" alt="logo"></a>
                <!-- <div class="category">
                    <a href="#">Category</a>
                </div> -->
                <div class="search">
                    <span>
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10.5416 19.9374C5.36242 19.9374 1.14575 15.7208 1.14575 10.5416C1.14575 5.36242 5.36242 1.14575 10.5416 1.14575C15.7208 1.14575 19.9374 5.36242 19.9374 10.5416C19.9374 15.7208 15.7208 19.9374 10.5416 19.9374ZM10.5416 2.52075C6.11409 2.52075 2.52075 6.12325 2.52075 10.5416C2.52075 14.9599 6.11409 18.5624 10.5416 18.5624C14.9691 18.5624 18.5624 14.9599 18.5624 10.5416C18.5624 6.12325 14.9691 2.52075 10.5416 2.52075Z"
                                fill="#2F394B" />
                            <path
                                d="M20.1667 20.8542C19.9926 20.8542 19.8184 20.7901 19.6809 20.6526L17.8476 18.8192C17.5817 18.5534 17.5817 18.1134 17.8476 17.8476C18.1134 17.5817 18.5534 17.5817 18.8192 17.8476L20.6526 19.6809C20.9184 19.9467 20.9184 20.3867 20.6526 20.6526C20.5151 20.7901 20.3409 20.8542 20.1667 20.8542Z"
                                fill="#2F394B" />
                        </svg>
                    </span>
                    <input type="search" placeholder="Search courses or tutor" aria-describedby="button-addon4"
                        class="searchbar">
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon">
                        <div class="plate plate4" onclick="this.classList.toggle('active')">
                            <svg class="burger" version="1.1" height="100" width="100" viewBox="0 0 100 100">
                                <path class="line line1" d="M 50,35 H 30" />
                                <path class="line line2" d="M 50,35 H 70" />
                                <path class="line line3" d="M 50,50 H 30" />
                                <path class="line line4" d="M 50,50 H 70" />
                                <path class="line line5" d="M 50,65 H 30" />
                                <path class="line line6" d="M 50,65 H 70" />
                            </svg>
                            <svg class="x" version="1.1" height="100" width="100" viewBox="0 0 100 100">
                                <path class="line" d="M 34,32 L 66,68" />
                                <path class="line" d="M 66,32 L 34,68" />
                            </svg>
                        </div>
                    </span></button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link <?php if(chk_active('index')){echo" active ";} ?>"
                                href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if(chk_active('aboutus')){echo" active ";} ?>" href="aboutus.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if(chk_active('blog')){echo" active ";} ?>" href="blog.php">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if(chk_active('contact')){echo" active ";} ?>" href="contact.php">Contact Us</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Category</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="topjets.php">Top jets</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="btn nav-link requestbtn bg-blue text-white" role="button"
                                aria-pressed="true" data-toggle="modal" data-target="#exampleModalCenter">Request
                                Quote</a>
                        </li> -->
                    </ul>
                    <div class="signlogin">
                        <a class="signup" href="#">Sign-up</a>
                        <a class="login" href="#">Log in</a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Modal -->
    </header>