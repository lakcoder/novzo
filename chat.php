<?php
  session_start();
  require "dbconnect/connect_to_chat.php";
  $email1 = $_SESSION['email'];
  // $email2 = x;

  if($con_chat->real_escape_string($_POST['chat'])){
    $email2 = $con_chat->real_escape_string($_POST['chat']);
    $query1 = "CREATE TABLE IF NOT EXISTS $email1(
      ID INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      Name VARCHAR(255) NOT NULL,
      msg VARCHAR(255) NOT NULL,
      sender_email VARCHAR(255) NOT NULL,
      sender TINYINT(1) DEFAULT 0,
      send_time DateTime
    )";
    mysqli_query($con_chat,$query1);

    $query2 = "CREATE TABLE IF NOT EXISTS $email2(
      ID INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      Name VARCHAR(255) NOT NULL,
      msg VARCHAR(255) NOT NULL,
      sender_email VARCHAR(255) NOT NULL,
      sender TINYINT(1) DEFAULT 0,
      send_time DateTime
    )";
    mysqli_query($con_chat,$query2);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Chat Widget</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/chat.css">


</head>

<body>

    <div class="container clearfix">
      <div class="people-list" id="people-list">
        <div class="search">
          <input type="text" placeholder="search" />
          <i class="fa fa-search"></i>
        </div>
        <ul class="list">
          <?php
          $query = "SELECT * FROM $emai2";
          $result = mysqli_query($con_chat,$query);
          while($row = mysqli_fetch_array($result)){ ?>
          <a href="#<?php echo $row[]; ?>">
            <li class="clearfix">
              <img src="img/users/<?php echo $row['Name']; ?>.jpg" alt="<?php echo $_SESSION['name'] . 'avatar'; ?>" />
              <div class="about">
                <div class="name"><?php echo $row['Name']; ?></div>
                <div class="status">
                  <i class="fa fa-circle online"></i> online
                </div>
              </div>
            </li>
          </a>
          <?php } ?>
        </ul>
      </div>

    <div id="chat" class="chat">
      <div class="chat-header clearfix">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_01_green.jpg" alt="avatar" />

        <div class="chat-about">
          <div class="chat-with">Chat with Vincent Porter</div>
          <div class="chat-num-messages">already 1 902 messages</div>
        </div>
        <i class="fa fa-star"></i>
      </div> <!-- end chat-header -->

      <div class="chat-history">
        <ul>
          <li class="clearfix">
            <div class="message-data align-right">
              <span class="message-data-time" >10:10 AM, Today</span> &nbsp; &nbsp;
              <span class="message-data-name" >Olia</span> <i class="fa fa-circle me"></i>

            </div>
            <div class="message other-message float-right">
              Hi Vincent, how are you? How is the project coming along?
            </div>
          </li>

          <li>
            <div class="message-data">
              <span class="message-data-name"><i class="fa fa-circle online"></i> Vincent</span>
              <span class="message-data-time">10:12 AM, Today</span>
            </div>
            <div class="message my-message">
              Are we meeting today? Project has been already finished and I have results to show you.
            </div>
          </li>

          <li class="clearfix">
            <div class="message-data align-right">
              <span class="message-data-time" >10:14 AM, Today</span> &nbsp; &nbsp;
              <span class="message-data-name" >Olia</span> <i class="fa fa-circle me"></i>

            </div>
            <div class="message other-message float-right">
              Well I am not sure. The rest of the team is not here yet. Maybe in an hour or so? Have you faced any problems at the last phase of the project?
            </div>
          </li>

          <li>
            <div class="message-data">
              <span class="message-data-name"><i class="fa fa-circle online"></i> Vincent</span>
              <span class="message-data-time">10:20 AM, Today</span>
            </div>
            <div class="message my-message">
              Actually everything was fine. I'm very excited to show this to our team.
            </div>
          </li>

          <li>
            <div class="message-data">
              <span class="message-data-name"><i class="fa fa-circle online"></i> Vincent</span>
              <span class="message-data-time">10:31 AM, Today</span>
            </div>
            <i class="fa fa-circle online"></i>
            <i class="fa fa-circle online" style="color: #AED2A6"></i>
            <i class="fa fa-circle online" style="color:#DAE9DA"></i>
          </li>

        </ul>

      </div> <!-- end chat-history -->

      <div class="chat-message clearfix">
        <textarea name="message-to-send" id="message-to-send" placeholder ="Type your message" rows="3"></textarea>

        <i class="fa fa-file-o"></i> &nbsp;&nbsp;&nbsp;
        <i class="fa fa-file-image-o"></i>

        <button>Send</button>

      </div> <!-- end chat-message -->

    </div> <!-- end chat -->

  </div> <!-- end container -->

<script id="message-template" type="text/x-handlebars-template">
  <li class="clearfix">
    <div class="message-data align-right">
      <span class="message-data-time" >{{time}}, Today</span> &nbsp; &nbsp;
      <span class="message-data-name" >Olia</span> <i class="fa fa-circle me"></i>
    </div>
    <div class="message other-message float-right">
      {{messageOutput}}
    </div>
  </li>
</script>

<script id="message-response-template" type="text/x-handlebars-template">
  <li>
    <div class="message-data">
      <span class="message-data-name"><i class="fa fa-circle online"></i> Vincent</span>
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




</body>

</html>
<?php 
  }else{
  header('location:index.php');
} ?>
