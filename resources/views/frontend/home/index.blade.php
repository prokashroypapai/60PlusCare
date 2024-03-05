@extends('frontend.layout.app')
@section('content')

<!-- Page Wrapper End -->
<div class="page-wrapper">

    @include('frontend.common.header')

    <!-- Hero Section Start -->
    <section class="hero-wrap style1">
        <div class="hero-slider-one owl-carousel">
            <div class="hero-slide-item">
                <div class="container">
                    <div class="row align-items-center gx-5">
                        <div class="col-xl-5 col-lg-6">
                            <div class="hero-content">
                                <span>We Take Care Of Your Health</span>
                                <h1>60 Plus Care provides best elder care services in Kolkata</h1>
                                <p>
                                    Portea Medical delivers quality care with compassion. We bring quality medical care into our patients’ homes and aim to make primary healthcare not only more accessible but also more affordable and accountable to our patient’s needs.
                                </p>
                                <div class="hero-btn">
                                    <button class="btn style1" onclick='window.location.href="{{ url('/about') }}"'>Know About Us</button>
                                    <a href="service-one.html" class="btn style3">Our Services</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6">
                            <div class="hero-img-wrap">
                                <img class="hero-img" src="https://templates.hibotheme.com/teli/default/assets/img/hero/hero-img-1.jpg" alt="Image">
                                <img src="https://templates.hibotheme.com/teli/default/assets/img/hero/hero-shape-1.png" alt="Image" class="hero-shape-one moveHorizontal">
                                <img src="https://templates.hibotheme.com/teli/default/assets/img/hero/hero-shape-2.png" alt="Image" class="hero-shape-two rotate">
                                <div class="row promo-box-wrap">
                                    <div class="col-xl-5 col-lg-7 col-md-5">
                                        <div class="promo-box">
                                            <span><i class="flaticon-support"></i></span>
                                            <h4>24/7 Support</h4>
                                            <p>There are many variations of passages are valid.</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-5 col-lg-7 col-md-5">
                                        <div class="promo-box">
                                            <span><i class="flaticon-aid-man"></i></span>
                                            <h4>Qualified Doctors</h4>
                                            <p>There are many variations of passages are valid.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-slide-item">
                <div class="container">
                    <div class="row align-items-center gx-5">
                        <div class="col-xl-5 col-lg-6">
                            <div class="hero-content">
                                <span>24/7 Call Support</span>
                                <h1>Join Us Forever To Get Help From Anywhere</h1>
                                <p>Ontrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old richer.</p>
                                <div class="hero-btn">
                                    <a href="about.html" class="btn style1">Find Out More</a>
                                    <a href="service-one.html" class="btn style3">Our Services</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6">
                            <div class="hero-img-wrap">
                                <img class="hero-img" src="assets/img/hero/hero-img-8.jpg" alt="Image">
                                <img src="assets/img/hero/hero-shape-1.png" alt="Image" class="hero-shape-one moveHorizontal">
                                <img src="assets/img/hero/hero-shape-2.png" alt="Image" class="hero-shape-two rotate">
                                <div class="row promo-box-wrap">
                                    <div class="col-xl-5 col-lg-7 col-md-5">
                                        <div class="promo-box">
                                            <span><i class="flaticon-support"></i></span>
                                            <h4>24/7 Support</h4>
                                            <p>There are many variations of passages are valid.</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-5 col-lg-7 col-md-5">
                                        <div class="promo-box">
                                            <span><i class="flaticon-aid-man"></i></span>
                                            <h4>Qualified Doctors</h4>
                                            <p>There are many variations of passages are valid.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-slide-item">
                <div class="container">
                    <div class="row align-items-center gx-5">
                        <div class="col-xl-5 col-lg-6">
                            <div class="hero-content">
                                <span>Telemedicine Help</span>
                                <h1>Most Complete Health Solution In Your Hands</h1>
                                <p>Ontrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old richer.</p>
                                <div class="hero-btn">
                                    <a href="about.html" class="btn style1">Find Out More</a>
                                    <a href="service-one.html" class="btn style3">Our Services</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6">
                            <div class="hero-img-wrap">
                                <img class="hero-img" src="assets/img/hero/hero-img-9.jpg" alt="Image">
                                <img src="assets/img/hero/hero-shape-1.png" alt="Image" class="hero-shape-one moveHorizontal">
                                <img src="assets/img/hero/hero-shape-2.png" alt="Image" class="hero-shape-two rotate">
                                <div class="row promo-box-wrap">
                                    <div class="col-xl-5 col-lg-7 col-md-5">
                                        <div class="promo-box">
                                            <span><i class="flaticon-support"></i></span>
                                            <h4>24/7 Support</h4>
                                            <p>There are many variations of passages are valid.</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-5 col-lg-7 col-md-5">
                                        <div class="promo-box">
                                            <span><i class="flaticon-aid-man"></i></span>
                                            <h4>Qualified Doctors</h4>
                                            <p>There are many variations of passages are valid.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

        <!-- Portfolio Section Start -->
        <section class="portfolio-wrap ptb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="portfolio-card style1">
                            <img src="https://templates.hibotheme.com/teli/default/assets/img/portfolio/portfolio-1.jpg" alt="Image">
                            <div class="portfolio-info">
                                <a href="portfolio-category.html" class="portfolio-cat">Cardiology</a>
                                <h3><a href="portfolio-details.html">Cardio Surgery</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="portfolio-card style1">
                            <img src="https://templates.hibotheme.com/teli/default/assets/img/portfolio/portfolio-2.jpg" alt="Image">
                            <div class="portfolio-info">
                                <a href="portfolio-category.html" class="portfolio-cat">Eye Care</a>
                                <h3><a href="portfolio-details.html">Retina Checkup</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="portfolio-card style1">
                            <img src="https://templates.hibotheme.com/teli/default/assets/img/portfolio/portfolio-3.jpg" alt="Image">
                            <div class="portfolio-info">
                                <a href="portfolio-category.html" class="portfolio-cat">Surgery</a>
                                <h3><a href="portfolio-details.html">Neuro Surgery</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="portfolio-card style1">
                            <img src="https://templates.hibotheme.com/teli/default/assets/img/portfolio/portfolio-4.jpg" alt="Image">
                            <div class="portfolio-info">
                                <a href="portfolio-category.html" class="portfolio-cat">Dental</a>
                                <h3><a href="portfolio-details.html">Root Canal</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="portfolio-card style1">
                            <img src="https://templates.hibotheme.com/teli/default/assets/img/portfolio/portfolio-9.jpg" alt="Image">
                            <div class="portfolio-info">
                                <a href="portfolio-category.html" class="portfolio-cat">Health</a>
                                <h3><a href="portfolio-details.html">Child Care</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="portfolio-card style1">
                            <img src="https://templates.hibotheme.com/teli/default/assets/img/portfolio/portfolio-10.jpg" alt="Image">
                            <div class="portfolio-info">
                                <a href="portfolio-category.html" class="portfolio-cat">Family</a>
                                <h3><a href="portfolio-details.html">Adult Health</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="portfolio-card style1">
                            <img src="https://templates.hibotheme.com/teli/default/assets/img/portfolio/portfolio-11.jpg" alt="Image">
                            <div class="portfolio-info">
                                <a href="portfolio-category.html" class="portfolio-cat">Dental</a>
                                <h3><a href="portfolio-details.html">Dental Checkup</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="portfolio-card style1">
                            <img src="https://templates.hibotheme.com/teli/default/assets/img/portfolio/portfolio-12.jpg" alt="Image">
                            <div class="portfolio-info">
                                <a href="portfolio-category.html" class="portfolio-cat">Neuro</a>
                                <h3><a href="portfolio-details.html">Neuro Surgery</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="portfolio-card style1">
                            <img src="https://templates.hibotheme.com/teli/default/assets/img/portfolio/portfolio-13.jpg" alt="Image">
                            <div class="portfolio-info">
                                <a href="portfolio-category.html" class="portfolio-cat">COVID-19</a>
                                <h3><a href="portfolio-details.html">Covid Test</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-10">
                    <a href="portfolio.html" class="btn style1">Load More</a>
                </div>
            </div>
        </section>
        <!-- Portfolio Section End -->

        <!-- Why Choose Us Section Start -->
        <section class="wh-wrap style1 bg-chathamas ptb-100">
            <div class="container">
                <div class="row align-items-center mb-40">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                        <div class="section-title style2">
                            <span>Why Choose us</span>
                            <h2>Owr Best Services & Quite Popular Online Treatment</h2>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                        <p class="section-para style2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque ex maxime itaque corporis ipsam dolores non explicabo, ipsa temporibus impedit, quos architecto ad pariatur! Itaque fugit nesciunt doloremque quos! Nam?</p>
                    </div>
                </div>
                <div class="row align-items-center gx-5">
                    <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="200">
                        <div class="wh-img-wrap">
                            <div class="wh-shape-one">
                                <img src="assets/img/why-choose-us/wh-shape-1.png" alt="Image" class=" bounce">
                            </div>
                            <img src="assets/img/why-choose-us/wh-img-5.jpg" alt="Image" class="wh-img-one">
                            <img src="assets/img/why-choose-us/wh-img-2.jpg" alt="Image" class="wh-img-two">
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="200">
                        <div class="wh-content">
                            <div class="feature-item-wrap">
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <i class="ri-check-line"></i>
                                    </div>
                                    <div class="feature-text">
                                        <h3>Mental health Solutions</h3>
                                        <p>Vestibulum ac diam sit amet quam vehicula elemen tum sed sit amet dui praesent sapien pellen tesque .</p>
                                    </div>
                                </div>
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <i class="ri-check-line"></i>
                                    </div>
                                    <div class="feature-text">
                                        <h3>Rapid Patient Improvement</h3>
                                        <p>Vestibulum ac diam sit amet quam vehicula elemen tum sed sit amet dui praesent sapien pellen tesque.</p>
                                    </div>
                                </div>
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <i class="ri-check-line"></i>
                                    </div>
                                    <div class="feature-text">
                                        <h3>World Class Treatment</h3>
                                        <p>Vestibulum ac diam sit amet quam vehicula elemen tum sed sit amet dui praesent sapien pellen tesque.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="partner-slider-one owl-carousel pt-100">
                    <div class="partner-item">
                        <img src="assets/img/partner/partner-1.png" alt="Image">
                    </div>
                    <div class="partner-item">
                        <img src="assets/img/partner/partner-2.png" alt="Image">
                    </div>
                    <div class="partner-item">
                        <img src="assets/img/partner/partner-3.png" alt="Image">
                    </div>
                    <div class="partner-item">
                        <img src="assets/img/partner/partner-4.png" alt="Image">
                    </div>
                    <div class="partner-item">
                        <img src="assets/img/partner/partner-5.png" alt="Image">
                    </div>
                    <div class="partner-item">
                        <img src="assets/img/partner/partner-6.png" alt="Image">
                    </div>
                    <div class="partner-item">
                        <img src="assets/img/partner/partner-2.png" alt="Image">
                    </div>
                </div>
            </div>
        </section>
        <!-- Why Choose Us Section End -->

        <!-- Team Section Start -->
        <section class="team-wrap ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-6 offset-xl-3 col-xl-8 offset-xl-2 col-lg-8 offset-lg-2  col-md-10 offset-md-1" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                        <div class="section-title style1 text-center mb-40">
                            <span>Our Team</span>
                            <h2>Meet Our Expert &amp; Experienced Team Members</h2>
                        </div>
                    </div>
                </div>
                <div class="team-slider-one style2 owl-carousel">
                    <div class="team-card style2"  data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                        <img src="https://templates.hibotheme.com/teli/default/assets/img/team/team-1.jpg" alt="Image">
                        <div class="team-info">
                            <h3>Dr. Fedrick Bonita</h3>
                            <span>Othopedic Surgeon</span>
                            <ul class="social-profile style2 list-style">
                                <li>
                                    <a target="_blank" href="https://facebook.com">
                                        <i class="ri-facebook-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://twitter.com">
                                        <i class="ri-twitter-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://instagram.com">
                                        <i class="ri-instagram-line"></i>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://linkedin.com">
                                        <i class="ri-linkedin-fill"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-card style2"  data-aos="fade-up" data-aos-duration="1200" data-aos-delay="300">
                        <img src="https://templates.hibotheme.com/teli/default/assets/img/team/team-2.jpg" alt="Image">
                        <div class="team-info">
                            <h3>Dr. Ken Moris</h3>
                            <span>Urology Efficient</span>
                            <ul class="social-profile style2 list-style">
                                <li>
                                    <a target="_blank" href="https://facebook.com">
                                        <i class="ri-facebook-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://twitter.com">
                                        <i class="ri-twitter-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://instagram.com">
                                        <i class="ri-instagram-line"></i>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://linkedin.com">
                                        <i class="ri-linkedin-fill"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-card style2"  data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400">
                        <img src="https://templates.hibotheme.com/teli/default/assets/img/team/team-3.jpg" alt="Image">
                        <div class="team-info">
                            <h3>Dr. Luiz Frank</h3>
                            <span>Neurosurgery Efficient</span>
                            <ul class="social-profile style2 list-style">
                                <li>
                                    <a target="_blank" href="https://facebook.com">
                                        <i class="ri-facebook-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://twitter.com">
                                        <i class="ri-twitter-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://instagram.com">
                                        <i class="ri-instagram-line"></i>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://linkedin.com">
                                        <i class="ri-linkedin-fill"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-card style2"  data-aos="fade-up" data-aos-duration="1200" data-aos-delay="500">
                        <img src="https://templates.hibotheme.com/teli/default/assets/img/team/team-4.jpg" alt="Image">
                        <div class="team-info">
                            <h3>Dr. Selina Gomez</h3>
                            <span>Surgery Efficient </span>
                            <ul class="social-profile style2 list-style">
                                <li>
                                    <a target="_blank" href="https://facebook.com">
                                        <i class="ri-facebook-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://twitter.com">
                                        <i class="ri-twitter-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://instagram.com">
                                        <i class="ri-instagram-line"></i>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://linkedin.com">
                                        <i class="ri-linkedin-fill"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-card style2"  data-aos="fade-up" data-aos-duration="1200" data-aos-delay="600">
                        <img src="https://templates.hibotheme.com/teli/default/assets/img/team/team-5.jpg" alt="Image">
                        <div class="team-info">
                            <h3>Dr. Sarai Conn</h3>
                            <span>Senior Dentist</span>
                            <ul class="social-profile style2 list-style">
                                <li>
                                    <a target="_blank" href="https://facebook.com">
                                        <i class="ri-facebook-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://twitter.com">
                                        <i class="ri-twitter-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://instagram.com">
                                        <i class="ri-instagram-line"></i>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://linkedin.com">
                                        <i class="ri-linkedin-fill"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-card style2"  data-aos="fade-up" data-aos-duration="1200" data-aos-delay="700">
                        <img src="https://templates.hibotheme.com/teli/default/assets/img/team/team-6.jpg" alt="Image">
                        <div class="team-info">
                            <h3>Dr. Maureen Klein</h3>
                            <span>Othopedic Surgeon</span>
                            <ul class="social-profile style2 list-style">
                                <li>
                                    <a target="_blank" href="https://facebook.com">
                                        <i class="ri-facebook-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://twitter.com">
                                        <i class="ri-twitter-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://instagram.com">
                                        <i class="ri-instagram-line"></i>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://linkedin.com">
                                        <i class="ri-linkedin-fill"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Team Section End -->
        <!-- About Section Start -->
        <section class="about-wrap style1 ptb-100">
            <div class="container">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="200">
                        <div class="about-img-wrap">
                            <img src="assets/img/about/about-img-1.jpg" alt="Image" class="about-img-one">
                            <img src="assets/img/about/about-img-2.jpg" alt="Image" class="about-img-two">
                            <div class="about-doctor-box">
                                <div class="doctor-img">
                                    <img src="assets/img/about/doctor-1.jpg" alt="Image">
                                </div>
                                <div class="doctor-info">
                                    <h5>Dr. Kate Winslet</h5>
                                    <span>Radiology</span>
                                </div>
                                <button type="button" class="btn style1">Select</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="200">
                        <div class="about-content">
                            <div class="content-title style1">
                                <span>About Our Program</span>
                                <h2>Take Care Of Your Health With Our Health Package</h2>
                                <p>There are many variations of passages of Lorem Ipsum amets avoilble but majority have suffered alteration in some form, by injected humour or randomise words which don't sure amet consec tetur adicing.</p>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-md-7">
                                    <ul class="content-feature-list list-style">
                                        <li><i class="ri-checkbox-circle-line"></i>Provide More Potential Health
                                        </li>
                                        <li><i class="ri-checkbox-circle-line"></i>Operational Research Transformation
                                        </li>
                                        <li><i class="ri-checkbox-circle-line"></i>Mental health Solution
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-5">
                                    <div class="about-promo-video bg-f">
                                        <a class="play-now" data-fancybox="" href="https://www.youtube.com/watch?v=UNSSuTSQI9I">
                                            <i class="ri-play-fill"></i>
                                            <span class="ripple"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="ceo-msg">
                                <div class="ceo-img">
                                    <img src="assets/img/about/doctor-2.jpg" alt="Image">
                                </div>
                                <p>"Think Hard And Focus On The Patient's Well-Being"</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Section End -->

    <!-- Service Section Start -->
    <section class="service-wrap ptb-100 bg-athens">
        <div class="container">
            <div class="section-title style1 text-center mb-40">
                <span>Our Services</span>
                <h2>We're Providing Best Services</h2>
            </div>
            <div class="service-slider-one owl-carousel">
                <div class="service-card style1"  data-aos="fade-left" data-aos-duration="1200" data-aos-delay="200">
                    <div class="service-img">
                        <img src="assets/img/services/service-2.jpg" alt="Image">
                        <span class="service-icon"><i class="flaticon-hospital-ward"></i></span>
                    </div>
                    <div class="service-info">
                        <h3><a href="service-details.html">Patient Onboarding</a></h3>
                        <p>It is a long established fact that reader will content of page when looks layout.</p>
                        <a href="service-details.html" class="link style2">Explore More</a>
                    </div>
                </div>
                <div class="service-card style1"  data-aos="fade-left" data-aos-duration="1200" data-aos-delay="300">
                    <div class="service-img">
                        <img src="assets/img/services/service-3.jpg" alt="Image">
                        <span class="service-icon"><i class="flaticon-health-care"></i></span>
                    </div>
                    <div class="service-info">
                        <h3><a href="service-details.html">Heart Checkup</a></h3>
                        <p>It is a long established fact that reader will content of page when looks layout.</p>
                        <a href="service-details.html" class="link style2">Explore More</a>
                    </div>
                </div>
                <div class="service-card style1"  data-aos="fade-left" data-aos-duration="1200" data-aos-delay="400">
                    <div class="service-img">
                        <img src="assets/img/services/service-4.jpg" alt="Image">
                        <span class="service-icon"><i class="flaticon-traumatology"></i></span>
                    </div>
                    <div class="service-info">
                        <h3><a href="service-details.html">Orthopedic Solution</a></h3>
                        <p>It is a long established fact that reader will content of page when looks layout.</p>
                        <a href="service-details.html" class="link style2">Explore More</a>
                    </div>
                </div>
                <div class="service-card style1"  data-aos="fade-left" data-aos-duration="1200" data-aos-delay="500">
                    <div class="service-img">
                        <img src="assets/img/services/service-5.jpg" alt="Image">
                        <span class="service-icon"><i class="flaticon-bandage"></i></span>
                    </div>
                    <div class="service-info">
                        <h3><a href="service-details.html">Pathology test</a></h3>
                        <p>It is a long established fact that reader will content of page when looks layout.</p>
                        <a href="service-details.html" class="link style2">Explore More</a>
                    </div>
                </div>
                <div class="service-card style1"  data-aos="fade-left" data-aos-duration="1200" data-aos-delay="600">
                    <div class="service-img">
                        <img src="assets/img/services/service-6.jpg" alt="Image">
                        <span class="service-icon"><i class="flaticon-nurse"></i></span>
                    </div>
                    <div class="service-info">
                        <h3><a href="service-details.html">Specialist Advise</a></h3>
                        <p>It is a long established fact that reader will content of page when looks layout.</p>
                        <a href="service-details.html" class="link style2">Explore More</a>
                    </div>
                </div>
                <div class="service-card style1"  data-aos="fade-left" data-aos-duration="1200" data-aos-delay="700">
                    <div class="service-img">
                        <img src="assets/img/services/service-8.jpg" alt="Image">
                        <span class="service-icon"><i class="flaticon-ophthalmology"></i></span>
                    </div>
                    <div class="service-info">
                        <h3><a href="service-details.html">Complete Eye Care</a></h3>
                        <p>It is a long established fact that reader will content of page when looks layout.</p>
                        <a href="service-details.html" class="link style2">Explore More</a>
                    </div>
                </div>
            </div>
            <div class="text-center mt-30">
                <p class="mb-0">Are you impressed with our amazing services. <a href="service-one.html" class="link style1">View All Services</a></p>
            </div>
        </div>
    </section>
    <!-- Service Section End -->

    <!-- Testimonial Section Start -->
    <section class="testimonial-wrap style1 ptb-100 bg-athens">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-7 col-md-8">
                    <div class="section-title style2 mb-40">
                        <span>Testimonial</span>
                        <h2>The Main Reason For Your Choice Is Our Best Service </h2>
                    </div>
                </div>
            </div>
            <div class="testimonial-slider-one owl-carousel">
                <div class="testimonial-card style3" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                    <ul class="ratings list-style">
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                    </ul>
                    <p class="client-quote">Lorem ipsum dolor sit amet adip selection repellat tetur delni vel quam aliq earu expel dolor eme fugiat enim amet sit dolor.</p>
                    <div class="client-info-area">
                        <div class="client-info-wrap">
                            <div class="client-img">
                                <img src="assets/img/testimonials/client-1.jpg" alt="Image">
                            </div>
                            <div class="client-info">
                                <h3>Jim Morison</h3>
                                <span>Director, BAT</span>
                            </div>
                        </div>
                        <div class="quote-icon">
                            <i class="flaticon-quote-2"></i>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card style3" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="300">
                    <ul class="ratings list-style">
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                    </ul>
                    <p class="client-quote">Lorem ipsum dolor sit amet adip selection repellat tetur delni vel quam aliq earu expel dolor eme fugiat enim amet sit dolor.</p>
                    <div class="client-info-area">
                        <div class="client-info-wrap">
                            <div class="client-img">
                                <img src="assets/img/testimonials/client-2.jpg" alt="Image">
                            </div>
                            <div class="client-info">
                                <h3>Alex Cruis</h3>
                                <span>CEO, IBAC</span>
                            </div>
                        </div>
                        <div class="quote-icon">
                            <i class="flaticon-quote-2"></i>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card style3" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400">
                    <ul class="ratings list-style">
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                    </ul>
                    <p class="client-quote">Lorem ipsum dolor sit amet adip selection repellat tetur delni vel quam aliq earu expel dolor eme fugiat enim amet sit dolor.</p>
                    <div class="client-info-area">
                        <div class="client-info-wrap">
                            <div class="client-img">
                                <img src="assets/img/testimonials/client-3.jpg" alt="Image">
                            </div>
                            <div class="client-info">
                                <h3>Tom Haris</h3>
                                <span>Engineer, Olleo</span>
                            </div>
                        </div>
                        <div class="quote-icon">
                            <i class="flaticon-quote-2"></i>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card style3" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="500">
                    <ul class="ratings list-style">
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                    </ul>
                    <p class="client-quote">Lorem ipsum dolor sit amet adip selection repellat tetur delni vel quam aliq earu expel dolor eme fugiat enim amet sit dolor.</p>
                    <div class="client-info-area">
                        <div class="client-info-wrap">
                            <div class="client-img">
                                <img src="assets/img/testimonials/client-4.jpg" alt="Image">
                            </div>
                            <div class="client-info">
                                <h3>Harry Jackson</h3>
                                <span>Enterpreneur</span>
                            </div>
                        </div>
                        <div class="quote-icon">
                            <i class="flaticon-quote-2"></i>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card style3" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="600">
                    <ul class="ratings list-style">
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                    </ul>
                    <p class="client-quote">Lorem ipsum dolor sit amet adip selection repellat tetur delni vel quam aliq earu expel dolor eme fugiat enim amet sit dolor.</p>
                    <div class="client-info-area">
                        <div class="client-info-wrap">
                            <div class="client-img">
                                <img src="assets/img/testimonials/client-5.jpg" alt="Image">
                            </div>
                            <div class="client-info">
                                <h3>Chris Haris</h3>
                                <span>MD, ITec</span>
                            </div>
                        </div>
                        <div class="quote-icon">
                            <i class="flaticon-quote-2"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cta-wrap pt-100">
                <div class="row gx-5 align-items-center">
                    <div class="col-xl-8 col-lg-7">
                        <div class="cta-content">
                            <div class="cta-logo">
                                <img src="assets/img/cta-icon.png" alt="Image">
                            </div>
                            <div class="content-title">
                                <h2>Don't Hesitate To Contact us</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto inventore voluptatem possimus quibusdam veritatis. Accusamus ipsum saepe quas.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="cta-btn">
                            <a href="appointment.html" class="btn style1">Make Appointment</a>
                            <a href="contact.html" class="btn style2">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->

    <!-- Pricing Section Start -->
    <section class="pricing-wrap pt-100 pb-75">
        <div class="container">
            <div class="section-title style1 text-center mb-40">
                <span>Pricing Plan</span>
                <h2>Our Simple &amp; Affordable Plan</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-6 col-md-6" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="200">
                    <div class="pricing-card">
                        <div class="pricing-header">
                            <div class="pricing-header-left">
                                <h5>Basic Plan</h5>
                                <h2>$79<span>/Month</span></h2>
                            </div>
                            <div class="pricing-header-right">
                                <i class="flaticon-home"></i>
                            </div>
                        </div>
                        <ul class="pricing-features list-style">
                            <li class="checked">New Patient Consultation <i class="ri-check-line"></i></li>
                            <li class="checked">Regular health Checkup<i class="ri-check-line"></i></li>
                            <li class="checked">Ocupational Therapy<i class="ri-check-line"></i></li>
                            <li class="checked">Phusical Therapy<i class="ri-check-line"></i></li>
                            <li class="unchecked">X-rays<i class="ri-close-fill"></i></li>
                            <li class="unchecked">Cancer Treatment<i class="ri-close-fill"></i></li>
                        </ul>
                        <a href="login.html" class="btn style2">Get Started Now</a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="300">
                    <div class="pricing-card">
                        <div class="pricing-header">
                            <div class="pricing-header-left">
                                <h5>Standard Plan</h5>
                                <h2>$89<span>/Month</span></h2>
                            </div>
                            <div class="pricing-header-right">
                                <i class="flaticon-user-2"></i>
                            </div>
                        </div>
                        <ul class="pricing-features list-style">
                            <li class="checked">New Patient Consultation <i class="ri-check-line"></i></li>
                            <li class="checked">Regular health Checkup<i class="ri-check-line"></i></li>
                            <li class="checked">Ocupational Therapy<i class="ri-check-line"></i></li>
                            <li class="checked">Phusical Therapy<i class="ri-check-line"></i></li>
                            <li class="checked">X-rays<i class="ri-check-line"></i></li>
                            <li class="unchecked">Cancer Treatment<i class="ri-close-fill"></i></li>
                        </ul>
                        <a href="login.html" class="btn style2">Get Started Now</a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="400">
                    <div class="pricing-card">
                        <div class="pricing-header">
                            <div class="pricing-header-left">
                                <h5>Premium Plan</h5>
                                <h2>$99<span>/Month</span></h2>
                            </div>
                            <div class="pricing-header-right">
                                <i class="flaticon-clipboard"></i>
                            </div>
                        </div>
                        <ul class="pricing-features list-style">
                            <li class="checked">New Patient Consultation <i class="ri-check-line"></i></li>
                            <li class="checked">Regular health Checkup<i class="ri-check-line"></i></li>
                            <li class="checked">Ocupational Therapy<i class="ri-check-line"></i></li>
                            <li class="checked">Phusical Therapy<i class="ri-check-line"></i></li>
                            <li class="checked">X-rays<i class="ri-check-line"></i></li>
                            <li class="checked">Cancer Treatment<i class="ri-check-line"></i></li>
                        </ul>
                        <a href="login.html" class="btn style2">Get Started Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing Section End -->

    <!-- Blog Section Start -->
    <section class="blog-wrap ptb-100 bg-athens">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-7 col-md-8">
                    <div class="section-title style1 mb-40">
                        <span>Our Blog</span>
                        <h2>Our Latest &amp; Most Popular Tips &amp; Tricks For You</h2>
                    </div>
                </div>
            </div>
            <div class="blog-slider-one owl-carousel">
                <div class="blog-card style1" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                    <div class="blog-img">
                        <img src="assets/img/blog/blog-1.jpg" alt="Image">
                    </div>
                    <div class="blog-info">
                        <a href="posts-by-date.html" class="blog-date">22 Jun, 2022</a>
                        <ul class="blog-metainfo  list-style">
                            <li><i class="ri-user-unfollow-line"></i><a href="posts-by-author.html">Admin</a></li>
                            <li><i class="ri-wechat-line"></i>No Comment</li>
                        </ul>
                        <h3><a href="blog-details-right-sidebar.html">How To Recover Health Faster With Online Session</a></h3>
                        <a href="blog-details-right-sidebar.html" class="link style2">Read More<i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
                <div class="blog-card style1" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="300">
                    <div class="blog-img">
                        <img src="assets/img/blog/blog-2.jpg" alt="Image">
                    </div>
                    <div class="blog-info">
                        <a href="posts-by-date.html" class="blog-date">15 Jun, 2022</a>
                        <ul class="blog-metainfo  list-style">
                            <li><i class="ri-user-unfollow-line"></i><a href="posts-by-author.html">Admin</a></li>
                            <li><i class="ri-wechat-line"></i>No Comment</li>
                        </ul>
                        <h3><a href="blog-details-right-sidebar.html">Telehealth Services Are Ready To Help Your Family </a></h3>
                        <a href="blog-details-right-sidebar.html" class="link style2">Read More<i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
                <div class="blog-card style1" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400">
                    <div class="blog-img">
                        <img src="assets/img/blog/blog-3.jpg" alt="Image">
                    </div>
                    <div class="blog-info">
                        <a href="posts-by-date.html" class="blog-date">12 Jun, 2022</a>
                        <ul class="blog-metainfo  list-style">
                            <li><i class="ri-user-unfollow-line"></i><a href="posts-by-author.html">Admin</a></li>
                            <li><i class="ri-wechat-line"></i>No Comment</li>
                        </ul>
                        <h3><a href="blog-details-right-sidebar.html">10 Tips To Lead A Healthy And Happy Life</a></h3>
                        <a href="blog-details-right-sidebar.html" class="link style2">Read More<i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
                <div class="blog-card style1" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="500">
                    <div class="blog-img">
                        <img src="assets/img/blog/blog-4.jpg" alt="Image">
                    </div>
                    <div class="blog-info">
                        <a href="posts-by-date.html" class="blog-date">25 May, 2022</a>
                        <ul class="blog-metainfo  list-style">
                            <li><i class="ri-user-unfollow-line"></i><a href="posts-by-author.html">Admin</a></li>
                            <li><i class="ri-wechat-line"></i>No Comment</li>
                        </ul>
                        <h3><a href="blog-details-right-sidebar.html">The Day I'd Spent At Square Medical Center</a></h3>
                        <a href="blog-details-right-sidebar.html" class="link style2">Read More<i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
                <div class="blog-card style1" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="600">
                    <div class="blog-img">
                        <img src="assets/img/blog/blog-5.jpg" alt="Image">
                    </div>
                    <div class="blog-info">
                        <a href="posts-by-date.html" class="blog-date">17 May, 2022</a>
                        <ul class="blog-metainfo  list-style">
                            <li><i class="ri-user-unfollow-line"></i><a href="posts-by-author.html">Admin</a></li>
                            <li><i class="ri-wechat-line"></i>No Comment</li>
                        </ul>
                        <h3><a href="blog-details-right-sidebar.html">How Does Science Help In Dental Surgery Research</a></h3>
                        <a href="blog-details-right-sidebar.html" class="link style2">Read More<i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

    @include('frontend.common.footer')

</div>
<!-- Page Wrapper End -->
@endsection
