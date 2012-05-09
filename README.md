# About

This is a public domain (giveaway!) template that is a bit more than a starting point, but a bit less than a complete website. 

Originally this was responsive redesign project ordered and paid for by [Skagen Hotel, Bodø, Norway](http://skagen-hotel.no), so kudos to them for releasing this to the public!

## Good to know / features

1.  Not developed with IE6 support in mind
2.  Uses SASS/Compass for CSS, SCSS file formats
3.  Uses [box-sizing: border-box](http://paulirish.com/2012/box-sizing-border-box-ftw/) for everything, with [a polyfill that works for IE6 & 7](https://github.com/Schepp/box-sizing-polyfill). 
4.  Responsive breakpoints:
    *  Mini: <320px (the default layout)
    *  Small: 320px 
    *  Medium: 600px
    *  Large: 1024px
    *  X-large: 1440px

5.  Small screen navigation (<1024px) comes in the shape of the [footer anchor navigation pattern](http://bradfrostweb.com/blog/web/responsive-nav-patterns/#footer-anchor).
6.  We snuck in some [microdata](http://schema.org) in the `<footer>`, yay :)
7.  The CSS pretty much assumes you will use exactly as many menu items as we have used in our example.
8.  Must be used with SASS 3.2 or above, so that you for instance can use [variables in media queries](http://thesassway.com/intermediate/responsive-web-design-in-sass-using-media-queries-in-sass-32).


## Setup

1.  The template uses the rgbapng Compass plugin to provide cross-browser support for rgba() in CSS. Installation instructions: https://github.com/aaronrussell/compass-rgbapng
2.  Check out _base.scss. It has a few variables you should be aware of/configure.
3.  Check out settings.php for some more configuration.
4.  In screen.css you need to edit the style specific CSS names (change example to your style name)

## FYI

1.  in _layout.scss, the URL to the HTC file must be relative to your HTML(!) document, not relative to your CSS. That's why we've used an absolute in this example. This file is the [box-sizing polyfill](https://github.com/Schepp/box-sizing-polyfill for IE.
2.  you're aware of [the bug jQuery has with box-sizing: border-box](http://bugs.jquery.com/ticket/11004).