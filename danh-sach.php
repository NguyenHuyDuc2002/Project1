<?php 
    require_once('layout/header.php');
    require_once('controller/danh-sachController.php');
?>


<!-- main wrapper start -->
<main class="body-bg">

<!-- breadcrumb area start -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-wrap">
                    <nav aria-label="breadcrumb">
                        <h1>shop list left sidebar</h1>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">shop list left sidebar</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb area end -->

<!-- page main wrapper start -->
<div class="shop-main-wrapper pt-50 pb-50">
    <div class="container">
        <div class="row">
            <!-- sidebar area start -->
            <div class="col-lg-3 order-2 order-lg-1">
                <aside class="sidebar-wrapper">
                    <!-- single sidebar start -->
                    <div class="sidebar-single">
                        <div class="sidebar-title">
                            <h3>categories</h3>
                        </div>
                        <div class="sidebar-body">
                            <!-- mobile menu navigation start -->
                            <div class="shop-categories">
                                <nav>
                                    <ul class="mobile-menu">
                                        <li class="menu-item-has-children"><a href="#">hand tools</a>
                                            <ul class="dropdown">
                                                <li><a href="product-details.html">fresh food</a></li>
                                                <li><a href="product-details.html">junk food</a></li>
                                                <li><a href="product-details.html">wet food</a></li>
                                                <li><a href="product-details.html">dry food</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="#">digital tools</a>
                                            <ul class="dropdown">
                                                <li><a href="product-details.html">fresh food</a></li>
                                                <li><a href="product-details.html">junk food</a></li>
                                                <li><a href="product-details.html">wet food</a></li>
                                                <li><a href="product-details.html">dry food</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="#">kids shoppers</a>
                                            <ul class="dropdown">
                                                <li><a href="product-details.html">fresh food</a></li>
                                                <li><a href="product-details.html">junk food</a></li>
                                                <li><a href="product-details.html">wet food</a></li>
                                                <li><a href="product-details.html">dry food</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="#">electronics</a>
                                            <ul class="dropdown">
                                                <li><a href="product-details.html">fresh food</a></li>
                                                <li><a href="product-details.html">junk food</a></li>
                                                <li><a href="product-details.html">wet food</a></li>
                                                <li><a href="product-details.html">dry food</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- mobile menu navigation end -->
                        </div>
                    </div>
                    <!-- single sidebar end -->
                    <?php 
                        renderFilterThongSo();
                    ?>
                    <!-- single sidebar start -->
                    <div class="sidebar-banner">
                        <button id="sp-filter" type="button" class="btn">Filter</button>
                    </div>
                    <!-- single sidebar end -->
                </aside>
            </div>
            <!-- sidebar area end -->

            <!-- shop main wrapper start -->
            <div class="col-lg-9 order-1 order-lg-2">
                <div class="shop-product-wrapper">
                    <!-- shop product top wrap start -->
                    <div class="shop-top-bar">
                        <div class="row align-items-center">
                            <div class="col-lg-7 col-md-6 order-2 order-md-1">
                                <div class="top-bar-left">
                                    <div class="product-view-mode">
                                        <a href="#" data-target="grid-view"><i class="fa fa-th"></i></a>
                                        <a class="active" href="#" data-target="list-view"><i class="fa fa-list"></i></a>
                                    </div>
                                    <div class="product-amount">
                                        <p>Showing 1–16 of 21 results</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-6 order-1 order-md-2">
                                <div class="top-bar-right">
                                    <div class="product-short">
                                        <p>Sort By : </p>
                                        <select class="nice-select" name="sortby">
                                            <option value="trending">Relevance</option>
                                            <option value="sales">Name (A - Z)</option>
                                            <option value="sales">Name (Z - A)</option>
                                            <option value="rating">Price (Low &gt; High)</option>
                                            <option value="date">Rating (Lowest)</option>
                                            <option value="price-asc">Model (A - Z)</option>
                                            <option value="price-asc">Model (Z - A)</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- shop product top wrap start -->

                    <!-- product item list start -->
                    <div class="shop-product-wrap list-view row">
                        <?php 
                            renderDanhSachSanPham();
                        ?>
                    </div>
                    <!-- product item list end -->

                    <!-- start pagination area -->
                    <div class="paginatoin-area text-center">
                        <ul class="pagination-box">
                            <li><a class="previous" href="#"><i class="ion-ios-arrow-left"></i>Prev</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a class="next" href="#">Next<i class="ion-ios-arrow-right"></i></a></li>
                        </ul>
                    </div>
                    <!-- end pagination area -->
                </div>
            </div>
            <!-- shop main wrapper end -->
        </div>
    </div>
</div>
<!-- page main wrapper end -->

</main>
<!-- main wrapper end -->

<?php 
    require_once('layout/footer.php');
?>
