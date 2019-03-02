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
          <form action="search.php" method="post">
          <ul>
            <li><a id="price_but" href="#" class="btn btn-info" role="button">Price</a></li>
            <div id="price" style="display:none">
                <input type="number" name="min" placeholder="Min Value" />
                <input type="number" name="max" placeholder="Max Value" />
            </div>
            <li><a id="type_but" href="#" class="btn btn-info" role="button">Type</a></li>
            <div id="btype" style="display:none">
                <div>
                  <input type="checkbox" name="rent" value="rent" />Rent
                  <input class="buy" type="checkbox" name="buy" value="buy" onchange="type()" />Buy
                </div>
                <div class="buy_res">
                  <input type="checkbox" name="new" value="new" />New
                  <input type="checkbox" name="sh" value="second hand" />Second Hand
                </div>
            </div>
            <li><a id="city_but" href="#" class="btn btn-info" role="button">City</a></li>
            <div id="city" style="display:none">
                <select class="" name="city" placeholder="City">
                  <option value="" selected disabled hidden>Choose City</option>
                  <option value="NIT Agartala" style="color:black">Mumbai</option>
                  <option value="NIT Allahabad" style="color:black">Nagpur</option>
                </select>
                <input type="submit" name="price_range" />
            </div>
            <li><a id="sort_but" href="#" class="btn btn-info" role="button">Sort Books</a></li>
            <div id="sort" style="display:none">
                <button name="newest" value="">Newest First</button>
                <button name="oldest" value="">Oldest FIrst</button>
            </div>
          </ul>
        </form>
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
