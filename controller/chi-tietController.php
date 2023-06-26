<?php
    require_once('repository/chi-tietRepository.php');
    $sanPhamId = $_GET["sanPhamId"];

    $chiTietSanPham = getChiTietSanPham($sanPhamId);


    function renderRatingStar(){
        global $chiTietSanPham;
        $soLuongSao = $chiTietSanPham['rating'];
        $html = '';
        for($i = 0; $i < $soLuongSao; $i++){
            $html = $html . '
                <span><i class="ion-android-star"></i></span>
            ';
        }
        echo $html;
    }

    function renderLoaiThongSoKyThuat(){
        global $sanPhamId;
        $loaiThongSo = getLoaiThongSoSanPhamBySanPhamId($sanPhamId);
        $html = "";
        foreach($loaiThongSo as $loai){
            $html = $html . '
            <div class="pro-size mb-26 mt-26">
                <h5>'.$loai['loaiThongSo'].' :</h5>
                <select class="nice-select">
                    '.renderChiTietThongSoByLoaiThongSo($loai['loaiThongSo']).'
                </select>
            </div>
            ';
        }
        echo $html;
    }
    function renderChiTietThongSoByLoaiThongSo($loaiThongSo){
        global $sanPhamId;
        $chiTietThongSo = getChiTietThongSoKyThuatByLoaiThongSo($sanPhamId, $loaiThongSo);
        $html = "";
        foreach($chiTietThongSo as $ct){
            $html = $html . '
                <option value="'.$ct['id'].'">'.$ct['tenThongSo'].'</option>
            ';
        }
        return $html;
    }

    function renderDanhSachAnhSlideTo(){
        global $chiTietSanPham;
        if($chiTietSanPham['danhSachAnh'] != "" && $chiTietSanPham['danhSachAnh'] != null){
            $dsAnh = explode(',',$chiTietSanPham['danhSachAnh']);
            $html = "";
            foreach($dsAnh as $d){
                $html = $html . '
                <div class="pro-large-img img-zoom">
                    <img src="'.$d.'" alt="" />
                </div>
                ';
            }
            echo $html;

        }
        
    }

    function renderDanhSachAnhSlideNho(){
        global $chiTietSanPham;
        if($chiTietSanPham['danhSachAnh'] != "" && $chiTietSanPham['danhSachAnh'] != null){
            $dsAnh = explode(',',$chiTietSanPham['danhSachAnh']);
            $html = "";
            foreach($dsAnh as $d){
                $html = $html . '
                <div class="pro-nav-thumb">
                    <img src="'.$d.'" alt="" />
                </div>
                ';
            }
            echo $html;

        }
        
    }

    function renderBangThongSoKyThuat(){
        global $sanPhamId;
        $loaiThongSo = getLoaiThongSoSanPhamBySanPhamId($sanPhamId);
        $html = "";
        foreach($loaiThongSo as $loai){
            $html = $html . '
            <tr>
                <td>'.$loai['loaiThongSo'].'</td>
                '.renderBangChiTietThongSoByLoaiThongSo($loai['loaiThongSo']).'
            </tr>
            ';
        }
        echo $html;
    }

    function renderBangChiTietThongSoByLoaiThongSo($loaiThongSo){
        global $sanPhamId;
        $chiTietThongSo = getChiTietThongSoKyThuatByLoaiThongSo($sanPhamId, $loaiThongSo);
        $html = "<td>".hash_array_chiTietThongSo($chiTietThongSo)."</td>";
       return $html;
    }

    function hash_array_chiTietThongSo($chiTietThongSo){
        $new_Array = array();
        foreach($chiTietThongSo as $ct){
            array_push($new_Array, $ct['tenThongSo']);
        }
        $kq = implode(', ', $new_Array);
        return $kq;
    }
    
    function renderRelatedProduct(){
        global $sanPhamId;
        $result = getSanPhamCungDanhMuc($sanPhamId);
        $html = '';
        foreach($result as $r){
            $html = $html . '
            <!-- product item start -->
            <div class="product-slide-item">
                <div class="product-item mb-0">
                    <div class="product-thumb">
                        <a href="chi-tiet.php?sanPhamId='.$r['id'].'">
                            <img src="'.$r['avatarSanPham'].'" alt="" class="custom-image-product">
                        </a>
                        <div class="add-to-links">
                            <a href="wishlist.html" data-bs-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a>
                            <a href="compare.html" data-bs-toggle="tooltip" title="Add to Compare"><i class="ion-stats-bars"></i></a>
                        </div>
                    </div>
                    <div class="product-content p-0">
                        <h5 class="product-name pb-0"><a href="chi-tiet.php?sanPhamId='.$r['id'].'">'.$r['tenSanPham'].'</a></h5>
                        <div class="price-box">
                            <span class="price-regular">$ '.$r['giaTien'].'</span>
                            
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
        echo $html;

    }
?>