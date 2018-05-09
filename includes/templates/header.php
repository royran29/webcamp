<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>TPCAMP</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
        <link rel="apple-touch-icon" href="icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/fontawesome-all.min.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald|PT+Sans" rel="stylesheet">
        
        <?php 
            $archive = basename($_SERVER['PHP_SELF']);
            $page = str_replace(".php", "", $archive);
            if ($page == 'guests' || $page == 'index') {
                echo '<link rel="stylesheet" href="css/colorbox.css">';
            }elseif($page == 'conference'){
                echo '<link rel="stylesheet" href="css/lightbox.css">';
            }
        ?>
        <link rel="stylesheet" href="css/main.css">
        
    </head>
    <body class="<?php echo $page ?>">
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
        <!-- header -->
        <header class="site-header">
            <div class="hero">
                <div class="content-header">
                    <nav class="social-media">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </nav>
                    <div class="event-info">
                        <div class="clearfix">
                            <p class="date"><i class="fas fa-calendar-alt"></i>10 - 12 Dec</p>
                            <p class="city"><i class="fas fa-map-marker-alt"></i>San José, CR</p>
                        </div>
                        <h1 class="site-name">WEBCAMP</h1>
                        <p class="slogan">The best <span>web development</span> conference</p>
                    </div>
                </div>
            </div>
        </header>
        <!-- menu -->
        <div class="bar">
            <div class="container clearfix">
                <div class="logo">
                    <a href="index.php">
                        <img src="img/logo.svg" alt="Logo">
                    </a>
                </div>
                <div class="mobile-menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

                <nav class="main-navigation clearfix">
                    <a href="conference.php">Conference</a>
                    <a href="calendar.php">Calendar</a>
                    <a href="guests.php">Guests</a>
                    <a href="registry.php">Reservations</a>
                </nav>
            </div>
        </div>