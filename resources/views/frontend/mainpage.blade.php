<!doctype html>
<html lang="en">

<head>
    <title>B-Pro Fashion & Art School</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{URL::asset('img/logo/testlogo.png')}}">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,700|Oswald:400,700" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('frontend/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/aos.css') }}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <div class="site-wrap" id="home-section">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>


        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <a href="#" class="text-white"><span class="mr-2 text-white icon-envelope-open-o"></span> <span
                                class="d-none d-md-inline-block">info@bprofashionandartschool.com</span></a>
                        <span class="mx-md-2 d-inline-block"></span>
                        <a href="#" class="text-white"><span class="mr-2 text-white icon-phone"></span> <span
                                class="d-none d-md-inline-block">09 788 518075</span></a>


                        <div class="float-right">

                            <a href="{{ route('login') }}" class="text-white"><span
                                    class="d-none d-md-inline-block">{{ __('Login') }}</span></a>
                            <span class="mx-md-2 d-inline-block"></span>
                            <a href="#" class="text-white"><span
                                    class="d-none d-md-inline-block">Register</span></a>

                        </div>

                    </div>

                </div>

            </div>
        </div>

        <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

            <div class="container">
                <div class="row align-items-center position-relative">

                   
                        <div class="site-logo">
                             <a href="{{ url('/') }}" class="text-black"><span class="text-primary"><img style="width:150px;height:auto;float:left;" src="{{ asset ('img/logo/mainlogo.png')}}"></a>
                        </div>
                   
                    <div class="col-8">
                        <nav class="site-navigation text-right ml-auto " role="navigation">

                            <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                                <li><a href="#home-section" class="nav-link">Home</a></li>
                                <li><a href="#services-section" class="nav-link">About</a></li>
                                <li><a href="#contact-section" class="nav-link">Contact us</a></li>
                            </ul>
                        </nav>
                    </div>

                    
                        <div class="site-logo" style="position:relative;left:28%" >
                             <a href="{{ url('/') }}" class="text-black"><span class="text-primary"><img style="width:60px;height:auto;" src="{{ asset ('img/logo/artbotlogo.png')}}"></a>
                        </div>
                    

                    <div class="toggle-button d-inline-block d-lg-none"><a href="#"
                            class="site-menu-toggle py-5 js-menu-toggle text-black"><span
                                class="icon-menu h3"></span></a></div>

                </div>
            </div>

        </header>

        <div class="owl-carousel slide-one-item">




            <div class="site-section-cover img-bg-section"
                style="background-image: url({{ URL::asset('frontend/images/slide1.png') }}); ">
                {{-- <div class="container">
                    <div class="row align-items-center justify-content-center text-center">
                        <div class="col-md-12 col-lg-7">
                            <h1 data-aos="fade-up" data-aos-delay="">Fashion &amp; Art School</h1>
                            <p class="mb-5" data-aos="fade-up" data-aos-delay="100">Fashion Design , Styling , Pattern Making or Fashion Marketing </p>
                            <p data-aos="fade-up" data-aos-delay="200"><a href="#"
                                    class="btn btn-outline-white border-w-2 btn-md">View More</a></p>
                        </div>
                    </div>
                </div> --}}

            </div>

            <div class="site-section-cover img-bg-section"
                style="background-image: url({{ URL::asset('frontend/images/slide2.png') }}); ">
                {{-- <div class="container">
                    <div class="row align-items-center justify-content-center text-center">
                        <div class="col-md-12 col-lg-8">
                            <h1 data-aos="fade-up" data-aos-delay="">ArtBot Myanmar</h1>
                            <p class="mb-5" data-aos="fade-up" data-aos-delay="100">Lorem ipsum dolor sit amet,
                                consectetur adipisicing elit. Est odit dolorum</p>
                            <p data-aos="fade-up" data-aos-delay="200"><a href="#"
                                    class="btn btn-outline-white border-w-2 btn-md">View More</a></p>
                        </div>
                    </div>
                </div> --}}

            </div>


        </div>

        <div class="site-section">
            <div class="block__73694 mb-2" id="services-section">
                <div class="container">
                    <div class="row d-flex no-gutters align-items-stretch">

                        <div class="col-12 col-lg-6 block__73422"
                            style="background-image: url({{ URL::asset('frontend/images/aboutus.png') }});"
                            data-aos="fade-right" data-aos-delay="">
                        </div>



                        <div class="col-lg-5 ml-auto p-lg-5 mt-4 mt-lg-0" data-aos="fade-left" data-aos-delay="">
                            <h2 class="mb-3 text-black">About us</h2>
                            <p>B-Pro is one of the Fashion School in Myanmar . Whether you are interested in Fashion Design , Styling , Pattern Making or Fashion Marketing , we provide you to fit your Passion .</p>

                            <ul class="ul-check primary list-unstyled mt-5">
                                <li>Lorem ipsum dolor.</li>
                                <li>Quod, amet. Provident.</li>
                                <li>Quo, adipisci, quis.</li>
                                <li>Cumque perspiciatis, blanditiis?</li>
                            </ul>


                        </div>

                    </div>
                </div>
            </div>


            <div class="block__73694">
                <div class="container">
                    <div class="row d-flex no-gutters align-items-stretch">

                        <div class="col-12 col-lg-6 block__73422 order-lg-2"
                            style="background-image: url({{ URL::asset('frontend/images/artbot.png') }});"
                            data-aos="fade-left" data-aos-delay="">
                        </div>



                        <div class="col-lg-5 mr-auto p-lg-5 mt-4 mt-lg-0 order-lg-1" data-aos="fade-right"
                            data-aos-delay="">
                            <h2 class="mb-3 text-black">ArtBot Myanmar</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus id dignissimos nemo
                                minus perspiciatis ullam itaque voluptas iure vero, nesciunt unde odit aspernatur
                                distinctio, maiores facere officiis. Cum, esse, iusto?</p>

                            <p>Minus perspiciatis ullam itaque voluptas iure vero, nesciunt unde odit aspernatur
                                distinctio, maiores facere officiis. Cum, esse, iusto?</p>

                            <ul class="ul-check primary list-unstyled mt-5">
                                <li>Lorem ipsum dolor.</li>
                                <li>Quod, amet. Provident.</li>
                                <li>Quo, adipisci, quis.</li>
                                <li>Cumque perspiciatis, blanditiis?</li>
                            </ul>

                        </div>

                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="site-section bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="">
                        <div class="block__35630">
                            <div class="icon mb-3">
                                <span class="flaticon-mining"></span>
                            </div>
                            <h3 class="mb-3">Surface Mining</h3>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur dolores voluptas
                            obcaecati quo consequuntur mollitia facilis.
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="block__35630">
                            <div class="icon mb-3">
                                <span class="flaticon-gold-ingots"></span>
                            </div>
                            <h3 class="mb-3">Gold Nuggets</h3>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur dolores voluptas
                            obcaecati quo consequuntur mollitia facilis.
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="block__35630">
                            <div class="icon mb-3">
                                <span class="flaticon-wagon"></span>
                            </div>
                            <h3 class="mb-3">Soil Carrier</h3>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur dolores voluptas
                            obcaecati quo consequuntur mollitia facilis.
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="">
                        <div class="block__35630">
                            <div class="icon mb-3">
                                <span class="flaticon-refinery"></span>
                            </div>
                            <h3 class="mb-3">Gold Refinery</h3>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur dolores voluptas
                            obcaecati quo consequuntur mollitia facilis.
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="block__35630">
                            <div class="icon mb-3">
                                <span class="flaticon-blacksmith"></span>
                            </div>
                            <h3 class="mb-3">Anvil Blacksmith</h3>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur dolores voluptas
                            obcaecati quo consequuntur mollitia facilis.
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="block__35630">
                            <div class="icon mb-3">
                                <span class="flaticon-crucible"></span>
                            </div>
                            <h3 class="mb-3">Gold Melt Crucible</h3>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur dolores voluptas
                            obcaecati quo consequuntur mollitia facilis.
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        <div class="site-section bg-light" id="contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center mb-5" data-aos="fade-up" data-aos-delay="">
                        <div class="block-heading-1">
                           
                            <h2>Contact us</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="100">
                        <form action="#" method="post">
                            <div class="form-group row">
                                <div class="col-md-6 mb-4 mb-lg-0">
                                    <input type="text" class="form-control" placeholder="First name">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Last name">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input type="text" class="form-control" placeholder="Email address">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <textarea name="" id="" class="form-control" placeholder="Write your message."
                                        cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6 ml-auto">
                                    <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5"
                                        value="Send Message">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-4 ml-auto" data-aos="fade-up" data-aos-delay="200">
                        <h2 class="text-black">Need to know more on details. Get In Touch</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, distinctio! Harum
                            quibusdam nisi, illum nulla aspernatur aut quidem aperiam, quae non tempora recusandae
                            voluptatibus fugit impedit.</p>
                        {{-- <p><a href="#" class="btn btn-primary text-white">Get Started</a></p> --}}
                    </div>
                </div>
            </div>
        </div>


        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-8">
                                <h2 class="footer-heading mb-4">About Us</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque facere laudantium
                                    magnam voluptatum autem. Amet aliquid nesciunt veritatis aliquam.</p>
                            </div>
                            <div class="col-md-4 ml-auto">
                                <h2 class="footer-heading mb-4">Features</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Press Releases</a></li>
                                    <li><a href="#">Testimonials</a></li>
                                    <li><a href="#">Terms of Service</a></li>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 ml-auto">

                        <div class="mb-5">
                            <h2 class="footer-heading mb-4">Subscribe to Newsletter</h2>
                            <form action="#" method="post" class="footer-suscribe-form">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control border-secondary text-white bg-transparent"
                                        placeholder="Enter Email" aria-label="Enter Email"
                                        aria-describedby="button-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary text-white" type="button"
                                            id="button-addon2">Subscribe</button>
                                    </div>
                                </div>
                        </div>


                        <h2 class="footer-heading mb-4">Follow Us</h2>
                        <a href="#about-section" class="smoothscroll pl-0 pr-3"><span class="icon-facebook"></span></a>
                        <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                        <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                        <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                        </form>
                    </div>
                </div>
                <div class="row pt-5 mt-5 text-center">
                    <div class="col-md-12">
                        <div class="border-top pt-5">
                            <p class="copyright"><small>

                                    Copyright &copy;<script>
                                        document.write(new Date().getFullYear());

                                    </script> All rights reserved.</a>

                                </small></p>
                        </div>
                    </div>

                </div>
            </div>
        </footer>

    </div>

    <script src="{{ asset('frontend/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('frontend/js/aos.js') }}"></script>

    <script src="{{ asset('frontend/js/main.js') }}"></script>



</body>


</html>
