Flexbox offers a fresh take on webcomic layout
Flexbox offers a fresh take on webcomic layout
Flexbox, a new CSS technique, lets webcomic artists lay out pages with ease.
2017-04-08
Ben Gremillion
Tag1, tag2

![Layout sketches](/blog_content/how-css-flexbox-helps-website-design/wide-page-diagrams.jpg)

Arranging things in a web page or view isn’t straightforward.

Since we abandoned tables for designs, floats and clears have formed the foundation of CSS grid systems, both formal and custom. But they’re not perfect. In fact, they’re cumbersome for interactive web apps or sites with modern, intelligent ways of thinking.

[Flexbox, a new CSS methodology](https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Flexible_Box_Layout/Using_CSS_flexible_boxes), brings us a more versatile layout tool than traditional techniques have. We can arrange HTML in almost any order regardless of its final appearance, and we can fit a wide range of devices and screens.

Adopting Flexbox means sacrificing a years established practice. And it’s worth the effort.

## The basics

Flexbox is a powerful set of CSS properties that can bewilder newcomers. But the basics are easy to grasp and cover most of what we need today.

Within a rectangular container, Flexbox arranges HTML elements along one of two axes: horizontal or vertical, depending on what the design calls for. These elements can run left to right, as with traditional floats and clears — or right to left with a single change in CSS. They can also run from top to bottom, or bottom to top, again with only one line of code in CSS and no changes in HTML.

That’s a huge advantage for designers who want to keep their code orderly while changing their layouts on a whim.

![A Flexbox row](/blog_content/how-css-flexbox-helps-website-design/Image%204-4-17,%2010-10%20AM.png)

![A Flexbox column](/blog_content/how-css-flexbox-helps-website-design/Image%204-4-17,%2010-10%20AM-1.png)


## Shuffling the deck

By aligning elements along an axis, we can push them back and forth, or evenly space them, on the invisible line. For example:

![Flexbox elements at the other end and reversed](/blog_content/how-css-flexbox-helps-website-design/Image%204-4-17,%2010-11%20AM.png)

Elements can move to either end of their container, move to the center, or evenly distribute themselves along a line. And as if that wasn’t enough, they can also change order …

![Rearranged element order](/blog_content/how-css-flexbox-helps-website-design/Image%204-4-17,%2010-12%20AM.png)

… without a single change in HTML. That removes a layer of coding complexity, which helps artists adjust their webcomic sites with less hassle.

## Going deeper

Earlier I mentioned how every set of Flexbox elements fits inside a container. It turns out that those inner elements can also be containers. This plus [media queries](https://studio.uxpin.com/blog/media-queries-responsive-web-design/) lets us create almost any app-like layout imaginable. For example:

- Fixed-position sites with sidebars that collapse on small screens.
- Blog posts that push headers and other metadata to the end of a long document instead of competing for attention at the top.
- Interactive carousels that react on scroll without JavaScript.

## Support

As of 2015, [almost every modern browser works with Flexbox](http://caniuse.com/#search=flexbox). Almost. Internet Explorer 10 and 11 offer some support, excluding more advanced properties like flex-wrap and flex-flow. Today’s versions of Chrome, Firefox, Safari, Opera and Android Browser all recognize and use Flexbox layouts, however, making it a viable alternative to older layout techniques.

## Going forward

We’re experimenting with themes that use Flexbox, and the results are promising. For one thing, we can share theme updates just by sending you new theme.css files. For another, it’s easier to figure out than old floats and clears — if you’re willing to adopt new ways of thinking.
