<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="Periksain - Software Landing Page">
        <meta name="author" content="KeyDesign" />
        <!-- SITE TITLE -->
        <title>Periksa.in</title>
        <!-- STYLESHEETS -->
        <link href="{{ URL::asset('softkey_assets/css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('softkey_assets/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ URL::asset('softkey_assets/css/style.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('softkey_assets/css/responsive.css') }}" rel="stylesheet">
        <!-- DEMO COLORS  -->
        <link href="#" class="css-color" rel="stylesheet">

        <!-- FAVICON  -->
        <link rel="icon" href="softkey_assets/img/favicon.ico">
    </head>
    <body>
        <!-- PRELOADER -->
        <div id="preloader">
            <div class="spinner"></div>
        </div>
        <!-- MAIN NAV -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-menu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <!-- MAIN NAV LOGO -->
                    <a class="logo page-scroll" href="#header"><img src="softkey_assets/img/logo.png" class="img-responsive" alt=""></a>
                </div>
                <div class="collapse navbar-collapse" id="main-menu">
                    <!-- MAIN NAV LINKS -->
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a class="page-scroll" href="#services">Cek Rekening</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#features">Cek Nomor Telepon</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#video">Laporkan Penipuan</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#pricing">Sanggahan</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#team">Login</a>
                        </li>
                    </ul>
                    <!-- END MAIN NAV LINKS -->
                </div>
            </div>
        </nav>
        <!-- END MAIN NAV -->
        <!-- HEADER -->
        <header id="header">
            <div class="container">
                <div class="intro-text">
                    <h1 class="intro-lead-in">Periksain, cek sebelum bertindak</h1>
                    <span class="intro-heading">Mengidentifikasi apakah nomor rekening/telepon seseorang pernah terindikasi penipuan</span>
                    <div id="subscribe" class="header-buttons">
                     <form class="subscribe-form">
                        <input type="email"  placeholder="Nomor telepon/rekening"/>
                        <button type="submit">Periksa</button>
                        <div id="subscribe-success"></div>
                    </form>
                    </div>

                </div>
            </div>
            <div id="particles-js"></div>
        </header>
        <!-- END HEADER -->
        <!-- SERVICES -->
        <section id="services">
            <div class="container">
                <div class="row">
                    <!-- SERVICES HEADING -->
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Modern tools</h2>
                        <span class="separator"></span>
                        <p class="section-subheading ">Partnership or temporary organization perfectly designed.</p>
                    </div>
                    <!-- END SERVICES HEADING -->
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <i class="nc-icon-outline heart"></i>
                        <h4 class="service-heading">Boost performance</h4>
                        <p class="">GRID displays your content in an eye-catching way and enables customizable internal distribution.</p>
                    </div>
                    <div class="col-md-3">
                        <i class="nc-icon-outline keyboard"></i>
                        <h4 class="service-heading">Higly customizable</h4>
                        <p class="">Key features flexible layouts and themes to customize your content's unique look. </p>
                    </div>
                    <div class="col-md-3">
                        <i class="nc-icon-outline sign"></i>
                        <h4 class="service-heading">Simplified workflow</h4>
                        <p class="">Key is the first-ever truly team-friendly media CMS. Collaborating on content is efficient.</p>
                    </div>
                    <div class="col-md-3 last">
                        <i class="nc-icon-outline pc"></i>
                        <h4 class="service-heading">Cross platform</h4>
                        <p class="">Credibly innovate granular internal or "organic" sources whereas high standards in web-readiness.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SERVICES -->
        <!-- FEATURES -->
        <section id="features" class="gray-bg">
            <div class="container">
                <div class="row">
                    <div id="features-tabs" class="features-tabs">
                        <!-- TAB 1 -->
                        <div id="features-tab1">
                            <div class="row">
                                <h2 class="section-heading">Managing tools</h2>
                                <p class="section-subheading ">Take advantage of media's most prominent business trend, and empowers your internal advertising teams.</p>
                            </div>
                            <ul>
                                <li>Professional and easy-to-use software </li>
                                <li>Setup and installations takes ten minutes</li>
                                <li>Perfect for any device with pixel-perfect design</li>
                                <li>It takes few minutes to setup</li>
                            </ul>
                            <a href="#" class="primary-button button-inverse">Get Desktop Version</a>
                            <img src="softkey_assets/img/mockups/tab1.png" class="fadeRight animated" alt="">
                        </div>
                        <!-- END TAB 1 -->
                        <!-- TAB 2 -->
                        <div id="features-tab2">
                            <div class="row">
                                <h2 class="section-heading">Mobile Support</h2>
                                <p class="section-subheading ">Spend less time worrying about front-end and more focusing on your products and projects and plans.</p>
                            </div>
                            <ul>
                                <li>Professional and easy-to-use app </li>
                                <li>A better way to present your app</li>
                                <li>Now available on the App Store and Play Store!</li>
                                <li>It takes few minutes to setup</li>
                            </ul>
                            <a href="#" class="primary-button button-inverse">Get Mobile Version</a>
                            <img src="softkey_assets/img/mockups/tab2.png" class="fadeRight animated" alt="">
                        </div>
                        <!-- END TAB 2 -->
                        <!-- TAB 3 -->
                        <div id="features-tab3">
                            <div class="row">
                                <h2 class="section-heading">Constant Updates</h2>
                                <p class="section-subheading ">Take advantage of media's most prominent business trend, and empowers your internal advertising teams.</p>
                            </div>
                            <ul>
                                <li>Professional tablet software & apps </li>
                                <li>Setup and installations takes up to twenty</li>
                                <li>A better way to present your app with Periksain</li>
                                <li>It takes few minutes to setup the software</li>
                            </ul>
                            <a href="#" class="primary-button button-inverse">Get Tablet Version</a>
                            <img src="softkey_assets/img/mockups/tab3.png" class="fadeRight animated" alt="">
                        </div>
                        <!-- END TAB 3 -->
                        <!-- FEATURES TABS -->
                        <ul class='tabs'>
                            <li class='tab col-md-4'><a href="#features-tab1"><span class="triangle"><span class="inner-triangle"></span></span>Desktop Version</a></li>
                            <li class='tab col-md-4'><a href="#features-tab2"><span class="triangle"><span class="inner-triangle"></span></span>Mobile Version</a></li>
                            <li class='tab col-md-4'><a href="#features-tab3"><span class="triangle"><span class="inner-triangle"></span></span>Tablet Version</a></li>
                        </ul>
                        <!-- END FEATURES TABS -->
                    </div>
                </div>
            </div>
        </section>
        <!-- END FEATURES -->
        <!-- VIDEO -->
        <section id="video" class="parallax">
            <div class="overlay parallax"></div>
            <div class="container">
                <div class="row">
                    <!-- VIDEO HEADING -->
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Our video</h2>
                        <span class="separator"></span>
                        <p class="section-subheading ">Partnership or temporary organization perfectly designed</p>
                    </div>
                    <!-- END VIDEO HEADING -->
                </div>
                <div class="row">
                    <div class="video-container">                  
                        <a data-toggle="modal" data-target="#video-modal" data-backdrop="true">
                        <img src="softkey_assets/img/video/video.png" class="video-image" alt="">
                        <span class="play-video"><span class="fa fa-play"></span></span></a>
                    </div>
                    <!-- VIDEO SOCIALS -->
                    <div class="video-socials">
                        <a href="#"><span class="fa fa-facebook"></span></a>
                        <a href="#"><span class="fa fa-twitter"></span></a>
                        <a href="#"><span class="fa fa-linkedin"></span></a>
                    </div>
                    <!-- END VIDEO SOCIALS -->
                </div>
            </div>
        </section>
        <!-- VIDEO POPUP -->
        <div class="modal fade video-modal" id="video-modal" role="dialog">
            <div class="modal-content">
                <div class="row">
                    <iframe width="712" height="400" src="https://www.youtube.com/embed/nrJtHemSPW4" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <!-- END VIDEO POPUP -->
        <!-- END VIDEO -->
        <!-- SOLUTIONS -->
        <section id="solutions" class="gray-bg">
            <div class="container">
                <div class="row">
                    <!-- SOLUTIONS HEADING -->
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Our solutions </h2>
                        <span class="separator"></span>
                        <p class="section-subheading ">Sed risus feugiat fusce eu sit conubia venenatis dolor</p>
                    </div>
                    <!-- END SOLUTIONS HEADING -->
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="chart" data-percent="85">85<span class="percent">%</span> </div>
                        <div class="chart-content">
                            <i class="nc-icon-outline suitcase"></i>
                            <h4 class="service-heading">Enterprise solutions</h4>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="chart" data-percent="75">75<span class="percent">%</span></div>
                        <div class="chart-content">
                            <i class="nc-icon-outline cart"></i>
                            <h4 class="service-heading">Ecommerce Marketing</h4>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="chart" data-percent="65">65<span class="percent">%</span></div>
                        <div class="chart-content">
                            <i class="nc-icon-outline world"></i>
                            <h4 class="service-heading">Target information</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SOLUTIONS -->
        <!-- PRICING TABLES -->
        <section id="pricing">
            <div class="container">
                <div class="row">
                    <!-- PRICING TABLES HEADING -->
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Our pricing</h2>
                        <span class="separator"></span>
                        <p class="section-subheading ">Deserunt nesciunt sed molestiae quos, dolor eaque quis facilis tempora consequuntu.</p>
                    </div>
                    <!-- END PRICING TABLES HEADING -->
                </div>
                <div class="row outer-margin">
                    <!-- PRICING TABLE 1 -->
                    <div class="col-md-4">
                        <div class="row pricing-title">BASIC</div>
                        <div class="row pricing">
                            <div class="col-lg-3 col-md-3 col-sm-3" >
                                <div class="row">
                                    <span class="pricing-price"><span class="currency">$</span>20</span>
                                    <span class="pricing-time">/mo</span>
                                    <div class="billing-time">billed annually</div>
                                </div>
                            </div>
                            <div class="pricing-row"><span class="pricing-value"><span class="pricing-option"><i class="fa fa-check"></i>CRM Auto-Sync</span></span></div>
                            <div class="pricing-row"><span class="pricing-value"><span class="pricing-option"><i class="fa fa-check"></i>Click-to-Call Back from the web</span></span></div>
                            <div class="pricing-row"><span class="pricing-value"><span class="pricing-option"><i class="fa fa-check"></i>Track accrued energy costs</span></span></div>
                            <div class="pricing-row"><span class="pricing-value"><span class="pricing-option"><i class="fa fa-check"></i>Power and Predictive Dialing</span></span></div>
                            <div class="pricing-row"><span class="pricing-value"><span class="pricing-option"><i class="fa fa-check"></i>Speech & text Analytics</span></span></div>
                            <div class="pricing-row"><span class="pricing-value"><span class="pricing-option"><i class="fa fa-check"></i>Sales Acceleration Platform</span></span></div>
                            <div class="pricing-row button-container">
                                <a href="#" class="secondary-button secondary-button-inverse">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <!-- PRICING TABLE 2 -->
                    <div class="col-md-4">
                        <div class="row pricing-title">STANDARD</div>
                        <div class="row pricing active">
                            <div class="col-lg-3 col-md-3 col-sm-3" >
                                <div class="row">
                                    <span class="pricing-price"><span class="currency">$</span>50</span>
                                    <span class="pricing-time">/mo</span>
                                    <div class="billing-time">billed annually</div>
                                </div>
                            </div>
                            <div class="pricing-row selected"><span class="pricing-value"><span class="pricing-option"><i class="fa fa-plus"></i>Everything in BASIC, including:</span></span></div>
                            <div class="pricing-row"><span class="pricing-value"><span class="pricing-option"><i class="fa fa-check"></i>Routing Using Full Context</span></span></div>
                            <div class="pricing-row"><span class="pricing-value"><span class="pricing-option"><i class="fa fa-check"></i>Unlimited Email, Chat & Social</span></span></div>
                            <div class="pricing-row"><span class="pricing-value"><span class="pricing-option"><i class="fa fa-check"></i>Omni-channel real time SLA</span></span></div>
                            <div class="pricing-row"><span class="pricing-value"><span class="pricing-option"><i class="fa fa-check"></i>Disaster Recovery</span></span></div>
                            <div class="pricing-row"><span class="pricing-value"><span class="pricing-option"><i class="fa fa-check"></i>Tight IVR/ACD Integration</span></span></div>
                            <div class="pricing-row button-container">
                                <a href="#" class="secondary-button">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <!-- PRICING TABLE 3 -->
                    <div class="col-md-4">
                        <div class="row pricing-title">PREMIUM</div>
                        <div class="row pricing">
                            <div class="col-lg-3 col-md-3 col-sm-3" >
                                <div class="row">
                                    <span class="pricing-price"><span class="currency">$</span>90</span>
                                    <span class="pricing-time">/mo</span>
                                    <div class="billing-time">billed annually</div>
                                </div>
                            </div>
                            <div class="pricing-row selected"><span class="pricing-value"><span class="pricing-option"><i class="fa fa-plus"></i>Everything in STANDARD, including:</span></span></div>
                            <div class="pricing-row"><span class="pricing-value"><span class="pricing-option"><i class="fa fa-check"></i>Quality & Customer Experience </span></span></div>
                            <div class="pricing-row"><span class="pricing-value"><span class="pricing-option"><i class="fa fa-check"></i>Dedicated account manager</span></span></div>
                            <div class="pricing-row"><span class="pricing-value"><span class="pricing-option"><i class="fa fa-check"></i>Power and Predictive Dialing</span></span></div>
                            <div class="pricing-row"><span class="pricing-value"><span class="pricing-option"><i class="fa fa-check"></i>Configurable Call Recording</span></span></div>
                            <div class="pricing-row"><span class="pricing-value"><span class="pricing-option"><i class="fa fa-check"></i>Track accrued energy costs</span></span></div>
                            <div class="pricing-row button-container">
                                <a href="#" class="secondary-button secondary-button-inverse">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- PRICING TABLES -->
        <!-- TESTIMONIALS -->
        <section id="testimonials" class="gray-bg">
            <div class="container">
                <div class="row">
                    <div class="slider">
                        <!-- TESTIMONIALS 1 -->
                        <div class="tt-content">
                            <h3><span class="tt-quote">“</span><span class="tt-quote tt-quote-right">”</span>Periksain is really helping all of us to make collaboration a differentiating factor to win is really helping all of us.</h3>
                            <div class="tt-container">
                                <h4 >Antony Casalena</h4>
                                <span class="content">Vice president, IQTeam</span>
                            </div>
                        </div>
                        <!-- TESTIMONIALS 2 -->
                        <div class="tt-content">
                            <h3 ><span class="tt-quote">“</span><span class="tt-quote tt-quote-right">”</span>Periksain is really helping all of us to make collaboration a differentiating factor to win is really helping all of us.</h3>
                            <div class="tt-container">
                                <h4 >Antony Casalena</h4>
                                <span class="content">Vice president, IQTeam</span>
                            </div>
                        </div>
                        <!-- TESTIMONIALS 3 -->
                        <div class="tt-content">
                            <h3 ><span class="tt-quote">“</span><span class="tt-quote tt-quote-right">”</span>Periksain is really helping all of us to make collaboration a differentiating factor to win is really helping all of us.</h3>
                            <div class="tt-container">
                                <h4 >Antony Casalena</h4>
                                <span class="content">Vice president, IQTeam</span>
                            </div>
                        </div>
                    </div>
                    <!-- TESTIMONIALS IMAGE CAPTIONS -->
                    <div class="tt-images">
                        <div class="tt-image"><img width="80" height="80" src="softkey_assets/img/testimonials/testimonial1.png" alt="team"></div>
                        <div class="tt-image"><img width="80" height="80" src="softkey_assets/img/testimonials/testimonial2.png" alt="team"></div>
                        <div class="tt-image"><img width="80" height="80" src="softkey_assets/img/testimonials/testimonial3.png" alt="team"></div>
                    </div>
                    <!-- END TESTIMONIALS IMAGE CAPTIONS -->
                </div>
            </div>
        </section>
        <!-- END TESTIMONIALS -->
        <!-- TEAM -->
        <section id="team">
            <div class="container">
                <div class="row">
                    <!-- TEAM HEADING -->
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Our team</h2>
                        <span class="separator"></span>
                        <p class="section-subheading ">Our team maintains an effective mix of development experience and seasoned leadership.</p>
                    </div>
                    <!-- END TEAM HEADING -->  
                </div>
                <div class="row outer-margin">
                    <!-- TEAM 1 -->
                    <div class="col-md-4 team-wrapper">
                        <div class="row team-member">
                            <img src="softkey_assets/img/team/team1.jpg" alt="">
                            <div class="team-socials">
                                <a href="#"><span class="fa fa-facebook"></span></a>
                                <a href="#"><span class="fa fa-twitter"></span></a>
                                <a href="#"><span class="fa fa-linkedin"></span></a>
                            </div>
                            <div class="team-content">
                                <h5>Jerry Mack</h5>
                                <span class="team-subtitle">Web Developer</span>
                                <p>He enjoys the finer details of a project, considering every stage of his.</p>
                                <span class="triangle"></span>
                            </div>
                        </div>
                    </div>
                    <!-- TEAM 2 -->
                    <div class="col-md-4 team-wrapper">
                        <div class="row team-member team-member-down">
                            <div class="team-content">
                                <h5>Anna Shaw</h5>
                                <span class="team-subtitle">Project Manager</span>
                                <p>He enjoys the finer details of a project, considering every stage of her.</p>
                                <span class="triangle"></span>
                            </div>
                            <div class="team-socials">
                                <a href="#"><span class="fa fa-facebook"></span></a>
                                <a href="#"><span class="fa fa-twitter"></span></a>
                                <a href="#"><span class="fa fa-linkedin"></span></a>
                            </div>
                            <img src="softkey_assets/img/team/team2.jpg" alt="">
                        </div>
                    </div>
                    <!-- TEAM 3 -->
                    <div class="col-md-4 team-wrapper">
                        <div class="row team-member">
                            <img src="softkey_assets/img/team/team3.jpg" alt="">
                            <div class="team-socials">
                                <a href="#"><span class="fa fa-facebook"></span></a>
                                <a href="#"><span class="fa fa-twitter"></span></a>
                                <a href="#"><span class="fa fa-linkedin"></span></a>
                            </div>
                            <div class="team-content">
                                <h5>Leon Thompson</h5>
                                <span class="team-subtitle">UX Designer</span>
                                <p>She enjoys the finer details of a project, considering every stage of her.</p>
                                <span class="triangle"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END TEAM -->
        <!-- CLIENTS -->
        <section id="clients" class="gray-bg">
            <div class="container">
                <div class="slider">
                    <div class="clients-content">
                        <a href="#"><img src="softkey_assets/img/logos/logo1.png" alt=""></a>
                    </div>
                    <div class="clients-content">
                        <a href="#"> <img src="softkey_assets/img/logos/logo2.png" alt=""></a>
                    </div>
                    <div class="clients-content">
                        <a href="#"> <img src="softkey_assets/img/logos/logo3.png" alt=""></a>
                    </div>
                    <div class="clients-content">
                        <a href="#"> <img src="softkey_assets/img/logos/logo4.png" alt=""></a>
                    </div>
                    <div class="clients-content">
                        <a href="#"><img src="softkey_assets/img/logos/logo5.png" alt=""></a>
                    </div>
                    <div class="clients-content">
                        <a href="#"> <img src="softkey_assets/img/logos/logo1.png" alt=""></a>
                    </div>
                    <div class="clients-content">
                        <a href="#">  <img src="softkey_assets/img/logos/logo2.png" alt=""></a>
                    </div>
                    <div class="clients-content">
                        <a href="#">   <img src="softkey_assets/img/logos/logo3.png" alt=""></a>
                    </div>
                    <div class="clients-content">
                        <a href="#">  <img src="softkey_assets/img/logos/logo4.png" alt=""></a>
                    </div>
                    <div class="clients-content">
                        <a href="#"> <img src="softkey_assets/img/logos/logo5.png" alt=""></a>
                    </div>
                    <div class="clients-content">
                        <a href="#"> <img src="softkey_assets/img/logos/logo1.png" alt=""></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- END CLIENTS -->
        <!-- SUBSCRIBE -->
        <section id="subscribe" class="parallax">
            <div class="container">
                <div class="row">
                    <h3>Subscribe to receive free updates!</h3>
                    <form class="subscribe-form">
                        <input type="email"  placeholder="Your email adress"/>
                        <button type="submit">Subscribe</button>
                        <div id="subscribe-success"></div>
                    </form>
                </div>
            </div>
        </section>
        <!-- END SUBSCRIBE -->
        <!-- CONTACT -->
        <section id="contact">
            <div class="contact-map-container">
                <!-- GOOGLE MAP-->
                <div id="map"></div>
            </div>
            <div class="container">
                <div class="contact-form-container">
                    <!-- CONTACT HEADING -->
                    <div class="row">
                        <h2 class="section-heading">Contact</h2>
                        <p class="section-subheading ">Deserunt nesciunt sed molestiae quos, dolor eaque quis facilis tempora consequuntu.</p>
                    </div>
                    <!-- END CONTACT HEADING -->
                    <div class="row">
                        <!-- CONTACT FORM -->
                        <form name="sentMessage" id="contactForm" novalidate>
                            <div class="row">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group pull-right">
                                    <input type="email" class="form-control" placeholder="Email" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group form-textarea">
                                    <textarea class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="clearfix"></div>
                                <div class="text-center">
                                    <div id="success"></div>
                                    <button type="submit" class="btn btn-xl">Send Message</button>
                                </div>
                            </div>
                        </form>
                        <!-- END CONTACT FORM -->
                    </div>
                </div>
            </div>
        </section>
        <!-- END CONTACT -->
        <!-- FOOTER -->
        <footer>
            <div class="container">
                <div class="row">
                    <!-- UPPER FOOTER -->
                    <div class="upper-footer">
                        <div class="pull-left">
                            <a class="logo page-scroll" href="#page-top"><img src="softkey_assets/img/logo.png" class="img-responsive" alt=""></a>
                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco. Qui officia deserunt mollit anim id est laborum. </p>
                        </div>
                        <div class="pull-right">
                            <ul class="footer-nav">
                                <li class="">
                                    <a class="page-scroll" href="#services">About</a>
                                </li>
                                <li class="">
                                    <a class="page-scroll" href="#features">Features</a>
                                </li>
                                <li class="">
                                    <a class="page-scroll" href="#video">Video</a>
                                </li>
                                <li class="">
                                    <a class="page-scroll" href="#pricing">Pricing</a>
                                </li>
                                <li class="active">
                                    <a class="page-scroll" href="#team">Team</a>
                                </li>
                                <li class="">
                                    <a class="page-scroll" href="#clients">Clients</a>
                                </li>
                            </ul>
                            <ul class="footer-secondary-nav">
                                <li class="">
                                    <a class="page-scroll" href="#"><span class="fa fa-phone"></span>+44-12-3456-7890</a>
                                </li>
                                <li class="">
                                    <a class="page-scroll" href="#"><span class="fa fa-envelope"></span>office@Periksain</a>
                                </li>
                                <li class="">
                                    <a class="page-scroll" href="#"><span class="fa fa-map-marker"></span>Glen Road, E13 8 New York</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- END UPPER FOOTER -->
                    <!-- LOWER FOOTER -->
                    <div class="lower-footer">
                        <div class="pull-left">
                            <span>© 2015 LoremIpsum Themes. All rights reserved </span>
                            <a href="#"> Terms of Service </a>
                            <a href="#"> Privacy Policy </a>
                        </div>
                        <div class="pull-right">
                            <a href="#"><span class="fa fa-facebook"></span></a>
                            <a href="#"><span class="fa fa-twitter"></span></a>
                            <a href="#"><span class="fa fa-linkedin"></span></a>
                            <a href="#"><span class="fa fa-youtube"></span></a>
                            <a href="#"><span class="fa fa-pinterest"></span></a>
                            <a href="#"><span class="fa fa-skype"></span></a>
                        </div>
                    </div>
                    <!-- END LOWER FOOTER -->
                </div>
            </div>
        </footer>
        <!-- END FOOTER -->
        <!-- SCRIPTS -->
        <!-- jQuery & Bootstrap -->
        <script src="softkey_assets/js/jquery.js"></script>
        <script src="softkey_assets/js/jquery.easing.min.js"></script>
        <script src="softkey_assets/js/bootstrap.min.js"></script>
        <!-- smoothscroll  -->
        <script src="softkey_assets/js/smoothscroll.js"></script>
        <!-- piechart  -->
        <script src="softkey_assets/js/jquery.easytabs.min.js"></script>
        <!-- tabs  -->
        <script src="softkey_assets/js/piechart.js"></script>
        <!-- animated header -->
        <script src="softkey_assets/js/particles.js" type="text/javascript"></script>
        <!-- sliders -->
        <script src="softkey_assets/js/owl.carousel.min.js"></script>
        <!-- contact form -->
        <script src="softkey_assets/js/jqBootstrapValidation.js"></script>
        <script src="softkey_assets/js/classie.js"></script>
        <!-- google map -->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
        <!-- custom script -->
        <script src="softkey_assets/js/scripts.js"></script>
    </body>
</html>
