<?php
  session_start();

  $db_host = "localhost:3306";
  $db_username = "conso19";
  $db_pass = "Conso@123";
  $db_name = "conso19";

  $con = mysqli_connect("$db_host","$db_username","$db_pass") or die ("could not connect to mysql");
  mysqli_select_db($con,$db_name) or die ("no database");

  if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $email = $con->real_escape_string($_POST['email']);
    $txnid = $con->real_escape_string($_POST['txnid']);

    if($email=="" || $txnid==""){
        $msg = "Something went wrong. <a href='expo.php' style='color:#eee;'>Try Again</a>";
    }
    else{

      $query = "UPDATE Expo SET paid = 1 WHERE email='$email'";
      $result = mysqli_query($con,$query);
      $num = mysqli_num_rows($result);

      if($num!=0){

          $msg = "Congratulations! You are now a part of Central India’s Biggest Entrepreneurship Summit.<br>Your transaction ID: ".$txnid;
          $to = $email;
          $subject = "Welcome To The Startup Expo | Consortium'19";
          $html = '
              <!DOCTYPE html>
              <html>
                  <head>
                      <style>
                          li{
                              padding:10px;
                          }
                          p{
                              font-size:16px;
                          }

                          *{
                              font-family:Helvetica,Arial,sans-serif;
                          }

                          h2{
                              text-align: center;
                              margin-top: 150px;

                          }
                          html, body{
                              background-color:#f7f9fb;
                              margin: 0;
                          }
                          .context {
                              font-size: 12px;
                              padding: 40px 60px;
                              margin-left:10%;
                              margin-right: 10%;
                          }

                          .context p{
                              font-size: 12px;
                          }
                          p{
                              margin: 15px 0px;
                          }

                      </style>
                  </head>
                  <body>

                      <div style="background: #0b0b0b; padding:10px 30px;"><img src="https://www.ecellvnit.org/img/logo-ecell.png"></div>
                      <h2 style="font-size:22px;">Welcome to Startup Expo</h2><br>

                      <div class="context">
                          <h3><b>Hello '.$startup.',</b></h3>


                          <p>Congratulations! You are now a part of Central India’s Biggest Entrepreneurship Summit.</p>
                          <div>
                              <p>We hope this mail finds you in the best of your health and cheerful spirits. We are well pleased to have you on board for this event.</p>
                              <p>
                                  To keep you updated, all the relevant details will be e-mailed to you very shortly.
                                  Over this month, you will get access to plenty of valuable resources, which will help you guide your way through this program.<br>
                                  For queries and in case of any difficulty, feel free to contact us.<br>
                              </p>
                              <p>For queries and in case of any difficulty, feel free to contact us.</p>
                              <p>
                                  With warm regards,<br>
                                  Anushree Rungta<br>
                                  Core-Coordinator, Ecell VNIT
                              </p>
                          </div>
                      </div>
                  </body>
              </html>
            ';

          $url = 'https://startupconclave.ecellvnit.org/send';
          $data = array('subject' => $subject, 'email' => $to, 'html' => $html, 'pass' => 'intheend');

          // use key 'http' even if you send the request to https://...
          $options = array(
              'http' => array(
                  'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                  'method'  => 'POST',
                  'content' => http_build_query($data)
              )
          );
          $context  = stream_context_create($options);
          $result = file_get_contents($url, false, $context);
          if ($result === FALSE) { /* Handle error */ }
      }

      else{

        $msg = "Your startup is not registered with us. Kindly first register <a href='expo.php'> here</a>. Or your have entered wrong email address while payment. Kindly Contact Us";
      }
      
    }
  }
?>

<!DOCTYPE html>
<html>
  <?php $pagetitle = 'StartUp Expo | Consortium'; ?>
  <?php include('includes/head.php'); ?>
  <body class="back">
    <?php include('includes/header.php'); ?>
    <div id="register">
        <div class="g-container--sm g-padding-y-80--xs g-padding-y-125--sm">
                <div class="g-text-center--xs g-margin-b-60--xs">
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs">Sign Up</p>
                    <h2 class="g-font-size-32--xs g-font-size-36--md g-color--white">
                      Pay Now
                    </h2>
                    <p id="message" class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--red g-letter-spacing--2 g-margin-b-25--xs"><?php echo $msg; ?></p>

                    <div class="col-md-8 col-md-offset-2" style="text-align: center;">
                        <p class="g-color--white-opacity g-font-size-16--sm">
                          <?php 
                            if($_SERVER['REQUEST_METHOD'] != 'POST'){

                              echo 'Here is your chance to showcase your startup to a pool of intellectual minds and network with eminent personalities!';

                            }
                          ?>
                          
                          <br><br>Registration Fee: <b>800 INR</b>
                        </p>

                        <?php 
                            if($_SERVER['REQUEST_METHOD'] != 'POST'){
                        
                        echo '<p class="g-color--white-opacity g-font-size-12--sm">

                          *Note: Kindly only use your startup email address while payment.
                        </p>
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".5s">
                            <a id="reg_button" href="https://www.payumoney.com/paybypayumoney/#/3CE4A3B78852ADA9D1FCA3DE063D08C4" title="Register">
                                <!--<i class="s-icon s-icon--lg s-icon--white-bg g-radius--circle ti-arrow-down"></i>-->
                                <span class="text-uppercase s-btn s-btn--xs s-btn--white-brd g-radius--50">Pay Now!</span>
                            </a>
                        </div>';
                      }
                        ?>

                    </div>
                </div>
            </div>
    </div>
    <?php include("includes/footer.php");?>
    <?php include("includes/script.php");?>
  </body>
</html>