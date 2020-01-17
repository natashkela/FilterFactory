<?php ini_set("display_errors","On");?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Xisen - MultiPurpose HTML5 Template for Startup  </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/fontawesome-all.min.css">
        <link rel="stylesheet" href="css/themify-icons.css">
        <link rel="stylesheet" href="css/meanmenu.css">
        <link rel="stylesheet" href="css/custom-animation.css">
        <link rel="stylesheet" href="css/aos.css">
        <link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/default.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>


        <!-- preloader  -->
        <div id="preloader">
            <div id="ctn-preloader" class="ctn-preloader">
                <div class="animation-preloader">
                    <div class="spinner"></div>
                    <div class="txt-loading">
                        <span data-text-preloader="F" class="letters-loading">
                            F
                        </span>
                <span data-text-preloader="F" class="letters-loading">
                            F
                        </span>
                    </div>
                </div>
                <div class="loader">
                    <div class="row">
                        <div class="col-3 loader-section section-left">
                            <div class="bg"></div>
                        </div>
                        <div class="col-3 loader-section section-left">
                            <div class="bg"></div>
                        </div>
                        <div class="col-3 loader-section section-right">
                            <div class="bg"></div>
                        </div>
                        <div class="col-3 loader-section section-right">
                            <div class="bg"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- preloader end -->

        <!-- header start -->
        <header id="header-sticky" class="header-normal">
            <div class="header-area">
                <div class="container">
                    <div class="position-relative">
                        <div class="row align-items-center">
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="index.html"> <img src="img/logo/logo.png" alt=""> </a>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-8 position-static">
                                <div class="main-menu red-menu text-center">
                                    <nav id="mobile-menu">
                                        <ul>
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="shop.php">Shop</a></li>
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="#">More</a>
                                                <ul class="submenu">
                                                    <li><a href="blog.html">Blog</a>
                                                    <li><a href="contact.html">Contact</a></li>
                                                    <li><a href="faq.html">FAQs</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="login.html">Login</a></li>

                                        </ul>
                                    </nav>
                                </div>
                                <div class="mobile-menu"></div>
                            </div>
                            <div class="col-xl-2 col-lg-2 d-none d-lg-block">
                                <div class="header-btn text-right">
                                    <a href="register.php" class="x-btn btn-border btn-squ">Sign up</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header end -->

        <main>
            <!-- login Area Strat-->
            <section class="login-area pb-120">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="basic-login">
                                <h3 class="mb-20">Sign Up </h3>
                                <p>Welcome!</a></p>
                                <div class="mb-30"></div>
                                <?php
                                  if(isset($_GET['error'])) {
                                    if($_GET['error'] == "emptyfields") {
                                      echo "<p class='signuperror'>Fill in all fields!</p>";
                                    } else if($_GET['error'] == "invalidemailuid") {
                                      echo' <p class="signuperror">Invalid username and email!</p>';
                                    } else if($_GET['error'] == "invaliduid") {
                                      echo '<p class="signuperror">Invalid username!</p>';
                                    } else if($_GET['error'] == "invalidemail") {
                                      echo '<p class="signuperror">Invalid email!</p>';
                                    } else if($_GET['error'] == "passwordcheck") {
                                      echo '<p class="signuperror">Your passwords do not match!</p>';
                                    } else if($_GET['error'] == "usertaken") {
                                      echo '<p class="signuperror">Username is already taken!</p>';
                                    }
                                  }
                                  else if ($_GET['signup'] == "success") {
                                    echo '<p class="signusuccess">Signup successful!</p>';
                                  }
                                ?>
                                <form id="signup-submit" method="POST">
                                    <label for="first-name">First Name <span>**</span></label>
                                    <input name="first" required id="first" type="text" placeholder="Your Name" />
                                    <label for="last-name">Last Name <span>**</span></label>
                                    <input name="last" required id="last" type="text" placeholder="Your LastmName" />
                                    <label for="email-id">Email Address <span>**</span></label>
                                    <input name="email-id" required id="email-id" type="text" placeholder="Your Email" />
                                    <label for="pass">Password <span>**</span></label>
                                    <input name="pass" required id="pass" type="password" placeholder="*****" />
                                    <label for="pass">Confirm Password <span>**</span></label>
                                    <input name="confirm_pass" required id="confirm_pass" type="password" placeholder="*****" />
                                    <div class="mt-10"></div>
                                    <a href="#" class="login-btn register-now w-100">Register Now</a>
                                    <div class="sign-up text-center mt-30">
                                        <span>Already have account?</span>
                                        <a href="login.html" class="login-text-btn">Login Now</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- login Area End-->


        </main>

        <!-- footer -->
        <footer class="footer-shape" style="background-image: url(img/bg/footer.png)">
            <div class="footer-area pt-260 pb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-8">
                            <div class="footer-widget mb-40">
                                <div class="footer-text">

                                    <p>Winged moving moveth created for shall and a divide the their days male midst shall hath doesn't won't for. Midst life.Over a great night. Green upon years rule ying.</p>
                                </div>
                                <div class="footer-social">
                                    <a href="#"><i class="ti-facebook"></i></a>
                                    <a href="#"><i class="ti-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4">
                            <div class="footer-widget mb-40">
                                <ul>
                                    <li><a href="#">About Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4">
                            <div class="footer-widget mb-40">
                                <ul>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4">
                            <div class="footer-widget mb-40">
                                <ul>
                                    <li><a href="terms-of-service.html">Terms of Service</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4">
                            <div class="footer-widget mb-40">
                                <ul>
                                    <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-area">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12 ">
                            <div class="copyright text-center">
                                <p>Copyright © 2019 Xisen. All rights reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer end -->






		<!-- JS here -->
        <script src="js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/one-page-nav-min.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/jquery.meanmenu.min.js"></script>
        <script src="js/ajax-form.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/aos.js"></script>
        <script src="js/jquery.scrollUp.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyATY4Rxc8jNvDpsK8ZetC7JyN4PFVYGCGM"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script src="js/register.js"></script>
    </body>
</html>
