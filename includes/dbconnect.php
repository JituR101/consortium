<?php
  $db_host = "localhost:3306";
  $db_username = "conso21";
  $db_pass = "Conso@123";
  $db_name = "conso21";
  $con = mysqli_connect("$db_host","$db_username","$db_pass") or die ("could not connect to mysql");
  mysqli_select_db($con,$db_name) or die ("no database");


?>
