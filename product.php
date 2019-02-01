<?php
    session_start();
    require "dbconnect/connect_to_Books.php";
    if(isset($_GET['Book_ID']) && $_GET['Book'] == 'Prayaas'){
        $bookid = $con2->real_escape_string($_GET['Book_ID']);
        $query = "SELECT * FROM Prayaas_Books WHERE Book_ID = '$bookid'";
        $result = mysqli_query($con2,$query);
        $num = mysqli_num_rows($result);
        if($num != 0){
            $data = mysqli_fetch_array($result);
            $book = $data['Books'];
            $count = $data['Count'];
            $mrp = $data['MRP'];
            $discounted = $data['Discounted'];
            $tab = 'P';
        }
    }elseif (isset($_GET['Book_ID']) ){
      $bookid = $_GET['Book_ID'];
    }else{
      header('location:index.php');
    }

    $table = array('New_Books','Rent_Books','Second_Hand_Books');
    for($var = 0;$var < 3; $var++ ){
        $query = "SELECT * FROM $table[$var] WHERE Book_ID = '$bookid'";
        $result = mysqli_query($con2,$query);
        $num = mysqli_num_rows($result);
        if($num != 0){
            $data = mysqli_fetch_array($result);
            $book = $data['Books'];
            $mrp = $data['MRP'];
            $discounted = $data['Discounted'];
            $bookid = $data['Book_ID'];
            $tab = $table[$var];
        }
    }
    if($bookid != $data['Book_ID']){
        header('location:index.php');
    }
    

    $pageTitle = $book;
?>
<html>
<?php include("includes/head.php");?>
<body>
  <?php include("includes/header.php");?>
  <?php include("includes/signup.php");?>
  <section class="contact-page-area relative" style="padding-top:50px;padding-bottom:50px">
    <div class="container cart-container">
		<div class="box">
			<div class="container">
					<div class="row row-centered">
						<div class="col-md-6 col-sm-4 col-xs-8 col-centered text-center wow animated zoomIn">
							<div class="product-img">
								<img src="img/<?php echo $bookid; ?>.jpg" width="250" alt="<?php echo $data['Books']; ?>" />
							</div>
						</div>
						<div class="col-md-6 col-sm-4 col-xs-8 col-centered text-center wow animated zoomIn">
							<div class="product-info">
								<p class="description"><?php echo $data['Books']; ?></p>
								<p class="price"><?php if($tab == 'P'){ echo $mrp;}else{ ?><span style="font-size:50%;">MRP: <strike>&#x20b9;<?php echo $mrp ?></strike></span><br/><br/>&#x20b9;<?php echo $discounted;} ?></p><br/>
								<?php if($tab == $table[1]){ ?> <h3 style="color:black;">You'll get at least 50% cashback after you return the book at the end of the semester if you order it on rent.</h3><br/> <?php } ?>
								<form method="POST" action="checkout.php?Book_ID=<?php echo $data['Book_ID']; ?>&Books=<?php echo $data['Books'] ?>" name="cart">
								    <?php if($tab == $table[1] || $tab == $table[2]){ ?>
								<select class="full-width has-padding has-border" id="type" name="Type" required>
                                    <option value="" selected disabled hidden>You want this book as a?</option>
                                    <option value="SHB">Second Hand Book</option>
                                    <option value="R">Rent</option>
                                </select>
                                <?php }elseif($tab == $table[0]){?>
                                <?php }elseif($tab == 'P'){ ?>
                                    <select class="full-width has-padding has-border" id="type" name="Type" required>
                                        <option value="R">Rent</option>
                                    </select>
                                <?php } ?>
								<button style="padding-top:3em;"><a class="button" name="sales" href="checkout.php?Book_ID=<?php echo $data['Book_ID']; ?>&Books=<?php echo $data['Books'] ?>">Order Now</a></button>
								</form>
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
