<?php
  session_start();
  require "../dbconnect/connect_to_book.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Blog</title>
  </head>
  <body>
    <?php
      require_once("nbbc/nbbc.php");
      $bbcode = new BBCode;
      $posts = "";
      $query = "SELECT * FROM Posts ORDER BY ID DESC";
      $result = mysqli_query($con3,$query);
      $num = mysqli_num_rows($result);

      if($num > 0){
        while($row = mysqli_fetch_assoc($result)){
          $id =$row['ID'];
          $title =$row['Title'];
          $content =$row['Content'];
          $date =$row['Date'];

          $admin = "<div><a href='del_post.php?pid=$pid'>Delete</a>&nbsp;<a href='del_post.php?pid=$pid'>Edit</a></div>";

          $output = $bbcode->Parse($content);
          $posts .= "<div><h2><a href='view_posts.php?pid=$id'>$title</a></h2><h3>$date</h3><p>$output</p>$admin<hr/></div>"
        }
        echo $posts;
      }else {
        echo "There are no posts to display!";
      }
    ?>
  </body>
</html>
