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
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="<?php echo $lang ?>"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="<?php echo $lang ?>"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="<?php echo $lang ?>"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="<?php echo $lang ?>"> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <title>A responsive HTML5 template</title>
    <meta name="description" content="This is an example of a responsive HTML5 template, based on HTML5 boilerplate">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/screen.css">
    <script src="js/modernizr-2.5.3.min.js"></script>
</head>

<body>
    <header>
        Header
    </header>
    
    <div role="main">
        Main
    </div>
    
    <footer>
        Footer
    </footer>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.1.min.js"><\/script>')</script>

    <script>
        var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
        (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g,s)}(document,'script'));
    </script>
</body>
</html>