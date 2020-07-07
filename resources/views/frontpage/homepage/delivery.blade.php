<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <!-- The above 3 meta tags *must* come first in the head -->

    <!-- SITE TITLE -->
    <title>
      @yield('title')
    </title>
    <style>  <!-- alert -->
    div {
        opacity:1;
        transition:opacity 1000ms;
    }
    div.al {
        opacity:0;
    }
    </style>

    <script>
    setTimeout(function(){
    document.getElementById('alert').className = 'al';
  }, 3000);
    </script>
    <!-- BOOTSTRAP CSS -->

    <link rel="stylesheet" href="{{ asset('frontend/assets/libs/bootstrap/css/bootstrap.min.css') }}" media="all"/>

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/libs/fontawesome/css/font-awesome.min.css') }}" media="all"/>

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/libs/maginificpopup/magnific-popup.css') }}" media="all"/>

    <!-- OWL CAROUSEL CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/libs/owlcarousel/owl.carousel.min.css') }}" media="all" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/libs/owlcarousel/owl.theme.default.min.css') }}" media="all" />

    <!-- GOOGLE FONT -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700%7cRaleway:300,400,400i,500,600,700,900"/>


    <link rel="stylesheet" href="{{ asset('frontend/assets/libs/animate/animate.css') }}" media="all" />


    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/libs/datepicker/bootstrap-datetimepicker.min.css') }}" media="all"/>

    <!-- MASTER  STYLESHEET  -->
    <link id="lgx-master-style" rel="stylesheet" href="{{ asset('frontend/assets/css/style-red.min.css') }}" media="all"/>

    <!-- MODERNIZER CSS  -->
    <script src="{{ asset('frontend/assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body class="home">

<div class="lgx-container lgx-home-wrapper">
<!-- ***  ADD YOUR SITE CONTENT HERE *** -->

<!--HEADER-->
<header>
    <div id="lgx-header" class="lgx-header">
        <div class="lgx-header-position"> <!--lgx-header-position-fixed lgx-header-position-white lgx-header-fixed-container lgx-header-fixed-container-gap lgx-header-position-white-->
            <div class="lgx-container-fluid"> <!--lgx-container-fluid-->
                <nav class="navbar navbar-default lgx-navbar">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

<!-- **********  LOGO   ******** -->


                        <div class="lgx-logo"> <!--lgx-logo-default lgx-logo-fixed lgx-logo-white lgx-logo-black-->
                            <a href="{{ route('homepage') }}" target="_blank" class="lgx-scroll">
                                <img src="{{ asset('frontend/assets/img/newlogo-awsmcafe.PNG') }}" alt="Restaura Logo"/>
                            </a>
                        </div>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse lgx-collapse">
                        <ul class="nav navbar-nav lgx-nav">

                          @if(!empty(Auth::user()->id))
                          
                          <li><a class="lgx-scroll" href="{{route('logout')}}">Logout</a></li>
                          @else
                          <li><a class="lgx-scroll" href="{{route('login')}}">Login</a></li>
                          <li><a class="lgx-scroll" href="{{route('register')}}">Register</a></li>
                          @endif



                          <!-- <div class="lgx-nav-right">
                              <div class="lgx-search">
                                  <a href="#"><i class="fa fa-search"></i></a>
                                  <div class="search">
                                      <form action="#" method="GET" role="search">
                                          <input type="text" class="form-control input" name="q" placeholder="Search for snippets and hit enter">
                                      </form>
                                      <div class="close"><i class="fa fa-close"></i></div>
                                  </div>
                              </div>
                          </div> -->
                    </div><!--/.nav-collapse -->
                </nav>
            </div>
            <!-- //.CONTAINER -->
        </div>
    </div>
</header>
<!--HEADER END-->
<main class="py-4">
    @include('flash-message')
    @yield('content')
</main>

<!--FOOTER-->
<footer>
    <div id="lgx-footer" class="lgx-footer"> <!--lgx-footer-white-->
        <div class="lgx-inner">
            <div class="container">
                <div class="lgx-footer-area">
                    <div class="lgx-footer-single">
                        <a class="logo" href="{{ route('homepage') }}"><img src="{{ asset('frontend/assets/img/logo-footer-red.png') }}" alt="Logo"></a>
                        <address>
                            <i class="fa fa-map-marker"></i>
                            Awesome Cafe  <br>
                            1 & 3 Rd No. 21, <br>
                            Nikunja, Khilkhet, Dhaka-1229
                        </address>
                        <ul class="list-unstyled lgx-address-info">
                            <li><i class="fa fa-phone"></i>+8801765931852</li>
                            <li><i class="fa fa-envelope"></i>fahim@gmail.com</li>
                        </ul>
                    </div> <!--//footer-area-->
                    <div class="lgx-footer-single">
                        <h2 class="title">Opening Time</h2>
                        <div class="opening-time-single">
                            SUNDAY- THURSDAY:
                            <span><i>10:00</i> Am - <i>12:00</i> PM</span>
                        </div>
                        <div class="opening-time-single">
                            FRIDAY - SATURDAY:
                            <span><i>12:00</i> Am - <i>11:00</i> PM</span>
                        </div>

                    </div> <!--//footer-area-->

                </div>
                <div class="lgx-footer-bottom">
                    <div class="lgx-copyright">
                        <p>© 2019 Restaura is powered by <a href="{{ route('homepage') }}">Awesome Cafe</a> The property of their owners.</p>
                    </div>

                </div>

            </div>
            <!-- //.CONTAINER -->
        </div>
        <!-- //.footer Middle -->
    </div>
</footer>
<!--FOOTER END-->


</div>
<!--//.LGX SITE CONTAINER-->
<!-- *** ADD YOUR SITE SCRIPT HERE *** -->
<!-- JQUERY  -->
<script src="{{ asset('frontend/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>

<!-- BOOTSTRAP JS  -->
<script src="{{ asset('frontend/assets/libs/bootstrap/js/bootstrap.min.js') }}"></script>


<script src="{{ asset('frontend/assets/libs/jquery.smooth-scroll.js') }}"></script>

<!-- SKILLS SCRIPT  -->
<script src="{{ asset('frontend/assets/libs/jquery.validate.js') }}"></script>


<!-- adding magnific popup js library -->
<script type="text/javascript" src="{{ asset('frontend/assets/libs/maginificpopup/jquery.magnific-popup.min.js') }}"></script>

<!-- Owl Carousel  -->
<script src="{{ asset('frontend/assets/libs/owlcarousel/owl.carousel.min.js') }}"></script>


<script src="{{ asset('frontend/assets/libs/header-parallax.js') }}"></script>


<!-- bootstrap date picker js with moment js -->
<script src="{{ asset('frontend/assets/libs/datepicker/moment-with-locales.min.js') }}"></script>
<script src="{{ asset('frontend/assets/libs/datepicker/bootstrap-datetimepicker.min.js') }}"></script>

<!-- Counter JS -->
<script src="{{ asset('frontend/assets/libs/waypoints.min.js') }}"></script>
<script src="{{ asset('frontend/assets/libs/counterup/jquery.counterup.min.js') }}"></script>

<!-- MENU FILTER   -->
<script src="{{ asset('frontend/assets/libs/isotope/isotope.pkgd.min.js') }}"></script>

<!-- SMOTH+SCROLL -->
<script src="{{ asset('frontend/assets/libs/jquery.smooth-scroll.min.js') }}"></script>
<script src="{{ asset('frontend/assets/libs/jquery.easing.min.js') }}"></script>

<!-- type js -->
<script src="{{ asset('frontend/assets/libs/typed/typed.min.js') }}"></script>

<!-- Sticky Sidebar js -->
<script src="{{ asset('frontend/assets/libs/stickysidebar/theia-sticky-sidebar.min.js') }}"></script>

<!-- instafeed js -->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/instafeed.js/1.4.1/instafeed.min.js"></script>-->
<script src="{{ asset('frontend/assets/libs/instafeed.min.js') }}"></script>

<!-- CUSTOM SCRIPT  -->
<script src="{{ asset('frontend/assets/js/custom.script.js') }}"></script>



</body>

</html>
