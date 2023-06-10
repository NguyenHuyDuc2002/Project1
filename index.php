<?php 
    require_once('layout/header.php');
    require_once('controller/indexController.php');
?>

<!-- main wrapper start -->
<main class="body-bg">

<div class="main-banner-area">
    <div class="container">
        <div class="row custom-row g-0">
            <div class="col-xl-3"></div>
            <!-- slider area start -->
            <div class="col-xl-6 col-lg-8">
                <section class="slider-area">
                    <div class="hero-slider-active slick-arrow-style slick-dot-style">
                        <?php 
                            hienThiSlide();
                        ?>
                        <!-- single slider item start -->
                        <div class="hero-slider-item stlder-style_2">
                            <div class="d-flex align-items-center bg-img h-100" data-bg="assets/img/slider/home2-slide1.jpg">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="hero-slider-content hero-slider-content_2">
                                            <h2>biggest</h2>
                                            <h1>sale <br>75% off</h1>
                                            <h3>tool storage</h3>
                                            <a href="shop.html" class="btn-hero">shop now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single slider item end -->

                        <!-- single slider item start -->
                        <div class="hero-slider-item stlder-style_2">
                            <div class="d-flex align-items-center bg-img h-100" data-bg="assets/img/slider/home2-slide2.jpg">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="hero-slider-content hero-slider-content_2">
                                            <h2>free impact <br>driver</h2>
                                            <h1>with select <br> drywall kits</h1>
                                            <a href="shop.html" class="btn-hero">shop now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single slider item start -->
                    </div>
                </section>
            </div>
            <!-- slider area end -->

            <!-- banner-statistics-area start -->
            <div class="col-xl-3 col-lg-4">
                <div class="row g-0">
                    <div class="col-md-12 col-sm-6">
                        <div class="img-container">
                            <a href="#"><img src="assets/img/banner/img1_home2.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-6">
                        <div class="img-container">
                            <a href="#"><img src="assets/img/banner/img2_home2.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- banner-statistics-area end -->
        </div>
    </div>
</div>

<div class="feature-product-area pt-50">
    <div class="container">
        <div class="feature-product-wrapper bg-white">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-5 col-sm-7">
                    <div class="img-container">
                        <a href="shop.html">
                            <img src="assets/img/banner/img2_home.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7 col-sm-5">
                    <div class="feature-product-slider">
                        <div class="features-product-carousel slick-arrow-style">

                            <?php 
                                hienThiSlideSanPham();
                            ?>
                            <!-- product item start -->
                            <div class="product-slide-item">
                                <div class="product-item">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="assets/img/product/product-5.jpg" alt="">
                                        </a>
                                        <div class="add-to-links">
                                            <a href="wishlist.html" data-bs-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                            <a href="compare.html" data-bs-toggle="tooltip" title="Add to Compare"><i class="ion-stats-bars"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h5 class="product-name"><a href="product-details.html">joust duffle bag</a></h5>
                                        <div class="price-box">
                                            <span class="price-regular">$50.00</span>
                                            <span class="price-old"><del>$29.99</del></span>
                                        </div>
                                        <div class="product-item-action">
                                            <a class="btn btn-cart" href="cart.html"><i class="ion-bag"></i> Add To Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- product item start -->

                            <!-- product item start -->
                            <div class="product-slide-item">
                                <div class="product-item">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="assets/img/product/product-4.jpg" alt="">
                                        </a>
                                        <div class="add-to-links">
                                            <a href="wishlist.html" data-bs-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                            <a href="compare.html" data-bs-toggle="tooltip" title="Add to Compare"><i class="ion-stats-bars"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h5 class="product-name"><a href="product-details.html">joust duffle bag</a></h5>
                                        <div class="price-box">
                                            <span class="price-regular">$50.00</span>
                                            <span class="price-old"><del>$29.99</del></span>
                                        </div>
                                        <div class="product-item-action">
                                            <a class="btn btn-cart" href="cart.html"><i class="ion-bag"></i> Add To Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- product item start -->

                            <!-- product item start -->
                            <div class="product-slide-item">
                                <div class="product-item">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="assets/img/product/product-2.jpg" alt="">
                                        </a>
                                        <div class="add-to-links">
                                            <a href="wishlist.html" data-bs-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                            <a href="compare.html" data-bs-toggle="tooltip" title="Add to Compare"><i class="ion-stats-bars"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h5 class="product-name"><a href="product-details.html">joust duffle bag</a></h5>
                                        <div class="price-box">
                                            <span class="price-regular">$50.00</span>
                                            <span class="price-old"><del>$29.99</del></span>
                                        </div>
                                        <div class="product-item-action">
                                            <a class="btn btn-cart" href="cart.html"><i class="ion-bag"></i> Add To Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- product item start -->

                            <!-- product item start -->
                            <div class="product-slide-item">
                                <div class="product-item">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="assets/img/product/product-6.jpg" alt="">
                                        </a>
                                        <div class="add-to-links">
                                            <a href="wishlist.html" data-bs-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                            <a href="compare.html" data-bs-toggle="tooltip" title="Add to Compare"><i class="ion-stats-bars"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h5 class="product-name"><a href="product-details.html">joust duffle bag</a></h5>
                                        <div class="price-box">
                                            <span class="price-regular">$50.00</span>
                                            <span class="price-old"><del>$29.99</del></span>
                                        </div>
                                        <div class="product-item-action">
                                            <a class="btn btn-cart" href="cart.html"><i class="ion-bag"></i> Add To Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- product item start -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- features categories area end -->

<!-- brand logo area start -->
<div class="brand-logo-area bg-white">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="brand-logo-slider">
                    <div class="brand-logo-carousel">
                        <!-- brand single item start -->
                        <div class="brand-item">
                            <img src="assets/img/brand/brand-1.png" alt="">
                        </div>
                        <!-- brand single item end -->

                        <!-- brand single item start -->
                        <div class="brand-item">
                            <img src="assets/img/brand/brand-2.png" alt="">
                        </div>
                        <!-- brand single item end -->

                        <!-- brand single item start -->
                        <div class="brand-item">
                            <img src="assets/img/brand/brand-3.png" alt="">
                        </div>
                        <!-- brand single item end -->

                        <!-- brand single item start -->
                        <div class="brand-item">
                            <img src="assets/img/brand/brand-4.png" alt="">
                        </div>
                        <!-- brand single item end -->

                        <!-- brand single item start -->
                        <div class="brand-item">
                            <img src="assets/img/brand/brand-5.png" alt="">
                        </div>
                        <!-- brand single item end -->

                        <!-- brand single item start -->
                        <div class="brand-item">
                            <img src="assets/img/brand/brand-3.png" alt="">
                        </div>
                        <!-- brand single item end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- brand logo area end -->

</main>
<!-- main wrapper end -->

<?php 
    require_once('layout/footer.php');
?>
