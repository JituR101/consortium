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

                        <div class="s-header-v2__navbar-col s-header-v2__navbar-col--right">
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse s-header-v2__navbar-collapse" id="nav-collapse">
                                <ul class="s-header-v2__nav">
                                    <li class="s-header-v2__nav-item"><a href="index.php" class="s-header-v2__nav-link">Home</a></li>
                                    <li class="s-header-v2__nav-item"><a href="#about" class="s-header-v2__nav-link">About</a></li>

                                    <li class="s-header-v2__nav-item"><a href="#events" class="s-header-v2__nav-link">Events</a></li>
                                    <li class="s-header-v2__nav-item"><a href="/attractions.php" class="s-header-v2__nav-link">Attractions</a></li>
                                    <li class="s-header-v2__nav-item"><a href="https://www.ecellvnit.org/store.php" class="s-header-v2__nav-link">Merchandise</a></li>
                                    <li class="s-header-v2__nav-item"><a href="https://www.ecellvnit.org/spons.php" class="s-header-v2__nav-link">Sponsors</a></li>
                                    <li class="s-header-v2__nav-item"><a href="#contact" class="s-header-v2__nav-link">Contact</a></li>
                                    <li class="s-header-v2__nav-item"><a href="/team.php" class="s-header-v2__nav-link">Team</a></li>
                                    <?php if($_SESSION['email']){ ?>
                                      <li class="s-header-v2__nav-item"><a href="logout.php" class="s-header-v2__nav-link">Logout</a></li>
                                  <?php }else{ ?>
                                    <!--<li class="s-header-v2__nav-item"><a href="reg.php" class="s-header-v2__nav-link">Register</a></li>-->
                                    <!-- <li class="s-header-v2__nav-item"><a href="login.php" class="s-header-v2__nav-link">Login</a></li> -->
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
