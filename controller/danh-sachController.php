<?php
require_once('repository/danh-sachRepository.php');
    $danhMucId = $_GET['danhMucId'];

    
    $tsfiler = "";
    if(isset($_GET['tsfiler'])){
        $tsfiler = $_GET['tsfiler'];
    }
    $min = 0;
    $max = 0;
    if(isset($_GET['min'])){
        $min = intval($_GET['min']);
    }
    if(isset($_GET['max'])){
        $max = intval($_GET['max']);
    }
    
    
    $chiTietDanhMuc = getChiTietDanhMucById($danhMucId);

    function renderDanhSachSanPham(){
        global $danhMucId;
        global $tsfiler;
        global $min;
        global $max;
        $sanPhams = null;
        $sanPhams = getSanPhamByDanhMucIdAndFullFilter($danhMucId, $tsfiler, $min, $max);
        $html = '';
        foreach($sanPhams as $s){
            $html = $html . '
            <!-- product single item start -->
            <div class="col-md-4 col-sm-6">
                <!-- product grid start -->
                <div class="product-item">
                    <div class="product-thumb">
                        <a href="product-details.html">
                            <img class="" src="assets/img/product/product-1.jpg" alt="">
                        </a>
                        <div class="add-to-links">
                            <a href="wishlist.html" data-bs-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a>
                            <a href="compare.html" data-bs-toggle="tooltip" title="Add to Compare"><i class="ion-stats-bars"></i></a>
                        </div>
                    </div>
                    <div class="product-content">
                        <h5 class="product-name"><a href="javascript:void(0)">'.$s['tenSanPham'].'</a></h5>
                        <div class="price-box">
                            <span class="price-regular">$ '.$s['giaTien'].'</span>
                            
                        </div>
                        <div class="product-item-action">
                            <a class="btn btn-cart" href="cart.html"><i class="ion-bag"></i> Add To Cart</a>
                        </div>
                    </div>
                </div>
                <!-- product grid end -->

                <!-- product list item end -->
                <div class="product-list-item">
                    <div class="product-thumb">
                        <a href="javascript:void(0)">
                            <img class="custom-image-product" src="'.$s['avatarSanPham'].'" alt="">
                        </a>
                        <div class="add-to-links">
                            <a href="wishlist.html" data-bs-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a>
                            <a href="compare.html" data-bs-toggle="tooltip" title="Add to Compare"><i class="ion-stats-bars"></i></a>
                        </div>
                    </div>
                    <div class="product-content-list">
                        <div class="ratings">
                            <span><i class="ion-android-star"></i></span>
                            <span><i class="ion-android-star"></i></span>
                            <span><i class="ion-android-star"></i></span>
                            <span><i class="ion-android-star"></i></span>
                            <span><i class="ion-android-star"></i></span>
                        </div>
                        <h5 class="product-name"><a href="product-details.html">'.$s['tenSanPham'].'</a></h5>
                        <div class="price-box">
                            <span class="price-regular">$ '.$s['giaTien'].'</span>
                            <span class="price-old"><del>$29.99</del></span>
                        </div>
                        <p>'.$s['moTa'].'</p>
                        <div class="product-item-action">
                            <a class="btn btn-cart" href="cart.html"><i class="ion-bag"></i> Add To Cart</a>
                        </div>
                    </div>
                </div>
                <!-- product list item end -->
            </div>
            <!-- product single item start -->
            ';
        }
        echo $html;
    }

    function renderFilterThongSo(){
        $thongSo = getLoaiThongSoKyThuat();
        $html = '';
        foreach($thongSo as $ts){
            $html = $html . '
            <!-- single sidebar start -->
            <div class="sidebar-single">
                <div class="sidebar-title">
                    <h3>'.$ts['loaiThongSo'].'</h3>
                </div>
                <div class="sidebar-body">
                    <ul class="checkbox-container">
                        '.renderListThongSoByLoai($ts['loaiThongSo']).'
                    </ul>
                </div>
            </div>
            <!-- single sidebar end -->
            ';
        }
        echo $html;
    }

    function renderListThongSoByLoai($loai){
        $thongSos = getListThongSoByLoai($loai);
        $html = '';
        foreach($thongSos as $ts){
            $html = $html . '
            <li>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input tskt-chechbox" id="customCheck-'.$ts['id'].'" value="'.$ts['id'].'">
                    <label class="custom-control-label" for="customCheck-'.$ts['id'].'">'.$ts['tenThongSo'].'</label>
                </div>
            </li>
            ';
        }
        return $html;
    }
    
?>
