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

   if(isset($_SESSION['email'])){
    $email = $_SESSION['email'];
              }
            else{
               $_SESSION['login_error'] = "Kindly Login First";
    header('location:/login.php');
            }

  ?>
<!DOCTYPE html>
  <html>
    <head>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="user-css/login-style.css">
        <link rel="shortcut icon" type="image/png" href="images/conso-icon.png">
        <title>WAR OF WORLDS'20 | LOGIN</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="css/swades.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">



    </head>
    <body>



      <nav class="navbar sticky-top navbar-expand-lg navbar-dark " >

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">

            <form class="form-inline my-2 my-lg-0">

              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Welcome : <?php  $query = "SELECT * FROM war_of_worlds_team WHERE Email='$email'";
            $result = mysqli_query($con,$query);
            $num = mysqli_num_rows($result);
            $data = $result->fetch_array(MYSQLI_ASSOC);
            if($num!=0){
              echo $data['Name'];
            }
            ?></button>
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><a href="logout.php">Log Out</a></button>

            </form>

          </div>
        </nav>
      </br>

        <div class ="start-test instructions">
        <h3 style="color: white;"><b>War of Worlds</b></h3></br>
        <h5 style="color: white;"><b>About:</b></h5>
        <p style="color: white">
          Rise from the debris of the fallen in a knock out competition where wits beyond measure is your only strength . War of Worlds is a first of its kind event that teleports the participants into an educational simulation in which students learn about diplomacy, international relations and political conflict resolution.
WoW aims to dismiss all established notions regarding the stand of a country on an issue and encourages original ideologies by the participants.

Set in a post war era this platform allows the participants to represent their own nations, challenges them to develop policies, foster negotiations and enhance their critical thinking skills.
        </p>
        <br>
      </div>
    </br>



        <div class="start-test instructions">
          <h5 style="color: white;">Instructions</h5>
          <ol style="color: white;">
            <li>Before starting the test, make sure you are connected with high speed internet connection</li>
            <li>Once you start the test, do not refresh.</li>
            <li>The test comprises of 25 multiple choice questions with one correct answer each.</li>
            <li> All questions are compulsory. </li>
            <li>1 mark will be awarded for each correct answer.</li>
            <li>There is no negative marking.</li>
            <li>Total time for the test is 10 minutes..</li>
            <li>Submit the paper before the time is over otherwise your responses will be submitted automatically</li>
          </ol>
          <br>
          <h5 style="color: white;" class="maximummarks">M.M.:- 25</h5>
          <br>
        </div>

        <div  class="start-test">
          <button class="start-test" type="start-test" onclick="myFunction()">start test</button>
        </div>

        </div>




        <div id="test" style="display: none;">

          <form id="myForm1" name="myForm1" action="swadesh_answer.php" method='post' >
            <div id="questions">
              <p class="allthebest">----ALL THE BEST----</p>

            </br>

      Q1. Which of the following is not a main organ of the United Nations?</br>
      </br>
      <input type="checkbox" name="answer1" value="a">  a)  International Court of Justice</br>
      <input type="checkbox" name="answer1" value="b">  b)  Economic and Social Council.</br>
      <input type="checkbox" name="answer1" value="c">  c)  Secretariat</br>
      <input type="checkbox" name="answer1" value="d">  d)  International Monetary fund
      </br>

      </br>
      </br></br>
      Q.2  This terrorist organisation has been waging a war against the Nigerian Army, who are they?</br></br>
      <input type="checkbox" name="answer2" value="a">  a)  Al Qaeda.</br>
      <input type="checkbox" name="answer2" value="b">  b)  ISIS.</br>
      <input type="checkbox" name="answer2" value="c">  c)  The Taliban</br>
      <input type="checkbox" name="answer2" value="d">  d)  Boko Haram.
      </br>

      </br>
      </br></br>
      Q3. Which nation is pursuing a diplomatic and economic policy called 'One Belt One Road'?</br></br>
      <input type="checkbox" name="answer3" value="a">  a)  India.</br>
      <input type="checkbox" name="answer3" value="b">  b)  Kenya.</br>
      <input type="checkbox" name="answer3" value="c">  c)  China.</br>
      <input type="checkbox" name="answer3" value="d">  d)  Japan.</br>

      </br></br>
      </br>
      Q4. Which Indian defense service has banned the use of Facebook by its personnel?</br></br>
      <input type="checkbox" name="answer4" value="a">  a)  Indian Navy.</br>
      <input type="checkbox" name="answer4" value="b">  b)  Indian Army.</br>
      <input type="checkbox" name="answer4" value="c">  c)  Indian AirForce.</br>
      <input type="checkbox" name="answer4" value="d">  d)  Territorial Army.</br>


    </br>
    </br>
    </br>
    Q5. Who was the first U.S. President to resign Presidency?</br></br>
    <input type="checkbox" name="answer5" value="a">a) Richard Nixon.</br>
    <input type="checkbox" name="answer5" value="b">b) Robert Walpole.</br>
    <input type="checkbox" name="answer5" value="c">c) Henry Waterloo.</br>
    <input type="checkbox" name="answer5" value="d">d) George Bush.</br>
    </br></br></br>


    Q6. The Reserve Bank of India has launched which app to help the visually challenged identify the denomination of currency notes?</br></br>
    <input type="checkbox" name="answer6" value="a">a) INSIGHT.</br>
    <input type="checkbox" name="answer6" value="b">b) Surya.</br>
    <input type="checkbox" name="answer6" value="c">c) MANI.</br>
    <input type="checkbox" name="answer6" value="d">d) ABLE.</br>
    </br></br></br>

    Q7. Which country has recently declared Fire Emergency ?</br></br>
    <input type="checkbox" name="answer7" value="a">a) Brazil.</br>
    <input type="checkbox" name="answer7" value="b">b) Australia.</br>
    <input type="checkbox" name="answer7" value="c">c) South Sudan.</br>
    <input type="checkbox" name="answer7" value="d">d) Chile.</br>
    </br></br></br>

    Q8. Who has been named as the most famous teenager in the world by the United Nations?</br></br>
    <input type="checkbox" name="answer8" value="a">a) Greta Thunberg.</br>
    <input type="checkbox" name="answer8" value="b">b) Malala Yousafzai.</br>
    <input type="checkbox" name="answer8" value="c">c) Millie Bobby Brown.</br>
    <input type="checkbox" name="answer8" value="d">d) Storm Reid.</br>
    </br></br></br>

    Q9. Which party won majority in the UK elections 2019?</br></br>
    <input type="checkbox" name="answer9" value="a">a) Labour Party.</br>
    <input type="checkbox" name="answer9" value="b">b) Conservative Party.</br>
    <input type="checkbox" name="answer9" value="c">c) Scottish National Party.</br>
    <input type="checkbox" name="answer9" value="d">d) Liberal Democrat’s.</br>
    </br></br></br>

    Q10. Which former President was awarded with the death penalty for unlawfully imposing emergency in 2007?</br></br>
    <input type="checkbox" name="answer10" value="a">a) Mengistu Haile Mariam.</br>
    <input type="checkbox" name="answer10" value="b">b) Nawaz Sharif.</br>
    <input type="checkbox" name="answer10" value="c">c) Pervez Musharraf.</br>
    <input type="checkbox" name="answer10" value="d">d) Tafari Benti.</br>
    </br></br></br>

    Q11. Which country has recently left the European Union?</br></br>
    <input type="checkbox" name="answer11" value="a">a) Austria.</br>
    <input type="checkbox" name="answer11" value="b">b) Belgium.</br>
    <input type="checkbox" name="answer11" value="c">c) Britain.</br>
    <input type="checkbox" name="answer11" value="d">d) Denmark.</br>
    </br></br></br>

    Q12. India has allowed which Chinese telecom company to participate in conducting trials for 5G network in India?</br></br>
    <input type="checkbox" name="answer12" value="a">a) Coolpad</br>
    <input type="checkbox" name="answer12" value="b">b) Alcatel OneTouch/TCL.</br>
    <input type="checkbox" name="answer12" value="c">c) Gionee.</br>
    <input type="checkbox" name="answer12" value="d">d) Huawei.</br>
    </br></br></br>

    Q13. Which country announced Indian rupee as a Legal tender on Jan 29, 2014.</br></br>
    <input type="checkbox" name="answer13" value="a">a) Zimbabwe.</br>
    <input type="checkbox" name="answer13" value="b">b) North Korea.</br>
    <input type="checkbox" name="answer13" value="c">c) Japan.</br>
    <input type="checkbox" name="answer13" value="d">d) Russia.</br>
    </br></br></br>

    Q14. Which bank is known as the Banker's bank of India?</br></br>
    <input type="checkbox" name="answer14" value="a">a) SBI.</br>
    <input type="checkbox" name="answer14" value="b">b) RBI.</br>
    <input type="checkbox" name="answer14" value="c">c) HSBC Bank.</br>
    <input type="checkbox" name="answer14" value="d">d) HDFC Bank.</br>
    </br></br></br>

    Q15. ATM card was introduced in India by:</br></br>
    <input type="checkbox" name="answer15" value="a">a) HSBC Bank.</br>
    <input type="checkbox" name="answer15" value="b">b) Corporation Bank.</br>
    <input type="checkbox" name="answer15" value="c">c) ICICI Bank.</br>
    <input type="checkbox" name="answer15" value="d">d) State Bank Of India.</br>
    </br></br></br>

    Q16. Recently the World Health Organization declared which virus an international health emergency?</br></br>
    <input type="checkbox" name="answer16" value="a">a) Ebola.</br>
    <input type="checkbox" name="answer16" value="b">b) Polio.</br>
    <input type="checkbox" name="answer16" value="c">c) Corona.</br>
    <input type="checkbox" name="answer16" value="d">d) Calseburg.</br>
    </br></br></br>

    Q17. Global Wealth and lifestyle report were recently launched by Swiss bank, Julius Baer. Which city tops the list of world’s costliest cities according to it?</br></br>
    <input type="checkbox" name="answer17" value="a">a) Barcelona.</br>
    <input type="checkbox" name="answer17" value="b">b) Mumbai.</br>
    <input type="checkbox" name="answer17" value="c">c) London.</br>
    <input type="checkbox" name="answer17" value="d">d) Hong Kong.</br>
    </br></br></br>


    Q18.BRICS Nation means ?</br></br>
    <input type="checkbox" name="answer18" value="a">a) Brasil, Russia, India, China, South Africa.</br>
    <input type="checkbox" name="answer18" value="b">b) Britain, Russia, India, China, Singapore.</br>
    <input type="checkbox" name="answer18" value="c">c) Brasil, Romania, Italy, China, Sweden.</br>
    <input type="checkbox" name="answer18" value="d">d) Britain, Russia, India, China, Singapore.</br>
    </br></br></br>



    Q19. Arun's present age in years is 40% of Barun's. In another few years, Arun's age will be half of Barun's. By what percentage will Barun's age increase during this period?</br></br>
    <input type="checkbox" name="answer19" value="a">a)  25.</br>
    <input type="checkbox" name="answer19" value="b">b)  20.</br>
    <input type="checkbox" name="answer19" value="c">c)  15.</br>
    <input type="checkbox" name="answer19" value="d">d)  27.</br>
    </br></br></br>


    Q20. An elevator has a weight limit of 630 kg. It is carrying a group of people of whom the heaviest weighs 57 kg and the lightest weighs 53 kg. What is the maximum possible number of people in the group?</br></br>
    <input type="checkbox" name="answer20" value="a">a) 10.</br>
    <input type="checkbox" name="answer20" value="b">b) 11.</br>
    <input type="checkbox" name="answer20" value="c">c) 12.</br>
    <input type="checkbox" name="answer20" value="d">d) 13.</br>
  </br></br></br>


  Q21. The sensitive index of National Stock Exchange of India is popularly known as: </br></br>
  <input type="checkbox" name="answer21" value="a">a) SENSEX.</br>
  <input type="checkbox" name="answer21" value="b">b) CRIS.</br>
  <input type="checkbox" name="answer21" value="c">c) NIFTY.</br>
  <input type="checkbox" name="answer21" value="d">d) MCS.</br>
</br>
</br>


  Q22.The main index/indices of NYSE is/are:</br></br>
  <input type="checkbox" name="answer22" value="a">a) Dow Jones Industrial Average.</br>
  <input type="checkbox" name="answer22" value="b">b) NYSE Composite.</br>
  <input type="checkbox" name="answer22" value="c">c) S&P 500.</br>
  <input type="checkbox" name="answer22" value="d">d) All of the above.</br>
  </br></br></br>


  Q23.Recently, which bank has switched to OTP based cash withdrawal for all its Atms in India?</br></br>
  <input type="checkbox" name="answer23" value="a">a) Axis Bank.</br>
  <input type="checkbox" name="answer23" value="b">b) HDFC Bank.</br>
  <input type="checkbox" name="answer23" value="c">c) Andra Bank.</br>
  <input type="checkbox" name="answer23" value="d">d) State Bank of India.</br>
  </br></br></br>


  Q24.GBP is the currency of which country ?</br></br>
  <input type="checkbox" name="answer24" value="a">a) Britain.</br>
  <input type="checkbox" name="answer24" value="b">b) Italy.</br>
  <input type="checkbox" name="answer24" value="c">c) China.</br>
  <input type="checkbox" name="answer24" value="d">d) France.</br>
  </br></br></br>


  Q25.Rajat Gupta, the former head of McKinsey and Co. was convicted on insider trading and spent two years in prison. He is also the cofounder of which of the following Institutions?</br></br>
  <input type="checkbox" name="answer25" value="a">a) ICFAI Business School. </br>
  <input type="checkbox" name="answer25" value="b">b) Indian School of Business.</br>
  <input type="checkbox" name="answer25" value="c">c) Ashoka University.</br>
  <input type="checkbox" name="answer25" value="d">d) College of Revenue and Finance.</br>
  </br></br></br>

  </br>
</br>

  </br>
</div>

<input type="submit" value="Submit" name="submit" class="test-submit">
</form>
</div>










<script>

  var x;

function myFunction() {
   document.querySelector("#test").style.display = "block";
   x= setTimeout(Func, 2700000);

}
 function Func(){
      var y = document.getElementById("questions");
          y.style.display = "none";
   alert('Time over !!!Please Submit Your Response.');



 }



</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



</body>
</html>
