@extends('template.template')

@section('main')
    <!-- breadcrumb section start -->
    <section class="breadcrumb-section pt-180 pb-180 bg_img" data-background="/assets/images/bg/breadcrumb-bg-1.jpeg"
        data-overlay="dark" data-opacity="3">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 d-flex pr-0">
                    <div class="breadcrumb-text">
                        <h2 class="breadcrumb-text__title">
                            contact us
                        </h2>
                        <ul class="breadcrumb-text__nav">
                            <li><a href="index.html">Home</a></li>
                            <li>-</li>
                            <li>contact us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb section end -->

    <!-- contact info area start -->
    <div class="contact-info-area pt-130">
        <div class="container">
            <div class="row mt-none-30">
                <div class="col-xl-3 col-lg-6 col-md-6 mt-30">
                    <div class="contact-info">
                        <h4 class="contact-info__title">California</h4>
                        <p>Briercliff Road Queens</p>
                        <a href="mailto:info@basictheme.com">info@basictheme.com</a>
                        <a href="tel:2025886500">(202) 588-6500</a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 mt-30">
                    <div class="contact-info">
                        <h4 class="contact-info__title">Georgia</h4>
                        <p>914 Ward Road Paso</p>
                        <a href="mailto:info@basictheme.com">info@basictheme.com</a>
                        <a href="tel:2025886500">(202) 588-6500</a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 mt-30">
                    <div class="contact-info">
                        <h4 class="contact-info__title">Maryland</h4>
                        <p>Goldcliff Circle Buffelo</p>
                        <a href="mailto:info@basictheme.com">info@basictheme.com</a>
                        <a href="tel:2025886500">(202) 588-6500</a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 mt-30">
                    <div class="contact-info">
                        <h4 class="contact-info__title">New York</h4>
                        <p>Kidd Avenue Palmos</p>
                        <a href="mailto:info@basictheme.com">info@basictheme.com</a>
                        <a href="tel:2025886500">(202) 588-6500</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact info area end -->

    <!-- gta section start -->
    <section class="gta-area gta-area__2 pt-125 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="gta-bg__2">
                        <img src="/assets/images/bg/gta-bg-2.png" alt="">
                    </div>
                </div>
                <div class="col-xl-6 pl-50">
                    <div class="section-header mb-50">
                        <h4 class="sub-heading sub-heading__2 mb-15">Send Message
                            <span><img src="/assets/images/shape/heading-shape-4.png" class="mr-10" alt=""></span>
                        </h4>
                        <h2 class="section-title section-title__2">Get in Touch</h2>
                    </div>
                    <div class="contact-form">
                        <form action="/assets/mail.php" method="POST" id="contact-form">
                            <div class="form-group mt-25">
                                <input type="text" name="name" id="name" placeholder="Your Name">
                            </div>
                            <div class="form-group mt-25">
                                <input type="email" name="email" id="mail" placeholder="Email Address">
                            </div>
                            <div class="form-group mt-25">
                                <textarea name="message" id="message" placeholder="Your Message"></textarea>
                            </div>
                            <button type="submit" class="site-btn site-btn__2 mt-15"><span class="icon icon__black"><i
                                        class="far fa-arrow-right"></i></span> Contact us</button>
                            <p class="ajax-response"></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- gta section end -->
    <!-- map area start -->
    <div class="contact-map-area">
        <div id="contact-map"></div>
    </div>
    <!-- map area end -->

@endsection