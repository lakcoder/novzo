<!DOCTYPE html>
<html lang="en">
<!-- <head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head> -->
<?php include("includes/head.php");?>
<body>
  <?php include("includes/header.php");?>
  <?php include("includes/signup.php") ?>
<div>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <!-- <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol> -->

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img class="img-responsive" src="img\slider\123.jpg" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img class="img-responsive" src="img\slider\234.jpg" alt="Chicago" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<section>
  <div class="container-fluid">
  <div class="row">
    <div class="col-md-3 col-6 mx-auto mx-5 my-5" style="width:20%">
      <div class="block-container">
        <img src="img/abstract_triangle-01.png" alt="Avatar" class="block-image">
        <div class="block-overlay">
          <div id="blog_desc" class="block-text"><span class="price">Title</span><p style="font-size: 12px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel<span id="dots2">...</span><span id="more2">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>
          <a style="cursor:pointer" onclick="readmore2()" id="myBtn2">Read more</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-6 mx-auto mx-5 my-5" style="width:20%">
      <div class="block-container">
        <img src="img/abstract_triangle-01.png" alt="Avatar" class="block-image">
        <div class="block-overlay">
          <div id="blog_desc" class="block-text"><span class="price">Title</span><p style="font-size: 12px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel<span id="dots2">...</span><span id="more2">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>
          <a style="cursor:pointer" onclick="readmore2()" id="myBtn2">Read more</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-6 mx-auto mx-5 my-5" style="width:20%">
      <div class="block-container">
        <img src="img/abstract_triangle-01.png" alt="Avatar" class="block-image">
        <div class="block-overlay">
          <div id="blog_desc" class="block-text"><span class="price">Title</span><p style="font-size: 12px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel<span id="dots2">...</span><span id="more2">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>
          <a style="cursor:pointer" onclick="readmore2()" id="myBtn2">Read more</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-6 mx-auto mx-5 my-5" style="width:20%">
      <div class="block-container">
        <img src="img/abstract_triangle-01.png" alt="Avatar" class="block-image">
        <div class="block-overlay">
          <div id="blog_desc" class="block-text"><span class="price">Title</span><p style="font-size: 12px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel<span id="dots2">...</span><span id="more2">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>
          <a style="cursor:pointer" onclick="readmore2()" id="myBtn2">Read more</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<?php include("includes/footer.php"); ?>
</body>
</html>
