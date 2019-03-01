<?php
    session_start();
    $pageTitle = $q;
?>
<!DOCTYPE html>
<html>
  <?php include("includes/head.php");?>
  <body>
    <?php include("includes/header.php");?>
    <?php include("includes/signup.php") ?>

    <div class="row">
      <div class="col-lg-3 col-3 mx auto m-3" style="border-right : 2px solid grey; border-bottom : 2px solid grey";>
        <div class="container">
          <h2>Filters</h2>
          <ul>
            <li><a href="#" class="btn btn-info" role="button">Price</a></li>
            <li><a href="#" class="btn btn-info" role="button">Rent/ Buy</a></li>
            <li><a href="#" class="btn btn-info" role="button">City</a></li>
            <li><a href="#" class="btn btn-info" role="button">Newest first</a></li>
            <li><a href="#" class="btn btn-info" role="button">New/ Second Hand</a></li>
          </ul>
        </div>
      </div>
      <div id="feed" class="col-lg-8 col-8  mx auto m-3">
        <div id="wrap">
           <div id="columns" class="columns_4">
              <?php
                require "dbconnect/connect_to_books.php";
                $query = "SELECT * FROM Books LIMIT 40";
                $result = mysqli_query($con_books,$query);
                while($row = mysqli_fetch_array($result)){
              ?>
              <figure>
                <a href="product.php?Book_ID=<?php echo $row['Book_ID']; ?>" class="cover">
                    <img src="img/<?php echo $row['Book_ID']; ?>.jpg" />
                </a>
                <span class="price">&#x20b9;<?php echo $row['Selling_[Price]'] ?></span>
                <a class="button" name="submit" href="product.php?Book_ID=<?php echo $row['Book_ID']; ?>">Order Now</a>
              </figure>
              <?php } ?>
          </div>
        </div>
      </div>
    </div>

    <?php include("includes/footer.php"); ?>
  </body>
</html>
