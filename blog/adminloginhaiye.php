<?php
  session_start();
  error_reporting(E_ALL);
  ini_set('display_errors', '1');
if(isset($_POST['admin'])){
  $username = $con->real_escape_string($_POST['username']);
  $password = $con->real_escape_string($_POST['password']);
  if($email=="" || $password==""){
      $msg =  "Please fill all the details";
  }
  else{
    if($username == 'novzo_ka_admin' && $password == 'AdminAccessKaPassword()'){
      $_SESSION['username'] = $username;
      header('location:index.php');
    }else{
      $msg = "Bro, Galat details diye re tune.";
    }
  }
}
 ?>
<?php $pageTitle="Admin Login" ?>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <meta charset="utf-8">
  <meta name="author" content="Lakshya Shukla">
  <meta name="description" content="">
  <meta name="keywords" content="books, share, exchange, academics, fiction, Science, rent, sell, buy, knowledge, stories, novels, novel, ">
  <link rel="shortcut icon" href="../img/logos/t1.png">
  <title><?php echo $pageTitle ?> || Novzo</title>

  <!-- FACEBOOK -->
  <meta property="og:title" content="Novzo">
  <meta property="og:site_name" content="novzo.in">
  <meta property="og:url" content="https://novzo.in">
  <meta property="og:description" content="">
  <meta property="fb:app_id" content="">
  <meta property="og:image" content="../img/logos/tt2.png">
  <meta property="og:type" content="website">
  <meta property="og:locale" content="">
  <!-- TWITTER -->
  <meta property="twitter:card" content="summary">
  <meta property="twitter:title" content="Novzo - Share, Exchange, Buy, Rent, Sell books and get the best deal">
  <meta property="twitter:description" content="">
  <meta property="twitter:creator" content="">
  <meta property="twitter:url" content="https://novzo.in">
  <meta property="twitter:image" content="../img/logos/tt2.jpg">
  <meta property="twitter:image:alt" content="">

  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,500,600" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500i" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->

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

</head>
<body>
  <header id="header" role="banner">
  <nav class="nav">
          <div class="container">
              <div class="logo">
              </div>
              <a href="index.php"><img src="../img/logos/tt2.png" alt="Novzo Logo" height="55.76" width ="100" /></a>
              <span class="navTrigger">
                  <i></i>
                  <i></i>
                  <i></i>
              </span>
          </div>
    </nav>
    </header>

  <section class="contact-page-area relative" style="padding-top:7em;padding-bottom:7em;">
  <div class="container cart-container">
  <div class="box">
    <div class="container">
        <div class="row row-centered">
            <section class="wrapper banner-content" style="padding-top:20px;">
                <p style="color:black">Reset your password<br/><br/></p>
          <div id="admin">
              <form action="passstatus.php" method="POST">

                <span>
                  <label>Username: </label>
                  <input class="full-width has-padding has-border" type="text" name="username"  placeholder="Username"><br/><br/>
                </span>

                <span>
                  <label>Password: </label>
                  <input class="full-width has-padding has-border" type="password" name="password"  placeholder="Password">
                </span>

                <p class="fieldset" style="padding-top:1em;">
                  <input class="full-width" type="submit" name="admin" value="Login">
                </p>
              </form>
          </div>
          <p style="color:#000;"><?php echo $msg ?></p>
          </section>
      </div>
    </div>
    </div>
    </div>
    </section>


  <!-- Start Footer Area -->
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
             method="get" class="form-inline">
              <input class="form-control" name="EMAIL" placeholder="Your Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '"
               required="" type="email">
              <button class="click-btn btn btn-default" style="background:#000;"><span class="ti-arrow-right"></span></button>
              <div style="position: absolute; left: -5000px;">
                <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
              </div>

              <div class="info"></div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
    <script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/vendor/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="../js/style.js"></script>
    <script src="../js/vendor/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/slider.js"></script>
    <script src="../js/custom.js"></script>
    <script src="../js/form.js"></script>
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
</body>
</html>
