<?php
require_once('layout/header.php');
?>
<!-- breadcrumb area start -->
<main role="main">
    <div class="breadcrumb-area breadcrumb-area-style_2">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <h1>Contact Us</h1>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact us</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-message">
                        <h2>Tell us about your project</h2>
                        <form id="contact-form" action="https://htmldemo.net/gengar/gengar/assets/php/mail.php"
                            method="post" class="contact-form">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input name="first_name" placeholder="Name *" type="text" required
                                        class="form-control">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input name="phone" placeholder="Phone *" type="text" required class="form-control">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input name="email_address" placeholder="Email *" type="text" required
                                        class="form-control">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input name="contact_subject" placeholder="Subject" type="text"
                                        class="form-control">
                                </div>
                                <div class="col-12">
                                    <div class="contact2-textarea text-center">
                                        <textarea placeholder="Message *" name="message" class="form-control"
                                            required></textarea>
                                    </div>
                                    <div class="contact-btn">
                                        <button class="btn btn__bg" type="submit">Send Message</button>
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <p class="form-message"></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact__map">
                        <div class="map-responsive">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48158.305462977965!2d-74.13283844036356!3d41.02757295168286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2e440473470d7%3A0xcaf503ca2ee57958!2sSaddle%20River%2C%20NJ%2007458%2C%20USA!5e0!3m2!1sen!2sbd!4v1575917275626!5m2!1sen!2sbd"
                                style="width: 100%;height: 447px;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-by-me mt-4 mb-4">
        <div class="container">
            <div class="row d-flex justify-content-center mt-4 mb-4">
                <div class="col-lg-3 mt-4 mb-4">
                    <h2>contact us</h2>
                </div>
                <div class="col-lg-3 mt-4 mb-4">
                    <ul>
                        <li><i class="fa fa-fax"></i> Address : No 40 Baria Sreet 133/2 NewYork City</li>
                        <li><i class="fa fa-phone"></i> info@yourdomain.com</li>
                        <li><i class="fa fa-envelope-o"></i> +88013245657</li>
                    </ul>

                </div>


                <div class="col-lg-3 mt-4 mb-4">
                    <div class="working-time">
                        <h3>Working hours</h3>
                        <p><span>Monday – Saturday:</span>08AM – 22PM</p>
                    </div>
                </div>
                <div class="col-lg-3 mt-4 mb-4">
                    <div class="icon-social ">
                        <h3>Contact by network: </h3>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
require_once('layout/footer.php');
?>
