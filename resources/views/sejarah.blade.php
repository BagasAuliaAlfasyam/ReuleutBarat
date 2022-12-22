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
                            project details
                        </h2>
                        <ul class="breadcrumb-text__nav">
                            <li><a href="index.html">Home</a></li>
                            <li>-</li>
                            <li>project details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb section end -->

    <!-- details content start -->
    <div class="details-content-area pt-125 pb-125">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <div class="project-thumb d-flex align-self-stretch">
                        <img src="assets/images/bg/project-details-bg-1.jpeg" alt="">
                    </div>
                </div>
                <div class="col-xl-4">
                    <ul class="project-details blue-bg">
                        <li>Project Name<span>Brochure design</span></li>
                        <li>Client Name<span>Rechard Bannerd</span></li>
                        <li>Feedback<span>Happy Client</span></li>
                        <li>Project Date<span>29 Nov 2020</span></li>
                    </ul>
                </div>
            </div>
            <div class="row mt-40">
                <div class="col-xl-12">
                    <div class="details-content details-content__project">
                        <h2 class="details-content__title mb-20">Project Description</h2>
                        <p>Maecenas nise vestibulum parturient habitasse. Aliquam pellentesque fermentum. Sodales luctus
                            venenatis dis curae
                            senectus montes tortor morbi cubilia congue. Mus imperdiet turpis in augue placerat maecenas
                            natoque sollicitudin at
                            quam adipiscing integer dis ads se purus sollicitudin dapibus et vivamus pharetra sit
                            integer dictum in dise natoque a
                            mus quis in. Facilisis inceptos nec, potenti nostra aenean lacinia varius semper ant nullam
                            nulla primis placerat
                            facilisis. Netus lorem rutrum arcu dignissim at sit morbi phasellus nascetur eget urna
                            potenti cum vestibulum cras.
                            Tempor nonummy metus lobortis. Sociis velit etiam, dapibus. Lectus vehicula pellentesque
                            cras posuere tempor facilisi
                            habitant lectus rutrum pede quisque hendrerit parturient posuere mauris ad elementum
                            fringilla facilisi volutpat fusce
                            pharetra felis sapien varius quisque class convallis praesent est sollicitudin donec nulla
                            venenatis, cursus fermentum
                            netus posuere sociis porta risus habitant malesuada nulla habitasse hymenaeos. Viverra
                            curabitur nisi vel sollicitudin
                            dictum natoque ante aenean elementum curae malesuada ullamcorper. vivamus nonummy nisl
                            posuere rutrum</p>
                        <div class="content mt-20">
                            <p>Duis porttitor sem sit ullamcorper massa lorem platea ultricies sollicitudin. Habitant
                                cubilia varius platea nam lorem
                                cum aenean sociosqu and per bibendum Arcu accumsan eleifend. Ipsum nam condimentum
                                lobortis eu morbi a quis ipsum est
                                bibendum mine vulputate hymenaeos taciti odio nullam ligula ultrices tristique viverra
                                laoreet sapien curae;.
                                Sollicitudin etiam elit torquent. Purus nascetur dis augue non iaculis ullamcorper lacus
                                met quam commodo hendrerit
                                lobortis vel. Sagittis felis iaculis mauris luctus</p>
                            <h2 class="details-content__title mt-30 mb-35">Working Process</h2>
                        </div>
                        <div class="row mt-none-30">
                            <div class="col-xl-3 col-lg-6 col-md-6 mt-30">
                                <div class="wp-box">
                                    <div class="wp-box__icon wp-box__icon--1 mb-25">
                                        <img src="assets/images/icons/w-p-1.png" alt="">
                                    </div>
                                    <div class="wp-box__content">
                                        <h4 class="wp-box__title wp-box__title--2">Booking Online</h4>
                                        <p>God They moving an firmament seed over herb gathering multis ply morning
                                            fruitful</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 mt-30">
                                <div class="wp-box">
                                    <div class="wp-box__icon wp-box__icon--2 mb-25">
                                        <img src="assets/images/icons/w-p-2.png" alt="">
                                    </div>
                                    <div class="wp-box__content">
                                        <h4 class="wp-box__title wp-box__title--2">Received Work</h4>
                                        <p>God They moving an firmament seed over herb gathering multis ply morning
                                            fruitful</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 mt-30">
                                <div class="wp-box">
                                    <div class="wp-box__icon wp-box__icon--3 mb-25">
                                        <img src="assets/images/icons/w-p-3.png" alt="">
                                    </div>
                                    <div class="wp-box__content">
                                        <h4 class="wp-box__title wp-box__title--2">Satisfied Design</h4>
                                        <p>God They moving an firmament seed over herb gathering multis ply morning
                                            fruitful</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 mt-30">
                                <div class="wp-box">
                                    <div class="wp-box__icon wp-box__icon--4 mb-25">
                                        <img src="assets/images/icons/w-p-4.png" alt="">
                                    </div>
                                    <div class="wp-box__content">
                                        <h4 class="wp-box__title wp-box__title--2">Start Printing</h4>
                                        <p>God They moving an firmament seed over herb gathering multis ply morning
                                            fruitful</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-10">
                            <div class="col-xl-6 col-lg-6 col-md-6 d-flex mt-30">
                                <div class="project-item">
                                    <div class="project-item__thumb project-item__thumb--big">
                                        <img src="assets/images/project/p-13.jpeg" alt="">
                                    </div>
                                    <div class="project-item__hover" data-overlay="dark" data-opacity="9">
                                        <a href="project-details.html" class="project-item__link">
                                            <i class="far fa-arrow-right"></i>
                                        </a>
                                        <div class="project-item__content">
                                            <h5 class="project-item__subtitle"><span>//</span> Book Print</h5>
                                            <h4 class="project-item__title">Megazine Cover</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 d-flex mt-30">
                                <div class="project-item">
                                    <div class="project-item__thumb project-item__thumb--big">
                                        <img src="assets/images/project/p-14.jpeg" alt="">
                                    </div>
                                    <div class="project-item__hover" data-overlay="dark" data-opacity="9">
                                        <a href="project-details.html" class="project-item__link">
                                            <i class="far fa-arrow-right"></i>
                                        </a>
                                        <div class="project-item__content">
                                            <h5 class="project-item__subtitle"><span>//</span> Book Print</h5>
                                            <h4 class="project-item__title">Megazine Cover</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 d-flex mt-30">
                                <div class="project-item">
                                    <div class="project-item__thumb project-item__thumb--big">
                                        <img src="assets/images/project/p-15.jpeg" alt="">
                                    </div>
                                    <div class="project-item__hover" data-overlay="dark" data-opacity="9">
                                        <a href="project-details.html" class="project-item__link">
                                            <i class="far fa-arrow-right"></i>
                                        </a>
                                        <div class="project-item__content">
                                            <h5 class="project-item__subtitle"><span>//</span> Book Print</h5>
                                            <h4 class="project-item__title">Megazine Cover</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 d-flex mt-30">
                                <div class="project-item">
                                    <div class="project-item__thumb project-item__thumb--big">
                                        <img src="assets/images/project/p-16.jpeg" alt="">
                                    </div>
                                    <div class="project-item__hover" data-overlay="dark" data-opacity="9">
                                        <a href="project-details.html" class="project-item__link">
                                            <i class="far fa-arrow-right"></i>
                                        </a>
                                        <div class="project-item__content">
                                            <h5 class="project-item__subtitle"><span>//</span> Book Print</h5>
                                            <h4 class="project-item__title">Megazine Cover</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- details content end -->
@endsection
