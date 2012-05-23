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
            <div id="logo"><a href="/" title="<?php echo JText::_('TPL_RWDTPL_GOTO_FRONTPAGE', true); ?>"><img src="<?php echo $settings['template_folder'] ?>/images/<?php echo $settings['template_style'] ?>/logo.png" alt="<?php echo $this->params->get('company_name');?>"></a></div>

            <div id="extra">
                <div id="language">
                    <a id="english" href="#english">English</a>
                    <a id="norwegian" href="#norwegian" class="active">Norwegian</a>
                    <span><?php echo JText::_('Switch to') ?>: </span>
                </div>

                <div id="contact_short">
                    <a href="mailto:<?php echo $this->params->get('email');?>" class="email"><span class="email_icon"> </span><?php echo $this->params->get('email');?></a>
                    <span class="phone"><span class="phone_icon"> </span><?php echo $this->params->get('phone');?></span>
                </div>
            </div>

        
            <nav role="navigation">
                <jdoc:include type="modules" name="mainmenu" />
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
                <jdoc:include type="modules" name="footermenu" />
            </nav>

            <div itemscope itemtype="http://schema.org/Organization" id="contact">
                <a name="contact"></a>
                <h3><?php echo JText::_('TPL_RWDTPL_CONTACT_US'); ?></h3>
                <div id="company_contact">
                    <span itemprop="name"><?php echo $this->params->get('company_name');?></span>
                    <span itemprop="telephone"><span id="phone-icon" class="icon"> </span><?php echo $this->params->get('phone');?></span>
                    <a itemprop="url" href="<?php echo $this->params->get('facebook_url');?>" target="_blank"><span id="facebook-icon" class="icon"> </span><?php echo $this->params->get('facebook_url');?></a>
                </div>

                <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                    <span itemprop="description"><?php echo $this->params->get('company_name');?></span>
                    <span itemprop="streetAddress"><?php echo $this->params->get('street_address');?></span>
                    <span itemprop="postalCode"><?php echo $this->params->get('postal_code');?></span>
                    <span itemprop="addressLocality"><?php echo $this->params->get('locality');?></span>
                    <span itemprop="addressRegion"><?php echo $this->params->get('region');?></span>
                    <span itemprop="addressCountry"><?php echo $this->params->get('country');?></span>
                    <a itemprop="url" href="<?php echo $this->params->get('map_url');?>"><?php echo JText::_('TPL_RWDTPL_MAP'); ?></a>
                    <img id="map" src="<?php echo $settings['template_folder'] ?>/images/<?php echo $settings['template_style'] ?>/norway_map.png" alt="Map of Norway">
                </div>
            </div>

            <div id="copyright"><?php JText::sprintf('Copyright &copy; %s %s, All rights reserved.', date('Y'), $this->params->get('company_name')); ?></div>
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