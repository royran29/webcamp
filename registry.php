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

        <link rel="stylesheet" href="css/fontawesome-all.min.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald|PT+Sans" rel="stylesheet">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
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
                        <h1 class="site-name">TPCAMP</h1>
                        <p class="slogan">The best <span>web development</span> conference</p>
                    </div>
                </div>
            </div>
        </header>
        <!-- menu -->
        <div class="bar">
            <div class="container clearfix">
                <div class="logo"><img src="img/logo.svg" alt="Logo"></div>
                <div class="mobile-menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

                <nav class="main-navigation clearfix">
                    <a href="#">Conference</a>
                    <a href="#">Calendar</a>
                    <a href="#">Guests</a>
                    <a href="registro.html">Reservations</a>
                </nav>
            </div>
        </div>

        <!-- Registrer users -->
        <section class="section container">
            <h2>User Registration</h2>
            <form action="validate_registry.php" id="register" class="register" method="POST">
                <div id="user_data" class="register box clearfix">
                    <div class="field">
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="name" placeholder="Your Name">
                    </div>
                    <div class="field">
                        <label for="lastName">Last Name:</label>
                        <input type="text" name="lastName" id="lastName" placeholder="Your Last Name">
                    </div>
                    <div class="field">
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email" placeholder="Your Email">
                    </div>
                    <div id="error"></div>
                </div>

                <div id="packages" class="packages">
                    <h3>Choose the amount of tickets</h3>
                    <ul class="prices-list clearfix">
                        <li>
                            <div class="price-table">
                                <h3>One day (Friday)</h3>
                                <p class="number">$30</p>
                                <ul>
                                    <li>Free snacks</li>
                                    <li>All Conferences</li>
                                    <li>All workshops</li>
                                </ul>
                                <div class="order">
                                    <label for="pass_day">How many tickets</label>
                                    <input type="number" id="pass_day" min="0" size="3" name="tickets[]" placeholder="0">
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="price-table">
                                <h3>All days</h3>
                                <p class="number">$50</p>
                                <ul>
                                    <li>Free snacks</li>
                                    <li>All Conferences</li>
                                    <li>All workshops</li>
                                </ul>
                                <div class="order">
                                    <label for="full_pass">How many tickets</label>
                                    <input type="number" id="full_pass" min="0" size="3" name="tickets[]" placeholder="0">
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="price-table">
                                <h3>Two days (Friday and Saturday)</h3>
                                <p class="number">$45</p>
                                <ul>
                                    <li>Free snacks</li>
                                    <li>All Conferences</li>
                                    <li>All workshops</li>
                                </ul>
                                <div class="order">
                                    <label for="pass_two_days">How many tickets</label>
                                    <input type="number" id="pass_two_days" min="0" size="3" name="tickets[]" placeholder="0">
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div id="events" class="events clearfix">
                    <h3>Choose your workshops</h3>
                    <div class="box">
                        <div id="friday" class="day-content clearfix">
                            <h4>Friday</h4>
                            <div>
                                <p>Workshops:</p>
                                <label><input type="checkbox" name="register[]" id="workshop_01" value="workshop_01"><time>10:00</time> Planning Group Trip</label>
                                <label><input type="checkbox" name="register[]" id="workshop_02" value="workshop_02"><time>12:00</time> 20 Trending Travel Destinations for 2018</label>
                                <label><input type="checkbox" name="register[]" id="workshop_03" value="workshop_03"><time>14:00</time> How to Handle Flight Cancellations Like a Pro</label>
                                <label><input type="checkbox" name="register[]" id="workshop_04" value="workshop_04"><time>17:00</time> 9 unexpected travel experiences you can have in England’s Heartland</label>
                                <label><input type="checkbox" name="register[]" id="workshop_05" value="workshop_05"><time>19:00</time> WordPress</label>
                            </div>
                            <div>
                                <p>Conferences:</p>
                                <label><input type="checkbox" name="register[]" id="conf_01" value="conf_01"><time>10:00</time> How to be a Freelancer</label>
                                <label><input type="checkbox" name="register[]" id="conf_02" value="conf_02"><time>17:00</time> Technology for traveling</label>
                                <label><input type="checkbox" name="register[]" id="conf_03" value="conf_03"><time>19:00</time> Inexpensive Family Vacations That Don't Feel Cheap</label>
                            </div>
                            <div>
                                <p>Seminars:</p>
                                <label><input type="checkbox" name="register[]" id="sem_01" value="sem_01"><time>10:00</time> 17 easy steps for planning your next trip</label>
                            </div>
                        </div> <!--#friday-->
                        <div id="saturday" class="day-content clearfix">
                            <h4>Saturday</h4>
                            <div>
                                <p>Workshops:</p>
                                <label><input type="checkbox" name="register[]" id="workshop_06" value="workshop_06"><time>10:00</time> 5 Bucket-List Trips for Families</label>
                                <label><input type="checkbox" name="register[]" id="workshop_07" value="workshop_07"><time>12:00</time> Disney World vs. Disneyland: Which Park Is Right for You?</label>
                                <label><input type="checkbox" name="register[]" id="workshop_08" value="workshop_08"><time>14:00</time> Are You Ready to Take Your First Kid-Free Vacation?</label>
                                <label><input type="checkbox" name="register[]" id="workshop_09" value="workshop_09"><time>17:00</time> The 10 Best Hotel Chains For Families in 2016</label>
                                <label><input type="checkbox" name="register[]" id="workshop_10" value="workshop_10"><time>19:00</time> Start Saving Money</label>
                                <label><input type="checkbox" name="register[]" id="workshop_11" value="workshop_11"><time>21:00</time> 10 Best All-Inclusive Travel Resorts</label>
                            </div>
                            <div>
                                <p>Conferences:</p>
                                <label><input type="checkbox" name="register[]" id="conf_04" value="conf_04"><time>10:00</time> Why We Loved Our Royal Caribbean Cruise</label>
                                <label><input type="checkbox" name="register[]" id="conf_05" value="conf_05"><time>17:00</time> Why We Loved Our Disney Cruise</label>
                                <label><input type="checkbox" name="register[]" id="conf_06" value="conf_06"><time>19:00</time> Flying with a Baby on Board</label>
                            </div>
                            <div>
                                <p>Seminars:</p>
                                <label><input type="checkbox" name="register[]" id="sem_02" value="sem_02"><time>10:00</time> What to Look for in a Family Volunteer Vacation</label>
                                <label><input type="checkbox" name="register[]" id="sem_03" value="sem_03"><time>17:00</time>Make the Most of Your Disney Vacation</label>
                            </div>
                        </div> <!--#saturday-->
                        <div id="sunday" class="day-content clearfix">
                            <h4>Sunday</h4>
                            <div>
                                <p>Workshops:</p>
                                <label><input type="checkbox" name="register[]" id="workshop_12" value="workshop_12"><time>10:00</time> 6 Family-Friendly Mexican Vacations</label>
                                <label><input type="checkbox" name="register[]" id="workshop_13" value="workshop_13"><time>12:00</time> 9 Ways to Get Your Kids Excited for a Big Trip</label>
                                <label><input type="checkbox" name="register[]" id="workshop_14" value="workshop_14"><time>14:00</time> 9 Great Romantic Getaways</label>
                                <label><input type="checkbox" name="register[]" id="workshop_15" value="workshop_15"><time>17:00</time> Family Heritage Vacation: 5 Latina Moms Share Their Experiences</label>
                                <label><input type="checkbox" name="register[]" id="workshop_16" value="workshop_16"><time>19:00</time> Winter Getaway: Cancun</label>
                            </div>
                            <div>
                                <p>Conferences:</p>
                                <label><input type="checkbox" name="register[]" id="conf_07" value="conf_07"><time>10:00</time> 8 Tips for a Fun Family Cruise</label>
                                <label><input type="checkbox" name="register[]" id="conf_08" value="conf_08"><time>17:00</time> 5 Under-the-Radar Spring Break Destinations for Families</label>
                                <label><input type="checkbox" name="register[]" id="conf_09" value="conf_09"><time>19:00</time> 6 Best U.S. Lake Beaches</label>
                            </div>
                            <div>
                                <p>Seminars:</p>
                                <label><input type="checkbox" name="register[]" id="sem_04" value="sem_04"><time>14:00</time> 10 Questions to Ask Before Booking Your Babymoon</label>
                                <label><input type="checkbox" name="register[]" id="sem_05" value="sem_05"><time>17:00</time> Travel Tips: Good-Bye, Hotels!</label>
                            </div>
                        </div> <!--#sunday-->
                    </div><!--.box-->
                </div> <!--#events-->

                 <div class="summary" id="summary">
                     <h3>Pay and extras</h3>
                     <div class="box clearfix">
                         <div class="extras">
                             <div class="order">
                                 <label for="event_shirt">Event Shirt $10 <small>(7% discount)</small></label>
                                 <input type="number" id="event_shirt" min="0" size="3" name="shirt" placeholder="0">
                             </div>
                             <div class="order">
                                <label for="stickers">Pack of 10 stickers $2 <small></small></label>
                                <input type="number" id="stickers" name="stickers" min="0" size="3" placeholder="0">
                            </div>
                            <div class="order"><label for="gift">Choose a gift</label> <br>
                                <select id="gift" name="gift" required>
                                    <option value="">- Choose a gift -</option>
                                    <option value="2">Stickers</option>
                                    <option value="1">Bracelet</option>
                                    <option value="3">Pencils</option>
                                </select>
                            </div>
                            <input class="button" type="button" value="Calculate" id="calculate">
                         </div>
                         
                        <div class="total">
                            <p>Summary</p>
                            <div id="product_list"></div>
                            <p>total</p>
                            <div id="total_sum"></div>
                            <input type="hidden" name="total" id="total" value="">
                            <input id="btnRegister" type="submit" name="submit" value="Pay" class="button">
                        </div>
                    </div>
                 </div>

            </form>
        </section>

        <!-- footer -->
        <footer class="site-footer">
            <div class="container clearfix">
                <div class="info-footer">
                    <h3>About <span>tpcamp</span></h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit quas sequi officiis voluptate ullam. Excepturi aliquid itaque ut libero nam consectetur ipsum minus, consequuntur doloribus, quod eos quia dolores aperiam.</p>
                </div>
                <div class="last-tweets">
                    <h3>Lasts <span>tweets</span></h3>
                    <ul>
                        <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias expedita placeat sequi aut dolorem </li>
                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, facilis ipsa dolor rerum neque doloremque </li>
                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor saepe similique hic, cumque cupiditate est?</li>
                    </ul>
                </div>
                <div class="menu">
                    <h3>Social <span>media</span></h3>
                    <nav class="social-media">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </nav>
                </div>
            </div>
            <p class="copyright">
                All rights reserved TPCAMP 2018.
            </p>
        </footer>


        <!-- scripts -->
        <script src="js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
        <script>
            window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
            ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
        </script>
        <script src="https://www.google-analytics.com/analytics.js" async defer></script>
    </body>
</html>
