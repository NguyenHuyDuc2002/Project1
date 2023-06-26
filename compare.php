<?php 
    require_once('layout/header.php');
    require_once('controller/compareController.php')
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
                        <h1>compare</h1>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">compare</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb area end -->

<!-- compare main wrapper start -->
<div class="compare-page-wrapper pt-50 pb-50">
    <div class="container">
        <div class="section-bg-color">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Compare Page Content Start -->
                    <div class="compare-page-content-wrap">
                        <div class="compare-table table-responsive">
                            <table class="table table-bordered mb-0">
                                <tbody>
                                    <tr>
                                        <td class="first-column">Product</td>
                                        <?php
                                            renderCompareProductRow_1();
                                        ?>
                                    </tr>
                                    <tr>
                                        <td class="first-column">Description</td>
                                        <?php 
                                            renderCompareProductRow_2();
                                        ?>
                                    </tr>
                                    <tr>
                                        <td class="first-column">Price</td>
                                        <?php 
                                            renderCompareProductRow_3();
                                        ?>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Compare Page Content End -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- compare main wrapper end -->

</main>
<!-- main wrapper end -->

<?php 
    require_once('layout/footer.php')
?>