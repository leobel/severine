<!doctype html>
<html lang="en">
<?php
    require '../vendor/autoload.php';
    use \Mailjet\Resources;
    echo $_SERVER['REQUEST_METHOD'];
    if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
        echo("HEREEEE!!");
        $mj = new \Mailjet\Client('1aaeedd3f2a2197486d49b052c21cef2','1704e7e64813be0f36d3f638d211d146',true,['version' => 'v3.1']);
        
        $name = strip_tags(trim($_POST["name"]));
        $email = strip_tags(trim($_POST["email"]));
        $message = strip_tags(trim($_POST["message"]));

        echo $name, $email, $message;

        $body = [
            'Messages' => [
            [
                'From' => [
                'Email' => "leobelizquierdo@gmail.com",
                'Name' => "Web Design"
                ],
                'To' => [
                [
                    'Email' => "leobelizquierdo@gmail.com",
                    'Name' => "Julio"
                ]
                ],
                'Subject' => "Greetings from ".$name." (".$email.")",
                'TextPart' => $message,
                'CustomID' => "AppGettingStartedTest"
            ]
            ]
        ];
        $response = $mj->post(Resources::$Email, ['body' => $body]);
        $response->success() && var_dump($response->getData());
        // echo "<div style='position: absolute; top: 50%; left: 50%; padding: 50px; background-color: beige'> <p>Email enviado!!!</p></div>";
    }
?>
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
                                <li><a href="#">Blog</a>
                                </li>
                                <li><a href="contact.php">Contacto</a></li>
                            </ul>


                            <div class="header-btn">
                                <a class="btn btn-secondary btn-hover-primary" href="login.html">Contacto</a>
                            </div>

                        </div>
                        <!-- Header Menu End -->

                        <!-- Header Toggle Start -->
                        <div class="header-toggle d-lg-none">

                            <a class="btn btn-secondary btn-hover-primary" href="login.html">Contacto</a>

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
        
        <!-- Contact Section Start -->
        <section class="section section-padding bgr-dark">
            <div class="container">

                <!-- Contact Wrapper Start -->
                <div class="contact-wrapper">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <!-- Image-->
                            <figure>
                                <img class="shape" src="assets/images/contact/contact-placeholder.jpg" alt="">
                            </figure>
                            <!-- Image End -->
                        </div>
                        <div class="col-lg-6">
                            <!-- Contact Content Start -->
                            <div class="contact-content" style="padding: 30px;">

                                <!-- Contact Title Start -->
                                <div class="contact-title">
                                    <h4 class="sub-title">Lorem ipsum</h4>
                                    <h2 class="main-title">Contáctanos</h2>
                                </div>
                                <!-- Contact Title End -->

                                <!-- Contact Form Start -->
                                <div class="contact-form">
                                    <form id="contact-form" action="contact.php" method="POST">
                                        <div class="row gx-3">
                                            <div class="col-md-6">
                                                <!-- Single Form Start -->
                                                <div class="single-form">
                                                    <input name="name" type="text" placeholder="Nombre">
                                                </div>
                                                <!-- Single Form End -->
                                            </div>
                                            <div class="col-md-6">
                                                <!-- Single Form Start -->
                                                <div class="single-form">
                                                    <input name="email" type="email" placeholder="Email">
                                                </div>
                                                <!-- Single Form End -->
                                            </div>
                                            <div class="col-md-12">
                                                <!-- Single Form Start -->
                                                <div class="single-form">
                                                    <textarea name="message" placeholder="Mensaje"></textarea>
                                                </div>
                                                <!-- Single Form End -->
                                            </div>
                                            <p class="form-message"></p>
                                            <div class="col-md-12">
                                                <!-- Single Form Start -->
                                                <div class="single-form">
                                                    <button type="submit" class="btn btn-secondary btn-hover-primary">Enviar</button>
                                                </div>
                                                <!-- Single Form End -->
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- Contact Form End -->

                            </div>
                            <!-- Contact Content End -->
                        </div>
                       
                    </div>
                </div>
                <!-- Contact Wrapper End -->

            </div>
        </section>
        <!-- Contact Section End -->

         <!-- Contact Map Start -->
         <div class="section pb-5">
            <div class="container">

                <!-- Contact Map Wrapper Start -->
                <div class="contact-map-wrapper">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13091.811444945231!2d-56.13543!3d-34.88253!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfba395e609ded1ee!2sComercio%20y%20Mateo%20Cabral!5e0!3m2!1ses-419!2suy!4v1669313377051!5m2!1ses-419!2suy" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <!-- Contact Map Wrapper End -->

            </div>
        </div>
        <!-- Contact Map End -->



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
    <script src="assets/js/plugins/ajax-contact.js"></script>

    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->
    <!-- <script src="assets/js/plugins.min.js"></script> -->


    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/contact.js"></script>

</body>

</html>