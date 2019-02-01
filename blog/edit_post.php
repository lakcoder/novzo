<?php
  session_start();
  require "../dbconnect/connect_to_book.php";

  if(!isset($_SESSION['username'])){
    header('locaton:../index.php');
    return;
  }

  if(!isset($_GET['pid'])){
    header('location:../index.php');
  }
  $pid = $_GET['pid'];

  if(isset($_POST['update'])){
    $title = strip_tags($_POST['title']);
    $content = strip_tags($_POST['content']);

    $title = $con3->real_escape_string($_POST['title']);
    $content = $con3->real_escape_string($_POST['content']);

    $date = date('l jS \of F Y h:i:s A');

    $query = "UPDATE Posts SET Title='$title', Content='$content', Date='$date' WHERE ID=$pid";

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
    <?php
      $q = "SELECT * FROM Posts WHERE ID=$pid LIMIT 1";
      $res = mysqli_query($con3,$q);
      $num = mysqli_num_rows($res);

      if($num>0){
        while ($row = mysqli_fetch_assoc($res)) {
          $title =$row['Title'];
          $content =$row['Content'];
    ?>
          <form class="" action="edit_post.php?pid=$pid" method="POST" enctype="multipart/form-data">
            <input type="text" name="title" placeholder="Title" autofocus size="48" value="<?php echo $title ?>"><br><br>
            <textarea name="content" rows="20" cols="50" placeholder="Content" value="<?php echo $content ?>"></textarea><br>
            <input type="submit" name="update" value="Update">
          </form>
    <?php
        }
      }
    ?>
  </body>
</html>
