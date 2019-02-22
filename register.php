<?php
    session_start();
    $pageTitle = 'Register';
?>
<html>
<?php include("includes/head.php");?>
<body>
  <?php include("includes/header.php") ?>

  <section class="relative">
  <div class="cd-user-modal" style="padding-top:2em;"> <!-- this is the entire modal form, including the background -->
    <div class="cd-user-modal-container"> <!-- this is the container wrapper -->
      <ul class="cd-switcher">
        <li><a href="#0">Log in</a></li>
        <li><a href="#0">New account</a></li>
      </ul>

      <div id="cd-login"> <!-- log in form -->
        <form class="cd-form" action="regphp/validate.php" method="POST">
          <p class="fieldset">
            <label class="image-replace cd-email" for="signin-email">E-mail</label>
            <input class="full-width has-padding has-border" id="signin-email" type="email" name="email" placeholder="E-mail">
          </p>

          <p class="fieldset">
            <label class="image-replace cd-password" for="signin-password">Password</label>
            <input class="full-width has-padding has-border" id="signin-password" type="password" name="password"  placeholder="Password">
            <a href="#0" class="hide-password">Show</a>
          </p>

          <?php echo $msgv; ?>

          <p class="fieldset">
            <input class="full-width" type="submit" value="Login" name="login">
          </p>
        </form>

        <p class="cd-form-bottom-message"><a href="#0">Forgot your password?</a></p>
      </div>

      <div id="cd-signup"> <!-- sign up form -->
        <form class="cd-form" action="regphp/registration.php" method="POST">
          <p class="fieldset">
            <label class="image-replace cd-username" for="signup-username">Username</label>
            <input class="full-width has-padding has-border" id="signup-username" type="text" name="username" placeholder="Username">
          </p>

          <p class="fieldset">
            <label class="image-replace cd-email" for="signup-email">E-mail</label>
            <input class="full-width has-padding has-border" id="signup-email" type="email" name="email" placeholder="E-mail">
          </p>

          <p class="fieldset">
            <label class="image-replace cd-email" for="signup-email">College</label>
            <select class="full-width has-padding has-border" id="signup-college" name="college">
              <option value="" selected disabled hidden>Choose College</option>
              <option value="VNIT">Visvesvaraya National Institute of Technology</option>
              <option value="RKNEC">Shri Ramdeobaba College of Engineering and Management</option>
              <option value="Other">Others</option>
            </select>
          </p>

          <p class="fieldset">
            <label class="image-replace cd-password" for="signup-password">Password</label>
            <input class="full-width has-padding has-border" id="signup-password" type="password" name="password" placeholder="Password">
            <a href="#0" class="hide-password">Show</a>
          </p>

          <p class="fieldset">
            <label for="accept-terms">By proceding through the button below, you agree to the <a href="#0">Terms and Conditions</a></label>
          </p>

          <p class="fieldset">
            <input id="register" class="full-width has-padding" type="submit" value="Create account" name="register">
          </p>
        </form>

        <!-- <a href="#0" class="cd-close-form">Close</a> -->
      </div> <!-- cd-signup -->

      <div id="cd-reset-password"> <!-- reset password form -->
        <p class="cd-form-message">Lost your password? Please enter your email address. You will receive a link to create a new password.</p>

        <form class="cd-form" action="regphp/forgot.php" method="POST">
          <p class="fieldset">
            <label class="image-replace cd-email" for="reset-email">E-mail</label>
            <input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail" name="reset_email">
          </p>

          <p class="fieldset">
            <input class="full-width has-padding" type="submit" value="Reset password">
          </p>
        </form>

        <p class="cd-form-bottom-message"><a href="#0">Back to log-in</a></p>
      </div> <!-- cd-reset-password -->
      <a href="#0" class="cd-close-form">Close</a>
    </div> <!-- cd-user-modal-container -->
  </div> <!-- cd-user-modal -->
</section>

  <section class="contact-page-area relative" style="padding-top:7em;padding-bottom:7em;">
    <div class="container cart-container">
    <div class="box">
      <div class="container">
          <div class="row row-centered">
          <section class="wrapper banner-content" style="padding-top:20px;">
            <p style="color:black">Register Now</p>
            <h3 class="wrapper banner-content">Create an account to avail our services.</h3>
            <div id="login"> <!-- log in form -->
              <form class="cd-form" action="regphp/validate.php" method="POST">
                <p class="fieldset">
                  <label class="image-replace cd-email" for="signin-email">E-mail</label>
                  <input class="full-width has-padding has-border" id="signin-email" type="email" name="email" placeholder="E-mail">
                </p>

                <p class="fieldset">
                  <label class="image-replace cd-password" for="signin-password">Password</label>
                  <input class="full-width has-padding has-border" id="signin-password" type="password" name="password"  placeholder="Password">
                  <a href="#0" class="hide-password">Show</a>
                </p>

                <?php echo $msgv; ?>

                <p class="fieldset">
                  <input class="full-width" type="submit" value="Login" name="login">
                </p>
              </form>

              <p class="cd-form-bottom-message"><a href="#0">Forgot your password?</a></p>
            </div>

            <div> <!-- sign up form -->
              <form id="signup" class="cd-form" action="regphp/registration.php" method="POST">
                <p class="fieldset">
                  <label class="image-replace cd-username" for="signup-username">Name</label>
                  <input class="full-width has-padding has-border" id="signup-username" type="text" name="username" placeholder="Username">
                </p>

                <p class="fieldset">
                  <label class="image-replace cd-email" for="signup-email">E-mail</label>
                  <input class="full-width has-padding has-border" id="signup-email" type="email" name="email" placeholder="E-mail">
                </p>

                <p class="fieldset">
                  <label class="image-replace cd-email" for="signup-email">Phone no.</label>
                  <input class="full-width has-padding has-border" id="signup-contact" type="tel" name="contact" placeholder="Phone no.">
                </p>

                <p class="fieldset">
                  <label class="image-replace cd-password" for="signup-password">Password</label>
                  <input class="full-width has-padding has-border" id="signup-password" type="password" name="password" placeholder="Password">
                  <!--<a href="#0" class="hide-password">Show</a>-->
                </p>

                <p class="fieldset">
                  <label for="accept-terms">By proceding through the button below, you agree to the <a href="#0">Terms and Conditions</a></label>
                </p>

                <p class="fieldset">
                  <input id="register" class="full-width has-padding" type="submit" value="Create account" name="register">
                </p>
              </form>
              <a id="clogin" href="#login">Already registered?</a>

              <!-- <a href="#0" class="cd-close-form">Close</a> -->
            </div> <!-- cd-signup -->

            <div id="reset"> <!-- reset password form -->
              <p class="cd-form-message">Lost your password? Please enter your email address. You will receive a link to create a new password.</p>

              <form class="cd-form" action="regphp/forgot.php" method="POST">
                <p class="fieldset">
                  <label class="image-replace cd-email" for="reset-email">E-mail</label>
                  <input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail" name="reset_email">
                </p>

                <p class="fieldset">
                  <input class="full-width has-padding" type="submit" value="Reset password">
                </p>
              </form>

              <p class="cd-form-bottom-message"><a href="#0">Back to log-in</a></p>
            </div> <!-- cd-reset-password -->
            <a href="#0" class="cd-close-form">Close</a>
            <!-- <span class="menu-active main-nav"><a class="cd-signin hov" href="#0" style="color:#fff;">Login/ SignUp</a></span> -->
          </section>
        </div>
      </div>
    </div>
    </div>
  </section>


  <?php include("includes/footer.php"); ?>
</body>
</html>
