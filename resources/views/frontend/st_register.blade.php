<!doctype html>
<html lang="en">

<head>
    <title>B-Pro Fashion & Art School</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{ URL::asset('img/logo/testlogo.png') }}">
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
    <style>
        .stu_title{
            padding-bottom: 20px;
            text-align: center;
            color: orange
        }
        .row{
            width: 100%;
        }
        .stu {
            width: 100%;
            margin-top:5%;
            margin-left:10%;
            margin-right:6%;
            margin-bottom: 5%;
            padding-top: 30px;
            padding-right: 60px;
            padding-bottom: 30px;
            padding-left: 60px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24); 
            background: #fafafa;
            }
    </style>

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
                                class="d-none d-md-inline-block">bprofashionart@gmail.com</span></a>
                        <span class="mx-md-2 d-inline-block"></span>
                        <a href="#" class="text-white"><span class="mr-2 text-white icon-phone"></span> <span
                                class="d-none d-md-inline-block">09 788 518075</span></a>
                        <a href="{{ route('login') }}" class="text-white"> <span class="log-btn">Login</span></a>


                        <div class="float-right">

                            <a href="{{ route('login') }}" class="text-white"><span
                                    class="d-none d-md-inline-block">{{ __('Login') }}</span></a>
                            <span class="mx-md-2 d-inline-block"></span>
                            {{-- <a href="#" class="text-white"><span
                                    class="d-none d-md-inline-block">Register</span></a> --}}

                        </div>

                    </div>

                </div>

            </div>
        </div>

        <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

            <div class="container">
                <div class="row align-items-center position-relative">


                    <div class="site-logo">
                        <a href="{{ url('/') }}" class="text-black"><span class="text-primary"><img
                                    style="width:150px;height:auto;float:left;"
                                    src="{{ asset('img/logo/mainlogo.png') }}"></a>
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


                    <div class="site-logo" style="position:relative;left:28%">
                        <a href="{{ url('/') }}" class="text-black"><span class="text-primary"><img
                                    class="artbotlogo" style="width:60px;height:auto;"
                                    src="{{ asset('img/logo/artbotlogo.png') }}"></a>
                    </div>


                    <div class="toggle-button d-inline-block d-lg-none"><a href="#"
                            class="site-menu-toggle py-5 js-menu-toggle text-black"><span
                                class="icon-menu h3"></span></a></div>

                </div>
            </div>

        </header>
      
        <div class="row">
           
            <form class="stu">
                <h4 class="stu_title">Student Registration Form</h4>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Choose Course</label>
                    <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                      </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputPassword4">Accept Date</label>
                    <input type="date" class="form-control">
                  </div>
                </div>
                <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputAddress">Name</label>
                  <input type="text" class="form-control" id="inputAddress">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputAddress2">Date of Birth</label>
                  <input type="date" class="form-control" >
                </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="inputCity">Age</label>
                    <input type="number" class="form-control" id="inputCity">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputState">Phone</label>
                    <input type="number" class="form-control" id="inputCity">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputZip">Email</label>
                    <input type="email" class="form-control" id="inputZip">
                  </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="inputCity">Education</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputCity">Address</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputCity">Objective of joining this class</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">Comment Box</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="form-group col-md-1">
                          </div>
                    <div class="form-group col-md-4">
                        <label for="inputCity">How do you Know B Pro</label>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Facebook
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Friends
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Other
                            </label>
                          </div>
                         
                    </div>
                   
                </div>
              
               
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>

        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 ml-auto">
                        <h2 class="footer-heading mb-4">Contacts</h2>
                        <ul style="list-style-type:none;color:#fff;">
                            <li>Bpro Fashion & Art School</li>
                            <li style="font-size: 13px;">No. (6C/6E), Kan Road Condo, Hlaing Township,
                                Yangon, Myanmar</li>
                            <li style="font-size: 13px;"><span><i class="fa fa-mobile"></i></span>09 788518075</li>
                            <li style="font-size: 13px;">bprofashionart@gmail.com</li>
                        </ul>
                    </div>
                    <div class="col-md-4 ml-auto">
                        <h2 class="footer-heading mb-4"><br></h2>
                        <ul style="list-style-type:none;color:#fff;">
                            <li>ArtBot Myanmar Art Academy</li>
                            <li style="font-size: 13px;">No. (6C/6E), Kan Road Condo, Hlaing Township,
                                Yangon, Myanmar</li>
                            <li style="font-size: 13px;">09 788518075</li>
                            <li style="font-size: 13px;">artbotmyanmar@gmail.com</li>
                        </ul>
                    </div>
                    <div class="col-md-4 ml-auto">
                        <h2 class="footer-heading mb-4">Follow Us</h2>
                        <a href="https://www.facebook.com/bprofashionandartschool" target=”_blank”
                            class="smoothscroll pl-0 pr-3"><span class="icon-facebook"></span></a>
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
