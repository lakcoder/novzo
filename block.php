<?php
    session_start();
    $pageTitle = 'Rent';
?>
<html>
<?php include("includes/head.php");?>
<body>
    <?php include("includes/header.php");?>
    <?php include("includes/signup.php") ?>

    <section>
      <div class="row">
        <div class="col-lg-3">
          <div class="block-container">
            <img src="img_avatar.png" alt="Avatar" class="block-image">
            <div class="block-overlay">
              <div id="blog_desc" class="block-text"><span class="price">Title</span><p style="font-size: 12px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel<span id="dots2">...</span><span id="more2">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>
              <a style="cursor:pointer" onclick="readmore2()" id="myBtn2">Read more</a>
              </div>
            </div>

          </div>
        </div>
        <div class="col-lg-3">
          <div class="block-container">
            <div id="blog_desc" class="block-image"><span class="price">Title</span><p style="font-size: 12px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel<span id="dots2">...</span><span id="more2">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>
            <a style="cursor:pointer" onclick="readmore2()" id="myBtn2">Read more</a>
            </div>
            <div class="block-overlay">
              <div class="block-text">Hello World</div>
              <img src="img/blog.jpg" alt="Avatar" class="block-image2">
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="block-container">
            <div id="blog_desc" class="block-image"><span class="price">Title</span><p style="font-size: 12px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel<span id="dots2">...</span><span id="more2">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>
            <a style="cursor:pointer" onclick="readmore2()" id="myBtn2">Read more</a>
            </div>
            <div class="block-overlay">
              <div class="block-text">Hello World</div>
              <img src="img/blog.jpg" alt="Avatar" class="block-image2">
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="block-container">
            <div id="blog_desc" class="block-image"><span class="price">Title</span><p style="font-size: 12px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel<span id="dots2">...</span><span id="more2">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>
            <a style="cursor:pointer" onclick="readmore2()" id="myBtn2">Read more</a>
            </div>
            <div class="block-overlay">
              <div class="block-text">Hello World</div>
              <img src="img/blog.jpg" alt="Avatar" class="block-image2">
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="relative" style="padding-top:7em">
			<!-- <div class="banner-content">
				<h1 class="wow fadeIn" data-wow-duration="4s">Books Available On Rent</h1>
        <div class="input-wrap">
          <div class="form-box d-flex justify-content-between">
            <input id="search_books" type="text" placeholder="Search Books" class="form-control" name="search_books">
            <button type="submit" class="btn ti-search"></button>
          </div>
          <div id="result"></div>


        </div> -->
        <!-- <div id="wrap">
	         <div id="features" class="columns4">
            <figure>
              <div class="block-container">
                <div id="blog_desc" class="block-image"><span class="price">Title</span><p style="font-size: 12px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel<span id="dots2">...</span><span id="more2">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>
                <a style="cursor:pointer" onclick="readmore2()" id="myBtn2">Read more</a>
                </div>
                <div class="image-middle">
                   <img src="img/blog.jpg" alt="Avatar" >

                </div>
              </div>
  	        </figure>
            <figure>

  	        </figure>
            <figure>
              <div class="block-container">
                <div id="blog_desc" class="block-text"><span class="price">Title</span><p style="font-size: 12px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel<span id="dots2">...</span><span id="more2">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>
                <a style="cursor:pointer" onclick="readmore2()" id="myBtn2">Read more</a>
                </div>
                <div class="image-middle">
                   <div class="overlay-text">John Doe</div>
                </div>
              </div>
  	        </figure>
            <figure>
              <div class="block-container">
                <div id="blog_desc" class="block-text"><span class="price">Title</span><p style="font-size: 12px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel<span id="dots2">...</span><span id="more2">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>
                <a style="cursor:pointer" onclick="readmore2()" id="myBtn2">Read more</a>
                </div>
                <div class="image-middle">
                   <div class="overlay-text">John Doe</div>
                </div>
              </div>
  	        </figure> -->
            <!-- <figure onMouseOver="show_blog()" onMouseOut="hide_blog()">
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
  	        </figure> -->
          <!-- </div>
        </div>
      </div>
    </section> -->


  <?php include("includes/footer.php"); ?>
</body>
</html>
