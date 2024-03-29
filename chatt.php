<?php
    session_start();
    $pageTitle = 'Home';
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<?php include("includes/head.php");?>
<body>
  <?php include("includes/header.php");?>
  <?php include("includes/signup.php") ?>

<!-- <head>
  <meta charset="UTF-8">
  <title>Chat Widget</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/chat.css"> -->
    <div class="container chat-container clearfix">
      <div class="row">
        <div class="col-lg-3">
          <div class="people-list" id="people-list">
            <div class="search">
              <input type="text" placeholder="search" />
              <i class="fa fa-search"></i>
            </div>
            <ul class="list">
              <a href="">
                <li class="clearfix">
                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_02.jpg" alt="avatar" />
                  <div class="about">
                    <div class="name">Aiden Chavez</div>
                    <div class="status">
                      <i class="fa fa-circle offline"></i> left 7 mins ago
                    </div>
                  </div>
                </li>
              </a>

              <a href="">
              <li class="clearfix">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_03.jpg" alt="avatar" />
                <div class="about">
                  <div class="name">Mike Thomas</div>
                  <div class="status">
                    <i class="fa fa-circle online"></i> online
                  </div>
                </div>
              </li>
              </a>

              <a href="">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_04.jpg" alt="avatar" />
                <div class="about">
                  <div class="name">Erica Hughes</div>
                  <div class="status">
                    <i class="fa fa-circle online"></i> online
                  </div>
                </div>
                <li class="clearfix">
              </li>
            </a>

            <a href="">
              <li class="clearfix">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_05.jpg" alt="avatar" />
                <div class="about">
                  <div class="name">Ginger Johnston</div>
                  <div class="status">
                    <i class="fa fa-circle online"></i> online
                  </div>
                </div>
              </li>
            </a>

            <a href="">
              <li class="clearfix">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_06.jpg" alt="avatar" />
                <div class="about">
                  <div class="name">Tracy Carpenter</div>
                  <div class="status">
                    <i class="fa fa-circle offline"></i> left 30 mins ago
                  </div>
                </div>
              </li>
            </a>

            <a href="">
              <li class="clearfix">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_07.jpg" alt="avatar" />
                <div class="about">
                  <div class="name">Christian Kelly</div>
                  <div class="status">
                    <i class="fa fa-circle offline"></i> left 10 hours ago
                  </div>
                </div>
              </li>
            </a>

            <a href="">
              <li class="clearfix">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_08.jpg" alt="avatar" />
                <div class="about">
                  <div class="name">Monica Ward</div>
                  <div class="status">
                    <i class="fa fa-circle online"></i> online
                  </div>
                </div>
              </li>
            </a>

            <a href="">
              <li class="clearfix">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_09.jpg" alt="avatar" />
                <div class="about">
                  <div class="name">Dean Henry</div>
                  <div class="status">
                    <i class="fa fa-circle offline"></i> offline since Oct 28
                  </div>
                </div>
              </li>
            </a>

            <a href="">
              <li class="clearfix">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_10.jpg" alt="avatar" />
                <div class="about">
                  <div class="name">Peyton Mckinney</div>
                  <div class="status">
                    <i class="fa fa-circle online"></i> online
                  </div>
                </div>
              </li>
            </a>
            </ul>
          </div> <!-- end of people list -->
        </div><!-- end of col-3 -->
        <div class="col-lg-9 d-flex align-items-center justify-content-center chat-box" id="chat-box">
          <div class="chat">
            <div class="chat-header clearfix">
              <i class="chat-back ti-arrow-left" id="chat-back" onclick="JavaScript:chat_toggle()" style="float:left"></i>
              <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_01_green.jpg" alt="avatar" class="chat-img"/>

              <div class="chat-about">
                <div class="chat-with">Vincent Porter</div>
                <!-- <div class="chat-num-messages">already 1 902 messages</div> -->
              </div>
              <i class="fa fa-star"></i>
            </div> <!-- end chat-header -->

            <div class="chat-history">
              <ul>
                <li class="clearfix"><li class="clearfix">
                  <div class="message-data align-right">
                    <span class="message-data-time" >10:14 AM, Today</span> &nbsp; &nbsp;
                    <!-- <span class="message-data-name" >Olia</span> <i class="fa fa-circle me"></i> -->

                  </div>
                  <div class="message other-message float-right">
                    Hi Vincent, how are you? How is the project coming along?

                  </div>
                <li>
                  <div class="message-data">
                    <!-- <span class="message-data-name"><i class="fa fa-circle online"></i> Vincent</span> -->
                    <span class="message-data-time">10:12 AM, Today</span>
                  </div>
                  <div class="message my-message ">
                    Are we meeting today? Project has been already finished and I have results to show you.
                  </div>

                </li>

                <li class="clearfix">
                  <div class="message-data align-right">
                    <span class="message-data-time" >10:14 AM, Today</span> &nbsp; &nbsp;
                    <!-- <span class="message-data-name" >Olia</span> <i class="fa fa-circle me"></i> -->

                  </div>
                  <div class="message other-message float-right">
                    Well I am not sure. The rest of the team is not here yet. Maybe in an hour or so? Have you faced any problems at the last phase of the project?
                  </div>
                </li>

                <li>
                  <div class="message-data">
                    <!-- <span class="message-data-name"><i class="fa fa-circle online"></i> Vincent</span> -->
                    <span class="message-data-time">10:20 AM, Today</span>
                  </div>
                  <div class="message my-message">
                    Actually everything was fine. I'm very excited to show this to our team.
                  </div>

                </li>

                <!-- <li>
                  <div class="message-data">
                    <span class="message-data-name"><i class="fa fa-circle online"></i> Vincent</span>
                    <span class="message-data-time">10:31 AM, Today</span>
                  </div>
                  <i class="fa fa-circle online"></i>
                  <i class="fa fa-circle online" style="color: #AED2A6"></i>
                  <i class="fa fa-circle online" style="color:#DAE9DA"></i>
                </li> -->

              </ul>

            </div> <!-- end chat-history -->

            <div class="chat-message clearfix">
              <div class="row">
                <div class="col-lg-10 col-10 mx-auto">
                  <textarea name="message-to-send" id="message-to-send" placeholder ="Type your message" rows="3"></textarea>
                </div>
              <!-- <i class="fa fa-file-o"></i> &nbsp;&nbsp;&nbsp; -->
              <!-- <i class="fa fa-file-image-o"></i> -->
                <div class="col-lg-2 col-2">
                  <button>Send</button>
                </div>
              </div>

            </div> <!-- end chat-message -->

          </div> <!-- end chat -->
        </div><!-- end of chat column -->
      </div>
  </div> <!-- end container -->

<script id="message-template" type="text/x-handlebars-template">
  <li class="clearfix">
    <div class="message-data align-right">
      <span class="message-data-time" >{{time}}, Today</span> &nbsp; &nbsp;
      <!-- <span class="message-data-name" >Olia</span> <i class="fa fa-circle me"></i> -->
    </div>
    <div class="message other-message float-right">
      {{messageOutput}}
    </div>
  </li>
</script>

<script id="message-response-template" type="text/x-handlebars-template">
  <li>
    <div class="message-data">
      <!-- <span class="message-data-name"><i class="fa fa-circle online"></i> Vincent</span> -->
      <span class="message-data-time">{{time}}, Today</span>
    </div>
    <div class="message my-message">
      {{response}}
    </div>
  </li>
</script>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/handlebars.js/3.0.0/handlebars.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/list.js/1.1.1/list.min.js'></script>



    <script  src="js/chat.js"></script>



<?php //include("includes/footer.php"); ?>
</body>

</html>
