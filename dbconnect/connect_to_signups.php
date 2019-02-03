<?php

$db_host = "localhost:3306";
$db_username = "novzoin_lakshya";
$db_pass = "NovLak@12";
$db_name = "novzoin_signups";

$con = mysqli_connect("$db_host","$db_username","$db_pass") or die ("could not connect to mysql");
mysqli_select_db($con,$db_name) or die ("no database");

$query1 = "CREATE TABLE IF NOT EXISTS Registrations(
          ID INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
          Username VARCHAR(255) NOT NULL,
          Contact VARCHAR(255) NOT NULL,
          Email VARCHAR(255) NOT NULL,
          Password VARCHAR(255) NOT NULL,
          ConfirmEmail TINYINT(1) NOT NULL DEFAULT 1,
          Token VARCHAR(255) NOT NULL
          )";
mysqli_query($con,$query1);

$query2 = "CREATE TABLE IF NOT EXISTS Subscriptions(
          ID INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
          Email VARCHAR(255) NOT NULL
          )";
mysqli_query($con,$query2);

$query3 = "CREATE TABLE IF NOT EXISTS Sales(
          ID INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
          Email VARCHAR(255) NOT NULL,
          Books VARCHAR(255) NOT NULL,
          Vendor VARCHAR(255) NOT NULL,
          Status TINYINT(1) NOT NULL
          )";
mysqli_query($con,$query3);

$query4 = "CREATE TABLE IF NOT EXISTS Users(
          ID INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
          Name VARCHAR(255) NOT NULL,
          Email VARCHAR(255) NOT NULL,
          Contact VARCHAR(255) NOT NULL,
          )";
mysqli_query($con,$query4);


?>
