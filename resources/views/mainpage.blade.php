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
                                class="d-none d-md-inline-block">bprofashionart@gmail.com</span></a>
                        <span class="mx-md-2 d-inline-block"></span>
                        <a href="#" class="text-white"><span class="mr-2 text-white icon-phone"></span> <span
                                class="d-none d-md-inline-block">09 788 518075</span></a>
                                <a href="{{ route('login') }}" class="text-white"> <span class="log-btn">Login</span></a>


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
                                <li><a href="" class="nav-link">Contact us</a></li>
                                <li><a class="nav-link" data-toggle="modal" data-target="#myModal">Register</a></li>
                                
                            </ul>
                        </nav>
                    </div>

                    
                        <div class="site-logo" style="position:relative;left:28%" >
                             <a href="{{ url('/') }}" class="text-black"><span class="text-primary"><img class="artbotlogo" style="width:60px;height:auto;" src="{{ asset ('img/logo/artbotlogo.png')}}"></a>
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
                 <div class="container">
                    <div class="row align-items-center justify-content-center text-center">
                        <div class="col-md-12 col-lg-7">
                            <h1 data-aos="fade-up" data-aos-delay="">Fashion &amp; Art School</h1>
                            <p class="mb-5" data-aos="fade-up" data-aos-delay="100">Fashion Design , Styling , Pattern Making or Fashion Marketing </p>
                            <p data-aos="fade-up" data-aos-delay="200"><a href="#"
                                    class="btn btn-outline-white border-w-2 btn-md">View More</a></p>
                        </div>
                    </div>
                </div> 

            </div>

            <div class="site-section-cover img-bg-section"
                style="background-image: url({{ URL::asset('frontend/images/slide2.png') }}); ">
                 <div class="container">
                    <div class="row align-items-center justify-content-center text-center">
                        <div class="col-md-12 col-lg-8">
                            <h1 data-aos="fade-up" data-aos-delay="">ArtBot Myanmar</h1>
                            <p class="mb-5" data-aos="fade-up" data-aos-delay="100">Lorem ipsum dolor sit amet,
                                consectetur adipisicing elit. Est odit dolorum</p>
                            <p data-aos="fade-up" data-aos-delay="200"><a href="#"
                                    class="btn btn-outline-white border-w-2 btn-md">View More</a></p>
                        </div>
                    </div>
                </div> 

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
                            <br><br><br><br><br><br>
                            <h2 class="mb-3 text-black">About us</h2>
                            <p style="text-align:justify;">B-Pro is one of the Fashion School in Myanmar. Whether you are interested in Fashion Design, Styling, Pattern Making or Fashion Marketing, we provide you to fit your Passion.</p>

                            <ul class="ul-check primary list-unstyled mt-5">
                              <br><br>
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
                            <br><br><br><br><br>
                            <h2 class="mb-3 text-black">ArtBot Myanmar</h2>
                            <p style="text-align:justify;">ArtBot is one of the Art & Craft School in Myanmar. We create opportunies for youth to study art and craft in Myanmar by international standard. We focus on career and offer high quality external experiences for students.</p>

                            <p style="text-align:justify;">We support our students to win oppotunies in the creative industries. After certification in ArtBot, students can start a small business in related carrier.</p>

                            <ul class="ul-check primary list-unstyled mt-5">
                               <br><br>
                            </ul>

                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="site-section bg-light">
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
        </div> 

        <div class="site-section bg-light" id="contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center mb-5" data-aos="fade-up" data-aos-delay="">
                        <div class="block-heading-1">
                           
                            <h2>Our Location</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3818.8103100221824!2d96.12637361434612!3d16.83576392291184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1950d7f6de271%3A0xc4e0f5728a8ff79c!2sB-Pro%20Fashion%20Design%20School!5e0!3m2!1sen!2smm!4v1610395528275!5m2!1sen!2smm" width="100%" height="450" frameborder="0" style="border:0;border-radius:5px;box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
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
                        <a href="https://www.facebook.com/bprofashionandartschool" target=”_blank” class="smoothscroll pl-0 pr-3"><span class="icon-facebook"></span></a>
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
<!--     <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <p class="modal-title"style="font-size:22px;color:black">Student Information Form</p>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
            <form method="post" action=""class=" mb-4 card-body mx-10">
	    	
            @csrf
           @method("POST")
            <div class="row">
                <div class="form-group col-md-5">
                <label for="class" class="text-dark"><strong>Choose Course</strong></label>
                    <div class="col-md-12">
                        <select name="course" class="custom-select custom-select-md text-dark @error('course') is-invalid @enderror" value="{{old('course')}}">
                          @foreach($batch as $row)
                        <option value="{{$row->id}}" @if($row->id == old('course')) selected @endif>{{$row->name}}</option>
                        @endforeach

                        @error('course')
                            <span class="invalid-feedback alert-danger" role="alert">
                              <strong>{{ $message }}</strong>
                              </span>
                        @enderror
                        </select>
                    </div>
                </div>
                
                <div class="form-group float-right col-md-5">
                      <label for="accept_date" class="text-dark"><strong>Accept Date</strong></label>
                          <div class="col-md-12">
                              <input type="date" class="form-control @error('accept_date') is-invalid @enderror" name="accept_date" value="{{old('accept_date')}}">

                              @error('accept_date')
                                <span class="invalid-feedback alert-danger" role="alert">
                                  <strong>{{ $message }}</strong>
                                  </span>
                            @enderror
                          </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-5">
                  <label for="name" class="text-dark"><strong>Name</strong></label>
                      <div class="col-md-12">
                          <input type="text" class="form-control text-dark @error('name') is-invalid @enderror" name="name" value="{{old('name')}}">

                          @error('name')
                            <span class="invalid-feedback alert-danger" role="alert">
                              <strong>{{ $message }}</strong>
                              </span>
                        @enderror
                      </div>
                </div>
                <div class="form-group float-right col-md-5">
                      <label for="dob" class="text-dark"><strong>Date of Birth</strong></label>
                          <div class="col-md-12">
                              <input type="date" class="form-control text-dark @error('dob') is-invalid @enderror" name="dob" value="{{old('dob')}}">

                              @error('dob')
                                <span class="invalid-feedback alert-danger" role="alert">
                                  <strong>{{ $message }}</strong>
                                  </span>
                            @enderror
                          </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-5">
                  <label for="age" class="text-dark"><strong>Age</strong></label>
                      <div class="col-md-12">
                          <input type="number" class="form-control text-dark @error('age') is-invalid @enderror" name="age" value="{{old('age')}}">

                          @error('age')
                            <span class="invalid-feedback alert-danger" role="alert">
                              <strong>{{ $message }}</strong>
                              </span>
                        @enderror									
                      </div>
                </div>			
                <div class="form-group float-right col-md-5">
                    <label for="phone" class="text-dark"><strong>Phone No</strong></label>
                        <div class="col-md-12">
                        <input type="number" class="form-control text-dark @error('phone') is-invalid @enderror" name="phone" value="{{old('phone')}}">

                        @error('phone')
                            <span class="invalid-feedback alert-danger" role="alert">
                              <strong>{{ $message }}</strong>
                              </span>
                        @enderror
                        </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-5">
                <label for="email" class="text-dark"><strong>Email</strong></label>
                    <div class="col-md-12">
                        <input type="email" class="form-control text-dark @error('email') is-invalid @enderror" name="email" value="{{old('email')}}">

                        @error('email')
                            <span class="invalid-feedback alert-danger" role="alert">
                              <strong>{{ $message }}</strong>
                              </span>
                        @enderror	
                    </div>

                </div>
                <div class="form-group float-right col-md-5">
                    <label for="education" class="text-dark"><strong>Education</strong></label>
                        <div class="col-md-12">
                            <input type="text" class="form-control text-dark @error('education') is-invalid @enderror" name="education" value="{{old('education')}}">

                            @error('education')
                                <span class="invalid-feedback alert-danger" role="alert">
                                  <strong>{{ $message }}</strong>
                                  </span>
                            @enderror
                        </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-5">
                <label for="address" class="text-dark"><strong>Address</strong></label>
                    <div class="col-md-12">
                        <textarea class="form-control text-dark @error('address') is-invalid @enderror" name="address" rows="2" value="{{old('address')}}">{{old('address')}}</textarea>

                        @error('address')
                            <span class="invalid-feedback alert-danger" role="alert">
                              <strong>{{ $message }}</strong>
                              </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group float-right col-md-5">
                    <label for="objective" class="text-dark"><strong>Objective of join this class</strong></label>
                        <div class="col-md-12">
                            <textarea class="form-control text-dark @error('objective') is-invalid @enderror" name="objective" value="{{old('objective')}}" rows="2">{{old('objective')}}</textarea>

                            @error('objective')
                                <span class="invalid-feedback alert-danger" role="alert">
                                  <strong>{{ $message }}</strong>
                                  </span>
                            @enderror
                        </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-5">
                <label for="comment" class="text-dark"><strong>Comment Box</strong></label>
                    <div class="col-md-12">
                        <textarea class="form-control text-dark @error('comment') is-invalid @enderror" name="comment" value="{{old('comment')}}" rows="3">{{old('comment')}}</textarea>

                        @error('comment')
                            <span class="invalid-feedback alert-danger" role="alert">
                              <strong>{{ $message }}</strong>
                              </span>
                        @enderror
                    </div>
                </div>
                <fieldset class="form-group col-md-5">
                    <label for="bpro" class="text-dark mb-4"><strong>How do you Know B Pro</strong></label>
                    <div class="col">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" name="bpro[]" value="Facebook" >
                          <label class="form-check-label" for="inlineCheckbox1" class="text-dark">Facebook</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" name="bpro[]" value="Friends" >
                          <label class="form-check-label" for="inlineCheckbox2" class="text-dark">Friends</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" name="bpro[]" value="Other" >
                          <label class="form-check-label" for="inlineCheckbox3" class="text-dark">Other</label>
                        </div>

                    </div>
                </fieldset>	
            </div>
            
              <div class="form-group row my-3">
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Create Student</button>
                  </div>
              </div>
    </form>
            </div>
            
        </div>
        </div>
    </div> -->

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
