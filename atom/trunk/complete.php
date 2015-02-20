<?php
    require_once 'lib/Mobile_Detect.php';
    $detect = new Mobile_Detect;
?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>

        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/?locale=en">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <?php
            if($detect->isMobile() && !$detect->isTablet()):
        ?>
        <div class="content mobile">
            <section class="showcase register complete" style="display: none">
                <div class="top"><a href="index.php"><img src="img/logo-top.png" alt="logo" class="logo"></a></div>
                <div class="form_container">
                    <form class="regForm">
                        <h2>Registration</h2>
                        <p>Complete your registration</p>
                        <input type="text" placeholder="youremail@example.com" disabled class="emailfield">
                        <input type="hidden" value="">
                        <input type="text" placeholder="First Name" name="fname">
                        <input type="text" placeholder="Last Name" name="lname">
                        <input type="text" placeholder="Phone Number" name="pnumber">
                        <input type="text" placeholder="Company Name" name="cname">
                        <input type="text" placeholder="Company Website" name="csite">
                        <div class="checkbox">
                        <input type="checkbox"> I agree to the terms and conditions
                        </div>
                        <input type="submit" value="Done">
                    </form>
                </div>
                <div class="footer">
                    <nav>
                        <ul>
                            <li><a href="">Terms</a></li>
                            <li><a href="">Privacy</a></li>
                        </ul>
                    </nav>
                </div>
            </section>
        </div>
        <? else: ?>
        <div class="content">
            <section class="showcase register complete" style="display: none">
                <div class="top"><a href="index.php"><img src="img/logo-top.png" alt="logo" class="logo"></a></div>
                <div class="form_container">
                    <form class="regForm">
                        <h2>Registration</h2>
                        <p>Complete your registration</p>
                        <input type="text" placeholder="youremail@example.com" disabled class="emailfield">
                        <input type="hidden" value="">
                        <input type="text" placeholder="First Name" name="fname">
                        <input type="text" placeholder="Last Name" name="lname">
                        <input type="text" placeholder="Phone Number" name="pnumber">
                        <input type="text" placeholder="Company Name" name="cname">
                        <input type="text" placeholder="Company Website" name="csite">
                        <div class="checkbox">
                        <input type="checkbox"> I agree to the terms and conditions
                        </div>
                        <input type="submit" value="Done">
                    </form>
                </div>
                <div class="footer">
                    <nav>
                        <ul>
                            <li><a href="">Terms</a></li>
                            <li><a href="">Privacy</a></li>
                        </ul>
                    </nav>
                </div>
            </section>
        </div>
        <? endif;?>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="js/vendor/jquery.touchSwipe.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
