<?php
    session_start();
    $pageTitle = 'Exchange';
    require "dbconnect/connect_to_Books.php";
    if(isset($_POST['share']) && isset($_SESSION['username'])){
        $gbook = $con2->real_escape_string($_POST['gbook']);
        
        $q = "INSERT INTO Exchange_Books(email,gbook) VALUES('{$_SESSION['email']}','$gbook')";
        if(mysqli_query($con2,$q)){
            $msg = "Your Book is listed.";
        }else{
            echo("Error description: " . mysqli_error($con));
        }
        
    }elseif(!isset($_SESSION['username']) && $_POST['share']){
        header('location:register.php');
    }
    
    if(isset($_POST['share']) && isset($_SESSION['username'])){
        $wbook = $con2->real_escape_string($_POST['search']);
        
        $q = "INSERT INTO Exchange_Books(email,gbook) VALUES('{$_SESSION['email']}','$wbook')";
        if(mysqli_query($con2,$q)){
            $msg2 = "Your book is listed. We will contact you as soon as the book is available.";    
        }else{
            echo("Error description: " . mysqli_error($con));
        }
    }elseif(!isset($_SESSION['username']) && $_POST['search']){
        header('location:register.php');
    }
?>
<html>
<?php include("includes/head.php");?>
<body>
  <?php include("includes/header.php");?>
  <?php include("includes/signup.php") ?>
  <section class="content-page-area relative" style="padding-top:7em;padding-bottom:7em;">
		<div class="container">
			<div class="row fullscreen d-flex align-items-center justify-content-center">
				<div class="banner-content col-lg-6 col-md-12" style="background:#d8d5d0; float:left; border-left:5px solid #c0c0c0;">
          <section class="wrapper banner-content" style="padding-top:20px;">
            <p style="color:black">Book You Want to Share</p>
          </section>
          <h4 class="wrapper banner-content">Do you have books in your shelf that you no longer read? Swap them with the books you need.<br></h4>
          <section class="wrapper">
            <div class="row d-flex align-items-center justify-content-center">
              <form action="exchange.php" class="form-box d-flex justify-content-between" method="POST" name="share">
                <input type="text" placeholder="Enter a Book" class="form-control" name="gbook">
                <button type="submit" name="share" class="btn" style="float: right;">Submit</button>
              </form>
              <?php echo $msg; ?>
            </div>
          </section>
        </div>
        <div class="banner-content col-lg-6 col-md-12" style="background:#d8d5d0  ; float:left; border-left:5px solid #c0c0c0; border-right:5px solid #c0c0c0;">
          <section class="wrapper banner-content" style="padding-top:20px;">
            <p style="color:black">Book You Want to Read</p>
          </section>
          <h4 class="wrapper banner-content">The books you wish to read in exchange of the books you no longer read.<br></h4>
          <section class="wrapper">
            <div class="row d-flex align-items-center justify-content-center">
              <form action="exchange.php" class="form-box d-flex justify-content-between" method="POST" name="search">
                <input type="text" placeholder="Enter a Book" class="form-control" name="wbook">
                <button type="submit" name="search" class="btn" style="float: right;">Submit</button>
              </form>
            </div>
          </section>
        </div>
        <?php echo $msg2; ?>
      </div>
    </div>
  </section>
  <?php include("includes/footer.php"); ?>
</body>
</html>
