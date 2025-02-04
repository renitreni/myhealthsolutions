<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ __('medical') }}</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('theme/medico-master/css/bootstrap.min.css') }}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{ asset('theme/medico-master/css/animate.css') }}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{ asset('theme/medico-master/css/owl.carousel.min.css') }}">
    <!-- themify CSS -->
    <link rel="stylesheet" href="{{ asset('theme/medico-master/css/themify-icons.css') }}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('theme/medico-master/css/flaticon.css') }}">
    <!-- magnific popup CSS -->
    <link rel="stylesheet" href="{{ asset('theme/medico-master/css/magnific-popup.css') }}">
    <!-- nice select CSS -->
    <link rel="stylesheet" href="{{ asset('theme/medico-master/css/nice-select.css') }}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{ asset('theme/medico-master/css/slick.css') }}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{ asset('theme/medico-master/css/style.css') }}">
    @livewireStyles
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html">
                            {{-- <img src="{{ asset('theme/medico-master/img/logo.png') }}" alt="logo"> --}}
                            <h3>My Health Solution</h3>
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-center"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.html">{{ __('Home') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.html">{{ __('about') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="Doctor.html">{{ __('Doctors') }}</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown"
                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Pages
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="services.html">{{ __('services') }}</a>
                                        <a class="dropdown-item" href="dep.html">{{ __('depertments') }}</a>
                                        <a class="dropdown-item" href="elements.html">{{ __('Elements') }}</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_1"
                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Blog
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                        <a class="dropdown-item" href="blog.html">{{ __('blog') }}</a>
                                        <a class="dropdown-item" href="single-blog.html">{{ __('Single blog') }}</a>
                                    </div>
                                </li>
                                <livewire:locale-changer-component lazy></livewire:locale-changer-component>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">{{ __('Contact') }}</a>
                                </li>
                            </ul>
                        </div>
                        <a class="btn_2 d-none d-lg-block" href="{{ route('filament.portal.auth.login') }}">{{ __('LOGIN') }}</a>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-xl-5">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h5>{{ __('We are here for your care') }}</h5>
                            <h1>{{ __('Best Care & Better Doctor') }}</h1>
                            <p>{{ __('We are dedicated to providing exceptional healthcare with compassion and expertise. Experience the best care from highly skilled doctors committed to your well-being.') }}
                            </p>
                            <a href="#" class="btn_2">{{ __('Make an appointment') }}</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="banner_img">
                        <img src="{{ asset('theme/medico-master/img/banner_img.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <!-- about us part start-->
    <section class="about_us padding_top">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-6 col-lg-6">
                    <div class="about_us_img">
                        <img src="{{ asset('theme/medico-master/img/top_service.png') }}" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="about_us_text">
                        <h2>{{ __('About us') }}</h2>
                        <p>{{ __('we are committed to delivering high-quality healthcare with compassion and expertise. Our team of experienced doctors and medical professionals prioritize your well-being, offering personalized treatment plans to ensure the best possible care. Whether for routine check-ups or specialized treatments, we strive to create a comfortable and supportive environment for every patient. Your health is our priority, and we are here to guide you on your journey to wellness.') }}
                        </p>
                        <a class="btn_2 " href="#">{{ __('learn more') }}</a>
                        <div class="banner_item">
                            <div class="single_item">
                                <img src="{{ asset('theme/medico-master/img/icon/banner_1.svg') }}" alt="">
                                <h5>{{ __('Emergency') }}</h5>
                            </div>
                            <div class="single_item">
                                <img src="{{ asset('theme/medico-master/img/icon/banner_2.svg') }}" alt="">
                                <h5>{{ __('Appointment') }}</h5>
                            </div>
                            <div class="single_item">
                                <img src="{{ asset('theme/medico-master/img/icon/banner_3.svg') }}" alt="">
                                <h5>{{ __('Qualfied') }}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about us part end-->

    <!-- feature_part start-->
    <section class="feature_part">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section_tittle text-center">
                        <h2>{{ __('Our services') }}</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-3 col-sm-12">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img
                                    src="{{ asset('theme/medico-master/img/icon/feature_1.svg') }}"
                                    alt=""></span>
                            <h4>{{ __('Better Future') }}</h4>
                            <p>Darkness multiply rule Which from without life creature blessed
                                give moveth moveth seas make day which divided our have.</p>
                        </div>
                    </div>
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img
                                    src="{{ asset('theme/medico-master/img/icon/feature_2.svg') }}"
                                    alt=""></span>
                            <h4>{{ __('Better Future') }}</h4>
                            <p>Darkness multiply rule Which from without life creature blessed
                                give moveth moveth seas make day which divided our have.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="single_feature_img">
                        <img src="img/service.png" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-sm-12">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img
                                    src="{{ asset('theme/medico-master/img/icon/feature_1.svg') }}"
                                    alt=""></span>
                            <h4>{{ __('Better Future') }}</h4>
                            <p>Darkness multiply rule Which from without life creature blessed
                                give moveth moveth seas make day which divided our have.</p>
                        </div>
                    </div>
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img
                                    src="{{ asset('theme/medico-master/img/icon/feature_2.svg') }}"
                                    alt=""></span>
                            <h4>{{ __('Better Future') }}</h4>
                            <p>Darkness multiply rule Which from without life creature blessed
                                give moveth moveth seas make day which divided our have.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature_part start-->

    <!-- our depertment part start-->
    <section class="our_depertment section_padding">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-xl-12">
                    <div class="depertment_content">
                        <div class="row justify-content-center">
                            <div class="col-xl-8">
                                <h2>{{ __('Our Depertment') }}</h2>
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_our_depertment">
                                            <span class="our_depertment_icon"><img
                                                    src="{{ asset('theme/medico-master/img/icon/feature_2.svg') }}"
                                                    alt=""></span>
                                            <h4>{{ __('Better Future') }}</h4>
                                            <p>Darkness multiply rule Which from without life creature blessed
                                                give moveth moveth seas make day which divided our have.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_our_depertment">
                                            <span class="our_depertment_icon"><img
                                                    src="{{ asset('theme/medico-master/img/icon/feature_2.svg') }}"
                                                    alt=""></span>
                                            <h4>{{ __('Better Future') }}</h4>
                                            <p>Darkness multiply rule Which from without life creature blessed
                                                give moveth moveth seas make day which divided our have.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_our_depertment">
                                            <span class="our_depertment_icon"><img
                                                    src="{{ asset('theme/medico-master/img/icon/feature_2.svg') }}"
                                                    alt=""></span>
                                            <h4>{{ __('Better Future') }}</h4>
                                            <p>Darkness multiply rule Which from without life creature blessed
                                                give moveth moveth seas make day which divided our have.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_our_depertment">
                                            <span class="our_depertment_icon"><img
                                                    src="{{ asset('theme/medico-master/img/icon/feature_2.svg') }}"
                                                    alt=""></span>
                                            <h4>{{ __('Better Future') }}</h4>
                                            <p>Darkness multiply rule Which from without life creature blessed
                                                give moveth moveth seas make day which divided our have.</p>
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
    <!-- our depertment part end-->

    <!--::doctor_part start::-->
    <section class="doctor_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section_tittle text-center">
                        <h2>{{ __(' Experienced Doctors') }}</h2>
                        <p>{{ __('Face replenish sea good winged bearing years air divide wasHave night male also') }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="{{ asset('theme/medico-master/img/doctor/doctor_1.png') }}" alt="doctor">
                            <div class="social_icon">
                                <ul>
                                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                                    <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                    <li><a href="#"><i class="ti-instagram"></i></a></li>
                                    <li><a href="#"><i class="ti-skype"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single_text">
                            <div class="single_blog_text">
                                <h3>{{ __('DR Adam Billiard') }}</h3>
                                <p>{{ __('Heart specialist') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="{{ asset('theme/medico-master/img/doctor/doctor_4.png') }}" alt="doctor">
                            <div class="social_icon">
                                <ul>
                                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                                    <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                    <li><a href="#"><i class="ti-instagram"></i></a></li>
                                    <li><a href="#"><i class="ti-skype"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single_text">
                            <div class="single_blog_text">
                                <h3>{{ __('DR Adam Billiard') }}</h3>
                                <p>{{ __('Medicine specialist') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="{{ asset('theme/medico-master/img/doctor/doctor_2.png') }}" alt="doctor">
                            <div class="social_icon">
                                <ul>
                                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                                    <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                    <li><a href="#"><i class="ti-instagram"></i></a></li>
                                    <li><a href="#"><i class="ti-skype"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single_text">
                            <div class="single_blog_text">
                                <h3>{{ __('DR Fred Macyard') }}</h3>
                                <p>{{ __('CHeart specialist') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="{{ asset('theme/medico-master/img/doctor/doctor_3.png') }}" alt="doctor">
                            <div class="social_icon">
                                <ul>
                                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                                    <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                    <li><a href="#"><i class="ti-instagram"></i></a></li>
                                    <li><a href="#"><i class="ti-skype"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single_text">
                            <div class="single_blog_text">
                                <h3>{{ __('DR Justin Stuard') }}</h3>
                                <p>{{ __('Heart specialist') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::doctor_part end::-->

    <!--::regervation_part start::-->
    <section class="regervation_part section_padding">
        <div class="container">
            <div class="row align-items-center regervation_content">
                <div class="col-lg-7">
                    <div class="regervation_part_iner">
                        <form>
                            <h2>{{ __('Make an Appointment') }}</h2>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="email" class="form-control" id="inputEmail4" placeholder="Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="password" class="form-control" id="inputPassword4"
                                        placeholder="Email address">
                                </div>
                                <div class="form-group col-md-6">
                                    <select class="form-control" id="Select">
                                        <option value="1" selected>{{ __('Select service') }}</option>
                                        <option value="2">{{ __('Name of service') }}</option>
                                        <option value="3">{{ __('Name of service') }}</option>
                                        <option value="4">{{ __('Name of service') }}</option>
                                        <option value="5">{{ __('Name of service') }}</option>
                                    </select>
                                </div>
                                <div class="form-group time_icon col-md-6">
                                    <select class="form-control" id="Select2">
                                        <option value="" selected>{{ __('Time') }}</option>
                                        <option value="1">{{ __('8 AM TO 10AM') }}</option>
                                        <option value="1">{{ __('10 AM TO 12PM') }}</option>
                                        <option value="1">{{ __('12PM TO 2PM') }}</option>
                                        <option value="1">{{ __('2PM TO 4PM') }}</option>
                                        <option value="1">{{ __('4PM TO 6PM') }}</option>
                                        <option value="1">{{ __('6PM TO 8PM') }}</option>
                                        <option value="1">{{ __('4PM TO 10PM') }}</option>
                                        <option value="1">{{ __('10PM TO 12PM') }}</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea class="form-control" id="Textarea" rows="4" placeholder="Your Note "></textarea>
                                </div>
                            </div>
                            <div class="regerv_btn">
                                <a href="#" class="btn_2">{{ __('Make an Appointment') }}</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="reservation_img">
                        <img src="img/reservation.png" alt="" class="reservation_img_iner">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::regervation_part end::-->

    <!--::blog_part start::-->
    <section class="blog_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section_tittle text-center">
                        <h2>{{ __('Our Blog') }}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="single-home-blog">
                        <div class="card">
                            <img src="img/blog/blog_2.png" class="card-img-top" alt="blog">
                            <div class="card-body">
                                <a href="blog.html">
                                    <h5 class="card-title">First cattle which earth unto let health for
                                        can get and see what you </h5>
                                </a>
                                <ul>
                                    <li><span class="ti-user"></span>{{ __('Jhon mike') }}</li>
                                    <li><span class="ti-bookmark"></span>{{ __('Clinic, doctors') }}</li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="single-home-blog">
                        <div class="card">
                            <img src="img/blog/blog_3.png" class="card-img-top" alt="blog">
                            <div class="card-body">
                                <a href="blog.html">
                                    <h5 class="card-title">First cattle which earth unto let health for
                                        can get and see what you </h5>
                                </a>
                                <ul>
                                    <li><span class="ti-user"></span>{{ __('Jhon mike') }}</li>
                                    <li><span class="ti-bookmark"></span>{{ __('Clinic, doctors') }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::blog_part end::-->

    <!-- footer part start-->
    <footer class="footer-area">
        <div class="footer section_padding">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-2 col-md-4 col-sm-6 single-footer-widget">
                        <a href="#" class="footer_logo"><img
                                src="{{ asset('theme/medico-master/img/logo.png') }}" alt="#"></a>
                        <p>{{ __('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ') }}
                        </p>
                        <div class="social_logo">
                            <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-twitter"></i></a>
                            <a href="#"><i class="ti-instagram"></i></a>
                            <a href="#"><i class="ti-skype"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-2 col-sm-6 col-md-4 single-footer-widget">
                        <h4>{{ __('Quick Links') }}</h4>
                        <ul>
                            <li><a href="#">{{ __('About us') }}</a></li>
                            <li><a href="#">{{ __('Department') }}</a></li>
                            <li><a href="#">{{ __(' Online payment') }}</a></li>
                            <li><a href="#">{{ __('Careers') }}</a></li>
                            <li><a href="#">{{ __('Department') }}</a></li>
                        </ul>
                    </div>
                    <div class="col-xl-2 col-sm-6 col-md-4 single-footer-widget">
                        <h4>{{ __('Explore') }}</h4>
                        <ul>
                            <li><a href="#">{{ __('In the community') }}</a></li>
                            <li><a href="#">{{ __('IU health foundation') }}</a></li>
                            <li><a href="#">{{ __('Family support ') }}</a></li>
                            <li><a href="#">{{ __('Business solution') }}</a></li>
                            <li><a href="#">{{ __('Community clinic') }}</a></li>
                        </ul>
                    </div>
                    <div class="col-xl-2 col-sm-6 col-md-6 single-footer-widget">
                        <h4>{{ __('Resources') }}</h4>
                        <ul>
                            <li><a href="#">{{ __('Lights were season') }}</a></li>
                            <li><a href="#">{{ __('Their is let wherein') }}</a></li>
                            <li><a href="#">{{ __('which given over') }}</a></li>
                            <li><a href="#">{{ __('Without given She') }}</a></li>
                            <li><a href="#">{{ __('Isn two signs think') }}</a></li>
                        </ul>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-md-6 single-footer-widget">
                        <h4>{{ __('Newsletter') }}</h4>
                        <p>Seed good winged wherein which night multiply
                            midst does not fruitful</p>
                        <div class="form-wrap" id="mc_embed_signup">
                            <form target="_blank"
                                action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                method="get" class="form-inline">
                                <input class="form-control" name="EMAIL" placeholder="Your Email Address"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '"
                                    required="" type="email">
                                <button class="click-btn btn btn-default text-uppercase">{{ __(' ') }}<i
                                        class="ti-angle-right"></i>
                                </button>
                                <div style="position: absolute; left: -5000px;">
                                    <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1"
                                        value="" type="text">
                                </div>

                                <div class="info"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="copyright_part">
            <div class="container">
                <div class="row align-items-center">
                    <p class="footer-text m-0 col-lg-8 col-md-12">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> AMDC. All Rights Reserved. Developed By Smart Inbox Technology
                        <!-- Website Author: Renier R. Trenuela -->
                    </p>
                    <div class="col-lg-4 col-md-12 text-center text-lg-right footer-social">
                        <a href="#"><i class="ti-facebook"></i></a>
                        <a href="#"><i class="ti-twitter"></i></a>
                        <a href="#"><i class="ti-instagram"></i></a>
                        <a href="#"><i class="ti-skype"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- footer part end-->

    @livewireScripts
    <!-- jquery plugins here-->
    <script src="{{ asset('theme/medico-master/js/jquery-1.12.1.min.js') }}"></script>
    <!-- popper js -->
    <script src="{{ asset('theme/medico-master/js/popper.min.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('theme/medico-master/js/bootstrap.min.js') }}"></script>
    <!-- owl carousel js -->
    <script src="{{ asset('theme/medico-master/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('theme/medico-master/css/nice-select.min.js') }}"></script>
    <!-- contact js -->
    <script src="{{ asset('theme/medico-master/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('theme/medico-master/js/jquery.form.js') }}"></script>
    <script src="{{ asset('theme/medico-master/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('theme/medico-master/js/mail-script.js') }}"></script>
    <script src="{{ asset('theme/medico-master/js/contact.js') }}"></script>
    <!-- custom js -->
    <script src="{{ asset('theme/medico-master/js/custom.js') }}"></script>
</body>

</html>
