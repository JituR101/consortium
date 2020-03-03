<?php
   @session_start();
  // error_reporting(E_ALL);
  //   ini_set('display_errors', '1');
  $db_host = "localhost:3306";
  $db_username = "conso20";
  $db_pass = "Conso@123";
  $db_name = "conso20";
  $con = mysqli_connect("$db_host","$db_username","$db_pass") or die ("could not connect to mysql");
  mysqli_select_db($con,$db_name) or die ("no database");

      $brainquery = "CREATE TABLE IF NOT EXISTS wowanswer(
                team_name VARCHAR (255) PRIMARY KEY,
                answer1 VARCHAR(255),
                answer2 VARCHAR(255),
                answer3 VARCHAR(255),
                answer4 VARCHAR(255),
                answer5 VARCHAR(255),
                answer6 VARCHAR(255),
                answer7 VARCHAR(255),
                answer8 VARCHAR(255),
                answer9 VARCHAR(255),
                answer10 VARCHAR(255),
                answer11 VARCHAR(255),
                answer12 VARCHAR(255),
                answer13 VARCHAR(255),
                answer14 VARCHAR(255),
                answer15 VARCHAR(255),
                answer16 VARCHAR(255),
                answer17 VARCHAR(255),
                answer18 VARCHAR(255),
                answer19 VARCHAR(255),
                answer20 VARCHAR(255),
                answer21 VARCHAR(255),
                answer22 VARCHAR(255),
                answer23 VARCHAR(255),
                answer24 VARCHAR(255),
                answer25 VARCHAR(255)
                )";

    mysqli_query($con,$brainquery);

    if(isset($_SESSION['email'])){
         $email = $_SESSION['email'];
          $query = "SELECT * FROM war_of_worlds_team WHERE Email='$email'";
            $result = mysqli_query($con,$query);
            $num = mysqli_num_rows($result);
            $data = $result->fetch_array(MYSQLI_ASSOC);
            if($num!=0){
              $team_name=$data['Name'];
              }
              $answer1=$_POST['answer1'];
              $answer2=$_POST['answer2'];
              $answer3=$_POST['answer3'];
              $answer4=$_POST['answer4'];
              $answer5=$_POST['answer5'];
              $answer6=$_POST['answer6'];
              $answer7=$_POST['answer7'];
              $answer8=$_POST['answer8'];
              $answer9=$_POST['answer9'];
              $answer10=$_POST['answer10'];
              $answer11=$_POST['answer11'];
              $answer12=$_POST['answer12'];
              $answer13=$_POST['answer13'];
              $answer14=$_POST['answer14'];
              $answer15=$_POST['answer15'];
              $answer16=$_POST['answer16'];
              $answer17=$_POST['answer17'];
              $answer18=$_POST['answer18'];
              $answer19=$_POST['answer19'];
              $answer20=$_POST['answer20'];
              $answer21=$_POST['answer21'];
              $answer22=$_POST['answer22'];
              $answer23=$_POST['answer23'];
              $answer24=$_POST['answer24'];
              $answer25=$_POST['answer25'];


              $sql = "INSERT INTO wow-answer (team_name,answer1,answer2,answer3,answer4,answer5,answer6,answer7,answer8,answer9,answer10,answer11,answer12,answer13,answer14,answer15,answer16,answer17,answer18,answer19,answer20,answer21,answer22,answer23,answer24,answer25)
                      VALUES ('$team_name' , '$answer1','$answer2','$answer3','$answer4','$answer5','$answer6','$answer7','$answer8','$answer9','$answer10','$answer11','$answer12','$answer13','$answer14','$answer15','$answer16','$answer17','$answer18','$answer19','$answer20','$answer21','$answer22','$answer23','$answer24','$answer25')";
              if(mysqli_query($con,$sql)) {
                header("location: success.php");
                }
              else {
                header("location: failure.php");
                    }
            }







?>
