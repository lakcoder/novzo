<?php session_start(); ?>
<!DOCTYPE html>
<html>
<!--<header id="header" role="banner">
  <div class="container">
    <div class="row align-items-center justify-content-between d-flex">
      <div id="logo">
        <a href="index.php"><img src="img/logos/tt2.png" alt="Novzo Logo" height="55.76" width ="100" /></a>
      </div>
      <nav id="nav-menu-container" class="main-nav">
        <ul class="nav-menu">
          <li class="menu-active"><a href="index.php">Home</a></li>
          <li class="menu-active"><a href="about.php">Who we are</a></li>-->
          <!-- <li class="menu-has-children"><a href="">Services</a>
            <ul>
              <li><a href="blog-home.html">Buy/ Sell Books</a></li>
              <li><a href="blog-single.html">Exchange/ Share Books</a></li>
              <li><a href="blog-single.html">Exchange/ Share Books</a></li>
            </ul>
          </li> -->
          <!--<li class="menu-active"><a href="donate.php">Donate Books</a></li>
          <?php  // if (isset($_SESSION['username'])) { ?>
          <li class="menu-active"><a href="dashboard.php">Dashboard</a></li>
          <li class="menu-active"><a href="regphp/logout.php">Logout</a></li>
          <?php //}else{ ?>
          <li class="menu-active"><a class="cd-signin hov" href="#0">Login/ SignUp</a></li>
          <?php //} ?>
        </ul>
      </nav>
    </div>
  </div>
</header>-->
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
                          <a class="dropdown-itens" href="request.php">Request</a>
                      </div>
                    </li>
                    <li class="menu-active"><a href="prayaas.php">Prayaas Books</a></li>
          					<?php  if (isset($_SESSION['username'])) { ?>
          						<!--<li class="menu-active"><a href="dashboard.php">Dashboard</a></li>-->
          						<li class="menu-active"><a href="regphp/logout.php">Logout</a></li>
          					<?php }else{ ?>
          						<li class="menu-active main-nav"><a class="cd-signin hov" href="#0" style="color:#fff;">Login/ SignUp</a></li>
          					<?php } ?>
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
	<!-- Jquery needed -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> 
    <!--<script src="js/scripts.js"></script>-->

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
</html>
