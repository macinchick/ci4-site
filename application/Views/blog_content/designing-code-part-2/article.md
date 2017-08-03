Designing code, part 2
Designing code, part 2
An experiment: can code be easy to read, semantically correct, and visually appealing? I gave myself 15 days to find out.
2016-09-21
Ben Gremillion
Tag1, tag2


![Designing code](/blog_content/designing-code-part-2/designing-code-2.jpg)

In [part one](/blog/post/designing-code-part-1) I set out to develop a theme that was easy, flexible, and powerful. Here’s how things turned out.

## A problem appears

Now that I had the basic structure, I began to design different looks.

![Flex design screenshots](/blog_content/designing-code-part-2/Flex-design-screenshots.png)

Anything look familiar?

I was using different type families, different colors, different line types — yet, everything looked the same. Sure, they all used the same fundamental code. But they weren’t supposed to *look* like it.

And so I discovered my first mistake. By tying *size* to *layout* and *position* in theme files, I was crimping graphics in tone files. The difference subtle, but the consequences invalidated an entire set of files. I had restricted the theme to a cookie-cutter format.


## Busting the same ’ol

Let’s say you wrote a file in this order:

1. banner
2. navigation
3. comic image
4. blog post

But maybe you decide the comic image should go a little higher on the page. 

To do that, you’d have to copy/paste dozens of lines in HTML into a different spot. Trouble is, if your page is complicated, then finding the right HTML to move is tricky.

Flexbox solves this in an obvious way: everything gets an [order number](https://developer.mozilla.org/en-US/docs/Web/CSS/order). If you want to switch sections #2 and #3, you just change their numbers to 3 and 2. With planning, two lines of code can rearrange an entire layout. Boom, done.

![Controlling order with Flexbox](/blog_content/designing-code-part-2/flexbox-order.png)

As I removed sizes from the layout file, I added CSS code specifically to control the sections’ order. Different themes using the same HTML began to look unique simply because I could, for example, put the ads on the left instead of the right by changing a few numbers.

This is where I began to appreciate BEM notation. Giving things obvious names — names that declared their place in the page’s grand scheme — helped me write down their order. With some refinement, sorting became as easy as 1, 2, 3.

## The final code

On day 15 I reviewed my work. The basic design adapted to a wide range of looks thanks to Flexbox, especially its `order` feature. I’d invented four distinct looks using largely the same HTML, and the graphics were easy to swap out. The code was semantic and accessible. That, plus inline documentation and BEM notation, made it easy to read and edit.

But it wasn’t perfect. The designs didn’t adapt to differently-sized browsers as well as I would have liked. That’s another experiment.

Themes that come with the Grawlix CMS are editable, but take some effort. I set out to make that both easier and more flexible. The result is still experimental, but will work its way into future themes.

## Over to you

Is this code readable? I’m genuinely curious, so if you get the chance, take a look and let me know what you think.

- Is it easy to read?
- Is it easy to customize?
- What prevents you from using this in your work? (It’s cool if you already have your own look — this is just an experiment.)

[Email me](mailto:grawlixcomix@gmail.com) if you’d like to study the code.