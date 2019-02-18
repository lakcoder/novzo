<?php
  session_start();
  require "../dbconnect/connect_to_book.php";

  if(!isset($_SESSION['username'])){
    header('locaton:../index.php');
    return;
  }

  if(!isset($_GET['pid'])){
    header('location:../index.php');
  }else{
    $pid = $_GET['pid'];
    $query = "DELETE FROM Posts WHERE ID=$pid";
    mysqli_query($con3,$query);
    header('location:index.php');
  }
?>
