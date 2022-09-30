<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MePro - Creative Personal Portfolio Template">
    <link rel="icon" href="assets/images/favicon.png">
    <title>MePro - Creative Personal Portfolio Template</title>

    <!-- Stylesheets -->

    <!-- Bootstrap -->
    <link href="{{ asset('assets/stylesheets/css/bootstrap/bootstrap.css') }}" rel="stylesheet">

    <!-- font-awesome.css -->
    <link href="{{ asset('assets/stylesheets/css/fontawesome/font-awesome.css') }}" rel="stylesheet">

    <!-- pe-icon.css -->
    <link href="{{ asset('assets/stylesheets/css/pe-icon/pe-icon-7-stroke.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/stylesheets/css/pe-icon/helper.css') }}" rel="stylesheet">

    <!-- Animate.css -->
    <link href="{{ asset('assets/stylesheets/css/animate.css') }}" rel="stylesheet">

    <!-- Owl Carousel -->
    <link href="{{ asset('assets/stylesheets/css/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/stylesheets/css/owl-carousel/owl.theme.css') }}" rel="stylesheet">

    <!-- Slick -->
    <link href="{{ asset('assets/stylesheets/css/slick/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/stylesheets/css/slick/slick-theme.css') }}" rel="stylesheet">

    <!-- Smoothproducts -->
    <link href="{{ asset('assets/stylesheets/css/smoothproducts/smoothproducts.css') }}" rel="stylesheet">

    <!-- Main CSS -->
    <link href="{{ asset('assets/stylesheets/css/style.css') }}" rel="stylesheet">
    <!-- <link href="assets/stylesheets/css/color-scheme.css" rel="stylesheet"> -->

    <!-- Style Switcher -->
    <link href="{{ asset('assets/stylesheets/css/switcher/switcher.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/stylesheets/css/colors/yellow.css') }}" id="switch_style" rel="stylesheet"/>

</head>

<body data-spy="scroll" data-target=".navbar-collapse" data-offset="80" class="slideshowbody">
    
    <!-- Nav Bar -->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"></a>
          </div>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#home">Home</a></li>
              <li><a href="#services">Services</a></li>
              <li><a href="#ab">About Me</a></li>
              <li><a href="#portfolio">Portfolio</a></li>
              <li><a href="#contact">Contact</a></li>
    
              <li>
                @guest
                  <a href="/login">Login</a>  
                @endguest
                @auth
                    <a href="/dashboard">Dashboard</a>
                @endauth
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
    </div>

    @yield('landingPage')


    <!-- Footer Section Begin  -->
    <section class="footer">
        <div class="container">
          <div class="top-text">Follow Me</div>
          <div class="col-md-12 col-sm-12 links">
            <ul>
              <li class="social-icons">
                <a href="#" data-toggle="tooltip" title="Some tooltip text!">
                  <div class="circle">
                    <i class="fa fa-facebook"></i>
                  </div>
                </a>
                <a href="#">
                  <div class="circle">
                    <i class="fa fa-twitter"></i>
                  </div>
                </a>
                <a href="#">
                  <div class="circle">
                    <i class="fa fa-google-plus"></i>
                  </div>
                </a>
                <a href="#">
                  <div class="circle">
                    <i class="fa fa-linkedin"></i>
                  </div>
                </a>
                <a href="#">
                  <div class="circle">
                    <i class="fa fa-pinterest"></i>
                  </div>
                </a>
              </li>
            </ul>
          </div>
  
          <div class="col-md-12 col-sm-12 copyright">
            <h6>&copy; MePro 2022 All right reserved</h6>
          </div>
        </div><!--/.container -->
      </section>
      <!-- Footer Section End  -->


<!-- JavaScripts -->
<script src="{{ asset('assets/javascripts/jquery.min.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script src="{{ asset('assets/javascripts/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/javascripts/typed.min.js') }}"></script>
<script src="{{ asset('assets/javascripts/jquery.parallax-1.1.3.js') }}"></script>
<script src="{{ asset('assets/javascripts/owl.carousel.js') }}"></script>
<script src="{{ asset('assets/javascripts/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/javascripts/jquery.countTo.js') }}"></script>
<script src="{{ asset('assets/javascripts/wow.min.js') }}"></script>
<script src="{{ asset('assets/javascripts/slick.js') }}"></script>
<script src="{{ asset('assets/javascripts/jquery.form.js') }}"></script>
<script src="{{ asset('assets/javascripts/smoothproducts.min.js') }}"></script>
<script src="{{ asset('assets/javascripts/jquery.appear.min.js') }}"></script>
<script src="{{ asset('assets/javascripts/masonry.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/javascripts/imagesLoaded.js') }}"></script>
<script src="{{ asset('assets/javascripts/custom-map.js') }}"></script>
<script src="{{ asset('assets/javascripts/custom.js') }}"></script>
  
    <script src="{{ asset('assets/javascripts/switcher.js') }}"></script>

    </body>

</html>