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
            <section class="showcase register" style="display:none">
                <div class="top"><a href="index.html"><img src="img/logo-top.png"></a></div>
                <div class="form_container">
                    <form class="regForm">
                        <h2>Create Account</h2>
                        <p>Get Started by entering your email address</p>
                        <input type="text" placeholder="Email" name="email">
                        <input type="submit" value="Get Started">
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
            <section class="showcase register" style="display:none">
                <div class="top"><a href="index.html"><img src="img/logo-register.png"></a></div>
                <div class="form_container">
                    <form class="regForm">
                        <h2>Create Account</h2>
                        <p>Get Started by entering your email address</p>
                        <input type="text" placeholder="Email" name="email">
                        <input type="submit" value="Get Started">
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
