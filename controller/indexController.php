<?php 
    require_once('repository/createConnection.php');
    require_once('repository/indexRepository.php');

    function hienThiSlideSanPham(){
       
    }
    function hienThiSlideIndex(){
        $slides_array = getSlideByCode("slide_khoi_giua_trang_chu");
        foreach($slides_array as $slide){
            echo '
            <!-- single slider item start -->
            <div class="hero-slider-item stlder-style_2">
                <div class="d-flex align-items-center bg-img h-100" data-bg="'.$slide["image"].'">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="hero-slider-content hero-slider-content_2">
                                <h2>'.$slide["title1"].'</h2>
                                <h1>'.$slide["title2"].'</h1>
                                <a href="'.$slide["slug"].'" class="btn-hero">shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single slider item end -->
            ';
        }
    }

    function renderDanhMucSanPham(){
        $danhMuc = getAllDanhMuc();
        $html = '';
        foreach($danhMuc as $d){
            $html = $html . '
            <!-- most viewed product area start -->
            <section class="most-viewed-products pt-46 pb-50">
                <div class="container">
                    <div class="deals-wrapper p-0">
                        <div class="row">
                            <!-- new product area start -->
                            <div class="col-12">
                                <div class="section-header-inner_2">
                                    <div class="section-title-deals">
                                        <h4>'.$d['tenDanhMuc'].'</h4>
                                    </div>
                                    <div class="slick-append slick-append-style_2"></div>
                                </div>
                                <div class="product-item-wrapper most-viewed bg-white">
                                    <div class="most-viewed-carousel">
                                        '.renderSanPhamByDanhMucId($d['id']).'
                                    </div>
                                </div>
                            </div>
                            <!-- new product area start -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- most viewed product area end -->
            ';
        }
        echo $html;
    }

    function renderSanPhamByDanhMucId($danhMucId){
        $sanPhams = getSanPhamByDanhMucId($danhMucId);
        $html = '';
        if(count($sanPhams) > 0){
            foreach($sanPhams as $s){
                $html = $html . '
                <!-- product item start -->
                <div class="product-slide-item">
                    <div class="product-item mb-0">
                        <div class="product-thumb">
                            <a href="product-details.html">
                                <img class="custom-image-product" src="'.$s['avatarSanPham'].'" alt="">
                            </a>
                            <div class="add-to-links">
                                <a href="wishlist.html" data-bs-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                <a href="compare.html" data-bs-toggle="tooltip" title="Add to Compare"><i class="ion-stats-bars"></i></a>
                            </div>
                        </div>
                        <div class="product-content p-0">
                            <h5 class="product-name pb-0"><a href="javascript:void(0)">'.$s['tenSanPham'].'</a></h5>
                            <div class="price-box">
                                <span class="price-regular">$ '.$s['giaTien'].'</span>
                            </div>
                            <div class="product-item-action">
                                <a class="btn btn-cart" href="cart.html"><i class="ion-bag"></i> Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- product item start -->
                ';
            }
        }
        
        return $html;
    }
?>


