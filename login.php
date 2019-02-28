<?php
  session_start();
  $pagetitle = 'Login | Consortium';



   if(isset($_SESSION['email'])){
      header('location:dashboard.php');
   }
  else if(isset($_POST['login1'])) {
    $db_host = "localhost:3306";
    $db_username = "conso19";
    $db_pass = "Conso@123";
    $db_name = "conso19";

    $con = mysqli_connect("$db_host","$db_username","$db_pass") or die ("could not connect to mysql");
    mysqli_select_db($con,$db_name) or die ("no database");

    $email = $con->real_escape_string($_POST['email']);
    $password = $con->real_escape_string($_POST['password']);

    if($email=="" || $password==""){
        $msg =  "Please fill all the details";
    }
    else{
      $events = array('Swadesh','AdVenture','Pitch_Perfect','renderico','CEO','Teen_Titans','BizMantra','BizQuiz','ConsoWorld');

      $query = "SELECT * from Registrations WHERE Email='$email'";
      $result = mysqli_query($con,$query);
      $num = mysqli_num_rows($result);
      if($num > 0){
        $data = mysqli_fetch_array($result);
        if($data['otp'] == 'Confirmed'){
          if(password_verify($password,$data['Password'])){


            function split_name($name) {
              $name = trim($name);
              $last_name = (strpos($name, ' ') === false) ? '' : preg_replace('#.*\s([\w-]*)$#', '$1', $name);
              $first_name = trim( preg_replace('#'.$last_name.'#', '', $name ) );
              return array($first_name, $last_name);
            }

            $_SESSION['email'] = $email;
            $_SESSION['name'] = split_name($data['Name'])[0];
            $_SESSION['contact'] = $data['Contact'];
            $_SESSION['fullname'] = $data['Name'];

            if($_GET['v'] == 'azure'){
              header('location:azure.php');
            }
            if($_GET['v'] == 'townhall'){
              header('location:townhall.php');
            }
            else{
              header('location:dashboard.php');
            }

          }
          else {
            $msg = "Incorrect Password. Please try again.";
          }
        }else{
        $msg = "Please verify your email id to login.";
      }
      }
      else{
        $msg = "This email id isn't registered with us. Register <a href='regnew.php'>here</a>.";
      }
    }
  }
  else if(isset($_POST['login2'])){
    header('location:index.php');
  }
?>

<!DOCTYPE html>
<html>
<?php include("includes/head.php"); ?>
  <body class="black">
    <?php include("includes/header.php"); ?>

    <!--========== PROMO BLOCK ==========-->

    <div id="login" class="s-promo-block-v1">
        <div class="container g-ver-center--md g-padding-y-100--xs">
            <div class="row g-hor-centered-row--md g-margin-t-20--sm">
                <div class="col-lg-4 col-sm-4 g-hor-centered-row__col">
                    <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                        <form submit="" action="login.php<?php if($_GET['v'] == 'azure'){echo '?v=azure';} elseif($_GET['v'] == 'townhall'){echo '?v=townhall';}?>" method="post" class="center-block g-width-300--xs g-width-350--md g-bg-color--white-opacity-lightest g-box-shadow__dark-lightest-v3 g-padding-x-40--xs g-padding-y-40--xs g-radius--4">
                            <div class="g-text-center--xs g-margin-b-40--xs">
                                <h2 class="g-font-size-30--xs g-color--white">Login</h2>
                                <p class="text-uppercase g-font-size-14--xs g-text-center--xs g-font-weight--700 g-color--red g-letter-spacing--2 g-margin-b-25--xs"><?php echo $msg; ?></p>
                                <p class="text-uppercase g-font-size-14--xs g-text-center--xs g-font-weight--700 g-color--red g-letter-spacing--2 g-margin-b-25--xs"><?php  if(isset($_SESSION['login_error'])){ echo $_SESSION['login_error'];session_destroy(); }?></p>
                            </div>
                            <div class="g-margin-b-30--xs">
                                <input type="email" name="email" style="text-transform: none;" class="form-control s-form-v3__input" placeholder="* Email">
                            </div>
                            <div class="g-margin-b-30--xs">
                                <input type="password" name="password" style="text-transform: none;" class="form-control s-form-v3__input" placeholder="* Password">
                            </div>
                            <div class="g-text-center--xs">
                                <button type="submit" name="login1" class="text-uppercase btn-block s-btn s-btn--md s-btn--white-bg g-radius--50 g-padding-x-50--xs g-margin-b-20--xs">Login</button>
                                <a href="forgot.php" class="g-color--white g-font-size-13--xs regclass">Forgot Password</a><br>
                                <a href="regnew.php" class="g-color--white g-font-size-13--xs regclass">Not Registered?</a><br>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--========== END PROMO BLOCK ==========-->
      <?php include("includes/script.php"); ?>
  </body>
</html>
