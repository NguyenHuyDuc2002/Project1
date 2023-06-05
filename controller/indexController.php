<?php 
    $slides_array = array(
        array(
            'id' => 1,
            'code' => 'slide1',
            'title1' => 'Mua hàng online',
            'title2' => 'Dễ dàng và thuận tiện',
            'image' => 'https://ngs.edu.vn/wp-content/uploads/2022/06/header-scaled.jpg',
            'position' => 1,
            'slug' => 'mua-hang-online',
        ),
        array(
            'id' => 2,
            'code' => 'slide2',
            'title1' => 'Giảm giá đến 50%',
            'title2' => 'Chỉ trong tuần này',
            'image' => 'https://ngs.edu.vn/wp-content/uploads/2022/06/header-scaled.jpg',
            'position' => 2,
            'slug' => 'giam-gia-tuan-nay',
        ),
        array(
            'id' => 3,
            'code' => 'slide3',
            'title1' => 'Sản phẩm mới nhất',
            'title2' => 'Khám phá ngay',
            'image' => 'https://ngs.edu.vn/wp-content/uploads/2022/06/header-scaled.jpg',
            'position' => 3,
            'slug' => 'san-pham-moi',
        ),
        array(
            'id' => 4,
            'code' => 'slide4',
            'title1' => 'Giao hàng miễn phí',
            'title2' => 'Trên toàn quốc',
            'image' => 'https://ngs.edu.vn/wp-content/uploads/2022/06/header-scaled.jpg',
            'position' => 4,
            'slug' => 'giao-hang-mien-phi',
        ),
    );

    $schools = array(
        array(
            "id" => 1,
            "schoolName" => "ABC International School",
            "categoryId" => 1,
            "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcStOyCO117SAoc_iuxBggz563rMzZhoy6WSFg&usqp=CAU",
            "establishedYear" => 1999,
            "address" => "123 Main Street, Anytown, USA",
            "hotline" => "555-1234",
            "website" => "https://www.abcschool.com",
            "slug" => "abc-international-school"
        ),
        array(
            "id" => 2,
            "schoolName" => "XYZ Language School",
            "categoryId" => 2,
            "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcStOyCO117SAoc_iuxBggz563rMzZhoy6WSFg&usqp=CAU",
            "establishedYear" => 2005,
            "address" => "456 Elm Street, Anytown, USA",
            "hotline" => "555-5678",
            "website" => "https://www.xyzlanguageschool.com",
            "slug" => "xyz-language-school"
        ),
        array(
            "id" => 3,
            "schoolName" => "Sunshine Elementary",
            "categoryId" => 3,
            "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcStOyCO117SAoc_iuxBggz563rMzZhoy6WSFg&usqp=CAU",
            "establishedYear" => 2010,
            "address" => "789 Oak Street, Anytown, USA",
            "hotline" => "555-9012",
            "website" => "https://www.sunshineelementary.com",
            "slug" => "sunshine-elementary"
        ),
        array(
            "id" => 4,
            "schoolName" => "My School",
            "categoryId" => 1,
            "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcStOyCO117SAoc_iuxBggz563rMzZhoy6WSFg&usqp=CAU",
            "establishedYear" => 1980,
            "address" => "321 Maple Street, Anytown, USA",
            "hotline" => "555-3456",
            "website" => "https://www.myschool.com",
            "slug" => "my-school"
        ),
        array(
            "id" => 5,
            "schoolName" => "Bright Minds Academy",
            "categoryId" => 3,
            "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcStOyCO117SAoc_iuxBggz563rMzZhoy6WSFg&usqp=CAU",
            "establishedYear" => 2015,
            "address" => "654 Pine Street, Anytown, USA",
            "hotline" => "555-7890",
            "website" => "https://www.brightmindsacademy.com",
            "slug" => "bright-minds-academy"
        )
    );

    $schools = getProductListInCategory(1);

    function hienThiSlideSanPham(){
        global $schools;
        foreach($schools as $s){
            echo '
            <!-- product item start -->
            <div class="product-slide-item">
                <div class="product-item">
                    <div class="product-thumb">
                        <a href="product-details.html">
                            <img src="'.$s["image"].'" alt="">
                        </a>
                        <div class="add-to-links">
                            <a href="compare.html" data-bs-toggle="tooltip" title="Add to Compare"><i class="ion-stats-bars"></i></a>
                        </div>
                    </div>
                    <div class="product-content">
                        <h5 class="product-name"><a href="product-details.html">'.$s['schoolName'].'</a></h5>
                        
                    </div>
                </div>
            </div>
            <!-- product item start -->
            ';
        }
    }
    function hienThiSlide(){
        //Su dung bien global slides_array de chay ham
        global $slides_array;
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


