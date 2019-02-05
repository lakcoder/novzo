<?php

$db_host = "localhost:3306";
$db_username = "novzoin_lakshya";
$db_pass = "NovLak@12";
$db_name2 = "novzoin_Books";

$con2 = mysqli_connect("$db_host","$db_username","$db_pass") or die ("could not connect to mysql");
mysqli_select_db($con2,$db_name2) or die ("no database");

$query1 = "CREATE TABLE IF NOT EXISTS Donate_Books(
          ID INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
          Email VARCHAR(255) NOT NULL,
          Books VARCHAR(255) NOT NULL
          )";

$query2 = "CREATE TABLE IF NOT EXISTS Request_Books(
          ID INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
          Email VARCHAR(255) NOT NULL,
          Books VARCHAR(255) NOT NULL,
          Type VARCHAR(20) NOT NULL
          )";

$query4 = ""

$query5

$query6

$query7



?>
