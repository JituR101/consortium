<?php
  @session_start();
  $pagetitle = "Register Now | Consortium'19";

  if($_SESSION['email']){
    header('location:dashboard.php');
  }

    $db_host = "localhost:3306";
    $db_username = "conso";
    $db_pass = "Conso@123";
    $db_name = "conso19";

    $con = mysqli_connect("$db_host","$db_username","$db_pass") or die ("could not connect to mysql");
    mysqli_select_db($con,$db_name) or die ("no database");

    $regquery = "CREATE TABLE IF NOT EXISTS Registrations(
                main_ID INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                Name VARCHAR(255) NOT NULL,
                Email VARCHAR(255) NOT NULL,
                Contact VARCHAR(255) NOT NULL,
                Password VARCHAR(255) NOT NULL,
                Swadesh TINYINT(1) DEFAULT '0',
                AdVenture TINYINT(1) DEFAULT '0',
                Pitch_Perfect TINYINT(1) DEFAULT '0',
                renderico TINYINT(1) DEFAULT '0',
                CEO TINYINT(1) DEFAULT '0',
                Teen_Titans TINYINT(1) DEFAULT '0',
                BizMantra TINYINT(1) DEFAULT '0',
                BizQuiz TINYINT(1) DEFAULT '0',
                ConsoWorld TINYINT(1) DEFAULT '0',
                otp VARCHAR(255) NOT NULL,
                token VARCHAR(255) NOT NULL
                )";

    mysqli_query($con,$regquery);

    $eve = array('Swadesh','AdVenture','Pitch_Perfect','renderico','CEO','Teen_Titans','BizMantra','BizQuiz','ConsoWorld');
    for($var = 0; $var < 9; $var++){
      $evequery = "CREATE TABLE IF NOT EXISTS $eve[$var](
                ID INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                Name VARCHAR(255) NOT NULL,
                Main_Email VARCHAR(255) NOT NULL,
                Email VARCHAR(255) NOT NULL,
                Contact VARCHAR(255) NOT NULL
                )";
      if(mysqli_query($con,$evequery)){
        echo "great";
      }else{
        echo("Error description: " . mysqli_error($con));
      }
    }

    $eve = array('Swadesh_team','AdVenture_team','Pitch_Perfect_team','renderico_team','BizMantra_team','BizQuiz_team','ConsoWorld_team');
    for($var = 0; $var < 9; $var++){
      $evequery = "CREATE TABLE IF NOT EXISTS $eve[$var](
                ID INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                Name VARCHAR(255) NOT NULL,
                Email VARCHAR(255) NOT NULL,
                Contact VARCHAR(255) NOT NULL
                )";
                if(mysqli_query($con,$evequery)){
                  echo "great";
                }else{
                  echo("Error description: " . mysqli_error($con));
                }
    }

    if(isset($_POST['regnew'])){
    $name = $con->real_escape_string($_POST['name']);
    $email = $con->real_escape_string($_POST['email']);
    $contact = $con->real_escape_string($_POST['contact']);
    // $event = $con->real_escape_string($_POST['event']);
    $password = $con->real_escape_string($_POST['password']);
    $cpassword = $con->real_escape_string($_POST['cpassword']);


    if($password == $cpassword){
      $hashed_password = $con->real_escape_string(password_hash($cpassword, PASSWORD_DEFAULT));

      $query = "SELECT * from Registrations where Email='$email'";
      $result = mysqli_query($con,$query);
      $num = mysqli_num_rows($result);

      if($num!=0){
        $msg = "The email you entered is already registered.";
      }else{
        $otp = '1234567890';
        $otp = str_shuffle($otp);
        $otp = substr($otp, 0, 6);

        $token = 'qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM0123456789!$^*';
        $token = str_shuffle($token);
        $token = substr($token, 0, 10);

        $q = "INSERT INTO Registrations(Name,Email,Contact,Password) VALUES('$name','$email','$contact','$hashed_password')";
        if(mysqli_query($con,$q)){
          $to = $Email;
          $subject = "Welcome On Board";
          $html = "
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

                      <div style='background: #0b0b0b; padding:10px 30px;'><img src='https://www.ecellvnit.org/img/logo-ecell.png'></div>
                      <h2 style='font-size:22px;'>Welcome to Campus Ambassador Program</h2><br>

                      <div class='context'>


                          <h3><b>Hello '.$name.',</b></h3>


                          <p>Thank You for registering! You are now a part of one of the India's Biggest Entrepreneurship Summit.</p>
                          <div>
                              <p>We hope this mail finds you in the best of your health and cheerful spirits. We are well pleased to have you on board.<br/><br/>
                              Your OTP is<br/> <span style='font-size:24px'>'.$otp.'</span></p>
                              For queries and in case of any difficulty, feel free to contact us.<br>
				                          <p>
                                  With warm regards,<br>
                                  E-Cell VNIT
                              </p>


                          </div>
                      </div>
                  </body>
              </html>

      ";


          $url = 'https://startupconclave.ecellvnit.org/html';
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
          if($result = file_get_contents($url, false, $context)){
            $msg = "Welcome. An email has been sent to you. Please verify your email to continue.";
          }
          if ($result === FALSE) {
          }

          //var_dump($result);

          $msg = "You are registered with us. Now you can register in various events of Consortium by logging in <a href='login.php'>here</a>";

          // $events = array('Swadesh','AdVenture','Pitch_Perfect','renderico','CEO','Teen_Titans','BizMantra','BizQuiz','ConsoWorld');
          // $tid = 1;
          // for($var = 0;$var < 9; $var++ ){
          //   if($event == $events[$var]) {
          //     $update = "UPDATE Registrations SET $events[$var]=1 WHERE Email='$email'";
          //     mysqli_query($con,$update);
          //
          //     $teamquery = "SELECT * FROM $events[$var] WHERE TeamID=(SELECT MAX(TeamID) FROM $events[$var])";
          //     $result = mysqli_query($con,$query);
          //     $num = mysqli_num_rows($result);
          //     if($num != 0){
          //       $data = mysqli_fetch_array($result);
          //       $tid = $data['TeamID'];
          //       $tid = $tid + 1;
          //     }
          //     $reg_event = "INSERT INTO $events[$var](Name,Email,Contact,TeamID) VALUES('$name','$email','$contact','$tid')  ";
          //     mysqli_query($con,$reg_event);
          //   }
          // }
        }else {
          echo("Error description: " . mysqli_error($con));
        }

        // ab yahan pe email bhejna hai for email confirmation
      }
    }else{
      $msg = "Passwords didn't match";
    }
  }

?>

<!DOCTYPE html>
<html>
  <?php include('includes/head.php'); ?>
  <body class="back">
    <?php include('includes/header.php'); ?>
    <div id="register">
        <div class="g-container--sm g-padding-y-80--xs g-padding-y-125--sm">
            <div class="g-text-center--xs g-margin-b-60--xs">
                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs">Sign Up</p>
                <h2 class="g-font-size-32--xs g-font-size-36--md g-color--white">Register Now</h2>
                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--red g-letter-spacing--2 g-margin-b-25--xs"><?php echo $msg; ?></p>
            </div>
            <form class="center-block g-width-500--sm g-width-550--md" method="post" action="regnew.php">
                <div class="permanent">
                    <div class="g-margin-b-30--xs">
                          <input type="text" class="form-control s-form-v3__input" placeholder="* Full Name" name="name" style="text-transform: none" id="name">
                    </div>
                    <div class="row g-margin-b-50--xs">
                        <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                            <input type="email" class="form-control s-form-v3__input" placeholder="* Email" name="email" style="text-transform: none" id="email">
                        </div>
                        <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                            <input type="tel" class="form-control s-form-v3__input" placeholder="* Contact" name="contact" style="text-transform: none">
                        </div>
                    </div>
                    <!-- <select type="number" pattern="[0-9]{11}" class="form-control s-form-v3__input g-margin-b-30--xs" name="event" placeholder="* No. of members" id="members" >
                        <option value='' selected disabled hidden>Choose an Event</option>
                        <option value='Swadesh'>Swadesh</option>
                        <option value='AdVenture'>AdVenture</option>
                        <option value='Pitch_Perfect'>Pitch Perfect</option>
                        <option value='renderico'>render.ico</option>
                        <option value='CEO'>CEO</option>
                        <option value='Teen_Titans'>Teen Titans</option>
                        <option value='BizMantra'>BizMantra</option>
                        <option value='BizQuiz'>BizQuiz</option>
                        <option value='ConsoWorld'>ConsoWorld</option>
                    </select> -->
                    <div class="g-margin-b-30--xs">
                            <input type="password" class="form-control s-form-v3__input" placeholder="* Password" name="password" id="password">
                    </div>
                    <div class="g-margin-b-30--xs">
                            <input type="password" class="form-control s-form-v3__input" placeholder="* Confirm Password" name="cpassword">
                    </div>
                </div>

                <div class="g-text-center--xs">
                    <button type="submit" name="regnew" class="text-uppercase s-btn s-btn--md s-btn--white-brd g-radius--50 g-padding-x-70--xs g-margin-b-20--xs">Register</button>
                </div>
                <a href="login.php"><p id="message" class="g-font-size-14--xs g-font-weight--700 g-color--red g-letter-spacing--2 g-margin-b-25--xs">Already registered?</p></a>
            </form>

        </div>
    </div>
    <?php include("includes/footer.php");?>
    <?php include("includes/script.php");?>
  </body>
</html>
