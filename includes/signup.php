<!DOCTYPE html>
<html>
<section class="relative">
  <div class="cd-user-modal" style="padding-top:1.6em;"> <!-- this is the entire modal form, including the background -->
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
            <!--<a href="#0" class="hide-password">Show</a>-->
          </p>

          <?php echo $msgv; ?>

          <p class="fieldset">
            <input class="full-width" type="submit" value="Login" name="login">
          </p>
        </form>

        <p class="cd-form-bottom-message" style="background:#fff;"><a href="#0">Forgot your password?</a></p>
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
            <!--<a href="#0" class="hide-password">Show</a>-->
          </p>

          <p class="fieldset">
            <label for="accept-terms">By creating an account, you agree to the <a href="customer/Novzo_Policy.pdf">Terms and Conditions</a></label>
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

        <p class="cd-form-bottom-message" style="background:#fff;"><a href="#0">Back to log-in</a></p>
      </div> <!-- cd-reset-password -->
      <a href="#0" class="cd-close-form">Close</a>
    </div> <!-- cd-user-modal-container -->
  </div> <!-- cd-user-modal -->
</section>
</html>
