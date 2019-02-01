<?php
    session_start();
    $pageTitle = 'Prayaas';
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<?php include("includes/head.php");?>
<body>
  <?php include("includes/header.php");?>
  <?php include("includes/signup.php") ?>
  <?php if($_SESSION['college'] == "VNIT"){
    require "dbconnect/connect_to_Books.php";
  ?>
    <section class="relative" style="padding-top:7em">
			<div class="banner-content">
				<h1 class="wow fadeIn" data-wow-duration="4s">Books Available On Rent by Prayaas</h1>
        <div class="input-wrap">
          <div class="form-box d-flex justify-content-between">
            <input id="search_books" type="text" placeholder="Search Books" class="form-control" name="search_books">
            <button type="submit" class="btn ti-search"></button>
          </div>
          <div id="result"></div>
        </div>
        <div id="wrap">
	         <div id="columns" class="columns_4">

             <?php $query = "SELECT * FROM Prayaas_Books";
             $result = mysqli_query($con2,$query);
             while($row = mysqli_fetch_array($result)){
              ?>
             <figure>
               <img src="img/<?php echo $row['Book_ID']; ?>.jpg">
	              <figcaption><?php echo $row['Books'] ?></figcaption>
                <span class="price">&#x20b9;<?php echo $row['MRP'] ?></span>
                <a class="button" href="product.php?Book_ID=<?php echo $row['Book_ID']; ?>&Book=<?php echo 'Prayaas' ?>">Buy Now</a>
	           </figure>
           <?php } ?>
          </div>
        </div>
      </div>
    </section>

  <?php include("includes/footer.php"); ?>
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
    <?php }else{ ?>
      <section class="contact-page-area relative" style="padding-top:7em; padding-bottom:7em;">
        <div class="container">
          <div class="row fullscreen d-flex align-items-center justify-content-center">
            <div class="banner-content col-lg-6 col-md-12" style="background:#d8d5d0; float:left;">
              <section class="wrapper banner-content" style="padding-top:20px;">
                <p style="color:black;">Books by Prayaas</p><br>
                <div class="align-items-center">
      <img src="img/logos/Prayaaslogo.png" alt="Prayaas Logo" height="100" width ="76.71" />
    </div>
                <p style="color:black;">This service is available exclusively for the students of VNIT.</p>
                <li class="menu-active main-nav"><a class="cd-signin hov" href="#0" style="color:#fff;">Login</a></li>
                <?php  if (isset($_SESSION['username'])) { ?>
                <li class="menu-active main-nav"><a class="cd-signin hov" href="#0" style="color:#fff;">Login</a></li>
                <?php } ?>
              </section>
              <h3 class="wrapper banner-content">Prayaas, the social club of VNIT, Nagpur is an elite group of thoughtful people who have come under one roof to raise the needy along with self-development. It began with 10 in number in September 2006 and now contains more than 100 members under the guidance of Team In-charge Dr. Dilip Peshwe and Professor In-charge Dr. P.M.Padole. Each and every activity they do inculcates a sense of responsibility in us to contribute for a better society.
They are engaged in activities like teaching, blood donation camp, Joy of Giving Week, Science Exhibition and also visit several NGO s which act as a driving force for our next move.</h3>
            </div>
          </div>
        </div>
      </section>
      <?php include("includes/footer.php"); ?>
  <?php } ?>
