<?php
    session_start();
    $pageTitle = 'Rent';
?>
<html>
<?php include("includes/head.php");?>
<body>
    <?php include("includes/header.php");?>
    <?php include("includes/signup.php") ?>

    <section class="relative" style="padding-top:7em">
			<div class="banner-content">
				<h1 class="wow fadeIn" data-wow-duration="4s">Books Available On Rent</h1>
        <div class="input-wrap">
          <div class="form-box d-flex justify-content-between">
            <input id="search_books" type="text" placeholder="Search Books" class="form-control" name="search_books">
            <button type="submit" class="btn ti-search"></button>
          </div>
          <div id="result"></div>
          <script>
            $(document).ready(function(){
            	load_data();
            	function load_data(rquery)
            	{
            		$.ajax({
            			url:"regphp/search.php",
            			method:"POST",
            			data:{rquery:rquery},
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
        <div id="wrap">
	         <div id="columns" class="columns_4">
	             <?php
                require "dbconnect/connect_to_Books.php";
                $query = "SELECT * FROM Rent_Books LIMIT 53";
                $result = mysqli_query($con2,$query);
                while($row = mysqli_fetch_array($result)){
                 ?>
            <figure>
            <a href="product.php?Book_ID=<?php echo $row['Book_ID']; ?>" class="cover">
                <img src="img/<?php echo $row['Book_ID']; ?>.jpg" />
            </a>
              <span class="price">&#x20b9;<?php echo $row['Discounted'] ?></span>
              <a class="button" name="submit" href="product.php?Book_ID=<?php echo $row['Book_ID']; ?>">Order Now</a>
	        </figure>
	           <?php } ?>
          </div>
        </div>
      </div>
    </section>


  <?php include("includes/footer.php"); ?>
</body>
</html>