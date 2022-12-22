@extends('template.template')

@section('main')
    <!-- breadcrumb section start -->
    <section class="breadcrumb-section pt-180 pb-180 bg_img" data-background="assets/images/bg/breadcrumb-bg-1.jpeg"
        data-overlay="dark" data-opacity="3">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 d-flex pr-0">
                    <div class="breadcrumb-text">
                        <h2 class="breadcrumb-text__title">
                            Executive Team
                        </h2>
                        <ul class="breadcrumb-text__nav">
                            <li><a href="index.html">Home</a></li>
                            <li>-</li>
                            <li>Executive Team</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb section end -->

    <!-- team section start -->
    <div class="team-section pt-125 pb-125">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 text-center">
                    <div class="section-header mb-65">
                        <h4 class="sub-heading sub-heading__2 sub-heading__red  mb-15">
                            <span><img src="assets/images/shape/heading-shape-3.png" class="mr-5" alt=""></span>
                            Reuleut Barat
                            <span><img src="assets/images/shape/heading-shape-4.png" class="ml-5" alt=""></span>
                        </h4>
                        <h2 class="section-title section-title__2">Informasi Desa</h2>
                    </div>
                </div>
            </div>
            <div class="row mt-none-40">
                <div class="col-xl-4 col-lg-6 col-md-6 mt-40">
                    <div class="team-box team-box__2">
                        <div class="team-box__thumb team-box__thumb--2">
                            <img src="assets/images/team/team-1.jpeg" alt="">
                        </div>
                        <div class="team-box__content team-box__content--2">
                            <h4 class="name">Agenda Desa</h4>
                            <button type="button" class="btn btn-secondary">Lihat</button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 mt-40">
                    <div class="team-box team-box__2">
                        <div class="team-box__thumb team-box__thumb--2">
                            <img src="assets/images/team/team-2.jpeg" alt="">
                        </div>
                        <div class="team-box__content team-box__content--2">
                            <h4 class="name">Raymond Archer</h4>
                            <span class="designation">Project Manager</span>
                            <div class="social-links social-links__2">
                                <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                <a href="#0"><i class="fab fa-twitter"></i></a>
                                <a href="#0"><i class="fab fa-pinterest-p"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 mt-40">
                    <div class="team-box team-box__2">
                        <div class="team-box__thumb team-box__thumb--2">
                            <img src="assets/images/team/team-3.jpeg" alt="">
                        </div>
                        <div class="team-box__content team-box__content--2">
                            <h4 class="name">Raymond Archer</h4>
                            <span class="designation">Senior Desinger</span>
                            <div class="social-links social-links__2">
                                <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                <a href="#0"><i class="fab fa-twitter"></i></a>
                                <a href="#0"><i class="fab fa-pinterest-p"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- team section end -->

    <!-- video area start -->
    <section class="video-area video-area__3 bg_img" data-background="assets/images/bg/vide-bg-2.jpeg"
        data-overlay="dark" data-opacity="6">
        <div class="container">
            <div class="row">
                <div class="col-xl-7">
                    <div class="section-header mb-65">
                        <h4 class="sub-heading sub-heading__2 sub-heading__white mb-15">
                            Printing Work
                            <span><img src="assets/images/shape/heading-shape-5.png" class="ml-5" alt=""></span>
                        </h4>
                        <h2 class="section-title section-title__2 section-title__white">Every single
                            beneficial thing
                            printed</h2>
                        <a href="about.html" class="site-btn site-btn__2 mt-40"><span class="icon"><i
                                    class="far fa-arrow-right"></i></span> read more</a>
                    </div>
                </div>
                <div class="col-xl-5">
                </div>
            </div>
        </div>
    </section>
    <!-- video area end -->
@endsection