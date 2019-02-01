<?php
session_start();
$pageTitle = 'Donate ';
if(isset($_POST['donate']) && isset($_SESSION['username'])){
  require "dbconnect/connect_to_Books.php";

  $book = $con2->real_escape_string($_POST['book']);

  if($book == ""){ ?>
  <html>
<?php include("includes/head.php");?>
<body>
  <?php include("includes/header.php");?>
  <?php include("includes/signup.php") ?>
  <section class="contact-page-area relative" style="padding-top:7em;padding-bottom:7em;">
    <div class="container">
      <div class="row fullscreen d-flex align-items-center justify-content-center">
        <div class="banner-content col-lg-6 col-md-12" style="background:#d8d5d0; float:left;">
          <section class="wrapper banner-content" style="padding-top:20px;">
            <p style="color:black">Please enter a Book</p>
          </section>
        </div>
      </div>
    </div>
  </section>
  <?php include("includes/footer.php"); ?>
</body>
</html>
  <?php 
  }else{
    $query = "INSERT INTO Donate_Books(Email,Books) VALUES('{$_SESSION['email']}','$book')";
    if(mysqli_query($con2,$query)){
    ?>
    <html>
<?php include("includes/head.php");?>
<body>
  <?php include("includes/header.php");?>
  <?php include("includes/signup.php") ?>
  <section class="contact-page-area relative" style="padding-top:7em;padding-bottom:7em;">
    <div class="container">
      <div class="row fullscreen d-flex align-items-center justify-content-center">
        <div class="banner-content col-lg-6 col-md-12" style="background:#d8d5d0; float:left;">
          <section class="wrapper banner-content" style="padding-top:20px;">
            <p style="color:black">Thank you for listing your book for donation. We'll contact you soon.</p>
          </section>
        </div>
      </div>
    </div>
  </section>
  <?php include("includes/footer.php"); ?>
</body>
</html>
    <?php
  }
  }
}elseif(isset($_POST['donate'])){
  header('location:register.php');
}else{
?>
<html>
<?php include("includes/head.php");?>
<body>
  <?php include("includes/header.php");?>
  <?php include("includes/signup.php") ?>
  <section class="contact-page-area relative" style="padding-top:7em;padding-bottom:7em;">
    <div class="container">
      <div class="row fullscreen d-flex align-items-center justify-content-center">
        <div class="banner-content col-lg-6 col-md-12" style="background:#d8d5d0; float:left;">
          <section class="wrapper banner-content" style="padding-top:20px;">
            <p style="color:black">Donate a Book</p>
          </section>
          <h4 class="wrapper banner-content">Do you have books in your shelf that you no longer read?<br><br>Your small help can make a significant difference to the lives who need them the most.</h4>
          <section class="wrapper">
            <div class="row d-flex align-items-center justify-content-center">
              <form action="donate.php" method="POST" class="form-box d-flex justify-content-between">
                <input type="text" placeholder="Enter a Book" class="form-control" name="book">
                <button name="donate" class="btn" style="float: right;">Submit</button>
              </form>
            </div>
          </section>
        </div>
      </div>
    </div>
  </section>
  <?php include("includes/footer.php"); ?>
</body>
</html>
<?php } ?>
