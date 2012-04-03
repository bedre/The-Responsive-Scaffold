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
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/screen.css">
    <script src="js/lib/modernizr-2.5.3.min.js"></script>
    <script>
        Modernizr.load({
            test: Modernizr.mediaqueries,
            nope: 'js/lib/respond.min.js'
        });
    </script>
</head>

<body>
    <header>
        <h1>Company name</h1>
        
        <div id="contact_short">
            <span class="phone">755 19 100</span>
            <a href="mailto:booking@skagen-hotel.no" class="email">booking@skagen-hotel.no</a>
        </div>

        <div id="language">
            <span>Switch to</span>
            <a href="#english"><img src="images/examples/placeholder.png" alt="English language"></a>
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

        <section id="slider">
            <article class="slide">            
                <h3>Highlight reel 1</h3>
                <img src="images/examples/placeholder.png" alt="Slide 1">
                <p class="description">An awesome product description for this product</p>
                <a href="#" class="readmore">Read more</a>
            </article>
            <article class="slide">
                <h3>Highlight reel 2</h3>
                <img src="images/examples/placeholder.png" alt="Slide 2">
                <p class="description">An awesome product description for this product</p>
                <a href="#" class="readmore">Read more</a>
            </article>
            <article class="slide">
                <h3>Highlight reel 3</h3>
                <img src="images/examples/placeholder.png" alt="Slide 3">
                <p class="description">An awesome product description for this product</p>
                <a href="#" class="readmore">Read more</a>
            </article>
            <article class="slide">
                <h3>Highlight reel 4</h3>
                <img src="images/examples/placeholder.png" alt="Slide 4">
                <p class="description">An awesome product description for this product</p>
                <a href="#" class="readmore">Read more</a>
            </article>
            <article class="slide">
                <h3>Highlight reel 5</h3>
                <img src="images/examples/placeholder.png" alt="Slide 5">
                <p class="description">An awesome product description for this product</p>
                <a href="#" class="readmore">Read more</a>
            </article>
        </section>
    </header>
    
    <section role="main" id="product_categories">
        <article class="product_category">
            <img src="images/examples/placeholder.png" alt="Product 1">
            <h3>Fantastic product 1</h3>
            <p class="description">An awesome product description for this product</p>
            <a href="#" class="readmore">Read more</a>
        </article>
        <article class="product_category">
            <img src="images/examples/placeholder.png" alt="Product 2">
            <h3>Fantastic product 2</h3>
            <p class="description">An awesome product description for this product</p>
            <a href="#" class="readmore">Read more</a>
        </article>
        <article class="product_category">
            <img src="images/examples/placeholder.png" alt="Product 3">
            <h3>Fantastic product 3</h3>
            <p class="description">An awesome product description for this product</p>
            <a href="#" class="readmore">Read more</a>
        </article>
        <article class="product_category">
            <img src="images/examples/placeholder.png" alt="Product 4">
            <h3>Fantastic product 4</h3>
            <p class="description">An awesome product description for this product</p>
            <a href="#" class="readmore">Read more</a>
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

        <div itemscope itemtype="http://schema.org/Organization">
            <span itemprop="name">Your Corporation Inc.</span>

            <h3>Contact us</h3>
            <span itemprop="telephone">+47 22 22 22 22</span>
            <span itemprop="url">http://facebook.com/yourcorp</span>
            <span itemprop="url">http://twitter.com/yourcorp</span>

            <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                <span itemprop="streetAddress">
                    Storgata 1,
                    Andre etasje
                </span>
                <span itemprop="addressLocality">Bodø</span>
                <span itemprop="addressRegion">Nordland</span>
                <span itemprop="postalCode">8001</span>
                <span itemprop="addressCountry">Norway</span>
                <a itemprop="url" href="#">Map</a>
            </div>
        </div>

        <div id="copyright">Copyright &copy; <?php echo date('Y') ?> some company, All rights reserved.</div>
    </footer>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.2.min.js"><\/script>')</script>

    <script>
        var _gaq=[['_setAccount','<?php echo $settings['analytics_acct'] ?>'],['_trackPageview']];
        (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g,s)}(document,'script'));
    </script>
</body>
</html>