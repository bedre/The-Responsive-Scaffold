# About

This is a public domain (giveaway!) template that is a bit more than a starting point, but a bit less than a complete website. 

Originally this was responsive redesign project ordered and paid for by [Skagen Hotel, Bodø, Norway](http://skagen-hotel.no), so kudos to them for releasing this to the public!

## Good to know

1.  Not developed with IE6 support in mind
2.  Uses SASS/Compass for CSS, SCSS file formats
3.  Uses box-sizing: border-box for everything, with a polyfill that works for IE6 & 7. See [blog post by Paul Irish](http://paulirish.com/2012/box-sizing-border-box-ftw/) and the [boxsizing.htc polyfill Github repo](https://github.com/Schepp/box-sizing-polyfill)
4.  Responsive breakpoints:
    *  Tiny: <600px (the default layout)
    *  Small: 600px
    *  Medium: 1024px
    *  Large: 1440px

## Make sure that…
1.  in _layout.scss, the URL to the HTC file must be relative to your HTML(!) document, not relative to your CSS. That's why we've used an absolute in this example.
2.  you're aware of [the bug jQuery has with box-sizing: border-box](http://bugs.jquery.com/ticket/11004).
3.  you edit the settings in settings.php