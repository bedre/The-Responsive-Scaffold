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

require_once 'settings.php';
?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="<?php echo $settings['lang'] ?>"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="<?php echo $settings['lang'] ?>"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="<?php echo $settings['lang'] ?>"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="<?php echo $settings['lang'] ?>"> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <title>A responsive HTML5 template</title>
    <meta name="description" content="This is an example of a responsive HTML5 template, based on HTML5 boilerplate">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo $settings['template_folder'] ?>css/screen.css">
    <script src="<?php echo $settings['template_folder'] ?>js/lib/modernizr-2.5.3.min.js"></script>
    <script>
        Modernizr.load({
            test: Modernizr.mediaqueries,
            nope: '<?php echo $settings['template_folder'] ?>js/lib/respond.min.js'
        });
    </script>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo $settings['template_folder'] ?>js/libs/jquery-1.7.2.min.js"><\/script>')</script>

    <!--[if (gte IE 6)&(lte IE 8)]>
        <script type="text/javascript" src="<?php echo $settings['template_folder'] ?>js/lib/selectivizr-min-1.0.2.js"></script>
    <![endif]-->
</head>

<body>
    <header>
        <div id="logo"><img src="<?php echo $settings['template_folder'] ?>images/<?php echo $settings['template_style'] ?>/logo.png" alt="Company Name"></div>

        <div id="extra">
            <div id="language">
                <a id="english" href="#english" class="active">English</a>
                <a id="norwegian" href="#norwegian">Norsk</a>
                <span><?php echo JText::_('Switch to') ?>: </span>
            </div>

            <div id="contact_short">
                <a href="mailto:booking@skagen-hotel.no" class="email"><span class="email_icon"> </span>order@company-name.com</a>
                <span class="phone"><span class="phone_icon"> </span>755 19 100</span>
            </div>
        </div>
        
        <nav role="navigation">
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
                <li class="highlighted">
                    <a href="inner_page.php">Contact</a>
                </li>
                <li class="call_to_action">
                    <a href="inner_page.php">Buy now</a>
                </li>
            </ul>
        </nav>

    </header>

    <section id="slider">
        <article class="slide"> 
            <a href="#">           
                <img src="<?php echo $settings['template_folder'] ?>images/<?php echo $settings['template_style'] ?>/slideshow_image.png" alt="Slide 1">
                <h3>Highlight reel 1</h3>
                <p class="description">An awesome product description for this superb product</p>
                <span class="readon">Read more</span>
            </a>
        </article>
        <article class="slide"> 
            <a href="#">           
                <img src="<?php echo $settings['template_folder'] ?>images/<?php echo $settings['template_style'] ?>/slideshow_image.png" alt="Slide 2">
                <h3>Highlight reel 2</h3>
                <p class="description">An awesome product description for this superb product</p>
                <span class="readon">Read more</span>
            </a>
        </article>
        <article class="slide"> 
            <a href="#">           
                <img src="<?php echo $settings['template_folder'] ?>images/<?php echo $settings['template_style'] ?>/slideshow_image.png" alt="Slide 3">
                <h3>Highlight reel 3</h3>
                <p class="description">An awesome product description for this superb product</p>
                <span class="readon">Read more</span>
            </a>
        </article>
        <article class="slide"> 
            <a href="#">           
                <img src="<?php echo $settings['template_folder'] ?>images/<?php echo $settings['template_style'] ?>/slideshow_image.png" alt="Slide 4">
                <h3>Highlight reel 4</h3>
                <p class="description">An awesome product description for this superb product</p>
                <span class="readon">Read more</span>
            </a>
        </article>
    </section>
    
    <section role="main" id="product_categories">
        <article class="product_category">
            <a href="#">
                <span class="imageholder">
                    <img src="<?php echo $settings['template_folder'] ?>images/<?php echo $settings['template_style'] ?>/product_image.png" alt="Product 1">
                    <h3>Fantastic product 1</h3>
                </span>
                <p class="description">An awesome product description for this product</p>
            </a>
        </article>
        <article class="product_category">
            <a href="#">
                <span class="imageholder">
                    <img src="<?php echo $settings['template_folder'] ?>images/<?php echo $settings['template_style'] ?>/product_image.png" alt="Product 2">
                    <h3>Fantastic product 2</h3>
                </span>
                <p class="description">An awesome product description for this product</p>
            </a>
        </article>
        <article class="product_category">
            <a href="#">
                <span class="imageholder">
                    <img src="<?php echo $settings['template_folder'] ?>images/<?php echo $settings['template_style'] ?>/product_image.png" alt="Product 3">
                    <h3>Fantastic product 3</h3>
                </span>
                <p class="description">An awesome product description for this product</p>
            </a>
        </article>
        <article class="product_category">
            <a href="#">
                <span class="imageholder">
                    <img src="<?php echo $settings['template_folder'] ?>images/<?php echo $settings['template_style'] ?>/product_image.png" alt="Product 4">
                    <h3>Fantastic product 4</h3>
                </span>
                <p class="description">An awesome product description for this product</p>
            </a>
        </article>
    </section>
    
    <footer>
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
                <span itemprop="name">Your Corporation Inc.</span>
                <span itemprop="telephone"><span id="phone-icon" class="icon"> </span>+47 22 22 22 22</span>
                <a itemprop="url" href="http://facebook.com/yourcorp" target="_blank"><span id="facebook-icon" class="icon"> </span>http://facebook.com/yourcorp</a>
            </div>

            <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                <span itemprop="description">Your Corporation Inc.</span>
                <span itemprop="streetAddress">Storgata 1</span>
                <span itemprop="postalCode">8001</span>
                <span itemprop="addressLocality">Bodø</span>
                <span itemprop="addressRegion">Nordland</span>
                <span itemprop="addressCountry">Norway</span>
                <a itemprop="url" href="#">Directions</a>
                <img id="map" src="<?php echo $settings['template_folder'] ?>images/<?php echo $settings['template_style'] ?>/norway_map.png" alt="Map of Norway">
            </div>
        </div>

        <div id="copyright">Copyright &copy; <?php echo date('Y') ?> some company, All rights reserved.</div>
    </footer>

    <script>
        var _gaq=[['_setAccount','<?php echo $settings['analytics_acct'] ?>'],['_trackPageview']];
        (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g,s)}(document,'script'));
    </script>
</body>
</html>