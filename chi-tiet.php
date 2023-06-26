<?php 
    require_once('layout/header.php');
    require_once('controller/chi-tietController.php');
?>
 <!-- main wrapper start -->
 <main class="body-bg">

<<<<<<< HEAD
=======
<!-- breadcrumb area start -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-wrap">
                    <nav aria-label="breadcrumb">
                        <h1><?php echo ($chiTietSanPham['tenSanPham']) ?></h1>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="shop.html">shop</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?php echo ($chiTietSanPham['tenSanPham']) ?></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb area end -->

>>>>>>> dev-code-back-end
<!-- page main wrapper start -->
<div class="shop-main-wrapper pt-50">
    <div class="container">
        <div class="row">
            <!-- product details wrapper start -->
            <div class="col-lg-12 order-1 order-lg-2">
                <!-- product details inner end -->
                <div class="product-details-inner">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="product-large-slider mb-20">
                               <?php 
                                    renderDanhSachAnhSlideTo();
                               ?>
                            </div>
                            <div class="pro-nav slick-row-10 slick-arrow-style">
                                <?php 
                                    renderDanhSachAnhSlideNho();
                                ?>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="product-details-des">
                                <h5 class="product-name"><?php echo ($chiTietSanPham['tenSanPham']) ?></h5>
                                <div class="ratings">
                                    <?php 
                                        renderRatingStar();
                                    ?>
                                </div>
                                <div class="price-box">
                                    <span class="price-regular">$ <?php echo($chiTietSanPham['giaTien']) ?></span>
                                    <span class="price-old"><del></del></span>
                                </div>
                                <p><?php echo($chiTietSanPham['moTa']) ?></p>
                                <div class="availability mt-10 mb-20">
                                    <i class="ion-checkmark-circled"></i>
                                    <span><?php echo($chiTietSanPham['soLuong']) ?> in stock</span>
                                </div>
                                <div class="quantity-cart-box d-flex align-items-center">
                                    <div class="quantity">
                                        <div class="pro-qty"><input type="text" value="1"></div>
                                    </div>
                                    <div class="action_link">
                                        <a class="btn btn-cart" href="#"><i class="ion-bag"></i>Add to cart</a>
                                    </div>
                                </div>
<<<<<<< HEAD
                                <div class="pro-size mb-26 mt-26">
                                    <h5>size :</h5>
                                    <select class="nice-select">
                                        <option>S</option>
                                        <option>M</option>
                                        <option>L</option>
                                        <option>XL</option>
                                    </select>
                                </div>
                                <div class="color-option mb-26">
                                    <h5>color :</h5>
                                    <select class="nice-select">
                                        <option>Golden</option>
                                        <option>White</option>
                                        <option>Blue</option>
                                        <option>Pink</option>
                                    </select>
=======
                                <?php 
                                    renderLoaiThongSoKyThuat();
                                ?>
                                <div class="useful-links mt-28">
                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Compare"><i
                                            class="ion-ios-shuffle"></i>compare</a>
                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist"><i
                                            class="ion-android-favorite-outline"></i>wishlist</a>
>>>>>>> dev-code-back-end
                                </div>
                                <div class="like-icon mt-20">
                                    <a class="facebook" href="#"><i class="fa fa-facebook"></i>like</a>
                                    <a class="twitter" href="#"><i class="fa fa-twitter"></i>tweet</a>
                                    <a class="pinterest" href="#"><i class="fa fa-pinterest"></i>save</a>
                                    <a class="google" href="#"><i class="fa fa-google-plus"></i>share</a>
                                </div>
                                <div class="share-icon mt-18">
                                    <h5>share product:</h5>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- product details inner end -->

                <!-- product details reviews start -->
                <div class="product-details-reviews mt-50">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="product-review-info">
                                <ul class="nav review-tab">
                                    <li>
                                        <a class="active" data-bs-toggle="tab" href="#tab_one">description</a>
                                    </li>
                                    <li>
                                        <a data-bs-toggle="tab" href="#tab_two">information</a>
                                    </li>
                                    <li>
                                        <a data-bs-toggle="tab" href="#tab_three">reviews (1)</a>
                                    </li>
                                </ul>
                                <div class="tab-content reviews-tab">
                                    <div class="tab-pane fade show active" id="tab_one">
                                        <div class="tab-one">
                                            <p><?php echo $chiTietSanPham['thongTinChiTiet'] ?></p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab_two">
                                        <table class="table table-bordered">
                                            <tbody>
                                                <?php
                                                    renderBangThongSoKyThuat();
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="tab_three">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- product details reviews end -->
            </div>
            <!-- product details wrapper end -->
        </div>
    </div>
</div>
<!-- page main wrapper end -->

<<<<<<< HEAD
=======
<!-- most viewed product area start -->
<section class="related-products-area pt-50 pb-50">
    <div class="container">
        <div class="deals-wrapper bg-white">
            <div class="row">
                <div class="col-12">
                    <div class="section-header-deals">
                        <div class="section-title-deals">
                            <h4>Related Product</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="most-viewed-carousel-2 slick-arrow-style">
                        <?php 
                            renderRelatedProduct();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- most viewed product area end -->

>>>>>>> dev-code-back-end
</main>
<!-- main wrapper end -->


<?php 
    require_once('layout/footer.php');
?>