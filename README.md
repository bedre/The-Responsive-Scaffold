# About

This is a public domain (giveaway!) template that is a bit more than a starting point, but a bit less than a complete website. 

Originally this was responsive redesign project ordered and paid for by [Skagen Hotel, Bodø, Norway](http://skagen-hotel.no), so kudos to them for releasing this to the public!

## Good to know / features

1.  Not developed with IE6 support in mind
2.  Uses Sass/Compass for CSS, with the SCSS file format
3.  Uses [box-sizing: border-box](http://paulirish.com/2012/box-sizing-border-box-ftw/) for everything, with [a polyfill that works for IE6 & 7](https://github.com/Schepp/box-sizing-polyfill). 
4.  Responsive breakpoints:
    *  Mini: <320px (the default layout)
    *  Small: 320px 
    *  Medium: 600px
    *  Large: 1024px
    *  X-large: 1440px
    *  Max width: 1620px

5.  Small screen navigation (<1024px) comes in the shape of the [footer anchor navigation pattern](http://bradfrostweb.com/blog/web/responsive-nav-patterns/#footer-anchor).
6.  We snuck in some [microdata](http://schema.org) in the `<footer>`, yay :)
7.  The CSS pretty much assumes you will use exactly as many menu items as we have used in our example.
8.  Must be used with SASS 3.2 or above, so that you for instance can use [variables in media queries](http://thesassway.com/intermediate/responsive-web-design-in-sass-using-media-queries-in-sass-32).
9.  [Flexslider](http://www.woothemes.com/flexslider/) from WooThemes is included in the package.


## Setup

1.  Run `sass --version` to verify that you're using Sass 3.2 or higher.
2.  Make sure you have the [rgbapng Compass plugin](https://github.com/aaronrussell/compass-rgbapng) installed. We use it to provide cross-browser support for rgba() in CSS, which we use for some transparent backgrounds.
3.  Check out _base.scss. It has a few variables you should be aware of/configure.
4.  Check out settings.php for some more configuration.
5.  In screen.css you need to edit the style specific CSS names (change example to your style name).

## FYI

1.  In _layout.scss, the URL to the HTC file must be relative to your HTML(!) document, not relative to your CSS. That's why we've used an absolute in this example. This file is the [box-sizing polyfill](https://github.com/Schepp/box-sizing-polyfill) for IE.
2.  Take note of [the bug jQuery has with box-sizing: border-box](http://bugs.jquery.com/ticket/11004). This bug [should be fixed](https://github.com/jquery/jquery/pull/734) in JQuery 1.8.