<?php

  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;
  session_start();
  error_reporting(E_ALL);
  ini_set('display_errors', '1');
if(isset($_POST['register'])){
  require "../dbconnect/connect_to_signups.php";
//   header('location:../index.php');
  $username = $con->real_escape_string($_POST['username']);
  $email = $con->real_escape_string($_POST['email']);
  $contact = $con->real_escape_string($_POST['contact']);
  $password = $con->real_escape_string($_POST['password']);
  if($username=="" || $email=="" || $contact=="" || $password==""){
      $msgr1 = "Please fill all the details";
  }else{
    $hashed_password = $con->real_escape_string(password_hash($password, PASSWORD_DEFAULT));


    $query = "SELECT * from Registrations where email='$email'";
    $result = mysqli_query($con,$query);
    $num = mysqli_num_rows($result);

    if($num!=0){
      $msgr1 = "The email you entered is already registered.";
    }else{
      $token = 'qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM0123456789!$^*';
      $token = str_shuffle($token);
      $token = substr($token, 0, 10);

      // header('location:../index.php');
      $q="INSERT INTO Registrations(Username,Contact,Email,Password,ConfirmEmail,token) VALUES('$username','$contact','$email','$hashed_password','0','$token')";
      $query = "INSERT INTO Users(Contact,Email) VALUES('$contact','$email')";
      if(mysqli_query($con,$q) && mysqli_query($con,$query)){
          $msgr1 = "You are registered with us!";
      }
      else {
          $msgr1 = "There was some error. Contact: 7738446941.";
      }

      require '../vendor/autoload.php';

      $mail = new PHPMailer(TRUE);

      try {
         $mail->setFrom('office@novzo.in', 'Novzo');
         $mail->addAddress($email, $username);
         $mail->Subject = 'Welcome to Novzo';
         $mail->isHTML (TRUE);
         $mail->Body = '
              <html>
                  <body>
                      <h2>Welcome to Novzo; '. $username .'.</h2>
                      <p> You are just one click away from creating you account. Click on the link below to confirm your email.</p><br>
                      <p><strong><a href="https://novzo.in/regphp/confirm.php?email=' . $email . '&token=' . $token . '">Click here</a> to verify the email.</strong> or paste this url on your browser: https://novzo.in/regphp/confirm.php?email=' . $email . '&token=' . $token . '</p>
                  </body>
              </html>
         ';
          if($mail->send()){
              $msgr2 = "An email has been sent to you. Please verify your email.";
              $msg2 = "As this is a new venture, our email may go in spam. Please mark it 'Not Spam' and click on the verification link to complete your registration.<br><br> We regret any inconvience.";
          }
          else {
              $msgr2 = "Something Went Wrong. Please Try Again.";
          }
      }
      catch (Exception $e)
      {
         echo $e->errorMessage();
      }
      catch (\Exception $e)
      {
         echo $e->getMessage();
      }

      // $querusers = "CREATE TABLE ' . $email . ' (
      //   id INT(255) AUTO_INCREMENT,
      //   Books VARCHAR(255) NOT NULL,
      //   Type VARCHAR(5) NOT NULL,
      //   primary key (id)
      // )";

      // if(mysqli_query($con1,$querusers)==TRUE){
      //   echo "User Table Created";
      // } else {
      //   echo("Error description: " . mysqli_error($con1));
      // }
      }

    }
 ?>
<?php $pageTitle="Registration " ?>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <meta charset="utf-8">
  <meta name="author" content="Lakshya Shukla">
  <meta name="description" content="">
  <meta name="keywords" content="books, share, exchange, academics, fiction, Science, rent, sell, buy, knowledge, stories, novels, novel, ">
  <link rel="shortcut icon" href="../img/logos/t1.png">
  <title><?php echo $pageTitle ?> || Novzo - Share, Exchange, Buy, Rent, Sell books and get the best deal</title>

  <!-- FACEBOOK -->
  <meta property="og:title" content="Novzo - Share, Exchange, Buy, Rent, Sell books and get the best deal">
  <meta property="og:site_name" content="Novzo">
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
                  <a href="index.php"><img src="../img/logos/tt2.png" alt="Novzo Logo" height="55.76" width ="100" /></a>
              </div>
              <div id="mainListDiv" class="main_list">
                  <ul class="navlinks">
                      <li class="menu-active"><a href="../index.php">Home</a></li>
                      <li class="dropdown">
                        <a class="menu-active" href="#">Services</a>
                        <div class="dropdown-content"style="background:white;">
                            <a class="dropdown-itens" href="../rent.php">Rent</a>
                            <a class="dropdown-itens" href="../buy.php">Buy Books</a>
                            <a class="dropdown-itens" href="../exchange.php">Exchange</a>
                            <a class="dropdown-itens" href="../sell.php">Sell</a>
                            <a class="dropdown-itens" href="../donate.php">Donate</a>
                            <a class="dropdown-itens" href="#request">Request</a>
                        </div>
                      </li>
                      <li class="menu-active"><a href="../prayaas.php">Prayaas Books</a></li>
                  </ul>
              </div>
              <span class="navTrigger">
                  <i></i>
                  <i></i>
                  <i></i>
              </span>
          </div>
      </nav>
    </header>
    <script src="js/scripts.js"></script>

<!-- Function used to shrink nav bar removing paddings and adding black background -->
    <script>
        $(window).scroll(function() {
            if ($(document).scrollTop() > 50) {
                $('.nav').addClass('affix');
                console.log("OK");
            } else {
                $('.nav').removeClass('affix');
            }
        });
    </script>
	<script>
		$('.navTrigger').click(function () {
    $(this).toggleClass('active');
    console.log("Clicked menu");
    $("#mainListDiv").toggleClass("show_list");
    $("#mainListDiv").fadeIn();

});
	</script>

    <section class="relative">
  <div class="cd-user-modal" style="padding-top:2em;"> <!-- this is the entire modal form, including the background -->
    <div class="cd-user-modal-container"> <!-- this is the container wrapper -->
      <ul class="cd-switcher">
        <li><a href="#0">Log in</a></li>
        <li><a href="#0">New account</a></li>
      </ul>

      <div id="cd-login"> <!-- log in form -->
        <form class="cd-form" action="validate.php" method="POST">
          <p class="fieldset">
            <label class="image-replace cd-email" for="signin-email">E-mail</label>
            <input class="full-width has-padding has-border" id="signin-email" type="email" name="email" placeholder="E-mail">
          </p>

          <p class="fieldset">
            <label class="image-replace cd-password" for="signin-password">Password</label>
            <input class="full-width has-padding has-border" id="signin-password" type="password" name="password"  placeholder="Password">
            <!--<a href="#0" class="hide-password">Show</a>-->
          </p>

          <?php echo $msgv; ?>

          <p class="fieldset">
            <input class="full-width" type="submit" value="Login" name="login">
          </p>
        </form>

        <p class="cd-form-bottom-message"><a href="#0">Forgot your password?</a></p>
      </div>

      <div id="cd-signup"> <!-- sign up form -->
        <form class="cd-form" action="registration.php" method="POST">
          <p class="fieldset">
            <label class="image-replace cd-username" for="signup-username">Username</label>
            <input class="full-width has-padding has-border" id="signup-username" type="text" name="username" placeholder="Username">
          </p>

          <p class="fieldset">
            <label class="image-replace cd-email" for="signup-email">E-mail</label>
            <input class="full-width has-padding has-border" id="signup-email" type="email" name="email" placeholder="E-mail">
          </p>

          <p class="fieldset">
            <label class="image-replace cd-email" for="signup-email">College</label>
            <select class="full-width has-padding has-border" id="signup-college" name="college">
              <option value="" selected disabled hidden>Choose College</option>
              <option value="VNIT">Visvesvaraya National Institute of Technology</option>
              <option value="RKNEC">Shri Ramdeobaba College of Engineering and Management</option>
              <option value="Other">Others</option>
            </select>
          </p>

          <p class="fieldset">
            <label class="image-replace cd-password" for="signup-password">Password</label>
            <input class="full-width has-padding has-border" id="signup-password" type="password" name="password" placeholder="Password">
            <!--<a href="#0" class="hide-password">Show</a>-->
          </p>

          <p class="fieldset">
            <label for="accept-terms">By proceding through the button below, you agree to the <a href="#0">Terms and Conditions</a></label>
          </p>

          <p class="fieldset">
            <input id="register" class="full-width has-padding" type="submit" value="Create account" name="register">
          </p>
        </form>

        <!-- <a href="#0" class="cd-close-form">Close</a> -->
      </div> <!-- cd-signup -->

      <div id="cd-reset-password"> <!-- reset password form -->
        <p class="cd-form-message">Lost your password? Please enter your email address. You will receive a link to create a new password.</p>

        <form class="cd-form" action="forgot.php" method="POST">
          <p class="fieldset">
            <label class="image-replace cd-email" for="reset-email">E-mail</label>
            <input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail" name="reset_email">
          </p>

          <p class="fieldset">
            <input class="full-width has-padding" type="submit" value="Reset password">
          </p>
        </form>

        <p class="cd-form-bottom-message"><a href="#0">Back to log-in</a></p>
      </div> <!-- cd-reset-password -->
      <a href="#0" class="cd-close-form">Close</a>
    </div> <!-- cd-user-modal-container -->
  </div> <!-- cd-user-modal -->
</section>

  <section class="contact-page-area relative" style="padding-top:7em;padding-bottom:7em;">
    <div class="container cart-container">
    <div class="box">
      <div class="container">
          <div class="row row-centered">
          <section class="wrapper banner-content" style="padding-top:20px;">
            <p style="color:black"><?php echo $msgr1; ?><br/>
            <h3><?php echo $msgr2; ?><br/><?php echo $msg2; ?></h3>
            <span class="menu-active main-nav"><a class="cd-signin hov" href="#0" style="color:#fff;">Login</a></span>
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
          <h4>Newsletter</h4>
          <p>Subscribe and never miss an offer!</p>
          <div class="form-wrap" id="mc_embed_signup">
            <form target="_blank" action="subscribe.php"
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
<?php }else{
    header('location:../index.php');
}
?>
