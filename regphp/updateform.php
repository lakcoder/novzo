<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
//   error_reporting(E_ALL);
//   ini_set('display_errors', '1');
if(isset($_POST['updateform'])){
  require "../dbconnect/connect_to_signups.php";
  require "../dbconnect/connect_to_users.php";

  $name = $con->real_escape_string($_POST['name']);
  $college = $con->real_escape_string($_POST['name']);
  $collegeid = $con->real_escape_string($_POST['collegeid']);
  $department = $con->real_escape_string($_POST['department']);
  $section = $con->real_escape_string($_POST['section']);
  $room = $con->real_escape_string($_POST['room']);
  $phone = $con->real_escape_string($_POST['phone']);
  $book = $con->real_escape_string($_POST['book']);

  $query = "SELECT * Sales WHERE Type='P'";
