
<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="{{ app()->getLocale() }}"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang="{{ app()->getLocale() }}"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang="{{ app()->getLocale() }}"> <![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="{{ app()->getLocale() }}"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>IdealRemit - Easy money flow</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700|Work+Sans:400,700" rel="stylesheet">

    <!-- Link Bootstrap 4 style and Custom style -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('fonts/css/fontawesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('css/idealremit.css') }}" rel="stylesheet">
</head>
<body>
<!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!-- Startig mobile Menu-->
<div class="relative">
    <div class="ideal-remit-mobile-nav">
        <button class="close-mobile-navbar">&#215;</button>
        <div class="mt-5">
            <a href="{{ route('register') }}" class="mobile-sign-up-btn waves-effect waves-light" id="custom-html-alert">Sign up</a>
            <a href="#" class="mobile-login-up-btn">Login</a>
        </div>
        <div class="ideal-remit-mobile-menu-nav img-is-responsive">
            <a href="#"><img src="assets/img/medium-default-avatar.png"></a>
            <p>Logged in as: </p>
            <button class="logged-in-status-name-nav">Neon Emmanuel</button>
        </div>


        <div class="ideal-remit-mobile-nav-2">
            <h2>Profile Links</h2>
            <a href="#">Payment History</a>
            <a href="#">Edit Profile</a>
        </div>

        <div class="ideal-remit-mobile-nav-2">
            <h2>Quick Links</h2>
            <a href="#">How it works</a>
            <a href="#">Discover</a>
            <a href="#">Help</a>
        </div>

        <div class="ideal-remit-mobile-nav-2">
            <a href="#"><i class="fas fa-power-off"></i>Logout</a>
        </div>
    </div>
    <div class="starting-mobile-menu">
        <div class="ideal-remit-mobile-menu">
            <div class="container">
                <div class="row">
                    <div class="col-2 col-sm-2">
                        <div class="ideal-remit-mobile-menu-third">
                            <button class="menu-toggler" id="hamburger-toggler">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                    </div>
                    <div class="col-8 col-sm-8">
                        <div class="ideal-remit-mobile-menu-two text-center">
                            <a href="#">IDeal Remit</a>
                        </div>
                    </div>
                    <div class="col-2 col-sm-2">

                        <!--	<div class="ideal-remit-mobile-menu-third img-is-responsive">
                                <a href="#"><img src="assets/img/medium-default-avatar.png"></a>
                                <span class="logged-in-status-name">Neon Emmanuel</span>
                            </div>-->

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Startig PC Menu-->
<div class="idealremit-menu-outter">
    <div class="container">
        <div class="idealremit-menu">
            <div class="row">
                <div class="col-md-2 relative">
                    <a href="#" class="logo-header-pc absolute"><img src="{{url('img/idealremit-logo.png')}}"></a>
                </div>
                <div class="col-md-7">
                    <div class="ideal-remit-menu-2">
                        <a href="#"> How it works</a>
                        <a href="#">Discover</a>
                        <a href="#">Help <i class="fas fa-external-link-alt"></i></a>
                        <a href="{{ route('register') }}" class="idealremit-menu-signup waves-effect waves-dark" id="custom-html-alert" >Sign up</a>
                    </div>
                </div>
                <div class="col-md-3 text-center">


                    <div class="ideal-remit-menu-3">
                        <a href="#">Help</a>
                        <a href="#">Login</a>
                    </div>

                    <!--
                    <div class="user-logged-in-p-image relative">
                        <div class="ideal-remit-mobile-menu-third img-is-responsive">
                                <a href="#"><img src="assets/img/medium-default-avatar.png"></a>
                                <span class="logged-in-status-name">Neon Emmanuel</span>
                        </div>
                    </div>
                    -->

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Strating into section-->
<div class="ideal-remit-intro-section">
    <div class="bg-pattern"></div>
    <div class="bg-credit-card">
        <i class="fa fa-credit-card"></i>
    </div>
    <div class="cta-btn">
        <h1>A Better &amp; <b>SECURE</b> Way To Send Money.</h1>
        <a href="#"><button class="cta-btn-get-started">Get started <i class="fa fa-chevron-right"></i></button></a>
    </div>
</div>

<!--Why Choose us-->
<div class="container">
    <div class="ideal-remit-why">
        <div class="why-choose-us-text-intro text-center"><h2>Why choose IdealRemit?</h2></div>
        <div class="ideal-remit-why-item-firsthalf row">
            <div class="col-md-6">
                <div class="ideal-remit-why-item-outter">
                    <div class="ideal-remit-why-item">
                        <img src="{{url('img/cash-dispenser-2294_d060afbc-d9ee-45d7-ba23-072c34445dc7.svg')}}">
                    </div>
                    <div class="ideal-remit-why-item-meta">
                        <h3>Low cost</h3>
                        <p> Our low fees and exchange rates are shown upfront </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="ideal-remit-why-item-outter">
                    <div class="ideal-remit-why-item">
                        <img src="{{url('img/spacecraft-3240_6a607206-a24b-4dbf-90db-0994df49b8c2.svg')}}">
                    </div>
                    <div class="ideal-remit-why-item-meta">
                        <h3>Fast</h3>
                        <p> Get your money to family and friends in minutes</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="ideal-remit-why-item-outter">
                    <div class="ideal-remit-why-item">
                        <img src="{{url('img/tv-screen-1796_2a000794-9b32-4376-91c1-7facc5c2c725.svg')}}">
                    </div>
                    <div class="ideal-remit-why-item-meta">
                        <h3>Simple</h3>
                        <p> It’s easy to use and we’re here to help round the clock </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="ideal-remit-why-item-outter">
                    <div class="ideal-remit-why-item">
                        <img src="{{url('img/in-love-2804_061ed8db-75bd-4938-9996-42e987572e9f.svg')}}">
                    </div>
                    <div class="ideal-remit-why-item-meta">
                        <h3>Trusted</h3>
                        <p>Believe the hype: 69,000+ 5 star reviews </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="ideal-remit-safe-notes">
    <div class="container">
        <div class="row">
            <div class="col-md-6 why-us-bg-imaged">
                <ul class='circle-container'>
                    <div class="rolling-image img-is-responsive">
                        <img src='{{url('img/avatar80_1.jpg')}}'>
                    </div>
                    <div class="rolling-image img-is-responsive">
                        <img src='{{url('img/avatar80_2.jpg')}}'>
                    </div>
                    <div class="rolling-image img-is-responsive">
                        <img src='{{url('img/avatar80_3.jpg')}}' class="img-is-responsive">
                    </div>
                    <div class="rolling-image img-is-responsive">
                        <img src='{{url('img/avatar80_4.jpg')}}'>
                    </div>
                    <div class="rolling-image img-is-responsive">
                        <img src='{{url('img/avatar80_5.jpg')}}'>
                    </div>
                    <div class="rolling-image img-is-responsive">
                        <img src='{{url('img/avatar80_6.jpg')}}'>
                    </div>
                    <div class="rolling-image img-is-responsive">
                        <img src='{{url('img/avatar80_7.jpg')}}' class="img-is-responsive">
                    </div>
                    <div class="rolling-image img-is-responsive">
                        <img src='{{url('img/avatar80_8.jpg')}}' class="img-is-responsive">
                    </div>
                </ul>
            </div>
            <div class="col-md-6">
                <div class="ideal-remit-safe-notes-meta">
                    <div class="ideal-remit-safe-notes-meta-inner">
                        <h2>Safe and Secure</h2>
                        <p>Your money’s in safe hands with us</p>
                    </div>

                    <p>Our industry-leading technology protects your money and guarantees it arrives safely every time. We’re licensed by government regulators around the world, so you can be sure we meet the highest possible standards.</p>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="ideal-remit-temtimonials-section">
    <div class="container">
        <div class="text-center">
            <h2> Customer <b>Testimonials </b></h2>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Carousel indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <!-- Wrapper for carousel items -->
                    <div class="carousel-inner">
                        <div class="item carousel-item active">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="testimonial">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante.</p>
                                    </div>
                                    <div class="media">
                                        <div class="media-left d-flex mr-3">
                                            <img src="{{url('img/avatar80_1.jpg')}}" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="overview">
                                                <div class="name"><b>Paula Wilson</b></div>
                                                <div class="details">United state</div>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="testimonial">
                                        <p>Vestibulum quis quam ut magna consequat faucibu. Eget mi suscipit tincidunt. Utmtc tempus dictum. Pellentesque virra. Quis quam ut magna consequat faucibus quam.</p>
                                    </div>
                                    <div class="media">
                                        <div class="media-left d-flex mr-3">
                                            <img src="{{('img/avatar80_2.jpg')}}" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="overview">
                                                <div class="name"><b>Antonio Moreno</b></div>
                                                <div class="details">Italy</div>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item carousel-item">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="testimonial">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante.</p>
                                    </div>
                                    <div class="media">
                                        <div class="media-left d-flex mr-3">
                                            <img src="{{url('img/avatar80_3.jpg')}}" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="overview">
                                                <div class="name"><b>Michael Holz</b></div>
                                                <div class="details">Cameron</div>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="testimonial">
                                        <p>Vestibulum quis quam ut magna consequat faucibu. Eget mi suscipit tincidunt. Utmtc tempus dictum. Pellentesque virra. Quis quam ut magna consequat faucibus quam.</p>
                                    </div>
                                    <div class="media">
                                        <div class="media-left d-flex mr-3">
                                            <img src="{{url('img/avatar80_4.jpg')}}" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="overview">
                                                <div class="name"><b>Mary Saveley</b></div>
                                                <div class="details">Kenya</div>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item carousel-item">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="testimonial">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante.</p>
                                    </div>
                                    <div class="media">
                                        <div class="media-left d-flex mr-3">
                                            <img src="{{url('img/avatar80_6.jpg')}}" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="overview">
                                                <div class="name"><b>Martin Sommer</b></div>
                                                <div class="details">Russia</div>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="testimonial">
                                        <p>Vestibulum quis quam ut magna consequat faucibu. Eget mi suscipit tincidunt. Utmtc tempus dictum. Pellentesque virra. Quis quam ut magna consequat faucibus quam.</p>
                                    </div>
                                    <div class="media">
                                        <div class="media-left d-flex mr-3">
                                            <img src="{{url('img/avatar80_6.jpg')}}" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="overview">
                                                <div class="name"><b>John Williams</b></div>
                                                <div class="details">Canada</div>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Carousel controls -->
                    <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
                        <i class="fa fa-chevron-left"></i>
                    </a>
                    <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
                        <i class="fa fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="payments-method-outter">
        <div class="text-center">
            <h2> We Accept </h2>
        </div>
    </div>
    <div class="row">
        <div class="payments-method img-is-responsive-2">
            <div><a href="#"><img src="{{url('img/2000px-PayPal_logo.svg.png')}}" alt="PayPal logo"></a></div>
            <div><a href="#"><img src="{{url('img/venmo_logo_blue.png')}}" alt="venmo logo"></a></div>
            <div><a href="#"><img src="{{url('img/Square_Logo_Portrait.png')}}" alt="Square Cash Logo"></a></div>
            <div><a href="#"><img src="{{url('img/logo-zelle-logo-with-tagline.png')}}" alt="Zelle Logo"></a></div>
            <div><a href="#"><img src="{{url('img/Que%20es%20Skrill.png')}}" alt="Skrill Logo"></a></div>
        </div>
    </div>
</div>
<div class="ideal-remit-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <a href="#" class="footer-logo">Ideal Remit logo</a>
                <div class="ideal-remit-footer-text"><p>62 Buckingham Gate, London, SW1E 6AJ, United Kingdom. Company registration number: 07110878 © IdealRemit 2018</p></div>
            </div>
            <div class="col-md-4">
                <div class="ideal-remit-footer-col3">
                    <h3>Quick Links</h3>
                    <a href="#">About us</a>
                    <a href="#">Stories</a>
                    <a href="#">News</a>
                    <a href="#">Careers</a>
                    <a href="#">Sitemap</a>
                    <a href="#">Register</a>
                    <a href="#">Login</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="ideal-remit-footer-col3">
                    <h3>Legal</h3>
                    <a href="#">Help and support</a>
                    <a href="#">FAQ</a>
                    <a href="#">Contact us</a>
                    <a href="#">Partners</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container">
                <div class="footer-sub clearfix">
                    <p>Company registration number: 07110878 © IdealRemit 2018</p>
                    <div class="footer-social-button">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-google"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Load bootstrap and Jquery library to make site load fast-->
<script src="{{ asset('js/jquery-3.0.0.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>
