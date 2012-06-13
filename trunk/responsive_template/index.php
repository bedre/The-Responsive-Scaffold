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
<!--[if IE 7]>    <html class="no-js lt-ie10 lt-ie9 lt-ie8" <?= $settings['html_attribs'] ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie10 lt-ie9" <?= $settings['html_attribs'] ?>> <![endif]-->
<!--[if IE 9]>    <html class="no-js lt-ie10" <?= $settings['html_attribs'] ?>> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="no-js" <?= $settings['html_attribs'] ?>> <!--<![endif]-->

<head>
    <script>document.cookie='resolution='+Math.max(screen.width,screen.height)+("devicePixelRatio" in window ? ","+devicePixelRatio : ",1")+'; path=/';</script>
    <link rel="dns-prefetch" href="//ajax.googleapis.com">
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link href="http://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?= $settings['template_folder'] ?>/css/screen.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?= $settings['template_folder'] ?>/js/libs/jquery-1.7.2.min.js"><\/script>')</script>
    <jdoc:include type="head" />
    <script src="<?= $settings['template_folder'] ?>/js/lib/modernizr-2.5.3.min.js"></script>
    <script>
        Modernizr.load({
            test: Modernizr.mediaqueries,
            nope: '<?= $settings['template_folder'] ?>/js/lib/respond.min.js'
        });
    </script>

    <script src="<?= $settings['template_folder'] ?>/js/lib/jquery.flexslider-min.js"></script>
    <script src="<?= $settings['template_folder'] ?>/js/flexslider_mask.js"></script>

    <!--[if (gte IE 6)&(lte IE 8)]>
        <script type="text/javascript" src="<?= $settings['template_folder'] ?>/js/lib/selectivizr-min-1.0.2.js"></script>
    <![endif]-->

    <script type="text/javascript" charset="utf-8">
        $(window).load(function() {

            // Slider init
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

            // Show/hide submenu
            var subnav  = $('#subpage').find('nav');

            if (subnav.length) {
                var submenu = subnav.children('ul');
                var level_1 = submenu.children('li.active').children('a').html();
                var level_2 = submenu.find('li.current').children('a').html();
                
                var button = $('<div id="menutoggle"><div class="button"><div class="arrow"><span class="text"><span class="level_1">'+level_1+'</span><span class="level_2">'+level_2+'</span></span></div></div></div>');
                button.children('.button').on(Modernizr.touch ? 'touchend' : 'click', function(){
                    this.toggleClass('active'),
                    subnav.slideToggle(200)
                });
                $('#subpage').children('.wrap').prepend(button);

            }

            if (typeof fitImages == 'function') {
                fitImages();
            }

            fouc();

        });

        // Adjust slider when window resizes
        $(window).resize(function() {
            var body = $('body');
            var win  = $(this);

            if (win.width() > win.height()) {
                body.addClass('landscape');
                body.removeClass('portrait');
                maskSliderImages();
            } else {
                body.addClass('portrait');
                body.removeClass('landscape');
                unMaskSliderImages();
            }

            if (typeof fitImages == 'function') {
                fitImages();
            }
        });


        // Flash of unstyled content prevention
        function fouc() {
            var fouc_containers = new Array($('.fit-images'), $('.flex-control-nav'));

            fouc_containers.each(function(element){
                element.each(function(index, el){
                    $(el).css({'height': 'auto', 'overflow': 'auto'}).fadeTo(250, 1);
                });
            });
        }
    </script>

</head>

<body> 
    <header>
        <div class="wrap">
            <div id="logo">
                <a href="/" title="<?= JText::_('TPL_RWDTPL_GOTO_FRONTPAGE', true); ?>">
                    <img class="png-over-svg" src="<?= $settings['template_folder'] ?>/images/<?= $settings['template_style'] ?>/logo.png" alt="<?= $this->params->get('company_name');?>">
                    <img class="svg-over-png" src="<?= $settings['template_folder'] ?>/images/<?= $settings['template_style'] ?>/logo.svg" alt="<?= $this->params->get('company_name');?>">
                </a>
            </div>

            <div id="extra">
                <div id="language">
                    <jdoc:include type="modules" name="language" />
                    <span><?= JText::_('Switch to') ?>: </span>
                </div>

                <div id="contact_short">
                    <a href="mailto:<?= $this->params->get('email');?>" class="email"><span class="email_icon"> </span><?= $this->params->get('email');?></a>
                    <span class="phone"><span class="phone_icon"> </span><?= $this->params->get('phone');?></span>
                </div>
            </div>
        
            <nav>
                <jdoc:include type="modules" name="mainmenu" />
            </nav>
        </div>
    </header>

    <?php if ($settings['is_frontpage']): ?>
        <div class="slider-wrapper">
            <div class="slider">
                <jdoc:include type="modules" name="slideshow_frontpage" />
            </div>
        </div>

        <jdoc:include type="message" />
        <jdoc:include type="component" />
    <?php else: ?>
        <div id="subpage" role="main">
            <div class="wrap">
                <nav>
                    <jdoc:include type="modules" name="submenu" />
                </nav>
                <div id="contents">
                    <jdoc:include type="message" />
                    <jdoc:include type="component" />
                </div>
                <div id="sidebar">
                    skjema kommer her
                </div>
            </div>
        </div>
    <?php endif; ?>
    <?php /* MAIN CONTENTS END */ ?>
    
    <footer>
        <div class="wrap">
            <a name="footermenu"></a>
            <nav>
                <jdoc:include type="modules" name="footermenu" />
            </nav>

            <div itemscope itemtype="http://schema.org/Organization" id="contact">
                <a name="contact"></a>
                <h3><?= JText::_('TPL_RWDTPL_CONTACT_US'); ?></h3>
                <div id="company_contact">
                    <span itemprop="name"><?= $this->params->get('company_name');?></span>
                    <span itemprop="telephone"><span id="phone-icon" class="icon"> </span><?= $this->params->get('phone');?></span>
                    <a itemprop="url" href="<?= $this->params->get('facebook_url');?>" target="_blank"><span id="facebook-icon" class="icon"> </span><?= str_replace('http://', '', $this->params->get('facebook_url'));?></a>
                </div>

                <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                    <span itemprop="description"><?= $this->params->get('company_name');?></span>
                    <span itemprop="streetAddress"><?= $this->params->get('street_address');?></span>
                    <span itemprop="postalCode"><?= $this->params->get('postal_code');?></span>
                    <span itemprop="addressLocality"><?= $this->params->get('locality');?></span>
                    <span itemprop="addressRegion"><?= $this->params->get('region');?></span>
                    <span itemprop="addressCountry"><?= $this->params->get('country');?></span>
                    <a itemprop="url" href="<?= $this->params->get('map_url');?>"><?= JText::_('TPL_RWDTPL_MAP'); ?></a>
                    <span id="map">Map</span>
                    <!-- <img id="map" src="<?= $settings['template_folder'] ?>/images/<?= $settings['template_style'] ?>/norway_map.png" alt="Map of Norway"> -->
                </div>
            </div>

            <div id="copyright"><?php JText::sprintf('Copyright &copy; %s %s, All rights reserved.', date('Y'), $this->params->get('company_name')); ?></div>
        </div>
    </footer>

    <script>
        var _gaq=[['_setAccount','<?= $settings['analytics_acct'] ?>'],['_trackPageview']];
        (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g,s)}(document,'script'));
    </script>
</body>
</html>