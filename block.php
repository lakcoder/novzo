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
            // $(document).ready(function(){
            // 	load_data();
            // 	function load_data(rquery)
            // 	{
            // 		$.ajax({
            // 			url:"regphp/search.php",
            // 			method:"POST",
            // 			data:{rquery:rquery},
            // 			success:function(data)
            // 			{
            // 				$('#result').html(data);
            // 			}
            // 		});
            // 	}
            //
            // 	$('#search_books').keyup(function(){
            // 		var search = $(this).val();
            // 		if(search != '')
            // 		{
            // 			load_data(search);
            // 		}
            // 		else
            // 		{
            // 			load_data();
            // 		}
            // 	});
            // });
            </script>
        </div>
        <div id="wrap">
	         <div id="features" class="columns4">
            <figure onMouseOver="show_post()" onMouseOut="hide_post()">
              <div id="post"><a href="register.php"><span class="price">Posts</span><img src="img/blog.jpg" /></a></div>
              <div id="post_desc"><span class="price">Title</span><p style="font-size: 12px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel<span id="dots1">...</span><span id="more1">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>
              <a style="cursor:pointer" onclick="readmore1()" id="myBtn1">Read more</a>
              </div>
  	        </figure>
            <figure onMouseOver="show_blog()" onMouseOut="hide_blog()">
              <div id="blog"><a href="register.php"><span class="price">Blogs</span><img src="img/blog.jpg" /></a></div>
              <div id="blog_desc"><span class="price">Title</span><p style="font-size: 12px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel<span id="dots2">...</span><span id="more2">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>
              <a style="cursor:pointer" onclick="readmore2()" id="myBtn2">Read more</a>
              </div>
  	        </figure>
            <figure onMouseOver="show_qna()" onMouseOut="hide_qna()">
              <div id="qna"><a href="register.php"><span class="price">Q&A</span><img src="img/blog.jpg" /></a></div>
              <div id="qna_desc"><span class="price">Title</span><p style="font-size: 12px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel<span id="dots3">...</span><span id="more3">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>
              <a style="cursor:pointer" onclick="readmore3()" id="myBtn3">Read more</a>
              </div>
  	        </figure>
            <figure onMouseOver="show_review()" onMouseOut="hide_review()">
              <div id="review"><a href="register.php"><span class="price">Reviews</span><img src="img/blog.jpg" /></a></div>
              <div id="review_desc"><span class="price">Title</span><p style="font-size: 12px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel<span id="dots4">...</span><span id="more4">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>
              <a style="cursor:pointer" onclick="readmore4()" id="myBtn4">Read more</a>
              </div>
  	        </figure>
          </div>
        </div>
      </div>
    </section>


  <?php include("includes/footer.php"); ?>
</body>
</html>
