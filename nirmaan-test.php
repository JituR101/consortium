<?php
  session_start();

  $db_host = "localhost:3306";
  $db_username = "conso20";
  $db_pass = "Conso@123";
  $db_name = "conso20";

  $con = mysqli_connect("$db_host","$db_username","$db_pass") or die ("could not connect to mysql");
  mysqli_select_db($con,$db_name) or die ("no database");
?>

<!DOCTYPE html>
<html>
  <?php $pagetitle = 'Brainathon | Consortium'; ?>
  <?php include('includes/head.php'); ?>
  <body class="back">
    <?php include('includes/header.php'); ?>
    <div id="register">
        <div class="g-container--sm g-padding-y-80--xs g-padding-y-125--sm">
                <div class="g-text-center--xs g-margin-b-60--xs">
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs">Nirmaan Test</p>
                    <h2 class="g-font-size-32--xs g-font-size-36--md g-color--white">
                      Test will go live on 19th January
                    </h2>



                    </div>
                </div>
            </div>
  
    <?php include("includes/footer_landing.php");?>
    <?php include("includes/script.php");?>
  </body>
</html>
