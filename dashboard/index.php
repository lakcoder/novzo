<?php
  session_start();
  $pageTitle = 'Dashboard';
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <meta charset="utf-8">
  <meta name="author" content="Lakshya Shukla">
  <meta name="description" content="">
  <meta name="keywords" content="books, share, exchange, academics, fiction, Science, rent, sell, buy, knowledge, stories, novels, novel, novel zone, library">
  <link rel="shortcut icon" href="../img/logos/t1.png">
  <title><?php echo $pageTitle ?> || Novzo</title>

  <!-- FACEBOOK -->
  <meta property="og:title" content="Novzo - Share, Exchange, Buy, Rent, Sell books and get the best deal">
  <meta property="og:site_name" content="Novzo">
  <meta property="og:url" content="https://novzo.in">
  <meta property="og:description" content="">
  <meta property="og:image" content="../img/logos/tt2.png">
  <meta property="fb:app_id" content="">
  <meta property="og:type" content="website">
  <meta property="og:locale" content="">
  <!-- TWITTER -->
  <meta property="twitter:card" content="summary">
  <meta property="twitter:title" content="Novzo - Share, Exchange, Buy, Rent, Sell books and get the best deal">
  <meta property="twitter:description" content="">
  <meta property="twitter:creator" content="">
  <meta property="twitter:url" content="https://novzo.in">
  <meta property="twitter:image" content="../img/logos/tt2.png">
  <meta property="twitter:image:alt" content="">

  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,500,600" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css">
  <link rel="stylesheet" href="../css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/linearicons.css">
  <link rel="stylesheet" href="../css/slider.css">
  <link rel="stylesheet" href="../css/form.css">
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../css/magnific-popup.css">
  <link rel="stylesheet" href="../css/nice-select.css">
  <link rel="stylesheet" href="../css/normalize.min.css">
  <link rel="stylesheet" href="../css/animate.min.css">
  <link rel="stylesheet" href="../css/owl.carousel.css">
  <link rel="stylesheet" href="../css/navbar.css">
  <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/cart.css">
  <link rel="stylesheet" href="../css/checkout.css">
	<link rel="stylesheet" href="../css/nav.css">
  <link rel="stylesheet" href="../css/custom.css">
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.min.css'>
	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-131403091-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-131403091-1');
</script>

</head>

<body>

    <!-- <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> -->
  <div id="flipkart-navbar">
      <div class="container">
          <div class="row row2">
              <div class="col-sm-2">
                  <h2 style="margin:0px;"><span class="smallnav menu" onclick="openNav()">☰</span></h2>
                  <a href="index.php"><img src="img/logos/tt2.png" alt="Novzo Logo" height="55.76" width ="100" /></a>
              </div>
              <div class="flipkart-navbar-search smallsearch col-sm-8 col-xs-11">
                <form>
                  <div class="row">
                      <select class="full-width has-padding has-border col-xs-1" id="type" name="type" required>
                        <option value="" selected="" disabled="" hidden="">Books</option>
                        <option value="Books">Books</option>
                        <option value="New">Posts</option>
                        <!-- <option value="Second_Hand">Second Hand</option> -->
                      </select>
                      <input class="flipkart-navbar-input col-xs-10" type="" placeholder="Search" name="" />
                      <button type="submit" class=" ti-search flipkart-navbar-button col-xs-1">
                          <!-- <svg width="15px" height="15px">
                              <path d="M11.618 9.897l4.224 4.212c.092.09.1.23.02.312l-1.464 1.46c-.08.08-.222.072-.314-.02L9.868 11.66M6.486 10.9c-2.42 0-4.38-1.955-4.38-4.367 0-2.413 1.96-4.37 4.38-4.37s4.38 1.957 4.38 4.37c0 2.412-1.96 4.368-4.38 4.368m0-10.834C2.904.066 0 2.96 0 6.533 0 10.105 2.904 13 6.486 13s6.487-2.895 6.487-6.467c0-3.572-2.905-6.467-6.487-6.467 "></path>
                          </svg> -->
                      </button>
                  </div>
                </form>
              </div>
              <div class="cart largenav col-sm-2">
                  <a class=" cart-button">
                      <!-- <svg class="cart-svg " width="16 " height="16 " viewBox="0 0 16 16 ">
                          <path d="M15.32 2.405H4.887C3 2.405 2.46.805 2.46.805L2.257.21C2.208.085 2.083 0 1.946 0H.336C.1 0-.064.24.024.46l.644 1.945L3.11 9.767c.047.137.175.23.32.23h8.418l-.493 1.958H3.768l.002.003c-.017 0-.033-.003-.05-.003-1.06 0-1.92.86-1.92 1.92s.86 1.92 1.92 1.92c.99 0 1.805-.75 1.91-1.712l5.55.076c.12.922.91 1.636 1.867 1.636 1.04 0 1.885-.844 1.885-1.885 0-.866-.584-1.593-1.38-1.814l2.423-8.832c.12-.433-.206-.86-.655-.86 " fill="#fff "></path>
                      </svg>  -->
                      <span id="login-button" class="item-number">Login</span>
                      <div class="login-container">
                        <form id="login-form" class="login-form">
                          <input type="text" placeholder="Username">
                          <input type="password" placeholder="Password">
                          <input type="submit" value="SUBMIT" />
                          <!-- <a href="register.php">Not registered?</a> -->
                        </form>
                        <script type="text/javascript">

                        </script>
                      </div>
                  </a>
              </div>
          </div>
  		<div class="row1">
              <ul class="largenav list-inline d-flex justify-content-around">
                  <li class="upper-links"><a class="links" href="http://clashhacks.in/">Link 1</a></li>
                  <li class="upper-links"><a class="links" href="https://campusbox.org/">Link 2</a></li>
                  <li class="upper-links"><a class="links" href="http://clashhacks.in/">Link 3</a></li>

                  <li class="upper-links dropdown"><a class="links" href="http://clashhacks.in/">Dropdown</a>
                      <ul class="dropdown-menu">
                          <li class="profile-li"><a class="profile-links" href="http://yazilife.com/">Link</a></li>
                          <li class="profile-li"><a class="profile-links" href="http://hacksociety.tech/">Link</a></li>
                          <li class="profile-li"><a class="profile-links" href="http://clashhacks.in/">Link</a></li>
                          <li class="profile-li"><a class="profile-links" href="http://clashhacks.in/">Link</a></li>
                          <li class="profile-li"><a class="profile-links" href="http://clashhacks.in/">Link</a></li>
                          <li class="profile-li"><a class="profile-links" href="http://clashhacks.in/">Link</a></li>
                          <li class="profile-li"><a class="profile-links" href="http://clashhacks.in/">Link</a></li>
                      </ul>
                  </li>
  				<li class="upper-links">
                      <a class="links" href="http://clashhacks.in/">
                          <svg class="" width="16px" height="12px" style="overflow: visible;">
                              <span class="ti-shopping-cart"></span><!-- <path d="M8.037 17.546c1.487 0 2.417-.93 2.417-2.417H5.62c0 1.486.93 2.415 2.417 2.415m5.315-6.463v-2.97h-.005c-.044-3.266-1.67-5.46-4.337-5.98v-.81C9.01.622 8.436.05 7.735.05 7.033.05 6.46.624 6.46 1.325v.808c-2.667.52-4.294 2.716-4.338 5.98h-.005v2.972l-1.843 1.42v1.376h14.92v-1.375l-1.842-1.42z" fill="#fff"></path> -->
                          </svg>
                      </a>
                  </li>
              </ul>
          </div>
      </div>
  </div>
  <div id="mySidenav" class="sidenav">
      <div class="container" style="background-color: #2874f0; padding-top: 10px;">
          <span class="sidenav-heading"><a href="index.php"><img src="img/logos/tt2.png" alt="Novzo Logo" height="55.76" width ="100" /></a></span>
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
      </div>
      <a href="http://clashhacks.in/">Link</a>
      <a href="http://clashhacks.in/">Link</a>
      <a href="http://clashhacks.in/">Link</a>
      <a href="http://clashhacks.in/">Link</a>
  </div>

  <h4>WElCOME,USER</h4>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-3 mx-auto verticalLine">
        <a href="buy.php">
          <div class="feature-item">
            <i style="color:#fff;" class="ti-shopping-cart-full"></i>
            <h4 style="color:#fff;">ASK</h4>
          </div>
        </a>
      </div>
      <div class="col-lg-3  mx-auto">
        <a href="buy.php">
          <div class="feature-item">
            <i style="color:#fff;" class="ti-shopping-cart-full"></i>
            <h4 style="color:#fff;">ASK</h4>
          </div>
        </a>
      </div>
      <div class="col-lg-3 mx-auto">
        <a href="buy.php">
          <div class="feature-item">
            <i style="color:#fff;" class="ti-shopping-cart-full"></i>
            <h4 style="color:#fff;">ASK</h4>
          </div>
        </a>
      </div>
    </div>
  </div>

  <footer class="footer-area section-gap">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 single-footer-widget">
          <h4>Our Services</h4>
          <ul>
            <li><a href="buy.php">Buy/ Sell Books</a></li>
            <li><a href="exchange.php">Share/ Exchange Books</a></li>
            <li><a href="rent.php">Order books on rent</a></li>
            <li><a href="donate.php">Donate Books</a></li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-6 single-footer-widget">
          <h4>Quick Links</h4>
          <ul>
            <li><a href="about.php">About Us</a></li>
            <li><a href="customer/faq.pdf">FAQs</a></li>
            <li><a href="register.php">Register Now</a></li>
            <li><a href="customer/Novzo_policy.pdf">Terms of Service</a></li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-6 single-footer-widget">
          <h4>Subscription</h4>
          <p>Subscribe and never miss an offer!</p>
          <div class="form-wrap" id="mc_embed_signup">
            <form target="_blank" action="regphp/subscribe.php"
             method="POST" class="form-inline">
              <input class="form-control" name="email" placeholder="Your Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '"
               required="" type="email">
              <button name="submit" class="click-btn btn btn-default" style="background:#000;"><span class="ti-arrow-right"></span></button>
              <!-- <div style="position: absolute; left: -5000px;">
                <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
              </div> -->

              <!-- <div class="info"></div> -->
            </form>
          </div>
        </div>
      </div>
      <div class="footer-bottom row align-items-center">
        <p class="footer-text m-0 col-lg-8 col-md-12">
  This website is designed and developed by |<a href="https://www.linkedin.com/in/lakshya-shukla-3005b1146" target="_blank"> Lakshya Shukla</a>
        <div class="col-lg-4 col-md-12 footer-social">
          <a href="https://www.facebook.com/novzo.in/" target="_blank"><i class="ti-facebook"></i></a>
          <a href="https://www.twitter.com/novzo_india/" target="_blank"><i class="ti-twitter"></i></a>
          <a href="https://www.instagram.com/novzo/" target="_blank"><i class="ti-instagram"></i></a>
          <a href="https://www.linkedin.com/company/novzo/" target="_blank"><i class="ti-linkedin"></i></a>
        </div>
      </div>
    </div>
  </footer>
  <!-- End Footer Area -->

  <div id="back-top">
    <a title="Go to Top" href="#"></a>
  </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
    <script src="../js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
    <script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="../js/style.js"></script>
    <script src="../js/vendor/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/slider.js"></script>
    <script src="../js/custom.js"></script>
    <script src="../js/form.js"></script>
    <script src="../js/nav.js"></script>
    <script src="../js/animate.js"></script>
    <script src="../js/easing.min.js"></script>
    <script src="../js/hoverIntent.js"></script>
    <script src="../js/superfish.min.js"></script>
    <script src="../js/jquery.ajaxchimp.min.js"></script>
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/owl-carousel-thumb.min.js"></script>
    <script src="../js/jquery.sticky.js"></script>
    <script src="../js/jquery.nice-select.min.js"></script>
    <script src="../js/parallax.min.js"></script>
    <script src="../js/waypoints.min.js"></script>
    <script src="../js/wow.min.js"></script>
    <script src="../js/jquery.counterup.min.js"></script>
    <script src="../js/mail-script.js"></script>
    <script src="../js/main.js"></script>
    <script type="text/javascript" src="../js/components/header-sticky.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</body>
