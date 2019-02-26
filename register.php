<?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;
  error_reporting(E_ALL);
  ini_set('display_errors', '1');
  session_start();

  $pageTitle = 'Register';

  if(isset($_POST['register'])){
    require "dbconnect/connect_to_signups.php";

    $name = $con_signups->real_escape_string($_POST['name']);
    $email = $con_signups->real_escape_string($_POST['email']);
    $contact = $con_signups->real_escape_string($_POST['contact']);
    $password = $con_signups->real_escape_string($_POST['password']);
    if($name=="" || $email=="" || $contact=="" || $password==""){
        $msgr1 = "Please fill all the details";
    }else{
      $hashed_password = $con_signups->real_escape_string(password_hash($password, PASSWORD_DEFAULT));

      $query = "SELECT * FROM Registrations WHERE Email='$email'";
      $result = mysqli_query($con_signups,$query);
      $num = mysqli_num_rows($result);

      if($num == 1){
        $msg = "The email you entered is already registered.";
      }else{
        $token = 'qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM0123456789!$^*';
        $token = str_shuffle($token);
        $token = substr($token, 0, 10);

        $q="INSERT INTO Registrations(Name,Email,Contact,Password,Token,Confirmed) VALUES('$name','$email','$contact','$hashed_password','$token','0')";
        // $query = "INSERT INTO Users(Contact,Email) VALUES('$contact','$email')";
        $registered = mysqli_query($con_signups ,$q);
        $q2 = "SELECT * FROM Registrations WHERE Email = '$email'";
        $res = mysqli_query($con_signups,$q2);
        $num = mysqli_num_rows($res);
        if($num == 1){
          $row = mysqli_fetch_array($res);
          $id = $row['ID'];
          $q3 = "INSERT INTO Genres(UserID,Email) VALUES('$id','$email')";
          if($registered && mysqli_query($con_signups, $q3)){
            $msgr1 = "You are registered with us!";
          }
          else {
            $msgr1 = "There was some error. Contact: 7738446941.";
          }
        }

        require 'vendor/autoload.php';

        $mail = new PHPMailer(TRUE);

        try {
          //Server settings
          $mail->SMTPDebug = 2;                                 // Enable verbose debug output
          $mail->isSMTP();                                      // Set mailer to use SMTP
          $mail->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
          $mail->SMTPAuth = true;                               // Enable SMTP authentication
          $mail->Username = 'contactnovzo@gmail.com';           // SMTP username
          $mail->Password = 'Novzoin@novzo';                    // SMTP password
          $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
          $mail->Port = 587;                                    // TCP port to connect to
          $mail->setFrom('contactnovzo@gmail.com', 'Novzo');
          $mail->addAddress($email, $name);
          $mail->Subject = 'Welcome to Novzo';
          $mail->isHTML (TRUE);
          $mail->Body = '
          <!DOCTYPE html>
          <html>
              <head>
                  <style>
                      li{
                          padding:10px;
                      }
                      p{
                          font-size:16px;
                      }

                      *{
                          font-family:Helvetica,Arial,sans-serif;
                      }

                      h2{
                          text-align: center;
                          margin-top: 80px;
                      }
                      html, body{
                          background-color:#d3dde8;
                          margin: 0;
                      }
                      .context {
                          font-size: 12px;
                          padding: 40px 60px;
                          margin-left:10%;
                          margin-right: 10%;
                      }

                      .context p{
                          font-size: 12px;
                      }
                      p{
                          margin: 15px 0px;
                      }

                  </style>
              </head>
              <body>
                  <div style="background: #fff; padding:10px 30px;"><img height="55.76" width ="100" alt="Novzo" src="https://www.novzo.in/img/logos/tt2.png"></div>
                  <h2 style="font-size:22px;">Welcome to Novzo</h2><br>
                  <div class="context">
                      <h3><b>Hello '.$name.',</b></h3>
                      <div>
                          <p>We hope this mail finds you in the best of your health and cheerful spirits. We are pleased to have you on board with us.<br/><br/>
                          To verify your Email:'.$email.', click <strong><a href="https://novzo.in/regphp/confirm.php?email=' . $email . '&token=' . $token . '">Click here</a></strong><br/> OR <br/> paste this url on your browser: https://novzo.in/regphp/confirm.php?email=' . $email . '&token=' . $token . '</p>
                      </div>
                      <p>
                      Regards,<br>
                      Support, Novzo
                      </p>
                  </div>
              </body>
          </html>
          ';
          if($mail->send()) {
              $msgr2 = "An email has been sent to you. Please verify your email.";
              $msg2 = "As this is a new venture, our email may go in spam. Please mark it 'Not Spam' and click on the verification link to complete your registration.<br><br> We regret any inconvience.";
          }
          else {
              $msgr2 = "Something Went Wrong. Please Try Again.";
          }
        }
        catch (Exception $e)
        {
           echo $e->errorMessage();
        }
        catch (\Exception $e)
        {
           echo $e->getMessage();
        }
      }
    }
  }
?>
<html>
<?php include("includes/head.php");?>
<body>
  <?php include("includes/header.php") ?>

  <section class="contact-page-area relative" style="padding-top:7em;padding-bottom:7em;">
    <div class="container cart-container">
    <div class="box">
      <div class="container">
          <div class="row row-centered" style=" background-color: #e8e87e;">
          <section class="wrapper banner-content" style="padding-top:20px;">
            <p style="color:black">Register Now</p>
            <h3 class="wrapper banner-content">Create an account to avail our services.</h3>
            <h3 class="wrapper banner-content"><?php echo $msgr1 ?></h3>
            <h3 class="wrapper banner-content"><?php echo $msgr2 ?></h3>
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
              <a id="cregister" href="#register">Not registered?</a><br/>
              <a id="cforgot" href="#forgot">Forgot Password?</a>
            </div>

            <div id="signup"> <!-- sign up form -->
              <form class="cd-form" action="register.php" method="POST">
                <p class="fieldset">
                  <label class="image-replace cd-username" for="signup-username">Name</label>
                  <input class="full-width has-padding has-border" id="signup-name" type="text" name="name" placeholder="* Your Name">
                </p>

                <p class="fieldset">
                  <label class="image-replace cd-email" for="signup-email">E-mail</label>
                  <input class="full-width has-padding has-border" id="signup-email" type="email" name="email" placeholder="* Your E-mail">
                </p>

                <p class="fieldset">
                  <label class="image-replace cd-email" for="signup-email">Phone no.</label>
                  <input class="full-width has-padding has-border" id="signup-contact" type="tel" name="contact" placeholder="* Your Phone no.">
                </p>

                <p class="fieldset">
                  <label class="image-replace cd-password" for="signup-password">Password</label>
                  <input class="full-width has-padding has-border" id="signup-password" type="password" name="password" placeholder="* Set a Password">
                  <a href="#0" class="hide-password">Show</a>
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
                  <label class="image-replace cd-email" for="reset-email">* Your E-mail</label>
                  <input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail" name="reset_email">
                </p>

                <p class="fieldset">
                  <input class="full-width has-padding" type="submit" value="Reset password">
                </p>
              </form>
              <a id="glogin" href="#login">Login</a>

              <p class="cd-form-bottom-message"><a href="#0">Back to log-in</a></p>
            </div> <!-- cd-reset-password -->
            <!-- <a href="#0" class="cd-close-form">Close</a> -->
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
