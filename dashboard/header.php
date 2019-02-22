<?php session_start(); ?>
<!DOCTYPE html>
<html>
<header id="header" role="banner">
<nav class="nav">
        <div class="container">
            <div class="logo">
                <a href="index.php"><img src="../img/logos/tt2.png" alt="Novzo Logo" height="55.76" width ="100" /></a>
            </div>
            <div class="main_list">
                <ul class="navlinks">
          					<?php  if (isset($_SESSION['username'])) { ?>
          						<!--<li class="menu-active"><a href="dashboard.php">Dashboard</a></li>-->
          						<li class="menu-active"><a href="regphp/logout.php">Logout</a></li>
          					<?php }else{ ?>
          						<li class="menu-active main-nav"><a class="cd-signin hov" href="#0" style="color:#fff;">Login/ SignUp</a></li>
          					<?php } ?>
                </ul>
            </div>
            <div class="input-wrap main_list">
              <div class="form-box d-flex justify-content-between" style="border: 1px solid #000;">
                <input id="search_books" type="text" placeholder="Search Books" class="form-control" name="search" />
                <button type="submit" class="btn ti-search"></button>
              </div>
              <div id="result"></div>
              <script>
                              $(document).ready(function(){
                                load_data();
                                function load_data(query)
                                {
                                  $.ajax({
                                    url:"regphp/search.php",
                                    method:"POST",
                                    data:{query:query},
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
          </div>
            <span class="navTrigger">
                <i></i>
                <i></i>
                <i></i>
            </span>
        </div>
    </nav>
  </header>
	<!-- Jquery needed -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!--<script src="js/scripts.js"></script>-->

<!-- Function used to shrink nav bar removing paddings and adding black background -->
    <script>
        $(window).scroll(function() {
            if ($(document).scrollTop() > 50) {
                $('.nav').addClass('affix');
                console.log("OK");
            } else {
                $('.nav').removeClass('affix');
            }
        });
    </script>
	<script>
		$('.navTrigger').click(function () {
    $(this).toggleClass('active');
    console.log("Clicked menu");
    $("#mainListDiv").toggleClass("show_list");
    $("#mainListDiv").fadeIn();

});
	</script>
</html>
