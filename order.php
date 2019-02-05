<?php
    use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;
    session_start();
  if(isset($_SESSION['username']) && !$_GET['Book_ID'] == '' && !$_GET['Books'] == '' ){
    require "dbconnect/connect_to_signups.php";

    $type = $con->real_escape_string($_GET['Type']);
	$book = $con->real_escape_string($_GET['Books']);
	$bookid = $con->real_escape_string($_GET['Book_ID']);
	if($type == 'P'){
	    $query = "SELECT * FROM Sales WHERE Type='P'";
        $result = mysqli_query($con,$query);
        $num = mysqli_num_rows($result);
        if($num == 2){
          $msg = "You cannot order more than two Prayaas books. You have already ordered two books.";
        }elseif($num == 1){
          $data = mysqli_fetch_array($result);
          $books = $data['Books'];
          if($book == $books){
            $msg = "You cannot order a same Prayaas book twice.";
          }
        }
	}

    $name = $con->real_escape_string($_POST['name']);
    $email = $con->real_escape_string($_POST['email']);
    $phone = $con->real_escape_string($_POST['phone']);
    $college = $con->real_escape_string($_POST['college']);
    $staytype = $con->real_escape_string($_POST['staytype']);
    $room = $con->real_escape_string($_POST['room']);
    $hostel = $con->real_escape_string($_POST['hostel']);
    $department = $con->real_escape_string($_POST['department']);
    $collegeid = $con->real_escape_string($_POST['collegeid']);
    $section = $con->real_escape_string($_POST['section']);

      $q = "UPDATE Users SET Name='$name', Email='$email', Phone='$phone', CollegeID='$collegeid', Department='$department', Section='$section', Hosteliteyadayski='$staytype', Hostel_Block='$hostel', Room='$room' WHERE email='{$_SESSION['email']}'";
      $query = "INSERT INTO Sales(Email,Books,Book_ID,Type) VALUES('$email','$book','$bookid','$type')";
      if(mysqli_query($con,$query)){
          $msg = "Your order has been recorded.";
      }else{
          echo("Error description: " . mysqli_error($con));
      }
      if(mysqli_query($con,$q)){
        $msg = "Your order has been recorded. We'll contact you shortly.";
      }else{
        echo("Error description: " . mysqli_error($con));
      }

    require 'vendor/autoload.php';

    $mail = new PHPMailer(TRUE);

    try {
         $mail->setFrom('office@novzo.in', 'Novzo');
         $mail->addAddress($email, $name);
         $mail->Subject = 'Your Order of '.$book.'';
         $mail->isHTML (TRUE);
         $mail->Body = '
              <html>
                  <body>
                      <h2>Hi, '.$name.'</h2>
                      <p> Thank you for ordering from Novzo! </p><br>
                      <p>Your order of '.$book.' has been received and our representative shall be in touch with you on '.$phone.' number within 24 hours.</p>
                      <p>Keep browsing and keep learning with <a href="https://novzo.in">Novzo</a></p>
                  </body>
              </html>
         ';
          if($mail->send()){
              $msg1 = "A confirmation email has also been sent to '.$email.'";
          }
          else {
              $msg1 = "We couldn't send you an email due to an error. Contact: 7738446941";
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

      $mail2 = new PHPMailer(TRUE);

      try {
         $mail2->setFrom('office@novzo.in', 'Novzo');
         $mail2->addAddress('candidelib@gmail.com', 'Novzo');
         $mail2->Subject = 'Book Order of '.$book.' of Type '.$type.'';
         $mail2->isHTML (TRUE);
         $mail2->Body = '
              <html>
                  <body>
                      <h2>Hi, '.$name.'</h2>
                      <p> '.$name.' from '.$college.' ordered '.$book.' of Book_ID = '.$bookid.' whose email is '.$email.' and contact number is '.$phone.'  </p><br>
                      <p>Remember that customer service is one of the most essential parts of a business. All the Best!</p>
                  </body>
              </html>
         ';

         $mail2->send();
      }
      catch (Exception $e)
      {
         echo $e->errorMessage();
      }
      catch (\Exception $e)
      {
         echo $e->getMessage();
      }

      $mail2 = new PHPMailer(TRUE);
?>

<?php $pageTitle="Order "; ?>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <meta charset="utf-8">
  <meta name="author" content="Lakshya Shukla">
  <meta name="description" content="">
  <meta name="keywords" content="books, share, exchange, academics, fiction, Science, rent, sell, buy, knowledge, stories, novels, novel, ">
  <link rel="shortcut icon" href="../img/logos/t1.png">
  <title><?php echo $pageTitle; ?> || Novzo - Share, Exchange, Buy, Rent, Sell books and get the best deal</title>

  <!-- FACEBOOK -->
  <meta property="og:title" content="Novzo - Share, Exchange, Buy, Rent, Sell books and get the best deal">
  <meta property="og:site_name" content="Oyebooks">
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
  <meta property="twitter:image" content="img/logos/tt2.jpg">
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
                  <a href="index.php"><img src="img/logos/tt2.png" alt="Novzo Logo" height="55.76" width ="100" /></a>
              </div>
              <div id="mainListDiv" class="main_list">
                  <ul class="navlinks">
                      <li class="menu-active"><a href="index.php">Home</a></li>
                      <li class="dropdown">
                        <a class="menu-active" href="#">Services</a>
                        <div class="dropdown-content"style="background:white;">
                            <a class="dropdown-itens" href="rent.php">Rent</a>
                            <a class="dropdown-itens" href="buy.php">Buy Books</a>
                            <a class="dropdown-itens" href="exchange.php">Exchange</a>
                            <a class="dropdown-itens" href="sell.php">Sell</a>
                            <a class="dropdown-itens" href="donate.php">Donate</a>
                            <a class="dropdown-itens" href="#request">Request</a>
                        </div>
                      </li>
                      <li class="menu-active"><a href="prayaas.php">Prayaas Books</a></li>
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

  <section class="contact-page-area relative" style="padding-top:7em;padding-bottom:7em;">
    <div class="container cart-container">
    <div class="box">
      <div class="container">
          <div class="row row-centered">
          <section class="wrapper banner-content" style="padding-top:20px;">
            <p style="color:black;"><?php echo $msg; ?></p><br/>
            <h3 style="color:black;"><?php echo $msg1 ?></h3>
            <a class="button" name="index" href="index.php">Keep Browsing</a>
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
            <li><a href="customer/faq.php">FAQs</a></li>
            <li><a href="register.php">Register Now</a></li>
            <li><a href="customer/terms.php">Terms of Service</a></li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-6 single-footer-widget">
          <h4>Newsletter</h4>
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
<?php
    }else{
        header('location:index.php');
    }
    ?>
