<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--><html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>IdealRemit - Easy money flow</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
{{--<link href="https://fonts.googleapis.com/css?family=Raleway:400,700|Work+Sans:400,700" rel="stylesheet">--}}

<!-- Link Bootstrap 4 style and Custom style -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('fonts/css/fontawesome-all.css')}}" rel="stylesheet">
    <link href="{{asset('css/idealremit.css')}}" rel="stylesheet">
    @yield('styles')
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
            <a href="#" class="mobile-sign-up-btn">Sign up</a>
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

                        <div class="ideal-remit-mobile-menu-third img-is-responsive">
                            <a href="#"><img src="{{Auth::user()->photo ? '/images/'.Auth::user()->photo->path: url('img/default-avatar.png')}}"></a>
                            <span class="logged-in-status-name">Neon Emmanuel</span>
                        </div>

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
                <div class="col-md-2">
                    <a href="#">IdealRemit</a>
                </div>
                <div class="col-md-10">
                    <div class="ideal-remit-menu-2">
                        <a href="#" class="idealremit-menu-signup">Send Money</a>
                        <a href="#">History</a>
                        <a href="#">Reports</a>
                        <a href="#" class="user-profile-reloaded">
                            <img src="{{Auth::user()->photo ? '/images/'.Auth::user()->photo->path: url('img/default-avatar.png')}}">
                            {!! usernamereloaded(Auth::user()->firstname, Auth::user()->lastname) !!}
                            <i class="fa fa-angle-down"></i>
                            <div class="acount-info-drip">
                                <a href="#"><i class="fas fa-envelope-open"></i> Tickets</a>
                                <a href="{{url('account/edit-profile')}}"><i class="fas fa-user-cog"></i>Edit Account</a>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> Log out</a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Full Width Page Starts Here-->
<div class="ideal-remit-user-profile">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="white-backgroud box-shadow ideal-remit-user-profile-histroy">

                    @yield('content')

                </div>


            </div>
        </div>
    </div>
</div>
<!-- idealremit Send money page page ends here -->

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
<script src="{{asset('js/jquery-3.0.0.min.js')}}"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
@yield('scripts')
{{--<script src="assets/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        $('#datatable').DataTable();

    } );

</script>
--}}
</body>
</html>
