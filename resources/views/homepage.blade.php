@extends('user.master')
@section('content')
    

<!-- / END HOMEPAGE DESIGN AREA -->
    <!-- START HEADER DESIGN AREA -->
    <section class="welcome-image-area" data-stellar-background-ratio="0.6">
        <div class="display-table">
            <div class="display-table-cell">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="header-text text-center">
                                <h1>Enjoy vacation with <span>B-travel</span></h1>
                                <p>Travel to the any corner of the world, without going around in circles.</p>
                                <a href="{{ route('order.create') }}" role="button" data-toggle="modal">Book a tour</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / END HEADER DESIGN AREA -->


    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <!-- START FORM DESIGN AREA -->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h2>Book a Tour</h2>
                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">close</button>
                </div>
            </div>
            <!-- / END FORM DESIGN AREA -->
        </div>
    </div>




    <!-- START TOUR PLACE DESIGN AREA -->
    <section id="place" class="tour-places section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2>popular tour places</h2>
                    </div>
                </div>
            </div>
            <div class="tour-list">
                <!-- START SINGLE TOUR PLACE DESIGN AREA -->
                <div class="single-place">
                    <img src="assets/images/work/4.jpg" alt="">
                    <div class="tour-des">
                        <h2>Wedi Ireng Beach</h2>
                        <h3>Sanggar, Pancer Banyuwangi</h3>
                        <h4>Rp. 1.000.000,00<span>Rp. .500.000,00</span></h4>
                    </div>
                </div>
                <!-- / END SINGLE TOUR PLACE DESIGN AREA -->
                <!-- START SINGLE TOUR PLACE DESIGN AREA -->
                <div class="single-place">
                    <img src="assets/images/work/1.jpg" alt="">
                    <div class="tour-des">
                        <h2>The ijen Crater </h2>
                        <h3>Licin, Banyuwangi</h3>
                        <h4>Rp. 1.230.000,00<span>Rp. 2.000.000,00</span></h4>
                    </div>
                </div>
                <!-- / END SINGLE TOUR PLACE DESIGN AREA -->
                <!-- START SINGLE TOUR PLACE DESIGN AREA -->
                <div class="single-place">
                    <img src="assets/images/work/3.jpg" alt="">
                    <div class="tour-des">
                        <h2>G-Land</h2>
                        <h3>Pesanggaran, Banyuwangi</h3>
                        <h4>Rp. 1.700.000,00<span>Rp. 3.200.000,00</span></h4>
                    </div>
                </div>
                <!-- / END SINGLE TOUR PLACE DESIGN AREA -->
                <!-- START SINGLE TOUR PLACE DESIGN AREA -->
                <div class="single-place">
                    <img src="assets/images/work/5.jpg" alt="">
                    <div class="tour-des">
                        <h2>Green Bay</h2>
                        <h3>Tegaldelimo, Banyuwangi</h3>
                        <h4>Rp. 1.600.000,00 <span>Rp. 2.000.000,00</span></h4>
                    </div>
                </div>
                <!-- / END SINGLE TOUR PLACE DESIGN AREA -->
                <!-- START SINGLE TOUR PLACE DESIGN AREA -->
                <div class="single-place">
                    <img src="assets/images/work/6.jpg" alt="">
                    <div class="tour-des">
                        <h2>Blue Bay</h2>
                        <h3>Purworejo, Banyuwangi</h3>
                        <h4>Rp. 1.500.000,00<span>Rp. 1.700.000,00</span></h4>
                    </div>
                </div>
                <!-- / END SINGLE TOUR PLACE DESIGN AREA -->
                <!-- START SINGLE TOUR PLACE DESIGN AREA -->
                <div class="single-place">
                        <img src="assets/images/work/2.jpg" alt="">
                        <div class="tour-des">
                            <h2>The Lider Waterfall</h2>
                            <h3>Songgon, Banyuwangi</h3>
                            <h4>Rp. 1.000.000,00<span>Rp. 1.200.000,00</span></h4>
                        </div>
                    </div>
                    <!-- / END SINGLE TOUR PLACE DESIGN AREA -->
            </div>
        </div>
    </section>
    <!-- / END  TOUR PLACE DESIGN AREA -->


    <!-- START COMPANY DESIGN AREA -->
    <section class="company-logo-area">
        <div class="container">
            <div class="row">
                <div class="company-logo-list">
                    <div class="single-company-logo">
                        <img src="assets/images/company-logo/c2.png" alt="">
                    </div>
                    <div class="single-company-logo">
                        <img src="assets/images/company-logo/c4.png" alt="">
                    </div>
                    <div class="single-company-logo">
                        <img src="assets/images/company-logo/c2.png" alt="">
                    </div>
                    <div class="single-company-logo">
                        <img src="assets/images/company-logo/c4.png" alt="">
                    </div>
                    <div class="single-company-logo">
                        <img src="assets/images/company-logo/c2.png" alt="">
                    </div>
                    <div class="single-company-logo">
                        <img src="assets/images/company-logo/c4.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / END COMPANY DESIGN AREA -->

    <!-- START ABOUT DESIGN AREA -->
    <section id="About" class="about-us-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title text-center">
                        <h2>who we are?</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- START ABOUT IMAGE DESIGN AREA -->
                <div class="col-md-6 wow fadeInLeft" data-wow-delay=".2s">
                    <div class="about-image">
                        <img src="assets/images/about.png" alt="" class="img-responsive">
                    </div>
                </div>
                <!-- / END ABOUT IMAGE DESIGN AREA -->
                <!-- START ABOUT TEXT DESIGN AREA -->
                <div class="col-md-6">
                    <div class="about-text">
                        <h2 class="wow fadeInDown" data-wow-delay=".2s">We are Travel experts</h2>
                        <p class="wow fadeInDown" data-wow-delay=".4s">In B-Travel we believe that we have a lot of things that much better in presenting tour group than in general, package the package being ponderous. online standardWe focus on the tour that inspire with content that fresh, unique, and with the price of the best.We will bring team the field who are experts in local markets to plan a journey that perfect fit in with the interests of your group.All will be handled, logistics a discount group negotiated wherever possible - you can trust us to do all for you.</p>
                        <a href="#" class="read-more wow fadeInDown" data-wow-delay=".6s">Learn more</a>
                    </div>
                </div>
                <!-- / END ABOUT TEXT DESIGN AREA -->
            </div>
        </div>
    </section>
    <!-- / END ABOUT DESIGN AREA -->

    <!-- START SERVICE DESIGN AREA -->
    <section id="service" class="service-area section-padding">
        <div class="container">
            <div class="row">
                <!-- START SINGLE SERVICE DESIGN AREA -->
                <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInDown" data-wow-delay=".2s">
                    <div class="single-service">
                        <div class="service-icon"><i class="fa fa-bookmark" aria-hidden="true"></i>
                        </div>
                        <h4>Personalized matching</h4>
                        <p>We have prepared video service & amp; air photographic panorama. based drone record and You will receive a film and pictures are edited professionally.</p>
                    </div>
                </div>
                <!-- / END SINGLE SERVICE DESIGN AREA -->
                <!-- START SINGLE SERVICE DESIGN AREA -->
                <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInDown" data-wow-delay=".4s">
                    <div class="single-service">
                        <div class="service-icon"><i class="fa fa-cubes" aria-hidden="true"></i>
                        </div>
                        <h4>wide variety of destinations</h4>
                        <p>We can provide up to 3 experienced travel specialists who fit best for your trip.  </p>
                    </div>
                </div>
                <!-- / END SINGLE SERVICE DESIGN AREA -->
                <!-- START SINGLE SERVICE DESIGN AREA -->
                <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInDown" data-wow-delay=".6s">
                    <div class="single-service">
                        <div class="service-icon"><i class="fa fa-archive" aria-hidden="true"></i>
                        </div>
                        <h4>highly qualified service</h4>
                        <p>We always trying to understand a customer complaint, customers and always care needs to customers in order for the needs customers can fulfilled.</p>
                    </div>
                </div>
                <!-- / END SINGLE SERVICE DESIGN AREA -->
                <!-- START SINGLE SERVICE DESIGN AREA -->
                <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInDown" data-wow-delay=".8s">
                    <div class="single-service">
                        <div class="service-icon"><i class="fa fa-bar-chart" aria-hidden="true"></i>
                        </div>
                        <h4>Handpicked Hotels</h4>
                        <p>All hotel the Banyuwangi also support these services and have been working together. </p>
                    </div>
                </div>
                <!-- / END SINGLE SERVICE DESIGN AREA -->
                <!-- START SINGLE SERVICE DESIGN AREA -->
                <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInDown" data-wow-delay="1s">
                    <div class="single-service">
                        <div class="service-icon"><i class="fa fa-umbrella" aria-hidden="true"></i>
                        </div>
                        <h4>Best Price Guarantee</h4>
                        <p>The price of cheapest for travelers who want to directly went about throughout all tourist attraction although last year in Banyuwangi. </p>
                    </div>
                </div>
                <!-- / END SINGLE SERVICE DESIGN AREA -->
                <!-- START SINGLE SERVICE DESIGN AREA -->
                <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInDown" data-wow-delay="1.2s">
                    <div class="single-service">
                        <div class="service-icon"><i class="fa fa-users" aria-hidden="true"></i>
                        </div>
                        <h4>24/7 support</h4>
                        <p>Support from various parties from the premises as the tourism information center has been proven. </p>
                    </div>
                </div>
                <!-- / END SINGLE SERVICE DESIGN AREA -->
            </div>
        </div>
    </section>
    <!-- / END SERVICE DESIGN AREA -->



    <!-- VIDEO BACKGROUND DESIGN AREA -->
    <section class="video-area" data-stellar-background-ratio="0.6">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="video-area-text text-center wow bounceIn">
                        <a href="https://www.youtube.com/watch?v=U-JUP23Qc98" class="video-play mfp-iframe">
                            <i class="fa fa-play"></i>
                        </a>
                        <h2>Travelling Highlights</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / END VIDEO BACKGROUND DESIGN AREA -->

    <!-- START PLACE DESIGN AREA -->
    <section id="gallery" class="work section-padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title text-center">
                        <h2>tour gallery</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- START SINGLE WORK DESIGN AREA -->
                <div class="col-md-4 col-sm-6">
                    <div class="project-item">
                        <a href="assets/images/work/1.jpg" class="work-popup">
                            <img src="assets/images/work/1.jpg" class="img-responsive" alt="">
                            <div class="project-overlay">
                                <div class="project-info">
                                    <h2 class="wow fadeInUp">
                                       The Ijen Crater, Licin, Banyuwangi
                                    </h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- END SINGLE WORK DESIGN AREA -->
                <!-- START SINGLE WORK DESIGN AREA -->
                <div class="col-md-4 col-sm-6">
                    <div class="project-item">
                        <a href="assets/images/work/2.jpg" class="work-popup">
                            <img src="assets/images/work/2.jpg" class="img-responsive" alt="">
                            <div class="project-overlay">
                                <div class="project-info">
                                    <h2 class="wow fadeInUp">
                                        The Lider Waterfall, Songgon, Banyuwangi
                                    </h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- END SINGLE WORK DESIGN AREA -->
                <!-- START SINGLE WORK DESIGN AREA -->
                <div class="col-md-4 col-sm-6">
                    <div class="project-item">
                        <a href="assets/images/work/3.jpg" class="work-popup">
                            <img src="assets/images/work/3.jpg" class="img-responsive" alt="">
                            <div class="project-overlay">
                                <div class="project-info">
                                    <h2 class="wow fadeInUp">
                                       G-Land, Tegaldelimo, Banyuwangi
                                    </h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- END SINGLE WORK DESIGN AREA -->
                <!-- START SINGLE WORK DESIGN AREA -->
                <div class="col-md-4 col-sm-6">
                    <div class="project-item">
                        <a href="assets/images/work/4.jpg" class="work-popup">
                            <img src="assets/images/work/4.jpg" class="img-responsive" alt="">
                            <div class="project-overlay">
                                <div class="project-info">
                                    <h2 class="wow fadeInUp">
                                      Wedi Ireng Beach, Sanggar, Banyuwangi
                                    </h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- END SINGLE WORK DESIGN AREA -->
                <!-- START SINGLE WORK DESIGN AREA -->
                
                <!-- START SINGLE WORK DESIGN AREA -->
                <div class="col-md-4 col-sm-6">
                        <div class="project-item">
                            <a href="assets/images/work/5.jpg" class="work-popup">
                                <img src="assets/images/work/5.jpg" class="img-responsive" alt="">
                                <div class="project-overlay">
                                    <div class="project-info">
                                        <h2 class="wow fadeInUp">
                                            Green Bay, Pesanggaran, Banyuwangi
                                        </h2>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- END SINGLE WORK DESIGN AREA -->

                <!-- START SINGLE WORK DESIGN AREA -->
                <div class="col-md-4 col-sm-6">
                    <div class="project-item">
                        <a href="assets/images/work/6.jpg" class="work-popup">
                            <img src="assets/images/work/6.jpg" class="img-responsive" alt="">
                            <div class="project-overlay">
                                <div class="project-info">
                                    <h2 class="wow fadeInUp">
                                       Blue Bay, Purworejo, Banyuwangi
                                    </h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- END SINGLE WORK DESIGN AREA -->
            </div>
        </div>
    </section>
    <!-- / END PLACE WORK DESIGN AREA -->




    <!-- START TESTIMONIAL DESIGN AREA -->
    <section id="testimonial" class="testimonial-area section-padding" data-stellar-background-ratio="0.6">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2>Happy Clients</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonial-list">
                        <!-- START SINGLE TESTIMONIAL DESIGN AREA -->
                        <div class="single-testimonial">
                            <div class="single-testi-des">
                                <p>Eliminating stress with family on vacation.</p>
                            </div>
                            <div class="testi-name">
                                <h2>Fijay</h2>
                                <h3>Businees men</h3>
                            </div>
                        </div>
                        <!-- / END SINGLE TESTIMONIAL DESIGN AREA -->
                        <!-- START SINGLE TESTIMONIAL DESIGN AREA -->
                        <div class="single-testimonial">
                            <div class="single-testi-des">
                                <p>The brain with holiday cheer.</p>
                            </div>
                            <div class="testi-name">
                                <h2>Wilda</h2>
                                <h3>actress</h3>
                            </div>
                        </div>
                        <!-- / END SINGLE TESTIMONIAL DESIGN AREA -->
                        <!-- START SINGLE TESTIMONIAL DESIGN AREA -->
                        <div class="single-testimonial">
                            <div class="single-testi-des">
                                <p>Bored, sad, and a breakup the cure is to just take a vacation</p>
                            </div>
                            <div class="testi-name">
                                <h2>Sukidi</h2>
                                <h3>Businees men</h3>
                            </div>
                        </div>
                        <!-- / END SINGLE TESTIMONIAL DESIGN AREA -->
                        <!-- START SINGLE TESTIMONIAL DESIGN AREA -->
                        <div class="single-testimonial">
                            <div class="single-testi-des">
                                <p>I can say anything without going in the vacation.</p>
                            </div>
                            <div class="testi-name">
                                <h2>Anonymous</h2>
                                <h3>Businees men</h3>
                            </div>
                        </div>
                        <!-- / END SINGLE TESTIMONIAL DESIGN AREA -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / END TESTIMONIAL DESIGN AREA -->

    <!-- START TEAM DESIGN AREA -->
    <section id="team" class="team-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2>professional Team</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- START SINGLE TEAM DESIGN AREA -->
                <div class="col-md-4 col-sm-6">
                    <div class="single-team">
                        <div class="team-image">
                            <img src="assets/images/team/team.jpg" class="img-responsive">
                        </div>
                        <div class="team-description">
                            <h4>Eko Utomo</h4>
                            <h5>Taxi driver & traveler</h5>
                            <p>I’d like to send you a sincere "thank you" for all of your assistance during my recent trip.</p>
                        </div>
                    </div>
                </div>
                <!-- / END SINGLE TEAM DESIGN AREA -->
                <!-- START SINGLE TEAM DESIGN AREA -->
                <div class="col-md-4 col-sm-6">
                    <div class="single-team">
                        <div class="team-image">
                            <img src="assets/images/team/team.jpg" class="img-responsive">
                        </div>
                        <div class="team-description">
                            <h4>Didik Prasetyo</h4>
                            <h5>Taxi driver & traveler</h5>
                            <p>I’d like to send you a sincere "thank you" for all of your assistance during my recent trip.</p>
                        </div>
                    </div>
                </div>
                <!-- / END SINGLE TEAM DESIGN AREA -->
                <!-- START SINGLE TEAM DESIGN AREA -->
                <div class="col-md-4 col-sm-6">
                    <div class="single-team">
                        <div class="team-image">
                            <img src="assets/images/team/team.jpg" class="img-responsive">
                        </div>
                        <div class="team-description">
                            <h4>Mulyono</h4>
                            <h5>Taxi driver & traveler</h5>
                            <p>I’d like to send you a sincere "thank you" for all of your assistance during my recent trip.</p>
                            
                        </div>
                    </div>
                </div>
                <!-- / END SINGLE TEAM DESIGN AREA -->
            </div>
        </div>
    </section>
    <!-- / END TEAM DESIGN AREA -->


    <!-- START CALL TO ACTION DESIGN AREA -->
    <section id="download" class="call-to-area" data-stellar-background-ratio="0.6">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="call-to-area-text text-center">
                        <h2>are you still intarested to tour?</h2>
                        <p>We offer a wide range of procedures to help you get the perfect smile</p>
                        <a href="{{ route('order.create') }}" role="button" data-toggle="modal">Book a tour</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / END CALL TO ACTION DESIGN AREA -->

    @endsection