<?php @session_start(); ?>
<html>
<header class="navbar-fixed-top s-header js__header-sticky js__header-overlay">
            <!-- Navbar -->
            <nav class="s-header-v2__navbar">
                <div class="container g-display-table--lg">
                    <!-- Navbar Row -->
                    <div class="s-header-v2__navbar-row">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="s-header-v2__navbar-col">
                            <button type="button" class="collapsed s-header-v2__toggle" data-toggle="collapse" data-target="#nav-collapse" aria-expanded="false">
                                <span class="s-header-v2__toggle-icon-bar"></span>
                            </button>
                        </div>

                        <div class="s-header-v2__navbar-col s-header-v2__navbar-col-width--180">
                            <!-- Logo -->
                            <div class="s-header-v2__logo">
                                <a href="/" class="s-header-v2__logo-link">
                                    <img class="s-header-v2__logo-img s-header-v2__logo-img--default" src="https://startupconclave.ecellvnit.org/static/img/E-Cell_white.png" alt="Ecell Logo" height="50">
                                    <img class="s-header-v2__logo-img s-header-v2__logo-img--shrink" src="img/icon.png" alt="Conso" height="40">
                                </a>
                            </div>
                            <!-- End Logo -->
                        </div>

                        <div class="s-header-v2__navbar-col s-header-v2__navbar-col--right" style="margin-right: 25px;">
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse s-header-v2__navbar-collapse" id="nav-collapse">
                                <ul class="s-header-v2__nav">
                                    <li class="s-header-v2__nav-item"><a href="index.php" class="s-header-v2__nav-link">Home</a></li>
                                    <!-- <li class="s-header-v2__nav-item"><a href="#about" class="s-header-v2__nav-link">About</a></li> -->

                                    <li class="s-header-v2__nav-item">
                                        <!--<a href="#events" class="s-header-v2__nav-link">Events</a>-->
                                        <a href="" class="dropdown-toggle s-header-v2__nav-link -is-active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Events <span class="g-font-size-10--xs g-margin-l-5--xs ti-angle-down"></span></a>
                                        <ul class="dropdown-menu s-header-v2__dropdown-menu">
                                            <li><a href="https://startupconclave.ecellvnit.org" class="s-header-v2__dropdown-menu-link">Startup Conclave</a></li>
                                            <li><a href="https://neo.ecellvnit.org" class="s-header-v2__dropdown-menu-link">NEO</a></li>
                                            <li><a href="Swadesh.php" class="s-header-v2__dropdown-menu-link">Swades</a></li>
                                            <li><a href="ceo.php" class="s-header-v2__dropdown-menu-link">CEO</a></li>
                                            <li><a href="AdVenture.php" class="s-header-v2__dropdown-menu-link">AdVenture</a></li>
                                            <li><a href="renderico.php" class="s-header-v2__dropdown-menu-link">Render.ico</a></li>
                                            <li><a href="operation-research.php" class="s-header-v2__dropdown-menu-link">Operation Research</a></li>
                                            <li><a href="pitch-mantra.php" class="s-header-v2__dropdown-menu-link">Pitch Mantra</a></li>
                                            <li><a href="BizQuiz.php" class="s-header-v2__dropdown-menu-link">Bizquiz</a></li>
                                            <li><a href="war_of_worlds.php" class="s-header-v2__dropdown-menu-link">War Of Worlds</a></li>
                                            <li><a href="wallstreet.php" class="s-header-v2__dropdown-menu-link">Wallstreet</a></li>
                                            <li><a href="epl.php" class="s-header-v2__dropdown-menu-link">EPL Manager</a></li>
                                            <!-- <li><a href="iplauction.php" class="s-header-v2__dropdown-menu-link">IPL Auction</a></li> -->
                                            <!-- <li><a href="expo.php" class="s-header-v2__dropdown-menu-link">Startup Expo</a></li> -->

                                        </ul>
                                    </li>
                                    <!-- <li class="s-header-v2__nav-item">
                                        <a href="#events" class="s-header-v2__nav-link">Events</a>
                                        <a href="index.html" class="dropdown-toggle s-header-v2__nav-link -is-active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Attractions <span class="g-font-size-10--xs g-margin-l-5--xs ti-angle-down"></span></a>
                                        <ul class="dropdown-menu s-header-v2__dropdown-menu">
                                            <li><a href="aimlworkshop.php" class="s-header-v2__dropdown-menu-link">AI/ML workshop</a></li>


                                        </ul>
                                    </li> -->

                                    <!-- <li class="s-header-v2__nav-item">
                                        <a href="#events" class="s-header-v2__nav-link">Events</a>
                                        <a href="/attractions.php" class="dropdown-toggle s-header-v2__nav-link -is-active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Attractions <span class="g-font-size-10--xs g-margin-l-5--xs ti-angle-down"></span></a>
                                        <ul class="dropdown-menu s-header-v2__dropdown-menu">
                                            <li><a href="/townhall.php" class="s-header-v2__dropdown-menu-link">TownHall</a></li>
                                            <li><a href="/consox.php" class="s-header-v2__dropdown-menu-link">CONSOx</a></li>
                                            <li><a href="/zerotoone.php" class="s-header-v2__dropdown-menu-link">Zero To One</a></li>
                                            <li><a href="/intern.php" class="s-header-v2__dropdown-menu-link">Internship Fair</a></li>
                                            <li><a href="/expo.php" class="s-header-v2__dropdown-menu-link">Startup Expo</a></li>
                                            <li><a href="/azure.php" class="s-header-v2__dropdown-menu-link">Azure Space</a></li>
                                            <li><a href="/attractions.php" class="s-header-v2__dropdown-menu-link">Workshops & Webinars</a></li>


                                        </ul>
                                    </li> -->
                                    <li class="s-header-v2__nav-item"><a href="https://pages.razorpay.com/E-Cell-T-Shirt-21" class="s-header-v2__nav-link">Merchandise</a></li>

                                    <li class="s-header-v2__nav-item"><a href="https://www.ecellvnit.org/spons.php" class="s-header-v2__nav-link">Previous Sponsors</a></li>
                                    <li class="s-header-v2__nav-item"><a href="team.php" class="s-header-v2__nav-link">Team</a></li>
                                    <?php if($_SESSION['email']){ ?>
                                      <li class="s-header-v2__nav-item">
                                        <a href="" class="dropdown-toggle s-header-v2__nav-link -is-active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['name'] ?> <span class="g-font-size-10--xs g-margin-l-5--xs ti-angle-down"></span></a>
                                        <ul class="dropdown-menu s-header-v2__dropdown-menu">
                                            <li><a href="dashboard.php" class="s-header-v2__dropdown-menu-link">Dashboard</a></li>
                                            <li><a href="register.php" class="s-header-v2__dropdown-menu-link">New Events</a></li>
                                            <li><a href="logout.php" class="s-header-v2__dropdown-menu-link">Logout</a></li>
                                        </ul>
                                      </li>
                                  <?php }else{ ?>
                                    <li class="s-header-v2__nav-item"><a href="regnew.php" class="s-header-v2__nav-link">Register</a></li>
                                    <li class="s-header-v2__nav-item"><a href="login.php" class="s-header-v2__nav-link">Login</a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <!-- End Nav Menu -->
                        </div>
                    </div>
                    <!-- End Navbar Row -->
                </div>
            </nav>
            <!-- End Navbar -->
        </header>
</html>
