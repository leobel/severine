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

    <div class="main-wrapper">

         <!-- Header Section Start -->
         <header class="header section">

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
                                <li><a href="tratamientos.html">Tratamientos</a></li>
                                <li><a href="sevegetal.html">Sevegetal</a></li>
                                <li><a href="blog.html">Blog</a>
                                </li>
                            </ul>
                            <div class="header-btn">
                                <a class="btn btn-secondary btn-hover-primary" href="contact.html">Contacto</a>
                            </div>

                        </div>
                        <!-- Header Menu End -->

                        <!-- Header Toggle Start -->
                        <div class="header-toggle d-lg-none">
                            <a class="btn btn-secondary btn-hover-primary" href="contact.html">Contacto</a>
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

        </header>
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
                    <li><a href="tratamientos.html">Tratamientos</a></li>
                    <li><a href="sevegetal.html">Sevegetal</a></li>
                    <li><a href="#">Blog</a></li>
                </ul>

            </div>
            <!-- Mobile Menu End -->

        </div>
        <!-- Mobile Menu End -->

        <!-- Overlay Start -->
        <div class="overlay"></div>
        <!-- Overlay End -->

        <!-- Blog Post Section Start -->
             <section class="section tratamientos section-padding">
                <div class="container">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h6 class="sub-title">Nuestro Blog</h6>
                    <h2 class="main-title">Novedades</h2>   
                </div>
                <!-- Section Title End -->
                <!-- Articles Wrapper Start -->



                <div class="tratamientos-wrapper">
                    <div class="row gx-xxl-5">
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

$sql = "SELECT * FROM blogs";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) { ?>
    <div class="col-lg-4 col-sm-6">
        <div class="single-tratamientos" style="border: 1px solid #2E2E2E">
            <div class="tratamientos-images">
                <a href="tratamientos-details-left-sidebar.html"><?= '<img src="assets/images/blog/'.$row["image"].'"'.'>' ?> </a>
            </div>
            <div class="tratamientos-content">
                <div class="content-wrapper">
                    <p class="author">Por: <a href="#"><?= $row["author"] ?></a></p>
                    <ul class="meta">
                        <li><?= date("j F", strtotime($row["date"])) ?></li>
                        <li><?= date("Y", strtotime($row["date"])) ?></li>
                    </ul>
                    <h4 class="title"><a href="tratamientos-details-left-sidebar.html"><?= $row["title"] ?>
                        </a></h4> 
                    <p class="pt-3"><?= $row["description"] ?>
                    </p>
                    <a href="<?= 'blog-details.php?id='.$row['id'] ?>" class="btn btn-primary btn-hover-secondary mt-4">Ver más</a>
                </div>
                
            </div>
        </div>
    </div>
<?php }
}
$conn->close();
?>
                    </div>
                </div>
                <!-- Articles Wrapper End -->

            </div>
             </section>
        <!-- Blog Section End -->


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