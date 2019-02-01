<?php
    $pageTitle = 'Buy/ Sell';
?>
<html>
<?php include("includes/head.php");?>
<body>
    <?php include("includes/header.php");?>
    <?php include("includes/signup.php") ?>

    <section id="front" class="relative" style="padding-top:7em;padding-bottom:7em;">
    <div class="container">
      <div class="row fullscreen d-flex align-items-center justify-content-center">
        <div class="banner-content col-lg-6 col-md-12" style="background:#d8d5d0; float:left;">
          <section class="wrapper banner-content" style="padding-top:20px;">
            <p style="color:black">Buy/Sell a Book</p>
          </section>
          <h4 class="wrapper banner-content" style="padding-left:10px;">Do you want to <b>buy</b> a book or <b>sell</b> a book?<br></h4>
          <section class="wrapper">     
            <div class="row d-flex align-items-center justify-content-center">
              <a class="button" id="buybook" style="cursor:pointer;color:#fff;">Buy New Books</a>
              <a class="button" id="buyshbook" style="cursor:pointer;color:#fff;">Buy Second Hand Books</a>
              <a class="button" id="sellbook" style="cursor:pointer;color:#fff;">Sell Your Books</a>
            </div>
          </section>
        </div>
      </div>
    </div>
  </section>

  <section id="buy" class="relative" style="padding-top:7em;display:none;">
		<div class="banner-content">
		    <div id="bclose" class="ti-arrow-left" style="cursor:pointer;color:black;"></div>
			<h1 class="wow fadeIn" data-wow-duration="4s">Available New Books<br></h1>
            <div class="container">
                <div class="row d-flex align-items-center justify-content-center">
                    <div class="banner-content col-lg-6 col-md-12" style="background:#d8d5d0; float:left;">
                        <section class="wrapper banner-content" style="padding-top:20px;">
                            <p style="color:black">Buy a Book</p>
                        </section>
                        <h4 class="wrapper banner-content">Buy New Books at the cheapest rate in the market.</h4>
                        <div class="input-wrap">
                            <div class="form-box d-flex justify-content-between">
                                <input id="search_books" type="text" placeholder="Search Books" class="form-control" name="search_books">
                                <button type="submit" class="btn ti-search"></button>
                            </div>
                            <div id="result"></div>
                            <script>
                              $(document).ready(function(){
                              	load_data();
                              	function load_data(bquery)
                              	{
                              		$.ajax({
                              			url:"regphp/search.php",
                              			method:"POST",
                              			data:{bquery:bquery},
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
                    </div>
                </div>
            </div>
            <div id="wrap">
	            <div id="columns" class="columns_4">

                <?php
                require "dbconnect/connect_to_Books.php";
                $query = "SELECT * FROM New_Books ORDER BY RAND() LIMIT 53";
                $result = mysqli_query($con2,$query);
                while($row = mysqli_fetch_array($result)){
                 ?>
            <figure>
              <a href="product.php?Book_ID=<?php echo $row['Book_ID']; ?>" class="cover">
                <img src="img/<?php echo $row['Book_ID']; ?>.jpg" />
            </a>
              <span class="price">&#x20b9;<?php echo $row['Discounted'] ?></span>
              <a class="button" name="submit" href="product.php?Book_ID=<?php echo $row['Book_ID']; ?>">Buy Now</a>
	        </figure>
            <?php } ?>
          </div>
        </div>
        <div class="container" style="padding-bottom:7em;">
                <div class="row d-flex align-items-center justify-content-center">
                    <div class="banner-content col-lg-6 col-md-12" style="background:#d8d5d0; float:left;">
                        <section class="wrapper banner-content" style="padding-top:20px;">
                            <p style="color:black">Request Books</p>
                        </section>
                        <h4 class="wrapper banner-content">Can't Find The Book You Need? We are here to search it for you.</h4>
                        <div class="input-wrap">
                            <div class="form-box d-flex justify-content-between">
                                <<form action="request.php" method="POST" class="form-box d-flex justify-content-between">
                                    <input type="text" placeholder="Enter a Book" class="form-control" name="book">
                                    <button name="request" class="btn" style="float: right;">Submit</button>
                                </form>
                            </div>
                            <div id="result"></div>
                        </div>
                    </div>
                </div>
            </div>
      </div>
    </section>
    
    <section id="shbuy" class="relative" style="padding-top:7em;display:none;">
		<div class="banner-content">
		    <div id="shclose" class="ti-arrow-left" style="cursor:pointer;color:black;"></div>
			<h1 class="wow fadeIn" data-wow-duration="4s">Available Second Hand Books<br></h1>
            <div class="container">
                <div class="row d-flex align-items-center justify-content-center">
                    <div class="banner-content col-lg-6 col-md-12" style="background:#d8d5d0; float:left;">
                        <section class="wrapper banner-content" style="padding-top:20px;">
                            <p style="color:black">Buy a Book</p>
                        </section>
                        <h4 class="wrapper banner-content">Buy Second Hand Books at the cheapest rate in the market.</h4>
                        <div class="input-wrap">
                            <div class="form-box d-flex justify-content-between">
                                <input id="shsearch_books" type="text" placeholder="Search Books" class="form-control" name="search_books">
                                <button type="submit" class="btn ti-search"></button>
                            </div>
                            <div id="result1"></div>
                            <script>
                              $(document).ready(function(){
                              	load_data();
                              	function load_data(shquery)
                              	{
                              		$.ajax({
                              			url:"regphp/search.php",
                              			method:"POST",
                              			data:{shquery:shquery},
                              			success:function(data)
                              			{
                              				$('#result1').html(data);
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
                    </div>
                </div>
            </div>
            <div id="wrap">
	            <div id="columns" class="columns_4">

                <?php
                require "dbconnect/connect_to_Books.php";
                $query = "SELECT * FROM Second_Hand_Books ORDER BY RAND() LIMIT 53";
                $result = mysqli_query($con2,$query);
                while($row = mysqli_fetch_array($result)){
                 ?>
            <figure>
              <a href="product.php?Book_ID=<?php echo $row['Book_ID']; ?>" class="cover">
                <img src="img/<?php echo $row['Book_ID']; ?>.jpg" />
            </a>
	           <figcaption><?php echo $row['Books']; ?></figcaption>
              <span class="price">&#x20b9;<?php echo $row['Discounted'] ?></span>
              <a class="button" name="submit" href="product.php?Book_ID=<?php echo $row['Book_ID']; ?>">Buy Now</a>
	        </figure>
            <?php } ?>
          </div>
        </div>
        <div class="container" style="padding-bottom:7em;">
                <div class="row d-flex align-items-center justify-content-center">
                    <div class="banner-content col-lg-6 col-md-12" style="background:#d8d5d0; float:left;">
                        <section class="wrapper banner-content" style="padding-top:20px;">
                            <p style="color:black">Request Books</p>
                        </section>
                        <h4 class="wrapper banner-content">Can't Find The Book You Need? We are here to search it for you.</h4>
                        <div class="input-wrap">
                            <div class="form-box d-flex justify-content-between">
                                <input id="search_books" type="text" placeholder="Search Books" class="form-control" name="search_books">
                                <button type="submit" class="btn ti-search"></button>
                            </div>
                            <div id="result"></div>
                        </div>
                    </div>
                </div>
            </div>
      </div>
    </section>

    <section id="sell" class="relative" style="padding-top:7em;padding-bottom:7em;display:none;">
       <?php 
      if(isset($_POST['sell']) && isset($_SESSION['username'])){
        require "../dbconnect/connect_to_Books.php";

        $book = $con2->real_escape_string($_POST['book']);

        if($book == ""){
          echo "Please enter a book.";
        }else{
          $query = "INSERT INTO Sell_Books(Email,Books) VALUES('{$_SESSION['email']}','$book')";
          echo "Your book is listed. We'll contact you soon.";
        }
      }elseif(isset($_POST['sell'])){
        header('location:register.php');
      }
      ?>
    <div class="container">
      <div class="row fullscreen d-flex align-items-center justify-content-center">
        <div class="banner-content col-lg-6 col-md-12" style="background:#d8d5d0; float:left;">
            <div id="sclose" class="ti-arrow-left" style="cursor:pointer; color:black;"></div>
          <section class="wrapper banner-content" style="padding-top:20px;">
            <p style="color:black">Sell a Book</p>
          </section>
          <h4 class="wrapper banner-content">Sell your unused books kept in your shelf at Novzo!<br></h4>
          <section class="wrapper">
            <div class="row d-flex align-items-center justify-content-center">
              <form action="sell.php" method="POST" class="form-box d-flex justify-content-between">
                <input type="text" placeholder="Enter a Book" class="form-control" name="book">
                <button name="sell" class="btn" style="float: right;">Submit</button>
              </form>
            </div>
          </section>
        </div>
      </div>
    </div>
  </section>


  <?php include("includes/footer.php"); ?>
  <script type="text/javascript" src="js/animate.js?v=1"></script>

</body>
</html>
