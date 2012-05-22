<?php 
/** 
 * The Responsive Scaffold
 * 
 * Based on HTML5 boilerplate, http://h5bp.com
 *
 * Paid for and distributed freely by the great people of Skagen Hotel, Bodø: http://skagen-hotel.no
 * Built by Torkil Sinkaberg Johnsen, BEDRE reklame, http://bedre.no
 *
 * External components have their respective licences.
 * Other than that, the licence is to be considered public domain
 */

defined( '_JEXEC' ) or die( 'Restricted access' );
require_once 'settings.php';
?>
<!doctype html>
<!--[if IE 7]>    <html class="no-js lt-ie10 lt-ie9 lt-ie8" <?php echo $settings['html_attribs'] ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie10 lt-ie9" <?php echo $settings['html_attribs'] ?>> <![endif]-->
<!--[if IE 9]>    <html class="no-js lt-ie10" <?php echo $settings['html_attribs'] ?>> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="no-js" <?php echo $settings['html_attribs'] ?>> <!--<![endif]-->

<head>
    <jdoc:include type="head" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo $settings['template_folder'] ?>/css/screen.css">
    <script src="<?php echo $settings['template_folder'] ?>/js/lib/modernizr-2.5.3.min.js"></script>
    <script>
        Modernizr.load({
            test: Modernizr.mediaqueries,
            nope: '<?php echo $settings['template_folder'] ?>/js/lib/respond.min.js'
        });
    </script>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo $settings['template_folder'] ?>/js/libs/jquery-1.7.2.min.js"><\/script>')</script>
    <script src="<?php echo $settings['template_folder'] ?>/js/lib/jquery.flexslider-min.js"></script>
    <script src="<?php echo $settings['template_folder'] ?>/js/flexslider_mask.js"></script>

    <!--[if (gte IE 6)&(lte IE 8)]>
        <script type="text/javascript" src="<?php echo $settings['template_folder'] ?>/js/lib/selectivizr-min-1.0.2.js"></script>
    <![endif]-->

    <script type="text/javascript" charset="utf-8">
        $(window).load(function() {

            $('.slider').flexslider({
                animation: 'slide',
                animationDuration: 400,
                controlsContainer: '.slider-wrapper',
                directionNav: false,
                start: function(slider) {
                    $(slider.slides).find('.infobox').hide();
                    $(slider.slides[slider.currentSlide]).find('.infobox').delay(500).fadeIn(600);
                },
                before: function(slider) {
                    $(slider.slides).find('.infobox').hide();
                },
                after: function(slider) {
                    $(slider.slides[slider.currentSlide]).find('.infobox').delay(200).fadeIn(600);
                }
            });

            if ($(window).height() < $(window).width()) {
                $('body').addClass('landscape');
                maskSliderImages();
            } else {
                $('body').addClass('portrait');
                unMaskSliderImages();
            }

        });

        $(window).resize(function() {
            var body = $('body');

            if ($(window).width() > $(window).height()) {
                body.addClass('landscape');
                body.removeClass('portrait');
                maskSliderImages();
            } else {
                body.addClass('portrait');
                body.removeClass('landscape');
                unMaskSliderImages();
            }
        });
    </script>

</head>

<body> 
    <header>
        <div class="wrap">
            <div id="logo"><img src="<?php echo $settings['template_folder'] ?>/images/<?php echo $settings['template_style'] ?>/logo.png" alt="Company Name"></div>

            <div id="extra">
                <div id="language">
                    <a id="english" href="#english">English</a>
                    <a id="norwegian" href="#norwegian" class="active">Norwegian</a>
                    <span><?php echo JText::_('Switch to') ?>: </span>
                </div>

                <div id="contact_short">
                    <a href="mailto:booking@skagen-hotel.no" class="email"><span class="email_icon"> </span>booking@skagen-hotel.no</a>
                    <span class="phone"><span class="phone_icon"> </span>755 19 100</span>
                </div>
            </div>

        
            <nav role="navigation">
                <jdoc:include type="modules" name="mainmenu" />

                <ul>
                    <li id="menu_footer_link">
                        <a href="#footermenu">Menu</a>
                    </li>
                    <li class="normal">
                        <a href="inner_page.php">Products</a>
                    </li>
                    <li class="normal">
                        <a href="inner_page.php">Services</a>
                    </li>
                    <li class="normal">
                        <a href="inner_page.php">About us</a>
                    </li>
                    <li class="highlighted popout">
                        <a href="inner_page.php">Contact</a>
                    </li>
                    <li class="call_to_action popout">
                        <a href="inner_page.php">Buy now</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="slider-wrapper">
        <div class="slider">
            <ul class="slides">
                <li> 
                    <a href="#">
                        <div class="imagemask">
                            <img src="<?php echo $settings['template_folder'] ?>/images/<?php echo $settings['template_style'] ?>/slideshow_image.png" alt="Slide 1">
                        </div>
                        <div class="wrap">
                            <div class="infobox">
                                <h3>Highlight reel 1</h3>
                                <p class="description">An awesome product description for this extremely well made and utterly superb product</p>
                                <span class="readon">Read more</span>
                            </div>
                        </div>
                    </a>
                </li>
                <li> 
                    <a href="#">
                        <div class="imagemask">
                            <img src="<?php echo $settings['template_folder'] ?>/images/<?php echo $settings['template_style'] ?>/slideshow_image.png" alt="Slide 2">
                        </div>
                        <div class="wrap">
                            <div class="infobox">
                                <h3>Highlight reel 2</h3>
                                <p class="description">An awesome product description for this superb product</p>
                                <span class="readon">Read more</span>
                            </div>
                        </div>
                    </a>
                </li>
                <li> 
                    <a href="#">
                        <div class="imagemask">
                            <img src="<?php echo $settings['template_folder'] ?>/images/<?php echo $settings['template_style'] ?>/slideshow_image.png" alt="Slide 3">
                        </div>
                        <div class="wrap">
                            <div class="infobox">
                                <h3>Highlight reel 3</h3>
                                <p class="description">An awesome product description for this superb product</p>
                                <span class="readon">Read more</span>
                            </div>
                        </div>
                    </a>
                </li>
                <li> 
                    <a href="#">
                        <div class="imagemask">
                            <img src="<?php echo $settings['template_folder'] ?>/images/<?php echo $settings['template_style'] ?>/slideshow_image.png" alt="Slide 4">
                        </div>
                        <div class="wrap">
                            <div class="infobox">
                                <h3>Highlight reel 4</h3>
                                <p class="description">An awesome product description for this superb product</p>
                                <span class="readon">Read more</span>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    
    <section role="main" id="product_categories">
        <div class="wrap">        
            <article class="product_category">
                <a href="#">
                    <span class="imageholder">
                        <img src="<?php echo $settings['template_folder'] ?>/images/<?php echo $settings['template_style'] ?>/product_image.png" alt="Product 1">
                        <h3>Fantastic product 1</h3>
                    </span>
                    <p class="description">An awesome product description for this product</p>
                </a>
            </article>
            <article class="product_category">
                <a href="#">
                    <span class="imageholder">
                        <img src="<?php echo $settings['template_folder'] ?>/images/<?php echo $settings['template_style'] ?>/product_image.png" alt="Product 2">
                        <h3>Fantastic product 2</h3>
                    </span>
                    <p class="description">An awesome product description for this product</p>
                </a>
            </article>
            <article class="product_category">
                <a href="#">
                    <span class="imageholder">
                        <img src="<?php echo $settings['template_folder'] ?>/images/<?php echo $settings['template_style'] ?>/product_image.png" alt="Product 3">
                        <h3>Fantastic product 3</h3>
                    </span>
                    <p class="description">An awesome product description for this product</p>
                </a>
            </article>
            <article class="product_category">
                <a href="#">
                    <span class="imageholder">
                        <img src="<?php echo $settings['template_folder'] ?>/images/<?php echo $settings['template_style'] ?>/product_image.png" alt="Product 4">
                        <h3>Fantastic product 4</h3>
                    </span>
                    <p class="description">An awesome product description for this product</p>
                </a>
            </article>
        </div>
    </section>
    
    <footer>
        <div class="wrap">
            <a name="footermenu"></a>
            <nav>
                <ul>
                    <li>
                        <h3><a href="#">Products</a></h3>
                        <ul>
                            <li><a href="#">Product range 1</a></li>
                            <li><a href="#">Product range 2</a></li>
                            <li><a href="#">Product range 3</a></li>
                            <li><a href="#">Product range 4</a></li>
                            <li><a href="#">Product range 5</a></li>
                        </ul>
                    </li>
                    <li>
                        <h3><a href="#">Services</a></h3>
                        <ul>
                            <li><a href="#">Services 1</a></li>
                            <li><a href="#">Services 2</a></li>
                            <li><a href="#">Services 3</a></li>
                            <li><a href="#">Services 4</a></li>
                            <li><a href="#">Services 5</a></li>
                        </ul>
                    </li>
                    <li>
                        <h3><a href="#">About us</a></h3>
                        <ul>
                            <li><a href="#">Our philosophy</a></li>
                            <li><a href="#">Meet the staff</a></li>
                            <li><a href="#">Contact support</a></li>
                            <li><a href="#">History</a></li>
                            <li><a href="#">Blog</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>

            <div itemscope itemtype="http://schema.org/Organization" id="contact">
                <a name="contact"></a>
                <h3>Contact us</h3>
                <div id="company_contact">
                    <span itemprop="name">Skagen Hotel</span>
                    <span itemprop="telephone"><span id="phone-icon" class="icon"> </span>+47 755 19 100</span>
                    <a itemprop="url" href="http://facebook.com/skagenhotel" target="_blank"><span id="facebook-icon" class="icon"> </span>http://facebook.com/skagenhotel</a>
                </div>

                <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                    <span itemprop="description">Skagen Hotel</span>
                    <span itemprop="streetAddress">Nyholmsgata 11</span>
                    <span itemprop="postalCode">8005</span>
                    <span itemprop="addressLocality">Bodø</span>
                    <span itemprop="addressRegion">Nordland</span>
                    <span itemprop="addressCountry">Norway</span>
                    <a itemprop="url" href="#">Kart</a>
                    <img id="map" src="<?php echo $settings['template_folder'] ?>/images/<?php echo $settings['template_style'] ?>/norway_map.png" alt="Map of Norway">
                </div>
            </div>

            <div id="copyright">Copyright &copy; <?php echo date('Y') ?> Skagen Hotel, All rights reserved.</div>
        </div>
    </footer>

    <script>
        var _gaq=[['_setAccount','<?php echo $settings['analytics_acct'] ?>'],['_trackPageview']];
        (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g,s)}(document,'script'));
    </script>
</body>
</html>