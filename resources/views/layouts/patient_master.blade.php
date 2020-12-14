<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>BD Health Portal </title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('patientfrontend/css/style.css') }}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ asset('patientfrontend/css/responsive.css') }}">
    <!-- fevicon -->
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{ asset('patientfrontend/css/jquery.mCustomScrollbar.min.css' ) }}">
    <!-- Tweaks for older IEs-->
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous"/>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous"/>

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous"/>


    <!--<script src="//oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>-->
    {{--<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>--}}

</head>
<!-- body -->
<body class="main-layout">
<!-- loader  -->
<div class="loader_bg">
    <div class="loader"><img src="{{ asset('patientfrontend/images/loading.gif') }}" alt="#"/></div>
</div>
<!-- end loader -->
<!-- header -->
<header>
    <!-- header inner -->
    <div class="header">
        <div class="header_white_section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="header_information">
                            <ul>
                                <li><img src="{{ asset('patientfrontend/images/1.png') }}" alt="#"/>Dhaka, Bangladesh</li>
                                <li><img src="{{ asset('patientfrontend/images/2.png') }}" alt="#"/>01836691340</li>
                                <li><img src="{{ asset('patientfrontend/images/3.png') }}" alt="#"/> bdhealth@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                    <div class="full">
                        <div class="center-desk">
                            <div class="logo"><a href="<?= route('index'); ?>"><img src="{{ asset('patientfrontend/images/logo.png') }}" alt="#"></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                    <div class="menu-area">
                        <div class="limit-box">
                            <nav class="main-menu">
                                <ul class="menu-area-main">
                                    <li class="active"><a href="<?= route('index'); ?>">Home</a></li>
                                    <li><a href="<?= route('search_doctor'); ?>">Doctor</a></li>
                                    <li><a href="<?= route('create_appointment'); ?>">Book Appointment</a></li>
                                    <li><a href="<?=route('blood_community'); ?>">Blood Community</a></li>
                                    <li><a href="<?= route('patientblog.viewallBlogs'); ?>">Blog</a></li>
                                    <li><a href="#contact">Contact Us</a></li>


                                    <li class="navbar-nav ml-auto">
                                        <!-- Authentication Links -->
                                    @guest
                                        <li class="nav-item">
                                            <a href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                        @if (Route::has('register'))
                                            <li class="nav-item">
                                                <a href="{{ route('register') }}">{{ __('Register') }}</a>
                                            </li>
                                        @endif
                                    @else
                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->full_name }}
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                @hasanyrole('admin')
                                                <a class="dropdown-item" href="{{ url('/admin_dashboard') }}">
                                                    Dashboard
                                                </a>
                                                @endhasanyrole

                                                @hasanyrole('doctor')
                                                <a class="dropdown-item" href="{{ url('/appointment/view') }}">
                                                    Dashboard
                                                </a>
                                                @endhasanyrole

                                                @hasanyrole('patient')
                                                <a class="dropdown-item" href="{{ url('/profile') }}">
                                                    Profile
                                                </a>
                                                <a class="dropdown-item" href="{{ route('change_password') }}">
                                                    Change Password
                                                </a>
                                                <a class="dropdown-item" href="{{ route('my_appointment') }}">
                                                    My Appointments
                                                </a>
                                                @endhasanyrole

                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            </div>
                                        </li>
                                    @endguest
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end header inner -->
</header>


@yield('content')

<!-- footer -->
<footer>
    <div id="contact" class="footer">
        <div class="container">
            <div class="row pdn-top-30">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <ul class="location_icon">
                        <li><a href="#"><img src="{{ asset('patientfrontend/icon/facebook.png') }}"></a></li>
                        <li><a href="#"><img src="{{ asset('patientfrontend/icon/Twitter.png') }}"></a></li>
                        <li><a href="#"><img src="{{ asset('patientfrontend/icon/linkedin.png') }}"></a></li>
                        <li><a href="#"><img src="{{ asset('patientfrontend/icon/instagram.png') }}"></a></li>
                    </ul>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="Follow">
                        <h3>CONTACT US</h3>
                        <span>123 Second Street Fifth <br>Avenue,<br>
                        Dhaka, Bangladesh<br>
                        +880 1836691340</span>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="Follow">
                        <h3>ADDITIONAL LINKS</h3>
                        <ul class="link">
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Terms and conditions</a></li>
                            <li><a href="#"> Privacy policy</a></li>
                            <li><a href="#">News</a></li>
                            <li><a href="#"> Contact us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="Follow">
                        <h3> Contact</h3>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input class="Newsletter" placeholder="Name" type="text">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input class="Newsletter" placeholder="Email" type="text">
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <textarea class="textarea" placeholder="comment" type="text">Comment</textarea>
                            </div>
                        </div>
                        <button class="Subscribe">Submit</button>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <p>Copyright 2020 | All Right Reserved By BD Health Portal</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- end footer -->
<!-- Javascript files-->
<script src="{{asset('patientfrontend/js/jquery.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.4/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('patientfrontend/js/jquery-3.0.0.min.js')}}"></script>
<script src="{{asset('patientfrontend/js/plugin.js')}}"></script>
<!-- sidebar -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="{{asset('patientfrontend/js/custom.js')}}"></script>
<!-- javascript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>

<script>
    $(document).ready(function () {
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            margin: 10,
            nav: true,
            loop: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        })
    })
</script>

@stack('page_lvl_script')

</body>
</html>
