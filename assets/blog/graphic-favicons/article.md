Of favicons and Apple Touch icons
Favicons: tiny graphics with big complexities
Tiny graphics that represent a site used to run at 16&times;16 pixels. These days it’s more capable — and more complicated
2016-07-08
Ben Gremillion
Tag1, tag2

It’s a popular request: “how do you change favicons in the Grawlix CMS?” TL;DR — look in `/assets/system/favicons` of version 1.1. But there’s more to the story than a simple graphic.

Websites have used favicons to represent their site in location bars and bookmarks for more than a decade. But they’re *tiny.* Traditionally we’ve been stuck with 16&times;16 .ico files. Some browsers also accepted .gif files, still at 16 pixels square.

In 2008 Apple made it possible to “bookmark” websites as icons on iPhone and iPad home screens, but a measley 16px square wasn’t enough for high-res iDevice screens. Instead they invented something new. Something high-res. Something big.

Technically called a webclip icon, not a favicon, these jumbo graphics give artists a lot more room to work with — by some accounts up to 192 pixels square. Trouble is, not every screen — Apple or otherwise — runs at the same size and resolution. [Things get more complicated on Android devices](https://developer.chrome.com/multidevice/android/installtohomescreen#icon), some of which support the Apple spec … but others don’t. Still, the concept is the same: a large icon represents a site. But how big?

## A matter of resolution

To make icons look as sharp as possible on every screen, Apple told developers, “you need more than one icon.” How many? At the time of this writing, at least seven variations exist. The most common we know of are 57, 72, 114, 144, and 180. [Apple lists a slightly different set](https://developer.apple.com/library/safari/documentation/UserExperience/Conceptual/MobileHIG/IconMatrix.html#//apple_ref/doc/uid/TP40006556-CH27) than what we found: 76, 120, 152, 167, 180. 

Holy fragmentation, Batman. We wish they had adopted SVGs. Luckily they did the next best thing. Touch/webclip icons need to be 24-bit PNG files, one of the sharpest image formats on the web today. You can use many image editing apps to make .ico files, or use a service like [Favicon.cc](http://www.favicon.cc).

## Putting it into practice

Version 1.1 of the Grawlix CMS comes with many different sizes. To be fair, you probably don’t need them all. We included a wide gamut to cover every use case, though over the past year we’ve come to believe that you only need two touch sizes and the ol’ 16&times;16 icon.

Look in `/assets/system/favicons` for the graphics. Delete or replace them as you see fit.

Want to write your own code? Look for the “favicons” code in `snippet.header.php` of your webcomic’s theme. Delete that to take out all the presets, then add your own HTML.

The code is straightforward:

`<link rel="icon" type="image/png" href="favicon.png" />`
`<link rel="apple-touch-icon" sizes="114x114" href="favicon-114.png"/>`
`<link rel="apple-touch-icon" sizes="144x144" href="favicon-144.png"/>`

Replace the sizes and paths to match the files you upload.

## Best practice

At the time of this writing we recommend uploading at least a 16&times;16 PNG for the standard favicon, plus a 114&times;114 and a 144&times;144 for higher-quality iOS and Android displays. If you upload a larger graphic, say 256 square, then most browsers will fit it into the space they prefer — at the expense of a little bandwidth.

