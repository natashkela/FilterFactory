<?php
require_once('base/models/Filters.php');
?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> Buy Filters | Filter Factory  </title>
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
            <!-- page-title-area start -->
            <div class="page-title-area pos-relative gray-bg pt-90 pb-60 fix"
                style="background-image: url(img/bg/page-title-bg.jpg);">
                <div class="shape-slider">
                    <img class="shape shape-2  " src="img/shape/shape2.png" alt="">
                    <img class="shape shape-4 " src="img/shape/shape3.png" alt="">
                    <img class="shape shape-5 " src="img/shape/shape-sq.png" alt="">
                    <img class="shape shape-6 " src="img/shape/shape-c-2.png" alt="">
                </div>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="page-title mb-30">
                                <h3>Shop Filters</h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="breadcrumb-list text-left text-lg-right mb-30">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li>Shop</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page-title-area end -->

            <!-- shop-area start -->
            <section class="shop-banner-area pt-140 pb-140">
                <div class="container">
                    <div class="row">
                      <div class="hero-form" style="visibility: visible; animation-delay: 1.3s; animation-name: fadeInUp;margin: auto; width: 70%; margin-bottom: 20px;">
                        <form action="#">
                          <input type="text" placeholder="Search for filters">
                          <button type="submit">Search</button>
                        </form>
                      </div>
                    </div>
                    <div class="row mt-20">
                        <div class="col-xl-4 col-lg-5 col-md-6">
                            <div class="product-showing mb-40">
                                <p>Showing 1–22 of 32 results</p>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-7 col-md-6">
                            <div class="shop-tab f-right mb-40">
                                <ul class="nav text-center" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                            aria-controls="home" aria-selected="true"><i class="ti-layout-grid2"></i> </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                            aria-controls="profile" aria-selected="false"><i class="ti-menu-alt"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="pro-filter d-flex align-items-center justify-content-end f-right mb-40">
                                <h5>Sort by</h5>
                                <form action="#">
                                    <select name="pro-filter" id="pro-filter">
                                        <option value="1">Newest </option>
                                        <option value="2">Price: Low - High </option>
                                        <option value="3">Price: High - Low </option>
                                        <option value="4">Most Featured</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="row">
                                        <?php
                                            $filters = new Filters();
                                            $allFilters = $filters->GetAllFilters();
                                            foreach($allFilters as $filter) {
                                                $filterDetailUrl = "filter-detail.php?id=".$filter['filter_id'];
                                                ?>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="product mb-40">
                                                        <div class="product__img">
                                                            <a href="product-details.html"><img src="img/filter-thumbnails/filter_id_<?php echo $filter['filter_id'];?>.jpg"
                                                                                                alt=""></a>
                                                            <div class="product-action text-center">
                                                                <a href="#"><i class="ti-heart"></i></a>
                                                                <a href="#" class="add-to-cart" data-filter-id="<?php echo $filter['filter_id'];?>" data-filter-name="<?php echo $filter['filter_name'];?>"><i class="ti-bag"></i></a>
                                                                <a href="<?php echo $filterDetailUrl;?>"><i
                                                                            class="ti-eye"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="product__content text-center pt-30">
                                                            <h4 class="pro-title"><a href="<?php echo $filterDetailUrl;?>"><?php echo $filter['filter_name'];?></a></h4>
                                                            <div class="price">
                                                                <span>$ <?php echo $filter['filter_price'];?></span>
                                                            </div>
                                                            <div class="ratings mt-10">
                                                                <i class="ti-star"></i>
                                                                <i class="ti-star"></i>
                                                                <i class="ti-star"></i>
                                                                <i class="ti-star"></i>
                                                                <i class="ti-star"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php
                                            }
                                        ?>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <?php
                                        foreach($allFilters as $filter) {
                                            $filterDetailUrl = "filter-detail.php?id=" . $filter['filter_id'];
                                            ?>
                                            <div class="row">
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="product mb-30">
                                                        <div class="product__img">
                                                            <a href="<?php echo $filterDetailUrl;?>"><img src="img/filter-thumbnails/filter_id_<?php echo $filter['filter_id'];?>.jpg"
                                                                                                alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="product-list-content pt-10 mb-30">
                                                        <div class="product__content mb-20">
                                                            <div class="ratings mb-10">
                                                                <i class="ti-star"></i>
                                                                <i class="ti-star"></i>
                                                                <i class="ti-star"></i>
                                                                <i class="ti-star"></i>
                                                                <i class="ti-star"></i>
                                                            </div>
                                                            <h4 class="pro-title"><a href="<?php echo $filterDetailUrl;?>"><?php echo $filter['filter_name'];?></a></h4>
                                                            <div class="price">
                                                                <span>$ <?php echo $filter['filter_price'];?></span>
                                                            </div>
                                                        </div>
                                                        <p><?php
                                                            $filter['filter_description'];?></p> 
                                                        <div class="product-action-list pt-15">
                                                            <a class="btn-cart add-to-cart" data-filter-id="<?php echo $filter['filter_id'];?>" data-filter-name="<?php echo $filter['filter_name'];?>" href="#">add to cart</a>
                                                            <a class="action-btn" href="#"><i class="ti-heart"></i></a>
                                                            <a class="action-btn" href="<?php echo $filterDetailUrl;?>"><i
                                                                        class="ti-eye"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="basic-pagination basic-pagination-2 text-center mt-20">
                                <ul>
                                    <li><a href="#"><i class="fas fa-angle-double-left"></i></a></li>
                                    <li><a href="#">01</a></li>
                                    <li class="active"><a href="#">02</a></li>
                                    <li><a href="#">03</a></li>
                                    <li><a href="#"><i class="fas fa-ellipsis-h"></i></a></li>
                                    <li><a href="#"><i class="fas fa-angle-double-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- shop-area end -->

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
        <script src="js/shop.js"></script>
    </body>
</html>
