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
          Email VARCHAR(255) NOT NULL,
          Contact VARCHAR(255) NOT NULL,
          Password VARCHAR(255) NOT NULL)
          )";
mysqli_query($con,$query);

$query2 = "CREATE TABLE IF NOT EXISTS Subscriptions(

          )";

$query3 = "CREATE TABLE IF NOT EXISTS Sales(

          )";

$query4 = "CREATE TABLE IF NOT EXISTS Users(

          )";


?>
