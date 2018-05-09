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

            <!-- Form embebed Mailchimp -->

            <!-- Begin MailChimp Signup Form -->
            <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
            <style type="text/css">
                #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
                /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
                We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
            </style>
            <div style="display: none;">
                <div id="mc_embed_signup">
                    <form action="https://templatemonster.us18.list-manage.com/subscribe/post?u=27a5ad1c84a4b99707ea60c6e&amp;id=f417eaccdf" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                        <div id="mc_embed_signup_scroll">
                            <h2>Subscribe to our mailing </h2>
                            <div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
                            <div class="mc-field-group">
                                <label for="mce-EMAIL">Email Address  <span class="asterisk">*</span></label>
                                <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
                            </div>
                            <div id="mce-responses" class="clear">
                                <div class="response" id="mce-error-response" style="display:none"></div>
                                <div class="response" id="mce-success-response" style="display:none"></div>
                            </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_27a5ad1c84a4b99707ea60c6e_f417eaccdf" tabindex="-1" value=""></div>
                            <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                        </div>
                    </form>
                </div>
            <!--End mc_embed_signup-->
            </div>
        </footer>


        <!-- scripts -->
        <script src="js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/jquery.animateNumber.min.js"></script>
        <script src="js/jquery.countdown.min.js"></script>
        <script src="js/jquery.lettering.js"></script>
        <script src="js/jquery.waypoints.js"></script>
        

        <?php 
            $archive = basename($_SERVER['PHP_SELF']);
            $page = str_replace(".php", "", $archive);
            if ($page == 'guests' || $page == 'index') {
                echo '<script src="js/jquery.colorbox-min.js"></script>';
            }elseif($page == 'conference'){
                echo '<script src="js/lightbox.js"></script>';
            }
        ?>

        <script src="js/main.js"></script>

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAdkhZlEgACitwS7LbAWANNOxSwP-7u_l0&callback=initMap" async defer></script>

        <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
        <script>
            window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
            ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
        </script>
        <script src="https://www.google-analytics.com/analytics.js" async defer></script>

        <!-- Mailchimp -->
       <script type="text/javascript" src="//downloads.mailchimp.com/js/signup-forms/popup/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script><script type="text/javascript">require(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us18.list-manage.com","uuid":"27a5ad1c84a4b99707ea60c6e","lid":"f417eaccdf"}) })</script>
    </body>
</html>
