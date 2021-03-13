<?php

function htmlMail($t, $sub, $name, $teamname, $event){


    $to = $t;

    $subject = $sub;

    $html_conso_id = "<!DOCTYPE html>
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
                      <h2 style='font-size:22px;'>Welcome to Consortium'21</h2><br>

                      <div class='context'>


                          <h3><b>Hello ".$name.",</b></h3>


                          <p>Thank You for registering! You are now a part of one of the India's Biggest Entrepreneurship Summit.</p>
                          <div>
                              <p>We are well pleased to have you on board.<br/><br/>
                              We are assigning you a ConsoID: ".$teamname."<br/>
                              You need to remember this ConsoID to login into your dashboard on our website, https://consortium.ecellvnit.org/<br/>
                              <b>Kindly do not share your ConsoID with anyone. It's your key to your dashboard of Consortium'21.</b><br/>
                              Your ConsoID is<br/> <span style='font-size:24px'>".$teamname."</span></p>
                              Use it to verify your email id.<br/>
                              For queries and in case of any difficulty, feel free to contact us.<br>
                                  <p>
                                  With warm regards,<br>
                                  E-Cell VNIT
                              </p>


                          </div>
                      </div>
                  </body>
              </html>";



    $htmlswades = '
    <!DOCTYPE html>
        <html>
            <head>
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-125403862-1"></script>

    <script>window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag("js", new Date());

          gtag("config", "UA-125403862-1");
      </script>
      <title>Email-Template</title>
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
                <h2 style="font-size:22px;">Welcome to Swades!</h2><br>

                <div class="context">
                    <h3><b>Hello '.$name.',</b></h3>


                    <p>Thank You for registering in Consortium 21!</p>
                    <div>
                        <p>We hope this mail finds you in the best of your health and cheerful spirits. We are well pleased to have you on board for the <b>Swades</b></p>
                        <p>
                            Here is your way to the first step towards the journey of bringing about social change. Get ready to ignite your entrepreneurial mindset to solve problems affecting over 70% of Indian residents.<br>
                            <br>
                        </p>
                        <br>


                        <p>
                          <br>
                          <p>To keep you updated, all the relevant details will be e-mailed to you very shortly.<br>For queries and in case of any difficulty, feel free to contact us.</p>
                          <br>

                          <br>
                            With warm regards,<br>

                            Ecell VNIT
                        </p>
                    </div>
                </div>
            </body>
        </html>';



        $htmlTREC = '
        <!DOCTYPE html>
            <html>
                <head>
        <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-125403862-1"></script>

        <script>window.dataLayer = window.dataLayer || [];
              function gtag(){dataLayer.push(arguments);}
              gtag("js", new Date());

              gtag("config", "UA-125403862-1");
          </script>
          <title>Email-Template</title>
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
                    <h2 style="font-size:22px;">Welcome to Render.ico!</h2><br>

                    <div class="context">
                        <h3><b>Hello '.$name.',</b></h3>


                        <p>Thank You for registering team <b>'.$teamname.'</b></p>
                        <div>
                            <p>We hope this mail finds you in the best of your health and cheerful spirits. We are well pleased to have you on board for the <b>TREC (Technology Research Entrepreneurship Conclave)</b></p>
                            <p>
                            Technology Research Entrepreneurship Conclave, a platform where the potential projects stand a chance to:<br>
                              ✅ get a patent<br?<br>
                              ✅ get legal consultation<br>
                              ✅ connect with the investors<br>
                              ✅ access abundant learning resources<br>
                                <br>
                            </p>




                            <p>




                              <br>
                              <p>To keep you updated, all the relevant details will be e-mailed to you regularly.<br>For queries and in case of any difficulty, feel free to contact us.</p>
                              <br>

                              <br>
                                With warm regards,<br>
                                Team TREC<br>
                                Consortium 20, Ecell VNIT
                            </p>
                        </div>
                    </div>
                </body>
            </html>
        ';



        $htmlRenderico = '
    <!DOCTYPE html>
        <html>
            <head>
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-125403862-1"></script>

    <script>window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag("js", new Date());

          gtag("config", "UA-125403862-1");
      </script>
      <title>Email-Template</title>
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
                <h2 style="font-size:22px;">Welcome to Render.ico!</h2><br>

                <div class="context">
                    <h3><b>Hello '.$name.',</b></h3>


                    <p>Thank You for registering team <b>'.$teamname.'</b></p>
                    <div>
                        <p>We hope this mail finds you in the best of your health and cheerful spirits. We are well pleased to have you on board for the <b>Render.ico</b></p>
                        <p>
                            Here is your way to the first step towards the journey of express yourself and know where you stand for within the strokes and shades of a company logo?<br>
                            <br>
                        </p>
                        <br>



                        <p>

                        <br>
                        <p>Note: The Logo to be submitted should be in the form of: .jpeg or .png or .psd or .ai .<br> For more information visit website.</p>


                          <br>
                          <p>To keep you updated, all the relevant details will be e-mailed to you very shortly.<br>For queries and in case of any difficulty, feel free to contact us.</p>
                          <br>

                          <br>
                            With warm regards,<br>
                            Team Render.ico<br>
                            Consortium 21, Ecell VNIT
                        </p>
                    </div>
                </div>
            </body>
        </html>';

        $htmlBrainathon = '<!DOCTYPE html>
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
                      <h2 style="font-size:22px;">Welcome to Brainathon</h2><br>

                      <div class="context">
                          <h3><b>Hello</b></h3>


                          <p>Thank You for showing interest in the Brainathon!</p>
                          <div>
                              <p>We hope this mail finds you in the best of your health and cheerful spirits. We are well pleased to have you on board for this event.
                              </p>
                              <p>
                                  To complete your registration for brainathon follow the button below and become a part of Central India’s Biggest Entrepreneurship Summit Consortium 20 <br>
                                  <br>
                              </p>


                              <a style="display:block; text-align: center;width:100px; padding:12px 10px; background: #111; color:#FFF; text-decoration: none; border-radius:30px; position: relative;" href="https://consortium.ecellvnit.org/payexpo.php">Pay Now!</a>


                              <p>
                                  To keep you updated, all the relevant details will be emailed to you very shortly.<br>
                                  <br>
                              </p>
                              <p>For queries and in case of any difficulty, feel free to contact us.</p>
                              <p>
                                  With warm regards,<br>
                                  Team E-Cell VNIT
                              </p>
                          </div>
                      </div>
                  </body>
              </html>';


    $htmlaimlworkshop = '<!DOCTYPE html>
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
                      <h2 style="font-size:22px;">Welcome to AI/ML Workshop</h2><br>

                      <div class="context">
                          <h3><b>Hello</b></h3>


                          <p>Thank You for showing interest in the AI/ML Workshop!</p>
                          <div>
                              <p>We are well pleased to have you on board for this workshop.
                              </p>
                              <p>
                                  This Workshop on Applications of AI/ML in Banking and Insuarance sector<br>
                                  <br>
                                  By Mr Indraneel Fuke , the founder of Simple CRM. This workshop will impart you the knowledge on how AI/ML meet the needs of today’s rapidly changing small business environment and show AI and ML is impacting, transforming and even eliminating many shortcomings in organizations with evolutionary impact and transformation in how we think, plan and execute.<br>
                                  Understanding AI technology is absolutely crucial for organization leaders to stay ahead. Want to become that leader who knows the latest technology inside-out, Consortium’20 bring you that opportunity on a plate.<br>
                                  Venue: CRC 1-1 <br>
                                  Time: 10 AM, 25th January 2020 <br>
                                  Keep innovating and embrace the unexpected<br>
                                    <br>
                              </p>
                              <p>For queries and in case of any difficulty, feel free to contact us.</p>
                              <p>
                                  With warm regards,<br>
                                  Team E-Cell VNIT
                              </p>
                          </div>
                      </div>
                  </body>
              </html>';

    $htmlwar_of_worlds = '<!DOCTYPE html>
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
                      <h2 style="font-size:22px;">Welcome to War of Worlds</h2><br>

                      <div class="context">
                          <h3><b>Hello</b></h3>


                          <p>Congratulations! You are now a part of Central India’s Biggest Entrepreneurship Summit.</p>
                          <div>
                              <p>
                                  We are well pleased to have you on board for this event.You are successfully registered for War of Worlds.
                                  <br>

                              </p>

                              <p>
                                  To keep you updated, all the relevant details will be emailed to you very shortly.
                                  <br>
                              </p>
                              <p>For queries and in case of any difficulty, feel free to contact us.</p>
                              <p>
                                  With warm regards,<br>
                                  Team E-Cell VNIT
                              </p>
                          </div>
                      </div>
                  </body>
              </html>';


    $htmlAdVenture = '<!DOCTYPE html>
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
                      <h2 style="font-size:22px;">Welcome to AdVenture</h2><br>

                      <div class="context">
                          <h3><b>Hello</b></h3>


                          <p> You are successfully registered for AdVenture! We are well pleased to have you on board for this event.</p>
                          <div>
                              <p>

                                  <br>
                                  Your time is now! This Consortium\'21, grab your camera and bring your ideas to life!

                              </p>
                                <br>
                                <p>You would be given a set of challenges to pick from in our further emails, which must be completed within a stipulated amount of time. You will have to engage your creative senses and marketing mind to design an appropriate advertisement to finish your challenge.</p>


                              <p>The best advertisements made by you guys, will be featured on our social media pages and will also give you a chance to earn exciting prizes worth 5000 RS. Sharpen your tools for the upcoming creative battles.
                                  <br>
                              </p>
                              <p>For queries and in case of any difficulty, feel free to contact us.</p>
                              <p>
                              Sai Shiva -  +91 96522 62597- saishiva191@gmail.com <br>
                              Sriya -  +91 97666 09287 - sriya.samiksha@gmail.com <br>
                              Nidhi - +91 76207 16748 - aralkar.nidhi151@gmail.com <br><br>
                                  With warm regards,<br>
                                  Team E-Cell VNIT
                              </p>
                          </div>
                      </div>
                  </body>
              </html>';


    $htmlBizQuiz = '<!DOCTYPE html>
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
                      <h2 style="font-size:22px;">Welcome to BizQuiz</h2><br>

                      <div class="context">
                          <h3><b>Hello</b></h3>


                          <p> You are successfully registered for Bizquiz! You are now a part of Central India’s Biggest Entrepreneurship Summit. We are well pleased to have you on board for this event.</p>
                          <div>
                              <p>

                                  <br>
                                  Your time is now! This Conso\'21, battle your wits and challenge the wise !

                              </p>

                              <p>
                                  To complete your registration for Bizquiz please make the required payment of <b>INR 50</b>.
                                  <br><br>
                                  <b>For further details visit <a href="https://dare2compete.com/o/bizquiz-consortium21-visvesvaraya-national-institute-of-technology-vnit-nagpur-153434">Our portal</a> <br></b>

                              </p>
                              <p>For queries and in case of any difficulty, feel free to Contact Saransh Mittal: 9351482013</p>
                              <p>
                                  With warm regards,<br>
                                  Team E-Cell VNIT
                              </p>
                          </div>
                      </div>
                  </body>
              </html>';

    $htmlTownhall = '<!DOCTYPE html>
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
                      <h2 style="font-size:22px;">Welcome to TownHall by Simon Taufel</h2><br>

                      <div class="context">
                          <h3><b>Hey!</b></h3>
                          <p>Congratulations! You are successfully registered.</p>
                          <div>
                              <p>
                                  Consortium’19 presents a Townhall by Mr. Simon Taufel, a chance to get your questions answered by our celebrity guest during his live presence.<br>
                                  Date: <b>10<sup>th</sup> March\' 19</b><br>
                                  Venue: <b>Auditorium, VNIT Nagpur</b>

                                  <br><b>Note: Kindly bring your college Id at time of the event for verification.</b><br>

                              </p>

                              <p>For queries and in case of any difficulty, feel free to contact us.</p>
                              <p>
                                  With warm regards,<br>
                                  Team E-Cell VNIT
                              </p>
                          </div>
                      </div>
                  </body>
              </html>';
    $htmlBizMantra = '<!DOCTYPE html>
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
                      <h2 style="font-size:22px;">Welcome to BizMantra</h2><br>

                      <div class="context">
                          <h3><b>Hey!</b></h3>
                          <p>Congratulations! You are successfully registered for BizMantra</p>
                          <div>
                              <p>
                                  It\'s time to make your marketing so useful that people would pay for it.
                              </p>

                              <p>For queries and in case of any difficulty, feel free to contact us.</p>
                              <p>Test will be conducted on your respective classes</p>
                              <p>
                                  With warm regards,<br>
                                  Team E-Cell VNIT
                              </p>
                          </div>
                      </div>
                  </body>
              </html>';
    $htmlPitch = '<!DOCTYPE html>
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
                      <h2 style="font-size:22px;">Welcome to Pitch Perfect</h2><br>

                      <div class="context">
                          <h3><b>Hey!</b></h3>
                          <p>Congratulations! You are successfully registered for Pitch Perfect</p>
                          <div>
                              <p>
                                  It\'s time to to bring out the creative mindset of young people where they battle down to pitch an innovative product or service in the best possible way.
                              </p>

                              <p>For queries and in case of any difficulty, feel free to contact us.</p>
                              <p>
                                  With warm regards,<br>
                                  Team E-Cell VNIT
                              </p>
                          </div>
                      </div>
                  </body>
              </html>';
    $htmlCEO = '<!DOCTYPE html>
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
                      <h2 style="font-size:22px;">Welcome to CEO!</h2><br>

                      <div class="context">
                          <h3><b>Hey!</b></h3>
                          <p>Congratulations! You are successfully registered for CEO</p>
                          <div>
                              <p>
                                  It\'s time to to bring out the creative mindset of young people where they battle down to pitch an innovative product or service in the best possible way.
                                  <br>
                                  You will be notified about the further rounds and events on your registered mail id and your contact number. Wishing you best of luck for this enthralling journey.
                              </p>

                              <p>For queries and in case of any difficulty, feel free to contact us.</p>
                              <p>
                                  With warm regards,<br>
                                  Team E-Cell VNIT
                              </p>
                          </div>
                      </div>
                  </body>
              </html>';

              $htmlnirmaan = '<!DOCTYPE html>
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
                                <h2 style="font-size:22px;">Welcome to Nirmaan</h2><br>

                                <div class="context">
                                    <h3><b>Hey!</b></h3>
                                    <p>Congratulations! You are successfully registered for Nirmaan</p>
                                    <div>
                                        <p>
                                            It\'s time to to bring out the creative mindset of young people to design an ideal City.
                                        </p>

                                        <p>For queries and in case of any difficulty, feel free to contact us.</p>
                                        <p>
                                            With warm regards,<br>
                                            Team E-Cell VNIT
                                        </p>
                                    </div>
                                </div>
                            </body>
                        </html>';

                        $htmliplauction = '<!DOCTYPE html>
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
                                          <h2 style="font-size:22px;">Welcome to Nirmaan</h2><br>

                                          <div class="context">
                                              <h3><b>Hey!</b></h3>
                                              <p>Congratulations! You are successfully registered for IPL Auction</p>
                                              <div>
                                                  <p>
                                                      An event for everyone who not only just loves the game of cricket, but also analyses it to the limit.<br>
                                                       This event makes you the don of the hat of a bidder. You need to manage your budget and you can strategize to make the best possible team competing against other opponents who will give you a run for your money, quite literally.<br>
                                                        If you love cricket, if you have followed IPL and if you can mix common sense with passion into your bidding strategy, this event is a must for you.
                                                  </p>
                                                  <p> See you at Consortium20</p>

                                                  <p>For queries and in case of any difficulty, feel free to contact us.</p>
                                                  <p>
                                                      With warm regards,<br>
                                                      Team E-Cell VNIT
                                                  </p>
                                              </div>
                                          </div>
                                      </body>
                                  </html>';

                                  $htmlwallstreet = '<!DOCTYPE html>
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
                                                    <h2 style="font-size:22px;">Welcome to Wallstreet!</h2><br>

                                                    <div class="context">
                                                        <h3><b>Hey!</b></h3>
                                                        <p>Congratulations! You are successfully registered for Wallstreet</p>
                                                        <div>
                                                            <p>
                                                              Visit your dashboard for the payment to complete your registration.
                                                            </p>

                                                            <p>For queries and in case of any difficulty, feel free to contact us.</p>
                                                            <p>
                                                                With warm regards,<br>
                                                                Team E-Cell VNIT
                                                            </p>
                                                        </div>
                                                    </div>
                                                </body>
                                            </html>';

                                  $htmlForgot = "<!DOCTYPE html>
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
                                                    <h2 style='font-size:22px;'>Your new ConsoID for Consortium'21</h2><br>

                                                    <div class='context'>


                                                    <h3><b>Hello".$name."!</b></h3>
                                                    <div>
                                                        <p>We hope this mail finds you in the best of your health and cheerful spirits. We are well pleased to have you on board.<br/><br/>
                                                        Your updated ConsoID is: <br/> <span style='font-size:24px'>".$teamname."</span><br/>
                                                        Use this ConsoID to login to your dashboard: https://consortium.ecellvnit.org/login.php
                                                        </p>
                                                        For queries and in case of any difficulty, feel free to contact us.<br>
                                                            <p>
                                                            With warm regards,<br>
                                                            E-Cell VNIT
                                                        </p>


                                                    </div>


                                                        </div>
                                                    </div>
                                                </body>
                                            </html>";

                              $htmlconfirmwallstreet = "<!DOCTYPE html>
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
                                                <h2 style='font-size:22px;'>Registration Complete | Wallstreet</h2><br>

                                                <div class='context'>


                                                <h3><b>Hello".$name."!</b></h3>
                                                <div>
                                                    <p>You have successfully registered for the Wallstreet Event by VNIT Nagpur.<br>
                                                    <b>Wallstreet</b> will be live from 22nd March to 26th March 2021.<br>
                                                    You will receive the link and procedure to join virtual trading competition before the event on this email ID.<br><br>
                                                    If you have paid &#8377;200, you have successfully registered for the <b>Workshop by Zerodha</b> too.<br>
                                                    Having a <b>PAN CARD</b> is must to open a trading account according to guidelines set by Govt. of India. If you don’t have a PAN card with you then please apply for it so that your trading account could be opened.<br><br>
                                                    For more updates follow our Instagram handle @ecellvnit.<br><br>
                                                    Stay Tuned !<br>

                                                    </p>
                                                    For queries and in case of any difficulty, feel free to contact us.<br>
                                                        <p>
                                                        With warm regards,<br>
                                                        E-Cell VNIT
                                                    </p>


                                                </div>


                                                    </div>
                                                </div>
                                            </body>
                                        </html>";
                                        $htmlconfirmwar_of_worlds = "<!DOCTYPE html>
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
                                                <div style= 'background: #0b0b0b; padding:10px 30px;'><img src='https://www.ecellvnit.org/img/logo-ecell.png'></div>
                                                <h2 style='font-size:22px;'>Welcome to War of Worlds</h2><br>

                                                <div class='context'>
                                                    <h3><b>Hello </b></h3>


                                                    <p>Congratulations!You payment is successful. You are now a part of Central India’s Biggest Entrepreneurship Summit.</p>
                                                    <div>
                                                        <p>
                                                            We are well pleased to have you on board for this event.You are successfully registered for War of Worlds.
                                                            <br>

                                                        </p>

                                                        <p>
                                                            This is the Questionnaire for Round 1 of War of Worlds<br>
                                                            https://docs.google.com/forms/d/e/1FAIpQLSeF_OYGF_1BK3qdQ5eqjkHx7XxJhB9q0jnNKULKH3eMU_Sz3g/viewform <br>
                                                            Please Complete the Questionnaire by 18th March 2021<br>
                                                        </p>
                                                        <p>For queries and in case of any difficulty, feel free to contact us.</p>
                                                        <p>
                                                            With warm regards,<br>
                                                            Team E-Cell VNIT
                                                        </p>
                                                    </div>
                                                </div>
                                            </body>
                                        </html>";


    $html = "";
    if($event == 'swades'){
      $html = $htmlswades;
    }
    else if($event == 'TREC'){
      $html = $htmlTREC;
    }
    else if($event == 'renderico'){
      $html = $htmlRenderico;
    }
    else if($event == 'Brainathon'){
      $html = $htmlBrainathon;
    }
    else if($event == 'aimlworkshop'){
      $html = $htmlaimlworkshop;
    }
    else if($event == 'war_of_worlds'){
      $html = $htmlwar_of_worlds;
    }
    else if($event == 'adventure'){
      $html = $htmlAdVenture;
    }
    else if($event == 'townhall'){
      $html = $htmlTownhall;
    }
    else if($event == 'conso_id'){
      $html = $html_conso_id;
    }
    else if($event == 'bizquiz'){
      $html = $htmlBizQuiz;
    }

    else if($event == 'BizMantra'){
      $html = $htmlBizMantra;
    }
    else if($event == 'Pitch_Perfect'){
      $html = $htmlPitch;
    }
    else if($event == 'ceo'){
      $html = $htmlCEO;
    }
    else if($event == 'nirmaan'){
      $html = $htmlnirmaan;
    }
    else if($event == 'iplauction'){
      $html = $htmliplauction;
    }
    else if($event == 'wallstreet'){
      $html = $htmlwallstreet;
    }
    else if($event == 'pitch_mantra'){
      $html = $htmlpitch_mantra;
    }
    else if($event == 'operation_research'){
      $html = $htmloperation_research;
    }
    else if($event == 'forgot'){
      $html = $htmlForgot;
    }
    else if($event == 'confirmwallstreet'){
      $html = $htmlconfirmwallstreet;
    }else if($event == 'confirmwar_of_words'){
        $html = $htmlconfirmwar_of_worlds;
    }

    $url = 'https://startupconclave.ecellvnit.org/send';
    $data = array('subject' => $subject, 'email' => $to, 'html' => $html, 'pass' => 'Entrepreneurs2020');

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
    if ($result === FALSE) {
        $msg = 'We are facing problem in sending email. Please use this link to pay your registration fees.';
    }

  }
?>
