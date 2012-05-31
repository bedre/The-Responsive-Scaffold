# About

This is a public domain (giveaway!) template that is a bit more than a starting point, but a bit less than a complete website. 

Originally this was responsive redesign project ordered and paid for by [Skagen Hotel, Bodø, Norway](http://skagen-hotel.no), so kudos to them for releasing this to the public!

## Good to know / features

1.  Not developed with IE6 support in mind
2.  Uses Sass/Compass for CSS, with the SCSS file format
3.  Built thinking mobile first, hence the default layout assumes you're using a small screen.
4.  Uses [box-sizing: border-box](http://paulirish.com/2012/box-sizing-border-box-ftw/) for everything, with [a polyfill that works for IE6 & 7](https://github.com/Schepp/box-sizing-polyfill). 
5.  Default responsive breakpoints can be changed in [_breakpoints.scss](https://github.com/bedre/The-Responsive-Scaffold/blob/master/trunk/sass/_breakpoints.scss). Currently we're using these:
    *  0: <320px (the default layout)
    *  1: 320px 
    *  2: 440px
    *  3: 600px
    *  4: 720px
    *  5: 1024px
    *  6: 1440px
    *  7: 1656px

6.  Small screen navigation (<1024px) partially comes in the shape of the [footer anchor navigation pattern](http://bradfrostweb.com/blog/web/responsive-nav-patterns/#footer-anchor). By "partially" we mean that the important parts of the navigation stays at the top, while the less important parts will be accessible by the menu link.
7.  We snuck in some [microdata](http://schema.org) in the `<footer>`, yay :)
8.  The CSS pretty much assumes you will use exactly the same number of menu items as we have used in our example.
9.  Must be used with SASS 3.2 or above, so that you for instance can use [variables in media queries](http://thesassway.com/intermediate/responsive-web-design-in-sass-using-media-queries-in-sass-32).
10.  [Flexslider](http://www.woothemes.com/flexslider/) from WooThemes is included in the package.
11.  Uses [Adaptive Images](http://adaptive-images.com) for responsive imagery.
12.  See the logo img element plus _layout.scss for an idea on how we're using SVG with PNG fallbacks. It's not ideal, since I haven't read [The Article yet](http://www.alistapart.com/articles/using-svg-for-flexible-scalable-and-fun-backgrounds-part-ii/), but basically we load both the PNG and SVG, and then show SVG if it's supported. If not, PNG is shown and SVG is hidden. We decided that since this was the logo that we'd live with the extra HTTP request.


## Setup

1.  Run `sass --version` to verify that you're using Sass 3.2 or higher.
2.  Make sure you have the [rgbapng Compass plugin](https://github.com/aaronrussell/compass-rgbapng) installed. We use it to provide cross-browser support for rgba() in CSS, which we use for some transparent backgrounds.
3.  Check out _base.scss. It has a few variables you should be aware of/configure.
4.  Check out settings.php for some more configuration.
5.  In screen.css you need to edit the style specific CSS names (change example to your style name).
6.  In your site's root folder, make sure you add the .htaccess directive required by [Adaptive Images](http://adaptive-images.com/details.htm).
7.  In the Adaptive Images .htaccess, make sure you change "adaptive-images.php" to "templates/template-name/adaptive-images.php".
8.  Set your CSS breakpoints in [_breakpoints.scss](https://github.com/bedre/The-Responsive-Scaffold/blob/master/trunk/responsive_template/sass/_breakpoints.scss). Adjust screen.scss if you change the number of breakpoints too.
9.  Set your adaptive images scaling breakpoints in [adaptive-images.php, line 14](https://github.com/bedre/The-Responsive-Scaffold/blob/master/trunk/responsive_template/adaptive-images.php#14). These are just the points where images will scale according to screen width, so the breakpoints doesn't have to match the CSS breakpoints at all.

## FYI

1.  In _layout.scss, the URL to the HTC file must be relative to your HTML(!) document, not relative to your CSS. That's why we've used an absolute in this example. This file is the [box-sizing polyfill](https://github.com/Schepp/box-sizing-polyfill) for IE.
2.  Take note of [the bug jQuery has with box-sizing: border-box](http://bugs.jquery.com/ticket/11004). This bug [should be fixed](https://github.com/jquery/jquery/pull/734) in JQuery 1.8.