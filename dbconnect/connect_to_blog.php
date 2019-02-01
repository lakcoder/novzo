<?php

$db_host = "localhost:3306";
$db_username = "novzoin_lakshya";
$db_pass = "NovLak@12";
$db_name3 = "novzoin_blog";

$con3 = mysqli_connect("$db_host","$db_username","$db_pass") or die ("could not connect to mysql");
mysqli_select_db($con3,$db_name3) or die ("no database");


?>
