<?php 
    require_once('layout/header.php');
    
    require_once('controller/aboutController.php');

?>
<main>
    <!-- breadcrumb area start -->
    <div class="breadcrumb-area breadcrumb-area-style_2">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-wrap">
                            <nav aria-label="breadcrumb">
                                <h1>about us</h1>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">about us</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- about wrapper start -->
        <div class="about-us-wrapper">
            <div class="container">
                <div class="row">
                    <!-- About Text Start -->
                    <div class="col-xl-6 col-lg-6">
                        <div class="about-text-wrap">
                            <h2><span><?php echo($moTaNho_Khoi1['giaTri']) ?></span><?php echo($moTaLon_Khoi1['giaTri']) ?></h2>
                            <p><?php echo($noiDung_Khoi1['giaTri']) ?></p>
                        </div>
                    </div>
                    <!-- About Text End -->
                    <!-- About Image Start -->
                    <div class="col-xl-5 col-lg-6 ml-auto">
                        <div class="about-image-wrap">
                            <img src="<?php echo($anh_Khoi1['anhCauHinh']) ?>" alt="About" />
                        </div>
                    </div>
                    <!-- About Image End -->
                </div>
            </div>
        </div>
        <!-- about wrapper end -->

        <!-- team area start -->
        <div class="team-area body-bg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="about-title">
                            <h2>our creative team</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php 
                        renderSlideMyTeam();
                    ?>
                </div>
            </div>
        </div>
        <!-- team area end -->

        <!-- choosing area start -->
        <div class="choosing-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="about-title">
                            <h2>why choose us</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-choose-item text-center mb-30">
                            <i class="fa fa-globe"></i>
                            <h4>free shipping</h4>
                            <p>Amadea Shop is a very slick and clean e-commerce template with endless possibilities.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-choose-item text-center mb-30">
                            <i class="fa fa-plane"></i>
                            <h4>fast delivery</h4>
                            <p>Amadea Shop is a very slick and clean e-commerce template with endless possibilities.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-choose-item text-center mb-30">
                            <i class="fa fa-comments"></i>
                            <h4>customers support</h4>
                            <p>Amadea Shop is a very slick and clean e-commerce template with endless possibilities.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- choosing area end -->

</main>

<?php 
    require_once('layout/footer.php')
?>