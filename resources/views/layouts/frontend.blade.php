<!doctype html>
<html lang="en">

<head>
  <title>RumahSakit</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
  <link rel="stylesheet" href="frontend/fonts/icomoon/style.css">

  <link rel="stylesheet" href="frontend/css/bootstrap.min.css">
  <link rel="stylesheet" href="frontend/css/jquery-ui.css">
  <link rel="stylesheet" href="frontend/css/owl.carousel.min.css">
  <link rel="stylesheet" href="frontend/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="frontend/css/owl.theme.default.min.css">

  <link rel="stylesheet" href="frontend/css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="frontend/css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="frontend/fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="frontend/css/aos.css">

  <link rel="stylesheet" href="frontend/css/style.css">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">





  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">

          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="" class="h2 mb-0">RumahSakit<span class="text-primary">.</span> </a></h1>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="#home-section" class="nav-link">Home</a></li>
                <li><a href="#next" class="nav-link">Pelayanan</a></li>
                <li><a href="#about-section" class="nav-link">Tentang Kami</a></li>
                <li><a href="#contact-section" class="nav-link">Hubungi Kami</a></li>
                @guest
                <li><a href="{{ url('login') }}" class="nav-link">Login</a></li>
                @else
                <li><a href="{{ url('dashboard') }}" class="nav-link">Dashboard</a></li>
                @endguest
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>

    </header>


    @yield('content')

    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
              <h2 class="footer-heading mb-4">Quick Links</h2>
              <ul class="list-unstyled">
                <li><a href="#next" class="smoothscroll">Pelayanan Kami</a></li>
                <li><a href="#about-section" class="smoothscroll">Tentang Kami</a></li>
                <li><a href="#contact-section" class="smoothscroll">Hubungi Kami</a></li>
              </ul>
          </div>

        </div>
    </footer>

  </div> <!-- .site-wrap -->

  <script src="/frontend/js/jquery-3.3.1.min.js"></script>
  <script src="/frontend/js/jquery-ui.js"></script>
  <script src="/frontend/js/popper.min.js"></script>
  <script src="/frontend/js/bootstrap.min.js"></script>
  <script src="/frontend/js/owl.carousel.min.js"></script>
  <script src="/frontend/js/jquery.countdown.min.js"></script>
  <script src="/frontend/js/jquery.easing.1.3.js"></script>
  <script src="/frontend/js/aos.js"></script>
  <script src="/frontend/js/jquery.fancybox.min.js"></script>
  <script src="/frontend/js/jquery.sticky.js"></script>
  <script src="/frontend/js/isotope.pkgd.min.js"></script>


  <script src="/frontend/js/main.js"></script>


</body>

</html>