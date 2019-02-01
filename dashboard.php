<?php
    // session_start();
    $pageTitle = 'Dashboard';
    // if (isset($_SESSION['username'])) {
    // require "dbconnect/connect_to_Books.php";
    require "dbconnect/connect_to_signups.php";
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
<?php include("includes/head.php");?>

  <body onload="javascript:show_Dashboard()">

      <div class="primary-nav">
      	<button href="#" class="hamburger open-panel nav-toggle">
      <span class="screen-reader-text">Menu</span>
      </button>
      	<nav role="navigation" class="menu" id="nav-toggle">
      		<a href="index.php" class="logotype" style="color:#471d03;">nov<span>zo </span><i class=" ti-home "></i></a>
      		<div class="overflow-container">
      			<ul class="menu-dropdown">
					<!-- <li><a href="index.php">Home</a><span class="icon"><i class=" ti-home "></i></span></li> -->
      		<li><a href="javascript:show_Dashboard()">Dashboard</a><span class="icon"><i class="ti-dashboard"></i></span></li>
					<li><a href="javascript:show_Profile()">Your Profile</a><span class="icon"><i class="ti-settings"></i></span></li>
					<li><a href="javascript:show_Exchange()">Share/ Exchange</a><span class="icon"><i class="ti-bookmark-alt"></i></span></li>
					<li><a href="javascript:show_Rent()">Rent</a><span class="icon"><i class="ti-export"></i></span></li>
					<li><a href="javascript:show_Buy()">Buy</a><span class="icon"><i class="ti-shopping-cart-full"></i></span></li>
					<li><a href="javascript:show_Sell()">Sell</a><span class="icon"><i class="ti-briefcase"></i></span></li>
					<li><a href="javascript:show_RequestBooks()">Request Books</a><span class="icon"><i class="ti-book"></i></span></li>
					<li><a href="javascript:show_DonateBooks()">Donate Books</a><span class="icon"><i class="ti-gift"></i></span></li>
					<!-- <li><a href="javascript:show_ContactUs()">Contact Us</a><span class="icon"><i class=" ti-envelope "></i></span></li> -->
					<li><a href="regphp/logout.php">Logout</a><span class="icon"><i class=" ti-key "></i></span></li>
      			</ul>
      		</div>
      	</nav>
      </div>

    <section id="dashboard" class="relative" style="padding-top:3em;padding-bottom:2em;">
      	<div id="main">
      		<div id="main-contents">
            <!--<div  style="float:left; text-align: right;" class="col-lg-6">
            <figure>
              <a class="button" style="width:20%;" href="index.php">Home</a>
              <a class="button" style="width:20%;" href="regphp/logout.php">Logout</a>
            </figure>
            </div>
      			<h2>Welcome, <?php echo $_SESSION['username']; ?></h2>-->
            <section id="welcome">
              <div class="container">
              <div class="banner-content">
                  <h1>Welcome, <?php echo $_SESSION['username']; ?></h1>
              </div>
              <button class="accordion">New Books that you have bought</button>
              <div class="panel">
                <?php
                    $query = "SELECT * FROM Sales WHERE Email='{$_SESSION['email']}' AND Type='NB'";
                    $result = mysqli_query($con2,$query);
                    while($row = mysqli_fetch_array($result)){
                ?>
                <a href="product.php?Book_ID=><?php $row['Book_ID']; ?>"><?php echo $row['Books']; ?></a><br/>
              </div>
              <?php } ?>
              <div style="float:right;"><br/></div>

              <button class="accordion">Second Hand Books that you have bought</button>
              <div class="panel">
                <?php
                    $query = "SELECT * FROM Sales WHERE Email='{$_SESSION['email']}' AND Type='SHB'";
                    $result = mysqli_query($con2,$query);
                    while($row = mysqli_fetch_array($result)){
                ?>
                <a href="product.php?Book_ID=><?php $row['Book_ID']; ?>"><?php echo $row['Books']; ?></a><br/>
              </div>
              <?php } ?>
              <div style="float:right;"><br/></div>

              <button class="accordion">Books that you have sold</button>
              <div class="panel">
                <?php
                    $query = "SELECT * FROM Sales WHERE Email='{$_SESSION['email']}' AND Type='SB'";
                    $result = mysqli_query($con2,$query);
                    while($row = mysqli_fetch_array($result)){
                ?>
                <a href="product.php?Book_ID=><?php $row['Book_ID']; ?>"><?php echo $row['Books']; ?></a><br/>
              </div>
              <?php } ?>
              <div style="float:right;"><br/></div>

              <button class="accordion">Books that you have taken in exchange</button>
              <div class="panel">
                <?php
                    $query = "SELECT * FROM Sales WHERE Email='{$_SESSION['email']}' AND Type='TB'";
                    $result = mysqli_query($con2,$query);
                    while($row = mysqli_fetch_array($result)){
                ?>
                <a href="product.php?Book_ID=><?php $row['Book_ID']; ?>"><?php echo $row['Books']; ?></a><br/>
              </div>
              <?php } ?>
              <div style="float:right;"><br/></div>

              <button class="accordion">Books that you have given in exchange</button>
              <div class="panel">
                <?php
                    $query = "SELECT * FROM Sales WHERE Email='{$_SESSION['email']}' AND Type='GB'";
                    $result = mysqli_query($con2,$query);
                    while($row = mysqli_fetch_array($result)){
                ?>
                <a href="product.php?Book_ID=><?php $row['Book_ID']; ?>"><?php echo $row['Books']; ?></a><br/>
              </div>
              <?php } ?>
              <div style="float:right;"><br/></div>

              <button class="accordion">Books that you have taken on rent</button>
              <div class="panel">
                <?php
                    $query = "SELECT * FROM Sales WHERE Email='{$_SESSION['email']}' AND Type='R'";
                    $result = mysqli_query($con2,$query);
                    while($row = mysqli_fetch_array($result)){
                ?>
                <a href="product.php?Book_ID=><?php $row['Book_ID']; ?>"><?php echo $row['Books']; ?></a><br/>
              </div>
              <?php } ?>
              <div style="float:right;"><br/></div>
              </div>
            </section>
      		</div>
      	</div>
      </section>

      <div id="profile" class="container-contact100 relative" style="padding-bottom:7em;">
        <div class="container">
          <div class="row fullscreen d-flex align-items-center justify-content-center">
    		<div class="wrap-contact100">
    			<form class="contact100-form validate-form">
    				<span class="contact100-form-title">Your Details</span>
    				

    				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
    					<span class="label-input100">FULL NAME *</span>
    					<input class="input100" type="text" name="name" value="<?php $data['Name']; ?>" placeholder="">
    				</div>

    				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Enter Your Email (e@a.x)">
    					<span class="label-input100">Email *</span>
    					<input class="input100" type="text" name="email" value="<?php echo $data['Email'] ?>" placeholder="">
    				</div>

    				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100">
    					<span class="label-input100">Phone *</span>
    					<input class="input100" type="text" name="phone" value="<?php echo $data['Phone']; ?>" placeholder="">
    				</div>

    				<div class="wrap-input100 validate-input input100-select bg1">
    					<span class="label-input100">College</span>
    					<div>
    						<select class="js-select2" name="service" onchange="show_vnit(this)">
    							<option value="0">Choose Your College</option>
    							<option id="vnit" value="1">VNIT</option>
    							<option value="2">RKNEC</option>
    							<option value="3">Other</option>
    						</select>
    						<div class="dropDownSelect2"></div>
    					</div>
    				</div>

    				<div class="w-full dis-none" id="show_vnit" style="display:none;">
    					<div class="wrap-contact100-form-radio">
    						<span class="label-input100">You Are A?</span>

    						<div class="contact100-form-radio m-t-15">
    							<input class="input-radio100" id="radio1" type="radio" name="type-product" value="Hostellite" onclick="show_hostel()">
    							<label class="label-radio100" for="radio1">
    								Hostellite
    							</label>
    						</div>

    						<div class="contact100-form-radio">
    							<input class="input-radio100" id="radio2" type="radio" name="type-product" value="dayski" onclick="show_hostel()">
    							<label class="label-radio100" for="radio2">
    								Dayski
    							</label>
    						</div>
    					</div>
    					<div class="w-full dis-none" id="show_hostel" style="display:none;">
    						<div class="wrap-input100 validate-input bg1">
    							<span class="label-input100">Room Number *</span>
    							<input class="input100" type="text" name="name" placeholder="Room No">
    						</div>

    						<div class="wrap-input100 validate-input bg1">
    							<span class="label-input100">Hostel Block *</span>
    							<input class="input100" type="text" name="name" placeholder="Hostel Block">
    						</div>
    					</div>

    				</div>

    				<div class="container-contact100-form-btn">
    					<button class="contact100-form-btn">
    						<span>Update
    							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
    						</span>
    					</button>
    				</div>
    			</form>
    		</div>
      </div>
    </div>
    	</div>

    <!--<section id="exchange" class="content-page-area relative" style="padding-top:50px;">-->
		<div id="exch" class="container content-page-area relative" style="padding-bottom:7em;">
			<div class="row fullscreen d-flex align-items-center justify-content-center">
				<div class="banner-content col-lg-6 col-md-12" style="background:#d8d5d0; float:left; border-left:5px solid #c0c0c0;">
          <div class="wrapper banner-content">
            <p style="color:black">Book You Want to Share</p>
          </div>
          <h4 class="wrapper banner-content">Do you have books in your shelf that you no longer read?<br></h4>
          <div class="wrapper">
            <div class="row d-flex align-items-center justify-content-center">
              <form action="regphp/exbook.php" class="form-box d-flex justify-content-between">
                <input type="text" placeholder="Enter a Book" class="form-control" name="gbook">
                <button class="btn" style="float: right;">Share</button>
              </form>
            </div>
          </div>
        </div>
        <div class="banner-content col-lg-6 col-md-12" style="background:#d8d5d0  ; float:left; border-left:5px solid #c0c0c0; border-right:5px solid #c0c0c0;">
          <div class="wrapper banner-content">
            <p style="color:black">Book You Want to Read</p>
          </div>
          <h4 class="wrapper banner-content">Do you have books in your shelf that you no longer read?<br></h4>
          <div class="wrapper">
            <div class="row d-flex align-items-center justify-content-center">
              <form action="regphp/exbook.php" class="form-box d-flex justify-content-between">
                <input type="text" placeholder="Enter a Book" class="form-control" name="wbook">
                <button class="btn ti-search" style="float: right;"></button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  <!--</section>-->

    <section id="rent" class="contact-page-area relative" >
			<div class="banner-content">
				<h1 class="wow fadeIn" data-wow-duration="4s">Books Available On Rent</h1>
        <div class="input-wrap">
          <div class="form-box d-flex justify-content-between">
            <input id="search_books" type="text" placeholder="Search Books" class="form-control" name="search_books">
            <button type="submit" class="btn ti-search"></button>
          </div>
        </div>
        <div id="wrap">
	         <div id="columns" class="columns_4">
             <figure>
               <img src="ruU04I6.jpg">
	              <figcaption>Book 1</figcaption>
                <span class="price">&#x20b9;44</span>
                <a class="button" href="#">Buy Now</a>
	           </figure>

	           <figure>
	              <img src="sPxEkEI.jpg">
	              <figcaption>Book 2</figcaption>
                <span class="price">&#x20b9;44</span>
                <a class="button" href="#">Buy Now</a>
	          </figure>

            <figure>
          	<img src="S3Umfmb.jpg">
          	<figcaption>Book 3</figcaption>
              <span class="price">&#x20b9;44</span>
              <a class="button" href="#">Buy Now</a>
          	</figure>

          	<figure>
          	<img src="x1IZjjy.jpg">
          	<figcaption>Book 4</figcaption>
              <span class="price">&#x20b9;44</span>
              <a class="button" href="#">Buy Now</a>
          	</figure>

             <figure>
          	 <img src="Jv8IWKQ.jpg">
          	<figcaption>Book 5</figcaption>
              <span class="price">&#x20b9;44</span>
              <a class="button" href="#">Buy Now</a>
          	</figure>

             <figure>
          	 <img src="MpLejRu.jpg">
          	<figcaption>Book 6</figcaption>
               <span class="price">&#x20b9;44</span>
               <a class="button" href="#">Buy Now</a>
          	</figure>

          	<figure>
          	<img src="SZmPJ7W.jpg">
          	<figcaption>Book 7</figcaption>
              <span class="price">&#x20b9;44</span>
              <a class="button" href="#">Buy Now</a>
          	</figure>

            <figure>
          	   <img src="OiEMgMx.jpg">
          	   <figcaption>Book 8</figcaption>
               <span class="price">&#x20b9;44</span>
               <a class="button" href="#">Buy Now</a>
          	</figure>

            <figure>
          	   <img src="HolvggB.jpg">
               <figcaption>Book 8</figcaption>
               <span class="price">&#x20b9;44</span>
               <a class="button" href="#">Buy Now</a>
          	</figure>
          </div>
        </div>
      </div>
    </section>

    <section id="buy" class="contact-page-area relative">
			<div class="banner-content">
				<h1 class="wow fadeIn" data-wow-duration="4s">Available New Books</h1>
        <div class="input-wrap">
          <div class="form-box d-flex justify-content-between">
            <input id="search_books" type="text" placeholder="Search Books" class="form-control" name="search_books">
            <button type="submit" class="btn ti-search"></button>
          </div>
        </div>
        <div id="wrap">
	         <div id="columns" class="columns_4">
             <figure>
               <img src="ruU04I6.jpg">
	              <figcaption>Book 1</figcaption>
                <span class="price">&#x20b9;44</span>
                <a class="button" href="#">Buy Now</a>
	           </figure>

	           <figure>
	              <img src="sPxEkEI.jpg">
	              <figcaption>Book 2</figcaption>
                <span class="price">&#x20b9;44</span>
                <a class="button" href="#">Buy Now</a>
	          </figure>

            <figure>
          	<img src="S3Umfmb.jpg">
          	<figcaption>Book 3</figcaption>
              <span class="price">&#x20b9;44</span>
              <a class="button" href="#">Buy Now</a>
          	</figure>

          	<figure>
          	<img src="x1IZjjy.jpg">
          	<figcaption>Book 4</figcaption>
              <span class="price">&#x20b9;44</span>
              <a class="button" href="#">Buy Now</a>
          	</figure>

             <figure>
          	 <img src="Jv8IWKQ.jpg">
          	<figcaption>Book 5</figcaption>
              <span class="price">&#x20b9;44</span>
              <a class="button" href="#">Buy Now</a>
          	</figure>

             <figure>
          	 <img src="MpLejRu.jpg">
          	<figcaption>Book 6</figcaption>
               <span class="price">&#x20b9;44</span>
               <a class="button" href="#">Buy Now</a>
          	</figure>

          	<figure>
          	<img src="SZmPJ7W.jpg">
          	<figcaption>Book 7</figcaption>
              <span class="price">&#x20b9;44</span>
              <a class="button" href="#">Buy Now</a>
          	</figure>

            <figure>
          	   <img src="OiEMgMx.jpg">
          	   <figcaption>Book 8</figcaption>
               <span class="price">&#x20b9;44</span>
               <a class="button" href="#">Buy Now</a>
          	</figure>

            <figure>
          	   <img src="HolvggB.jpg">
               <figcaption>Book 8</figcaption>
               <span class="price">&#x20b9;44</span>
               <a class="button" href="#">Buy Now</a>
          	</figure>
          </div>
        </div>
      </div>
    </section>

    <section id="sell" class="contact-page-area relative">
    	<div class="container">
    		<div class="row fullscreen d-flex align-items-center justify-content-center">
                <div class="banner-content col-lg-6 col-md-12" style="background:#d8d5d0; float:left; border-left:5px solid #c0c0c0; border-right:5px solid #c0c0c0;">
                    <section class="wrapper banner-content">
                        <p class="wow fadeIn" data-wow-duration="4s">Sell a Book</p>
                    </section>
                    <h4 class="wrapper banner-content">Sell your unused books at 60%* of the original cost of the book.<br></h4>
                    <section class="wrapper">
                        <div class="row d-flex align-items-center justify-content-center">
                            <form action="" class="form-box d-flex justify-content-between">
                                <input type="text" placeholder="Enter a Book" class="form-control" name="username">
                                <button class="btn" style="float: right;">Submit</button>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>

    <section id="request" class="contact-page-area relative">
    	<div class="container">
    		<div class="row fullscreen d-flex align-items-center justify-content-center">
                <div class="banner-content col-lg-6 col-md-12" style="background:#d8d5d0; float:left; border-left:5px solid #c0c0c0; border-right:5px solid #c0c0c0;">
          <section class="wrapper banner-content">
            <p class="wow fadeIn" data-wow-duration="4s">Can't Find The Book You Need?<br>Request Books</p>
          </section>
          <section class="wrapper">
            <div class="row d-flex align-items-center justify-content-center">
              <form action="" class="form-box d-flex justify-content-between">
                <input type="text" placeholder="Enter a Book" class="form-control" name="username">
                <button class="btn" style="float: right;">Submit</button>
              </form>
            </div>
          </section>
        </div>
            </div>
        </div>
    </section>

    <section id="donate" class="contact-page-area relative">
    <div id="DonateBooks" class="container">
      <div class="row fullscreen d-flex align-items-center justify-content-center">
        <div class="banner-content col-lg-6 col-md-12" style="background:#d8d5d0; float:left;">
          <section class="wrapper banner-content" >
            <p>Donate a Book</p>
          </section>
          <h4 class="wrapper banner-content">Do you have books in your shelf that you no longer read?<br><br>Your small help can make a significant difference to the lives who need them the most.</h4>
          <section class="wrapper">
            <div class="row d-flex align-items-center justify-content-center">
              <form action="" class="form-box d-flex justify-content-between">
                <input type="text" placeholder="Enter a Book" class="form-control" name="donate">
                <button class="btn" style="float: right;">Submit</button>
              </form>
            </div>
          </section>
        </div>
      </div>
    </div>
  </section>

      <section id="contact" class="contact-page-area relative section-gap">
            <div class="banner-content">
    		     <h1 class="wow fadeIn" data-wow-duration="4s">Available New Books</h1><br><br>
    		</div>
    		<div class="container">
    			<div class="row">
    				<div class="col-lg-4 d-flex flex-column address-wrap">
    					<div class="single-contact-address d-flex flex-row">
    						<div class="icon">
    							<span class="lnr lnr-envelope"></span>
    						</div>
    						<div class="contact-details">
    							<h5>office@novzo.in</h5>
    							<p>Send us your query anytime!</p>
    						</div>
    					</div>
    				</div>
    				<div class="col-lg-8">
    					<form class="form-area contact-form text-right" id="myForm" action="mail.php" method="post">
    						<div class="row">
    							<div class="col-lg-6 form-group">
    								<input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'"
    								 class="common-input mb-20 form-control" required="" type="text">

    								<input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''"
    								 onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">

    								<input name="subject" placeholder="Enter subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter subject'"
    								 class="common-input mb-20 form-control" required="" type="text">
    							</div>
    							<div class="col-lg-6 form-group">
    								<textarea class="common-textarea form-control" name="message" placeholder="Enter Messege" onfocus="this.placeholder = ''"
    								 onblur="this.placeholder = 'Enter Messege'" required=""></textarea>
    							</div>
    							<div class="col-lg-12">
    								<div class="alert-msg" style="text-align: left;"></div>
    								<button class="primary-btn" style="float: right;">Send Message</button>
    							</div>
    						</div>
    					</form>
    				</div>
    			</div>
    		</div>
    	</section>

    <!-- FOOTER -->
    <?php include("includes/footer.php"); ?>
    <script type="text/javascript" src="js/custom.js"></script>
    <script type="text/javascript" src="js/dashboard.js"></script>
    <!-- <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.nav.js"></script>
    <script type="text/javascript" src="syntax-highlighter/scripts/shCore.js"></script>
    <script type="text/javascript" src="syntax-highlighter/scripts/shBrushXml.js"></script>
    <script type="text/javascript" src="syntax-highlighter/scripts/shBrushCss.js"></script>
    <script type="text/javascript" src="syntax-highlighter/scripts/shBrushJScript.js"></script>
    <script type="text/javascript" src="syntax-highlighter/scripts/shBrushPhp.js"></script>
    <script type="text/javascript">
        SyntaxHighlighter.all()
    </script>
	<script type="text/javascript" src="js/DashboardMenu.js"></script>

  </body>
</html>
<?php //} else{
        //header('location:../register.php');
        //}
?>
