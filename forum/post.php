<?php
  session_start();
  require "../dbconnect/connect_to_book.php";

  if(isset($_POST['post'])){
    $title = strip_tags($_POST['title']);
    $content = strip_tags($_POST['content']);

    $title = $con3->real_escape_string($_POST['title']);
    $content = $con3->real_escape_string($_POST['content']);

    $date = date('l jS \of F Y h:i:s A');

    $query = "INSERT INTO Posts(Title,Content,Date) VALUES('$title','$content','$date')";

    if($title == "" || $content == ""){
      echo "Please Comlete Your Post";
      return;
    }
    $result = mysqli_query($con3,$query);

    header('location:index.php');
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Blog-Post</title>
  </head>
  <body>
    <form class="" action="post.php" method="POST" enctype="multipart/form-data">
      <input type="text" name="title" placeholder="Title" autofocus size="48"><br><br>
      <textarea name="content" rows="20" cols="50" placeholder="Content"></textarea><br>
      <input type="submit" name="post" value="Post">
    </form>
  </body>
</html>
