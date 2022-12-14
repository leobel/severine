<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Nutras Fitness & Nutrition Bootstrap 5 Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">

    <!-- CSS
	============================================ -->

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="assets/css/plugins/icofont.min.css">
    
    <link rel="stylesheet" href="assets/css/plugins/flaticon.css">
    <link rel="stylesheet" href="assets/css/plugins/font-awesome.min.css">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/animate.min.css">
    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.min.css">


    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->
    <!-- <link rel="stylesheet" href="assets/css/vendor/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css"> -->

</head>

<body>
<?php
$servername = "localhost";
$username = "admin";
$password = "123";
$dbname = "severine";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// echo "Connected successfully";
$id = trim($_GET['id']);

$sql = "SELECT * FROM blogs where id=".$id;
echo $sql;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
}
$conn->close();
?>
    <div class="main-wrapper">

        <!-- Header Section Start -->
        <div class="header section">

            <!-- Header Main Start -->
            <div class="header-main">
                <div class="container">

                    <!-- Header Wrapper Start -->
                    <div class="header-wrapper">

                        <!-- Header Logo Start -->
                        <div class="header-logo">
                            <a href="index.html"><img src="assets/images/logo.png" alt="Logo"></a>
                        </div>
                        <!-- Header Logo End -->

                        <!-- Header Menu Start -->
                        <div class="header-menu d-none d-lg-flex">

                            <ul class="nav-menu">
                                <li><a class="active" href="index.html">Inicio</a></li>
                                <li><a href="about.html">Nosotros</a></li>
                                <li>
                                    <a href="#">All Course</a>
                                    <ul class="sub-menu">
                                        <li><a href="courses.html">Courses</a></li>
                                        <li><a href="my-courses.html">My Courses</a></li>
                                        <li><a href="#">Courses Details</a>
                                            <ul class="sub-menu">
                                                <li><a href="courses-details-left-sidebar.html">Courses Details Left Sidebar</a></li>
                                                <li><a href="courses-details-right-sidebar.html">Courses Details Right Sidebar</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Pages </a>
                                    <ul class="sub-menu">
                                        <li><a href="after-enroll.html">After Enroll</a></li>
                                       
                                        <li><a href="overview.html">Instructor Dashboard (Performance)</a></li>
                                        <li><a href="students.html">Students</a></li>
                                        <li><a href="reviews.html">Reviews</a></li>
                                       
                                        <li><a href="traffic-conversion.html">Traffic & conversion</a></li>
                                        <li><a href="messages.html">Messages</a></li>
                                        <li><a href="register.html">Register</a></li>
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="faq.html">FAQ</a></li>
                                        <li><a href="404-error.html">404 Error</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Blog</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="#">Blog</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog-grid.html">Blog Grid</a></li>
                                                <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                                <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Blog Details</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog-details-left-sidebar.html">Blog Details Left Sidebar</a></li>
                                                <li><a href="blog-details-right-sidebar.html">Blog Details Right Sidebar</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="Contacto.html">Contacto</a></li>
                            </ul>


                            <div class="header-btn">
                                <a class="btn btn-secondary btn-hover-primary" href="login.html">Sign Up</a>
                            </div>

                        </div>
                        <!-- Header Menu End -->

                        <!-- Header Toggle Start -->
                        <div class="header-toggle d-lg-none">

                            <a class="btn btn-secondary btn-hover-primary" href="login.html">Sign Up</a>

                            <a href="#" class="menu-toggle">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                        <!-- Header Toggle End -->

                    </div>
                    <!-- Header Wrapper End -->

                </div>
            </div>
            <!-- Header Main End -->

        </div>
        <!-- Header Section End -->


        <!-- Mobile Menu Start -->
        <div class="mobile-menu">

            <!-- Menu Close Start -->
            <a class="menu-close" href="javascript:void(0)">
                <i class="icofont-close-line"></i>
            </a>
            <!-- Menu Close End -->

            <!-- Mobile Menu Start -->
            <div class="mobile-menu-items">
                <ul class="nav-menu">
                    <li><a class="active" href="index.html">Inicio</a></li>
                    <li><a href="about.html">Nosotros</a></li>
                    <li>
                        <a href="#">All Course</a>
                        <ul class="sub-menu">
                            <li><a href="courses.html">Courses</a></li>
                            <li><a href="my-courses.html">My Courses</a></li>
                            <li><a href="#">Courses Details</a>
                                <ul class="sub-menu">
                                    <li><a href="courses-details-left-sidebar.html">Courses Details Left Sidebar</a></li>
                                    <li><a href="courses-details-right-sidebar.html">Courses Details Right Sidebar</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Pages </a>
                        <ul class="sub-menu">
                            <li><a href="after-enroll.html">After Enroll</a></li>
                            <li><a href="overview.html">Instructor Dashboard (Performance)</a></li>
                            <li><a href="students.html">Students</a></li>
                            <li><a href="reviews.html">Reviews</a></li>
                           
                            <li><a href="traffic-conversion.html">Traffic & conversion</a></li>
                            <li><a href="messages.html">Messages</a></li>
                            <li><a href="register.html">Register</a></li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="faq.html">FAQ</a></li>
                            <li><a href="404-error.html">404 Error</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Blog</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#">Blog</a>
                                <ul class="sub-menu">
                                    <li><a href="blog-grid.html">Blog Grid</a></li>
                                    <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                    <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Blog Details</a>
                                <ul class="sub-menu">
                                    <li><a href="blog-details-left-sidebar.html">Blog Details Left Sidebar</a></li>
                                    <li><a href="blog-details-right-sidebar.html">Blog Details Right Sidebar</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="Contacto.html">Contacto</a></li>
                </ul>

            </div>
            <!-- Mobile Menu End -->

        </div>
        <!-- Mobile Menu End -->

        <!-- Overlay Start -->
        <div class="overlay"></div>
        <!-- Overlay End -->


        <!-- Page banner Section Start -->
        <div class="section page-banner-section" style="background-image: url(assets/images/page-banner.jpg);">
            <div class="container">

                <!-- Page banner Section Start -->
                <div class="page-banner-content">
                    <h2 class="page-title">BLog Details</h2>

                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
                        <li class="breadcrumb-item"><a href="blog-right-sidebar.html">Blog</a></li>
                        <li class="breadcrumb-item active">Blog Details</li>
                    </ul>
                </div>
                <!-- Page banner Section End -->

            </div>
        </div>
        <!-- Page banner Section End -->

        <!-- Blog Post Section Start -->
        <div class="section section-padding-02">
            <div class="container">

                <!-- Blog Wrapper Start -->
                <div class="blog-wrapper-02">
                    <div class="row gx-xxl-5">
                        <div class="col-lg-8">

                            <!-- Blog Details Wrapper Start -->
                            <div class="blog-details-wrapper">

                                <div class="details-images">
                                    <img src="assets/images/blog/blog-details.jpg" alt="Blog Details">
                                </div>

                                <div class="blog-details-admin-meta">
                                    <div class="author">
                                        <div class="author-thumb">
                                            <a href="#"><?= '<img src="assets/images/blog/'.$row["image"].'"' ?> alt="Author"></a>
                                        </div>
                                        <div class="author-name">
                                            <p class="name">By: <a href="#"><?= $row["author"] ?></a></p>
                                        </div>
                                    </div>
                                    <div class="blog-meta">
                                        <span> <i class="icofont-calendar"></i> <?= date("j F, Y", strtotime($row["date"])) ?></span>
                                        <span> <i class="icofont-heart"></i> <?= $row["likes"] ?> </span>
                                        <span class="tag"><a href="#"><?= $row["tags"] ?></a></span>
                                    </div>
                                </div>

                                <h2 class="title">I will touch upon the Intrinsic and germane type as think that these are the most applicable to UX design.</h2>

                                <div class="blog-details-description">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s when an unknown printer took a galley of type and crambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularsed in the 1960 with release containing Lorem Ipsum passages desktop publishing software.</p>

                                    <blockquote class="blockquote">
                                        <i class="flaticon-left-quote"></i>
                                        <p>Lorem Ipsum is simply dummy text of the printing typesetting industry has been the industry's standard dummy text ever since the 1500s when an unknown printer took a galley of type and</p>
                                        <img class="shape" src="assets/images/shape/shape-7.png" alt="">
                                    </blockquote>

                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s when an unknown printer took a galley of type and crambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularsed in the 1960 with release containing Lorem Ipsum passages desktop publishing software.</p>

                                    <h3>I will touch upon the Intrinsic and germanen type as think that these are the most applicable to UX design.</h3>

                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularsed in the 1960 with release containing Lorem Ipsum passages desktop publishing software.</p>

                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularsed in the 1960 with release containing Lorem Ipsum passages desktop publishing software.</p>

                                    <div class="details-img">
                                        <div class="dec-img">
                                            <img src="assets/images/blog/dec-img1.jpg" alt="">
                                        </div>
                                        <div class="dec-img">
                                            <img src="assets/images/blog/dec-img2.jpg" alt="">
                                        </div>
                                    </div>

                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularsed in the 1960 with release containing Lorem Ipsum passages desktop publishing software.</p>

                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularsed in the 1960 with release containing Lorem Ipsum passages desktop publishing software.</p>

                                </div>

                                <div class="blog-details-tags-social">
                                    <div class="blog-details-label">
                                        <h4 class="label">Tags:</h4>
                                        <ul class="tag-list">
                                            <li><a href="#">Nutrition</a></li>
                                            <li><a href="#">Fitness</a></li>
                                            <li><a href="#">Health</a></li>
                                        </ul>
                                    </div>

                                    <div class="blog-details-label">
                                        <h4 class="label">Share:</h4>
                                        <ul class="social">
                                            <li><a href="#"><i class="icofont-facebook"></i></a></li>
                                            <li><a href="#"><i class="icofont-skype"></i></a></li>
                                            <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                            <li><a href="#"><i class="icofont-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <!-- Blog Details Wrapper End -->

                            <!-- Blog Details Comment End -->
                            <div class="blog-details-comment">
                                <div class="comment-wrapper">
                                    <h3 class="title">Comments (03)</h3>

                                    <ul class="comment-items">
                                        <li>
                                            <!-- Single Comment Start -->
                                            <div class="single-comment">
                                                <div class="comment-author">
                                                    <div class="author-thumb">
                                                        <img src="assets/images/author/author-01.jpg" alt="Author">
                                                    </div>
                                                    <div class="author-content">
                                                        <h4 class="name">Sara Alexander</h4>
                                                        <span class="designation">Designer, USA</span>
                                                    </div>
                                                </div>
                                                <p>Lorem Ipsum has been the industry's standard dummy text since the 1500 when unknown printer took a galley type and scrambled to make type specimen’s book has survived not five centuries but also the leap into electronic type and book.</p>
                                                <a href="#" class="reply"> <i class="icofont-reply"></i> Reply</a>
                                            </div>
                                            <!-- Single Comment End -->

                                            <ul class="comment-reply">
                                                <li>
                                                    <!-- Single Comment Start -->
                                                    <div class="single-comment">
                                                        <div class="comment-author">
                                                            <div class="author-thumb">
                                                                <img src="assets/images/author/author-03.jpg" alt="Author">
                                                            </div>
                                                            <div class="author-content">
                                                                <h4 class="name">Robert Morgan</h4>
                                                                <span class="designation">Designer, USA</span>
                                                            </div>
                                                        </div>
                                                        <p>Lorem Ipsum has been the industry's standard dumm text since the 1500 when printer took a galley type and scrambled to make type specimen book survived centuries but also the electronic type and book.</p>
                                                        <a href="#" class="reply"> <i class="icofont-reply"></i> Reply</a>
                                                    </div>
                                                    <!-- Single Comment End -->
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <!-- Single Comment Start -->
                                            <div class="single-comment">
                                                <div class="comment-author">
                                                    <div class="author-thumb">
                                                        <img src="assets/images/author/author-07.jpg" alt="Author">
                                                    </div>
                                                    <div class="author-content">
                                                        <h4 class="name">Rochelle Hunt</h4>
                                                        <span class="designation">Designer, USA</span>
                                                    </div>
                                                </div>
                                                <p>Lorem Ipsum has been the industry's standard dummy text since the 1500 when unknown printer took a galley type and scrambled to make type specimen’s book has survived not five centuries but also the leap into electronic type and book.</p>
                                                <a href="#" class="reply"> <i class="icofont-reply"></i> Reply</a>
                                            </div>
                                            <!-- Single Comment End -->
                                        </li>
                                    </ul>
                                </div>
                                <div class="comment-form">
                                    <h3 class="title">Leave a comment</h3>

                                    <!-- Form Wrapper Start -->
                                    <div class="form-wrapper">
                                        <form action="#">
                                            <div class="row gx-3">
                                                <div class="col-md-6">
                                                    <!-- Form Wrapper Start -->
                                                    <div class="single-form">
                                                        <input type="text" placeholder="Name">
                                                    </div>
                                                    <!-- Form Wrapper End -->
                                                </div>
                                                <div class="col-md-6">
                                                    <!-- Form Wrapper Start -->
                                                    <div class="single-form">
                                                        <input type="email" placeholder="Email">
                                                    </div>
                                                    <!-- Form Wrapper End -->
                                                </div>
                                                <div class="col-md-12">
                                                    <!-- Form Wrapper Start -->
                                                    <div class="single-form">
                                                        <textarea placeholder="Massage"></textarea>
                                                    </div>
                                                    <!-- Form Wrapper End -->
                                                </div>
                                                <div class="col-md-12">
                                                    <!-- Form Wrapper Start -->
                                                    <div class="single-form text-center">
                                                        <button class="btn btn-secondary btn-hover-primary">Submit Now</button>
                                                    </div>
                                                    <!-- Form Wrapper End -->
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- Form Wrapper End -->
                                </div>
                            </div>
                            <!-- Blog Details Comment End -->

                        </div>
                        <div class="col-lg-4">

                            <!-- Blog Sidebar Start -->
                            <div class="sidebar">

                                <!-- Sidebar Widget Post Start -->
                                <div class="sidebar-widget">
                                    <h4 class="widget-title">Recent Post</h4>

                                    <div class="widget-post">
                                        <ul class="post-items">
                                            <li>
                                                <!-- Sidebar Widget Post Start -->
                                                <div class="single-post">
                                                    <div class="post-thumb">
                                                        <a href="blog-details-left-sidebar.html"><img src="assets/images/blog/blog-02.jpg" alt="Post"></a>
                                                    </div>
                                                    <div class="post-content">
                                                        <h5 class="title"><a href="blog-details-left-sidebar.html">Create Amazing Color Schemes Design</a></h5>
                                                        <span class="date"><i class="icofont-calendar"></i> 21 March, 2021</span>
                                                    </div>
                                                </div>
                                                <!-- Sidebar Widget Post End -->
                                            </li>
                                            <li>
                                                <!-- Sidebar Widget Post Start -->
                                                <div class="single-post">
                                                    <div class="post-thumb">
                                                        <a href="blog-details-left-sidebar.html"><img src="assets/images/blog/blog-03.jpg" alt="Post"></a>
                                                    </div>
                                                    <div class="post-content">
                                                        <h5 class="title"><a href="blog-details-left-sidebar.html">Data Science Machine Learning with Python</a></h5>
                                                        <span class="date"><i class="icofont-calendar"></i> 21 March, 2021</span>
                                                    </div>
                                                </div>
                                                <!-- Sidebar Widget Post End -->
                                            </li>
                                            <li>
                                                <!-- Sidebar Widget Post Start -->
                                                <div class="single-post">
                                                    <div class="post-thumb">
                                                        <a href="blog-details-left-sidebar.html"><img src="assets/images/blog/blog-04.jpg" alt="Post"></a>
                                                    </div>
                                                    <div class="post-content">
                                                        <h5 class="title"><a href="blog-details-left-sidebar.html">Leadership: Strategies for Business</a></h5>
                                                        <span class="date"><i class="icofont-calendar"></i> 21 March, 2021</span>
                                                    </div>
                                                </div>
                                                <!-- Sidebar Widget Post End -->
                                            </li>
                                            <li>
                                                <!-- Sidebar Widget Post Start -->
                                                <div class="single-post">
                                                    <div class="post-thumb">
                                                        <a href="blog-details-left-sidebar.html"><img src="assets/images/blog/blog-05.jpg" alt="Post"></a>
                                                    </div>
                                                    <div class="post-content">
                                                        <h5 class="title"><a href="blog-details-left-sidebar.html">Illustrating Badges & Geometric Shapes</a></h5>
                                                        <span class="date"><i class="icofont-calendar"></i> 21 March, 2021</span>
                                                    </div>
                                                </div>
                                                <!-- Sidebar Widget Post End -->
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Sidebar Widget Post End -->

                                <!-- Sidebar Widget Tags Start -->
                                <div class="sidebar-widget">
                                    <h4 class="widget-title">Popular Tags</h4>

                                    <div class="widget-tags">
                                        <ul class="tags-list">
                                            <li><a href="#">Design</a></li>
                                            <li><a href="#">Education</a></li>
                                            <li><a href="#">Education</a></li>
                                            <li><a href="#">Design</a></li>
                                            <li><a href="#">Design</a></li>
                                            <li><a href="#">Education</a></li>
                                            <li><a href="#">Education</a></li>
                                            <li><a href="#">Design</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Sidebar Widget Tags End -->

                                <!-- Sidebar Widget Share Start -->
                                <div class="sidebar-widget">
                                    <h4 class="widget-title">Share Course:</h4>

                                    <ul class="social">
                                        <li><a href="#"><i class="icofont-facebook"></i></a></li>
                                        <li><a href="#"><i class="icofont-skype"></i></a></li>
                                        <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                        <li><a href="#"><i class="icofont-linkedin"></i></a></li>
                                    </ul>
                                </div>
                                <!-- Sidebar Widget Share End -->

                            </div>
                            <!-- Blog Sidebar End -->

                        </div>
                    </div>
                </div>
                <!-- Blog Wrapper End -->

            </div>
        </div>
        <!-- Blog Post Section End -->

        <!-- Download Section Start -->
        <div class="section section-padding">
            <div class="container">

                <!-- Download Wrapper Start -->
                <div class="download-wrapper">

                    <img class="shape-01" src="assets/images/shape/shape-7.png" alt="Shape">
                    <img class="shape-02" src="assets/images/shape/shape-8.png" alt="Shape">

                    <!-- Section Title Start -->
                    <div class="section-title shape-none">
                        <h6 class="sub-title">mobile app available</h6>
                        <h2 class="main-title">Download our mobile <br> app. and start coaching anytime.</h2>
                    </div>
                    <!-- Section Title End -->

                    <!-- download App End -->
                    <div class="download-app">
                        <ul>
                            <li><a href="#"><img src="assets/images/play-store.jpg" alt="Play Store"></a></li>
                            <li><a href="#"><img src="assets/images/app-store.jpg" alt="App Store"></a></li>
                        </ul>
                    </div>
                    <!-- download App End -->

                </div>
                <!-- Download Wrapper End -->

            </div>
        </div>
        <!-- Download Section End -->

        <!-- Footer Start -->
        <div class="section footer-section">

            <!-- Footer Widget Section Start -->
            <div class="footer-widget-section section-padding">

                <img class="shape-01 animation-rotate" src="assets/images/shape/shape-9.png" alt="Shape">

                <div class="container">

                    <!-- Footer Widget Wrapper Start -->
                    <div class="footer-widget-wrapper">
                        <div class="row">
                            <div class="col-lg-4">

                                <!-- Footer Widget Start -->
                                <div class="footer-widget">
                                    <h3 class="footer-widget-title">Subscribe Newsletter</h3>

                                    <div class="widget-newsletter">
                                        <p>Lorem Ipsum has been them an industry printer took a galley make book.</p>

                                        <div class="newsletter-form">
                                            <form action="#">
                                                <input type="text" placeholder="Enter email">
                                                <button class="btn btn-primary btn-hover-white">Subscribe Now</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- Footer Widget End -->

                            </div>
                            <div class="col-lg-8">

                                <!-- Footer Widget Start -->
                                <div class="widget-wrapper">

                                    <!-- Footer Widget Start -->
                                    <div class="footer-widget">
                                        <h3 class="footer-widget-title">All Courses</h3>

                                        <ul class="widget-link">
                                            <li><a href="#">Daily Exercise</a></li>
                                            <li><a href="#">Find Your Balance</a></li>
                                            <li><a href="#">Personal Program</a></li>
                                            <li><a href="#">Natural Process</a></li>
                                            <li><a href="#">Immune System</a></li>
                                            <li><a href="#">Gives You Energy</a></li>
                                        </ul>
                                    </div>
                                    <!-- Footer Widget End -->

                                    <!-- Footer Widget Start -->
                                    <div class="footer-widget">
                                        <h3 class="footer-widget-title">Help Links</h3>

                                        <ul class="widget-link">
                                            <li><a href="#">Privacy Policy</a></li>
                                            <li><a href="#">Discussion</a></li>
                                            <li><a href="#">Terms & Conditions</a></li>
                                            <li><a href="#">Customer Support</a></li>
                                            <li><a href="#">Course FAQ’s</a></li>
                                            <li><a href="#">Online Classes</a></li>
                                        </ul>
                                    </div>
                                    <!-- Footer Widget End -->

                                    <!-- Footer Widget Start -->
                                    <div class="footer-widget">
                                        <h3 class="footer-widget-title">Opening Hours</h3>

                                        <ul class="widget-link">
                                            <li><a href="#">Mon-Fri: 9 AM – 6 PM</a></li>
                                            <li><a href="#">Saturday: 9 AM – 4 PM</a></li>
                                            <li><a href="#">Sunday: Closed</a></li>
                                        </ul>

                                        <div class="widget-location">
                                            <h3 class="footer-widget-title">Location</h3>

                                            <p>176 W street name, New <br> York, NY 10014</p>
                                        </div>
                                    </div>
                                    <!-- Footer Widget End -->

                                </div>
                                <!-- Footer Widget End -->

                            </div>
                        </div>
                    </div>
                    <!-- Footer Widget Wrapper End -->

                </div>

                <img class="shape-02 animation-rotate" src="assets/images/shape/shape-9.png" alt="Shape">

            </div>
            <!-- Footer Widget Section End -->

            <!-- Footer Copyright Section Start -->
            <div class="footer-copyright">
                <div class="container">

                    <!-- Copyright Wrapper Start -->
                    <div class="copyright-wrapper">

                        <div class="copyright-text">
                            <p>&copy; 2021 <span> Nutras </span> Made with <i class="icofont-heart-alt"></i> by <a href="https://hasthemes.com/" target="_blank">HasThemes</a></p>
                        </div>

                        <div class="copyright-link">
                            <a href="#">Terms of Service</a>
                            <a href="#">Privacy Policy</a>
                            <a href="#">Sitemap</a>
                            <a href="#">Security</a>
                        </div>

                    </div>
                    <!-- Copyright Wrapper End -->

                </div>
            </div>
            <!-- Footer Copyright Section End -->

        </div>
        <!-- Footer End -->

        <!--Back To Start-->
        <a href="#" class="back-to-top">
            <i class="icofont-simple-up"></i>
        </a>
        <!--Back To End-->

    </div>

    <!-- JS
    ============================================ -->

    <!-- Modernizer & jQuery JS -->
    <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="assets/js/plugins/popper.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>

    <!-- Plugins JS -->
    <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="assets/js/plugins/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/plugins/jquery.nice-select.min.js"></script>
    <script src="assets/js/plugins/video-playlist.js"></script>
    <script src="assets/js/plugins/ajax-Contacto.js"></script>

    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->
    <!-- <script src="assets/js/plugins.min.js"></script> -->


    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

</body>

</html>