<!DOCTYPE html>
<html lang="en" class="no-js">
    <!-- Begin Head -->
    <?php $pagetitle = 'Attractions | Consortium'; ?>

  <!-- Begin Head -->
  <?php include("includes/head.php")?>


    <!-- Body -->
    <body style="background: black">

        <!--========== HEADER ==========-->
        <?php include("includes/header.php")?>
        <!--========== END HEADER ==========-->

        <!--========== PROMO BLOCK ==========-->
        <div class="g-bg-position--center js__parallax-window" style="background:#000;height:100vh; display:flex; align-items:center">
            <div class="g-container--md g-text-center--xs g-padding-y-100--xs">
                <h1 class="g-font-size-26--xs g-font-size-36--md g-color--primary g-letter-spacing--3">Consortium'20</h1>
                <h2 class="g-font-size-36--xs g-font-size-50--sm g-font-size-60--md g-color--white g-letter-spacing--1">Attractions</h2>
                <div class="indicate"><i class="ti-angle-double-down"></i></div>

            </div>
        </div>
        <!--========== END PROMO BLOCK ==========-->

        <!--========== PAGE CONTENT ==========-->
        <!-- Speakers -->
        <div class="core-container">
            <div class="container g-padding-y-80--xs g-padding-y-125--sm  g-padding-x-0--xs g-padding-x-40--sm g-padding-x-100--md" style="background:rgba(0, 0, 0, 0.4)">
                <div class="row product-grid">

            <a href="/aimlworkshop.php" class="product-card col-xs-12 col-md-4 col-lg-3" >
                <div class="product-card__item-grid" style="background:url(img/events/simplecrm.png)">

                    <div class="product-card__item-text-v2">
                        <h5 class="g-color--primary" style="color:#bd2026"><b>Applications of AI/ML in Banking and Insurance Sector | Workshop</b></h5>
                        <p class="g-color--white">Consortium'20  and Simple CRM present a workshop by Mr. Indrannel Fuke - Founder of SimpleCRM. <br>Date: 25th January 20</p>
                        <p class="g-color--white"><b>Register Now</b></p>
                        <p class="g-color--white"><i>#Workshop</i></p>
                    </div>

                </div>
            </a>
            <!--<a href="https://goo.gl/forms/e9w6g83HFuOXAzAz2" class="product-card col-xs-12 col-md-4 col-lg-3" >
                <div class="product-card__item-grid" style="background:url(img/events/chatur.png)">

                    <div class="product-card__item-text-v2">
                        <h5 class="g-color--primary"><b>The Art Of Stock Investing | Workshop</b></h5>
                        <p class="g-color--white">Consortium'20 brings to you the certified workshop on "The Art of stock investing"  in association with Chatur Ideas.<br>Date: 10<sup>th</sup> March 19</p>
                        <p class="g-color--white"><b>Register Now</b></p>
                        <p class="g-color--white"><i>#Workshop</i></p>
                    </div>

                </div>
            </a> -->


        </div>
            </div>
        </div>

            <!--<div class="row g-overflow--hidden">-->

            <!--</div>-->

        </div>
        <!-- End Speakers -->

        <!--========== FOOTER ==========-->
        <?php include("includes/footer_landing.php");?>
        <!--========== END FOOTER ==========-->

        <!-- Back To Top -->
        <a href="javascript:void(0);" class="s-back-to-top js__back-to-top"></a>

        <!--========== JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) ==========-->
        <!-- Vendor -->
        <script type="text/javascript" src="vendor/jquery.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.migrate.min.js"></script>
        <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.smooth-scroll.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.back-to-top.min.js"></script>
        <script type="text/javascript" src="vendor/scrollbar/jquery.scrollbar.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.parallax.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.wow.min.js"></script>

        <!-- General Components and Settings -->
        <script type="text/javascript" src="js/global.min.js"></script>
        <script type="text/javascript" src="js/components/header-sticky.min.js"></script>
        <script type="text/javascript" src="js/components/scrollbar.min.js"></script>
        <script type="text/javascript" src="js/components/wow.min.js"></script>
        <script>

            var wid = $(".product-card__item-grid").width();
            $(".product-card__item-grid").css({
                "height":wid+"px"
            });

        </script>
        <!--========== END JAVASCRIPTS ==========-->

    </body>
    <!-- End Body -->
</html>
