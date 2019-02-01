<?php
session_start();
$pageTitle = 'Request';
if(isset($_POST['request']) && isset($_SESSION['username'])){
  require "dbconnect/connect_to_Books.php";

  $book = $con2->real_escape_string($_POST['book']);
  $type = $con2->real_escape_string($_POST['type']);

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
    $query = "INSERT INTO Request_Books(Email,Books,Type) VALUES('{$_SESSION['email']}','$book','$type')";
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
            <p style="color:black">Your request has reached us. We'll contact you soon.</p>
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
}elseif(isset($_POST['request'])){
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
            <p style="color:black">Request a Book</p>
          </section>
          <h4 class="wrapper banner-content">Can't Find The Book You Need? Let Novzo search it for you.</h4>
          <section class="wrapper">
            <div class="row d-flex align-items-center justify-content-center">
              <form action="request.php" method="POST" class="form-box d-flex justify-content-between">
                <input type="text" placeholder="Enter a Book" class="form-control" name="book" required />
                <select class="full-width has-padding has-border" id="type" name="type" required>
                  <option value="" selected disabled hidden>You want this book on?</option>
                  <option value="Rent">Rent</option>
                  <option value="New">New Book</option>
                  <option value="Second_Hand">Second Hand</option>
                </select>
                <button name="request" class="btn ti-search" style="float: right;"></button>
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
