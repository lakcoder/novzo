<?php
    session_start();
    $pageTitle = 'Home';
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<?php include("includes/head.php");?>
<body>
  <?php include("includes/header.php");?>
  <?php include("includes/signup.php") ?>
  <!-- Start Banner Area -->
	<section class="home-banner-area relative" style="padding-top:5em; padding-bottom:7em;">
		<div class="container">
			<div class="row fullscreen d-flex align-items-center justify-content-center">
				<div class="banner-content col-lg-8 col-md-12">
					<h1 class="wow fadeIn" data-wow-duration="4s">The Archive Of Every Book <br> You Need</h1>
					<div class="input-wrap">
						<div class="form-box d-flex justify-content-between" style="border: 1px solid #000; radius:2px;">
							<input id="search_books" type="text" placeholder="Search Books" class="form-control" name="search">
							<button type="submit" class="btn ti-search"></button>
						</div>
						<div id="result"></div>
						<script>
                            $(document).ready(function(){
                            	load_data();
                            	function load_data(query)
                            	{
                            		$.ajax({
                            			url:"regphp/search.php",
                            			method:"POST",
                            			data:{query:query},
                            			success:function(data)
                            			{
                            				$('#result').html(data);
                            			}
                            		});
                            	}
                            
                            	$('#search_books').keyup(function(){
                            		var search = $(this).val();
                            		if(search != '')
                            		{
                            			load_data(search);
                            		}
                            		else
                            		{
                            			load_data();
                            		}
                            	});
                            });
                        </script>
					</div>
					<div class="feature-inner row">
						<div class="col-lg-4 col-md-12"><a href="buy.php">
							<div class="feature-item">
								<i style="color:#fff;" class="ti-shopping-cart-full"></i>
								<h4 style="color:#fff;">Buy</h4>
							</div></a>
						</div>
						<div class="col-lg-4 col-md-12"><a href="exchange.php">
							<div class="feature-item">
								<i style="color:#fff;" class="ti-bookmark-alt"></i>
								<h4 style="color:#fff;">Exchange</h4>
							</div></a>
						</div>
						<div class="col-lg-4 col-md-12"><a href="rent.php">
							<div class="feature-item">
								<i style="color:#fff;" class="ti-export"></i>
								<h4 style="color:#fff;">Rent</h4>
							</div></a>
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<section class="wrapperAll">
  <section class="wrapper banner-content">
    <p style="color:black;">New Books</p>
  </section>
  <section class="sliderComplete">
    <section class="wrapper">
      <ul class="slider">
          <?php require "dbconnect/connect_to_Books.php";
                $query = "SELECT * FROM New_Books ORDER BY RAND() LIMIT 6";
                $result = mysqli_query($con2,$query);
                while($row = mysqli_fetch_array($result)){
            ?>
        <li>
            <a class="align-items-center" href="product.php?Book_ID=<?php echo $row['Book_ID']; ?>" class="cover">
                <img style="height:20em;" src="img/<?php echo $row['Book_ID']; ?>.jpg" />
            </a>
            <a class="button" name="submit" href="product.php?Book_ID=<?php echo $row['Book_ID']; ?>">Buy Now</a>
        </li>
        <?php } ?>
      </ul>
    </section>
  </section>
  <section class="wrapper banner-content">
    <a href="buy.php" style="color:black;"><u>View More</u></a>
  </section>
</section>

<section class="wrapperAll" style="background:#b4e1ea">
<section class="wrapper banner-content">
  <p style="color:black">Books Available on Rent</p>
</section>

<section class="sliderComplete">
    <section class="wrapper">
      <ul class="slider">
        <?php   require "dbconnect/connect_to_Books.php";
                $query = "SELECT * FROM Rent_Books ORDER BY RAND() LIMIT 6";
                $result = mysqli_query($con2,$query);
                while($row = mysqli_fetch_array($result)){
            ?>
        <li>
            <a href="product.php?Book_ID=<?php echo $row['Book_ID']; ?>" class="cover">
                <img style="height:20em;" src="img/<?php echo $row['Book_ID']; ?>.jpg" />
            </a>
            <a class="button" name="submit" href="product.php?Book_ID=<?php echo $row['Book_ID']; ?>">Order Now</a>
        </li>
        <?php } ?>
      </ul>
    </section>
</section>
<section class="wrapper banner-content">
    <a href="rent.php" style="color:black;"><u>View More</u></a>
  </section>
</section>

<section class="wrapperAll">
<section class="wrapper banner-content">
  <p style="color:black">Available Second Hand Books</p>
</section>

<section class="sliderComplete">
    <section class="wrapper">
      <ul class="slider">
        <?php   require "dbconnect/connect_to_Books.php";
                $query = "SELECT * FROM Second_Hand_Books ORDER BY RAND() LIMIT 6";
                $result = mysqli_query($con2,$query);
                while($row = mysqli_fetch_array($result)){
            ?>
        <li>
            <a href="product.php?Book_ID=<?php echo $row['Book_ID']; ?>" class="cover">
                <img style="height:20em;" src="img/<?php echo $row['Book_ID']; ?>.jpg" />
            </a>
            <a class="button" name="submit" href="product.php?Book_ID=<?php echo $row['Book_ID']; ?>">Buy Now</a>
        </li>
        <?php } ?>
      </ul>
    </section>
</section>
<section class="wrapper banner-content">
    <a href="buy.php" style="color:black;"><u>View More</u></a>
  </section>
</section>

  <section class="wrapperAll" style="background:#b4e1ea;">
    <section class="wrapper banner-content">
      <p style="color:black">Donate Books</p>
    <div class="align-items-center">
      <img src="img/logos/Prayaaslogo.png" alt="Prayaas Logo" height="100" width ="76.71" />
    </div>
    </section>
    <h4 class="wrapper banner-content">Do you have books in your shelf that you no longer read?<br></h4>
    <section class="wrapper">
      <div class="row d-flex align-items-center justify-content-center">
        <a href="donate.php" class="primary-btn">Donate Your Books</a>
      </div>
    </section>
  </section>
  
  <section class="wrapperAll">
    <section class="wrapper banner-content">
      <p style="color:black">Request Books</p>
    <br>
    </section>
    <h4 class="wrapper banner-content">Can't Find The Book You Need? Let Novzo search it for you.<br></h4>
    <section class="wrapper">
      <div class="row d-flex align-items-center justify-content-center">
        <a href="request.php" class="primary-btn">Request Books</a>
      </div>
    </section>
  </section>

  
  <div id="back-top">
  <a title="Go to Top" href="#"></a>
</div>

  <?php include("includes/footer.php"); ?>
</body>
</html>
